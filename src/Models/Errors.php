<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Errors implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $perPage;

    /**
     * @var string[]|null
     */
    private $pricePoint;

    /**
     * Returns Per Page.
     *
     * @return string[]|null
     */
    public function getPerPage(): ?array
    {
        return $this->perPage;
    }

    /**
     * Sets Per Page.
     *
     * @maps per_page
     *
     * @param string[]|null $perPage
     */
    public function setPerPage(?array $perPage): void
    {
        $this->perPage = $perPage;
    }

    /**
     * Returns Price Point.
     *
     * @return string[]|null
     */
    public function getPricePoint(): ?array
    {
        return $this->pricePoint;
    }

    /**
     * Sets Price Point.
     *
     * @maps price_point
     *
     * @param string[]|null $pricePoint
     */
    public function setPricePoint(?array $pricePoint): void
    {
        $this->pricePoint = $pricePoint;
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
        if (isset($this->perPage)) {
            $json['per_page']    = $this->perPage;
        }
        if (isset($this->pricePoint)) {
            $json['price_point'] = $this->pricePoint;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
