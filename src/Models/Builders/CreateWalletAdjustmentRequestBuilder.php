<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Adjustment;
use AdvancedBillingLib\Models\CreateWalletAdjustmentRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateWalletAdjustmentRequest
 *
 * @see CreateWalletAdjustmentRequest
 */
class CreateWalletAdjustmentRequestBuilder
{
    /**
     * @var CreateWalletAdjustmentRequest
     */
    private $instance;

    private function __construct(CreateWalletAdjustmentRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Wallet Adjustment Request Builder object.
     *
     * @param Adjustment $adjustment
     */
    public static function init(Adjustment $adjustment): self
    {
        return new self(new CreateWalletAdjustmentRequest($adjustment));
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
     * Initializes a new Create Wallet Adjustment Request object.
     */
    public function build(): CreateWalletAdjustmentRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
