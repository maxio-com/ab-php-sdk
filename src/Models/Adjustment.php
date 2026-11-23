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

class Adjustment implements \JsonSerializable
{
    /**
     * @var string|int
     */
    private $amount;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var array
     */
    private $grantId = [];

    /**
     * @var array
     */
    private $sourceTransactionId = [];

    /**
     * @var array
     */
    private $expectedRemaining = [];

    /**
     * @var array
     */
    private $expectedSourceCorrections = [];

    /**
     * @param string|int $amount
     * @param string $reason
     */
    public function __construct($amount, string $reason)
    {
        $this->amount = $amount;
        $this->reason = $reason;
    }

    /**
     * Returns Amount.
     * Signed: positive adds units to the grant, negative removes them. Bounded below by the grant's
     * `posted_remaining` (a correction can't drive it negative) and above by the grant's `original` (a
     * correction can't credit past what was originally granted). An out-of-bounds value is rejected rather
     * than clamped. Zero is rejected. Without a `grant_id` (an overdraft correction), the amount must be
     * positive, can't exceed the usage the overdraft entry still records, and can't exceed the overdraft
     * the wallet still owes. Encoded as a decimal string with at most 8 fractional digits. Send fractional
     * values as strings: a JSON number with a decimal point is rejected with `422`, because a double-
     * precision float may already have lost precision before the request arrives.
     *
     * @return string|int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * Signed: positive adds units to the grant, negative removes them. Bounded below by the grant's
     * `posted_remaining` (a correction can't drive it negative) and above by the grant's `original` (a
     * correction can't credit past what was originally granted). An out-of-bounds value is rejected rather
     * than clamped. Zero is rejected. Without a `grant_id` (an overdraft correction), the amount must be
     * positive, can't exceed the usage the overdraft entry still records, and can't exceed the overdraft
     * the wallet still owes. Encoded as a decimal string with at most 8 fractional digits. Send fractional
     * values as strings: a JSON number with a decimal point is rejected with `422`, because a double-
     * precision float may already have lost precision before the request arrives.
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
     * Returns Reason.
     * Required. Lands on the resulting ledger row's `memo`.
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * Sets Reason.
     * Required. Lands on the resulting ledger row's `memo`.
     *
     * @required
     * @maps reason
     */
    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * Returns Grant Id.
     * The grant to correct. Must belong to this wallet. Required unless `source_transaction_id` names an
     * overdraft entry (a `debit` with no `grant_id`, written when an `allow_negative` wallet consumes past
     * its grants). For an overdraft entry, omit it: sending one returns `422`, and the correction credits
     * the wallet's outstanding overdraft instead of any grant.
     */
    public function getGrantId(): ?int
    {
        if (count($this->grantId) == 0) {
            return null;
        }
        return $this->grantId['value'];
    }

    /**
     * Sets Grant Id.
     * The grant to correct. Must belong to this wallet. Required unless `source_transaction_id` names an
     * overdraft entry (a `debit` with no `grant_id`, written when an `allow_negative` wallet consumes past
     * its grants). For an overdraft entry, omit it: sending one returns `422`, and the correction credits
     * the wallet's outstanding overdraft instead of any grant.
     *
     * @maps grant_id
     */
    public function setGrantId(?int $grantId): void
    {
        $this->grantId['value'] = $grantId;
    }

    /**
     * Unsets Grant Id.
     * The grant to correct. Must belong to this wallet. Required unless `source_transaction_id` names an
     * overdraft entry (a `debit` with no `grant_id`, written when an `allow_negative` wallet consumes past
     * its grants). For an overdraft entry, omit it: sending one returns `422`, and the correction credits
     * the wallet's outstanding overdraft instead of any grant.
     */
    public function unsetGrantId(): void
    {
        $this->grantId = [];
    }

    /**
     * Returns Source Transaction Id.
     * (Optional) The `debit` row this correction is fixing. Must belong to this wallet, and must name a
     * row of kind `debit`; grant and adjustment rows are append-only history, corrected by posting a
     * further adjustment rather than by pointing at them. For a grant-attributed debit, it's recorded on
     * the resulting ledger row for audit only: it does not change how `amount` is applied, and more than
     * one adjustment may name the same row. For an overdraft entry, it decides the path: omit `grant_id`,
     * and the correction is credit-only, bounded by the usage the entry still records and by the overdraft
     * the wallet still owes.
     */
    public function getSourceTransactionId(): ?int
    {
        if (count($this->sourceTransactionId) == 0) {
            return null;
        }
        return $this->sourceTransactionId['value'];
    }

    /**
     * Sets Source Transaction Id.
     * (Optional) The `debit` row this correction is fixing. Must belong to this wallet, and must name a
     * row of kind `debit`; grant and adjustment rows are append-only history, corrected by posting a
     * further adjustment rather than by pointing at them. For a grant-attributed debit, it's recorded on
     * the resulting ledger row for audit only: it does not change how `amount` is applied, and more than
     * one adjustment may name the same row. For an overdraft entry, it decides the path: omit `grant_id`,
     * and the correction is credit-only, bounded by the usage the entry still records and by the overdraft
     * the wallet still owes.
     *
     * @maps source_transaction_id
     */
    public function setSourceTransactionId(?int $sourceTransactionId): void
    {
        $this->sourceTransactionId['value'] = $sourceTransactionId;
    }

    /**
     * Unsets Source Transaction Id.
     * (Optional) The `debit` row this correction is fixing. Must belong to this wallet, and must name a
     * row of kind `debit`; grant and adjustment rows are append-only history, corrected by posting a
     * further adjustment rather than by pointing at them. For a grant-attributed debit, it's recorded on
     * the resulting ledger row for audit only: it does not change how `amount` is applied, and more than
     * one adjustment may name the same row. For an overdraft entry, it decides the path: omit `grant_id`,
     * and the correction is credit-only, bounded by the usage the entry still records and by the overdraft
     * the wallet still owes.
     */
    public function unsetSourceTransactionId(): void
    {
        $this->sourceTransactionId = [];
    }

    /**
     * Returns Expected Remaining.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from the grant's
     * own remainder. Send the grant's `posted_remaining`, not its `remaining`: on a metered wallet read
     * through [Read Wallet]($e/Wallets/readWallet), `remaining` also subtracts usage not yet posted, so it
     * can differ from what the adjustment checks. If given and the grant's current `posted_remaining` no
     * longer matches, the request is rejected with `409` and nothing is written. Compared numerically, so
     * `"100"` and `"100.00000000"` both match a `posted_remaining` of `100`. Omit the field entirely to
     * skip the check; sending it as an empty string is treated as a malformed value (`422`), not as an
     * omission.
     */
    public function getExpectedRemaining(): ?string
    {
        if (count($this->expectedRemaining) == 0) {
            return null;
        }
        return $this->expectedRemaining['value'];
    }

    /**
     * Sets Expected Remaining.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from the grant's
     * own remainder. Send the grant's `posted_remaining`, not its `remaining`: on a metered wallet read
     * through [Read Wallet]($e/Wallets/readWallet), `remaining` also subtracts usage not yet posted, so it
     * can differ from what the adjustment checks. If given and the grant's current `posted_remaining` no
     * longer matches, the request is rejected with `409` and nothing is written. Compared numerically, so
     * `"100"` and `"100.00000000"` both match a `posted_remaining` of `100`. Omit the field entirely to
     * skip the check; sending it as an empty string is treated as a malformed value (`422`), not as an
     * omission.
     *
     * @maps expected_remaining
     */
    public function setExpectedRemaining(?string $expectedRemaining): void
    {
        $this->expectedRemaining['value'] = $expectedRemaining;
    }

    /**
     * Unsets Expected Remaining.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from the grant's
     * own remainder. Send the grant's `posted_remaining`, not its `remaining`: on a metered wallet read
     * through [Read Wallet]($e/Wallets/readWallet), `remaining` also subtracts usage not yet posted, so it
     * can differ from what the adjustment checks. If given and the grant's current `posted_remaining` no
     * longer matches, the request is rejected with `409` and nothing is written. Compared numerically, so
     * `"100"` and `"100.00000000"` both match a `posted_remaining` of `100`. Omit the field entirely to
     * skip the check; sending it as an empty string is treated as a malformed value (`422`), not as an
     * omission.
     */
    public function unsetExpectedRemaining(): void
    {
        $this->expectedRemaining = [];
    }

    /**
     * Returns Expected Source Corrections.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from a usage
     * entry, sent together with `source_transaction_id`: the entry's `source_corrections_total` as the
     * caller last read it (`"0"` if none). If the sum the server computes no longer matches, the request
     * is rejected with `409` and nothing is written. This is what catches a correction posted between that
     * read and this request. Ignored unless `source_transaction_id` is also given.
     */
    public function getExpectedSourceCorrections(): ?string
    {
        if (count($this->expectedSourceCorrections) == 0) {
            return null;
        }
        return $this->expectedSourceCorrections['value'];
    }

    /**
     * Sets Expected Source Corrections.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from a usage
     * entry, sent together with `source_transaction_id`: the entry's `source_corrections_total` as the
     * caller last read it (`"0"` if none). If the sum the server computes no longer matches, the request
     * is rejected with `409` and nothing is written. This is what catches a correction posted between that
     * read and this request. Ignored unless `source_transaction_id` is also given.
     *
     * @maps expected_source_corrections
     */
    public function setExpectedSourceCorrections(?string $expectedSourceCorrections): void
    {
        $this->expectedSourceCorrections['value'] = $expectedSourceCorrections;
    }

    /**
     * Unsets Expected Source Corrections.
     * (Optional) An optimistic-concurrency check for a caller whose `amount` was derived from a usage
     * entry, sent together with `source_transaction_id`: the entry's `source_corrections_total` as the
     * caller last read it (`"0"` if none). If the sum the server computes no longer matches, the request
     * is rejected with `409` and nothing is written. This is what catches a correction posted between that
     * read and this request. Ignored unless `source_transaction_id` is also given.
     */
    public function unsetExpectedSourceCorrections(): void
    {
        $this->expectedSourceCorrections = [];
    }

    /**
     * Converts the Adjustment object to a human-readable string representation.
     *
     * @return string The string representation of the Adjustment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Adjustment',
            [
                'amount' => $this->amount,
                'reason' => $this->reason,
                'grantId' => $this->getGrantId(),
                'sourceTransactionId' => $this->getSourceTransactionId(),
                'expectedRemaining' => $this->getExpectedRemaining(),
                'expectedSourceCorrections' => $this->getExpectedSourceCorrections(),
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
        $json['amount']                          =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->amount,
                'oneOf(string,int)'
            );
        $json['reason']                          = $this->reason;
        if (!empty($this->grantId)) {
            $json['grant_id']                    = $this->grantId['value'];
        }
        if (!empty($this->sourceTransactionId)) {
            $json['source_transaction_id']       = $this->sourceTransactionId['value'];
        }
        if (!empty($this->expectedRemaining)) {
            $json['expected_remaining']          = $this->expectedRemaining['value'];
        }
        if (!empty($this->expectedSourceCorrections)) {
            $json['expected_source_corrections'] = $this->expectedSourceCorrections['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
