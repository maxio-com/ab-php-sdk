<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReactivationBilling;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReactivationBilling
 *
 * @see ReactivationBilling
 */
class ReactivationBillingBuilder
{
    /**
     * @var ReactivationBilling
     */
    private $instance;

    private function __construct(ReactivationBilling $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reactivation billing Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivationBilling());
    }

    /**
     * Sets reactivation charge field.
     */
    public function reactivationCharge(?string $value): self
    {
        $this->instance->setReactivationCharge($value);
        return $this;
    }

    /**
     * Initializes a new reactivation billing object.
     */
    public function build(): ReactivationBilling
    {
        return CoreHelper::clone($this->instance);
    }
}
