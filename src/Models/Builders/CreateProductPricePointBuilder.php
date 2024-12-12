<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateProductPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateProductPricePoint
 *
 * @see CreateProductPricePoint
 */
class CreateProductPricePointBuilder
{
    /**
     * @var CreateProductPricePoint
     */
    private $instance;

    private function __construct(CreateProductPricePoint $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Product Price Point Builder object.
     *
     * @param string $name
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
     */
    public static function init(string $name, int $priceInCents, int $interval, string $intervalUnit): self
    {
        return new self(new CreateProductPricePoint($name, $priceInCents, $interval, $intervalUnit));
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
     * Sets trial price in cents field.
     *
     * @param int|null $value
     */
    public function trialPriceInCents(?int $value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Sets trial interval field.
     *
     * @param int|null $value
     */
    public function trialInterval(?int $value): self
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
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
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
     * Initializes a new Create Product Price Point object.
     */
    public function build(): CreateProductPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
