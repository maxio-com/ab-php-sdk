<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureTemplate;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureTemplate
 *
 * @see FeatureTemplate
 */
class FeatureTemplateBuilder
{
    /**
     * @var FeatureTemplate
     */
    private $instance;

    private function __construct(FeatureTemplate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Template Builder object.
     */
    public static function init(): self
    {
        return new self(new FeatureTemplate());
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
     * Sets key field.
     *
     * @param string|null $value
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
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
     * Sets unit field.
     *
     * @param string|null $value
     */
    public function unit(?string $value): self
    {
        $this->instance->setUnit($value);
        return $this;
    }

    /**
     * Unsets unit field.
     */
    public function unsetUnit(): self
    {
        $this->instance->unsetUnit();
        return $this;
    }

    /**
     * Sets value type field.
     *
     * @param string|null $value
     */
    public function valueType(?string $value): self
    {
        $this->instance->setValueType($value);
        return $this;
    }

    /**
     * Sets default value field.
     *
     * @param string|null $value
     */
    public function defaultValue(?string $value): self
    {
        $this->instance->setDefaultValue($value);
        return $this;
    }

    /**
     * Unsets default value field.
     */
    public function unsetDefaultValue(): self
    {
        $this->instance->unsetDefaultValue();
        return $this;
    }

    /**
     * Sets default periodicity interval field.
     *
     * @param int|null $value
     */
    public function defaultPeriodicityInterval(?int $value): self
    {
        $this->instance->setDefaultPeriodicityInterval($value);
        return $this;
    }

    /**
     * Unsets default periodicity interval field.
     */
    public function unsetDefaultPeriodicityInterval(): self
    {
        $this->instance->unsetDefaultPeriodicityInterval();
        return $this;
    }

    /**
     * Sets default periodicity unit field.
     *
     * @param string|null $value
     */
    public function defaultPeriodicityUnit(?string $value): self
    {
        $this->instance->setDefaultPeriodicityUnit($value);
        return $this;
    }

    /**
     * Unsets default periodicity unit field.
     */
    public function unsetDefaultPeriodicityUnit(): self
    {
        $this->instance->unsetDefaultPeriodicityUnit();
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
     * Sets products count field.
     *
     * @param int|null $value
     */
    public function productsCount(?int $value): self
    {
        $this->instance->setProductsCount($value);
        return $this;
    }

    /**
     * Sets plans count field.
     *
     * @param int|null $value
     */
    public function plansCount(?int $value): self
    {
        $this->instance->setPlansCount($value);
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
     * Initializes a new Feature Template object.
     */
    public function build(): FeatureTemplate
    {
        return CoreHelper::clone($this->instance);
    }
}
