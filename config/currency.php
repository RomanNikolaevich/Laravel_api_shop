<?php

return [
    /**
     * URL for obtaining the exchange rate of the National Bank of Ukraine
     * for example:
     * 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?valcode=USD&date=20200302&json',
     */
    'api_url' => 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange',


    /**
     * list of currencies to write to the database
     */
    'codes' => [
        'EUR',
        'USD',
        'UAH',
    ],

    /**
     * main currency for calculation
     */
    'default_code' => 'UAH',

    /**
     * coefficient for converting from integer to float
     */
    'ratio' => 100000000,

    /**
     * rounding to significant numbers
     */
    'precision' => 3,
];
