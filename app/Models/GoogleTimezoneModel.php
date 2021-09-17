<?php

namespace App\Models;

class GoogleTimezoneModel
{
    private const GEOCODE_TIMEZONE_API_KEY = "";

    private const GEOCODE_API_BASE_URL = "https://maps.googleapis.com/maps/api/geocode/json";
    private const TIMEZONE_API_BASE_URL = "https://maps.googleapis.com/maps/api/timezone/json";

    public function getGeocodeByLocality($city, $region, $country){
        $addressParts = [];

        if(!empty($city)){
            $addressParts[] = $city;
        }

        if(!empty($region)){
            $addressParts[] = $region;
        }

        if(!empty($country)){
            $addressParts[] = $country;
        }

        $address = implode(",", $addressParts);

        $params = [
            "address" => $address,
            "key" => self::GEOCODE_TIMEZONE_API_KEY
        ];

        $curlParam = [
            "request_url" => self::GEOCODE_API_BASE_URL,
            "query_string" => http_build_query($params)
        ];

        do{
            $retry = false;

            $geocodeResult = $this->doRequest($curlParam, "GET");

            if($geocodeResult == null) {
                $retry = true;
            }
        } while($retry);

        //dump("Geocode url: " . $geocodeUrl);

        if($geocodeResult["status"] === "OK"){
            return $geocodeResult["results"][0];
        } else{
            return null;
        }
    }

    public function getTimezoneByLatLng($lat, $lng){
        $params = [
            "location" => $lat . "," . $lng,
            "timestamp" => time(),
            "key" => self::GEOCODE_TIMEZONE_API_KEY
        ];

        $curlParam = [
            "request_url" => self::TIMEZONE_API_BASE_URL,
            "query_string" => http_build_query($params)
        ];

        do {
            $retry = false;

            $timezoneResult = $this->doRequest($curlParam, "GET");

            if($timezoneResult == null) {
                $retry = true;
            }
        } while($retry);

        //dump("Timezone url: " . $timezoneUrl);

        if($timezoneResult["status"] === "OK"){
            return $timezoneResult;
        } else{
            return null;
        }
    }

    public function getTimezoneByLocality($city, $region, $country){
        $geocode = $this->getGeocodeByLocality($city, $region, $country);

        if($geocode != null) {
            $lat = $geocode["geometry"]["location"]["lat"];
            $lng = $geocode["geometry"]["location"]["lng"];

            $timezone = $this->getTimezoneByLatLng($lat, $lng);

            if($timezone != null){
                return $timezone["timeZoneId"];
            }
        }

        return null;
    }

    private function doRequest($curlparam, $method){
        $ch = curl_init();

        if ($method == 'POST') {
            curl_setopt($ch, CURLOPT_URL, $curlparam["request_url"]);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($curlparam["fields"]));
            curl_setopt($ch, CURLOPT_POST, true);
        } elseif ($method == 'GET') {
            curl_setopt($ch, CURLOPT_URL, $curlparam["request_url"] . "?" . $curlparam["query_string"]);
            curl_setopt($ch, CURLOPT_POST, false);
        }

        curl_setopt($ch, CURLOPT_PORT, 443);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $response = curl_exec($ch);

        $curl["info"]        = curl_getinfo($ch);
        $curl["error_nr"]    = curl_errno($ch);
        $curl["error_text"]  = curl_error($ch);
        $curl["http_status"] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return json_decode($response, true);
    }
}
