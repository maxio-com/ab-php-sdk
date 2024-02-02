<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentMethodExternal implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $details;

    /**
     * @var string
     */
    private $kind;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $kind
     * @param string $type
     */
    public function __construct(string $kind, string $type)
    {
        $this->kind = $kind;
        $this->type = $type;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Kind.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @required
     * @maps kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     * @factory \AdvancedBillingLib\Models\InvoiceEventPaymentMethod::checkValue
     */
    public function setType(string $type): void
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
        $json['details'] = $this->details;
        $json['kind']    = $this->kind;
        $json['memo']    = $this->memo;
        $json['type']    = InvoiceEventPaymentMethod::checkValue($this->type);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
