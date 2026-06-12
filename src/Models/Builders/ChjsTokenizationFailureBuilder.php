<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ChjsTokenizationFailure;
use AdvancedBillingLib\Models\PaymentProfileParams;
use Core\Utils\CoreHelper;

/**
 * Builder for model ChjsTokenizationFailure
 *
 * @see ChjsTokenizationFailure
 */
class ChjsTokenizationFailureBuilder
{
    /**
     * @var ChjsTokenizationFailure
     */
    private $instance;

    private function __construct(ChjsTokenizationFailure $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Chjs Tokenization Failure Builder object.
     *
     * @param string $errors
     */
    public static function init(string $errors): self
    {
        return new self(new ChjsTokenizationFailure($errors));
    }

    /**
     * Sets payment profile params field.
     *
     * @param PaymentProfileParams|null $value
     */
    public function paymentProfileParams(?PaymentProfileParams $value): self
    {
        $this->instance->setPaymentProfileParams($value);
        return $this;
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
     * Initializes a new Chjs Tokenization Failure object.
     */
    public function build(): ChjsTokenizationFailure
    {
        return CoreHelper::clone($this->instance);
    }
}
