<?php

class Currency {

    function getCurrencyId()
    {
        $apikey = 'dfc0b806451eb7a22797';

        $url = "https://free.currconv.com/api/v7/currencies?apiKey={$apikey}";
        $json = file_get_contents($url);
        $obj = json_decode($json, true);

        $ar = array_column($obj['results'], 'id');
        return $ar;

    }


    function convertCurrency($amount, $from_currency, $to_currency)
    {
        $apikey = 'dfc0b806451eb7a22797';

        $from_Currency = $from_currency;
        $to_Currency = $to_currency;
        $query =  "{$from_Currency}_{$to_Currency}";


        $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        $obj = json_decode($json, true);

        $val = floatval($obj["$query"]);


        $total = $val * $amount;
        echo $total;
    }
}
