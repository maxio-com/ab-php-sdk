<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletGrantResultResponse;
use AdvancedBillingLib\Models\WalletTransaction;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletGrantResultResponse
 *
 * @see WalletGrantResultResponse
 */
class WalletGrantResultResponseBuilder
{
    /**
     * @var WalletGrantResultResponse
     */
    private $instance;

    private function __construct(WalletGrantResultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Grant Result Response Builder object.
     *
     * @param WalletTransaction[] $walletTransactions
     * @param string $balance
     */
    public static function init(array $walletTransactions, string $balance): self
    {
        return new self(new WalletGrantResultResponse($walletTransactions, $balance));
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
     * Initializes a new Wallet Grant Result Response object.
     */
    public function build(): WalletGrantResultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
