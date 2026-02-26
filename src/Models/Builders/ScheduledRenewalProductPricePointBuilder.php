<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalProductPricePoint
 *
 * @see ScheduledRenewalProductPricePoint
 */
class ScheduledRenewalProductPricePointBuilder
{
    /**
     * @var ScheduledRenewalProductPricePoint
     */
    private $instance;

    private function __construct(ScheduledRenewalProductPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Product Price Point Builder object.
     *
     * @param string|int $priceInCents
     * @param string|int $interval
     */
    public static function init($priceInCents, $interval): self
    {
        return new self(new ScheduledRenewalProductPricePoint($priceInCents, $interval));
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
     * Sets initial charge in cents field.
     *
     * @param int|null $value
     */
    public function initialChargeInCents(?int $value): self
    {
        $this->instance->setInitialChargeInCents($value);
        return $this;
    }

    /**
     * Sets expiration interval field.
     *
     * @param int|null $value
     */
    public function expirationInterval(?int $value): self
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
     * Initializes a new Scheduled Renewal Product Price Point object.
     */
    public function build(): ScheduledRenewalProductPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
