<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\GetOneTimeTokenPaymentProfile;
use AdvancedBillingLib\Models\GetOneTimeTokenRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model GetOneTimeTokenRequest
 *
 * @see GetOneTimeTokenRequest
 */
class GetOneTimeTokenRequestBuilder
{
    /**
     * @var GetOneTimeTokenRequest
     */
    private $instance;

    private function __construct(GetOneTimeTokenRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get One Time Token Request Builder object.
     *
     * @param GetOneTimeTokenPaymentProfile $paymentProfile
     */
    public static function init(GetOneTimeTokenPaymentProfile $paymentProfile): self
    {
        return new self(new GetOneTimeTokenRequest($paymentProfile));
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
     * Initializes a new Get One Time Token Request object.
     */
    public function build(): GetOneTimeTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
