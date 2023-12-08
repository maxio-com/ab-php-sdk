<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DeductServiceCredit;
use Core\Utils\CoreHelper;

/**
 * Builder for model DeductServiceCredit
 *
 * @see DeductServiceCredit
 */
class DeductServiceCreditBuilder
{
    /**
     * @var DeductServiceCredit
     */
    private $instance;

    private function __construct(DeductServiceCredit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deduct service credit Builder object.
     */
    public static function init($amount, string $memo): self
    {
        return new self(new DeductServiceCredit($amount, $memo));
    }

    /**
     * Initializes a new deduct service credit object.
     */
    public function build(): DeductServiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
