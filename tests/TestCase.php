<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\AdvancedBillingClientBuilder;
use PHPUnit\Framework\TestCase as PhpUnitTestCase;

class TestCase extends PhpUnitTestCase
{
    protected AdvancedBillingClient $client;

    protected function setUp(): void
    {
        parent::setUp();

        $testConfiguration = new TestConfiguration();
        $this->client = $this->createClient($testConfiguration);
    }

    private function createClient(TestConfiguration $configuration): AdvancedBillingClient
    {
        return AdvancedBillingClientBuilder::init()
            ->basicAuthUserName($configuration->getBasicAuthUserName())
            ->basicAuthPassword($configuration->getBasicAuthPassword())
            ->environment($configuration->getEnvironment())
            ->subdomain($configuration->getSubDomain())
            ->domain($configuration->getDomain())
            ->build();
    }
}
