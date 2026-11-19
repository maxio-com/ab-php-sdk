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

class FeatureTemplateResponse implements \JsonSerializable
{
    /**
     * @var FeatureTemplate
     */
    private $feature;

    /**
     * @param FeatureTemplate $feature
     */
    public function __construct(FeatureTemplate $feature)
    {
        $this->feature = $feature;
    }

    /**
     * Returns Feature.
     * A feature that can be granted to subscribers, defined once at the site level and then attached to
     * products or components.
     */
    public function getFeature(): FeatureTemplate
    {
        return $this->feature;
    }

    /**
     * Sets Feature.
     * A feature that can be granted to subscribers, defined once at the site level and then attached to
     * products or components.
     *
     * @required
     * @maps feature
     */
    public function setFeature(FeatureTemplate $feature): void
    {
        $this->feature = $feature;
    }

    /**
     * Converts the FeatureTemplateResponse object to a human-readable string representation.
     *
     * @return string The string representation of the FeatureTemplateResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeatureTemplateResponse',
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
