<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureCatalogItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureCatalogItem
 *
 * @see FeatureCatalogItem
 */
class FeatureCatalogItemBuilder
{
    /**
     * @var FeatureCatalogItem
     */
    private $instance;

    private function __construct(FeatureCatalogItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Catalog Item Builder object.
     */
    public static function init(): self
    {
        return new self(new FeatureCatalogItem());
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
     * Sets feature template id field.
     *
     * @param int|null $value
     */
    public function featureTemplateId(?int $value): self
    {
        $this->instance->setFeatureTemplateId($value);
        return $this;
    }

    /**
     * Sets feature key field.
     *
     * @param string|null $value
     */
    public function featureKey(?string $value): self
    {
        $this->instance->setFeatureKey($value);
        return $this;
    }

    /**
     * Sets feature name field.
     *
     * @param string|null $value
     */
    public function featureName(?string $value): self
    {
        $this->instance->setFeatureName($value);
        return $this;
    }

    /**
     * Sets feature kind field.
     *
     * @param string|null $value
     */
    public function featureKind(?string $value): self
    {
        $this->instance->setFeatureKind($value);
        return $this;
    }

    /**
     * Sets value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
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
     * Sets price point type field.
     *
     * @param string|null $value
     */
    public function pricePointType(?string $value): self
    {
        $this->instance->setPricePointType($value);
        return $this;
    }

    /**
     * Unsets price point type field.
     */
    public function unsetPricePointType(): self
    {
        $this->instance->unsetPricePointType();
        return $this;
    }

    /**
     * Sets price point id field.
     *
     * @param int|null $value
     */
    public function pricePointId(?int $value): self
    {
        $this->instance->setPricePointId($value);
        return $this;
    }

    /**
     * Unsets price point id field.
     */
    public function unsetPricePointId(): self
    {
        $this->instance->unsetPricePointId();
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
     * Initializes a new Feature Catalog Item object.
     */
    public function build(): FeatureCatalogItem
    {
        return CoreHelper::clone($this->instance);
    }
}
