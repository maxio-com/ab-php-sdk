<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkUpdateSegments;
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
     * Initializes a new bulk update segments Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkUpdateSegments());
    }

    /**
     * Sets segments field.
     */
    public function segments(?array $value): self
    {
        $this->instance->setSegments($value);
        return $this;
    }

    /**
     * Initializes a new bulk update segments object.
     */
    public function build(): BulkUpdateSegments
    {
        return CoreHelper::clone($this->instance);
    }
}
