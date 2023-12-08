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
     * Initializes a new subscription migration preview request Builder object.
     */
    public static function init(SubscriptionMigrationPreviewOptions $migration): self
    {
        return new self(new SubscriptionMigrationPreviewRequest($migration));
    }

    /**
     * Initializes a new subscription migration preview request object.
     */
    public function build(): SubscriptionMigrationPreviewRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
