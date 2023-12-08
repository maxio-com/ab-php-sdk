<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreatePrepayment implements \JsonSerializable
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $memo;

    /**
     * @var string
     */
    private $method;

    /**
     * @var int|null
     */
    private $paymentProfileId;

    /**
     * @param float $amount
     * @param string $details
     * @param string $memo
     * @param string $method
     */
    public function __construct(float $amount, string $details, string $memo, string $method)
    {
        $this->amount = $amount;
        $this->details = $details;
        $this->memo = $memo;
        $this->method = $method;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @required
     * @maps details
     */
    public function setDetails(string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @required
     * @maps memo
     */
    public function setMemo(string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Method.
     * :- When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected
     * using the default credit card payment profile and applied to the prepayment account balance. This is
     * especially useful for manual replenishment of prepaid subscriptions.
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     * :- When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected
     * using the default credit card payment profile and applied to the prepayment account balance. This is
     * especially useful for manual replenishment of prepaid subscriptions.
     *
     * @required
     * @maps method
     * @factory \AdvancedBillingLib\Models\PrepaymentMethod::checkValue
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
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
        $json['amount']                 = $this->amount;
        $json['details']                = $this->details;
        $json['memo']                   = $this->memo;
        $json['method']                 = PrepaymentMethod::checkValue($this->method);
        if (isset($this->paymentProfileId)) {
            $json['payment_profile_id'] = $this->paymentProfileId;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
