<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateComponentPricePoint;
use AdvancedBillingLib\Models\CreateComponentPricePointsRequest;
use AdvancedBillingLib\Models\CreatePrepaidUsageComponentPricePoint;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateComponentPricePointsRequest
 *
 * @see CreateComponentPricePointsRequest
 */
class CreateComponentPricePointsRequestBuilder
{
    /**
     * @var CreateComponentPricePointsRequest
     */
    private $instance;

    private function __construct(CreateComponentPricePointsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Component Price Points Request Builder object.
     *
     * @param array<CreateComponentPricePoint|CreatePrepaidUsageComponentPricePoint> $pricePoints
     */
    public static function init(array $pricePoints): self
    {
        return new self(new CreateComponentPricePointsRequest($pricePoints));
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
     * Initializes a new Create Component Price Points Request object.
     */
    public function build(): CreateComponentPricePointsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
