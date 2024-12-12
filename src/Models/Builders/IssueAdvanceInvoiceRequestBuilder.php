<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueAdvanceInvoiceRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueAdvanceInvoiceRequest
 *
 * @see IssueAdvanceInvoiceRequest
 */
class IssueAdvanceInvoiceRequestBuilder
{
    /**
     * @var IssueAdvanceInvoiceRequest
     */
    private $instance;

    private function __construct(IssueAdvanceInvoiceRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Issue Advance Invoice Request Builder object.
     */
    public static function init(): self
    {
        return new self(new IssueAdvanceInvoiceRequest());
    }

    /**
     * Sets force field.
     *
     * @param bool|null $value
     */
    public function force(?bool $value): self
    {
        $this->instance->setForce($value);
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
     * Initializes a new Issue Advance Invoice Request object.
     */
    public function build(): IssueAdvanceInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
