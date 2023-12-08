<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoiceIssued implements \JsonSerializable
{
    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $dueDate;

    /**
     * @var string
     */
    private $issueDate;

    /**
     * @var string
     */
    private $paidDate;

    /**
     * @var string
     */
    private $dueAmount;

    /**
     * @var string
     */
    private $paidAmount;

    /**
     * @var string
     */
    private $taxAmount;

    /**
     * @var string
     */
    private $refundAmount;

    /**
     * @var string
     */
    private $totalAmount;

    /**
     * @var string
     */
    private $statusAmount;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var string
     */
    private $consolidationLevel;

    /**
     * @var InvoiceLineItemEventData[]
     */
    private $lineItems;

    /**
     * @param string $uid
     * @param string $number
     * @param string $role
     * @param string $dueDate
     * @param string $issueDate
     * @param string $paidDate
     * @param string $dueAmount
     * @param string $paidAmount
     * @param string $taxAmount
     * @param string $refundAmount
     * @param string $totalAmount
     * @param string $statusAmount
     * @param string $productName
     * @param string $consolidationLevel
     * @param InvoiceLineItemEventData[] $lineItems
     */
    public function __construct(
        string $uid,
        string $number,
        string $role,
        string $dueDate,
        string $issueDate,
        string $paidDate,
        string $dueAmount,
        string $paidAmount,
        string $taxAmount,
        string $refundAmount,
        string $totalAmount,
        string $statusAmount,
        string $productName,
        string $consolidationLevel,
        array $lineItems
    ) {
        $this->uid = $uid;
        $this->number = $number;
        $this->role = $role;
        $this->dueDate = $dueDate;
        $this->issueDate = $issueDate;
        $this->paidDate = $paidDate;
        $this->dueAmount = $dueAmount;
        $this->paidAmount = $paidAmount;
        $this->taxAmount = $taxAmount;
        $this->refundAmount = $refundAmount;
        $this->totalAmount = $totalAmount;
        $this->statusAmount = $statusAmount;
        $this->productName = $productName;
        $this->consolidationLevel = $consolidationLevel;
        $this->lineItems = $lineItems;
    }

    /**
     * Returns Uid.
     */
    public function getUid(): string
    {
        return $this->uid;
    }

    /**
     * Sets Uid.
     *
     * @required
     * @maps uid
     */
    public function setUid(string $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * Returns Number.
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Sets Number.
     *
     * @required
     * @maps number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Returns Role.
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Sets Role.
     *
     * @required
     * @maps role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * Returns Due Date.
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * Sets Due Date.
     *
     * @required
     * @maps due_date
     */
    public function setDueDate(string $dueDate): void
    {
        $this->dueDate = $dueDate;
    }

    /**
     * Returns Issue Date.
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    /**
     * Sets Issue Date.
     *
     * @required
     * @maps issue_date
     */
    public function setIssueDate(string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Returns Paid Date.
     */
    public function getPaidDate(): string
    {
        return $this->paidDate;
    }

    /**
     * Sets Paid Date.
     *
     * @required
     * @maps paid_date
     */
    public function setPaidDate(string $paidDate): void
    {
        $this->paidDate = $paidDate;
    }

    /**
     * Returns Due Amount.
     */
    public function getDueAmount(): string
    {
        return $this->dueAmount;
    }

    /**
     * Sets Due Amount.
     *
     * @required
     * @maps due_amount
     */
    public function setDueAmount(string $dueAmount): void
    {
        $this->dueAmount = $dueAmount;
    }

    /**
     * Returns Paid Amount.
     */
    public function getPaidAmount(): string
    {
        return $this->paidAmount;
    }

    /**
     * Sets Paid Amount.
     *
     * @required
     * @maps paid_amount
     */
    public function setPaidAmount(string $paidAmount): void
    {
        $this->paidAmount = $paidAmount;
    }

    /**
     * Returns Tax Amount.
     */
    public function getTaxAmount(): string
    {
        return $this->taxAmount;
    }

    /**
     * Sets Tax Amount.
     *
     * @required
     * @maps tax_amount
     */
    public function setTaxAmount(string $taxAmount): void
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * Returns Refund Amount.
     */
    public function getRefundAmount(): string
    {
        return $this->refundAmount;
    }

    /**
     * Sets Refund Amount.
     *
     * @required
     * @maps refund_amount
     */
    public function setRefundAmount(string $refundAmount): void
    {
        $this->refundAmount = $refundAmount;
    }

    /**
     * Returns Total Amount.
     */
    public function getTotalAmount(): string
    {
        return $this->totalAmount;
    }

    /**
     * Sets Total Amount.
     *
     * @required
     * @maps total_amount
     */
    public function setTotalAmount(string $totalAmount): void
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * Returns Status Amount.
     */
    public function getStatusAmount(): string
    {
        return $this->statusAmount;
    }

    /**
     * Sets Status Amount.
     *
     * @required
     * @maps status_amount
     */
    public function setStatusAmount(string $statusAmount): void
    {
        $this->statusAmount = $statusAmount;
    }

    /**
     * Returns Product Name.
     */
    public function getProductName(): string
    {
        return $this->productName;
    }

    /**
     * Sets Product Name.
     *
     * @required
     * @maps product_name
     */
    public function setProductName(string $productName): void
    {
        $this->productName = $productName;
    }

    /**
     * Returns Consolidation Level.
     */
    public function getConsolidationLevel(): string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     *
     * @required
     * @maps consolidation_level
     */
    public function setConsolidationLevel(string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
    }

    /**
     * Returns Line Items.
     *
     * @return InvoiceLineItemEventData[]
     */
    public function getLineItems(): array
    {
        return $this->lineItems;
    }

    /**
     * Sets Line Items.
     *
     * @required
     * @maps line_items
     *
     * @param InvoiceLineItemEventData[] $lineItems
     */
    public function setLineItems(array $lineItems): void
    {
        $this->lineItems = $lineItems;
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
        $json['uid']                 = $this->uid;
        $json['number']              = $this->number;
        $json['role']                = $this->role;
        $json['due_date']            = $this->dueDate;
        $json['issue_date']          = $this->issueDate;
        $json['paid_date']           = $this->paidDate;
        $json['due_amount']          = $this->dueAmount;
        $json['paid_amount']         = $this->paidAmount;
        $json['tax_amount']          = $this->taxAmount;
        $json['refund_amount']       = $this->refundAmount;
        $json['total_amount']        = $this->totalAmount;
        $json['status_amount']       = $this->statusAmount;
        $json['product_name']        = $this->productName;
        $json['consolidation_level'] = $this->consolidationLevel;
        $json['line_items']          = $this->lineItems;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
