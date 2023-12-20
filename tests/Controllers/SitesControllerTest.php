<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestSiteFactory;

final class SitesControllerTest extends TestCase
{
    private SitesControllerTestAssertions $assertions;
    private SitesControllerTestData $testData;

    /**
     * @covers \AdvancedBillingLib\Controllers\SitesController::readSite
     */
    public function test_ReadSite_ShouldReturnResponseWithSiteDetails_WhenValidCredentialsProvided(): void
    {
        $response = $this->client->getSitesController()->readSite();

        $this->assertions->assertExpectedSiteDataWereReturned($this->testData->getExpectedSite(), $response->getSite());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\SitesController::readSite
     */
    public function test_ReadSite_ShouldReturn401StatusCode_WhenInvalidCredentialsProvided(): void
    {
        $clientWithInvalidCredentials = $this->client->toBuilder()
            ->basicAuthUserName($this->testData->getInvalidAuthUserName())
            ->basicAuthPassword($this->testData->geInvalidAuthPassword())
            ->build();

        $this->assertions->assertUnauthorizedApiExceptionThrown();
        $clientWithInvalidCredentials->getSitesController()->readSite();
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->assertions = new SitesControllerTestAssertions($this);
        $this->testData = new SitesControllerTestData(new TestSiteFactory());
    }
}
