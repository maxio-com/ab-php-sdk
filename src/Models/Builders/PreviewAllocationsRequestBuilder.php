<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PreviewAllocationsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model PreviewAllocationsRequest
 *
 * @see PreviewAllocationsRequest
 */
class PreviewAllocationsRequestBuilder
{
    /**
     * @var PreviewAllocationsRequest
     */
    private $instance;

    private function __construct(PreviewAllocationsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new preview allocations request Builder object.
     */
    public static function init(array $allocations): self
    {
        return new self(new PreviewAllocationsRequest($allocations));
    }

    /**
     * Sets effective proration date field.
     */
    public function effectiveProrationDate(?string $value): self
    {
        $this->instance->setEffectiveProrationDate($value);
        return $this;
    }

    /**
     * Initializes a new preview allocations request object.
     */
    public function build(): PreviewAllocationsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
