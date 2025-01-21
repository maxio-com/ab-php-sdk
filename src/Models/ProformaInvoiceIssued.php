<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
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
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var \DateTime
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
     * @param \DateTime $deliveryDate
     * @param \DateTime $createdAt
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
        \DateTime $deliveryDate,
        \DateTime $createdAt,
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
    public function getDeliveryDate(): \DateTime
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     *
     * @required
     * @maps delivery_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setDeliveryDate(\DateTime $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @required
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(\DateTime $createdAt): void
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
     * Converts the ProformaInvoiceIssued object to a human-readable string representation.
     *
     * @return string The string representation of the ProformaInvoiceIssued object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProformaInvoiceIssued',
            [
                'uid' => $this->uid,
                'number' => $this->number,
                'role' => $this->role,
                'deliveryDate' => $this->deliveryDate,
                'createdAt' => $this->createdAt,
                'dueAmount' => $this->dueAmount,
                'paidAmount' => $this->paidAmount,
                'taxAmount' => $this->taxAmount,
                'totalAmount' => $this->totalAmount,
                'productName' => $this->productName,
                'lineItems' => $this->lineItems,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json['delivery_date'] = DateTimeHelper::toSimpleDate($this->deliveryDate);
        $json['created_at']    = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['due_amount']    = $this->dueAmount;
        $json['paid_amount']   = $this->paidAmount;
        $json['tax_amount']    = $this->taxAmount;
        $json['total_amount']  = $this->totalAmount;
        $json['product_name']  = $this->productName;
        $json['line_items']    = $this->lineItems;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
