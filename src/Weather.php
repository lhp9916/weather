<?php

namespace Lhp9916\Weather;


use GuzzleHttp\Client;

class Weather
{
    protected $key;
    protected $guzzleOptions = [];

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function getHttpClient()
    {
        return new Client($this->guzzleOptions);
    }

    public function setGuzzleOptions(array $options)
    {
        $this->guzzleOptions = $options;
    }

    public function getWeather($city, string $type = 'base', string $format = 'json')
    {
        //todo
    }
}