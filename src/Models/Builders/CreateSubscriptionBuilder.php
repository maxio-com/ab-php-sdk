<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ACHAgreement;
use AdvancedBillingLib\Models\AgreementAcceptance;
use AdvancedBillingLib\Models\BankAccountAttributes;
use AdvancedBillingLib\Models\CalendarBilling;
use AdvancedBillingLib\Models\CreateSubscription;
use AdvancedBillingLib\Models\CustomerAttributes;
use AdvancedBillingLib\Models\GroupSettings;
use AdvancedBillingLib\Models\PaymentProfileAttributes;
use AdvancedBillingLib\Models\SubscriptionCustomPrice;
use AdvancedBillingLib\Models\UpsertPrepaidConfiguration;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSubscription
 *
 * @see CreateSubscription
 */
class CreateSubscriptionBuilder
{
    /**
     * @var CreateSubscription
     */
    private $instance;

    private function __construct(CreateSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateSubscription());
    }

    /**
     * Sets product handle field.
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product id field.
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets custom price field.
     */
    public function customPrice(?SubscriptionCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Sets coupon code field.
     */
    public function couponCode(?string $value): self
    {
        $this->instance->setCouponCode($value);
        return $this;
    }

    /**
     * Sets coupon codes field.
     */
    public function couponCodes(?array $value): self
    {
        $this->instance->setCouponCodes($value);
        return $this;
    }

    /**
     * Sets payment collection method field.
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets receives invoice emails field.
     */
    public function receivesInvoiceEmails(?string $value): self
    {
        $this->instance->setReceivesInvoiceEmails($value);
        return $this;
    }

    /**
     * Sets net terms field.
     */
    public function netTerms(?string $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets next billing at field.
     */
    public function nextBillingAt(?\DateTime $value): self
    {
        $this->instance->setNextBillingAt($value);
        return $this;
    }

    /**
     * Sets initial billing at field.
     */
    public function initialBillingAt(?\DateTime $value): self
    {
        $this->instance->setInitialBillingAt($value);
        return $this;
    }

    /**
     * Sets stored credential transaction id field.
     */
    public function storedCredentialTransactionId(?int $value): self
    {
        $this->instance->setStoredCredentialTransactionId($value);
        return $this;
    }

    /**
     * Sets sales rep id field.
     */
    public function salesRepId(?int $value): self
    {
        $this->instance->setSalesRepId($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets customer attributes field.
     */
    public function customerAttributes(?CustomerAttributes $value): self
    {
        $this->instance->setCustomerAttributes($value);
        return $this;
    }

    /**
     * Sets payment profile attributes field.
     */
    public function paymentProfileAttributes(?PaymentProfileAttributes $value): self
    {
        $this->instance->setPaymentProfileAttributes($value);
        return $this;
    }

    /**
     * Sets credit card attributes field.
     */
    public function creditCardAttributes(?PaymentProfileAttributes $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
    }

    /**
     * Sets bank account attributes field.
     */
    public function bankAccountAttributes(?BankAccountAttributes $value): self
    {
        $this->instance->setBankAccountAttributes($value);
        return $this;
    }

    /**
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets calendar billing field.
     */
    public function calendarBilling(?CalendarBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets metafields field.
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
        return $this;
    }

    /**
     * Sets customer reference field.
     */
    public function customerReference(?string $value): self
    {
        $this->instance->setCustomerReference($value);
        return $this;
    }

    /**
     * Sets group field.
     */
    public function group(?GroupSettings $value): self
    {
        $this->instance->setGroup($value);
        return $this;
    }

    /**
     * Sets ref field.
     */
    public function ref(?string $value): self
    {
        $this->instance->setRef($value);
        return $this;
    }

    /**
     * Sets cancellation message field.
     */
    public function cancellationMessage(?string $value): self
    {
        $this->instance->setCancellationMessage($value);
        return $this;
    }

    /**
     * Sets cancellation method field.
     */
    public function cancellationMethod(?string $value): self
    {
        $this->instance->setCancellationMethod($value);
        return $this;
    }

    /**
     * Sets currency field.
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Sets expiration tracks next billing change field.
     */
    public function expirationTracksNextBillingChange(?string $value): self
    {
        $this->instance->setExpirationTracksNextBillingChange($value);
        return $this;
    }

    /**
     * Sets agreement terms field.
     */
    public function agreementTerms(?string $value): self
    {
        $this->instance->setAgreementTerms($value);
        return $this;
    }

    /**
     * Sets authorizer first name field.
     */
    public function authorizerFirstName(?string $value): self
    {
        $this->instance->setAuthorizerFirstName($value);
        return $this;
    }

    /**
     * Sets authorizer last name field.
     */
    public function authorizerLastName(?string $value): self
    {
        $this->instance->setAuthorizerLastName($value);
        return $this;
    }

    /**
     * Sets calendar billing first charge field.
     */
    public function calendarBillingFirstCharge(?string $value): self
    {
        $this->instance->setCalendarBillingFirstCharge($value);
        return $this;
    }

    /**
     * Sets reason code field.
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Sets product change delayed field.
     */
    public function productChangeDelayed(?bool $value): self
    {
        $this->instance->setProductChangeDelayed($value);
        return $this;
    }

    /**
     * Sets offer id field.
     */
    public function offerId($value): self
    {
        $this->instance->setOfferId($value);
        return $this;
    }

    /**
     * Sets prepaid configuration field.
     */
    public function prepaidConfiguration(?UpsertPrepaidConfiguration $value): self
    {
        $this->instance->setPrepaidConfiguration($value);
        return $this;
    }

    /**
     * Sets previous billing at field.
     */
    public function previousBillingAt(?\DateTime $value): self
    {
        $this->instance->setPreviousBillingAt($value);
        return $this;
    }

    /**
     * Sets import mrr field.
     */
    public function importMrr(?bool $value): self
    {
        $this->instance->setImportMrr($value);
        return $this;
    }

    /**
     * Sets canceled at field.
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Sets activated at field.
     */
    public function activatedAt(?\DateTime $value): self
    {
        $this->instance->setActivatedAt($value);
        return $this;
    }

    /**
     * Sets agreement acceptance field.
     */
    public function agreementAcceptance(?AgreementAcceptance $value): self
    {
        $this->instance->setAgreementAcceptance($value);
        return $this;
    }

    /**
     * Sets ach agreement field.
     */
    public function achAgreement(?ACHAgreement $value): self
    {
        $this->instance->setAchAgreement($value);
        return $this;
    }

    /**
     * Sets dunning communication delay enabled field.
     */
    public function dunningCommunicationDelayEnabled(?bool $value): self
    {
        $this->instance->setDunningCommunicationDelayEnabled($value);
        return $this;
    }

    /**
     * Unsets dunning communication delay enabled field.
     */
    public function unsetDunningCommunicationDelayEnabled(): self
    {
        $this->instance->unsetDunningCommunicationDelayEnabled();
        return $this;
    }

    /**
     * Sets dunning communication delay time zone field.
     */
    public function dunningCommunicationDelayTimeZone(?string $value): self
    {
        $this->instance->setDunningCommunicationDelayTimeZone($value);
        return $this;
    }

    /**
     * Unsets dunning communication delay time zone field.
     */
    public function unsetDunningCommunicationDelayTimeZone(): self
    {
        $this->instance->unsetDunningCommunicationDelayTimeZone();
        return $this;
    }

    /**
     * Sets skip billing manifest taxes field.
     */
    public function skipBillingManifestTaxes(?bool $value): self
    {
        $this->instance->setSkipBillingManifestTaxes($value);
        return $this;
    }

    /**
     * Initializes a new create subscription object.
     */
    public function build(): CreateSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
