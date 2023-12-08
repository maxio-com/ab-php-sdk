<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerChange;
use AdvancedBillingLib\Models\CustomerChangesPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerChangesPreviewResponse
 *
 * @see CustomerChangesPreviewResponse
 */
class CustomerChangesPreviewResponseBuilder
{
    /**
     * @var CustomerChangesPreviewResponse
     */
    private $instance;

    private function __construct(CustomerChangesPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new customer changes preview response Builder object.
     */
    public static function init(CustomerChange $changes): self
    {
        return new self(new CustomerChangesPreviewResponse($changes));
    }

    /**
     * Initializes a new customer changes preview response object.
     */
    public function build(): CustomerChangesPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
