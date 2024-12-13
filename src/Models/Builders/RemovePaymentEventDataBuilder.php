<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PaymentMethodApplePay;
use AdvancedBillingLib\Models\PaymentMethodBankAccount;
use AdvancedBillingLib\Models\PaymentMethodCreditCard;
use AdvancedBillingLib\Models\PaymentMethodExternal;
use AdvancedBillingLib\Models\PaymentMethodPaypal;
use AdvancedBillingLib\Models\RemovePaymentEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model RemovePaymentEventData
 *
 * @see RemovePaymentEventData
 */
class RemovePaymentEventDataBuilder
{
    /**
     * @var RemovePaymentEventData
     */
    private $instance;

    private function __construct(RemovePaymentEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Remove Payment Event Data Builder object.
     *
     * @param int $transactionId
     * @param string $memo
     * @param string $appliedAmount
     * @param \DateTime $transactionTime
     * @param PaymentMethodApplePay|PaymentMethodBankAccount|PaymentMethodCreditCard|PaymentMethodExternal|PaymentMethodPaypal $paymentMethod
     * @param bool $prepayment
     */
    public static function init(
        int $transactionId,
        string $memo,
        string $appliedAmount,
        \DateTime $transactionTime,
        $paymentMethod,
        bool $prepayment
    ): self {
        return new self(new RemovePaymentEventData(
            $transactionId,
            $memo,
            $appliedAmount,
            $transactionTime,
            $paymentMethod,
            $prepayment
        ));
    }

    /**
     * Sets original amount field.
     *
     * @param string|null $value
     */
    public function originalAmount(?string $value): self
    {
        $this->instance->setOriginalAmount($value);
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
     * Initializes a new Remove Payment Event Data object.
     */
    public function build(): RemovePaymentEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
