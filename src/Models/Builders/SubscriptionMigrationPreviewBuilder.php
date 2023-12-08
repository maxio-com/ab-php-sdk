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
     * Initializes a new subscription migration preview Builder object.
     */
    public static function init(): self
    {
        return new self(new SubscriptionMigrationPreview());
    }

    /**
     * Sets prorated adjustment in cents field.
     */
    public function proratedAdjustmentInCents(?int $value): self
    {
        $this->instance->setProratedAdjustmentInCents($value);
        return $this;
    }

    /**
     * Sets charge in cents field.
     */
    public function chargeInCents(?int $value): self
    {
        $this->instance->setChargeInCents($value);
        return $this;
    }

    /**
     * Sets payment due in cents field.
     */
    public function paymentDueInCents(?int $value): self
    {
        $this->instance->setPaymentDueInCents($value);
        return $this;
    }

    /**
     * Sets credit applied in cents field.
     */
    public function creditAppliedInCents(?int $value): self
    {
        $this->instance->setCreditAppliedInCents($value);
        return $this;
    }

    /**
     * Initializes a new subscription migration preview object.
     */
    public function build(): SubscriptionMigrationPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
