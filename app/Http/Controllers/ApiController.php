<?php

namespace App\Http\Controllers;

use App\Models\Market;

class ApiController extends Controller
{
    public function cron()
    {
        // Run forever
        set_time_limit(0);

        // Find prices
        $entity = \PG\Binance\Entity::instance()
            ->setAddress('https://api.binance.com');

        $request = new \PG\Binance\Inventory\Request($entity);

        $response = $request->response();

        $prices = $response->data();

        $btc = new \stdClass;
        $btc->symbol = 'BTCUSDT';
        $btc->price = 0.22;

        $prices = [
            $btc
        ];

        // Find markets
        $markets = Market::query()->get();

        foreach ($markets as $market) {

            sleep(2); // Reduce pressure

            foreach ($prices as $price) {

                sleep(2); // Reduce pressure

                if ($price->symbol == $market->symbol) {

                    $market->price_usdt = $price->price;
                    $market->save();
                }
            }
        }
    }

    public function prices()
    {
        $entity = \PG\Binance\Entity::instance()
            ->setAddress('https://api.binance.com');

        $request = new \PG\Binance\Inventory\Request($entity);

        $response = $request->response();

        $data = $response->data();

        if ($data) {
            return compact('data');
        }
    }

    public function history($symbol)
    {
        $entity = \PG\Binance\Entity::instance()
            ->setAddress('https://api.binance.com')
            ->setSymbol($symbol);

        $request = new \PG\Binance\History\Request($entity);

        $response = $request->response();

        $data = $response->data();

        if ($data) {
            return compact('data');
        }
    }

    public function candle($symbol)
    {
        $entity = \PG\Binance\Entity::instance()
            ->setAddress('https://api.binance.com')
            ->setSymbol($symbol)
            ->setInterval('1h');

        $request = new \PG\Binance\Candle\Request($entity);

        $response = $request->response();

        $data = $response->data();

        if ($data) {
            return compact('data');
        }
    }
}
