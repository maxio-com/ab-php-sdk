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
     * Initializes a new Subscription Custom Price Builder object.
     *
     * @param string|int $priceInCents
     * @param string|int $interval
     */
    public static function init($priceInCents, $interval): self
    {
        return new self(new SubscriptionCustomPrice($priceInCents, $interval));
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets handle field.
     *
     * @param string|null $value
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets interval unit field.
     *
     * @param string|null $value
     */
    public function intervalUnit(?string $value): self
    {
        $this->instance->setIntervalUnit($value);
        return $this;
    }

    /**
     * Sets trial price in cents field.
     *
     * @param string|int|null $value
     */
    public function trialPriceInCents($value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Sets trial interval field.
     *
     * @param string|int|null $value
     */
    public function trialInterval($value): self
    {
        $this->instance->setTrialInterval($value);
        return $this;
    }

    /**
     * Sets trial interval unit field.
     *
     * @param string|null $value
     */
    public function trialIntervalUnit(?string $value): self
    {
        $this->instance->setTrialIntervalUnit($value);
        return $this;
    }

    /**
     * Sets trial type field.
     *
     * @param string|null $value
     */
    public function trialType(?string $value): self
    {
        $this->instance->setTrialType($value);
        return $this;
    }

    /**
     * Unsets trial type field.
     */
    public function unsetTrialType(): self
    {
        $this->instance->unsetTrialType();
        return $this;
    }

    /**
     * Sets initial charge in cents field.
     *
     * @param string|int|null $value
     */
    public function initialChargeInCents($value): self
    {
        $this->instance->setInitialChargeInCents($value);
        return $this;
    }

    /**
     * Sets initial charge after trial field.
     *
     * @param bool|null $value
     */
    public function initialChargeAfterTrial(?bool $value): self
    {
        $this->instance->setInitialChargeAfterTrial($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     *
     * @param string|int|null $value
     */
    public function expirationInterval($value): self
    {
        $this->instance->setExpirationInterval($value);
        return $this;
    }

    /**
     * Sets expiration interval unit field.
     *
     * @param string|null $value
     */
    public function expirationIntervalUnit(?string $value): self
    {
        $this->instance->setExpirationIntervalUnit($value);
        return $this;
    }

    /**
     * Unsets expiration interval unit field.
     */
    public function unsetExpirationIntervalUnit(): self
    {
        $this->instance->unsetExpirationIntervalUnit();
        return $this;
    }

    /**
     * Sets tax included field.
     *
     * @param bool|null $value
     */
    public function taxIncluded(?bool $value): self
    {
        $this->instance->setTaxIncluded($value);
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
     * Initializes a new Subscription Custom Price object.
     */
    public function build(): SubscriptionCustomPrice
    {
        return CoreHelper::clone($this->instance);
    }
}
