<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Usage;
use AdvancedBillingLib\Models\UsageResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model UsageResponse
 *
 * @see UsageResponse
 */
class UsageResponseBuilder
{
    /**
     * @var UsageResponse
     */
    private $instance;

    private function __construct(UsageResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new usage response Builder object.
     */
    public static function init(Usage $usage): self
    {
        return new self(new UsageResponse($usage));
    }

    /**
     * Initializes a new usage response object.
     */
    public function build(): UsageResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
