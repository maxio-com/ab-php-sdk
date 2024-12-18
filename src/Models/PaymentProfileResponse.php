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
     * @var ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile
     */
    private $paymentProfile;

    /**
     * @param ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile $paymentProfile
     */
    public function __construct($paymentProfile)
    {
        $this->paymentProfile = $paymentProfile;
    }

    /**
     * Returns Payment Profile.
     *
     * @return ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile
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
     * @mapsBy anyOf{paymentType}(ApplePayPaymentProfile{applePay2},BankAccountPaymentProfile{bankAccount2},CreditCardPaymentProfile{creditCard2},PaypalPaymentProfile{paypalAccount2})
     *
     * @param ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile $paymentProfile
     */
    public function setPaymentProfile($paymentProfile): void
    {
        $this->paymentProfile = $paymentProfile;
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
        $json['payment_profile'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->paymentProfile,
                'anyOf{paymentType}(ApplePayPaymentProfile{applePay2},BankAccountPaymentProfile{bankA' .
                'ccount2},CreditCardPaymentProfile{creditCard2},PaypalPaymentProfile{paypalAccount2})'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
