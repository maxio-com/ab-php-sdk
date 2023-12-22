<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateSubscriptionBuilder;
use AdvancedBillingLib\Models\Builders\CreateSubscriptionRequestBuilder;
use AdvancedBillingLib\Models\Builders\CustomerAttributesBuilder;
use AdvancedBillingLib\Models\Builders\PaymentProfileAttributesBuilder;
use AdvancedBillingLib\Models\CreateSubscription;
use AdvancedBillingLib\Models\CreateSubscriptionRequest;
use AdvancedBillingLib\Models\CustomerAttributes;
use AdvancedBillingLib\Models\PaymentProfileAttributes;

final class TestSubscriptionRequestFactory
{
    private const PRODUCT_HANDLE = 'database-standard';

    public function createCreateSubscriptionRequestWithDefaultValues(): CreateSubscriptionRequest
    {
        return CreateSubscriptionRequestBuilder::init($this->createCreateSubscriptionWithDefaultValues())
            ->build();
    }

    private function createCreateSubscriptionWithDefaultValues(): CreateSubscription
    {
        return CreateSubscriptionBuilder::init()
            ->productHandle(self::PRODUCT_HANDLE)
            ->customerId(CustomerTestData::CUSTOMER_ID)
            ->creditCardAttributes($this->createPaymentProfileAttributes())
            ->build();
    }


    private function createPaymentProfileAttributes(): PaymentProfileAttributes
    {
        return PaymentProfileAttributesBuilder::init()
            ->firstName(PaymentProfileTestData::CUSTOMER_FIRST_NAME)
            ->lastName(PaymentProfileTestData::CUSTOMER_LAST_NAME)
            ->fullNumber(PaymentProfileTestData::FULL_NUMBER)
            ->expirationYear(PaymentProfileTestData::CARD_EXPIRATION_YEAR)
            ->expirationMonth(PaymentProfileTestData::CARD_EXPIRATION_MONTH)
            ->cardType(PaymentProfileTestData::CARD_TYPE)
            ->billingZip(PaymentProfileTestData::BILLING_ZIP)
            ->billingState(PaymentProfileTestData::BILLING_STATE)
            ->billingCountry(PaymentProfileTestData::BILLING_COUNTRY)
            ->billingCity(PaymentProfileTestData::BILLING_CITY)
            ->billingAddress(PaymentProfileTestData::BILLING_ADDRESS)
            ->billingAddress2(PaymentProfileTestData::BILLING_ADDRESS_TWO)
            ->build();
    }

    public function createCreateSubscriptionRequestWithNonExistingCustomer(): CreateSubscriptionRequest
    {
        return CreateSubscriptionRequestBuilder::init($this->createCreateSubscriptionWithNonExistingCustomer())
            ->build();
    }

    private function createCreateSubscriptionWithNonExistingCustomer(): CreateSubscription
    {
        return CreateSubscriptionBuilder::init()
            ->productHandle(self::PRODUCT_HANDLE)
            ->customerId(CustomerTestData::NON_EXISTING_CUSTOMER_ID)
            ->creditCardAttributes($this->createPaymentProfileAttributes())
            ->build();
    }
}
