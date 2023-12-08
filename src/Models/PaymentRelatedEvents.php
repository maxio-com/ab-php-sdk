<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
