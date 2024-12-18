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
     * Initializes a new Subscription Preview Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionPreview());
    }

    /**
     * Sets current billing manifest field.
     *
     * @param BillingManifest|null $value
     */
    public function currentBillingManifest(?BillingManifest $value): self
    {
        $this->instance->setCurrentBillingManifest($value);
        return $this;
    }

    /**
     * Sets next billing manifest field.
     *
     * @param BillingManifest|null $value
     */
    public function nextBillingManifest(?BillingManifest $value): self
    {
        $this->instance->setNextBillingManifest($value);
        return $this;
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
     * Initializes a new Subscription Preview object.
     */
    public function build(): SubscriptionPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
