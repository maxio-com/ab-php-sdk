<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateReasonCode;
use AdvancedBillingLib\Models\UpdateReasonCodeRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateReasonCodeRequest
 *
 * @see UpdateReasonCodeRequest
 */
class UpdateReasonCodeRequestBuilder
{
    /**
     * @var UpdateReasonCodeRequest
     */
    private $instance;

    private function __construct(UpdateReasonCodeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update reason code request Builder object.
     */
    public static function init(UpdateReasonCode $reasonCode): self
    {
        return new self(new UpdateReasonCodeRequest($reasonCode));
    }

    /**
     * Initializes a new update reason code request object.
     */
    public function build(): UpdateReasonCodeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
