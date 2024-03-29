<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionProductChange;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionProductChange
 *
 * @see SubscriptionProductChange
 */
class SubscriptionProductChangeBuilder
{
    /**
     * @var SubscriptionProductChange
     */
    private $instance;

    private function __construct(SubscriptionProductChange $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription product change Builder object.
     */
    public static function init(int $previousProductId, int $newProductId): self
    {
        return new self(new SubscriptionProductChange($previousProductId, $newProductId));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new subscription product change object.
     */
    public function build(): SubscriptionProductChange
    {
        return CoreHelper::clone($this->instance);
    }
}
