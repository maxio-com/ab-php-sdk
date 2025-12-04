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
     * Initializes a new Create Or Update Product Builder object.
     *
     * @param string $name
     * @param string $description
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
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
     *
     * @param string|null $value
     */
    public function handle(?string $value): self
    {
        $this->instance->setHandle($value);
        return $this;
    }

    /**
     * Sets accounting code field.
     *
     * @param string|null $value
     */
    public function accountingCode(?string $value): self
    {
        $this->instance->setAccountingCode($value);
        return $this;
    }

    /**
     * Sets require credit card field.
     *
     * @param bool|null $value
     */
    public function requireCreditCard(?bool $value): self
    {
        $this->instance->setRequireCreditCard($value);
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
     * Unsets trial interval unit field.
     */
    public function unsetTrialIntervalUnit(): self
    {
        $this->instance->unsetTrialIntervalUnit();
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
     * Sets auto create signup page field.
     *
     * @param bool|null $value
     */
    public function autoCreateSignupPage(?bool $value): self
    {
        $this->instance->setAutoCreateSignupPage($value);
        return $this;
    }

    /**
     * Sets tax code field.
     *
     * @param string|null $value
     */
    public function taxCode(?string $value): self
    {
        $this->instance->setTaxCode($value);
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
     * Initializes a new Create Or Update Product object.
     */
    public function build(): CreateOrUpdateProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
