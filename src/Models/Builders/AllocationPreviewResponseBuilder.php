<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationPreview;
use AdvancedBillingLib\Models\AllocationPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model AllocationPreviewResponse
 *
 * @see AllocationPreviewResponse
 */
class AllocationPreviewResponseBuilder
{
    /**
     * @var AllocationPreviewResponse
     */
    private $instance;

    private function __construct(AllocationPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new allocation preview response Builder object.
     */
    public static function init(AllocationPreview $allocationPreview): self
    {
        return new self(new AllocationPreviewResponse($allocationPreview));
    }

    /**
     * Initializes a new allocation preview response object.
     */
    public function build(): AllocationPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
