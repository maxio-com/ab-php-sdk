<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditCardAttributes;
use AdvancedBillingLib\Models\SubscriptionCustomPrice;
use AdvancedBillingLib\Models\UpdateSubscription;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscription
 *
 * @see UpdateSubscription
 */
class UpdateSubscriptionBuilder
{
    /**
     * @var UpdateSubscription
     */
    private $instance;

    private function __construct(UpdateSubscription $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscription());
    }

    /**
     * Sets credit card attributes field.
     */
    public function creditCardAttributes(?CreditCardAttributes $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
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
     * Sets product change delayed field.
     */
    public function productChangeDelayed(?bool $value): self
    {
        $this->instance->setProductChangeDelayed($value);
        return $this;
    }

    /**
     * Sets next product id field.
     */
    public function nextProductId(?string $value): self
    {
        $this->instance->setNextProductId($value);
        return $this;
    }

    /**
     * Sets next product price point id field.
     */
    public function nextProductPricePointId(?string $value): self
    {
        $this->instance->setNextProductPricePointId($value);
        return $this;
    }

    /**
     * Sets snap day field.
     */
    public function snapDay($value): self
    {
        $this->instance->setSnapDay($value);
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
    public function receivesInvoiceEmails(?bool $value): self
    {
        $this->instance->setReceivesInvoiceEmails($value);
        return $this;
    }

    /**
     * Sets net terms field.
     */
    public function netTerms($value): self
    {
        $this->instance->setNetTerms($value);
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
     * Sets reference field.
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
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
     * Sets components field.
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
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
     * Initializes a new update subscription object.
     */
    public function build(): UpdateSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
