<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Authentication;

use Core\Authentication\CoreAuth;
use AdvancedBillingLib\ConfigurationDefaults;
use Core\Request\Parameters\HeaderParam;
use Core\Utils\CoreHelper;
use AdvancedBillingLib\BasicAuthCredentials;

/**
 * Utility class for authorization and token management.
 */
class BasicAuthManager extends CoreAuth implements BasicAuthCredentials
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct(HeaderParam::init(
            'Authorization',
            CoreHelper::getBasicAuthEncodedString($this->getBasicAuthUserName(), $this->getBasicAuthPassword())
        )->requiredNonEmpty());
    }

    /**
     * String value for basicAuthUserName.
     */
    public function getBasicAuthUserName(): string
    {
        return $this->config['basicAuthUserName'] ?? ConfigurationDefaults::BASIC_AUTH_USER_NAME;
    }

    /**
     * String value for basicAuthPassword.
     */
    public function getBasicAuthPassword(): string
    {
        return $this->config['basicAuthPassword'] ?? ConfigurationDefaults::BASIC_AUTH_PASSWORD;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $basicAuthUserName The username to use with basic authentication
     * @param string $basicAuthPassword The password to use with basic authentication
     */
    public function equals(string $basicAuthUserName, string $basicAuthPassword): bool
    {
        return $basicAuthUserName == $this->getBasicAuthUserName() &&
            $basicAuthPassword == $this->getBasicAuthPassword();
    }
}
