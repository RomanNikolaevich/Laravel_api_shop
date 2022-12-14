<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\Admin\CurrencyService;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;

class CurrencyController extends Controller
{
    /**
     * Getting the exchange rate for the specified date for our database from external sources
     *
     * @return void
     * @throws GuzzleException
     * @throws \JsonException
     */
    public static function updateRates():void
    {
        app(CurrencyService::class)->updateCurrencies(Carbon::tomorrow());
    }

    /**
     * Test getting the exchange rate for the specified date from our database
     *
     * @return void
     * @throws \Exception
     */
    public static function readRate():void
    {
        app(CurrencyService::class)->getCurrencyRateFromDB(Carbon::now(), 'EUR');
    }
}
