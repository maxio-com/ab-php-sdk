<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

use Core\Authentication\CoreAuth;
use Core\Request\Parameters\HeaderParam;

/**
 * Utility class for authorization and token management.
 */
class BasicAuthManager extends CoreAuth implements BasicAuthCredentials
{
    private $basicAuthUserName;

    private $basicAuthPassword;

    /**
     * Returns an instance of this class.
     *
     * @param string $basicAuthUserName The username to use with basic authentication
     * @param string $basicAuthPassword The password to use with basic authentication
     */
    public function __construct(string $basicAuthUserName, string $basicAuthPassword)
    {
        parent::__construct(
            HeaderParam::init('Authorization', 'Basic ' . base64_encode("$basicAuthUserName:$basicAuthPassword"))
                ->required()
        );
        $this->basicAuthUserName = $basicAuthUserName;
        $this->basicAuthPassword = $basicAuthPassword;
    }

    /**
     * String value for basicAuthUserName.
     */
    public function getBasicAuthUserName(): string
    {
        return $this->basicAuthUserName;
    }

    /**
     * String value for basicAuthPassword.
     */
    public function getBasicAuthPassword(): string
    {
        return $this->basicAuthPassword;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $basicAuthUserName The username to use with basic authentication
     * @param string $basicAuthPassword The password to use with basic authentication
     */
    public function equals(string $basicAuthUserName, string $basicAuthPassword): bool
    {
        return $basicAuthUserName == $this->basicAuthUserName &&
            $basicAuthPassword == $this->basicAuthPassword;
    }
}
