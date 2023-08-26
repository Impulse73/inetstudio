<?php

namespace OOPTasks\Concept;

use OOPTasks\Concept\CredentialsInterface;

class Concept
{
    private $client;

    /**
     * @var CredentialsInterface Wrapped credentials object
     */
    protected $credentials;

    /**
     * @param CredentialsInterface[] $credentials
     */
    public function __construct($credentials)
    {
        $this->client = new \GuzzleHttp\Client();
        $this->credentials = $credentials;
    }

    public function getUserData()
    {
        $params = [
            'auth' => ['user', 'pass'],
            'token' => $this->getSecretKeyFromCredentials()
        ];

        $request = new \Request('GET', 'https://api.method', $params);
        $promise = $this->client->sendAsync($request)->then(function ($response) {
            $result = $response->getBody();
        });

        $promise->wait();
    }

    protected function getSecretKeyFromCredentials() {
        foreach ($this->credentials as $credential) {
            /** @var CredentialsInterface$credential */
            if ($credential->getSecretKey() && !$credential->isExpired()) {
                return $credential;
            }
        }
    }
}
