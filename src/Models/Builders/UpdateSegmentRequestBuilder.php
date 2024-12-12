<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSegment;
use AdvancedBillingLib\Models\UpdateSegmentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSegmentRequest
 *
 * @see UpdateSegmentRequest
 */
class UpdateSegmentRequestBuilder
{
    /**
     * @var UpdateSegmentRequest
     */
    private $instance;

    private function __construct(UpdateSegmentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Update Segment Request Builder object.
     *
     * @param UpdateSegment $segment
     */
    public static function init(UpdateSegment $segment): self
    {
        return new self(new UpdateSegmentRequest($segment));
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
     * Initializes a new Update Segment Request object.
     */
    public function build(): UpdateSegmentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
