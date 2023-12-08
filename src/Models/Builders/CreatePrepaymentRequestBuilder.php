<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatePrepayment;
use AdvancedBillingLib\Models\CreatePrepaymentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaymentRequest
 *
 * @see CreatePrepaymentRequest
 */
class CreatePrepaymentRequestBuilder
{
    /**
     * @var CreatePrepaymentRequest
     */
    private $instance;

    private function __construct(CreatePrepaymentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create prepayment request Builder object.
     */
    public static function init(CreatePrepayment $prepayment): self
    {
        return new self(new CreatePrepaymentRequest($prepayment));
    }

    /**
     * Initializes a new create prepayment request object.
     */
    public function build(): CreatePrepaymentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
