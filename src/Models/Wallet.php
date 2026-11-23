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
 * A balance, denominated in the unit of a Wallet Product, owned by a subscription. Grants and
 * recurring funding schedules are embedded so a single read shows the full balance breakdown.
 */
class Wallet implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $ownerType;

    /**
     * @var int|null
     */
    private $ownerId;

    /**
     * @var array
     */
    private $name = [];

    /**
     * @var int|null
     */
    private $walletProductId;

    /**
     * @var string|null
     */
    private $walletProductName;

    /**
     * @var string|null
     */
    private $unit;

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var string|null
     */
    private $balance;

    /**
     * @var string|null
     */
    private $postedBalance;

    /**
     * @var array
     */
    private $meter = [];

    /**
     * @var array
     */
    private $meteredThroughAt = [];

    /**
     * @var array
     */
    private $meteredRecheckAfterSeconds = [];

    /**
     * @var array
     */
    private $meteredStale = [];

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $depletionPolicy;

    /**
     * @var string|null
     */
    private $hardStopOverflow;

    /**
     * @var string|null
     */
    private $origin;

    /**
     * @var array
     */
    private $featureKey = [];

    /**
     * @var WalletGrant[]|null
     */
    private $grants;

    /**
     * @var WalletRecurringFunding[]|null
     */
    private $recurringFunding;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * Returns Id.
     * The Advanced Billing id of the wallet.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the wallet.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Owner Type.
     * The polymorphic owner type. `subscription` is the only value currently supported.
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    /**
     * Sets Owner Type.
     * The polymorphic owner type. `subscription` is the only value currently supported.
     *
     * @maps owner_type
     * @factory \AdvancedBillingLib\Models\OwnerType::checkValue
     */
    public function setOwnerType(?string $ownerType): void
    {
        $this->ownerType = $ownerType;
    }

    /**
     * Returns Owner Id.
     * The id of the owning subscription.
     */
    public function getOwnerId(): ?int
    {
        return $this->ownerId;
    }

    /**
     * Sets Owner Id.
     * The id of the owning subscription.
     *
     * @maps owner_id
     */
    public function setOwnerId(?int $ownerId): void
    {
        $this->ownerId = $ownerId;
    }

    /**
     * Returns Name.
     * (Optional) A merchant-facing label for the wallet, set on create and changeable with [Update
     * Wallet]($e/Wallets/updateWallet). Surrounding spaces are stripped; a blank value is stored as `null`.
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
     * (Optional) A merchant-facing label for the wallet, set on create and changeable with [Update
     * Wallet]($e/Wallets/updateWallet). Surrounding spaces are stripped; a blank value is stored as `null`.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name['value'] = $name;
    }

    /**
     * Unsets Name.
     * (Optional) A merchant-facing label for the wallet, set on create and changeable with [Update
     * Wallet]($e/Wallets/updateWallet). Surrounding spaces are stripped; a blank value is stored as `null`.
     */
    public function unsetName(): void
    {
        $this->name = [];
    }

    /**
     * Returns Wallet Product Id.
     * The id of the [Wallet Product]($e/Wallet%20Products/createWalletProduct) that denominates the wallet.
     * Immutable for the life of the wallet.
     */
    public function getWalletProductId(): ?int
    {
        return $this->walletProductId;
    }

    /**
     * Sets Wallet Product Id.
     * The id of the [Wallet Product]($e/Wallet%20Products/createWalletProduct) that denominates the wallet.
     * Immutable for the life of the wallet.
     *
     * @maps wallet_product_id
     */
    public function setWalletProductId(?int $walletProductId): void
    {
        $this->walletProductId = $walletProductId;
    }

    /**
     * Returns Wallet Product Name.
     * The name of the Wallet Product that denominates the wallet.
     */
    public function getWalletProductName(): ?string
    {
        return $this->walletProductName;
    }

    /**
     * Sets Wallet Product Name.
     * The name of the Wallet Product that denominates the wallet.
     *
     * @maps wallet_product_name
     */
    public function setWalletProductName(?string $walletProductName): void
    {
        $this->walletProductName = $walletProductName;
    }

    /**
     * Returns Unit.
     * The billing product's unit name, immutable for the life of the wallet.
     */
    public function getUnit(): ?string
    {
        return $this->unit;
    }

    /**
     * Sets Unit.
     * The billing product's unit name, immutable for the life of the wallet.
     *
     * @maps unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit = $unit;
    }

    /**
     * Returns Price Point Id.
     * The price point that priced this wallet's [purchases]($e/Wallet%20Purchases/createWalletPurchase),
     * set on create and immutable afterward. Defaults to the Wallet Product's default price point; `null`
     * if the Wallet Product has none and none was given on create.
     */
    public function getPricePointId(): ?int
    {
        if (count($this->pricePointId) == 0) {
            return null;
        }
        return $this->pricePointId['value'];
    }

    /**
     * Sets Price Point Id.
     * The price point that priced this wallet's [purchases]($e/Wallet%20Purchases/createWalletPurchase),
     * set on create and immutable afterward. Defaults to the Wallet Product's default price point; `null`
     * if the Wallet Product has none and none was given on create.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * The price point that priced this wallet's [purchases]($e/Wallet%20Purchases/createWalletPurchase),
     * set on create and immutable afterward. Defaults to the Wallet Product's default price point; `null`
     * if the Wallet Product has none and none was given on create.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Balance.
     * What the wallet can spend now, encoded as a decimal string to avoid floating-point precision loss.
     * This is the number to enforce against. For a metered wallet, it includes usage not yet posted to the
     * ledger, through `metered_through_at`, but only in the response from [Read
     * Wallet]($e/Wallets/readWallet); every other response (list, create, update, archive) reports the
     * balance as of the last ledger write, equal to `posted_balance`, even for a metered wallet. The
     * grants' `remaining` follow this figure, so they add up to it whenever it is zero or more.
     */
    public function getBalance(): ?string
    {
        return $this->balance;
    }

    /**
     * Sets Balance.
     * What the wallet can spend now, encoded as a decimal string to avoid floating-point precision loss.
     * This is the number to enforce against. For a metered wallet, it includes usage not yet posted to the
     * ledger, through `metered_through_at`, but only in the response from [Read
     * Wallet]($e/Wallets/readWallet); every other response (list, create, update, archive) reports the
     * balance as of the last ledger write, equal to `posted_balance`, even for a metered wallet. The
     * grants' `remaining` follow this figure, so they add up to it whenever it is zero or more.
     *
     * @maps balance
     */
    public function setBalance(?string $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * Returns Posted Balance.
     * The balance from written ledger entries alone: grants funded, minus debits written to the ledger, as
     * a decimal string. Always present, also for a wallet with no meter. It equals `balance` wherever no
     * live metered balance is computed: list, create, update, and archive responses, an unlinked or
     * archived wallet, and a read where `metered_stale` is `true`. Only an active, metered wallet read
     * through [Read Wallet]($e/Wallets/readWallet), with `metered_stale` not `true`, can have a `balance`
     * below its `posted_balance`. It stays exact when `metered_stale` is `true`. Reconcile the
     * transactions list (`balance_after`) against this figure, not against `balance`.
     */
    public function getPostedBalance(): ?string
    {
        return $this->postedBalance;
    }

    /**
     * Sets Posted Balance.
     * The balance from written ledger entries alone: grants funded, minus debits written to the ledger, as
     * a decimal string. Always present, also for a wallet with no meter. It equals `balance` wherever no
     * live metered balance is computed: list, create, update, and archive responses, an unlinked or
     * archived wallet, and a read where `metered_stale` is `true`. Only an active, metered wallet read
     * through [Read Wallet]($e/Wallets/readWallet), with `metered_stale` not `true`, can have a `balance`
     * below its `posted_balance`. It stays exact when `metered_stale` is `true`. Reconcile the
     * transactions list (`balance_after`) against this figure, not against `balance`.
     *
     * @maps posted_balance
     */
    public function setPostedBalance(?string $postedBalance): void
    {
        $this->postedBalance = $postedBalance;
    }

    /**
     * Returns Meter.
     * The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create
     * and immutable afterward.
     */
    public function getMeter(): ?Meter
    {
        if (count($this->meter) == 0) {
            return null;
        }
        return $this->meter['value'];
    }

    /**
     * Sets Meter.
     * The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create
     * and immutable afterward.
     *
     * @maps meter
     */
    public function setMeter(?Meter $meter): void
    {
        $this->meter['value'] = $meter;
    }

    /**
     * Unsets Meter.
     * The metering meter this wallet is paired with, or `null` for a wallet with no meter. Set on create
     * and immutable afterward.
     */
    public function unsetMeter(): void
    {
        $this->meter = [];
    }

    /**
     * Returns Metered Through At.
     * The point up to which live meter usage has been factored into `balance`. Populated only in the
     * response from [Read Wallet]($e/Wallets/readWallet), for an active, metered wallet on a site with
     * metered consumption enabled; `null` everywhere else, including list, create, update, and archive
     * responses for the same wallet.
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
     * The point up to which live meter usage has been factored into `balance`. Populated only in the
     * response from [Read Wallet]($e/Wallets/readWallet), for an active, metered wallet on a site with
     * metered consumption enabled; `null` everywhere else, including list, create, update, and archive
     * responses for the same wallet.
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
     * The point up to which live meter usage has been factored into `balance`. Populated only in the
     * response from [Read Wallet]($e/Wallets/readWallet), for an active, metered wallet on a site with
     * metered consumption enabled; `null` everywhere else, including list, create, update, and archive
     * responses for the same wallet.
     */
    public function unsetMeteredThroughAt(): void
    {
        $this->meteredThroughAt = [];
    }

    /**
     * Returns Metered Recheck After Seconds.
     * How many seconds to wait before re-reading `balance` to see usage past `metered_through_at`. Same
     * availability as `metered_through_at`.
     */
    public function getMeteredRecheckAfterSeconds(): ?int
    {
        if (count($this->meteredRecheckAfterSeconds) == 0) {
            return null;
        }
        return $this->meteredRecheckAfterSeconds['value'];
    }

    /**
     * Sets Metered Recheck After Seconds.
     * How many seconds to wait before re-reading `balance` to see usage past `metered_through_at`. Same
     * availability as `metered_through_at`.
     *
     * @maps metered_recheck_after_seconds
     */
    public function setMeteredRecheckAfterSeconds(?int $meteredRecheckAfterSeconds): void
    {
        $this->meteredRecheckAfterSeconds['value'] = $meteredRecheckAfterSeconds;
    }

    /**
     * Unsets Metered Recheck After Seconds.
     * How many seconds to wait before re-reading `balance` to see usage past `metered_through_at`. Same
     * availability as `metered_through_at`.
     */
    public function unsetMeteredRecheckAfterSeconds(): void
    {
        $this->meteredRecheckAfterSeconds = [];
    }

    /**
     * Returns Metered Stale.
     * `true` when live usage could not be read fresh and `balance` reflects an earlier snapshot. Same
     * availability as `metered_through_at`.
     */
    public function getMeteredStale(): ?bool
    {
        if (count($this->meteredStale) == 0) {
            return null;
        }
        return $this->meteredStale['value'];
    }

    /**
     * Sets Metered Stale.
     * `true` when live usage could not be read fresh and `balance` reflects an earlier snapshot. Same
     * availability as `metered_through_at`.
     *
     * @maps metered_stale
     */
    public function setMeteredStale(?bool $meteredStale): void
    {
        $this->meteredStale['value'] = $meteredStale;
    }

    /**
     * Unsets Metered Stale.
     * `true` when live usage could not be read fresh and `balance` reflects an earlier snapshot. Same
     * availability as `metered_through_at`.
     */
    public function unsetMeteredStale(): void
    {
        $this->meteredStale = [];
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\WalletStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Depletion Policy.
     * What happens when a debit would take the wallet below zero. Known values: `hard_stop` (the only
     * value you can set today). More values are expected over time, so treat this as an open string and
     * don't fail on one you don't recognize. At the zero boundary, `hard_stop` behaves as set by
     * `hard_stop_overflow`.
     */
    public function getDepletionPolicy(): ?string
    {
        return $this->depletionPolicy;
    }

    /**
     * Sets Depletion Policy.
     * What happens when a debit would take the wallet below zero. Known values: `hard_stop` (the only
     * value you can set today). More values are expected over time, so treat this as an open string and
     * don't fail on one you don't recognize. At the zero boundary, `hard_stop` behaves as set by
     * `hard_stop_overflow`.
     *
     * @maps depletion_policy
     */
    public function setDepletionPolicy(?string $depletionPolicy): void
    {
        $this->depletionPolicy = $depletionPolicy;
    }

    /**
     * Returns Hard Stop Overflow.
     * Behavior at the hard-stop boundary. `discard` drains the wallet to zero and rejects the excess (the
     * default). `allow_negative` deducts the full amount, letting the balance go negative. The excess past
     * the wallet's grants is booked as an overdraft ledger row with `grant_id` set to `null`.
     */
    public function getHardStopOverflow(): ?string
    {
        return $this->hardStopOverflow;
    }

    /**
     * Sets Hard Stop Overflow.
     * Behavior at the hard-stop boundary. `discard` drains the wallet to zero and rejects the excess (the
     * default). `allow_negative` deducts the full amount, letting the balance go negative. The excess past
     * the wallet's grants is booked as an overdraft ledger row with `grant_id` set to `null`.
     *
     * @maps hard_stop_overflow
     * @factory \AdvancedBillingLib\Models\WalletHardStopOverflow::checkValue
     */
    public function setHardStopOverflow(?string $hardStopOverflow): void
    {
        $this->hardStopOverflow = $hardStopOverflow;
    }

    /**
     * Returns Origin.
     * How the wallet came to exist. `manual` for a wallet created directly with [Create
     * Wallet]($e/Wallets/createWallet). `feature` for a wallet auto-provisioned because a subscription
     * resolved a usage-limit entitlement whose Feature has `wallet_behavior` configured.
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * Sets Origin.
     * How the wallet came to exist. `manual` for a wallet created directly with [Create
     * Wallet]($e/Wallets/createWallet). `feature` for a wallet auto-provisioned because a subscription
     * resolved a usage-limit entitlement whose Feature has `wallet_behavior` configured.
     *
     * @maps origin
     * @factory \AdvancedBillingLib\Models\WalletOrigin::checkValue
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * Returns Feature Key.
     * The key of the Feature this wallet was provisioned for, when `origin` is `feature`. `null` for a
     * `manual` wallet.
     */
    public function getFeatureKey(): ?string
    {
        if (count($this->featureKey) == 0) {
            return null;
        }
        return $this->featureKey['value'];
    }

    /**
     * Sets Feature Key.
     * The key of the Feature this wallet was provisioned for, when `origin` is `feature`. `null` for a
     * `manual` wallet.
     *
     * @maps feature_key
     */
    public function setFeatureKey(?string $featureKey): void
    {
        $this->featureKey['value'] = $featureKey;
    }

    /**
     * Unsets Feature Key.
     * The key of the Feature this wallet was provisioned for, when `origin` is `feature`. `null` for a
     * `manual` wallet.
     */
    public function unsetFeatureKey(): void
    {
        $this->featureKey = [];
    }

    /**
     * Returns Grants.
     * Every grant on the wallet, including ones already spent or expired, in drain order (the order debits
     * would consume the still-open ones in): the soonest-expiring grant first, evergreen grants last.
     *
     * @return WalletGrant[]|null
     */
    public function getGrants(): ?array
    {
        return $this->grants;
    }

    /**
     * Sets Grants.
     * Every grant on the wallet, including ones already spent or expired, in drain order (the order debits
     * would consume the still-open ones in): the soonest-expiring grant first, evergreen grants last.
     *
     * @maps grants
     *
     * @param WalletGrant[]|null $grants
     */
    public function setGrants(?array $grants): void
    {
        $this->grants = $grants;
    }

    /**
     * Returns Recurring Funding.
     * The wallet's automatic funding schedules, if any. Empty for a `manual` wallet with no funding
     * entitlement. A wallet funds automatically when it's provisioned from a Feature with
     * `wallet_behavior` configured; see [the Wallets concept guide](page:introduction/basic-
     * concepts/wallets#provisioning-a-wallet-from-a-feature).
     *
     * @return WalletRecurringFunding[]|null
     */
    public function getRecurringFunding(): ?array
    {
        return $this->recurringFunding;
    }

    /**
     * Sets Recurring Funding.
     * The wallet's automatic funding schedules, if any. Empty for a `manual` wallet with no funding
     * entitlement. A wallet funds automatically when it's provisioned from a Feature with
     * `wallet_behavior` configured; see [the Wallets concept guide](page:introduction/basic-
     * concepts/wallets#provisioning-a-wallet-from-a-feature).
     *
     * @maps recurring_funding
     *
     * @param WalletRecurringFunding[]|null $recurringFunding
     */
    public function setRecurringFunding(?array $recurringFunding): void
    {
        $this->recurringFunding = $recurringFunding;
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
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Converts the Wallet object to a human-readable string representation.
     *
     * @return string The string representation of the Wallet object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Wallet',
            [
                'id' => $this->id,
                'ownerType' => $this->ownerType,
                'ownerId' => $this->ownerId,
                'name' => $this->getName(),
                'walletProductId' => $this->walletProductId,
                'walletProductName' => $this->walletProductName,
                'unit' => $this->unit,
                'pricePointId' => $this->getPricePointId(),
                'balance' => $this->balance,
                'postedBalance' => $this->postedBalance,
                'meter' => $this->getMeter(),
                'meteredThroughAt' => $this->getMeteredThroughAt(),
                'meteredRecheckAfterSeconds' => $this->getMeteredRecheckAfterSeconds(),
                'meteredStale' => $this->getMeteredStale(),
                'status' => $this->status,
                'depletionPolicy' => $this->depletionPolicy,
                'hardStopOverflow' => $this->hardStopOverflow,
                'origin' => $this->origin,
                'featureKey' => $this->getFeatureKey(),
                'grants' => $this->grants,
                'recurringFunding' => $this->recurringFunding,
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
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
            $json['id']                            = $this->id;
        }
        if (isset($this->ownerType)) {
            $json['owner_type']                    = OwnerType::checkValue($this->ownerType);
        }
        if (isset($this->ownerId)) {
            $json['owner_id']                      = $this->ownerId;
        }
        if (!empty($this->name)) {
            $json['name']                          = $this->name['value'];
        }
        if (isset($this->walletProductId)) {
            $json['wallet_product_id']             = $this->walletProductId;
        }
        if (isset($this->walletProductName)) {
            $json['wallet_product_name']           = $this->walletProductName;
        }
        if (isset($this->unit)) {
            $json['unit']                          = $this->unit;
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']                = $this->pricePointId['value'];
        }
        if (isset($this->balance)) {
            $json['balance']                       = $this->balance;
        }
        if (isset($this->postedBalance)) {
            $json['posted_balance']                = $this->postedBalance;
        }
        if (!empty($this->meter)) {
            $json['meter']                         = $this->meter['value'];
        }
        if (!empty($this->meteredThroughAt)) {
            $json['metered_through_at']            =
                DateTimeHelper::toRfc3339DateTime(
                    $this->meteredThroughAt['value']
                );
        }
        if (!empty($this->meteredRecheckAfterSeconds)) {
            $json['metered_recheck_after_seconds'] = $this->meteredRecheckAfterSeconds['value'];
        }
        if (!empty($this->meteredStale)) {
            $json['metered_stale']                 = $this->meteredStale['value'];
        }
        if (isset($this->status)) {
            $json['status']                        = WalletStatus::checkValue($this->status);
        }
        if (isset($this->depletionPolicy)) {
            $json['depletion_policy']              = $this->depletionPolicy;
        }
        if (isset($this->hardStopOverflow)) {
            $json['hard_stop_overflow']            = WalletHardStopOverflow::checkValue($this->hardStopOverflow);
        }
        if (isset($this->origin)) {
            $json['origin']                        = WalletOrigin::checkValue($this->origin);
        }
        if (!empty($this->featureKey)) {
            $json['feature_key']                   = $this->featureKey['value'];
        }
        if (isset($this->grants)) {
            $json['grants']                        = $this->grants;
        }
        if (isset($this->recurringFunding)) {
            $json['recurring_funding']             = $this->recurringFunding;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                    = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                    = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
