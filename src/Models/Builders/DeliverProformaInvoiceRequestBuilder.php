<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DeliverProformaInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model DeliverProformaInvoiceRequest
 *
 * @see DeliverProformaInvoiceRequest
 */
class DeliverProformaInvoiceRequestBuilder
{
    /**
     * @var DeliverProformaInvoiceRequest
     */
    private $instance;

    private function __construct(DeliverProformaInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Deliver Proforma Invoice Request Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliverProformaInvoiceRequest());
    }

    /**
     * Sets recipient emails field.
     *
     * @param string[]|null $value
     */
    public function recipientEmails(?array $value): self
    {
        $this->instance->setRecipientEmails($value);
        return $this;
    }

    /**
     * Sets cc recipient emails field.
     *
     * @param string[]|null $value
     */
    public function ccRecipientEmails(?array $value): self
    {
        $this->instance->setCcRecipientEmails($value);
        return $this;
    }

    /**
     * Sets bcc recipient emails field.
     *
     * @param string[]|null $value
     */
    public function bccRecipientEmails(?array $value): self
    {
        $this->instance->setBccRecipientEmails($value);
        return $this;
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
     * Initializes a new Deliver Proforma Invoice Request object.
     */
    public function build(): DeliverProformaInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
