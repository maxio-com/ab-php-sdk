<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\VoidInvoice;
use Core\Utils\CoreHelper;

/**
 * Builder for model VoidInvoice
 *
 * @see VoidInvoice
 */
class VoidInvoiceBuilder
{
    /**
     * @var VoidInvoice
     */
    private $instance;

    private function __construct(VoidInvoice $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new void invoice Builder object.
     */
    public static function init(string $reason): self
    {
        return new self(new VoidInvoice($reason));
    }

    /**
     * Initializes a new void invoice object.
     */
    public function build(): VoidInvoice
    {
        return CoreHelper::clone($this->instance);
    }
}
