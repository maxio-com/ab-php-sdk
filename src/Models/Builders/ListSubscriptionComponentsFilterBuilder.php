<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionComponentsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionComponentsFilter
 *
 * @see ListSubscriptionComponentsFilter
 */
class ListSubscriptionComponentsFilterBuilder
{
    /**
     * @var ListSubscriptionComponentsFilter
     */
    private $instance;

    private function __construct(ListSubscriptionComponentsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Subscription Components Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionComponentsFilter());
    }

    /**
     * Sets currencies field.
     *
     * @param string[]|null $value
     */
    public function currencies(?array $value): self
    {
        $this->instance->setCurrencies($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     *
     * @param bool|null $value
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
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
     * Initializes a new List Subscription Components Filter object.
     */
    public function build(): ListSubscriptionComponentsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
