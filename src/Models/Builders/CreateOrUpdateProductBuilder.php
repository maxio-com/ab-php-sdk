<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOrUpdateProduct;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOrUpdateProduct
 *
 * @see CreateOrUpdateProduct
 */
class CreateOrUpdateProductBuilder
{
    /**
     * @var CreateOrUpdateProduct
     */
    private $instance;

    private function __construct(CreateOrUpdateProduct $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create or update product Builder object.
     */
    public static function init(
        string $name,
        string $description,
        int $priceInCents,
        int $interval,
        string $intervalUnit
    ): self {
        return new self(new CreateOrUpdateProduct($name, $description, $priceInCents, $interval, $intervalUnit));
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
     * Sets accounting code field.
     */
    public function accountingCode(?string $value): self
    {
        $this->instance->setAccountingCode($value);
        return $this;
    }

    /**
     * Sets require credit card field.
     */
    public function requireCreditCard(?bool $value): self
    {
        $this->instance->setRequireCreditCard($value);
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
     * Sets auto create signup page field.
     */
    public function autoCreateSignupPage(?bool $value): self
    {
        $this->instance->setAutoCreateSignupPage($value);
        return $this;
    }

    /**
     * Sets tax code field.
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
        return $this;
    }

    /**
     * Initializes a new create or update product object.
     */
    public function build(): CreateOrUpdateProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
