<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BillingManifest;
use AdvancedBillingLib\Models\SubscriptionPreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionPreview
 *
 * @see SubscriptionPreview
 */
class SubscriptionPreviewBuilder
{
    /**
     * @var SubscriptionPreview
     */
    private $instance;

    private function __construct(SubscriptionPreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription preview Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionPreview());
    }

    /**
     * Sets current billing manifest field.
     */
    public function currentBillingManifest(?BillingManifest $value): self
    {
        $this->instance->setCurrentBillingManifest($value);
        return $this;
    }

    /**
     * Sets next billing manifest field.
     */
    public function nextBillingManifest(?BillingManifest $value): self
    {
        $this->instance->setNextBillingManifest($value);
        return $this;
    }

    /**
     * Initializes a new subscription preview object.
     */
    public function build(): SubscriptionPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
