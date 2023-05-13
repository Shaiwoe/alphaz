<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Market;
use Illuminate\Http\Request;

class MarketController extends Controller
{
    public function coins()
    {
        $prices = $this->getAPICoins();

        if ( !property_exists($prices, 'data') ) {

            throw new \Exception('Could not load coins');
        }

        $markets = Market::query()
        ->orderBy('created_at', 'ASC')
        ->where('is_active', 1)
        ->paginate(100);

        $coins = [];

        foreach ($markets as $market) {

            foreach ($prices->data as $price) {

                if ($market->symbol == $price->symbol) {

                    $coin = (object) [
                        'name' => $market->name, 'icon' => $market->icon, 'symbol' => $market->symbol , 'quote' => $price->quote
                    ];

                    $coins[] = $coin;
                }
            }
        }

        return view('home.prices.index', compact('coins' , 'markets'));
    }

    protected function getAPICoins()
    {
        $address = [
            'https://pro-api.coinmarketcap.com', 'v1', 'cryptocurrency', 'listings', 'latest'
        ];

        $headers = [
            'X-CMC_PRO_API_KEY' => '0af4288d-7634-49c9-9338-8a7798e06d5c'
        ];

        $response = \PG\Request\Request::instance()
            ->setAddress($address)
            ->setHeaders($headers)
            ->getResponse()->asObject();

        return $response;
    }

    protected function getAPICoin($symbol)
    {
        $address = [
            'https://pro-api.coinmarketcap.com', 'v2', 'cryptocurrency', 'quotes', "latest?symbol={$symbol}"
        ];

        $headers = [
            'X-CMC_PRO_API_KEY' => '0af4288d-7634-49c9-9338-8a7798e06d5c'
        ];

        $response = \PG\Request\Request::instance()
            ->setAddress($address)
            ->setHeaders($headers)
            ->getResponse()->asObject();

        return $response;
    }

    public function show(Market $market)
    {
        $price = $this->getAPICoin($market->symbol);

        if ( !property_exists($price, 'data') ) {

            throw new \Exception('Could not load coin');
        }

        return view('home.prices.show', compact('market', 'price'));
    }
}
