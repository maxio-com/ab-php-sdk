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
     * Initializes a new update segment request Builder object.
     */
    public static function init(UpdateSegment $segment): self
    {
        return new self(new UpdateSegmentRequest($segment));
    }

    /**
     * Initializes a new update segment request object.
     */
    public function build(): UpdateSegmentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
