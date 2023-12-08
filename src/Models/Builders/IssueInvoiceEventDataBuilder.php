<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueInvoiceEventData
 *
 * @see IssueInvoiceEventData
 */
class IssueInvoiceEventDataBuilder
{
    /**
     * @var IssueInvoiceEventData
     */
    private $instance;

    private function __construct(IssueInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new issue invoice event data Builder object.
     */
    public static function init(): self
    {
        return new self(new IssueInvoiceEventData());
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
     * Sets from status field.
     */
    public function fromStatus(?string $value): self
    {
        $this->instance->setFromStatus($value);
        return $this;
    }

    /**
     * Sets to status field.
     */
    public function toStatus(?string $value): self
    {
        $this->instance->setToStatus($value);
        return $this;
    }

    /**
     * Sets due amount field.
     */
    public function dueAmount(?string $value): self
    {
        $this->instance->setDueAmount($value);
        return $this;
    }

    /**
     * Sets total amount field.
     */
    public function totalAmount(?string $value): self
    {
        $this->instance->setTotalAmount($value);
        return $this;
    }

    /**
     * Initializes a new issue invoice event data object.
     */
    public function build(): IssueInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
