<?php

namespace CryptocurrencyInfo;

 /**
  * Class CryptocurrencyInfo
  */
class CryptocurrencyInfo
{
    const COIN_GECKO_ROUTE = 'https://api.coingecko.com/api/v3/coins/';

    /**
     * @param string $cryptoId
     * @return array
     */
    public function getInfoById(string $cryptoId = ''): array
    {   
        $responseArray = json_decode(
            file_get_contents(self::COIN_GECKO_ROUTE.$cryptoId.'?localization=false'), true);
        if (empty($responseArray)) {
            $responseArray = ["Error" => "CONNECTION FAIL: ".self::COIN_GECKO_ROUTE];
        }
        
        return $responseArray;
    }
}