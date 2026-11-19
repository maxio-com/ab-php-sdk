<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProductPricePointSummary;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductPricePointSummary
 *
 * @see WalletProductPricePointSummary
 */
class WalletProductPricePointSummaryBuilder
{
    /**
     * @var WalletProductPricePointSummary
     */
    private $instance;

    private function __construct(WalletProductPricePointSummary $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Price Point Summary Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletProductPricePointSummary());
    }

    /**
     * Sets archived count field.
     *
     * @param int|null $value
     */
    public function archivedCount(?int $value): self
    {
        $this->instance->setArchivedCount($value);
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
     * Unsets pricing scheme field.
     */
    public function unsetPricingScheme(): self
    {
        $this->instance->unsetPricingScheme();
        return $this;
    }

    /**
     * Sets tier count field.
     *
     * @param int|null $value
     */
    public function tierCount(?int $value): self
    {
        $this->instance->setTierCount($value);
        return $this;
    }

    /**
     * Sets entry price field.
     *
     * @param string|null $value
     */
    public function entryPrice(?string $value): self
    {
        $this->instance->setEntryPrice($value);
        return $this;
    }

    /**
     * Unsets entry price field.
     */
    public function unsetEntryPrice(): self
    {
        $this->instance->unsetEntryPrice();
        return $this;
    }

    /**
     * Sets final price field.
     *
     * @param string|null $value
     */
    public function finalPrice(?string $value): self
    {
        $this->instance->setFinalPrice($value);
        return $this;
    }

    /**
     * Unsets final price field.
     */
    public function unsetFinalPrice(): self
    {
        $this->instance->unsetFinalPrice();
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
     * Initializes a new Wallet Product Price Point Summary object.
     */
    public function build(): WalletProductPricePointSummary
    {
        return CoreHelper::clone($this->instance);
    }
}
