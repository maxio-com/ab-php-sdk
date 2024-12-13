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
     * Initializes a new Referral Validation Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReferralValidationResponse());
    }

    /**
     * Sets referral code field.
     *
     * @param ReferralCode|null $value
     */
    public function referralCode(?ReferralCode $value): self
    {
        $this->instance->setReferralCode($value);
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
     * Initializes a new Referral Validation Response object.
     */
    public function build(): ReferralValidationResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
