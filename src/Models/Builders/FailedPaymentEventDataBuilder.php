<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FailedPaymentEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model FailedPaymentEventData
 *
 * @see FailedPaymentEventData
 */
class FailedPaymentEventDataBuilder
{
    /**
     * @var FailedPaymentEventData
     */
    private $instance;

    private function __construct(FailedPaymentEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new failed payment event data Builder object.
     */
    public static function init(
        int $amountInCents,
        int $appliedAmount,
        string $paymentMethod,
        int $transactionId
    ): self {
        return new self(new FailedPaymentEventData($amountInCents, $appliedAmount, $paymentMethod, $transactionId));
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
        return $this;
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
     * Initializes a new failed payment event data object.
     */
    public function build(): FailedPaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
