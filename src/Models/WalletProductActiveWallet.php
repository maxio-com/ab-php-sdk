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

/**
 * One active wallet drawing on this Wallet Product.
 */
class WalletProductActiveWallet implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $companyName;

    /**
     * @var array
     */
    private $purchaseMechanism = [];

    /**
     * @var array
     */
    private $pricePointName = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * Returns Id.
     * The Advanced Billing id of the wallet.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the wallet.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Company Name.
     * The owning customer's organization name, falling back to their full name, then to `"Customer #<id>"`.
     * `"Customer"` (with no id) when the wallet's subscription has no customer at all.
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Sets Company Name.
     * The owning customer's organization name, falling back to their full name, then to `"Customer #<id>"`.
     * `"Customer"` (with no id) when the wallet's subscription has no customer at all.
     *
     * @maps company_name
     */
    public function setCompanyName(?string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Returns Purchase Mechanism.
     * See the same field on [Wallet Product Usage Template]($m/Wallet%20Product%20Usage%20Template). The
     * same caveats apply.
     */
    public function getPurchaseMechanism(): ?string
    {
        if (count($this->purchaseMechanism) == 0) {
            return null;
        }
        return $this->purchaseMechanism['value'];
    }

    /**
     * Sets Purchase Mechanism.
     * See the same field on [Wallet Product Usage Template]($m/Wallet%20Product%20Usage%20Template). The
     * same caveats apply.
     *
     * @maps purchase_mechanism
     */
    public function setPurchaseMechanism(?string $purchaseMechanism): void
    {
        $this->purchaseMechanism['value'] = $purchaseMechanism;
    }

    /**
     * Unsets Purchase Mechanism.
     * See the same field on [Wallet Product Usage Template]($m/Wallet%20Product%20Usage%20Template). The
     * same caveats apply.
     */
    public function unsetPurchaseMechanism(): void
    {
        $this->purchaseMechanism = [];
    }

    /**
     * Returns Price Point Name.
     */
    public function getPricePointName(): ?string
    {
        if (count($this->pricePointName) == 0) {
            return null;
        }
        return $this->pricePointName['value'];
    }

    /**
     * Sets Price Point Name.
     *
     * @maps price_point_name
     */
    public function setPricePointName(?string $pricePointName): void
    {
        $this->pricePointName['value'] = $pricePointName;
    }

    /**
     * Unsets Price Point Name.
     */
    public function unsetPricePointName(): void
    {
        $this->pricePointName = [];
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Active.
     * `false` when the wallet's Feature is archived.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * `false` when the wallet's Feature is archived.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Converts the WalletProductActiveWallet object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductActiveWallet object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductActiveWallet',
            [
                'id' => $this->id,
                'subscriptionId' => $this->subscriptionId,
                'companyName' => $this->companyName,
                'purchaseMechanism' => $this->getPurchaseMechanism(),
                'pricePointName' => $this->getPricePointName(),
                'currency' => $this->currency,
                'active' => $this->active,
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
        if (isset($this->id)) {
            $json['id']                 = $this->id;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']    = $this->subscriptionId;
        }
        if (isset($this->companyName)) {
            $json['company_name']       = $this->companyName;
        }
        if (!empty($this->purchaseMechanism)) {
            $json['purchase_mechanism'] = $this->purchaseMechanism['value'];
        }
        if (!empty($this->pricePointName)) {
            $json['price_point_name']   = $this->pricePointName['value'];
        }
        if (isset($this->currency)) {
            $json['currency']           = $this->currency;
        }
        if (isset($this->active)) {
            $json['active']             = $this->active;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
