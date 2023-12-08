<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BulkCreateSegments;
use Core\Utils\CoreHelper;

/**
 * Builder for model BulkCreateSegments
 *
 * @see BulkCreateSegments
 */
class BulkCreateSegmentsBuilder
{
    /**
     * @var BulkCreateSegments
     */
    private $instance;

    private function __construct(BulkCreateSegments $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new bulk create segments Builder object.
     */
    public static function init(): self
    {
        return new self(new BulkCreateSegments());
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
     * Initializes a new bulk create segments object.
     */
    public function build(): BulkCreateSegments
    {
        return CoreHelper::clone($this->instance);
    }
}
