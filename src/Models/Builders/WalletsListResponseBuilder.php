<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPublicKeysMeta;
use AdvancedBillingLib\Models\Wallet;
use AdvancedBillingLib\Models\WalletsListResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletsListResponse
 *
 * @see WalletsListResponse
 */
class WalletsListResponseBuilder
{
    /**
     * @var WalletsListResponse
     */
    private $instance;

    private function __construct(WalletsListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallets List Response Builder object.
     *
     * @param Wallet[] $wallets
     * @param ListPublicKeysMeta $meta
     */
    public static function init(array $wallets, ListPublicKeysMeta $meta): self
    {
        return new self(new WalletsListResponse($wallets, $meta));
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
     * Initializes a new Wallets List Response object.
     */
    public function build(): WalletsListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
