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

class RenewalPreviewRequest implements \JsonSerializable
{
    /**
     * @var RenewalPreviewComponent[]|null
     */
    private $components;

    /**
     * Returns Components.
     * An optional array of component definitions to preview. Providing any component definitions here will
     * override the actual components on the subscription (and their quantities), and the billing preview
     * will contain only these components (in addition to any product base fees).
     *
     * @return RenewalPreviewComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     * An optional array of component definitions to preview. Providing any component definitions here will
     * override the actual components on the subscription (and their quantities), and the billing preview
     * will contain only these components (in addition to any product base fees).
     *
     * @maps components
     *
     * @param RenewalPreviewComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
    }

    /**
     * Converts the RenewalPreviewRequest object to a human-readable string representation.
     *
     * @return string The string representation of the RenewalPreviewRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'RenewalPreviewRequest',
            ['components' => $this->components, 'additionalProperties' => $this->additionalProperties]
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
        if (isset($this->components)) {
            $json['components'] = $this->components;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
