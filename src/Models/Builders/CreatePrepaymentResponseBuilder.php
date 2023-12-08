<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreatedPrepayment;
use AdvancedBillingLib\Models\CreatePrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreatePrepaymentResponse
 *
 * @see CreatePrepaymentResponse
 */
class CreatePrepaymentResponseBuilder
{
    /**
     * @var CreatePrepaymentResponse
     */
    private $instance;

    private function __construct(CreatePrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create prepayment response Builder object.
     */
    public static function init(CreatedPrepayment $prepayment): self
    {
        return new self(new CreatePrepaymentResponse($prepayment));
    }

    /**
     * Initializes a new create prepayment response object.
     */
    public function build(): CreatePrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
