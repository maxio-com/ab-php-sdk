<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateSegment;
use AdvancedBillingLib\Models\CreateSegmentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateSegmentRequest
 *
 * @see CreateSegmentRequest
 */
class CreateSegmentRequestBuilder
{
    /**
     * @var CreateSegmentRequest
     */
    private $instance;

    private function __construct(CreateSegmentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create segment request Builder object.
     */
    public static function init(CreateSegment $segment): self
    {
        return new self(new CreateSegmentRequest($segment));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new create segment request object.
     */
    public function build(): CreateSegmentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
