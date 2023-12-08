<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Prepayment;
use AdvancedBillingLib\Models\PrepaymentResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentResponse
 *
 * @see PrepaymentResponse
 */
class PrepaymentResponseBuilder
{
    /**
     * @var PrepaymentResponse
     */
    private $instance;

    private function __construct(PrepaymentResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayment response Builder object.
     */
    public static function init(Prepayment $prepayment): self
    {
        return new self(new PrepaymentResponse($prepayment));
    }

    /**
     * Initializes a new prepayment response object.
     */
    public function build(): PrepaymentResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
