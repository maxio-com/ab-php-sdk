<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Contract;
use AdvancedBillingLib\Models\ScheduledRenewalConfiguration;
use AdvancedBillingLib\Models\ScheduledRenewalConfigurationItem;
use Core\Utils\CoreHelper;

/**
 * Builder for model ScheduledRenewalConfiguration
 *
 * @see ScheduledRenewalConfiguration
 */
class ScheduledRenewalConfigurationBuilder
{
    /**
     * @var ScheduledRenewalConfiguration
     */
    private $instance;

    private function __construct(ScheduledRenewalConfiguration $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Scheduled Renewal Configuration Builder object.
     */
    public static function init(): self
    {
        return new self(new ScheduledRenewalConfiguration());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets site id field.
     *
     * @param int|null $value
     */
    public function siteId(?int $value): self
    {
        $this->instance->setSiteId($value);
        return $this;
    }

    /**
     * Sets subscription id field.
     *
     * @param int|null $value
     */
    public function subscriptionId(?int $value): self
    {
        $this->instance->setSubscriptionId($value);
        return $this;
    }

    /**
     * Sets starts at field.
     *
     * @param \DateTime|null $value
     */
    public function startsAt(?\DateTime $value): self
    {
        $this->instance->setStartsAt($value);
        return $this;
    }

    /**
     * Sets ends at field.
     *
     * @param \DateTime|null $value
     */
    public function endsAt(?\DateTime $value): self
    {
        $this->instance->setEndsAt($value);
        return $this;
    }

    /**
     * Sets lock in at field.
     *
     * @param \DateTime|null $value
     */
    public function lockInAt(?\DateTime $value): self
    {
        $this->instance->setLockInAt($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets scheduled renewal configuration items field.
     *
     * @param ScheduledRenewalConfigurationItem[]|null $value
     */
    public function scheduledRenewalConfigurationItems(?array $value): self
    {
        $this->instance->setScheduledRenewalConfigurationItems($value);
        return $this;
    }

    /**
     * Sets contract field.
     *
     * @param Contract|null $value
     */
    public function contract(?Contract $value): self
    {
        $this->instance->setContract($value);
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
     * Initializes a new Scheduled Renewal Configuration object.
     */
    public function build(): ScheduledRenewalConfiguration
    {
        return CoreHelper::clone($this->instance);
    }
}
