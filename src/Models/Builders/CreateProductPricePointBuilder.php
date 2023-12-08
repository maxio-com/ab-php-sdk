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
     * Initializes a new create product price point Builder object.
     */
    public static function init(string $name, int $priceInCents, int $interval, string $intervalUnit): self
    {
        return new self(new CreateProductPricePoint($name, $priceInCents, $interval, $intervalUnit));
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
    public function trialPriceInCents(?int $value): self
    {
        $this->instance->setTrialPriceInCents($value);
        return $this;
    }

    /**
     * Sets trial interval field.
     */
    public function trialInterval(?int $value): self
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
     * Sets trial type field.
     */
    public function trialType(?string $value): self
    {
        $this->instance->setTrialType($value);
        return $this;
    }

    /**
     * Sets initial charge in cents field.
     */
    public function initialChargeInCents(?int $value): self
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
    public function expirationInterval(?int $value): self
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
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Initializes a new create product price point object.
     */
    public function build(): CreateProductPricePoint
    {
        return CoreHelper::clone($this->instance);
    }
}
