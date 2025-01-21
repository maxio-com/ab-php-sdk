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

class RefundPrepayment implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var string|float
     */
    private $amount;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var bool|null
     */
    private $external;

    /**
     * @param string|float $amount
     * @param string $memo
     */
    public function __construct($amount, string $memo)
    {
        $this->amount = $amount;
        $this->memo = $memo;
    }

    /**
     * Returns Amount in Cents.
     * `amount` is not required if you pass `amount_in_cents`.
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * `amount` is not required if you pass `amount_in_cents`.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Amount.
     * `amount_in_cents` is not required if you pass `amount`.
     *
     * @return string|float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * `amount_in_cents` is not required if you pass `amount`.
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
     * Returns Memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns External.
     * Specify the type of refund you wish to initiate. When the prepayment is external, the `external`
     * flag is optional. But if the prepayment was made through a payment profile, the `external` flag is
     * required.
     */
    public function getExternal(): ?bool
    {
        return $this->external;
    }

    /**
     * Sets External.
     * Specify the type of refund you wish to initiate. When the prepayment is external, the `external`
     * flag is optional. But if the prepayment was made through a payment profile, the `external` flag is
     * required.
     *
     * @maps external
     */
    public function setExternal(?bool $external): void
    {
        $this->external = $external;
    }

    /**
     * Converts the RefundPrepayment object to a human-readable string representation.
     *
     * @return string The string representation of the RefundPrepayment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RefundPrepayment',
            [
                'amountInCents' => $this->amountInCents,
                'amount' => $this->amount,
                'memo' => $this->memo,
                'external' => $this->external,
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
        $json['amount_in_cents'] = $this->amountInCents;
        $json['amount']          = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(string,float)');
        $json['memo']            = $this->memo;
        if (isset($this->external)) {
            $json['external']    = $this->external;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
