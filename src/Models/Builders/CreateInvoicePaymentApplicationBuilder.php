<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateInvoicePaymentApplication;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateInvoicePaymentApplication
 *
 * @see CreateInvoicePaymentApplication
 */
class CreateInvoicePaymentApplicationBuilder
{
    /**
     * @var CreateInvoicePaymentApplication
     */
    private $instance;

    private function __construct(CreateInvoicePaymentApplication $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create invoice payment application Builder object.
     */
    public static function init(string $invoiceUid, string $amount): self
    {
        return new self(new CreateInvoicePaymentApplication($invoiceUid, $amount));
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
     * Initializes a new create invoice payment application object.
     */
    public function build(): CreateInvoicePaymentApplication
    {
        return CoreHelper::clone($this->instance);
    }
}
