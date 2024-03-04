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

class PaymentProfileResponse implements \JsonSerializable
{
    /**
     * @var BankAccountPaymentProfile|CreditCardPaymentProfile
     */
    private $paymentProfile;

    /**
     * @param BankAccountPaymentProfile|CreditCardPaymentProfile $paymentProfile
     */
    public function __construct($paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
    }

    /**
     * Returns Payment Profile.
     *
     * @return BankAccountPaymentProfile|CreditCardPaymentProfile
     */
    public function getPaymentProfile()
    {
        return $this->paymentProfile;
    }

    /**
     * Sets Payment Profile.
     *
     * @required
     * @maps payment_profile
     * @mapsBy oneOf(BankAccountPaymentProfile,CreditCardPaymentProfile)
     *
     * @param BankAccountPaymentProfile|CreditCardPaymentProfile $paymentProfile
     */
    public function setPaymentProfile($paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['payment_profile'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentProfile,
                'oneOf(BankAccountPaymentProfile,CreditCardPaymentProfile)'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
