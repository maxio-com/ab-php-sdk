<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;

final class CustomersControllerTest extends TestCase
{
    private CustomersControllerTestData $testData;
    private CustomersControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::createCustomer
     */
    public function test_CreateCustomer_ShouldCreateCustomer_WhenAllDataAreUnique(): void
    {
        $response = $this->client
            ->getCustomersController()
            ->createCustomer($this->testData->getCreateCustomerRequest());
        $customer = $response->getCustomer();

        $this->assertions->assertExpectedCustomerCreated(
            $this->testData->getExpectedCustomer(
                $customer->getId(),
                $customer->getCreatedAt(),
                $customer->getUpdatedAt()
            ),
            $customer
        );

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::createCustomer
     */
    public function test_CreateCustomer_ShouldThrowException_WhenCustomerAlreadyExists(): void
    {
        $request = $this->testData->getCreateCustomerRequest();
        $customer = $this->client
            ->getCustomersController()
            ->createCustomer($request)->getCustomer();

        $this->assertions->assertExceptionWasThrown();
        $this->client
            ->getCustomersController()
            ->createCustomer($request);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    public function test()
    {
        $this->client->getSitesController()->clearSite();
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CustomersControllerTestData(new TestCustomerRequestFactory(), new TestCustomerFactory());
        $this->assertions = new CustomersControllerTestAssertions($this);
    }
}
