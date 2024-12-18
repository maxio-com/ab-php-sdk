<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMigrationPreview;
use AdvancedBillingLib\Models\SubscriptionMigrationPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMigrationPreviewResponse
 *
 * @see SubscriptionMigrationPreviewResponse
 */
class SubscriptionMigrationPreviewResponseBuilder
{
    /**
     * @var SubscriptionMigrationPreviewResponse
     */
    private $instance;

    private function __construct(SubscriptionMigrationPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Migration Preview Response Builder object.
     *
     * @param SubscriptionMigrationPreview $migration
     */
    public static function init(SubscriptionMigrationPreview $migration): self
    {
        return new self(new SubscriptionMigrationPreviewResponse($migration));
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
     * Initializes a new Subscription Migration Preview Response object.
     */
    public function build(): SubscriptionMigrationPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
