<?php

namespace App\Http\Controllers\Home;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;


class CoinMarketController extends Controller
{
    public function list($page = 1)
    {
        $controller = $this;

        $price = Cache::remember('getUSDTPrice', 3600, function() use($controller) {

            return $controller->getUSDTPrice();
        });

        // Last price
        $lastPrice = array_get($price, 'last');

        // List coins
        $response = Cache::remember('getMarketCoins', 3600, function() use($controller) {

            return $controller->getMarketCoins();
        });

        // Check response

        $coins = [];


        foreach ($response->data as $coin) {

            $coins[] = (object) ['name' => $coin->name, 'symbol' => $coin->symbol, 'price' => $coin->quote->USD->price, 'price_ir' => ($coin->quote->USD->price * $lastPrice), 'volume_24h' => $coin->quote->USD->volume_24h, 'percent_change_1h' => $coin->quote->USD->percent_change_1h, 'percent_change_24h' => $coin->quote->USD->percent_change_24h, 'percent_change_7d' => $coin->quote->USD->percent_change_7d, 'market_cap' => $coin->quote->USD->market_cap];
        }

        // Pagination
        $data = array_chunk($coins, 60, true);

        $dataPage = (intval($page) - 1);

        if (!isset($data[$dataPage])) {

            $dataPage = 0; // First page
        }

        $data = $data[$dataPage];

        $count = count($coins);

        $endPage = $page + 10;

        if ($endPage > $count) {
            $endPage = $count;
        }

        $pages = intval($count / 60);
        $pages = range($page, $endPage);

        return view('home.coins.index', compact('coins', 'data', 'page', 'pages'));
    }

    public function show($symbol)
    {
        $controller = $this;

        $price = Cache::remember('getUSDTPrice', 3600, function() use($controller) {

            return $controller->getUSDTPrice();
        });

        // Last price
        $lastPrice = array_get($price, 'last');

        // List coins
        $response = $this->getMarketCoin($symbol);

        // Check response

        $coin = [];

        foreach ($response->data as $coin) {

            $coin = (object) ['name' => $coin->name, 'symbol' => $coin->symbol, 'price' => $coin->quote->USD->price, 'price_ir' => ($coin->quote->USD->price * $lastPrice), 'volume_24h' => $coin->quote->USD->volume_24h, 'percent_change_1h' => $coin->quote->USD->percent_change_1h, 'percent_change_24h' => $coin->quote->USD->percent_change_24h, 'percent_change_7d' => $coin->quote->USD->percent_change_7d, 'market_cap' => $coin->quote->USD->market_cap];
        }
        
        // Coin info
        $info = $this->getMarketCoinInfo($symbol);

        $articles = Article::orderBy('updated_at', 'desc')->where('is_active', 1)->take(4)->get();

        return view('home.coins.show', compact('coin', 'articles', 'info'));
    }

    protected function getUSDTPrice()
    {
        $address = [
            'https://api.exir.io', 'v2', 'ticker?symbol=usdt-irt'
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
            'https://pro-api.coinmarketcap.com', 'v1', 'cryptocurrency', 'listings', 'latest?start=1&limit=2500'
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
    
    protected function getMarketCoinInfo($symbol)
    {
        $address = [
            'https://pro-api.coinmarketcap.com', 'v2', 'cryptocurrency', "info?symbol={$symbol}"
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
