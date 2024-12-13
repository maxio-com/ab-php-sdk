<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SendInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model SendInvoiceRequest
 *
 * @see SendInvoiceRequest
 */
class SendInvoiceRequestBuilder
{
    /**
     * @var SendInvoiceRequest
     */
    private $instance;

    private function __construct(SendInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Send Invoice Request Builder object.
     */
    public static function init(): self
    {
        return new self(new SendInvoiceRequest());
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
     * Initializes a new Send Invoice Request object.
     */
    public function build(): SendInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
