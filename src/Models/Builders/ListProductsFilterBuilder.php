<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListProductsFilter;
use AdvancedBillingLib\Models\PrepaidProductPricePointFilter;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListProductsFilter
 *
 * @see ListProductsFilter
 */
class ListProductsFilterBuilder
{
    /**
     * @var ListProductsFilter
     */
    private $instance;

    private function __construct(ListProductsFilter $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list products filter Builder object.
     */
    public static function init(): self
    {
        return new self(new ListProductsFilter());
    }

    /**
     * Sets ids field.
     */
    public function ids(?array $value): self
    {
        $this->instance->setIds($value);
        return $this;
    }

    /**
     * Sets prepaid product price point field.
     */
    public function prepaidProductPricePoint(?PrepaidProductPricePointFilter $value): self
    {
        $this->instance->setPrepaidProductPricePoint($value);
        return $this;
    }

    /**
     * Sets use site exchange rate field.
     */
    public function useSiteExchangeRate(?bool $value): self
    {
        $this->instance->setUseSiteExchangeRate($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new list products filter object.
     */
    public function build(): ListProductsFilter
    {
        return CoreHelper::clone($this->instance);
    }
}
