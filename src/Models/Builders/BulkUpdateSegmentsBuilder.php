<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkUpdateSegments;
use AdvancedBillingLib\Models\BulkUpdateSegmentsItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkUpdateSegments
 *
 * @see BulkUpdateSegments
 */
class BulkUpdateSegmentsBuilder
{
    /**
     * @var BulkUpdateSegments
     */
    private $instance;

    private function __construct(BulkUpdateSegments $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Bulk Update Segments Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkUpdateSegments());
    }

    /**
     * Sets segments field.
     *
     * @param BulkUpdateSegmentsItem[]|null $value
     */
    public function segments(?array $value): self
    {
        $this->instance->setSegments($value);
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
     * Initializes a new Bulk Update Segments object.
     */
    public function build(): BulkUpdateSegments
    {
        return CoreHelper::clone($this->instance);
    }
}
