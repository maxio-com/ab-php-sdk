<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupSignup implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $paymentProfileId;

    /**
     * @var int|null
     */
    private $payerId;

    /**
     * @var string|null
     */
    private $payerReference;

    /**
     * @var string|null
     */
    private $paymentCollectionMethod = PaymentCollectionMethod::AUTOMATIC;

    /**
     * @var PayerAttributes|null
     */
    private $payerAttributes;

    /**
     * @var SubscriptionGroupCreditCard|null
     */
    private $creditCardAttributes;

    /**
     * @var SubscriptionGroupBankAccount|null
     */
    private $bankAccountAttributes;

    /**
     * @var SubscriptionGroupSignupItem[]
     */
    private $subscriptions;

    /**
     * @param SubscriptionGroupSignupItem[] $subscriptions
     */
    public function __construct(array $subscriptions)
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * Returns Payment Profile Id.
     */
    public function getPaymentProfileId(): ?int
    {
        return $this->paymentProfileId;
    }

    /**
     * Sets Payment Profile Id.
     *
     * @maps payment_profile_id
     */
    public function setPaymentProfileId(?int $paymentProfileId): void
    {
        $this->paymentProfileId = $paymentProfileId;
    }

    /**
     * Returns Payer Id.
     */
    public function getPayerId(): ?int
    {
        return $this->payerId;
    }

    /**
     * Sets Payer Id.
     *
     * @maps payer_id
     */
    public function setPayerId(?int $payerId): void
    {
        $this->payerId = $payerId;
    }

    /**
     * Returns Payer Reference.
     */
    public function getPayerReference(): ?string
    {
        return $this->payerReference;
    }

    /**
     * Sets Payer Reference.
     *
     * @maps payer_reference
     */
    public function setPayerReference(?string $payerReference): void
    {
        $this->payerReference = $payerReference;
    }

    /**
     * Returns Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     */
    public function getPaymentCollectionMethod(): ?string
    {
        return $this->paymentCollectionMethod;
    }

    /**
     * Sets Payment Collection Method.
     * The type of payment collection to be used in the subscription. For legacy Statements Architecture
     * valid options are - `invoice`, `automatic`. For current Relationship Invoicing Architecture valid
     * options are - `remittance`, `automatic`, `prepaid`.
     *
     * @maps payment_collection_method
     * @factory \AdvancedBillingLib\Models\PaymentCollectionMethod::checkValue
     */
    public function setPaymentCollectionMethod(?string $paymentCollectionMethod): void
    {
        $this->paymentCollectionMethod = $paymentCollectionMethod;
    }

    /**
     * Returns Payer Attributes.
     */
    public function getPayerAttributes(): ?PayerAttributes
    {
        return $this->payerAttributes;
    }

    /**
     * Sets Payer Attributes.
     *
     * @maps payer_attributes
     */
    public function setPayerAttributes(?PayerAttributes $payerAttributes): void
    {
        $this->payerAttributes = $payerAttributes;
    }

    /**
     * Returns Credit Card Attributes.
     */
    public function getCreditCardAttributes(): ?SubscriptionGroupCreditCard
    {
        return $this->creditCardAttributes;
    }

    /**
     * Sets Credit Card Attributes.
     *
     * @maps credit_card_attributes
     */
    public function setCreditCardAttributes(?SubscriptionGroupCreditCard $creditCardAttributes): void
    {
        $this->creditCardAttributes = $creditCardAttributes;
    }

    /**
     * Returns Bank Account Attributes.
     */
    public function getBankAccountAttributes(): ?SubscriptionGroupBankAccount
    {
        return $this->bankAccountAttributes;
    }

    /**
     * Sets Bank Account Attributes.
     *
     * @maps bank_account_attributes
     */
    public function setBankAccountAttributes(?SubscriptionGroupBankAccount $bankAccountAttributes): void
    {
        $this->bankAccountAttributes = $bankAccountAttributes;
    }

    /**
     * Returns Subscriptions.
     *
     * @return SubscriptionGroupSignupItem[]
     */
    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }

    /**
     * Sets Subscriptions.
     *
     * @required
     * @maps subscriptions
     *
     * @param SubscriptionGroupSignupItem[] $subscriptions
     */
    public function setSubscriptions(array $subscriptions): void
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id']        = $this->paymentProfileId;
        }
        if (isset($this->payerId)) {
            $json['payer_id']                  = $this->payerId;
        }
        if (isset($this->payerReference)) {
            $json['payer_reference']           = $this->payerReference;
        }
        if (isset($this->paymentCollectionMethod)) {
            $json['payment_collection_method'] = PaymentCollectionMethod::checkValue($this->paymentCollectionMethod);
        }
        if (isset($this->payerAttributes)) {
            $json['payer_attributes']          = $this->payerAttributes;
        }
        if (isset($this->creditCardAttributes)) {
            $json['credit_card_attributes']    = $this->creditCardAttributes;
        }
        if (isset($this->bankAccountAttributes)) {
            $json['bank_account_attributes']   = $this->bankAccountAttributes;
        }
        $json['subscriptions']                 = $this->subscriptions;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
