<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

/**
 * Interface for defining the behavior of Authentication.
 */
interface BasicAuthCredentials
{
    /**
     * String value for basicAuthUserName.
     */
    public function getBasicAuthUserName(): string;

    /**
     * String value for basicAuthPassword.
     */
    public function getBasicAuthPassword(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $basicAuthUserName The username to use with basic authentication
     * @param string $basicAuthPassword The password to use with basic authentication
     */
    public function equals(string $basicAuthUserName, string $basicAuthPassword): bool;
}
