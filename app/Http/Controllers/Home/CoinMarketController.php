<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class CoinMarketController extends Controller
{
    public function list()
    {
        $price = $this->getUSDTPrice();

        // Sell price
        $sellPrice = array_get($price, 'stats.usdt-rls.bestSell');

        // List coins
        $response = $this->getMarketCoins();

        // Check response

        $coins = [];



        foreach ($response->data as $coin) {

            $coins[] = (object) ['name' => $coin->name, 'symbol' => $coin->symbol, 'price' => $coin->quote->USD->price, 'price_rls' => ($coin->quote->USD->price * $sellPrice), 'volume_24h' => $coin->quote->USD->volume_24h, 'percent_change_1h' => $coin->quote->USD->percent_change_1h, 'percent_change_24h' => $coin->quote->USD->percent_change_24h, 'percent_change_7d' => $coin->quote->USD->percent_change_7d, 'market_cap' => $coin->quote->USD->market_cap];
        }

        return view('home.coins.index', compact('coins'));
    }

    public function show($symbol)
    {
        $price = $this->getUSDTPrice();

        // Sell price
        $sellPrice = array_get($price, 'stats.usdt-rls.bestSell');

        // List coins
        $response = $this->getMarketCoin($symbol);

        // Check response

        $coin = [];

        foreach ($response->data as $coin) {

            $coin = (object) ['name' => $coin->name, 'symbol' => $coin->symbol, 'price' => $coin->quote->USD->price, 'price_rls' => ($coin->quote->USD->price * $sellPrice), 'volume_24h' => $coin->quote->USD->volume_24h, 'percent_change_1h' => $coin->quote->USD->percent_change_1h, 'percent_change_24h' => $coin->quote->USD->percent_change_24h, 'percent_change_7d' => $coin->quote->USD->percent_change_7d, 'market_cap' => $coin->quote->USD->market_cap];
        }

        return view('home.coins.show', compact('coin'));
    }

    protected function getUSDTPrice()
    {
        $address = [
            'https://api.nobitex.ir', 'market', 'stats?srcCurrency=usdt&dstCurrency=rls'
        ];

        $response = \PG\Request\Request::instance()
            ->setAddress($address)
            ->getResponse()
            ->asArray();

        return $response;
    }

    protected function getMarketCoins()
    {
        $address = [
            'https://pro-api.coinmarketcap.com', 'v1', 'cryptocurrency', 'listings', 'latest?start=1&limit=400'
        ];

        $headers = [
            'X-CMC_PRO_API_KEY' => '0af4288d-7634-49c9-9338-8a7798e06d5c'
        ];

        $response = \PG\Request\Request::instance()
            ->setAddress($address)
            ->setHeaders($headers)
            ->getResponse()
            ->asObject();

        return $response;
    }

    protected function getMarketCoin($symbol)
    {
        $address = [
            'https://pro-api.coinmarketcap.com', 'v1', 'cryptocurrency', 'quotes', "latest?symbol={$symbol}"
        ];

        $headers = [
            'X-CMC_PRO_API_KEY' => '0af4288d-7634-49c9-9338-8a7798e06d5c'
        ];

        $response = \PG\Request\Request::instance()
            ->setAddress($address)
            ->setHeaders($headers)
            ->getResponse()
            ->asObject();

        return $response;
    }
}
