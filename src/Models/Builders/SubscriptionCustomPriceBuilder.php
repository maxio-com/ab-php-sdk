<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionCustomPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionCustomPrice
 *
 * @see SubscriptionCustomPrice
 */
class SubscriptionCustomPriceBuilder
{
    /**
     * @var SubscriptionCustomPrice
     */
    private $instance;

    private function __construct(SubscriptionCustomPrice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription custom price Builder object.
     */
    public static function init($priceInCents, $interval, string $intervalUnit): self
    {
        return new self(new SubscriptionCustomPrice($priceInCents, $interval, $intervalUnit));
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets trial price in cents field.
     */
    public function trialPriceInCents($value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Sets trial interval field.
     */
    public function trialInterval($value): self
    {
        $this->instance->setTrialInterval($value);
        return $this;
    }

    /**
     * Sets trial interval unit field.
     */
    public function trialIntervalUnit(?string $value): self
    {
        $this->instance->setTrialIntervalUnit($value);
        return $this;
    }

    /**
     * Sets initial charge in cents field.
     */
    public function initialChargeInCents($value): self
    {
        $this->instance->setInitialChargeInCents($value);
        return $this;
    }

    /**
     * Sets initial charge after trial field.
     */
    public function initialChargeAfterTrial(?bool $value): self
    {
        $this->instance->setInitialChargeAfterTrial($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     */
    public function expirationInterval($value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Sets tax included field.
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
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
     * Initializes a new subscription custom price object.
     */
    public function build(): SubscriptionCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
