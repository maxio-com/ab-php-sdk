<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Metadata;
use Core\Utils\CoreHelper;

/**
 * Builder for model Metadata
 *
 * @see Metadata
 */
class MetadataBuilder
{
    /**
     * @var Metadata
     */
    private $instance;

    private function __construct(Metadata $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new Metadata());
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
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
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
     * Unsets value field.
     */
    public function unsetValue(): self
    {
        $this->instance->unsetValue();
        return $this;
    }

    /**
     * Sets resource id field.
     *
     * @param int|null $value
     */
    public function resourceId(?int $value): self
    {
        $this->instance->setResourceId($value);
        return $this;
    }

    /**
     * Unsets resource id field.
     */
    public function unsetResourceId(): self
    {
        $this->instance->unsetResourceId();
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
     * Sets deleted at field.
     *
     * @param \DateTime|null $value
     */
    public function deletedAt(?\DateTime $value): self
    {
        $this->instance->setDeletedAt($value);
        return $this;
    }

    /**
     * Unsets deleted at field.
     */
    public function unsetDeletedAt(): self
    {
        $this->instance->unsetDeletedAt();
        return $this;
    }

    /**
     * Sets metafield id field.
     *
     * @param int|null $value
     */
    public function metafieldId(?int $value): self
    {
        $this->instance->setMetafieldId($value);
        return $this;
    }

    /**
     * Unsets metafield id field.
     */
    public function unsetMetafieldId(): self
    {
        $this->instance->unsetMetafieldId();
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
     * Initializes a new Metadata object.
     */
    public function build(): Metadata
    {
        return CoreHelper::clone($this->instance);
    }
}
