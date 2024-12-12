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
     * Initializes a new Payment Collection Method Changed Builder object.
     *
     * @param string $previousValue
     * @param string $currentValue
     */
    public static function init(string $previousValue, string $currentValue): self
    {
        return new self(new PaymentCollectionMethodChanged($previousValue, $currentValue));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Payment Collection Method Changed object.
     */
    public function build(): PaymentCollectionMethodChanged
    {
        return CoreHelper::clone($this->instance);
    }
}
