<?php
namespace Reader;
use Reader\Base as Base;


// concrete class
class Json extends Base {


    private $client;

    function __construct($client) {

        $this->client = $client;
    }


    public function makeRequest($method, $element='') {

//        $json_string = 'http://www.domain.com/jsondata.json';
//        $apiResponse = $this->client->request($method, $element);
//        return $apiResponse;
    }

    public function getResponse($apiResponse) {
//        $json = file_get_contents($apiResponse);
//        return $json;
    }

    public function saveResponse($json) {

        $array = json_decode($json, true);


        // .. implement the rest for JSON
    }

}

