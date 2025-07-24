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
use AdvancedBillingLib\Models\CreateSubscriptionComponent;
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
     * Initializes a new Create Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new CreateSubscription());
    }

    /**
     * Sets product handle field.
     *
     * @param string|null $value
     */
    public function productHandle(?string $value): self
    {
        $this->instance->setProductHandle($value);
        return $this;
    }

    /**
     * Sets product id field.
     *
     * @param int|null $value
     */
    public function productId(?int $value): self
    {
        $this->instance->setProductId($value);
        return $this;
    }

    /**
     * Sets product price point handle field.
     *
     * @param string|null $value
     */
    public function productPricePointHandle(?string $value): self
    {
        $this->instance->setProductPricePointHandle($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     *
     * @param int|null $value
     */
    public function productPricePointId(?int $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets custom price field.
     *
     * @param SubscriptionCustomPrice|null $value
     */
    public function customPrice(?SubscriptionCustomPrice $value): self
    {
        $this->instance->setCustomPrice($value);
        return $this;
    }

    /**
     * Sets coupon code field.
     *
     * @param string|null $value
     */
    public function couponCode(?string $value): self
    {
        $this->instance->setCouponCode($value);
        return $this;
    }

    /**
     * Sets coupon codes field.
     *
     * @param string[]|null $value
     */
    public function couponCodes(?array $value): self
    {
        $this->instance->setCouponCodes($value);
        return $this;
    }

    /**
     * Sets payment collection method field.
     *
     * @param string|null $value
     */
    public function paymentCollectionMethod(?string $value): self
    {
        $this->instance->setPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets receives invoice emails field.
     *
     * @param string|null $value
     */
    public function receivesInvoiceEmails(?string $value): self
    {
        $this->instance->setReceivesInvoiceEmails($value);
        return $this;
    }

    /**
     * Sets net terms field.
     *
     * @param string|null $value
     */
    public function netTerms(?string $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Sets customer id field.
     *
     * @param int|null $value
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets next billing at field.
     *
     * @param \DateTime|null $value
     */
    public function nextBillingAt(?\DateTime $value): self
    {
        $this->instance->setNextBillingAt($value);
        return $this;
    }

    /**
     * Sets initial billing at field.
     *
     * @param \DateTime|null $value
     */
    public function initialBillingAt(?\DateTime $value): self
    {
        $this->instance->setInitialBillingAt($value);
        return $this;
    }

    /**
     * Sets defer signup field.
     *
     * @param bool|null $value
     */
    public function deferSignup(?bool $value): self
    {
        $this->instance->setDeferSignup($value);
        return $this;
    }

    /**
     * Sets stored credential transaction id field.
     *
     * @param int|null $value
     */
    public function storedCredentialTransactionId(?int $value): self
    {
        $this->instance->setStoredCredentialTransactionId($value);
        return $this;
    }

    /**
     * Sets sales rep id field.
     *
     * @param int|null $value
     */
    public function salesRepId(?int $value): self
    {
        $this->instance->setSalesRepId($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     *
     * @param int|null $value
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets reference field.
     *
     * @param string|null $value
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets customer attributes field.
     *
     * @param CustomerAttributes|null $value
     */
    public function customerAttributes(?CustomerAttributes $value): self
    {
        $this->instance->setCustomerAttributes($value);
        return $this;
    }

    /**
     * Sets payment profile attributes field.
     *
     * @param PaymentProfileAttributes|null $value
     */
    public function paymentProfileAttributes(?PaymentProfileAttributes $value): self
    {
        $this->instance->setPaymentProfileAttributes($value);
        return $this;
    }

    /**
     * Sets credit card attributes field.
     *
     * @param PaymentProfileAttributes|null $value
     */
    public function creditCardAttributes(?PaymentProfileAttributes $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
    }

    /**
     * Sets bank account attributes field.
     *
     * @param BankAccountAttributes|null $value
     */
    public function bankAccountAttributes(?BankAccountAttributes $value): self
    {
        $this->instance->setBankAccountAttributes($value);
        return $this;
    }

    /**
     * Sets components field.
     *
     * @param CreateSubscriptionComponent[]|null $value
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
        return $this;
    }

    /**
     * Sets calendar billing field.
     *
     * @param CalendarBilling|null $value
     */
    public function calendarBilling(?CalendarBilling $value): self
    {
        $this->instance->setCalendarBilling($value);
        return $this;
    }

    /**
     * Sets metafields field.
     *
     * @param array<string,string>|null $value
     */
    public function metafields(?array $value): self
    {
        $this->instance->setMetafields($value);
        return $this;
    }

    /**
     * Sets customer reference field.
     *
     * @param string|null $value
     */
    public function customerReference(?string $value): self
    {
        $this->instance->setCustomerReference($value);
        return $this;
    }

    /**
     * Sets group field.
     *
     * @param GroupSettings|null $value
     */
    public function group(?GroupSettings $value): self
    {
        $this->instance->setGroup($value);
        return $this;
    }

    /**
     * Sets ref field.
     *
     * @param string|null $value
     */
    public function ref(?string $value): self
    {
        $this->instance->setRef($value);
        return $this;
    }

    /**
     * Sets cancellation message field.
     *
     * @param string|null $value
     */
    public function cancellationMessage(?string $value): self
    {
        $this->instance->setCancellationMessage($value);
        return $this;
    }

    /**
     * Sets cancellation method field.
     *
     * @param string|null $value
     */
    public function cancellationMethod(?string $value): self
    {
        $this->instance->setCancellationMethod($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Sets expiration tracks next billing change field.
     *
     * @param string|null $value
     */
    public function expirationTracksNextBillingChange(?string $value): self
    {
        $this->instance->setExpirationTracksNextBillingChange($value);
        return $this;
    }

    /**
     * Sets agreement terms field.
     *
     * @param string|null $value
     */
    public function agreementTerms(?string $value): self
    {
        $this->instance->setAgreementTerms($value);
        return $this;
    }

    /**
     * Sets authorizer first name field.
     *
     * @param string|null $value
     */
    public function authorizerFirstName(?string $value): self
    {
        $this->instance->setAuthorizerFirstName($value);
        return $this;
    }

    /**
     * Sets authorizer last name field.
     *
     * @param string|null $value
     */
    public function authorizerLastName(?string $value): self
    {
        $this->instance->setAuthorizerLastName($value);
        return $this;
    }

    /**
     * Sets calendar billing first charge field.
     *
     * @param string|null $value
     */
    public function calendarBillingFirstCharge(?string $value): self
    {
        $this->instance->setCalendarBillingFirstCharge($value);
        return $this;
    }

    /**
     * Sets reason code field.
     *
     * @param string|null $value
     */
    public function reasonCode(?string $value): self
    {
        $this->instance->setReasonCode($value);
        return $this;
    }

    /**
     * Sets product change delayed field.
     *
     * @param bool|null $value
     */
    public function productChangeDelayed(?bool $value): self
    {
        $this->instance->setProductChangeDelayed($value);
        return $this;
    }

    /**
     * Sets offer id field.
     *
     * @param string|int|null $value
     */
    public function offerId($value): self
    {
        $this->instance->setOfferId($value);
        return $this;
    }

    /**
     * Sets prepaid configuration field.
     *
     * @param UpsertPrepaidConfiguration|null $value
     */
    public function prepaidConfiguration(?UpsertPrepaidConfiguration $value): self
    {
        $this->instance->setPrepaidConfiguration($value);
        return $this;
    }

    /**
     * Sets previous billing at field.
     *
     * @param \DateTime|null $value
     */
    public function previousBillingAt(?\DateTime $value): self
    {
        $this->instance->setPreviousBillingAt($value);
        return $this;
    }

    /**
     * Sets import mrr field.
     *
     * @param bool|null $value
     */
    public function importMrr(?bool $value): self
    {
        $this->instance->setImportMrr($value);
        return $this;
    }

    /**
     * Sets canceled at field.
     *
     * @param \DateTime|null $value
     */
    public function canceledAt(?\DateTime $value): self
    {
        $this->instance->setCanceledAt($value);
        return $this;
    }

    /**
     * Sets activated at field.
     *
     * @param \DateTime|null $value
     */
    public function activatedAt(?\DateTime $value): self
    {
        $this->instance->setActivatedAt($value);
        return $this;
    }

    /**
     * Sets agreement acceptance field.
     *
     * @param AgreementAcceptance|null $value
     */
    public function agreementAcceptance(?AgreementAcceptance $value): self
    {
        $this->instance->setAgreementAcceptance($value);
        return $this;
    }

    /**
     * Sets ach agreement field.
     *
     * @param ACHAgreement|null $value
     */
    public function achAgreement(?ACHAgreement $value): self
    {
        $this->instance->setAchAgreement($value);
        return $this;
    }

    /**
     * Sets dunning communication delay enabled field.
     *
     * @param bool|null $value
     */
    public function dunningCommunicationDelayEnabled(?bool $value): self
    {
        $this->instance->setDunningCommunicationDelayEnabled($value);
        return $this;
    }

    /**
     * Sets dunning communication delay time zone field.
     *
     * @param string|null $value
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
     *
     * @param bool|null $value
     */
    public function skipBillingManifestTaxes(?bool $value): self
    {
        $this->instance->setSkipBillingManifestTaxes($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Create Subscription object.
     */
    public function build(): CreateSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
