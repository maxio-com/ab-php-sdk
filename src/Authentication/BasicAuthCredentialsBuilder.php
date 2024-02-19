<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing BasicAuth security credentials.
 */
class BasicAuthCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for BasicAuthCredentialsBuilder
     *
     * @param string $username
     * @param string $password
     */
    public static function init(string $username, string $password): self
    {
        return new self(['basicAuthUserName' => $username, 'basicAuthPassword' => $password]);
    }

    /**
     * Setter for BasicAuthUserName.
     *
     * @param string $username
     *
     * @return $this
     */
    public function username(string $username): self
    {
        $this->config['basicAuthUserName'] = $username;
        return $this;
    }

    /**
     * Setter for BasicAuthPassword.
     *
     * @param string $password
     *
     * @return $this
     */
    public function password(string $password): self
    {
        $this->config['basicAuthPassword'] = $password;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
