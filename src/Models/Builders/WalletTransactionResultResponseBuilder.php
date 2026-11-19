<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletTransaction;
use AdvancedBillingLib\Models\WalletTransactionResultResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletTransactionResultResponse
 *
 * @see WalletTransactionResultResponse
 */
class WalletTransactionResultResponseBuilder
{
    /**
     * @var WalletTransactionResultResponse
     */
    private $instance;

    private function __construct(WalletTransactionResultResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Transaction Result Response Builder object.
     *
     * @param WalletTransaction[] $walletTransactions
     * @param string $balance
     */
    public static function init(array $walletTransactions, string $balance): self
    {
        return new self(new WalletTransactionResultResponse($walletTransactions, $balance));
    }

    /**
     * Sets requested amount field.
     *
     * @param string|null $value
     */
    public function requestedAmount(?string $value): self
    {
        $this->instance->setRequestedAmount($value);
        return $this;
    }

    /**
     * Sets drained amount field.
     *
     * @param string|null $value
     */
    public function drainedAmount(?string $value): self
    {
        $this->instance->setDrainedAmount($value);
        return $this;
    }

    /**
     * Sets rejected amount field.
     *
     * @param string|null $value
     */
    public function rejectedAmount(?string $value): self
    {
        $this->instance->setRejectedAmount($value);
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
     * Initializes a new Wallet Transaction Result Response object.
     */
    public function build(): WalletTransactionResultResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
