<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProductFamily;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProductFamily
 *
 * @see ProductFamily
 */
class ProductFamilyBuilder
{
    /**
     * @var ProductFamily
     */
    private $instance;

    private function __construct(ProductFamily $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Family Builder object.
     */
    public static function init(): self
    {
        return new self(new ProductFamily());
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
     * Initializes a new Product Family object.
     */
    public function build(): ProductFamily
    {
        return CoreHelper::clone($this->instance);
    }
}
