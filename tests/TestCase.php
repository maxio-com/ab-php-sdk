<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\AdvancedBillingClientBuilder;
use AdvancedBillingLib\Authentication\BasicAuthCredentialsBuilder;
use PHPUnit\Framework\TestCase as PhpUnitTestCase;

class TestCase extends PhpUnitTestCase
{
    private const INVALID_AUTH_USER_NAME = 'invalidUserName';
    private const INVALID_AUTH_PASSWORD = 'invalidPassword';

    protected AdvancedBillingClient $client;
    protected TestCleaner $cleaner;

    protected function setUp(): void
    {
        parent::setUp();

        $testConfiguration = new TestConfiguration();
        $this->client = $this->createClient($testConfiguration);
        $this->cleaner = new TestCleaner($this->client);
    }

    private function createClient(TestConfiguration $configuration): AdvancedBillingClient
    {
        return AdvancedBillingClientBuilder::init()
            ->basicAuthCredentials(
                BasicAuthCredentialsBuilder::init(
                    $configuration->getBasicAuthUserName(),
                    $configuration->getBasicAuthPassword()
                )
            )
            ->site($configuration->getSubDomain())
            ->build();
    }

    protected function getUnauthenticatedClient(): AdvancedBillingClient
    {
        return $this->client->toBuilder()
            ->basicAuthCredentials(
                BasicAuthCredentialsBuilder::init(
                    self::INVALID_AUTH_USER_NAME,
                    self::INVALID_AUTH_PASSWORD
                )
            )
            ->build();
    }
}
