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

class WalletTransaction1 implements \JsonSerializable
{
    /**
     * @var string
     */
    private $kind;

    /**
     * @var string|int
     */
    private $amount;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var array
     */
    private $expiresAt = [];

    /**
     * @param string $kind
     * @param string|int $amount
     */
    public function __construct(string $kind, $amount)
    {
        $this->kind = $kind;
        $this->amount = $amount;
    }

    /**
     * Returns Kind.
     * Determines the direction of the movement. The amount itself is always sent positive.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * Determines the direction of the movement. The amount itself is always sent positive.
     *
     * @required
     * @maps kind
     * @factory \AdvancedBillingLib\Models\Kind1::checkValue
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Amount.
     * Always positive; `kind` determines the sign written to the ledger. Encoded as a decimal string with
     * at most 8 fractional digits. Send fractional values as strings: a JSON number with a decimal point
     * is rejected with `422`, because a double-precision float may already have lost precision before the
     * request arrives.
     *
     * @return string|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Always positive; `kind` determines the sign written to the ledger. Encoded as a decimal string with
     * at most 8 fractional digits. Send fractional values as strings: a JSON number with a decimal point
     * is rejected with `422`, because a double-precision float may already have lost precision before the
     * request arrives.
     *
     * @required
     * @maps amount
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $amount
     */
    public function setAmount($amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Expires At.
     * An expiration for the grant this creates. Only accepted with `kind: grant`; sending it with `kind:
     * debit` is rejected. Omit it for an evergreen grant. Accepts either a bare calendar date (`YYYY-MM-
     * DD`), resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day
     * that doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next
     * month.
     */
    public function getExpiresAt(): ?string
    {
        if (count($this->expiresAt) == 0) {
            return null;
        }
        return $this->expiresAt['value'];
    }

    /**
     * Sets Expires At.
     * An expiration for the grant this creates. Only accepted with `kind: grant`; sending it with `kind:
     * debit` is rejected. Omit it for an evergreen grant. Accepts either a bare calendar date (`YYYY-MM-
     * DD`), resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day
     * that doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next
     * month.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt['value'] = $expiresAt;
    }

    /**
     * Unsets Expires At.
     * An expiration for the grant this creates. Only accepted with `kind: grant`; sending it with `kind:
     * debit` is rejected. Omit it for an evergreen grant. Accepts either a bare calendar date (`YYYY-MM-
     * DD`), resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day
     * that doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next
     * month.
     */
    public function unsetExpiresAt(): void
    {
        $this->expiresAt = [];
    }

    /**
     * Converts the WalletTransaction1 object to a human-readable string representation.
     *
     * @return string The string representation of the WalletTransaction1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletTransaction1',
            [
                'kind' => $this->kind,
                'amount' => $this->amount,
                'memo' => $this->getMemo(),
                'expiresAt' => $this->getExpiresAt(),
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
        $json['kind']           = Kind1::checkValue($this->kind);
        $json['amount']         = ApiHelper::getJsonHelper()->verifyTypes($this->amount, 'oneOf(string,int)');
        if (!empty($this->memo)) {
            $json['memo']       = $this->memo['value'];
        }
        if (!empty($this->expiresAt)) {
            $json['expires_at'] = $this->expiresAt['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
