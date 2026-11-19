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

class Feature implements \JsonSerializable
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string
     */
    private $kind;

    /**
     * @var array
     */
    private $unit = [];

    /**
     * @var string|null
     */
    private $valueType;

    /**
     * @var array
     */
    private $defaultValue = [];

    /**
     * @var array
     */
    private $defaultPeriodicityInterval = [];

    /**
     * @var array
     */
    private $defaultPeriodicityUnit = [];

    /**
     * @param string $key
     * @param string $name
     * @param string $kind
     */
    public function __construct(string $key, string $name, string $kind)
    {
        $this->key = $key;
        $this->name = $name;
        $this->kind = $kind;
    }

    /**
     * Returns Key.
     * A unique, lowercase, underscore-separated identifier for the feature. Immutable once set.
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * A unique, lowercase, underscore-separated identifier for the feature. Immutable once set.
     *
     * @required
     * @maps key
     */
    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Name.
     * The display name of the feature.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The display name of the feature.
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        if (count($this->description) == 0) {
            return null;
        }
        return $this->description['value'];
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description['value'] = $description;
    }

    /**
     * Unsets Description.
     */
    public function unsetDescription(): void
    {
        $this->description = [];
    }

    /**
     * Returns Kind.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     *
     * @required
     * @maps kind
     * @factory \AdvancedBillingLib\Models\FeatureKind::checkValue
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Unit.
     * Required when `kind` is `usage_limit`.
     */
    public function getUnit(): ?string
    {
        if (count($this->unit) == 0) {
            return null;
        }
        return $this->unit['value'];
    }

    /**
     * Sets Unit.
     * Required when `kind` is `usage_limit`.
     *
     * @maps unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit['value'] = $unit;
    }

    /**
     * Unsets Unit.
     * Required when `kind` is `usage_limit`.
     */
    public function unsetUnit(): void
    {
        $this->unit = [];
    }

    /**
     * Returns Value Type.
     * Required when `kind` is `service_right`. Ignored for other kinds, where it is inferred automatically.
     */
    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    /**
     * Sets Value Type.
     * Required when `kind` is `service_right`. Ignored for other kinds, where it is inferred automatically.
     *
     * @maps value_type
     * @factory \AdvancedBillingLib\Models\FeatureValueType::checkValue
     */
    public function setValueType(?string $valueType): void
    {
        $this->valueType = $valueType;
    }

    /**
     * Returns Default Value.
     */
    public function getDefaultValue(): ?string
    {
        if (count($this->defaultValue) == 0) {
            return null;
        }
        return $this->defaultValue['value'];
    }

    /**
     * Sets Default Value.
     *
     * @maps default_value
     */
    public function setDefaultValue(?string $defaultValue): void
    {
        $this->defaultValue['value'] = $defaultValue;
    }

    /**
     * Unsets Default Value.
     */
    public function unsetDefaultValue(): void
    {
        $this->defaultValue = [];
    }

    /**
     * Returns Default Periodicity Interval.
     * Only valid when `kind` is `usage_limit`.
     */
    public function getDefaultPeriodicityInterval(): ?int
    {
        if (count($this->defaultPeriodicityInterval) == 0) {
            return null;
        }
        return $this->defaultPeriodicityInterval['value'];
    }

    /**
     * Sets Default Periodicity Interval.
     * Only valid when `kind` is `usage_limit`.
     *
     * @maps default_periodicity_interval
     */
    public function setDefaultPeriodicityInterval(?int $defaultPeriodicityInterval): void
    {
        $this->defaultPeriodicityInterval['value'] = $defaultPeriodicityInterval;
    }

    /**
     * Unsets Default Periodicity Interval.
     * Only valid when `kind` is `usage_limit`.
     */
    public function unsetDefaultPeriodicityInterval(): void
    {
        $this->defaultPeriodicityInterval = [];
    }

    /**
     * Returns Default Periodicity Unit.
     * Only valid when `kind` is `usage_limit`. Must be set together with `default_periodicity_interval`.
     */
    public function getDefaultPeriodicityUnit(): ?string
    {
        if (count($this->defaultPeriodicityUnit) == 0) {
            return null;
        }
        return $this->defaultPeriodicityUnit['value'];
    }

    /**
     * Sets Default Periodicity Unit.
     * Only valid when `kind` is `usage_limit`. Must be set together with `default_periodicity_interval`.
     *
     * @maps default_periodicity_unit
     * @factory \AdvancedBillingLib\Models\EntitlementPeriodicityUnit::checkValue
     */
    public function setDefaultPeriodicityUnit(?string $defaultPeriodicityUnit): void
    {
        $this->defaultPeriodicityUnit['value'] = $defaultPeriodicityUnit;
    }

    /**
     * Unsets Default Periodicity Unit.
     * Only valid when `kind` is `usage_limit`. Must be set together with `default_periodicity_interval`.
     */
    public function unsetDefaultPeriodicityUnit(): void
    {
        $this->defaultPeriodicityUnit = [];
    }

    /**
     * Converts the Feature object to a human-readable string representation.
     *
     * @return string The string representation of the Feature object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Feature',
            [
                'key' => $this->key,
                'name' => $this->name,
                'description' => $this->getDescription(),
                'kind' => $this->kind,
                'unit' => $this->getUnit(),
                'valueType' => $this->valueType,
                'defaultValue' => $this->getDefaultValue(),
                'defaultPeriodicityInterval' => $this->getDefaultPeriodicityInterval(),
                'defaultPeriodicityUnit' => $this->getDefaultPeriodicityUnit(),
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
        $json['key']                              = $this->key;
        $json['name']                             = $this->name;
        if (!empty($this->description)) {
            $json['description']                  = $this->description['value'];
        }
        $json['kind']                             = FeatureKind::checkValue($this->kind);
        if (!empty($this->unit)) {
            $json['unit']                         = $this->unit['value'];
        }
        if (isset($this->valueType)) {
            $json['value_type']                   = FeatureValueType::checkValue($this->valueType);
        }
        if (!empty($this->defaultValue)) {
            $json['default_value']                = $this->defaultValue['value'];
        }
        if (!empty($this->defaultPeriodicityInterval)) {
            $json['default_periodicity_interval'] = $this->defaultPeriodicityInterval['value'];
        }
        if (!empty($this->defaultPeriodicityUnit)) {
            $json['default_periodicity_unit']     =
                EntitlementPeriodicityUnit::checkValue(
                    $this->defaultPeriodicityUnit['value']
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
