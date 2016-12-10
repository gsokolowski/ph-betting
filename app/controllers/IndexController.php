<?php

use GuzzleHttp as GuzzleHttp;

use Reader\WilliamXml;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $client = new GuzzleHttp\Client(['base_uri' => 'http://cachepricefeeds.williamhill.com/']);

        // dependency injection
        $wiliam = new WilliamXml($client);

        //$apiResponse = $wiliam->makeRequest('GET', '/sqlrest/CUSTOMER/18/');
        $apiResponse = $wiliam->makeRequest('GET', 'openbet_cdn?action=template&template=getHierarchyByMarketType&classId=1&marketSort=HF&filterBIR=N');


        $arr = $wiliam->processResponse($apiResponse);

        print_r($arr);

        die('dasda');



        $postId = 'Dupa';
        $postId2 = 'Dupa';

        $data = array(
                    1    => "a",
                    2  => "b",
                    3  => "c",
                    5 => "d",
                );

        $this->view->postId = $postId;
        $this->view->data = $data;
        $this->view->client = $client;


    }

}

