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
     * Initializes a new subscription product migration request Builder object.
     */
    public static function init(SubscriptionProductMigration $migration): self
    {
        return new self(new SubscriptionProductMigrationRequest($migration));
    }

    /**
     * Initializes a new subscription product migration request object.
     */
    public function build(): SubscriptionProductMigrationRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
