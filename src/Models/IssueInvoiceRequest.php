<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class IssueInvoiceRequest implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $onFailedPayment = FailedPaymentAction::LEAVE_OPEN_INVOICE;

    /**
     * Returns On Failed Payment.
     * Action taken when payment for an invoice fails:
     * - `leave_open_invoice` - prepayments and credits applied to invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history. This is the default option.
     * - `rollback_to_pending` - prepayments and credits not applied; invoice remains in "pending" status;
     * no email sent to the customer; payment failure recorded in the invoice history.
     * - `initiate_dunning` - prepayments and credits applied to the invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history; subscription will  most likely go into "past_due" or "canceled" state
     * (depending upon net terms and dunning settings).
     */
    public function getOnFailedPayment(): ?string
    {
        return $this->onFailedPayment;
    }

    /**
     * Sets On Failed Payment.
     * Action taken when payment for an invoice fails:
     * - `leave_open_invoice` - prepayments and credits applied to invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history. This is the default option.
     * - `rollback_to_pending` - prepayments and credits not applied; invoice remains in "pending" status;
     * no email sent to the customer; payment failure recorded in the invoice history.
     * - `initiate_dunning` - prepayments and credits applied to the invoice; invoice status set to "open";
     * email sent to the customer for the issued invoice (if setting applies); payment failure recorded in
     * the invoice history; subscription will  most likely go into "past_due" or "canceled" state
     * (depending upon net terms and dunning settings).
     *
     * @maps on_failed_payment
     * @factory \AdvancedBillingLib\Models\FailedPaymentAction::checkValue
     */
    public function setOnFailedPayment(?string $onFailedPayment): void
    {
        $this->onFailedPayment = $onFailedPayment;
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
        if (isset($this->onFailedPayment)) {
            $json['on_failed_payment'] = FailedPaymentAction::checkValue($this->onFailedPayment);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
