<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaCustomField;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaCustomField
 *
 * @see ProformaCustomField
 */
class ProformaCustomFieldBuilder
{
    /**
     * @var ProformaCustomField
     */
    private $instance;

    private function __construct(ProformaCustomField $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new proforma custom field Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaCustomField());
    }

    /**
     * Sets owner id field.
     */
    public function ownerId(?int $value): self
    {
        $this->instance->setOwnerId($value);
        return $this;
    }

    /**
     * Sets owner type field.
     */
    public function ownerType(?string $value): self
    {
        $this->instance->setOwnerType($value);
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
     * Sets value field.
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Sets metadatum id field.
     */
    public function metadatumId(?int $value): self
    {
        $this->instance->setMetadatumId($value);
        return $this;
    }

    /**
     * Initializes a new proforma custom field object.
     */
    public function build(): ProformaCustomField
    {
        return CoreHelper::clone($this->instance);
    }
}
