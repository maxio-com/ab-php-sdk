<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReasonCode;
use AdvancedBillingLib\Models\ReasonCodeResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReasonCodeResponse
 *
 * @see ReasonCodeResponse
 */
class ReasonCodeResponseBuilder
{
    /**
     * @var ReasonCodeResponse
     */
    private $instance;

    private function __construct(ReasonCodeResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reason code response Builder object.
     */
    public static function init(ReasonCode $reasonCode): self
    {
        return new self(new ReasonCodeResponse($reasonCode));
    }

    /**
     * Initializes a new reason code response object.
     */
    public function build(): ReasonCodeResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
