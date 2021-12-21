<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class Accident extends Model
{
    // private $_client;

    // public function __construct()
    // {
    //     $this->_client = new Client([
    //         'base_uri' => 'https://stoplight.io/mocks/lazaaq/sik3rs/21866705/api/'
    //     ]);
    // }

    // public function getAllAccident(){
    //     $response = $this->_client->request('GET', 'accident');
    //     $result = json_decode($response->getBody()->getContents(), true);
    //     return $result['accident'];
    // }
}
