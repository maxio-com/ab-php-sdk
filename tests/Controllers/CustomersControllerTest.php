<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerResponseFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

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
     * @covers \AdvancedBillingLib\Controllers\CustomersController::readCustomer
     */
    public function test_ReadCustomer_ShouldReturnCustomer_WhenCustomerExists(): void
    {
        $customer = $this->testData->loadCustomer();

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
        $customer = $this->testData->loadCustomer();

        $response = $this->client
            ->getCustomersController()
            ->listCustomers($this->testData->getEmptyListCustomersParametersArray());

        $this->assertions->assertCustomersReturned($this->testData->getCustomersListResponse($customer), $response);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::updateCustomer
     */
    public function test_UpdateCustomer_ShouldUpdateCustomer_WhenCustomerFoundAndDataAreCorrect(): void
    {
        $customer = $this->testData->loadCustomer();

        $updatedCustomer = $this->client
            ->getCustomersController()
            ->updateCustomer(
                $customer->getId(),
                $this->testData->getUpdateCustomerRequest()
            )
            ->getCustomer();

        $this->assertions->assertCustomerWasUpdated($customer, $updatedCustomer);
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::updateCustomer
     */
    public function test_UpdateCustomer_ShouldThrowExceptionWith404StatusCode_WhenCustomerNotFound(): void
    {
        $this->assertions->assertCustomerNotFound();
        $this->client
            ->getCustomersController()
            ->updateCustomer(
                $this->testData->getNotExistingCustomerId(),
                $this->testData->getUpdateCustomerRequest()
            )
            ->getCustomer();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::deleteCustomer
     */
    public function test_DeleteCustomer_ShouldDeleteCustomer_WhenCustomerExists(): void
    {
        $customer = $this->testData->loadCustomer();

        $this->client->getCustomersController()->deleteCustomer($customer->getId());

        $this->assertions->assertCustomerWasDeleted($this->client);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::deleteCustomer
     */
    public function test_DeleteCustomer_ShouldThrowExceptionWith404StatusCode_WhenCustomerNotFound(): void
    {
        $this->assertions->assertCustomerNotFound();
        $this->client->getCustomersController()->deleteCustomer($this->testData->getNotExistingCustomerId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::readCustomerByReference
     */
    public function test_ReadCustomerByReference_ShouldReturnCustomer_WhenFoundByReference(): void
    {
        $customer = $this->testData->loadCustomer();

        $foundCustomer = $this->client
            ->getCustomersController()
            ->readCustomerByReference($customer->getReference())
            ->getCustomer();

        $this->assertions->assertExpectedCustomerWasReturned($customer, $foundCustomer);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::readCustomerByReference
     */
    public function test_ReadCustomerByReference_ShouldThrowExceptionWith404StatusCode_WhenCustomerNotFound(): void
    {
        $this->assertions->assertCustomerNotFound();
        $this->client
            ->getCustomersController()
            ->readCustomerByReference($this->testData->getNotExistingCustomerReference())
            ->getCustomer();
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::listCustomerSubscriptions
     */
    public function test_ListCustomerSubscriptions_ShouldReturnEmptyList_WhenCustomerDoesNotHaveAnySubscription(): void
    {
        $customer = $this->testData->loadCustomer();

        $subscriptions = $this->client->getCustomersController()->listCustomerSubscriptions($customer->getId());

        $this->assertions->assertCustomerSubscriptionsNotFound($subscriptions);

        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomersController::listCustomerSubscriptions
     */
    public function test_ListCustomerSubscriptions_ShouldSubscriptionsList_WhenCustomerHasOneSubscription(): void
    {
        $customer = $this->testData->loadCustomer();
        $subscription = $this->testData->loadSubscription($customer->getId());

        $subscriptions = $this->client->getCustomersController()->listCustomerSubscriptions($customer->getId());

        $this->assertions->assertCustomerSubscriptionsFound($subscriptions, $subscription);

        $this->cleaner->removeSubscriptionById($subscription->getId(), $customer->getId());
        $this->cleaner->removeCustomerById($customer->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CustomersControllerTestData(
            new TestCustomerRequestFactory(),
            new TestCustomerFactory(),
            new TestCustomerResponseFactory(),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory()),
            new TestSubscriptionsLoader($this->client, new TestSubscriptionRequestFactory()),
        );
        $this->assertions = new CustomersControllerTestAssertions($this);
    }
}
