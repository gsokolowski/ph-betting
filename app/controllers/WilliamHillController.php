<?php


use GuzzleHttp as GuzzleHttp;

use Reader\WilliamXml;

class WilliamHillController extends \Phalcon\Mvc\Controller
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




        /* Teraz juz masz dzialajace interfacy i wszystko wiec
        zrob ten xml parsing i wepelij wszystko do modelu phalconowego i wysli do db.

        zaloz tabele albo kilka tabel w db

        Zrob jakies male cos na start wepnij do modelu i zapisz a pozniej zrobisz reszte

        Zrob tez cos z jsonem tak zeby json mzna tam wpinac rozniez - pomysl on nazwenictwie na koniec
        Zamiast Reader nazwij to moze ApiReader

        Ale ogolnie stroktore masz ok

        Teraz model w phalconie i zaladuj dane do modela i zapiszesz wszystko w db

*/
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

