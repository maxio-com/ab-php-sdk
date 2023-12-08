<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ProformaInvoiceIssued implements \JsonSerializable
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
    private $deliveryDate;

    /**
     * @var string
     */
    private $createdAt;

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
    private $totalAmount;

    /**
     * @var string
     */
    private $productName;

    /**
     * @var InvoiceLineItemEventData[]
     */
    private $lineItems;

    /**
     * @param string $uid
     * @param string $number
     * @param string $role
     * @param string $deliveryDate
     * @param string $createdAt
     * @param string $dueAmount
     * @param string $paidAmount
     * @param string $taxAmount
     * @param string $totalAmount
     * @param string $productName
     * @param InvoiceLineItemEventData[] $lineItems
     */
    public function __construct(
        string $uid,
        string $number,
        string $role,
        string $deliveryDate,
        string $createdAt,
        string $dueAmount,
        string $paidAmount,
        string $taxAmount,
        string $totalAmount,
        string $productName,
        array $lineItems
    ) {
        $this->uid = $uid;
        $this->number = $number;
        $this->role = $role;
        $this->deliveryDate = $deliveryDate;
        $this->createdAt = $createdAt;
        $this->dueAmount = $dueAmount;
        $this->paidAmount = $paidAmount;
        $this->taxAmount = $taxAmount;
        $this->totalAmount = $totalAmount;
        $this->productName = $productName;
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
     * Returns Delivery Date.
     */
    public function getDeliveryDate(): string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     *
     * @required
     * @maps delivery_date
     */
    public function setDeliveryDate(string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     */
    public function setCreatedAt(string $createdAt): void
    {
        $this->createdAt = $createdAt;
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
        $json['uid']           = $this->uid;
        $json['number']        = $this->number;
        $json['role']          = $this->role;
        $json['delivery_date'] = $this->deliveryDate;
        $json['created_at']    = $this->createdAt;
        $json['due_amount']    = $this->dueAmount;
        $json['paid_amount']   = $this->paidAmount;
        $json['tax_amount']    = $this->taxAmount;
        $json['total_amount']  = $this->totalAmount;
        $json['product_name']  = $this->productName;
        $json['line_items']    = $this->lineItems;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
