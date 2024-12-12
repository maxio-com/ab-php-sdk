<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListComponentsFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListComponentsFilter
 *
 * @see ListComponentsFilter
 */
class ListComponentsFilterBuilder
{
    /**
     * @var ListComponentsFilter
     */
    private $instance;

    private function __construct(ListComponentsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Components Filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListComponentsFilter());
    }

    /**
     * Sets ids field.
     *
     * @param int[]|null $value
     */
    public function ids(?array $value): self
    {
        $this->instance->setIds($value);
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
     * Initializes a new List Components Filter object.
     */
    public function build(): ListComponentsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
