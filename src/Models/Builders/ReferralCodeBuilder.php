<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReferralCode;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReferralCode
 *
 * @see ReferralCode
 */
class ReferralCodeBuilder
{
    /**
     * @var ReferralCode
     */
    private $instance;

    private function __construct(ReferralCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new referral code Builder object.
     */
    public static function init(): self
    {
        return new self(new ReferralCode());
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets site id field.
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets code field.
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Initializes a new referral code object.
     */
    public function build(): ReferralCode
    {
        return CoreHelper::clone($this->instance);
    }
}
