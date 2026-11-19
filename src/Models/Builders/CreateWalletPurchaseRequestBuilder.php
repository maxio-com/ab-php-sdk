<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateWalletPurchaseRequest;
use AdvancedBillingLib\Models\Purchase;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateWalletPurchaseRequest
 *
 * @see CreateWalletPurchaseRequest
 */
class CreateWalletPurchaseRequestBuilder
{
    /**
     * @var CreateWalletPurchaseRequest
     */
    private $instance;

    private function __construct(CreateWalletPurchaseRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Wallet Purchase Request Builder object.
     *
     * @param Purchase $purchase
     */
    public static function init(Purchase $purchase): self
    {
        return new self(new CreateWalletPurchaseRequest($purchase));
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
     * Initializes a new Create Wallet Purchase Request object.
     */
    public function build(): CreateWalletPurchaseRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
