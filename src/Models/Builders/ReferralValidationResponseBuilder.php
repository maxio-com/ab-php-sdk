<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReferralCode;
use AdvancedBillingLib\Models\ReferralValidationResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReferralValidationResponse
 *
 * @see ReferralValidationResponse
 */
class ReferralValidationResponseBuilder
{
    /**
     * @var ReferralValidationResponse
     */
    private $instance;

    private function __construct(ReferralValidationResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new referral validation response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReferralValidationResponse());
    }

    /**
     * Sets referral code field.
     */
    public function referralCode(?ReferralCode $value): self
    {
        $this->instance->setReferralCode($value);
        return $this;
    }

    /**
     * Initializes a new referral validation response object.
     */
    public function build(): ReferralValidationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
