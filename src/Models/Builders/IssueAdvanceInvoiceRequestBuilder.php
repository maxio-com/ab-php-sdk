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
     * Initializes a new issue advance invoice request Builder object.
     */
    public static function init(): self
    {
        return new self(new IssueAdvanceInvoiceRequest());
    }

    /**
     * Sets force field.
     */
    public function force(?bool $value): self
    {
        $this->instance->setForce($value);
        return $this;
    }

    /**
     * Initializes a new issue advance invoice request object.
     */
    public function build(): IssueAdvanceInvoiceRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
