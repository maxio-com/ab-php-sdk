<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReactivateSubscriptionGroupResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReactivateSubscriptionGroupResponse
 *
 * @see ReactivateSubscriptionGroupResponse
 */
class ReactivateSubscriptionGroupResponseBuilder
{
    /**
     * @var ReactivateSubscriptionGroupResponse
     */
    private $instance;

    private function __construct(ReactivateSubscriptionGroupResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reactivate Subscription Group Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReactivateSubscriptionGroupResponse());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets scheme field.
     *
     * @param int|null $value
     */
    public function scheme(?int $value): self
    {
        $this->instance->setScheme($value);
        return $this;
    }

    /**
     * Sets customer id field.
     *
     * @param int|null $value
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     *
     * @param int|null $value
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets subscription ids field.
     *
     * @param int[]|null $value
     */
    public function subscriptionIds(?array $value): self
    {
        $this->instance->setSubscriptionIds($value);
        return $this;
    }

    /**
     * Sets primary subscription id field.
     *
     * @param int|null $value
     */
    public function primarySubscriptionId(?int $value): self
    {
        $this->instance->setPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Sets next assessment at field.
     *
     * @param \DateTime|null $value
     */
    public function nextAssessmentAt(?\DateTime $value): self
    {
        $this->instance->setNextAssessmentAt($value);
        return $this;
    }

    /**
     * Sets state field.
     *
     * @param string|null $value
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets cancel at end of period field.
     *
     * @param bool|null $value
     */
    public function cancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setCancelAtEndOfPeriod($value);
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
     * Initializes a new Reactivate Subscription Group Response object.
     */
    public function build(): ReactivateSubscriptionGroupResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
