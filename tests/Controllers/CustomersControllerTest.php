<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerResponseFactory;

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
            ->createCustomer($this->testData->createRequest());
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
     * @covers \AdvancedBillingLib\Controllers\CustomersController::readCustomer
     */
    public function test_ReadCustomer_ShouldReturnCustomer_WhenCustomerExists(): void
    {
        $request = $this->testData->createRequest();
        $customer = $this->client
            ->getCustomersController()
            ->createCustomer($request)
            ->getCustomer();

        $response = $this->client
            ->getCustomersController()
            ->readCustomer($customer->getId());

        $this->assertions->assertExpectedCustomerWasReturned($customer, $response->getCustomer());

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::readCustomer
     */
    public function test_ReadCustomer_ShouldThrow404StatusCodeException_WhenCustomerDoesNotExists(): void
    {
        $this->assertions->assertCustomerNotFound();
        $this->client
            ->getCustomersController()
            ->readCustomer($this->testData->getNotExistingCustomerId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::listCustomers
     */
    public function test_ListCustomers_ShouldReturnListWithCreatedCustomer_WhenCustomerExists(): void
    {
        $customer = $this->client
            ->getCustomersController()
            ->createCustomer($this->testData->createRequest())
            ->getCustomer();

        $response = $this->client
            ->getCustomersController()
            ->listCustomers($this->testData->getEmptyListCustomersParametersArray());

        $this->assertions->assertCustomersReturned($this->testData->getCustomersListResponse($customer), $response);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CustomersControllerTestData(
            new TestCustomerRequestFactory(),
            new TestCustomerFactory(),
            new TestCustomerResponseFactory()
        );
        $this->assertions = new CustomersControllerTestAssertions($this);
    }
}
