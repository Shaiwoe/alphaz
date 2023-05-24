<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Metavers;
use Illuminate\Http\Request;

class MetaversController extends Controller
{
    public function coins()
    {
        $prices = $this->getAPICoins();

        if ( !property_exists($prices, 'data') ) {

            throw new \Exception('Could not load coins');
        }

        $metavers = Metavers::query()
        ->orderBy('created_at', 'ASC')
        ->where('is_active', 1)
        ->paginate(100);

        $coins = [];

        foreach ($metavers as $metaverss) {

            foreach ($prices->data as $price) {

                if ($metaverss->symbol == $price->symbol) {

                    $coin = (object) [
                        'name' => $metaverss->name, 'id' => $metaverss->id, 'slug' => $metaverss->slug, 'icon' => $metaverss->icon, 'symbol' => $metaverss->symbol , 'quote' => $price->quote
                    ];

                    $coins[] = $coin;
                }
            }
        }

        return view('home.metavers.index', compact('coins' , 'metavers'));

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

    public function show(Metavers $metavers, $slug=null)
    {
        $price = $this->getAPICoin($metavers->symbol);


        if ( !property_exists($price, 'data') ) {

            throw new \Exception('Could not load coin');
        }

        $data = (array) $price->data;
        $price = array_shift($data);
        $price = $price[0];

        return view('home.metavers.show', compact('metavers', 'price'));
    }
}
