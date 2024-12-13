<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ApplePayPaymentProfile;
use AdvancedBillingLib\Models\BankAccountPaymentProfile;
use AdvancedBillingLib\Models\CreditCardPaymentProfile;
use AdvancedBillingLib\Models\PaymentProfileResponse;
use AdvancedBillingLib\Models\PaypalPaymentProfile;
use Core\Utils\CoreHelper;

/**
 * Builder for model PaymentProfileResponse
 *
 * @see PaymentProfileResponse
 */
class PaymentProfileResponseBuilder
{
    /**
     * @var PaymentProfileResponse
     */
    private $instance;

    private function __construct(PaymentProfileResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Payment Profile Response Builder object.
     *
     * @param ApplePayPaymentProfile|BankAccountPaymentProfile|CreditCardPaymentProfile|PaypalPaymentProfile $paymentProfile
     */
    public static function init($paymentProfile): self
    {
        return new self(new PaymentProfileResponse($paymentProfile));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Payment Profile Response object.
     */
    public function build(): PaymentProfileResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
