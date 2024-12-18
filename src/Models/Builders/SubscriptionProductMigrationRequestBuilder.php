<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionProductMigration;
use AdvancedBillingLib\Models\SubscriptionProductMigrationRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionProductMigrationRequest
 *
 * @see SubscriptionProductMigrationRequest
 */
class SubscriptionProductMigrationRequestBuilder
{
    /**
     * @var SubscriptionProductMigrationRequest
     */
    private $instance;

    private function __construct(SubscriptionProductMigrationRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Product Migration Request Builder object.
     *
     * @param SubscriptionProductMigration $migration
     */
    public static function init(SubscriptionProductMigration $migration): self
    {
        return new self(new SubscriptionProductMigrationRequest($migration));
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
     * Initializes a new Subscription Product Migration Request object.
     */
    public function build(): SubscriptionProductMigrationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
