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

/**
 * Returned by [Create Wallet Transaction]($e/Wallet%20Transactions/createWalletTransaction).
 * `wallet_transactions` and `balance` are always present. `requested_amount`, `drained_amount`, and
 * `rejected_amount` are present only when the request's `kind` was `debit`.
 */
class WalletTransactionResultResponse implements \JsonSerializable
{
    /**
     * @var WalletTransaction[]
     */
    private $walletTransactions;

    /**
     * @var string|null
     */
    private $requestedAmount;

    /**
     * @var string|null
     */
    private $drainedAmount;

    /**
     * @var string|null
     */
    private $rejectedAmount;

    /**
     * @var string
     */
    private $balance;

    /**
     * @param WalletTransaction[] $walletTransactions
     * @param string $balance
     */
    public function __construct(array $walletTransactions, string $balance)
    {
        $this->walletTransactions = $walletTransactions;
        $this->balance = $balance;
    }

    /**
     * Returns Wallet Transactions.
     *
     * @return WalletTransaction[]
     */
    public function getWalletTransactions(): array
    {
        return $this->walletTransactions;
    }

    /**
     * Sets Wallet Transactions.
     *
     * @required
     * @maps wallet_transactions
     *
     * @param WalletTransaction[] $walletTransactions
     */
    public function setWalletTransactions(array $walletTransactions): void
    {
        $this->walletTransactions = $walletTransactions;
    }

    /**
     * Returns Requested Amount.
     * `kind: debit` only. The amount that was requested, as a decimal string.
     */
    public function getRequestedAmount(): ?string
    {
        return $this->requestedAmount;
    }

    /**
     * Sets Requested Amount.
     * `kind: debit` only. The amount that was requested, as a decimal string.
     *
     * @maps requested_amount
     */
    public function setRequestedAmount(?string $requestedAmount): void
    {
        $this->requestedAmount = $requestedAmount;
    }

    /**
     * Returns Drained Amount.
     * `kind: debit` only. The amount actually drained from the wallet's grants, as a decimal string.
     */
    public function getDrainedAmount(): ?string
    {
        return $this->drainedAmount;
    }

    /**
     * Sets Drained Amount.
     * `kind: debit` only. The amount actually drained from the wallet's grants, as a decimal string.
     *
     * @maps drained_amount
     */
    public function setDrainedAmount(?string $drainedAmount): void
    {
        $this->drainedAmount = $drainedAmount;
    }

    /**
     * Returns Rejected Amount.
     * `kind: debit` only, as a decimal string. Under `hard_stop_overflow: discard`, this is the requested
     * amount minus what the wallet could cover (`"0.0"` on a full drain). Always `"0.0"` under
     * `allow_negative`; nothing is rejected, and the balance goes negative instead.
     */
    public function getRejectedAmount(): ?string
    {
        return $this->rejectedAmount;
    }

    /**
     * Sets Rejected Amount.
     * `kind: debit` only, as a decimal string. Under `hard_stop_overflow: discard`, this is the requested
     * amount minus what the wallet could cover (`"0.0"` on a full drain). Always `"0.0"` under
     * `allow_negative`; nothing is rejected, and the balance goes negative instead.
     *
     * @maps rejected_amount
     */
    public function setRejectedAmount(?string $rejectedAmount): void
    {
        $this->rejectedAmount = $rejectedAmount;
    }

    /**
     * Returns Balance.
     * The wallet's new balance, as a decimal string.
     */
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     * The wallet's new balance, as a decimal string.
     *
     * @required
     * @maps balance
     */
    public function setBalance(string $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Converts the WalletTransactionResultResponse object to a human-readable string representation.
     *
     * @return string The string representation of the WalletTransactionResultResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletTransactionResultResponse',
            [
                'walletTransactions' => $this->walletTransactions,
                'requestedAmount' => $this->requestedAmount,
                'drainedAmount' => $this->drainedAmount,
                'rejectedAmount' => $this->rejectedAmount,
                'balance' => $this->balance,
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
        $json['wallet_transactions']  = $this->walletTransactions;
        if (isset($this->requestedAmount)) {
            $json['requested_amount'] = $this->requestedAmount;
        }
        if (isset($this->drainedAmount)) {
            $json['drained_amount']   = $this->drainedAmount;
        }
        if (isset($this->rejectedAmount)) {
            $json['rejected_amount']  = $this->rejectedAmount;
        }
        $json['balance']              = $this->balance;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
