<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PendingCancellationChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model PendingCancellationChange
 *
 * @see PendingCancellationChange
 */
class PendingCancellationChangeBuilder
{
    /**
     * @var PendingCancellationChange
     */
    private $instance;

    private function __construct(PendingCancellationChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new pending cancellation change Builder object.
     */
    public static function init(string $cancellationState, string $cancelsAt): self
    {
        return new self(new PendingCancellationChange($cancellationState, $cancelsAt));
    }

    /**
     * Initializes a new pending cancellation change object.
     */
    public function build(): PendingCancellationChange
    {
        return CoreHelper::clone($this->instance);
    }
}
