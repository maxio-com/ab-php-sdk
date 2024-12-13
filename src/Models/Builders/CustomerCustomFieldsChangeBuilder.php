<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerCustomFieldsChange;
use AdvancedBillingLib\Models\InvoiceCustomField;
use Core\Utils\CoreHelper;

/**
 * Builder for model CustomerCustomFieldsChange
 *
 * @see CustomerCustomFieldsChange
 */
class CustomerCustomFieldsChangeBuilder
{
    /**
     * @var CustomerCustomFieldsChange
     */
    private $instance;

    private function __construct(CustomerCustomFieldsChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customer Custom Fields Change Builder object.
     *
     * @param InvoiceCustomField[] $before
     * @param InvoiceCustomField[] $after
     */
    public static function init(array $before, array $after): self
    {
        return new self(new CustomerCustomFieldsChange($before, $after));
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
     * Initializes a new Customer Custom Fields Change object.
     */
    public function build(): CustomerCustomFieldsChange
    {
        return CoreHelper::clone($this->instance);
    }
}
