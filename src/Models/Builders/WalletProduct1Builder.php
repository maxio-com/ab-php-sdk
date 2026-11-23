<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProduct1;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProduct1
 *
 * @see WalletProduct1
 */
class WalletProduct1Builder
{
    /**
     * @var WalletProduct1
     */
    private $instance;

    private function __construct(WalletProduct1 $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product 1 Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletProduct1());
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
     * Initializes a new Wallet Product 1 object.
     */
    public function build(): WalletProduct1
    {
        return CoreHelper::clone($this->instance);
    }
}
