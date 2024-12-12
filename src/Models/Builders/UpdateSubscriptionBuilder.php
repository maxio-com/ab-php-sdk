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
use AdvancedBillingLib\Models\UpdateSubscriptionComponent;
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
     * Initializes a new Update Subscription Builder object.
     */
    public static function init(): self
    {
        return new self(new UpdateSubscription());
    }

    /**
     * Sets credit card attributes field.
     *
     * @param CreditCardAttributes|null $value
     */
    public function creditCardAttributes(?CreditCardAttributes $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
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
     * Sets next product id field.
     *
     * @param string|null $value
     */
    public function nextProductId(?string $value): self
    {
        $this->instance->setNextProductId($value);
        return $this;
    }

    /**
     * Sets next product price point id field.
     *
     * @param string|null $value
     */
    public function nextProductPricePointId(?string $value): self
    {
        $this->instance->setNextProductPricePointId($value);
        return $this;
    }

    /**
     * Sets snap day field.
     *
     * @param string|int|null $value
     */
    public function snapDay($value): self
    {
        $this->instance->setSnapDay($value);
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
     * @param bool|null $value
     */
    public function receivesInvoiceEmails(?bool $value): self
    {
        $this->instance->setReceivesInvoiceEmails($value);
        return $this;
    }

    /**
     * Sets net terms field.
     *
     * @param string|int|null $value
     */
    public function netTerms($value): self
    {
        $this->instance->setNetTerms($value);
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
     * Sets components field.
     *
     * @param UpdateSubscriptionComponent[]|null $value
     */
    public function components(?array $value): self
    {
        $this->instance->setComponents($value);
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
     * Initializes a new Update Subscription object.
     */
    public function build(): UpdateSubscription
    {
        return CoreHelper::clone($this->instance);
    }
}
