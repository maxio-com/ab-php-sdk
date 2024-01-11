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
    private $config = [];

    /**
     * @phan-suppress PhanEmptyPrivateMethod
     */
    private function __construct()
    {
    }

    public static function init(): self
    {
        return new self();
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
