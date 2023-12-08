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
     * Initializes a new subscription migration preview response Builder object.
     */
    public static function init(SubscriptionMigrationPreview $migration): self
    {
        return new self(new SubscriptionMigrationPreviewResponse($migration));
    }

    /**
     * Initializes a new subscription migration preview response object.
     */
    public function build(): SubscriptionMigrationPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
