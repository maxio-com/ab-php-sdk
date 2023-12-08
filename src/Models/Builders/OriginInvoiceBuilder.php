<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\OriginInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model OriginInvoice
 *
 * @see OriginInvoice
 */
class OriginInvoiceBuilder
{
    /**
     * @var OriginInvoice
     */
    private $instance;

    private function __construct(OriginInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new origin invoice Builder object.
     */
    public static function init(): self
    {
        return new self(new OriginInvoice());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Initializes a new origin invoice object.
     */
    public function build(): OriginInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
