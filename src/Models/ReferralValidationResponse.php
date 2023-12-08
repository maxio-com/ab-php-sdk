<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ReferralValidationResponse implements \JsonSerializable
{
    /**
     * @var ReferralCode|null
     */
    private $referralCode;

    /**
     * Returns Referral Code.
     */
    public function getReferralCode(): ?ReferralCode
    {
        return $this->referralCode;
    }

    /**
     * Sets Referral Code.
     *
     * @maps referral_code
     */
    public function setReferralCode(?ReferralCode $referralCode): void
    {
        $this->referralCode = $referralCode;
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
        if (isset($this->referralCode)) {
            $json['referral_code'] = $this->referralCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
