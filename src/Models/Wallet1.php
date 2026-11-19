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

class Wallet1 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $subscriptionId;

    /**
     * @var int|string
     */
    private $walletProductId;

    /**
     * @var array
     */
    private $name = [];

    /**
     * @var string|null
     */
    private $depletionPolicy;

    /**
     * @var string|null
     */
    private $hardStopOverflow;

    /**
     * @var int|null
     */
    private $meterId;

    /**
     * @var string|int|null
     */
    private $conversionRate;

    /**
     * @var int|null
     */
    private $pricePointId;

    /**
     * @var string|int|null
     */
    private $initialBalance;

    /**
     * @var array
     */
    private $initialBalanceExpiresAt = [];

    /**
     * @param int $subscriptionId
     * @param int|string $walletProductId
     */
    public function __construct(int $subscriptionId, $walletProductId)
    {
        $this->subscriptionId = $subscriptionId;
        $this->walletProductId = $walletProductId;
    }

    /**
     * Returns Subscription Id.
     * The subscription that will own the wallet.
     */
    public function getSubscriptionId(): int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     * The subscription that will own the wallet.
     *
     * @required
     * @maps subscription_id
     */
    public function setSubscriptionId(int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Wallet Product Id.
     * The [Wallet Product]($e/Wallet%20Products/createWalletProduct) that will denominate the wallet: its
     * numeric id, or its handle prefixed with `handle:` (for example `handle:token-pack`). A bare handle
     * with no prefix is looked up as an id and returns `404`. Immutable once the wallet is created.
     *
     * @return int|string
     */
    public function getWalletProductId()
    {
        return $this->walletProductId;
    }

    /**
     * Sets Wallet Product Id.
     * The [Wallet Product]($e/Wallet%20Products/createWalletProduct) that will denominate the wallet: its
     * numeric id, or its handle prefixed with `handle:` (for example `handle:token-pack`). A bare handle
     * with no prefix is looked up as an id and returns `404`. Immutable once the wallet is created.
     *
     * @required
     * @maps wallet_product_id
     * @mapsBy oneOf(int,string)
     *
     * @param int|string $walletProductId
     */
    public function setWalletProductId($walletProductId): void
    {
        $this->walletProductId = $walletProductId;
    }

    /**
     * Returns Name.
     * (Optional) A merchant-facing label for the wallet. Surrounding spaces are stripped; a blank value is
     * stored as `null`.
     */
    public function getName(): ?string
    {
        if (count($this->name) == 0) {
            return null;
        }
        return $this->name['value'];
    }

    /**
     * Sets Name.
     * (Optional) A merchant-facing label for the wallet. Surrounding spaces are stripped; a blank value is
     * stored as `null`.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name['value'] = $name;
    }

    /**
     * Unsets Name.
     * (Optional) A merchant-facing label for the wallet. Surrounding spaces are stripped; a blank value is
     * stored as `null`.
     */
    public function unsetName(): void
    {
        $this->name = [];
    }

    /**
     * Returns Depletion Policy.
     * Defaults to `hard_stop`, currently the only supported value.
     */
    public function getDepletionPolicy(): ?string
    {
        return $this->depletionPolicy;
    }

    /**
     * Sets Depletion Policy.
     * Defaults to `hard_stop`, currently the only supported value.
     *
     * @maps depletion_policy
     */
    public function setDepletionPolicy(?string $depletionPolicy): void
    {
        $this->depletionPolicy = $depletionPolicy;
    }

    /**
     * Returns Hard Stop Overflow.
     * Defaults to `discard`.
     */
    public function getHardStopOverflow(): ?string
    {
        return $this->hardStopOverflow;
    }

    /**
     * Sets Hard Stop Overflow.
     * Defaults to `discard`.
     *
     * @maps hard_stop_overflow
     * @factory \AdvancedBillingLib\Models\WalletHardStopOverflow::checkValue
     */
    public function setHardStopOverflow(?string $hardStopOverflow): void
    {
        $this->hardStopOverflow = $hardStopOverflow;
    }

    /**
     * Returns Meter Id.
     * Pairs the wallet with a merchant-owned metering meter, so its balance factors in live usage (see the
     * wallet resource's `meter` and `metered_through_at` fields). Only a `sum` or `count` meter can be
     * paired. Requires metered wallet consumption to be enabled for the site, checked whenever this or
     * `conversion_rate` is sent: `403` (plain text, not JSON) if it isn't. A meter id that doesn't resolve
     * to a merchant-owned meter on this site, including a system-maintained shadow meter, is `404`.
     * Immutable once the wallet is created.
     */
    public function getMeterId(): ?int
    {
        return $this->meterId;
    }

    /**
     * Sets Meter Id.
     * Pairs the wallet with a merchant-owned metering meter, so its balance factors in live usage (see the
     * wallet resource's `meter` and `metered_through_at` fields). Only a `sum` or `count` meter can be
     * paired. Requires metered wallet consumption to be enabled for the site, checked whenever this or
     * `conversion_rate` is sent: `403` (plain text, not JSON) if it isn't. A meter id that doesn't resolve
     * to a merchant-owned meter on this site, including a system-maintained shadow meter, is `404`.
     * Immutable once the wallet is created.
     *
     * @maps meter_id
     */
    public function setMeterId(?int $meterId): void
    {
        $this->meterId = $meterId;
    }

    /**
     * Returns Conversion Rate.
     * How many wallet units one meter unit is worth, as a decimal string with at most 8 fractional digits,
     * greater than `0` and below 10^16. Send fractional values as strings: a JSON number with a decimal
     * point is rejected with `422`, because a double-precision float may already have lost precision
     * before the request arrives. Only meaningful with `meter_id`. Defaults to `"1.0"`. Immutable once the
     * wallet is created.
     *
     * @return string|int|null
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Sets Conversion Rate.
     * How many wallet units one meter unit is worth, as a decimal string with at most 8 fractional digits,
     * greater than `0` and below 10^16. Send fractional values as strings: a JSON number with a decimal
     * point is rejected with `422`, because a double-precision float may already have lost precision
     * before the request arrives. Only meaningful with `meter_id`. Defaults to `"1.0"`. Immutable once the
     * wallet is created.
     *
     * @maps conversion_rate
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $conversionRate
     */
    public function setConversionRate($conversionRate): void
    {
        $this->conversionRate = $conversionRate;
    }

    /**
     * Returns Price Point Id.
     * The price point used to price [Create Wallet Purchase]($e/Wallet%20Purchases/createWalletPurchase)
     * calls against this wallet. Must belong to the Wallet Product, and can't be archived or a
     * subscription-specific custom price point. Defaults to the Wallet Product's default price point.
     * Immutable once the wallet is created.
     */
    public function getPricePointId(): ?int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * The price point used to price [Create Wallet Purchase]($e/Wallet%20Purchases/createWalletPurchase)
     * calls against this wallet. Must belong to the Wallet Product, and can't be archived or a
     * subscription-specific custom price point. Defaults to the Wallet Product's default price point.
     * Immutable once the wallet is created.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Initial Balance.
     * (Optional) A free opening balance, not a purchase and not reflected on any invoice. When non-zero,
     * wallet creation also writes an initial-balance grant and a matching `initial_balance` ledger row.
     * Omitted or exactly `0` creates a zero-balance wallet, not an error. Encoded as a decimal string with
     * at most 8 fractional digits, and must be non-negative and below 10^16. Send fractional values as
     * strings: a JSON number with a decimal point is rejected with `422`, because a double-precision float
     * may already have lost precision before the request arrives.
     *
     * @return string|int|null
     */
    public function getInitialBalance()
    {
        return $this->initialBalance;
    }

    /**
     * Sets Initial Balance.
     * (Optional) A free opening balance, not a purchase and not reflected on any invoice. When non-zero,
     * wallet creation also writes an initial-balance grant and a matching `initial_balance` ledger row.
     * Omitted or exactly `0` creates a zero-balance wallet, not an error. Encoded as a decimal string with
     * at most 8 fractional digits, and must be non-negative and below 10^16. Send fractional values as
     * strings: a JSON number with a decimal point is rejected with `422`, because a double-precision float
     * may already have lost precision before the request arrives.
     *
     * @maps initial_balance
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $initialBalance
     */
    public function setInitialBalance($initialBalance): void
    {
        $this->initialBalance = $initialBalance;
    }

    /**
     * Returns Initial Balance Expires At.
     * An expiration for the initial-balance grant. Only accepted together with a non-zero
     * `initial_balance`, and must be in the future. Accepts either a bare calendar date (`YYYY-MM-DD`),
     * resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day that
     * doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next month.
     */
    public function getInitialBalanceExpiresAt(): ?string
    {
        if (count($this->initialBalanceExpiresAt) == 0) {
            return null;
        }
        return $this->initialBalanceExpiresAt['value'];
    }

    /**
     * Sets Initial Balance Expires At.
     * An expiration for the initial-balance grant. Only accepted together with a non-zero
     * `initial_balance`, and must be in the future. Accepts either a bare calendar date (`YYYY-MM-DD`),
     * resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day that
     * doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next month.
     *
     * @maps initial_balance_expires_at
     */
    public function setInitialBalanceExpiresAt(?string $initialBalanceExpiresAt): void
    {
        $this->initialBalanceExpiresAt['value'] = $initialBalanceExpiresAt;
    }

    /**
     * Unsets Initial Balance Expires At.
     * An expiration for the initial-balance grant. Only accepted together with a non-zero
     * `initial_balance`, and must be in the future. Accepts either a bare calendar date (`YYYY-MM-DD`),
     * resolved to the end of that day in the site's time zone, or a full timestamp. A calendar day that
     * doesn't exist, such as `2027-02-30`, is rejected with `422` rather than rolled into the next month.
     */
    public function unsetInitialBalanceExpiresAt(): void
    {
        $this->initialBalanceExpiresAt = [];
    }

    /**
     * Converts the Wallet1 object to a human-readable string representation.
     *
     * @return string The string representation of the Wallet1 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Wallet1',
            [
                'subscriptionId' => $this->subscriptionId,
                'walletProductId' => $this->walletProductId,
                'name' => $this->getName(),
                'depletionPolicy' => $this->depletionPolicy,
                'hardStopOverflow' => $this->hardStopOverflow,
                'meterId' => $this->meterId,
                'conversionRate' => $this->conversionRate,
                'pricePointId' => $this->pricePointId,
                'initialBalance' => $this->initialBalance,
                'initialBalanceExpiresAt' => $this->getInitialBalanceExpiresAt(),
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
        $json['subscription_id']                = $this->subscriptionId;
        $json['wallet_product_id']              =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->walletProductId,
                'oneOf(int,string)'
            );
        if (!empty($this->name)) {
            $json['name']                       = $this->name['value'];
        }
        if (isset($this->depletionPolicy)) {
            $json['depletion_policy']           = $this->depletionPolicy;
        }
        if (isset($this->hardStopOverflow)) {
            $json['hard_stop_overflow']         = WalletHardStopOverflow::checkValue($this->hardStopOverflow);
        }
        if (isset($this->meterId)) {
            $json['meter_id']                   = $this->meterId;
        }
        if (isset($this->conversionRate)) {
            $json['conversion_rate']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->conversionRate,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->pricePointId)) {
            $json['price_point_id']             = $this->pricePointId;
        }
        if (isset($this->initialBalance)) {
            $json['initial_balance']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->initialBalance,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (!empty($this->initialBalanceExpiresAt)) {
            $json['initial_balance_expires_at'] = $this->initialBalanceExpiresAt['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
