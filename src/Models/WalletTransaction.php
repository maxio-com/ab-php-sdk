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

/**
 * One append-only row on the wallet's ledger. Always appears bare inside a `wallet_transactions` array,
 * never wrapped in its own key.
 */
class WalletTransaction implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $walletId;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var string|null
     */
    private $amount;

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
    private $sourceCorrectionsTotal = [];

    /**
     * @var string|null
     */
    private $balanceAfter;

    /**
     * @var array
     */
    private $meteredFromAt = [];

    /**
     * @var array
     */
    private $meteredThroughAt = [];

    /**
     * @var array
     */
    private $conversionRateApplied = [];

    /**
     * @var array
     */
    private $invoiceUid = [];

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * Returns Id.
     * The Advanced Billing id of the ledger row.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the ledger row.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Wallet Id.
     */
    public function getWalletId(): ?int
    {
        return $this->walletId;
    }

    /**
     * Sets Wallet Id.
     *
     * @maps wallet_id
     */
    public function setWalletId(?int $walletId): void
    {
        $this->walletId = $walletId;
    }

    /**
     * Returns Kind.
     * The kind of ledger row. Known values: `grant`, `debit`, `adjustment`, `initial_balance`, and
     * `expiration`. More kinds are expected over time, so treat this as an open string and don't fail on
     * one you don't recognize. Only `grant` and `debit` are accepted on [Create Wallet
     * Transaction]($e/Wallet%20Transactions/createWalletTransaction). `adjustment` rows are written by
     * [Create Wallet Adjustment]($e/Wallet%20Adjustments/createWalletAdjustment), `initial_balance` rows
     * only by a seeded [Create Wallet]($e/Wallets/createWallet), and `expiration` rows only by the
     * automatic expiry sweep that writes off an unconsumed grant once its `expires_at` passes.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * The kind of ledger row. Known values: `grant`, `debit`, `adjustment`, `initial_balance`, and
     * `expiration`. More kinds are expected over time, so treat this as an open string and don't fail on
     * one you don't recognize. Only `grant` and `debit` are accepted on [Create Wallet
     * Transaction]($e/Wallet%20Transactions/createWalletTransaction). `adjustment` rows are written by
     * [Create Wallet Adjustment]($e/Wallet%20Adjustments/createWalletAdjustment), `initial_balance` rows
     * only by a seeded [Create Wallet]($e/Wallets/createWallet), and `expiration` rows only by the
     * automatic expiry sweep that writes off an unconsumed grant once its `expires_at` passes.
     *
     * @maps kind
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Amount.
     * A decimal string, **signed** on this resource. Non-negative for grants, negative for debits and
     * expirations, either sign for adjustments. A grant row written after an overdraft repayment carries
     * only what was left after the repayment (possibly `"0.0"`), not the grant's `original`.
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * A decimal string, **signed** on this resource. Non-negative for grants, negative for debits and
     * expirations, either sign for adjustments. A grant row written after an overdraft repayment carries
     * only what was left after the repayment (possibly `"0.0"`), not the grant's `original`.
     *
     * @maps amount
     */
    public function setAmount(?string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Grant Id.
     * The grant this row is attributed to. `null` for an overdraft row (a `kind: debit` row draining the
     * below-zero portion of a balance, attributed to no grant), for an overdraft-repayment row (the `kind:
     * grant` row that pays an existing negative balance back to zero, written before any remainder becomes
     * a new grant), and for an overdraft correction (a `kind: adjustment` row posted against an overdraft
     * entry, which credits no grant).
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
     * The grant this row is attributed to. `null` for an overdraft row (a `kind: debit` row draining the
     * below-zero portion of a balance, attributed to no grant), for an overdraft-repayment row (the `kind:
     * grant` row that pays an existing negative balance back to zero, written before any remainder becomes
     * a new grant), and for an overdraft correction (a `kind: adjustment` row posted against an overdraft
     * entry, which credits no grant).
     *
     * @maps grant_id
     */
    public function setGrantId(?int $grantId): void
    {
        $this->grantId['value'] = $grantId;
    }

    /**
     * Unsets Grant Id.
     * The grant this row is attributed to. `null` for an overdraft row (a `kind: debit` row draining the
     * below-zero portion of a balance, attributed to no grant), for an overdraft-repayment row (the `kind:
     * grant` row that pays an existing negative balance back to zero, written before any remainder becomes
     * a new grant), and for an overdraft correction (a `kind: adjustment` row posted against an overdraft
     * entry, which credits no grant).
     */
    public function unsetGrantId(): void
    {
        $this->grantId = [];
    }

    /**
     * Returns Source Transaction Id.
     * For an `adjustment` row posted against a specific usage entry, the id of the `debit` row it corrects.
     * `null` for every other kind, and for adjustments made against a grant's balance directly.
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
     * For an `adjustment` row posted against a specific usage entry, the id of the `debit` row it corrects.
     * `null` for every other kind, and for adjustments made against a grant's balance directly.
     *
     * @maps source_transaction_id
     */
    public function setSourceTransactionId(?int $sourceTransactionId): void
    {
        $this->sourceTransactionId['value'] = $sourceTransactionId;
    }

    /**
     * Unsets Source Transaction Id.
     * For an `adjustment` row posted against a specific usage entry, the id of the `debit` row it corrects.
     * `null` for every other kind, and for adjustments made against a grant's balance directly.
     */
    public function unsetSourceTransactionId(): void
    {
        $this->sourceTransactionId = [];
    }

    /**
     * Returns Source Corrections Total.
     * For a `debit` row only, the signed sum (as a decimal string) of every adjustment posted against it
     * so far (`"0.0"` when none). `null` for every other kind. The row's own `amount` is never rewritten,
     * so a caller deriving the entry's corrected quantity nets this out of `amount`, and sends this value
     * back as `expected_source_corrections` on a further correction.
     */
    public function getSourceCorrectionsTotal(): ?string
    {
        if (count($this->sourceCorrectionsTotal) == 0) {
            return null;
        }
        return $this->sourceCorrectionsTotal['value'];
    }

    /**
     * Sets Source Corrections Total.
     * For a `debit` row only, the signed sum (as a decimal string) of every adjustment posted against it
     * so far (`"0.0"` when none). `null` for every other kind. The row's own `amount` is never rewritten,
     * so a caller deriving the entry's corrected quantity nets this out of `amount`, and sends this value
     * back as `expected_source_corrections` on a further correction.
     *
     * @maps source_corrections_total
     */
    public function setSourceCorrectionsTotal(?string $sourceCorrectionsTotal): void
    {
        $this->sourceCorrectionsTotal['value'] = $sourceCorrectionsTotal;
    }

    /**
     * Unsets Source Corrections Total.
     * For a `debit` row only, the signed sum (as a decimal string) of every adjustment posted against it
     * so far (`"0.0"` when none). `null` for every other kind. The row's own `amount` is never rewritten,
     * so a caller deriving the entry's corrected quantity nets this out of `amount`, and sends this value
     * back as `expected_source_corrections` on a further correction.
     */
    public function unsetSourceCorrectionsTotal(): void
    {
        $this->sourceCorrectionsTotal = [];
    }

    /**
     * Returns Balance After.
     * The wallet's posted balance immediately after this row was applied, as a decimal string. Compare it
     * with the wallet's `posted_balance`, not its `balance`.
     */
    public function getBalanceAfter(): ?string
    {
        return $this->balanceAfter;
    }

    /**
     * Sets Balance After.
     * The wallet's posted balance immediately after this row was applied, as a decimal string. Compare it
     * with the wallet's `posted_balance`, not its `balance`.
     *
     * @maps balance_after
     */
    public function setBalanceAfter(?string $balanceAfter): void
    {
        $this->balanceAfter = $balanceAfter;
    }

    /**
     * Returns Metered From At.
     * For a row that closed a metered usage window (an hourly close, a depletion, or an expiry write-off),
     * the start of that window. `null` on every other row.
     */
    public function getMeteredFromAt(): ?\DateTime
    {
        if (count($this->meteredFromAt) == 0) {
            return null;
        }
        return $this->meteredFromAt['value'];
    }

    /**
     * Sets Metered From At.
     * For a row that closed a metered usage window (an hourly close, a depletion, or an expiry write-off),
     * the start of that window. `null` on every other row.
     *
     * @maps metered_from_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setMeteredFromAt(?\DateTime $meteredFromAt): void
    {
        $this->meteredFromAt['value'] = $meteredFromAt;
    }

    /**
     * Unsets Metered From At.
     * For a row that closed a metered usage window (an hourly close, a depletion, or an expiry write-off),
     * the start of that window. `null` on every other row.
     */
    public function unsetMeteredFromAt(): void
    {
        $this->meteredFromAt = [];
    }

    /**
     * Returns Metered Through At.
     * The end of the usage window this row closed. `null` on every other row.
     */
    public function getMeteredThroughAt(): ?\DateTime
    {
        if (count($this->meteredThroughAt) == 0) {
            return null;
        }
        return $this->meteredThroughAt['value'];
    }

    /**
     * Sets Metered Through At.
     * The end of the usage window this row closed. `null` on every other row.
     *
     * @maps metered_through_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setMeteredThroughAt(?\DateTime $meteredThroughAt): void
    {
        $this->meteredThroughAt['value'] = $meteredThroughAt;
    }

    /**
     * Unsets Metered Through At.
     * The end of the usage window this row closed. `null` on every other row.
     */
    public function unsetMeteredThroughAt(): void
    {
        $this->meteredThroughAt = [];
    }

    /**
     * Returns Conversion Rate Applied.
     * The meter-to-wallet-unit conversion rate applied to compute this row's `amount`, as a decimal string.
     * `null` on every other row.
     */
    public function getConversionRateApplied(): ?string
    {
        if (count($this->conversionRateApplied) == 0) {
            return null;
        }
        return $this->conversionRateApplied['value'];
    }

    /**
     * Sets Conversion Rate Applied.
     * The meter-to-wallet-unit conversion rate applied to compute this row's `amount`, as a decimal string.
     * `null` on every other row.
     *
     * @maps conversion_rate_applied
     */
    public function setConversionRateApplied(?string $conversionRateApplied): void
    {
        $this->conversionRateApplied['value'] = $conversionRateApplied;
    }

    /**
     * Unsets Conversion Rate Applied.
     * The meter-to-wallet-unit conversion rate applied to compute this row's `amount`, as a decimal string.
     * `null` on every other row.
     */
    public function unsetConversionRateApplied(): void
    {
        $this->conversionRateApplied = [];
    }

    /**
     * Returns Invoice Uid.
     * The uid of the invoice behind a purchase's rows: the grant-creating row and, when the purchase
     * repaid an overdraft, the repayment row. `null` on every other row.
     */
    public function getInvoiceUid(): ?string
    {
        if (count($this->invoiceUid) == 0) {
            return null;
        }
        return $this->invoiceUid['value'];
    }

    /**
     * Sets Invoice Uid.
     * The uid of the invoice behind a purchase's rows: the grant-creating row and, when the purchase
     * repaid an overdraft, the repayment row. `null` on every other row.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid['value'] = $invoiceUid;
    }

    /**
     * Unsets Invoice Uid.
     * The uid of the invoice behind a purchase's rows: the grant-creating row and, when the purchase
     * repaid an overdraft, the repayment row. `null` on every other row.
     */
    public function unsetInvoiceUid(): void
    {
        $this->invoiceUid = [];
    }

    /**
     * Returns Memo.
     * Free-text note. For an `adjustment` row, carries the required `reason`.
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
     * Free-text note. For an `adjustment` row, carries the required `reason`.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * Free-text note. For an `adjustment` row, carries the required `reason`.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Converts the WalletTransaction object to a human-readable string representation.
     *
     * @return string The string representation of the WalletTransaction object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletTransaction',
            [
                'id' => $this->id,
                'walletId' => $this->walletId,
                'kind' => $this->kind,
                'amount' => $this->amount,
                'grantId' => $this->getGrantId(),
                'sourceTransactionId' => $this->getSourceTransactionId(),
                'sourceCorrectionsTotal' => $this->getSourceCorrectionsTotal(),
                'balanceAfter' => $this->balanceAfter,
                'meteredFromAt' => $this->getMeteredFromAt(),
                'meteredThroughAt' => $this->getMeteredThroughAt(),
                'conversionRateApplied' => $this->getConversionRateApplied(),
                'invoiceUid' => $this->getInvoiceUid(),
                'memo' => $this->getMemo(),
                'createdAt' => $this->createdAt,
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
        if (isset($this->id)) {
            $json['id']                       = $this->id;
        }
        if (isset($this->walletId)) {
            $json['wallet_id']                = $this->walletId;
        }
        if (isset($this->kind)) {
            $json['kind']                     = $this->kind;
        }
        if (isset($this->amount)) {
            $json['amount']                   = $this->amount;
        }
        if (!empty($this->grantId)) {
            $json['grant_id']                 = $this->grantId['value'];
        }
        if (!empty($this->sourceTransactionId)) {
            $json['source_transaction_id']    = $this->sourceTransactionId['value'];
        }
        if (!empty($this->sourceCorrectionsTotal)) {
            $json['source_corrections_total'] = $this->sourceCorrectionsTotal['value'];
        }
        if (isset($this->balanceAfter)) {
            $json['balance_after']            = $this->balanceAfter;
        }
        if (!empty($this->meteredFromAt)) {
            $json['metered_from_at']          = DateTimeHelper::toRfc3339DateTime($this->meteredFromAt['value']);
        }
        if (!empty($this->meteredThroughAt)) {
            $json['metered_through_at']       = DateTimeHelper::toRfc3339DateTime($this->meteredThroughAt['value']);
        }
        if (!empty($this->conversionRateApplied)) {
            $json['conversion_rate_applied']  = $this->conversionRateApplied['value'];
        }
        if (!empty($this->invoiceUid)) {
            $json['invoice_uid']              = $this->invoiceUid['value'];
        }
        if (!empty($this->memo)) {
            $json['memo']                     = $this->memo['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']               = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
