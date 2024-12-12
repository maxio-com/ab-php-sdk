<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMigrationPreviewOptions;
use AdvancedBillingLib\Models\SubscriptionMigrationPreviewRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMigrationPreviewRequest
 *
 * @see SubscriptionMigrationPreviewRequest
 */
class SubscriptionMigrationPreviewRequestBuilder
{
    /**
     * @var SubscriptionMigrationPreviewRequest
     */
    private $instance;

    private function __construct(SubscriptionMigrationPreviewRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Migration Preview Request Builder object.
     *
     * @param SubscriptionMigrationPreviewOptions $migration
     */
    public static function init(SubscriptionMigrationPreviewOptions $migration): self
    {
        return new self(new SubscriptionMigrationPreviewRequest($migration));
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
     * Initializes a new Subscription Migration Preview Request object.
     */
    public function build(): SubscriptionMigrationPreviewRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
