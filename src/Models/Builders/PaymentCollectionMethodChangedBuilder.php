<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentCollectionMethodChanged;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentCollectionMethodChanged
 *
 * @see PaymentCollectionMethodChanged
 */
class PaymentCollectionMethodChangedBuilder
{
    /**
     * @var PaymentCollectionMethodChanged
     */
    private $instance;

    private function __construct(PaymentCollectionMethodChanged $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new payment collection method changed Builder object.
     */
    public static function init(string $previousValue, string $currentValue): self
    {
        return new self(new PaymentCollectionMethodChanged($previousValue, $currentValue));
    }

    /**
     * Initializes a new payment collection method changed object.
     */
    public function build(): PaymentCollectionMethodChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
