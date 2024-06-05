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
 * Example schema for an `change_invoice_status` event
 */
class ChangeInvoiceStatusEventData implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $gatewayTransId;

    /**
     * @var string|null
     */
    private $amount;

    /**
     * @var string
     */
    private $fromStatus;

    /**
     * @var string
     */
    private $toStatus;

    /**
     * @var string|null
     */
    private $consolidationLevel;

    /**
     * @param string $fromStatus
     * @param string $toStatus
     */
    public function __construct(string $fromStatus, string $toStatus)
    {
        $this->fromStatus = $fromStatus;
        $this->toStatus = $toStatus;
    }

    /**
     * Returns Gateway Trans Id.
     * Identifier for the transaction within the payment gateway.
     */
    public function getGatewayTransId(): ?string
    {
        return $this->gatewayTransId;
    }

    /**
     * Sets Gateway Trans Id.
     * Identifier for the transaction within the payment gateway.
     *
     * @maps gateway_trans_id
     */
    public function setGatewayTransId(?string $gatewayTransId): void
    {
        $this->gatewayTransId = $gatewayTransId;
    }

    /**
     * Returns Amount.
     * The monetary value associated with the linked payment, expressed in dollars.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The monetary value associated with the linked payment, expressed in dollars.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns From Status.
     * The status of the invoice before any changes occurred. See [Invoice Statuses](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for more.
     */
    public function getFromStatus(): string
    {
        return $this->fromStatus;
    }

    /**
     * Sets From Status.
     * The status of the invoice before any changes occurred. See [Invoice Statuses](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for more.
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
     * The updated status of the invoice after changes have been made. See [Invoice Statuses](https://maxio-
     * chargify.zendesk.com/hc/en-us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for
     * more.
     */
    public function getToStatus(): string
    {
        return $this->toStatus;
    }

    /**
     * Sets To Status.
     * The updated status of the invoice after changes have been made. See [Invoice Statuses](https://maxio-
     * chargify.zendesk.com/hc/en-us/articles/5405078794253-Introduction-to-Invoices#invoice-statuses) for
     * more.
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
     * Returns Consolidation Level.
     */
    public function getConsolidationLevel(): ?string
    {
        return $this->consolidationLevel;
    }

    /**
     * Sets Consolidation Level.
     *
     * @maps consolidation_level
     * @factory \AdvancedBillingLib\Models\InvoiceConsolidationLevel::checkValue
     */
    public function setConsolidationLevel(?string $consolidationLevel): void
    {
        $this->consolidationLevel = $consolidationLevel;
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
        if (isset($this->gatewayTransId)) {
            $json['gateway_trans_id']    = $this->gatewayTransId;
        }
        if (isset($this->amount)) {
            $json['amount']              = $this->amount;
        }
        $json['from_status']             = InvoiceStatus::checkValue($this->fromStatus);
        $json['to_status']               = InvoiceStatus::checkValue($this->toStatus);
        if (isset($this->consolidationLevel)) {
            $json['consolidation_level'] = InvoiceConsolidationLevel::checkValue($this->consolidationLevel);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
