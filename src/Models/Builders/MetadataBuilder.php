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
     * Initializes a new metadata Builder object.
     */
    public static function init(): self
    {
        return new self(new Metadata());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets resource id field.
     */
    public function resourceId(?int $value): self
    {
        $this->instance->setResourceId($value);
        return $this;
    }

    /**
     * Sets name field.
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets deleted at field.
     */
    public function deletedAt(?string $value): self
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
     */
    public function metafieldId(?int $value): self
    {
        $this->instance->setMetafieldId($value);
        return $this;
    }

    /**
     * Initializes a new metadata object.
     */
    public function build(): Metadata
    {
        return CoreHelper::clone($this->instance);
    }
}
