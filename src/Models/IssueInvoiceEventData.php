<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Example schema for an `issue_invoice` event
 */
class IssueInvoiceEventData implements \JsonSerializable
{
    /**
     * @var string
     */
    private $consolidationLevel;

    /**
     * @var string
     */
    private $fromStatus;

    /**
     * @var string
     */
    private $toStatus;

    /**
     * @var string
     */
    private $dueAmount;

    /**
     * @var string
     */
    private $totalAmount;

    /**
     * @param string $consolidationLevel
     * @param string $fromStatus
     * @param string $toStatus
     * @param string $dueAmount
     * @param string $totalAmount
     */
    public function __construct(
        string $consolidationLevel,
        string $fromStatus,
        string $toStatus,
        string $dueAmount,
        string $totalAmount
    ) {
        $this->consolidationLevel = $consolidationLevel;
        $this->fromStatus = $fromStatus;
        $this->toStatus = $toStatus;
        $this->dueAmount = $dueAmount;
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Consolidation Level.
     * Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one
     * of the following values:
     *
     * * "none": A normal invoice with no consolidation.
     * * "child": An invoice segment which has been combined into a consolidated invoice.
     * * "parent": A consolidated invoice, whose contents are composed of invoice segments.
     *
     * "Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate
     * the member invoice segments.
     *
     * See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746391835).
     */
    public function getConsolidationLevel(): string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     * Consolidation level of the invoice, which is applicable to invoice consolidation.  It will hold one
     * of the following values:
     *
     * * "none": A normal invoice with no consolidation.
     * * "child": An invoice segment which has been combined into a consolidated invoice.
     * * "parent": A consolidated invoice, whose contents are composed of invoice segments.
     *
     * "Parent" invoices do not have lines of their own, but they have subtotals and totals which aggregate
     * the member invoice segments.
     *
     * See also the [invoice consolidation documentation](https://chargify.zendesk.com/hc/en-
     * us/articles/4407746391835).
     *
     * @required
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
    }

    /**
     * Returns From Status.
     * The status of the invoice before event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getFromStatus(): string
    {
        return $this->fromStatus;
    }

    /**
     * Sets From Status.
     * The status of the invoice before event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @required
     * @maps from_status
     * @factory \AdvancedBillingLib\Models\InvoiceStatus::checkValue
     */
    public function setFromStatus(string $fromStatus): void
    {
        $this->fromStatus = $fromStatus;
    }

    /**
     * Returns To Status.
     * The status of the invoice after event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     */
    public function getToStatus(): string
    {
        return $this->toStatus;
    }

    /**
     * Sets To Status.
     * The status of the invoice after event occurence. See [Invoice Statuses](https://chargify.zendesk.
     * com/hc/en-us/articles/4407737494171#line-item-breakdowns) for more.
     *
     * @required
     * @maps to_status
     * @factory \AdvancedBillingLib\Models\InvoiceStatus::checkValue
     */
    public function setToStatus(string $toStatus): void
    {
        $this->toStatus = $toStatus;
    }

    /**
     * Returns Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     */
    public function getDueAmount(): string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     * Amount due on the invoice, which is `total_amount - credit_amount - paid_amount`.
     *
     * @required
     * @maps due_amount
     */
    public function setDueAmount(string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     */
    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     * The invoice total, which is `subtotal_amount - discount_amount + tax_amount`.'
     *
     * @required
     * @maps total_amount
     */
    public function setTotalAmount(string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['consolidation_level'] = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        $json['from_status']         = InvoiceStatus::checkValue($this->fromStatus);
        $json['to_status']           = InvoiceStatus::checkValue($this->toStatus);
        $json['due_amount']          = $this->dueAmount;
        $json['total_amount']        = $this->totalAmount;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
