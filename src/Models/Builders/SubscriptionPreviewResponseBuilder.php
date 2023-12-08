<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionPreview;
use AdvancedBillingLib\Models\SubscriptionPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionPreviewResponse
 *
 * @see SubscriptionPreviewResponse
 */
class SubscriptionPreviewResponseBuilder
{
    /**
     * @var SubscriptionPreviewResponse
     */
    private $instance;

    private function __construct(SubscriptionPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription preview response Builder object.
     */
    public static function init(SubscriptionPreview $subscriptionPreview): self
    {
        return new self(new SubscriptionPreviewResponse($subscriptionPreview));
    }

    /**
     * Initializes a new subscription preview response object.
     */
    public function build(): SubscriptionPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
