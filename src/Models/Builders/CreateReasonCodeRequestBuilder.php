<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateReasonCode;
use AdvancedBillingLib\Models\CreateReasonCodeRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateReasonCodeRequest
 *
 * @see CreateReasonCodeRequest
 */
class CreateReasonCodeRequestBuilder
{
    /**
     * @var CreateReasonCodeRequest
     */
    private $instance;

    private function __construct(CreateReasonCodeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create reason code request Builder object.
     */
    public static function init(CreateReasonCode $reasonCode): self
    {
        return new self(new CreateReasonCodeRequest($reasonCode));
    }

    /**
     * Initializes a new create reason code request object.
     */
    public function build(): CreateReasonCodeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
