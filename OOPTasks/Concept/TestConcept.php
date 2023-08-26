<?php

namespace OOPTasks\Concept;

class TestConcept
{
    public function doAction() {
        $credentials = $this->getAllCredentialSources();
        $concept = new Concept($credentials);
        $userData = $concept->getUserData();
    }

    /**
     * @return CredentialsInterface[]
     */
    protected function getAllCredentialSources() {
        $credentials[] = new CredentialDB();
//        $credentials[] = new CredentialRedis();

        return $credentials;
    }
}