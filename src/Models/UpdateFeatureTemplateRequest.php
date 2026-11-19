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

class UpdateFeatureTemplateRequest implements \JsonSerializable
{
    /**
     * @var Feature1
     */
    private $feature;

    /**
     * @param Feature1 $feature
     */
    public function __construct(Feature1 $feature)
    {
        $this->feature = $feature;
    }

    /**
     * Returns Feature.
     * `key` cannot be changed once set. `kind` cannot be changed once any feature catalog item has been
     * created from this template.
     */
    public function getFeature(): Feature1
    {
        return $this->feature;
    }

    /**
     * Sets Feature.
     * `key` cannot be changed once set. `kind` cannot be changed once any feature catalog item has been
     * created from this template.
     *
     * @required
     * @maps feature
     */
    public function setFeature(Feature1 $feature): void
    {
        $this->feature = $feature;
    }

    /**
     * Converts the UpdateFeatureTemplateRequest object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateFeatureTemplateRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateFeatureTemplateRequest',
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
