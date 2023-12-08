<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

/**
 * Default values for the configuration parameters of the client.
 */
class ConfigurationDefaults
{
    public const TIMEOUT = 30;

    public const ENABLE_RETRIES = false;

    public const NUMBER_OF_RETRIES = 0;

    public const RETRY_INTERVAL = 1;

    public const BACK_OFF_FACTOR = 2;

    public const MAXIMUM_RETRY_WAIT_TIME = 0;

    public const RETRY_ON_TIMEOUT = true;

    public const HTTP_STATUS_CODES_TO_RETRY = [408, 413, 429, 500, 502, 503, 504, 521, 522, 524];

    public const HTTP_METHODS_TO_RETRY = ['GET', 'PUT'];

    public const ENVIRONMENT = Environment::PRODUCTION;

    public const SUBDOMAIN = 'subdomain';

    public const DOMAIN = 'chargify.com';

    public const BASIC_AUTH_USER_NAME = '';

    public const BASIC_AUTH_PASSWORD = '';

    /**
     * @var array Associative list of all default configurations
     */
    public const _ALL = [
        'timeout' => self::TIMEOUT,
        'enableRetries' => self::ENABLE_RETRIES,
        'numberOfRetries' => self::NUMBER_OF_RETRIES,
        'retryInterval' => self::RETRY_INTERVAL,
        'backOffFactor' => self::BACK_OFF_FACTOR,
        'maximumRetryWaitTime' => self::MAXIMUM_RETRY_WAIT_TIME,
        'retryOnTimeout' => self::RETRY_ON_TIMEOUT,
        'httpStatusCodesToRetry' => self::HTTP_STATUS_CODES_TO_RETRY,
        'httpMethodsToRetry' => self::HTTP_METHODS_TO_RETRY,
        'environment' => self::ENVIRONMENT,
        'subdomain' => self::SUBDOMAIN,
        'domain' => self::DOMAIN,
        'basicAuthUserName' => self::BASIC_AUTH_USER_NAME,
        'basicAuthPassword' => self::BASIC_AUTH_PASSWORD
    ];
}
