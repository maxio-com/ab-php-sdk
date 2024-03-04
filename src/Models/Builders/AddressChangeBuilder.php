<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AddressChange;
use AdvancedBillingLib\Models\InvoiceAddress;
use Core\Utils\CoreHelper;

/**
 * Builder for model AddressChange
 *
 * @see AddressChange
 */
class AddressChangeBuilder
{
    /**
     * @var AddressChange
     */
    private $instance;

    private function __construct(AddressChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new address change Builder object.
     */
    public static function init(InvoiceAddress $before, InvoiceAddress $after): self
    {
        return new self(new AddressChange($before, $after));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new address change object.
     */
    public function build(): AddressChange
    {
        return CoreHelper::clone($this->instance);
    }
}
