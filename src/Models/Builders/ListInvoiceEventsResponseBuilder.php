<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplyCreditNoteEvent;
use AdvancedBillingLib\Models\ApplyDebitNoteEvent;
use AdvancedBillingLib\Models\ApplyPaymentEvent;
use AdvancedBillingLib\Models\BackportInvoiceEvent;
use AdvancedBillingLib\Models\ChangeChargebackStatusEvent;
use AdvancedBillingLib\Models\ChangeInvoiceCollectionMethodEvent;
use AdvancedBillingLib\Models\ChangeInvoiceStatusEvent;
use AdvancedBillingLib\Models\CreateCreditNoteEvent;
use AdvancedBillingLib\Models\CreateDebitNoteEvent;
use AdvancedBillingLib\Models\FailedPaymentEvent;
use AdvancedBillingLib\Models\IssueInvoiceEvent;
use AdvancedBillingLib\Models\ListInvoiceEventsResponse;
use AdvancedBillingLib\Models\RefundInvoiceEvent;
use AdvancedBillingLib\Models\RemovePaymentEvent;
use AdvancedBillingLib\Models\VoidInvoiceEvent;
use AdvancedBillingLib\Models\VoidRemainderEvent;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListInvoiceEventsResponse
 *
 * @see ListInvoiceEventsResponse
 */
class ListInvoiceEventsResponseBuilder
{
    /**
     * @var ListInvoiceEventsResponse
     */
    private $instance;

    private function __construct(ListInvoiceEventsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Invoice Events Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListInvoiceEventsResponse());
    }

    /**
     * Sets events field.
     *
     * @param array<ApplyCreditNoteEvent|ApplyDebitNoteEvent|ApplyPaymentEvent|BackportInvoiceEvent|ChangeChargebackStatusEvent|ChangeInvoiceCollectionMethodEvent|ChangeInvoiceStatusEvent|CreateCreditNoteEvent|CreateDebitNoteEvent|FailedPaymentEvent|IssueInvoiceEvent|RefundInvoiceEvent|RemovePaymentEvent|VoidInvoiceEvent|VoidRemainderEvent>|null $value
     */
    public function events(?array $value): self
    {
        $this->instance->setEvents($value);
        return $this;
    }

    /**
     * Sets page field.
     *
     * @param int|null $value
     */
    public function page(?int $value): self
    {
        $this->instance->setPage($value);
        return $this;
    }

    /**
     * Sets per page field.
     *
     * @param int|null $value
     */
    public function perPage(?int $value): self
    {
        $this->instance->setPerPage($value);
        return $this;
    }

    /**
     * Sets total pages field.
     *
     * @param int|null $value
     */
    public function totalPages(?int $value): self
    {
        $this->instance->setTotalPages($value);
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
     * Initializes a new List Invoice Events Response object.
     */
    public function build(): ListInvoiceEventsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
