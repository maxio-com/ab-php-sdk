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
 * Describes automatic funding of the wallet from a usage-limit entitlement. Set up by configuring
 * `wallet_behavior` on the Feature behind that entitlement, not by any parameter on the wallet itself.
 * This field is an array as of its first release. The array currently holds zero or one element, and
 * is expected to hold several once a wallet can be funded by more than one entitlement.
 */
class WalletRecurringFunding implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $entitlementId;

    /**
     * @var array
     */
    private $allowance = [];

    /**
     * @var array
     */
    private $nextGrantAt = [];

    /**
     * @var array
     */
    private $nextGrantOn = [];

    /**
     * @var int|null
     */
    private $skippedPeriods;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var array
     */
    private $reason = [];

    /**
     * Returns Id.
     * The Advanced Billing id of the recurring funding schedule.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the recurring funding schedule.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Entitlement Id.
     * The usage-limit entitlement this schedule reads its allowance and cadence from.
     */
    public function getEntitlementId(): ?int
    {
        return $this->entitlementId;
    }

    /**
     * Sets Entitlement Id.
     * The usage-limit entitlement this schedule reads its allowance and cadence from.
     *
     * @maps entitlement_id
     */
    public function setEntitlementId(?int $entitlementId): void
    {
        $this->entitlementId = $entitlementId;
    }

    /**
     * Returns Allowance.
     * The entitlement's current allowance, read fresh at request time rather than stored on the wallet.
     * Editing the entitlement changes this immediately, with no separate sync step. `"0"` means the
     * entitlement is configured to grant nothing, a valid, working configuration and not an error. `null`
     * when `status` is `stopped`, since there is no longer an entitlement to read.
     */
    public function getAllowance(): ?string
    {
        if (count($this->allowance) == 0) {
            return null;
        }
        return $this->allowance['value'];
    }

    /**
     * Sets Allowance.
     * The entitlement's current allowance, read fresh at request time rather than stored on the wallet.
     * Editing the entitlement changes this immediately, with no separate sync step. `"0"` means the
     * entitlement is configured to grant nothing, a valid, working configuration and not an error. `null`
     * when `status` is `stopped`, since there is no longer an entitlement to read.
     *
     * @maps allowance
     */
    public function setAllowance(?string $allowance): void
    {
        $this->allowance['value'] = $allowance;
    }

    /**
     * Unsets Allowance.
     * The entitlement's current allowance, read fresh at request time rather than stored on the wallet.
     * Editing the entitlement changes this immediately, with no separate sync step. `"0"` means the
     * entitlement is configured to grant nothing, a valid, working configuration and not an error. `null`
     * when `status` is `stopped`, since there is no longer an entitlement to read.
     */
    public function unsetAllowance(): void
    {
        $this->allowance = [];
    }

    /**
     * Returns Next Grant At.
     * When the next automatic grant is due. Grants are applied by a background process shortly after this
     * moment passes, not exactly on it, so a wallet read taken in that window still shows the pre-grant
     * balance. `null` when `status` is `stopped`, and also `null` once the owning subscription has
     * terminated, even while `status` is still `active`: at its next due moment the schedule is stopped
     * with reason `subscription_terminated`.
     */
    public function getNextGrantAt(): ?\DateTime
    {
        if (count($this->nextGrantAt) == 0) {
            return null;
        }
        return $this->nextGrantAt['value'];
    }

    /**
     * Sets Next Grant At.
     * When the next automatic grant is due. Grants are applied by a background process shortly after this
     * moment passes, not exactly on it, so a wallet read taken in that window still shows the pre-grant
     * balance. `null` when `status` is `stopped`, and also `null` once the owning subscription has
     * terminated, even while `status` is still `active`: at its next due moment the schedule is stopped
     * with reason `subscription_terminated`.
     *
     * @maps next_grant_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNextGrantAt(?\DateTime $nextGrantAt): void
    {
        $this->nextGrantAt['value'] = $nextGrantAt;
    }

    /**
     * Unsets Next Grant At.
     * When the next automatic grant is due. Grants are applied by a background process shortly after this
     * moment passes, not exactly on it, so a wallet read taken in that window still shows the pre-grant
     * balance. `null` when `status` is `stopped`, and also `null` once the owning subscription has
     * terminated, even while `status` is still `active`: at its next due moment the schedule is stopped
     * with reason `subscription_terminated`.
     */
    public function unsetNextGrantAt(): void
    {
        $this->nextGrantAt = [];
    }

    /**
     * Returns Next Grant On.
     * The calendar day `next_grant_at` falls on, resolved in the site's time zone. `null` under the same
     * conditions as `next_grant_at`.
     */
    public function getNextGrantOn(): ?\DateTime
    {
        if (count($this->nextGrantOn) == 0) {
            return null;
        }
        return $this->nextGrantOn['value'];
    }

    /**
     * Sets Next Grant On.
     * The calendar day `next_grant_at` falls on, resolved in the site's time zone. `null` under the same
     * conditions as `next_grant_at`.
     *
     * @maps next_grant_on
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setNextGrantOn(?\DateTime $nextGrantOn): void
    {
        $this->nextGrantOn['value'] = $nextGrantOn;
    }

    /**
     * Unsets Next Grant On.
     * The calendar day `next_grant_at` falls on, resolved in the site's time zone. `null` under the same
     * conditions as `next_grant_at`.
     */
    public function unsetNextGrantOn(): void
    {
        $this->nextGrantOn = [];
    }

    /**
     * Returns Skipped Periods.
     * Cumulative count of due moments that passed without a grant being made (for example, during an
     * outage). A gap in funding is visible here without cross-referencing the ledger.
     */
    public function getSkippedPeriods(): ?int
    {
        return $this->skippedPeriods;
    }

    /**
     * Sets Skipped Periods.
     * Cumulative count of due moments that passed without a grant being made (for example, during an
     * outage). A gap in funding is visible here without cross-referencing the ledger.
     *
     * @maps skipped_periods
     */
    public function setSkippedPeriods(?int $skippedPeriods): void
    {
        $this->skippedPeriods = $skippedPeriods;
    }

    /**
     * Returns Status.
     * `active`: refilling normally. `erroring`: the schedule is still due and retrying, but the last
     * attempt couldn't be written (see `reason`); correcting the underlying entitlement resumes funding on
     * the next run with no action needed on the wallet itself. `stopped`: funding has ended for good (see
     * `reason`); units already granted stay on the wallet and remain spendable, but no further automatic
     * grants will be made.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * `active`: refilling normally. `erroring`: the schedule is still due and retrying, but the last
     * attempt couldn't be written (see `reason`); correcting the underlying entitlement resumes funding on
     * the next run with no action needed on the wallet itself. `stopped`: funding has ended for good (see
     * `reason`); units already granted stay on the wallet and remain spendable, but no further automatic
     * grants will be made.
     *
     * @maps status
     * @factory \AdvancedBillingLib\Models\WalletRecurringFundingStatus::checkValue
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Reason.
     * Set whenever `status` isn't `active`. Accompanying `stopped`: `entitlement_missing` (an ordinary
     * product or component change removed the entitlement), `wallet_archived` (the wallet was archived),
     * `subscription_terminated` (the subscription reached a terminal state; funding resumes if the
     * subscription returns to a granting state, for example on reactivation, without back-granting the
     * periods it missed), `feature_removed` (the subscription no longer has this Feature),
     * `wallet_behavior_disabled` (the Feature no longer has `wallet_behavior` configured),
     * `superseded_by_replacement` (a later entitlement now funds this wallet instead), or
     * `subscription_prepaid` (the subscription switched to prepaid, which cannot carry an active wallet).
     * Accompanying `erroring`: `allowance_not_representable` (the entitlement's current allowance doesn't
     * fit the wallet's amount encoding) or `balance_at_capacity` (granting it would push the balance past
     * the maximum supported value).
     */
    public function getReason(): ?string
    {
        if (count($this->reason) == 0) {
            return null;
        }
        return $this->reason['value'];
    }

    /**
     * Sets Reason.
     * Set whenever `status` isn't `active`. Accompanying `stopped`: `entitlement_missing` (an ordinary
     * product or component change removed the entitlement), `wallet_archived` (the wallet was archived),
     * `subscription_terminated` (the subscription reached a terminal state; funding resumes if the
     * subscription returns to a granting state, for example on reactivation, without back-granting the
     * periods it missed), `feature_removed` (the subscription no longer has this Feature),
     * `wallet_behavior_disabled` (the Feature no longer has `wallet_behavior` configured),
     * `superseded_by_replacement` (a later entitlement now funds this wallet instead), or
     * `subscription_prepaid` (the subscription switched to prepaid, which cannot carry an active wallet).
     * Accompanying `erroring`: `allowance_not_representable` (the entitlement's current allowance doesn't
     * fit the wallet's amount encoding) or `balance_at_capacity` (granting it would push the balance past
     * the maximum supported value).
     *
     * @maps reason
     * @factory \AdvancedBillingLib\Models\Reason::checkValue
     */
    public function setReason(?string $reason): void
    {
        $this->reason['value'] = $reason;
    }

    /**
     * Unsets Reason.
     * Set whenever `status` isn't `active`. Accompanying `stopped`: `entitlement_missing` (an ordinary
     * product or component change removed the entitlement), `wallet_archived` (the wallet was archived),
     * `subscription_terminated` (the subscription reached a terminal state; funding resumes if the
     * subscription returns to a granting state, for example on reactivation, without back-granting the
     * periods it missed), `feature_removed` (the subscription no longer has this Feature),
     * `wallet_behavior_disabled` (the Feature no longer has `wallet_behavior` configured),
     * `superseded_by_replacement` (a later entitlement now funds this wallet instead), or
     * `subscription_prepaid` (the subscription switched to prepaid, which cannot carry an active wallet).
     * Accompanying `erroring`: `allowance_not_representable` (the entitlement's current allowance doesn't
     * fit the wallet's amount encoding) or `balance_at_capacity` (granting it would push the balance past
     * the maximum supported value).
     */
    public function unsetReason(): void
    {
        $this->reason = [];
    }

    /**
     * Converts the WalletRecurringFunding object to a human-readable string representation.
     *
     * @return string The string representation of the WalletRecurringFunding object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletRecurringFunding',
            [
                'id' => $this->id,
                'entitlementId' => $this->entitlementId,
                'allowance' => $this->getAllowance(),
                'nextGrantAt' => $this->getNextGrantAt(),
                'nextGrantOn' => $this->getNextGrantOn(),
                'skippedPeriods' => $this->skippedPeriods,
                'status' => $this->status,
                'reason' => $this->getReason(),
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
            $json['id']              = $this->id;
        }
        if (isset($this->entitlementId)) {
            $json['entitlement_id']  = $this->entitlementId;
        }
        if (!empty($this->allowance)) {
            $json['allowance']       = $this->allowance['value'];
        }
        if (!empty($this->nextGrantAt)) {
            $json['next_grant_at']   = DateTimeHelper::toRfc3339DateTime($this->nextGrantAt['value']);
        }
        if (!empty($this->nextGrantOn)) {
            $json['next_grant_on']   = DateTimeHelper::toSimpleDate($this->nextGrantOn['value']);
        }
        if (isset($this->skippedPeriods)) {
            $json['skipped_periods'] = $this->skippedPeriods;
        }
        if (isset($this->status)) {
            $json['status']          = WalletRecurringFundingStatus::checkValue($this->status);
        }
        if (!empty($this->reason)) {
            $json['reason']          = Reason::checkValue($this->reason['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
