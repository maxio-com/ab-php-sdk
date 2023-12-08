<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomFieldValueChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomFieldValueChange
 *
 * @see CustomFieldValueChange
 */
class CustomFieldValueChangeBuilder
{
    /**
     * @var CustomFieldValueChange
     */
    private $instance;

    private function __construct(CustomFieldValueChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new custom field value change Builder object.
     */
    public static function init(
        string $eventType,
        string $metafieldName,
        int $metafieldId,
        string $resourceType,
        int $resourceId
    ): self {
        return new self(
            new CustomFieldValueChange($eventType, $metafieldName, $metafieldId, $resourceType, $resourceId)
        );
    }

    /**
     * Sets old value field.
     */
    public function oldValue(?string $value): self
    {
        $this->instance->setOldValue($value);
        return $this;
    }

    /**
     * Sets new value field.
     */
    public function newValue(?string $value): self
    {
        $this->instance->setNewValue($value);
        return $this;
    }

    /**
     * Initializes a new custom field value change object.
     */
    public function build(): CustomFieldValueChange
    {
        return CoreHelper::clone($this->instance);
    }
}
