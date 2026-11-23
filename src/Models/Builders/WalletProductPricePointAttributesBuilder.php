<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Price1;
use AdvancedBillingLib\Models\WalletProductPricePointAttributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductPricePointAttributes
 *
 * @see WalletProductPricePointAttributes
 */
class WalletProductPricePointAttributesBuilder
{
    /**
     * @var WalletProductPricePointAttributes
     */
    private $instance;

    private function __construct(WalletProductPricePointAttributes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Price Point Attributes Builder object.
     *
     * @param string $name
     */
    public static function init(string $name): self
    {
        return new self(new WalletProductPricePointAttributes($name));
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
     * Sets pricing scheme field.
     *
     * @param string|null $value
     */
    public function pricingScheme(?string $value): self
    {
        $this->instance->setPricingScheme($value);
        return $this;
    }

    /**
     * Sets unit price field.
     *
     * @param string|null $value
     */
    public function unitPrice(?string $value): self
    {
        $this->instance->setUnitPrice($value);
        return $this;
    }

    /**
     * Unsets unit price field.
     */
    public function unsetUnitPrice(): self
    {
        $this->instance->unsetUnitPrice();
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
     * Sets interval field.
     *
     * @param int|null $value
     */
    public function interval(?int $value): self
    {
        $this->instance->setInterval($value);
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
     * Sets prices field.
     *
     * @param Price1[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
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
     * Initializes a new Wallet Product Price Point Attributes object.
     */
    public function build(): WalletProductPricePointAttributes
    {
        return CoreHelper::clone($this->instance);
    }
}
