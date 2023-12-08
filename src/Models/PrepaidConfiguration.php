<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaidConfiguration implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $initialFundingAmountInCents;

    /**
     * @var int|null
     */
    private $replenishToAmountInCents;

    /**
     * @var bool|null
     */
    private $autoReplenish;

    /**
     * @var int|null
     */
    private $replenishThresholdAmountInCents;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Initial Funding Amount in Cents.
     */
    public function getInitialFundingAmountInCents(): ?int
    {
        return $this->initialFundingAmountInCents;
    }

    /**
     * Sets Initial Funding Amount in Cents.
     *
     * @maps initial_funding_amount_in_cents
     */
    public function setInitialFundingAmountInCents(?int $initialFundingAmountInCents): void
    {
        $this->initialFundingAmountInCents = $initialFundingAmountInCents;
    }

    /**
     * Returns Replenish to Amount in Cents.
     */
    public function getReplenishToAmountInCents(): ?int
    {
        return $this->replenishToAmountInCents;
    }

    /**
     * Sets Replenish to Amount in Cents.
     *
     * @maps replenish_to_amount_in_cents
     */
    public function setReplenishToAmountInCents(?int $replenishToAmountInCents): void
    {
        $this->replenishToAmountInCents = $replenishToAmountInCents;
    }

    /**
     * Returns Auto Replenish.
     */
    public function getAutoReplenish(): ?bool
    {
        return $this->autoReplenish;
    }

    /**
     * Sets Auto Replenish.
     *
     * @maps auto_replenish
     */
    public function setAutoReplenish(?bool $autoReplenish): void
    {
        $this->autoReplenish = $autoReplenish;
    }

    /**
     * Returns Replenish Threshold Amount in Cents.
     */
    public function getReplenishThresholdAmountInCents(): ?int
    {
        return $this->replenishThresholdAmountInCents;
    }

    /**
     * Sets Replenish Threshold Amount in Cents.
     *
     * @maps replenish_threshold_amount_in_cents
     */
    public function setReplenishThresholdAmountInCents(?int $replenishThresholdAmountInCents): void
    {
        $this->replenishThresholdAmountInCents = $replenishThresholdAmountInCents;
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
            $json['id']                                  = $this->id;
        }
        if (isset($this->initialFundingAmountInCents)) {
            $json['initial_funding_amount_in_cents']     = $this->initialFundingAmountInCents;
        }
        if (isset($this->replenishToAmountInCents)) {
            $json['replenish_to_amount_in_cents']        = $this->replenishToAmountInCents;
        }
        if (isset($this->autoReplenish)) {
            $json['auto_replenish']                      = $this->autoReplenish;
        }
        if (isset($this->replenishThresholdAmountInCents)) {
            $json['replenish_threshold_amount_in_cents'] = $this->replenishThresholdAmountInCents;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
