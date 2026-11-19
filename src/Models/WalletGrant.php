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
 * A funding tranche embedded on the wallet. `original` is the amount the grant was created with;
 * `posted_remaining` is what debits and adjustments written to the ledger have left; `remaining` is
 * what can still be spent. Debits drain grants earliest-expiration-first (grants with no expiration
 * are drained last).
 */
class WalletGrant implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $original;

    /**
     * @var string|null
     */
    private $remaining;

    /**
     * @var string|null
     */
    private $postedRemaining;

    /**
     * @var array
     */
    private $expiresAt = [];

    /**
     * @var array
     */
    private $expiresOn = [];

    /**
     * @var array
     */
    private $expiredAt = [];

    /**
     * @var array
     */
    private $expiredOn = [];

    /**
     * @var string|null
     */
    private $origin;

    /**
     * @var array
     */
    private $grantedForPeriodStart = [];

    /**
     * @var array
     */
    private $invoiceUid = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * Returns Id.
     * The Advanced Billing id of the grant.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the grant.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     * The memo the grant was created with, or `Grant
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The memo the grant was created with, or `Grant
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Original.
     * The amount the grant was created with, encoded as a decimal string. Never changes after creation.
     */
    public function getOriginal(): ?string
    {
        return $this->original;
    }

    /**
     * Sets Original.
     * The amount the grant was created with, encoded as a decimal string. Never changes after creation.
     *
     * @maps original
     */
    public function setOriginal(?string $original): void
    {
        $this->original = $original;
    }

    /**
     * Returns Remaining.
     * What the grant can still spend, encoded as a decimal string. On [Read Wallet]($e/Wallets/readWallet)
     * for a metered wallet whose `balance` is the live figure, this is `posted_remaining` less the pending
     * usage drawn from this grant in drain order: usage past a grant spills to the next one, and usage
     * past every grant is an overdraft that belongs to no grant. It never goes below zero, and the grants'
     * `remaining` add up to the wallet's `balance` whenever `balance` is zero or more. Everywhere else it
     * equals `posted_remaining`.
     */
    public function getRemaining(): ?string
    {
        return $this->remaining;
    }

    /**
     * Sets Remaining.
     * What the grant can still spend, encoded as a decimal string. On [Read Wallet]($e/Wallets/readWallet)
     * for a metered wallet whose `balance` is the live figure, this is `posted_remaining` less the pending
     * usage drawn from this grant in drain order: usage past a grant spills to the next one, and usage
     * past every grant is an overdraft that belongs to no grant. It never goes below zero, and the grants'
     * `remaining` add up to the wallet's `balance` whenever `balance` is zero or more. Everywhere else it
     * equals `posted_remaining`.
     *
     * @maps remaining
     */
    public function setRemaining(?string $remaining): void
    {
        $this->remaining = $remaining;
    }

    /**
     * Returns Posted Remaining.
     * The grant's remainder from written ledger entries alone, encoded as a decimal string. Always present.
     * This is the figure an adjustment checks `expected_remaining` and its bounds against, so send it
     * back, not `remaining`, when correcting a grant.
     */
    public function getPostedRemaining(): ?string
    {
        return $this->postedRemaining;
    }

    /**
     * Sets Posted Remaining.
     * The grant's remainder from written ledger entries alone, encoded as a decimal string. Always present.
     * This is the figure an adjustment checks `expected_remaining` and its bounds against, so send it
     * back, not `remaining`, when correcting a grant.
     *
     * @maps posted_remaining
     */
    public function setPostedRemaining(?string $postedRemaining): void
    {
        $this->postedRemaining = $postedRemaining;
    }

    /**
     * Returns Expires At.
     * When this grant's unconsumed remainder is automatically written off. `null` for an evergreen grant.
     */
    public function getExpiresAt(): ?\DateTime
    {
        if (count($this->expiresAt) == 0) {
            return null;
        }
        return $this->expiresAt['value'];
    }

    /**
     * Sets Expires At.
     * When this grant's unconsumed remainder is automatically written off. `null` for an evergreen grant.
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt['value'] = $expiresAt;
    }

    /**
     * Unsets Expires At.
     * When this grant's unconsumed remainder is automatically written off. `null` for an evergreen grant.
     */
    public function unsetExpiresAt(): void
    {
        $this->expiresAt = [];
    }

    /**
     * Returns Expires On.
     * The calendar day `expires_at` falls on, already resolved in the site's time zone.
     */
    public function getExpiresOn(): ?\DateTime
    {
        if (count($this->expiresOn) == 0) {
            return null;
        }
        return $this->expiresOn['value'];
    }

    /**
     * Sets Expires On.
     * The calendar day `expires_at` falls on, already resolved in the site's time zone.
     *
     * @maps expires_on
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setExpiresOn(?\DateTime $expiresOn): void
    {
        $this->expiresOn['value'] = $expiresOn;
    }

    /**
     * Unsets Expires On.
     * The calendar day `expires_at` falls on, already resolved in the site's time zone.
     */
    public function unsetExpiresOn(): void
    {
        $this->expiresOn = [];
    }

    /**
     * Returns Expired At.
     * When the expiry sweep actually wrote this grant's remainder off. Usually falls shortly after
     * `expires_at`; use `expires_on` for the date the grant expired, not this field. `null` if the grant
     * was never written off (including a grant simply spent to zero before its `expires_at`).
     */
    public function getExpiredAt(): ?\DateTime
    {
        if (count($this->expiredAt) == 0) {
            return null;
        }
        return $this->expiredAt['value'];
    }

    /**
     * Sets Expired At.
     * When the expiry sweep actually wrote this grant's remainder off. Usually falls shortly after
     * `expires_at`; use `expires_on` for the date the grant expired, not this field. `null` if the grant
     * was never written off (including a grant simply spent to zero before its `expires_at`).
     *
     * @maps expired_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiredAt(?\DateTime $expiredAt): void
    {
        $this->expiredAt['value'] = $expiredAt;
    }

    /**
     * Unsets Expired At.
     * When the expiry sweep actually wrote this grant's remainder off. Usually falls shortly after
     * `expires_at`; use `expires_on` for the date the grant expired, not this field. `null` if the grant
     * was never written off (including a grant simply spent to zero before its `expires_at`).
     */
    public function unsetExpiredAt(): void
    {
        $this->expiredAt = [];
    }

    /**
     * Returns Expired On.
     * The calendar day `expired_at` falls on, resolved in the site's time zone.
     */
    public function getExpiredOn(): ?\DateTime
    {
        if (count($this->expiredOn) == 0) {
            return null;
        }
        return $this->expiredOn['value'];
    }

    /**
     * Sets Expired On.
     * The calendar day `expired_at` falls on, resolved in the site's time zone.
     *
     * @maps expired_on
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setExpiredOn(?\DateTime $expiredOn): void
    {
        $this->expiredOn['value'] = $expiredOn;
    }

    /**
     * Unsets Expired On.
     * The calendar day `expired_at` falls on, resolved in the site's time zone.
     */
    public function unsetExpiredOn(): void
    {
        $this->expiredOn = [];
    }

    /**
     * Returns Origin.
     * How the grant was created. `recurring` comes from the wallet's automatic funding schedule (see the
     * wallet's `recurring_funding` array). `manual` comes from a one-time grant posted to [Create Wallet
     * Transaction]($e/Wallet%20Transactions/createWalletTransaction). `initial_balance` comes from a non-
     * zero `initial_balance` at wallet creation. `allowance_increase` comes from raising a funding
     * entitlement's allowance while it's already funding a wallet. `purchase` comes from [Create Wallet
     * Purchase]($e/Wallet%20Purchases/createWalletPurchase).
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * Sets Origin.
     * How the grant was created. `recurring` comes from the wallet's automatic funding schedule (see the
     * wallet's `recurring_funding` array). `manual` comes from a one-time grant posted to [Create Wallet
     * Transaction]($e/Wallet%20Transactions/createWalletTransaction). `initial_balance` comes from a non-
     * zero `initial_balance` at wallet creation. `allowance_increase` comes from raising a funding
     * entitlement's allowance while it's already funding a wallet. `purchase` comes from [Create Wallet
     * Purchase]($e/Wallet%20Purchases/createWalletPurchase).
     *
     * @maps origin
     * @factory \AdvancedBillingLib\Models\Origin::checkValue
     */
    public function setOrigin(?string $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * Returns Granted for Period Start.
     * For a `recurring` grant, the start of the funding cadence period this grant covers. `null` for every
     * other origin. After a gap in funding (see `skipped_periods`), this is the period currently in
     * progress, not the oldest period that was missed.
     */
    public function getGrantedForPeriodStart(): ?\DateTime
    {
        if (count($this->grantedForPeriodStart) == 0) {
            return null;
        }
        return $this->grantedForPeriodStart['value'];
    }

    /**
     * Sets Granted for Period Start.
     * For a `recurring` grant, the start of the funding cadence period this grant covers. `null` for every
     * other origin. After a gap in funding (see `skipped_periods`), this is the period currently in
     * progress, not the oldest period that was missed.
     *
     * @maps granted_for_period_start
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setGrantedForPeriodStart(?\DateTime $grantedForPeriodStart): void
    {
        $this->grantedForPeriodStart['value'] = $grantedForPeriodStart;
    }

    /**
     * Unsets Granted for Period Start.
     * For a `recurring` grant, the start of the funding cadence period this grant covers. `null` for every
     * other origin. After a gap in funding (see `skipped_periods`), this is the period currently in
     * progress, not the oldest period that was missed.
     */
    public function unsetGrantedForPeriodStart(): void
    {
        $this->grantedForPeriodStart = [];
    }

    /**
     * Returns Invoice Uid.
     * The uid of the invoice that paid for this grant, for a grant with `origin` of `purchase`. `null` for
     * every other origin.
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
     * The uid of the invoice that paid for this grant, for a grant with `origin` of `purchase`. `null` for
     * every other origin.
     *
     * @maps invoice_uid
     */
    public function setInvoiceUid(?string $invoiceUid): void
    {
        $this->invoiceUid['value'] = $invoiceUid;
    }

    /**
     * Unsets Invoice Uid.
     * The uid of the invoice that paid for this grant, for a grant with `origin` of `purchase`. `null` for
     * every other origin.
     */
    public function unsetInvoiceUid(): void
    {
        $this->invoiceUid = [];
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
     * Converts the WalletGrant object to a human-readable string representation.
     *
     * @return string The string representation of the WalletGrant object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletGrant',
            [
                'id' => $this->id,
                'name' => $this->name,
                'original' => $this->original,
                'remaining' => $this->remaining,
                'postedRemaining' => $this->postedRemaining,
                'expiresAt' => $this->getExpiresAt(),
                'expiresOn' => $this->getExpiresOn(),
                'expiredAt' => $this->getExpiredAt(),
                'expiredOn' => $this->getExpiredOn(),
                'origin' => $this->origin,
                'grantedForPeriodStart' => $this->getGrantedForPeriodStart(),
                'invoiceUid' => $this->getInvoiceUid(),
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
        if (isset($this->name)) {
            $json['name']                     = $this->name;
        }
        if (isset($this->original)) {
            $json['original']                 = $this->original;
        }
        if (isset($this->remaining)) {
            $json['remaining']                = $this->remaining;
        }
        if (isset($this->postedRemaining)) {
            $json['posted_remaining']         = $this->postedRemaining;
        }
        if (!empty($this->expiresAt)) {
            $json['expires_at']               = DateTimeHelper::toRfc3339DateTime($this->expiresAt['value']);
        }
        if (!empty($this->expiresOn)) {
            $json['expires_on']               = DateTimeHelper::toSimpleDate($this->expiresOn['value']);
        }
        if (!empty($this->expiredAt)) {
            $json['expired_at']               = DateTimeHelper::toRfc3339DateTime($this->expiredAt['value']);
        }
        if (!empty($this->expiredOn)) {
            $json['expired_on']               = DateTimeHelper::toSimpleDate($this->expiredOn['value']);
        }
        if (isset($this->origin)) {
            $json['origin']                   = Origin::checkValue($this->origin);
        }
        if (!empty($this->grantedForPeriodStart)) {
            $json['granted_for_period_start'] =
                DateTimeHelper::toRfc3339DateTime(
                    $this->grantedForPeriodStart['value']
                );
        }
        if (!empty($this->invoiceUid)) {
            $json['invoice_uid']              = $this->invoiceUid['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']               = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
