<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateInvoicePaymentRequest implements \JsonSerializable
{
    /**
     * @var CreateInvoicePayment
     */
    private $payment;

    /**
     * @var string|null
     */
    private $type = InvoicePaymentType::EXTERNAL;

    /**
     * @param CreateInvoicePayment $payment
     */
    public function __construct(CreateInvoicePayment $payment)
    {
        $this->payment = $payment;
    }

    /**
     * Returns Payment.
     */
    public function getPayment(): CreateInvoicePayment
    {
        return $this->payment;
    }

    /**
     * Sets Payment.
     *
     * @required
     * @maps payment
     */
    public function setPayment(CreateInvoicePayment $payment): void
    {
        $this->payment = $payment;
    }

    /**
     * Returns Type.
     * The type of payment to be applied to an Invoice.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of payment to be applied to an Invoice.
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\InvoicePaymentType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
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
        $json['payment']  = $this->payment;
        if (isset($this->type)) {
            $json['type'] = InvoicePaymentType::checkValue($this->type);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
