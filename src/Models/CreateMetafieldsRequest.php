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

class CreateMetafieldsRequest implements \JsonSerializable
{
    /**
     * @var CreateMetafield|CreateMetafield[]
     */
    private $metafields;

    /**
     * @param CreateMetafield|CreateMetafield[] $metafields
     */
    public function __construct($metafields)
    {
        $this->metafields = $metafields;
    }

    /**
     * Returns Metafields.
     *
     * @return CreateMetafield|CreateMetafield[]
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     *
     * @required
     * @maps metafields
     * @mapsBy oneOf(CreateMetafield,CreateMetafield[])
     *
     * @param CreateMetafield|CreateMetafield[] $metafields
     */
    public function setMetafields($metafields): void
    {
        $this->metafields = $metafields;
    }

    /**
     * Converts the CreateMetafieldsRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateMetafieldsRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateMetafieldsRequest',
            ['metafields' => $this->metafields, 'additionalProperties' => $this->additionalProperties]
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
        $json['metafields'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->metafields,
                'oneOf(CreateMetafield,CreateMetafield[])'
            );
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
