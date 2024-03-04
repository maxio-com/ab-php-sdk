<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Seller implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var InvoiceAddress|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $phone;

    /**
     * @var array
     */
    private $logoUrl = [];

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?InvoiceAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps address
     */
    public function setAddress(?InvoiceAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Phone.
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Sets Phone.
     *
     * @maps phone
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * Returns Logo Url.
     */
    public function getLogoUrl(): ?string
    {
        if (count($this->logoUrl) == 0) {
            return null;
        }
        return $this->logoUrl['value'];
    }

    /**
     * Sets Logo Url.
     *
     * @maps logo_url
     */
    public function setLogoUrl(?string $logoUrl): void
    {
        $this->logoUrl['value'] = $logoUrl;
    }

    /**
     * Unsets Logo Url.
     */
    public function unsetLogoUrl(): void
    {
        $this->logoUrl = [];
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        if (isset($this->name)) {
            $json['name']     = $this->name;
        }
        if (isset($this->address)) {
            $json['address']  = $this->address;
        }
        if (isset($this->phone)) {
            $json['phone']    = $this->phone;
        }
        if (!empty($this->logoUrl)) {
            $json['logo_url'] = $this->logoUrl['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
