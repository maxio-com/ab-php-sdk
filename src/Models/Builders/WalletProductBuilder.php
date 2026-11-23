<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProduct;
use AdvancedBillingLib\Models\WalletProductPricePointAttributes;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProduct
 *
 * @see WalletProduct
 */
class WalletProductBuilder
{
    /**
     * @var WalletProduct
     */
    private $instance;

    private function __construct(WalletProduct $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Builder object.
     *
     * @param string $name
     * @param string $unitName
     */
    public static function init(string $name, string $unitName): self
    {
        return new self(new WalletProduct($name, $unitName));
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
     * Sets description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Unsets description field.
     */
    public function unsetDescription(): self
    {
        $this->instance->unsetDescription();
        return $this;
    }

    /**
     * Sets taxable field.
     *
     * @param bool|null $value
     */
    public function taxable(?bool $value): self
    {
        $this->instance->setTaxable($value);
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
     * Unsets tax code field.
     */
    public function unsetTaxCode(): self
    {
        $this->instance->unsetTaxCode();
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
     * Unsets accounting code field.
     */
    public function unsetAccountingCode(): self
    {
        $this->instance->unsetAccountingCode();
        return $this;
    }

    /**
     * Sets item category field.
     *
     * @param string|null $value
     */
    public function itemCategory(?string $value): self
    {
        $this->instance->setItemCategory($value);
        return $this;
    }

    /**
     * Unsets item category field.
     */
    public function unsetItemCategory(): self
    {
        $this->instance->unsetItemCategory();
        return $this;
    }

    /**
     * Sets price point field.
     *
     * @param WalletProductPricePointAttributes|null $value
     */
    public function pricePoint(?WalletProductPricePointAttributes $value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Sets price points field.
     *
     * @param WalletProductPricePointAttributes[]|null $value
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
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
     * Initializes a new Wallet Product object.
     */
    public function build(): WalletProduct
    {
        return CoreHelper::clone($this->instance);
    }
}
