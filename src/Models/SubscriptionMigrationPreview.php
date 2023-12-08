<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMigrationPreview implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $proratedAdjustmentInCents;

    /**
     * @var int|null
     */
    private $chargeInCents;

    /**
     * @var int|null
     */
    private $paymentDueInCents;

    /**
     * @var int|null
     */
    private $creditAppliedInCents;

    /**
     * Returns Prorated Adjustment in Cents.
     * The amount of the prorated adjustment that would be issued for the current subscription.
     */
    public function getProratedAdjustmentInCents(): ?int
    {
        return $this->proratedAdjustmentInCents;
    }

    /**
     * Sets Prorated Adjustment in Cents.
     * The amount of the prorated adjustment that would be issued for the current subscription.
     *
     * @maps prorated_adjustment_in_cents
     */
    public function setProratedAdjustmentInCents(?int $proratedAdjustmentInCents): void
    {
        $this->proratedAdjustmentInCents = $proratedAdjustmentInCents;
    }

    /**
     * Returns Charge in Cents.
     * The amount of the charge that would be created for the new product.
     */
    public function getChargeInCents(): ?int
    {
        return $this->chargeInCents;
    }

    /**
     * Sets Charge in Cents.
     * The amount of the charge that would be created for the new product.
     *
     * @maps charge_in_cents
     */
    public function setChargeInCents(?int $chargeInCents): void
    {
        $this->chargeInCents = $chargeInCents;
    }

    /**
     * Returns Payment Due in Cents.
     * The amount of the payment due in the case of an upgrade.
     */
    public function getPaymentDueInCents(): ?int
    {
        return $this->paymentDueInCents;
    }

    /**
     * Sets Payment Due in Cents.
     * The amount of the payment due in the case of an upgrade.
     *
     * @maps payment_due_in_cents
     */
    public function setPaymentDueInCents(?int $paymentDueInCents): void
    {
        $this->paymentDueInCents = $paymentDueInCents;
    }

    /**
     * Returns Credit Applied in Cents.
     * Represents a credit in cents that is applied to your subscription as part of a migration process for
     * a specific product, which reduces the amount owed for the subscription.
     */
    public function getCreditAppliedInCents(): ?int
    {
        return $this->creditAppliedInCents;
    }

    /**
     * Sets Credit Applied in Cents.
     * Represents a credit in cents that is applied to your subscription as part of a migration process for
     * a specific product, which reduces the amount owed for the subscription.
     *
     * @maps credit_applied_in_cents
     */
    public function setCreditAppliedInCents(?int $creditAppliedInCents): void
    {
        $this->creditAppliedInCents = $creditAppliedInCents;
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
        if (isset($this->proratedAdjustmentInCents)) {
            $json['prorated_adjustment_in_cents'] = $this->proratedAdjustmentInCents;
        }
        if (isset($this->chargeInCents)) {
            $json['charge_in_cents']              = $this->chargeInCents;
        }
        if (isset($this->paymentDueInCents)) {
            $json['payment_due_in_cents']         = $this->paymentDueInCents;
        }
        if (isset($this->creditAppliedInCents)) {
            $json['credit_applied_in_cents']      = $this->creditAppliedInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
