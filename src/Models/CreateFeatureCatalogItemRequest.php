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
 * The owning product or component is taken from the URL and must not be included in the request body.
 */
class CreateFeatureCatalogItemRequest implements \JsonSerializable
{
    /**
     * @var Feature2
     */
    private $feature;

    /**
     * @param Feature2 $feature
     */
    public function __construct(Feature2 $feature)
    {
        $this->feature = $feature;
    }

    /**
     * Returns Feature.
     */
    public function getFeature(): Feature2
    {
        return $this->feature;
    }

    /**
     * Sets Feature.
     *
     * @required
     * @maps feature
     */
    public function setFeature(Feature2 $feature): void
    {
        $this->feature = $feature;
    }

    /**
     * Converts the CreateFeatureCatalogItemRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CreateFeatureCatalogItemRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateFeatureCatalogItemRequest',
            ['feature' => $this->feature, 'additionalProperties' => $this->additionalProperties]
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
        $json['feature'] = $this->feature;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
