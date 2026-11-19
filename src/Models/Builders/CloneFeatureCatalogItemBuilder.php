<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CloneFeatureCatalogItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model CloneFeatureCatalogItem
 *
 * @see CloneFeatureCatalogItem
 */
class CloneFeatureCatalogItemBuilder
{
    /**
     * @var CloneFeatureCatalogItem
     */
    private $instance;

    private function __construct(CloneFeatureCatalogItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Clone Feature Catalog Item Builder object.
     *
     * @param int $featureTemplateId
     * @param string $value
     */
    public static function init(int $featureTemplateId, string $value): self
    {
        return new self(new CloneFeatureCatalogItem($featureTemplateId, $value));
    }

    /**
     * Sets periodicity interval field.
     *
     * @param int|null $value
     */
    public function periodicityInterval(?int $value): self
    {
        $this->instance->setPeriodicityInterval($value);
        return $this;
    }

    /**
     * Unsets periodicity interval field.
     */
    public function unsetPeriodicityInterval(): self
    {
        $this->instance->unsetPeriodicityInterval();
        return $this;
    }

    /**
     * Sets periodicity unit field.
     *
     * @param string|null $value
     */
    public function periodicityUnit(?string $value): self
    {
        $this->instance->setPeriodicityUnit($value);
        return $this;
    }

    /**
     * Unsets periodicity unit field.
     */
    public function unsetPeriodicityUnit(): self
    {
        $this->instance->unsetPeriodicityUnit();
        return $this;
    }

    /**
     * Sets grant expiration interval field.
     *
     * @param int|null $value
     */
    public function grantExpirationInterval(?int $value): self
    {
        $this->instance->setGrantExpirationInterval($value);
        return $this;
    }

    /**
     * Unsets grant expiration interval field.
     */
    public function unsetGrantExpirationInterval(): self
    {
        $this->instance->unsetGrantExpirationInterval();
        return $this;
    }

    /**
     * Sets grant expiration unit field.
     *
     * @param string|null $value
     */
    public function grantExpirationUnit(?string $value): self
    {
        $this->instance->setGrantExpirationUnit($value);
        return $this;
    }

    /**
     * Unsets grant expiration unit field.
     */
    public function unsetGrantExpirationUnit(): self
    {
        $this->instance->unsetGrantExpirationUnit();
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
     * Initializes a new Clone Feature Catalog Item object.
     */
    public function build(): CloneFeatureCatalogItem
    {
        return CoreHelper::clone($this->instance);
    }
}
