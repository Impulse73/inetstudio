<?php

namespace OOPTasks\Concept;

interface CredentialsInterface extends \Serializable
{
    public function __construct();

    /**
     * @return string
     */
    public function getAccessKeyId();

    /**
     * @return string
     */
    public function getSecretKey();

    /**
     * @return string|null
     */
    public function getSecurityToken();

    /**
     * @return int|null
     */
    public function getExpiration();

    /**
     * @return self
     */
    public function setAccessKeyId($key);

    /**
     * @return CredentialsInterface
     */
    public function setSecretKey($secret);

    /**
     * @return self
     */
    public function setSecurityToken($token);

    /**
     * @return self
     */
    public function setExpiration($timestamp);

    /**
     * @return bool
     */
    public function isExpired();
}
