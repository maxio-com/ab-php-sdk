<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

use AdvancedBillingLib\Authentication\BasicAuthCredentialsBuilder;
use AdvancedBillingLib\Proxy\ProxyConfigurationBuilder;
use CoreInterfaces\Http\HttpConfigurations;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the subdomain for your Advanced Billing site.
     */
    public function getSite(): string;

    /**
     * Get the credentials to use with BasicAuth
     */
    public function getBasicAuthCredentials(): BasicAuthCredentials;

    /**
     * Get the credentials builder instance to update credentials for BasicAuth
     */
    public function getBasicAuthCredentialsBuilder(): ?BasicAuthCredentialsBuilder;

    /**
     * Represents the proxy configurations for API calls.
     */
    public function getProxyConfigurationBuilder(): ProxyConfigurationBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::PRODUCTION): string;
}
