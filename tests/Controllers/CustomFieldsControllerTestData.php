<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Models\CreateMetadataRequest;
use AdvancedBillingLib\Models\CreateMetafieldsRequest;
use AdvancedBillingLib\Models\Customer;
use AdvancedBillingLib\Models\ResourceType;
use AdvancedBillingLib\Models\Subscription;
use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestData\CustomFieldsTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomFieldsRequestFactory;

final class CustomFieldsControllerTestData
{
    public function __construct(
        private TestCustomFieldsRequestFactory $customFieldsRequestFactory,
        private TestSubscriptionsLoader $subscriptionsLoader,
        private TestCustomerLoader $customerLoader,
        private TestProductLoader $productLoader,
        private TestProductFamilyLoader $productFamilyLoader,
        private TestPaymentProfileLoader $paymentProfileLoader
    )
    {
    }

    public function getCustomersResourceType(): string
    {
        return ResourceType::CUSTOMERS;
    }

    public function getCreateMetaFieldsRequest(string $name, string $inputType): CreateMetafieldsRequest
    {
        return $this->customFieldsRequestFactory->createCreateMetaFieldRequest(
            $name,
            $inputType
        );
    }

    /**
     * @param array<int, int|string> $options
     */
    public function getCreateMetaFieldsWithOptionsRequest(
        string $name,
        string $inputType,
        array $options
    ): CreateMetafieldsRequest
    {
        return $this->customFieldsRequestFactory->createCreateMetaFieldWithOptionsRequest(
            $name,
            $inputType,
            $options
        );
    }

    /**
     * @return array<int, string|int>
     */
    public function getEnumOptions(): array
    {
        return [CustomFieldsTestData::METADATA_VALUE, CustomFieldsTestData::METADATA_VALUE_TWO];
    }

    public function loadSubscription(
        string $productFamilyName,
        string $productName,
        string $productHandle
    ): Subscription
    {
        $customer = $this->loadCustomer();
        $productFamily = $this->productFamilyLoader->load($productFamilyName);
        $product = $this->productLoader->load(
            $productName,
            $productHandle,
            $productFamily->getId()
        );
        $creditCardPaymentProfile = $this->paymentProfileLoader->loadCreditCard($customer->getId());

        return $this->subscriptionsLoader->load($customer->getId(), $product->getId(), $creditCardPaymentProfile->getId());
    }

    public function loadCustomer(): Customer
    {
        return $this->customerLoader->loadSimpleCustomerWithPredefinedData();
    }

    public function getCreateMetadataRequest(): CreateMetadataRequest
    {
        return $this->customFieldsRequestFactory->createCreateMetadataRequest(
            CustomFieldsTestData::METADATA_NAME,
            CustomFieldsTestData::METADATA_VALUE
        );
    }

    /**
     * @return array<string, string>
     */
    public function getListSubscriptionMetadataOptions(int $subscriptionId): array
    {
        return [
            'resourceType' => $this->getSubscriptionsResourceType(),
            'resourceId' => $subscriptionId
        ];
    }

    public function getSubscriptionsResourceType(): string
    {
        return ResourceType::SUBSCRIPTIONS;
    }

    public function getCustomerResourceType(): string
    {
        return ResourceType::CUSTOMERS;
    }
}
