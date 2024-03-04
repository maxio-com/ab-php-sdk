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
use AdvancedBillingLib\Models\SubscriptionGroupSignup;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignup
 *
 * @see SubscriptionGroupSignup
 */
class SubscriptionGroupSignupBuilder
{
    /**
     * @var SubscriptionGroupSignup
     */
    private $instance;

    private function __construct(SubscriptionGroupSignup $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup Builder object.
     */
    public static function init(array $subscriptions): self
    {
        return new self(new SubscriptionGroupSignup($subscriptions));
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
     * Sets payer id field.
     */
    public function payerId(?int $value): self
    {
        $this->instance->setPayerId($value);
        return $this;
    }

    /**
     * Sets payer reference field.
     */
    public function payerReference(?string $value): self
    {
        $this->instance->setPayerReference($value);
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
     * Sets payer attributes field.
     */
    public function payerAttributes(?PayerAttributes $value): self
    {
        $this->instance->setPayerAttributes($value);
        return $this;
    }

    /**
     * Sets credit card attributes field.
     */
    public function creditCardAttributes(?SubscriptionGroupCreditCard $value): self
    {
        $this->instance->setCreditCardAttributes($value);
        return $this;
    }

    /**
     * Sets bank account attributes field.
     */
    public function bankAccountAttributes(?SubscriptionGroupBankAccount $value): self
    {
        $this->instance->setBankAccountAttributes($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new subscription group signup object.
     */
    public function build(): SubscriptionGroupSignup
    {
        return CoreHelper::clone($this->instance);
    }
}
