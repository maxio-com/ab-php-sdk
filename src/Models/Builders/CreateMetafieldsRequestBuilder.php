<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateMetafield;
use AdvancedBillingLib\Models\CreateMetafieldsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateMetafieldsRequest
 *
 * @see CreateMetafieldsRequest
 */
class CreateMetafieldsRequestBuilder
{
    /**
     * @var CreateMetafieldsRequest
     */
    private $instance;

    private function __construct(CreateMetafieldsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Metafields Request Builder object.
     *
     * @param CreateMetafield|CreateMetafield[] $metafields
     */
    public static function init($metafields): self
    {
        return new self(new CreateMetafieldsRequest($metafields));
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
     * Initializes a new Create Metafields Request object.
     */
    public function build(): CreateMetafieldsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
