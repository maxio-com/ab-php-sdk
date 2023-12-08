<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ResumeOptions implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $requireResume;

    /**
     * @var bool|null
     */
    private $forgiveBalance;

    /**
     * Returns Require Resume.
     * Chargify will only attempt to resume the subscription's billing period. If not resumable, the
     * subscription will be left in it's current state.
     */
    public function getRequireResume(): ?bool
    {
        return $this->requireResume;
    }

    /**
     * Sets Require Resume.
     * Chargify will only attempt to resume the subscription's billing period. If not resumable, the
     * subscription will be left in it's current state.
     *
     * @maps require_resume
     */
    public function setRequireResume(?bool $requireResume): void
    {
        $this->requireResume = $requireResume;
    }

    /**
     * Returns Forgive Balance.
     * Indicates whether or not Chargify should clear the subscription's existing balance before attempting
     * to resume the subscription. If subscription cannot be resumed, the balance will remain as it was
     * before the attempt to resume was made.
     */
    public function getForgiveBalance(): ?bool
    {
        return $this->forgiveBalance;
    }

    /**
     * Sets Forgive Balance.
     * Indicates whether or not Chargify should clear the subscription's existing balance before attempting
     * to resume the subscription. If subscription cannot be resumed, the balance will remain as it was
     * before the attempt to resume was made.
     *
     * @maps forgive_balance
     */
    public function setForgiveBalance(?bool $forgiveBalance): void
    {
        $this->forgiveBalance = $forgiveBalance;
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
        if (isset($this->requireResume)) {
            $json['require_resume']  = $this->requireResume;
        }
        if (isset($this->forgiveBalance)) {
            $json['forgive_balance'] = $this->forgiveBalance;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
