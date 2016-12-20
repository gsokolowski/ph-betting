<?php
namespace Reader;
use Reader\ThirdPartyInterface as ThirdPartyInterface;

use Categories;
use Types;
use Markets;
use Participants;

class Base implements ThirdPartyInterface {

    // extend makeRequest() to  make request to api to get data
    public function makeRequest($method, $element='') {

    }

    // extend getResponse() to read xml and prepare to save to db
    public function getResponse($response) {


    }

    // extend saveResponse() to save response to db
	public function saveResponse($json){

    }


    final public function saveCategory($data) {

        $category = new Categories();

        $category->name = $data['category']['name'];
        $category->type = $data['category']['type'];
        $category->fr_id = $data['category']['fr_id'];
        $category->parent_id = $data['category']['parent_id'];
        $category->maxRepDate = $data['category']['maxRepDate'];
        $category->maxRepTime = $data['category']['maxRepTime'];

        if ($category->save()) {
            return $category->id;

        } else {
            foreach ($category->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "index",
                'action' => 'somethingGoneWrongAction'
            ]);

            return;
        }

    }



    final public function saveType($data) {

        $type = new Types();

        $type->fr_id = $data['type']['fr_id'];
        $type->name = $data['type']['name'];
        $type->url = $data['type']['url'];
        $type->category_id = $data['type']['category_id'];
        $type->lastUpdateDate = $data['type']['lastUpdateDate'];
        $type->lastUpdateTime = $data['type']['lastUpdateTime'];


        if ($type->save()) {
            return $type->id;

        } else {
            foreach ($type->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "index",
                'action' => 'somethingGoneWrongAction'
            ]);

            return;
        }

    }


    final public function saveMarket($data) {

        $market = new Markets();

        $market->fr_id = $data['market']['fr_id'];
        $market->name = $data['market']['name'];
        $market->type = $data['market']['url'];
        $market->date = $data['market']['date'];
        $market->time = $data['market']['time'];
        $market->betTillDate = $data['market']['betTillDate'];
        $market->betTillTime = $data['market']['betTillTime'];
        $market->lastUpdateDate = $data['market']['lastUpdateDate'];
        $market->lastUpdateTime = $data['market']['lastUpdateTime'];
        $market->placeAvailable = $data['market']['placeAvailable'];
        $market->forcastAvailable = $data['market']['forcastAvailable'];
        $market->tricastAvailable = $data['market']['tricastAvailable'];
        $market->eachwayAvailable = $data['market']['eachwayAvailable'];
        $market->cashoutAvailable = $data['market']['cashoutAvailable'];
        $market->startingPriceAvailable = $data['market']['startingPriceAvailable'];
        $market->livePriceAvailable = $data['market']['livePriceAvailable'];
        $market->guarenteedPriceAvailable = $data['market']['guarenteedPriceAvailable'];
        $market->firstPriceAvailable = $data['market']['firstPriceAvailable'];
        $market->type_id = $data['market']['type_id'];


        if ($market->save()) {
            return $market->id;

        } else {
            foreach ($market->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "index",
                'action' => 'somethingGoneWrongAction'
            ]);

            return;
        }

    }


    final public function saveParticipant($data) {

        $participant = new Participants();

        $participant->fr_id = $data['participant']['fr_id'];
        $participant->name = $data['participant']['name'];
        $participant->odds = $data['participant']['odds'];
        $participant->oddsDecimal = $data['participant']['oddsDecimal'];
        $participant->lastUpdateDate = $data['participant']['lastUpdateDate'];
        $participant->lastUpdateTime = $data['participant']['lastUpdateTime'];
        $participant->handicap = $data['participant']['handicap'];
        $participant->market_id = $data['participant']['market_id'];


        if ($participant->save()) {
            return $participant->id;

        } else {
            foreach ($participant->getMessages() as $message) {
                $this->flash->error($message);
            }

            $this->dispatcher->forward([
                'controller' => "index",
                'action' => 'somethingGoneWrongAction'
            ]);

            return;
        }
    }

}
