<?php
namespace Reader;

interface ThirdPartyInterface {
    public function makeRequest($method, $element);
    public function getResponse($response);
    public function saveResponse($array);
}
