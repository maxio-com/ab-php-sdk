<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PayerAttributes;
use AdvancedBillingLib\Models\SubscriptionGroupBankAccount;
use AdvancedBillingLib\Models\SubscriptionGroupCreditCard;
use AdvancedBillingLib\Models\SubscriptionGroupSignupFailureData;
use AdvancedBillingLib\Models\SubscriptionGroupSignupItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupFailureData
 *
 * @see SubscriptionGroupSignupFailureData
 */
class SubscriptionGroupSignupFailureDataBuilder
{
    /**
     * @var SubscriptionGroupSignupFailureData
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupFailureData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Group Signup Failure Data Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSignupFailureData());
    }

    /**
     * Sets payer id field.
     *
     * @param int|null $value
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Sets payer reference field.
     *
     * @param string|null $value
     */
    public function payerReference(?string $value): self
    {
        $this->instance->setPayerReference($value);
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
     * Sets payer attributes field.
     *
     * @param PayerAttributes|null $value
     */
    public function payerAttributes(?PayerAttributes $value): self
    {
        $this->instance->setPayerAttributes($value);
        return $this;
    }

    /**
     * Sets credit card attributes field.
     *
     * @param SubscriptionGroupCreditCard|null $value
     */
    public function creditCardAttributes(?SubscriptionGroupCreditCard $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
    }

    /**
     * Sets bank account attributes field.
     *
     * @param SubscriptionGroupBankAccount|null $value
     */
    public function bankAccountAttributes(?SubscriptionGroupBankAccount $value): self
    {
        $this->instance->setBankAccountAttributes($value);
        return $this;
    }

    /**
     * Sets subscriptions field.
     *
     * @param SubscriptionGroupSignupItem[]|null $value
     */
    public function subscriptions(?array $value): self
    {
        $this->instance->setSubscriptions($value);
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
     * Initializes a new Subscription Group Signup Failure Data object.
     */
    public function build(): SubscriptionGroupSignupFailureData
    {
        return CoreHelper::clone($this->instance);
    }
}
