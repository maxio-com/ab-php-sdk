<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Models\SubscriptionResponse;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestStatusCode;

final class CustomersControllerTestAssertions
{
    private const EXPECTED_CUSTOMER_SUBSCRIPTIONS_NUMBER = 1;

    public function __construct(private CustomersControllerTest $testCase)
    {
    }

    public function assertExpectedCustomerCreated(
        Customer $expectedCustomer,
        Customer $customer
    ): void
    {
        // unsetting reference because of its random value
        $expectedCustomer->unsetReference();
        $customer->unsetReference();
        $this->testCase::assertEquals($expectedCustomer->jsonSerialize(), $customer->jsonSerialize());
    }

    public function assertExpectedCustomerWasReturned(Customer $expectedCustomer, Customer $customer): void
    {
        $this->testCase::assertEquals($expectedCustomer, $customer);
    }

    public function assertCustomerNotFound(): void
    {
        $this->testCase->expectException(ApiException::class);
        $this->testCase->expectExceptionCode(TestStatusCode::NOT_FOUND);
    }

    /**
     * @param array<int, CustomerResponse> $expectedCustomersList
     * @param array<int, CustomerResponse> $customersList
     */
    public function assertCustomersReturned(array $expectedCustomersList, array $customersList): void
    {
        $this->testCase::assertEquals($expectedCustomersList, $customersList);
    }

    public function assertCustomerWasUpdated(Customer $customer, Customer $updatedCustomer): void
    {
        $this->testCase::assertNotEquals($customer, $updatedCustomer);
        $this->testCase::assertEquals(CustomerTestData::UPDATED_FIRST_NAME, $updatedCustomer->getFirstName());
        $this->testCase::assertEquals(CustomerTestData::UPDATED_LAST_NAME, $updatedCustomer->getLastName());
    }

    public function assertCustomerWasDeleted(AdvancedBillingClient $client): void
    {
        $customers = $client->getCustomersController()->listCustomers([]);

        $this->testCase::assertEmpty($customers);
    }

    /**
     * @param array<int, SubscriptionResponse> $subscriptions
     */
    public function assertCustomerSubscriptionsNotFound(array $subscriptions): void
    {
        $this->testCase::assertEmpty($subscriptions);
    }

    /**
     * @param array<int, SubscriptionResponse> $subscriptions
     */
    public function assertCustomerSubscriptionsFound(array $subscriptions, Subscription $expectedSubscription): void
    {
        $this->testCase::assertCount(self::EXPECTED_CUSTOMER_SUBSCRIPTIONS_NUMBER, $subscriptions);

        $subscription = $subscriptions[0];

        $expectedSubscriptionJson = $expectedSubscription->jsonSerialize();
        $subscriptionJson = $subscription->getSubscription()->jsonSerialize();

        // Removed because of modifying value on read.
        unset($expectedSubscriptionJson['updated_at']);
        unset($subscriptionJson['updated_at']);

        $this->testCase::assertEquals($expectedSubscriptionJson, $subscriptionJson);
    }
}
