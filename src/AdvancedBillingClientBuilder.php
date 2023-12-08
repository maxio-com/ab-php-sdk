<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

use Core\Types\Sdk\CoreCallback;
use Core\Utils\CoreHelper;

class AdvancedBillingClientBuilder
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

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }

    public function timeout(int $timeout): self
    {
        $this->config['timeout'] = $timeout;
        return $this;
    }

    public function enableRetries(bool $enableRetries): self
    {
        $this->config['enableRetries'] = $enableRetries;
        return $this;
    }

    public function numberOfRetries(int $numberOfRetries): self
    {
        $this->config['numberOfRetries'] = $numberOfRetries;
        return $this;
    }

    public function retryInterval(float $retryInterval): self
    {
        $this->config['retryInterval'] = $retryInterval;
        return $this;
    }

    public function backOffFactor(float $backOffFactor): self
    {
        $this->config['backOffFactor'] = $backOffFactor;
        return $this;
    }

    public function maximumRetryWaitTime(int $maximumRetryWaitTime): self
    {
        $this->config['maximumRetryWaitTime'] = $maximumRetryWaitTime;
        return $this;
    }

    public function retryOnTimeout(bool $retryOnTimeout): self
    {
        $this->config['retryOnTimeout'] = $retryOnTimeout;
        return $this;
    }

    /**
     * @param int[] $httpStatusCodesToRetry
     *
     * @return $this
     */
    public function httpStatusCodesToRetry(array $httpStatusCodesToRetry): self
    {
        $this->config['httpStatusCodesToRetry'] = $httpStatusCodesToRetry;
        return $this;
    }

    /**
     * @param string[] $httpMethodsToRetry
     *
     * @return $this
     */
    public function httpMethodsToRetry(array $httpMethodsToRetry): self
    {
        $this->config['httpMethodsToRetry'] = $httpMethodsToRetry;
        return $this;
    }

    public function environment(string $environment): self
    {
        $this->config['environment'] = $environment;
        return $this;
    }

    public function subdomain(string $subdomain): self
    {
        $this->config['subdomain'] = $subdomain;
        return $this;
    }

    public function domain(string $domain): self
    {
        $this->config['domain'] = $domain;
        return $this;
    }

    public function basicAuthUserName(string $basicAuthUserName): self
    {
        $this->config['basicAuthUserName'] = $basicAuthUserName;
        return $this;
    }

    public function basicAuthPassword(string $basicAuthPassword): self
    {
        $this->config['basicAuthPassword'] = $basicAuthPassword;
        return $this;
    }

    public function httpCallback($httpCallback): self
    {
        if (!$httpCallback instanceof CoreCallback) {
            return $this;
        }
        $this->config['httpCallback'] = $httpCallback;
        return $this;
    }

    public function build(): AdvancedBillingClient
    {
        return new AdvancedBillingClient($this->config);
    }
}
