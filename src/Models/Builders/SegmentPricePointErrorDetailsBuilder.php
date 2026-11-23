<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SegmentPricePointErrorDetails;
use Core\Utils\CoreHelper;

/**
 * Builder for model SegmentPricePointErrorDetails
 *
 * @see SegmentPricePointErrorDetails
 */
class SegmentPricePointErrorDetailsBuilder
{
    /**
     * @var SegmentPricePointErrorDetails
     */
    private $instance;

    private function __construct(SegmentPricePointErrorDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Segment Price Point Error Details Builder object.
     *
     * @param string[] $pricePoint
     */
    public static function init(array $pricePoint): self
    {
        return new self(new SegmentPricePointErrorDetails($pricePoint));
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
     * Initializes a new Segment Price Point Error Details object.
     */
    public function build(): SegmentPricePointErrorDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
