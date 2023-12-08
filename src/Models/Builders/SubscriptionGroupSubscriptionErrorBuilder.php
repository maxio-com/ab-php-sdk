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
     * Initializes a new subscription group subscription error object.
     */
    public function build(): SubscriptionGroupSubscriptionError
    {
        return CoreHelper::clone($this->instance);
    }
}
