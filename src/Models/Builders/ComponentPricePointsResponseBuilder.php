<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ComponentPricePoint;
use AdvancedBillingLib\Models\ComponentPricePointsResponse;
use AdvancedBillingLib\Models\ListPublicKeysMeta;
use Core\Utils\CoreHelper;

/**
 * Builder for model ComponentPricePointsResponse
 *
 * @see ComponentPricePointsResponse
 */
class ComponentPricePointsResponseBuilder
{
    /**
     * @var ComponentPricePointsResponse
     */
    private $instance;

    private function __construct(ComponentPricePointsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Component Price Points Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ComponentPricePointsResponse());
    }

    /**
     * Sets price points field.
     *
     * @param ComponentPricePoint[]|null $value
     */
    public function pricePoints(?array $value): self
    {
        $this->instance->setPricePoints($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param ListPublicKeysMeta|null $value
     */
    public function meta(?ListPublicKeysMeta $value): self
    {
        $this->instance->setMeta($value);
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
     * Initializes a new Component Price Points Response object.
     */
    public function build(): ComponentPricePointsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
