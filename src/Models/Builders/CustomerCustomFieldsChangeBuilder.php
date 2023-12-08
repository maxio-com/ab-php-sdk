<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CustomerCustomFieldsChange;
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
     * Initializes a new customer custom fields change Builder object.
     */
    public static function init(): self
    {
        return new self(new CustomerCustomFieldsChange());
    }

    /**
     * Sets before field.
     */
    public function before(?array $value): self
    {
        $this->instance->setBefore($value);
        return $this;
    }

    /**
     * Sets after field.
     */
    public function after(?array $value): self
    {
        $this->instance->setAfter($value);
        return $this;
    }

    /**
     * Initializes a new customer custom fields change object.
     */
    public function build(): CustomerCustomFieldsChange
    {
        return CoreHelper::clone($this->instance);
    }
}
