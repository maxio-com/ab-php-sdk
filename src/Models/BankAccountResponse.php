<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BankAccountResponse implements \JsonSerializable
{
    /**
     * @var BankAccountPaymentProfile
     */
    private $paymentProfile;

    /**
     * @param BankAccountPaymentProfile $paymentProfile
     */
    public function __construct(BankAccountPaymentProfile $paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
    }

    /**
     * Returns Payment Profile.
     */
    public function getPaymentProfile(): BankAccountPaymentProfile
    {
        return $this->paymentProfile;
    }

    /**
     * Sets Payment Profile.
     *
     * @required
     * @maps payment_profile
     */
    public function setPaymentProfile(BankAccountPaymentProfile $paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
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
        $json['payment_profile'] = $this->paymentProfile;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
