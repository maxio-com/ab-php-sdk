<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionGroupsItem;
use AdvancedBillingLib\Models\SubscriptionGroupBalances;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionGroupsItem
 *
 * @see ListSubscriptionGroupsItem
 */
class ListSubscriptionGroupsItemBuilder
{
    /**
     * @var ListSubscriptionGroupsItem
     */
    private $instance;

    private function __construct(ListSubscriptionGroupsItem $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subscription groups item Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionGroupsItem());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets scheme field.
     */
    public function scheme(?int $value): self
    {
        $this->instance->setScheme($value);
        return $this;
    }

    /**
     * Sets customer id field.
     */
    public function customerId(?int $value): self
    {
        $this->instance->setCustomerId($value);
        return $this;
    }

    /**
     * Sets payment profile id field.
     */
    public function paymentProfileId(?int $value): self
    {
        $this->instance->setPaymentProfileId($value);
        return $this;
    }

    /**
     * Sets subscription ids field.
     */
    public function subscriptionIds(?array $value): self
    {
        $this->instance->setSubscriptionIds($value);
        return $this;
    }

    /**
     * Sets primary subscription id field.
     */
    public function primarySubscriptionId(?int $value): self
    {
        $this->instance->setPrimarySubscriptionId($value);
        return $this;
    }

    /**
     * Sets next assessment at field.
     */
    public function nextAssessmentAt(?string $value): self
    {
        $this->instance->setNextAssessmentAt($value);
        return $this;
    }

    /**
     * Sets state field.
     */
    public function state(?string $value): self
    {
        $this->instance->setState($value);
        return $this;
    }

    /**
     * Sets cancel at end of period field.
     */
    public function cancelAtEndOfPeriod(?bool $value): self
    {
        $this->instance->setCancelAtEndOfPeriod($value);
        return $this;
    }

    /**
     * Sets account balances field.
     */
    public function accountBalances(?SubscriptionGroupBalances $value): self
    {
        $this->instance->setAccountBalances($value);
        return $this;
    }

    /**
     * Initializes a new list subscription groups item object.
     */
    public function build(): ListSubscriptionGroupsItem
    {
        return CoreHelper::clone($this->instance);
    }
}
