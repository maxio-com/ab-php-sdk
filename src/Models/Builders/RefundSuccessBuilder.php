<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RefundSuccess;
use Core\Utils\CoreHelper;

/**
 * Builder for model RefundSuccess
 *
 * @see RefundSuccess
 */
class RefundSuccessBuilder
{
    /**
     * @var RefundSuccess
     */
    private $instance;

    private function __construct(RefundSuccess $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Refund Success Builder object.
     *
     * @param int $refundId
     * @param int $gatewayTransactionId
     * @param int $productId
     */
    public static function init(int $refundId, int $gatewayTransactionId, int $productId): self
    {
        return new self(new RefundSuccess($refundId, $gatewayTransactionId, $productId));
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
     * Initializes a new Refund Success object.
     */
    public function build(): RefundSuccess
    {
        return CoreHelper::clone($this->instance);
    }
}
