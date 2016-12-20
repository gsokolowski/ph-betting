<?php


use GuzzleHttp as GuzzleHttp;

use Reader\Xml;

use Phalcon\Mvc\Model\Transaction\Manager as TransactionManager;

class WilliamHillController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $client = new GuzzleHttp\Client(['base_uri' => 'http://cachepricefeeds.williamhill.com/']);

        $william = new Xml($client);

        $apiResponse = $william->makeRequest('GET', 'openbet_cdn?action=template&template=getHierarchyByMarketType&classId=1&marketSort=HF&filterBIR=N');

        $json = $william->getResponse($apiResponse);

        $william->saveResponse($json);




        $postId = '--- import Done!';
        $this->view->postId = $postId;
    }
}

