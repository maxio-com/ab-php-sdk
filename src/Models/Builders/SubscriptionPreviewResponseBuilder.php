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
     * Initializes a new Subscription Preview Response Builder object.
     *
     * @param SubscriptionPreview $subscriptionPreview
     */
    public static function init(SubscriptionPreview $subscriptionPreview): self
    {
        return new self(new SubscriptionPreviewResponse($subscriptionPreview));
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
     * Initializes a new Subscription Preview Response object.
     */
    public function build(): SubscriptionPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
