<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ScheduledRenewalLockInRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalLockInRequest
 *
 * @see ScheduledRenewalLockInRequest
 */
class ScheduledRenewalLockInRequestBuilder
{
    /**
     * @var ScheduledRenewalLockInRequest
     */
    private $instance;

    private function __construct(ScheduledRenewalLockInRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Lock In Request Builder object.
     *
     * @param \DateTime $lockInAt
     */
    public static function init(\DateTime $lockInAt): self
    {
        return new self(new ScheduledRenewalLockInRequest($lockInAt));
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
     * Initializes a new Scheduled Renewal Lock In Request object.
     */
    public function build(): ScheduledRenewalLockInRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
