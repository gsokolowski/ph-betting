<?php

namespace Reader;
use Reader\Base as Base;


// concrete class
class Xml extends Base {

    private $client;

    function __construct($client) {

        $this->client = $client;
    }

    public function makeRequest($method, $element) {

        $apiResponse = $this->client->request($method, $element)->getBody()->getContents();

        return $apiResponse;
    }

    public function getResponse($apiResponse) {
        $responseXml = simplexml_load_string($apiResponse, "SimpleXMLElement", LIBXML_NOCDATA);
        $json = json_encode($responseXml);

        return $json;

    }

    public function saveResponse($json) {

        $array = json_decode($json,true);
        $data = array();

        // Save Provider
        $data['category']['name'] = $array['response']['@attributes']['provider'];
        $data['category']['fr_id'] = null;
        $data['category']['type'] = 'root';
        $data['category']['parent_id'] = null;
        $data['category']['maxRepDate'] = null;
        $data['category']['maxRepTime'] = null;

        $lastInsertId = $this->saveCategory($data);

        // Save class attributes
        unset($data);
        $data = array();
        foreach ($array['response']['williamhill']['class']['@attributes'] as $key => $value) {

            if($key == 'id') {

                $data['category']['fr_id'] = $value;
            } else {

                $data['category'][$key] = $value;
            }
            $data['category']['type'] = 'class';
            $data['category']['parent_id'] = $lastInsertId;
        }

        $categoryLastInsertId = $this->saveCategory($data);


        // save class as category
        foreach ($array['response']['williamhill']['class']['type'] as $type) {

            unset($data);
            $data = array();
            foreach ($type['@attributes'] as $key => $value) {

                //echo $key.' '.$value.'<br />';

                if($key == 'id') {

                    $data['type']['fr_id'] = $value;
                } else {

                    $data['type'][$key] = $value;
                }
                $data['type']['category_id'] = $categoryLastInsertId;

            }
            $typeLastInsertId = $this->saveType($data);


            foreach ($type['market'] as $market) {

                unset($data);
                $data = array();
                if(isset ( $market['@attributes'] )) {

                    foreach ($market['@attributes'] as $key => $value) {

                        //echo 'top -- '.$key.' '.$value.'<br />';

                        if ($key == 'id') {

                            $data['market']['fr_id'] = $value;
                        } else {

                            $data['market'][$key] = $value;
                        }
                        $data['market']['type_id'] = $typeLastInsertId;

                    }
                    //print_r($data['market']);
                    $marketLastInsertId = $this->saveMarket($data);

                } else {

                    if( isset($market['id']) ) {

                        $data['market']['fr_id'] = $market['id'];
                        $data['market']['name'] = $market['name'];
                        $data['market']['url'] = $market['url'];
                        $data['market']['date'] = $market['date'];
                        $data['market']['time'] = $market['time'];
                        $data['market']['betTillDate'] = $market['betTillDate'];
                        $data['market']['betTillTime'] = $market['betTillTime'];
                        $data['market']['lastUpdateDate'] = $market['lastUpdateDate'];
                        $data['market']['lastUpdateTime'] = $market['lastUpdateTime'];
                        $data['market']['placeAvailable'] = $market['placeAvailable'];
                        $data['market']['forcastAvailable'] = $market['forcastAvailable'];
                        $data['market']['tricastAvailable'] = $market['tricastAvailable'];
                        $data['market']['eachwayAvailable'] = $market['eachwayAvailable'];
                        $data['market']['cashoutAvailable'] = $market['cashoutAvailable'];
                        $data['market']['startingPriceAvailable'] = $market['startingPriceAvailable'];
                        $data['market']['livePriceAvailable'] = $market['livePriceAvailable'];
                        $data['market']['guarenteedPriceAvailable'] = $market['guarenteedPriceAvailable'];
                        $data['market']['firstPriceAvailable'] = $market['firstPriceAvailable'];
                        $data['market']['type_id'] = $typeLastInsertId;

                        $marketLastInsertId = $this->saveMarket($data);
                    }
                }

                // save participant
                if(isset($market['participant'])) {
                    unset($data);
                    $data = array();
                    foreach ($market['participant'] as $participant) {

                            foreach ($participant['@attributes'] as $key => $value) {

                                if ($key == 'id') {

                                    $data['participant']['fr_id'] = $value;
                                } else {

                                    $data['participant'][$key] = $value;
                                }
                                $data['participant']['market_id'] = $marketLastInsertId;

                            }
                            $this->saveParticipant($data);
                        }
                }
            }
        }
    }
}







































