<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionGroupPrepayment implements \JsonSerializable
{
    /**
     * @var int
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
     * @param int $amount
     * @param string $details
     * @param string $memo
     * @param string $method
     */
    public function __construct(int $amount, string $details, string $memo, string $method)
    {
        $this->amount = $amount;
        $this->details = $details;
        $this->memo = $memo;
        $this->method = $method;
    }

    /**
     * Returns Amount.
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     *
     * @required
     * @maps amount
     */
    public function setAmount(int $amount): void
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
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Sets Method.
     *
     * @required
     * @maps method
     * @factory \AdvancedBillingLib\Models\SubscriptionGroupPrepaymentMethod::checkValue
     */
    public function setMethod(string $method): void
    {
        $this->method = $method;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json['amount']  = $this->amount;
        $json['details'] = $this->details;
        $json['memo']    = $this->memo;
        $json['method']  = SubscriptionGroupPrepaymentMethod::checkValue($this->method);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
