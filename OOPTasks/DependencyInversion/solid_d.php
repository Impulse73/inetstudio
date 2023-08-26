<?php

interface IXMLHTTPRequestService
{
    public function getService();

    public function request($url, $method, $options = null);

}

class XMLHttpService implements IXMLHTTPRequestService
{

    public function getService()
    {
        // TODO: Implement getService() method.
    }

    public function request($url, $method, $options = null)
    {
        // TODO: Implement request() method.
    }
}

class Http {
    private $service;

    public function __construct(IXMLHTTPRequestService $service) {
        $this->service = $service->getService();
    }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'GET');
    }
}