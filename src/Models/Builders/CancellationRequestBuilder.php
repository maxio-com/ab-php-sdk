<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CancellationOptions;
use AdvancedBillingLib\Models\CancellationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CancellationRequest
 *
 * @see CancellationRequest
 */
class CancellationRequestBuilder
{
    /**
     * @var CancellationRequest
     */
    private $instance;

    private function __construct(CancellationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new cancellation request Builder object.
     */
    public static function init(CancellationOptions $subscription): self
    {
        return new self(new CancellationRequest($subscription));
    }

    /**
     * Initializes a new cancellation request object.
     */
    public function build(): CancellationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
