<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\DataLoader;

use AdvancedBillingLib\AdvancedBillingClient;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Tests\TestData\CustomerTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;

final class TestCustomerLoader
{
    public function __construct(
        private AdvancedBillingClient $client,
        private TestCustomerRequestFactory $customerRequestFactory
    )
    {
    }

    public function loadSimpleCustomerWithPredefinedData(): Customer
    {
        return $this->load(
            CustomerTestData::FIRST_NAME,
            CustomerTestData::LAST_NAME,
            CustomerTestData::EMAIL
        );
    }

    private function load(string $firstName, string $lastName, string $email): Customer
    {
        return $this->client
            ->getCustomersController()
            ->createCustomer(
                $this->customerRequestFactory->createCreateCustomerRequest(
                    $firstName,
                    $lastName,
                    $email
                )
            )
            ->getCustomer();
    }

    public function loadSimpleCustomerWithCustomData(
        string $firstName,
        string $lastName,
        string $email,
        string $reference,
        string $vatNumber
    ): Customer
    {
        $request = $this->customerRequestFactory->createCreateCustomerRequest($firstName, $lastName, $email);
        $request->getCustomer()->setReference($reference);
        $request->getCustomer()->setVatNumber($vatNumber);

        return $this->client
            ->getCustomersController()
            ->createCustomer($request)
            ->getCustomer();
    }
}
