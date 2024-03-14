<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSubscriptionError;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSubscriptionError
 *
 * @see SubscriptionGroupSubscriptionError
 */
class SubscriptionGroupSubscriptionErrorBuilder
{
    /**
     * @var SubscriptionGroupSubscriptionError
     */
    private $instance;

    private function __construct(SubscriptionGroupSubscriptionError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group subscription error Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionGroupSubscriptionError());
    }

    /**
     * Sets product field.
     */
    public function product(?array $value): self
    {
        $this->instance->setProduct($value);
        return $this;
    }

    /**
     * Sets product price point id field.
     */
    public function productPricePointId(?array $value): self
    {
        $this->instance->setProductPricePointId($value);
        return $this;
    }

    /**
     * Sets payment profile field.
     */
    public function paymentProfile(?array $value): self
    {
        $this->instance->setPaymentProfile($value);
        return $this;
    }

    /**
     * Sets payment profile chargify token field.
     */
    public function paymentProfileChargifyToken(?array $value): self
    {
        $this->instance->setPaymentProfileChargifyToken($value);
        return $this;
    }

    /**
     * Sets base field.
     */
    public function base(?array $value): self
    {
        $this->instance->setBase($value);
        return $this;
    }

    /**
     * Sets payment profile expiration month field.
     */
    public function paymentProfileExpirationMonth(?array $value): self
    {
        $this->instance->setPaymentProfileExpirationMonth($value);
        return $this;
    }

    /**
     * Sets payment profile expiration year field.
     */
    public function paymentProfileExpirationYear(?array $value): self
    {
        $this->instance->setPaymentProfileExpirationYear($value);
        return $this;
    }

    /**
     * Sets payment profile full number field.
     */
    public function paymentProfileFullNumber(?array $value): self
    {
        $this->instance->setPaymentProfileFullNumber($value);
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
     * Initializes a new subscription group subscription error object.
     */
    public function build(): SubscriptionGroupSubscriptionError
    {
        return CoreHelper::clone($this->instance);
    }
}
