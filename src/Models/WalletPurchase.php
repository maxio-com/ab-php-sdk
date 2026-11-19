<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * A completed unit purchase.
 */
class WalletPurchase implements \JsonSerializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $pricePointId;

    /**
     * @var string
     */
    private $invoiceUid;

    /**
     * @var string
     */
    private $quantity;

    /**
     * @var \DateTime|null
     */
    private $expiresAt;

    /**
     * @param int $id
     * @param int $pricePointId
     * @param string $invoiceUid
     * @param string $quantity
     */
    public function __construct(int $id, int $pricePointId, string $invoiceUid, string $quantity)
    {
        $this->id = $id;
        $this->pricePointId = $pricePointId;
        $this->invoiceUid = $invoiceUid;
        $this->quantity = $quantity;
    }

    /**
     * Returns Id.
     * The id of the grant this purchase created. When the wallet was overdrawn by at least the purchased
     * quantity, the units repay the debt and the grant is still created, with `remaining` of `0` and
     * `original` equal to the purchased quantity.
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The id of the grant this purchase created. When the wallet was overdrawn by at least the purchased
     * quantity, the units repay the debt and the grant is still created, with `remaining` of `0` and
     * `original` equal to the purchased quantity.
     *
     * @required
     * @maps id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Price Point Id.
     * The price point the purchase was priced at.
     */
    public function getPricePointId(): int
    {
        return $this->pricePointId;
    }

    /**
     * Sets Price Point Id.
     * The price point the purchase was priced at.
     *
     * @required
     * @maps price_point_id
     */
    public function setPricePointId(int $pricePointId): void
    {
        $this->pricePointId = $pricePointId;
    }

    /**
     * Returns Invoice Uid.
     * The uid of the invoice created to collect payment for this purchase.
     */
    public function getInvoiceUid(): string
    {
        return $this->invoiceUid;
    }

    /**
     * Sets Invoice Uid.
     * The uid of the invoice created to collect payment for this purchase.
     *
     * @required
     * @maps invoice_uid
     */
    public function setInvoiceUid(string $invoiceUid): void
    {
        $this->invoiceUid = $invoiceUid;
    }

    /**
     * Returns Quantity.
     * The number of units purchased, as a decimal string.
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * The number of units purchased, as a decimal string.
     *
     * @required
     * @maps quantity
     */
    public function setQuantity(string $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Expires At.
     * When the purchased units expire, following the funding entitlement's grant expiration policy. `null`
     * when the wallet has no funding entitlement or its entitlements disagree on an expiration policy.
     */
    public function getExpiresAt(): ?\DateTime
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     * When the purchased units expire, following the funding entitlement's grant expiration policy. `null`
     * when the wallet has no funding entitlement or its entitlements disagree on an expiration policy.
     *
     * @maps expires_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setExpiresAt(?\DateTime $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Converts the WalletPurchase object to a human-readable string representation.
     *
     * @return string The string representation of the WalletPurchase object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletPurchase',
            [
                'id' => $this->id,
                'pricePointId' => $this->pricePointId,
                'invoiceUid' => $this->invoiceUid,
                'quantity' => $this->quantity,
                'expiresAt' => $this->expiresAt,
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
        $json['id']             = $this->id;
        $json['price_point_id'] = $this->pricePointId;
        $json['invoice_uid']    = $this->invoiceUid;
        $json['quantity']       = $this->quantity;
        $json['expires_at']     = DateTimeHelper::toRfc3339DateTime($this->expiresAt);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
