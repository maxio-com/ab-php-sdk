<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Segment;
use AdvancedBillingLib\Models\SegmentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SegmentResponse
 *
 * @see SegmentResponse
 */
class SegmentResponseBuilder
{
    /**
     * @var SegmentResponse
     */
    private $instance;

    private function __construct(SegmentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new segment response Builder object.
     */
    public static function init(): self
    {
        return new self(new SegmentResponse());
    }

    /**
     * Sets segment field.
     */
    public function segment(?Segment $value): self
    {
        $this->instance->setSegment($value);
        return $this;
    }

    /**
     * Initializes a new segment response object.
     */
    public function build(): SegmentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
