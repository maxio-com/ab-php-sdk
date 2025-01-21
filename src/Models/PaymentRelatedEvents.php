<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class PaymentRelatedEvents implements \JsonSerializable
{
    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $accountTransactionId;

    /**
     * @param int $productId
     * @param int $accountTransactionId
     */
    public function __construct(int $productId, int $accountTransactionId)
    {
        $this->productId = $productId;
        $this->accountTransactionId = $accountTransactionId;
    }

    /**
     * Returns Product Id.
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     *
     * @required
     * @maps product_id
     */
    public function setProductId(int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Account Transaction Id.
     */
    public function getAccountTransactionId(): int
    {
        return $this->accountTransactionId;
    }

    /**
     * Sets Account Transaction Id.
     *
     * @required
     * @maps account_transaction_id
     */
    public function setAccountTransactionId(int $accountTransactionId): void
    {
        $this->accountTransactionId = $accountTransactionId;
    }

    /**
     * Converts the PaymentRelatedEvents object to a human-readable string representation.
     *
     * @return string The string representation of the PaymentRelatedEvents object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PaymentRelatedEvents',
            [
                'productId' => $this->productId,
                'accountTransactionId' => $this->accountTransactionId,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        $json['product_id']             = $this->productId;
        $json['account_transaction_id'] = $this->accountTransactionId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
