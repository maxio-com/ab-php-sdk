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

class RefundSuccess implements \JsonSerializable
{
    /**
     * @var int
     */
    private $refundId;

    /**
     * @var int
     */
    private $gatewayTransactionId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @param int $refundId
     * @param int $gatewayTransactionId
     * @param int $productId
     */
    public function __construct(int $refundId, int $gatewayTransactionId, int $productId)
    {
        $this->refundId = $refundId;
        $this->gatewayTransactionId = $gatewayTransactionId;
        $this->productId = $productId;
    }

    /**
     * Returns Refund Id.
     */
    public function getRefundId(): int
    {
        return $this->refundId;
    }

    /**
     * Sets Refund Id.
     *
     * @required
     * @maps refund_id
     */
    public function setRefundId(int $refundId): void
    {
        $this->refundId = $refundId;
    }

    /**
     * Returns Gateway Transaction Id.
     */
    public function getGatewayTransactionId(): int
    {
        return $this->gatewayTransactionId;
    }

    /**
     * Sets Gateway Transaction Id.
     *
     * @required
     * @maps gateway_transaction_id
     */
    public function setGatewayTransactionId(int $gatewayTransactionId): void
    {
        $this->gatewayTransactionId = $gatewayTransactionId;
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
     * Converts the RefundSuccess object to a human-readable string representation.
     *
     * @return string The string representation of the RefundSuccess object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RefundSuccess',
            [
                'refundId' => $this->refundId,
                'gatewayTransactionId' => $this->gatewayTransactionId,
                'productId' => $this->productId,
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
        $json['refund_id']              = $this->refundId;
        $json['gateway_transaction_id'] = $this->gatewayTransactionId;
        $json['product_id']             = $this->productId;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
