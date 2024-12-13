<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionMigrationPreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionMigrationPreview
 *
 * @see SubscriptionMigrationPreview
 */
class SubscriptionMigrationPreviewBuilder
{
    /**
     * @var SubscriptionMigrationPreview
     */
    private $instance;

    private function __construct(SubscriptionMigrationPreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Migration Preview Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionMigrationPreview());
    }

    /**
     * Sets prorated adjustment in cents field.
     *
     * @param int|null $value
     */
    public function proratedAdjustmentInCents(?int $value): self
    {
        $this->instance->setProratedAdjustmentInCents($value);
        return $this;
    }

    /**
     * Sets charge in cents field.
     *
     * @param int|null $value
     */
    public function chargeInCents(?int $value): self
    {
        $this->instance->setChargeInCents($value);
        return $this;
    }

    /**
     * Sets payment due in cents field.
     *
     * @param int|null $value
     */
    public function paymentDueInCents(?int $value): self
    {
        $this->instance->setPaymentDueInCents($value);
        return $this;
    }

    /**
     * Sets credit applied in cents field.
     *
     * @param int|null $value
     */
    public function creditAppliedInCents(?int $value): self
    {
        $this->instance->setCreditAppliedInCents($value);
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
     * Initializes a new Subscription Migration Preview object.
     */
    public function build(): SubscriptionMigrationPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
