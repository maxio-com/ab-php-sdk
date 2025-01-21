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
     * Converts the PaymentMethodExternal object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentMethodExternal object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentMethodExternal',
            [
                'details' => $this->details,
                'kind' => $this->kind,
                'memo' => $this->memo,
                'type' => $this->type,
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
        $json['details'] = $this->details;
        $json['kind']    = $this->kind;
        $json['memo']    = $this->memo;
        $json['type']    = InvoiceEventPaymentMethod::checkValue($this->type);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
