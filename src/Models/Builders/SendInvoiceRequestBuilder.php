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
     * Initializes a new send invoice request Builder object.
     */
    public static function init(): self
    {
        return new self(new SendInvoiceRequest());
    }

    /**
     * Sets recipient emails field.
     */
    public function recipientEmails(?array $value): self
    {
        $this->instance->setRecipientEmails($value);
        return $this;
    }

    /**
     * Sets cc recipient emails field.
     */
    public function ccRecipientEmails(?array $value): self
    {
        $this->instance->setCcRecipientEmails($value);
        return $this;
    }

    /**
     * Sets bcc recipient emails field.
     */
    public function bccRecipientEmails(?array $value): self
    {
        $this->instance->setBccRecipientEmails($value);
        return $this;
    }

    /**
     * Initializes a new send invoice request object.
     */
    public function build(): SendInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
