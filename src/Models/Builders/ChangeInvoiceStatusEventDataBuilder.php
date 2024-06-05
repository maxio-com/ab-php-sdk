<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChangeInvoiceStatusEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChangeInvoiceStatusEventData
 *
 * @see ChangeInvoiceStatusEventData
 */
class ChangeInvoiceStatusEventDataBuilder
{
    /**
     * @var ChangeInvoiceStatusEventData
     */
    private $instance;

    private function __construct(ChangeInvoiceStatusEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new change invoice status event data Builder object.
     */
    public static function init(string $fromStatus, string $toStatus): self
    {
        return new self(new ChangeInvoiceStatusEventData($fromStatus, $toStatus));
    }

    /**
     * Sets gateway trans id field.
     */
    public function gatewayTransId(?string $value): self
    {
        $this->instance->setGatewayTransId($value);
        return $this;
    }

    /**
     * Sets amount field.
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets consolidation level field.
     */
    public function consolidationLevel(?string $value): self
    {
        $this->instance->setConsolidationLevel($value);
        return $this;
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
     * Initializes a new change invoice status event data object.
     */
    public function build(): ChangeInvoiceStatusEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
