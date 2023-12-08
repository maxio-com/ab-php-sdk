<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class CreateMultiInvoicePayment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $details;

    /**
     * @var string|null
     */
    private $method = InvoicePaymentMethodType::OTHER;

    /**
     * @var string|float
     */
    private $amount;

    /**
     * @var string|null
     */
    private $receivedOn;

    /**
     * @var CreateInvoicePaymentApplication[]
     */
    private $applications;

    /**
     * @param string|float $amount
     * @param CreateInvoicePaymentApplication[] $applications
     */
    public function __construct($amount, array $applications)
    {
        $this->amount = $amount;
        $this->applications = $applications;
    }

    /**
     * Returns Memo.
     * A description to be attached to the payment.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     * A description to be attached to the payment.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Details.
     * Additional information related to the payment method (eg. Check #).
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     * Additional information related to the payment method (eg. Check #).
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Method.
     * The type of payment method used.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * The type of payment method used.
     *
     * @maps method
     * @factory \AdvancedBillingLib\Models\InvoicePaymentMethodType::checkValue
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * Returns Amount.
     * Dollar amount of the sum of the invoices payment (eg. "10.50" => $10.50).
     *
     * @return string|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Dollar amount of the sum of the invoices payment (eg. "10.50" => $10.50).
     *
     * @required
     * @maps amount
     * @mapsBy oneOf(string,float)
     *
     * @param string|float $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past.
     */
    public function getReceivedOn(): ?string
    {
        return $this->receivedOn;
    }

    /**
     * Sets Received On.
     * Date reflecting when the payment was received from a customer. Must be in the past.
     *
     * @maps received_on
     */
    public function setReceivedOn(?string $receivedOn): void
    {
        $this->receivedOn = $receivedOn;
    }

    /**
     * Returns Applications.
     *
     * @return CreateInvoicePaymentApplication[]
     */
    public function getApplications(): array
    {
        return $this->applications;
    }

    /**
     * Sets Applications.
     *
     * @required
     * @maps applications
     *
     * @param CreateInvoicePaymentApplication[] $applications
     */
    public function setApplications(array $applications): void
    {
        $this->applications = $applications;
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
        if (isset($this->memo)) {
            $json['memo']        = $this->memo;
        }
        if (isset($this->details)) {
            $json['details']     = $this->details;
        }
        if (isset($this->method)) {
            $json['method']      = InvoicePaymentMethodType::checkValue($this->method);
        }
        $json['amount']          = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(string,float)');
        if (isset($this->receivedOn)) {
            $json['received_on'] = $this->receivedOn;
        }
        $json['applications']    = $this->applications;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
