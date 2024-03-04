<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueInvoiceRequest
 *
 * @see IssueInvoiceRequest
 */
class IssueInvoiceRequestBuilder
{
    /**
     * @var IssueInvoiceRequest
     */
    private $instance;

    private function __construct(IssueInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new issue invoice request Builder object.
     */
    public static function init(): self
    {
        return new self(new IssueInvoiceRequest());
    }

    /**
     * Sets on failed payment field.
     */
    public function onFailedPayment(?string $value): self
    {
        $this->instance->setOnFailedPayment($value);
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
     * Initializes a new issue invoice request object.
     */
    public function build(): IssueInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
