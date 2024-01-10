<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\Controllers;

use AdvancedBillingLib\Tests\DataLoader\TestCustomerLoader;
use AdvancedBillingLib\Tests\DataLoader\TestPaymentProfileLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductFamilyLoader;
use AdvancedBillingLib\Tests\DataLoader\TestProductLoader;
use AdvancedBillingLib\Tests\DataLoader\TestSubscriptionsLoader;
use AdvancedBillingLib\Tests\TestCase;
use AdvancedBillingLib\Tests\TestData\CustomFieldsTestData;
use AdvancedBillingLib\Tests\TestFactory\TestCustomerRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestCustomFieldsRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestPaymentProfileRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductFamilyRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestProductRequestFactory;
use AdvancedBillingLib\Tests\TestFactory\TestSubscriptionRequestFactory;

final class CustomFieldsControllerTest extends TestCase
{
    private CustomFieldsControllerTestData $testData;
    private CustomFieldsControllerTestAssertions $assertions;

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::createMetafields
     */
    public function test_CreateMetafields_ShouldCreateTextMetaField_WhenInputTypeTextProvided(): void
    {
        $name = 'test meta field';

        $response = $this->client
            ->getCustomFieldsController()
            ->createMetafields(
                $this->testData->getSubscriptionsResourceType(),
                $this->testData->getCreateMetaFieldsRequest($name, CustomFieldsTestData::INPUT_TYPE_TEXT)
            );

        $this->assertions->assertTextMetaFieldCreated($response, $name);

        $this->cleaner->removeMetafield($this->testData->getSubscriptionsResourceType(), $name);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::createMetafields
     */
    public function test_CreateMetafields_ShouldCreateDropdownMetaField_WhenInputTypeDropdownAndOptionsProvided(): void
    {
        $name = 'test meta field';

        $response = $this->client
            ->getCustomFieldsController()
            ->createMetafields(
                $this->testData->getSubscriptionsResourceType(),
                $this->testData->getCreateMetaFieldsWithOptionsRequest(
                    $name,
                    CustomFieldsTestData::INPUT_TYPE_DROPDOWN,
                    $this->testData->getEnumOptions()
                )
            );

        $this->assertions->assertDropdownMetaFieldCreated($response, $name, $this->testData->getEnumOptions());

        $this->cleaner->removeMetafield($this->testData->getSubscriptionsResourceType(), $name);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::createMetafields
     */
    public function test_CreateMetafields_ShouldCreateRadioMetaField_WhenCustomerResourceTypeProvided(): void
    {
        $name = 'test meta field';

        $response = $this->client
            ->getCustomFieldsController()
            ->createMetafields(
                $this->testData->getCustomersResourceType(),
                $this->testData->getCreateMetaFieldsWithOptionsRequest(
                    $name,
                    CustomFieldsTestData::INPUT_TYPE_RADIO,
                    $this->testData->getEnumOptions()
                )
            );

        $this->assertions->assertRadioMetaFieldCreated($response, $name, $this->testData->getEnumOptions());

        $this->cleaner->removeMetafield($this->testData->getCustomersResourceType(), $name);
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::createMetadata
     */
    public function test_CreateMetadata_ShouldCreateMetadata_WhenSubscriptionReferenceProvided(): void
    {
        $subscription = $this->testData->loadSubscription(
            productFamilyName: 'CustomFieldsControllerTest_ProductFamily_1',
            productName: 'CustomFieldsControllerTest Product 1',
            productHandle: 'customfieldscontrollertest-product-1'
        );

        $response = $this->client
            ->getCustomFieldsController()
            ->createMetadata(
                $this->testData->getSubscriptionsResourceType(),
                (string) $subscription->getId(),
                $this->testData->getMetadataValue(),
                $this->testData->getCreateMetadataRequest()
            );

        $this->assertions->assertSubscriptionMetadataCreated($response, $subscription);

        $this->cleaner->removeMetadata(
            $this->testData->getSubscriptionsResourceType(),
            $subscription->getId(),
            CustomFieldsTestData::METADATA_NAME
        );
        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::createMetadata
     */
    public function test_CreateMetadata_ShouldCreateMetadata_WhenCustomerReferenceProvided(): void
    {
        $customer = $this->testData->loadCustomer();

        $response = $this->client
            ->getCustomFieldsController()
            ->createMetadata(
                $this->testData->getCustomerResourceType(),
                (string) $customer->getId(),
                $this->testData->getMetadataValue(),
                $this->testData->getCreateMetadataRequest()
            );

        $this->assertions->assertCustomerMetadataCreated($response, $customer->getId());

        $this->cleaner->removeMetadata(
            $this->testData->getCustomerResourceType(),
            $customer->getId(),
            $response[0]->getName()
        );
        $this->cleaner->removeCustomerById($customer->getId());
    }

    /**
     * @covers \AdvancedBillingLib\Controllers\CustomFieldsController::listMetadata
     */
    public function test_ListMetadata_ShouldReturnListOfSubscriptionMetadata_WhenSubscriptionHasMetadata(): void
    {
        $subscription = $this->testData->loadSubscription(
            productFamilyName: 'CustomFieldsControllerTest_ProductFamily_2',
            productName: 'CustomFieldsControllerTest Product 2',
            productHandle: 'customfieldscontrollertest-product-2'
        );
        $this->client
            ->getCustomFieldsController()
            ->createMetadata(
                $this->testData->getSubscriptionsResourceType(),
                (string) $subscription->getId(),
                $this->testData->getMetadataValue(),
                $this->testData->getCreateMetadataRequest()
            );

        $response = $this->client
            ->getCustomFieldsController()
            ->listMetadata($this->testData->getListSubscriptionMetadataOptions())
            ->getMetadata();

        $this->assertions->assertListHasSubscriptionMetadata($response, $subscription->getId());

        $this->cleaner->removeMetadata(
            $this->testData->getSubscriptionsResourceType(),
            $subscription->getId(),
            CustomFieldsTestData::METADATA_NAME
        );
        $this->cleaner->removeSubscriptionById($subscription->getId(), $subscription->getCustomer()->getId());
        $this->cleaner->removeCustomerById($subscription->getCustomer()->getId());
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->testData = new CustomFieldsControllerTestData(
            new TestCustomFieldsRequestFactory(),
            new TestSubscriptionsLoader($this->client, new TestSubscriptionRequestFactory()),
            new TestCustomerLoader($this->client, new TestCustomerRequestFactory()),
            new TestProductLoader($this->client, new TestProductRequestFactory()),
            new TestProductFamilyLoader($this->client, new TestProductFamilyRequestFactory()),
            new TestPaymentProfileLoader($this->client, new TestPaymentProfileRequestFactory())
        );
        $this->assertions = new CustomFieldsControllerTestAssertions($this);
    }
}
