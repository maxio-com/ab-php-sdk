<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\ComponentPrice;
use Core\Utils\CoreHelper;

/**
 * Builder for model Component
 *
 * @see Component
 */
class ComponentBuilder
{
    /**
     * @var Component
     */
    private $instance;

    private function __construct(Component $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Builder object.
     */
    public static function init(): self
    {
        return new self(new Component());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
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
     * Unsets handle field.
     */
    public function unsetHandle(): self
    {
        $this->instance->unsetHandle();
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
     * Sets unit name field.
     *
     * @param string|null $value
     */
    public function unitName(?string $value): self
    {
        $this->instance->setUnitName($value);
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
     * Sets product family id field.
     *
     * @param int|null $value
     */
    public function productFamilyId(?int $value): self
    {
        $this->instance->setProductFamilyId($value);
        return $this;
    }

    /**
     * Sets product family name field.
     *
     * @param string|null $value
     */
    public function productFamilyName(?string $value): self
    {
        $this->instance->setProductFamilyName($value);
        return $this;
    }

    /**
     * Sets product family handle field.
     *
     * @param string|null $value
     */
    public function productFamilyHandle(?string $value): self
    {
        $this->instance->setProductFamilyHandle($value);
        return $this;
    }

    /**
     * Sets price per unit in cents field.
     *
     * @param int|null $value
     */
    public function pricePerUnitInCents(?int $value): self
    {
        $this->instance->setPricePerUnitInCents($value);
        return $this;
    }

    /**
     * Unsets price per unit in cents field.
     */
    public function unsetPricePerUnitInCents(): self
    {
        $this->instance->unsetPricePerUnitInCents();
        return $this;
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets archived field.
     *
     * @param bool|null $value
     */
    public function archived(?bool $value): self
    {
        $this->instance->setArchived($value);
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
     * Sets default price point id field.
     *
     * @param int|null $value
     */
    public function defaultPricePointId(?int $value): self
    {
        $this->instance->setDefaultPricePointId($value);
        return $this;
    }

    /**
     * Unsets default price point id field.
     */
    public function unsetDefaultPricePointId(): self
    {
        $this->instance->unsetDefaultPricePointId();
        return $this;
    }

    /**
     * Sets overage prices field.
     *
     * @param ComponentPrice[]|null $value
     */
    public function overagePrices(?array $value): self
    {
        $this->instance->setOveragePrices($value);
        return $this;
    }

    /**
     * Unsets overage prices field.
     */
    public function unsetOveragePrices(): self
    {
        $this->instance->unsetOveragePrices();
        return $this;
    }

    /**
     * Sets prices field.
     *
     * @param ComponentPrice[]|null $value
     */
    public function prices(?array $value): self
    {
        $this->instance->setPrices($value);
        return $this;
    }

    /**
     * Unsets prices field.
     */
    public function unsetPrices(): self
    {
        $this->instance->unsetPrices();
        return $this;
    }

    /**
     * Sets price point count field.
     *
     * @param int|null $value
     */
    public function pricePointCount(?int $value): self
    {
        $this->instance->setPricePointCount($value);
        return $this;
    }

    /**
     * Sets price points url field.
     *
     * @param string|null $value
     */
    public function pricePointsUrl(?string $value): self
    {
        $this->instance->setPricePointsUrl($value);
        return $this;
    }

    /**
     * Unsets price points url field.
     */
    public function unsetPricePointsUrl(): self
    {
        $this->instance->unsetPricePointsUrl();
        return $this;
    }

    /**
     * Sets default price point name field.
     *
     * @param string|null $value
     */
    public function defaultPricePointName(?string $value): self
    {
        $this->instance->setDefaultPricePointName($value);
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
     * Sets recurring field.
     *
     * @param bool|null $value
     */
    public function recurring(?bool $value): self
    {
        $this->instance->setRecurring($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     *
     * @param string|null $value
     */
    public function upgradeCharge(?string $value): self
    {
        $this->instance->setUpgradeCharge($value);
        return $this;
    }

    /**
     * Unsets upgrade charge field.
     */
    public function unsetUpgradeCharge(): self
    {
        $this->instance->unsetUpgradeCharge();
        return $this;
    }

    /**
     * Sets downgrade credit field.
     *
     * @param string|null $value
     */
    public function downgradeCredit(?string $value): self
    {
        $this->instance->setDowngradeCredit($value);
        return $this;
    }

    /**
     * Unsets downgrade credit field.
     */
    public function unsetDowngradeCredit(): self
    {
        $this->instance->unsetDowngradeCredit();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets updated at field.
     *
     * @param \DateTime|null $value
     */
    public function updatedAt(?\DateTime $value): self
    {
        $this->instance->setUpdatedAt($value);
        return $this;
    }

    /**
     * Sets archived at field.
     *
     * @param \DateTime|null $value
     */
    public function archivedAt(?\DateTime $value): self
    {
        $this->instance->setArchivedAt($value);
        return $this;
    }

    /**
     * Unsets archived at field.
     */
    public function unsetArchivedAt(): self
    {
        $this->instance->unsetArchivedAt();
        return $this;
    }

    /**
     * Sets hide date range on invoice field.
     *
     * @param bool|null $value
     */
    public function hideDateRangeOnInvoice(?bool $value): self
    {
        $this->instance->setHideDateRangeOnInvoice($value);
        return $this;
    }

    /**
     * Sets allow fractional quantities field.
     *
     * @param bool|null $value
     */
    public function allowFractionalQuantities(?bool $value): self
    {
        $this->instance->setAllowFractionalQuantities($value);
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
     * Unsets use site exchange rate field.
     */
    public function unsetUseSiteExchangeRate(): self
    {
        $this->instance->unsetUseSiteExchangeRate();
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
     * Sets event based billing metric id field.
     *
     * @param int|null $value
     */
    public function eventBasedBillingMetricId(?int $value): self
    {
        $this->instance->setEventBasedBillingMetricId($value);
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
     * Unsets interval unit field.
     */
    public function unsetIntervalUnit(): self
    {
        $this->instance->unsetIntervalUnit();
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
     * Initializes a new Component object.
     */
    public function build(): Component
    {
        return CoreHelper::clone($this->instance);
    }
}
