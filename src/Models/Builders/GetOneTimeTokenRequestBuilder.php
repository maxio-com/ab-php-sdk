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
     * Initializes a new get one time token request Builder object.
     */
    public static function init(GetOneTimeTokenPaymentProfile $paymentProfile): self
    {
        return new self(new GetOneTimeTokenRequest($paymentProfile));
    }

    /**
     * Initializes a new get one time token request object.
     */
    public function build(): GetOneTimeTokenRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
