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
 * One entitlement in a subscriber's aggregated entitlements list. Entries are aggregated per feature
 * key and periodicity window, not per feature key alone. A `usage_limit` feature granted with two
 * different periodicities yields two entries sharing one `feature_key`. Use `periodicity_key` to
 * identify an entry uniquely.
 */
class AggregatedEntitlement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $featureKey;

    /**
     * @var string|null
     */
    private $periodicityKey;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var bool|float|string|null
     */
    private $value;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var array
     */
    private $periodicity = [];

    /**
     * @var string[]|null
     */
    private $sourceProducts;

    /**
     * Returns Feature Key.
     * The feature's key, prefixed by kind: `feature.*` for `access_right`, `usage.*` for `usage_limit`,
     * `service.*` for `service_right`.
     */
    public function getFeatureKey(): ?string
    {
        return $this->featureKey;
    }

    /**
     * Sets Feature Key.
     * The feature's key, prefixed by kind: `feature.*` for `access_right`, `usage.*` for `usage_limit`,
     * `service.*` for `service_right`.
     *
     * @maps feature_key
     */
    public function setFeatureKey(?string $featureKey): void
    {
        $this->featureKey = $featureKey;
    }

    /**
     * Returns Periodicity Key.
     * Uniquely identifies this aggregated entry: the prefixed feature key, suffixed with `:{interval}:
     * {unit}` when the entitlement has a periodicity window. Equal to `feature_key` when `periodicity` is
     * `null`.
     */
    public function getPeriodicityKey(): ?string
    {
        return $this->periodicityKey;
    }

    /**
     * Sets Periodicity Key.
     * Uniquely identifies this aggregated entry: the prefixed feature key, suffixed with `:{interval}:
     * {unit}` when the entitlement has a periodicity window. Equal to `feature_key` when `periodicity` is
     * `null`.
     *
     * @maps periodicity_key
     */
    public function setPeriodicityKey(?string $periodicityKey): void
    {
        $this->periodicityKey = $periodicityKey;
    }

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
     * Returns Type.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\FeatureKind::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Value.
     * The aggregated value, coerced according to `type`: a boolean for `access_right` (and boolean
     * `service_right`), a number for `usage_limit` (and numeric `service_right`), or a string for text
     * `service_right`.
     *
     * @return bool|float|string|null
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The aggregated value, coerced according to `type`: a boolean for `access_right` (and boolean
     * `service_right`), a number for `usage_limit` (and numeric `service_right`), or a string for text
     * `service_right`.
     *
     * @maps value
     * @mapsBy anyOf(oneOf(bool,float,string),null)
     *
     * @param bool|float|string|null $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Enabled.
     * `true` only when the aggregated value is truthy for this feature's kind, and the subscription is in
     * a live state (`active`, `trialing`, `assessing`, `past_due`, or `soft_failure`). `false` otherwise,
     * including for `awaiting_signup`, canceled, expired, and on-hold subscriptions. Entitlements
     * deliberately stay enabled through dunning.
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * `true` only when the aggregated value is truthy for this feature's kind, and the subscription is in
     * a live state (`active`, `trialing`, `assessing`, `past_due`, or `soft_failure`). `false` otherwise,
     * including for `awaiting_signup`, canceled, expired, and on-hold subscriptions. Entitlements
     * deliberately stay enabled through dunning.
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Periodicity.
     */
    public function getPeriodicity(): ?AggregatedEntitlementPeriodicity
    {
        if (count($this->periodicity) == 0) {
            return null;
        }
        return $this->periodicity['value'];
    }

    /**
     * Sets Periodicity.
     *
     * @maps periodicity
     */
    public function setPeriodicity(?AggregatedEntitlementPeriodicity $periodicity): void
    {
        $this->periodicity['value'] = $periodicity;
    }

    /**
     * Unsets Periodicity.
     */
    public function unsetPeriodicity(): void
    {
        $this->periodicity = [];
    }

    /**
     * Returns Source Products.
     * The names of the products/components contributing to this entitlement. For `access_right` features,
     * only contributors that granted `true` are listed.
     *
     * @return string[]|null
     */
    public function getSourceProducts(): ?array
    {
        return $this->sourceProducts;
    }

    /**
     * Sets Source Products.
     * The names of the products/components contributing to this entitlement. For `access_right` features,
     * only contributors that granted `true` are listed.
     *
     * @maps source_products
     *
     * @param string[]|null $sourceProducts
     */
    public function setSourceProducts(?array $sourceProducts): void
    {
        $this->sourceProducts = $sourceProducts;
    }

    /**
     * Converts the AggregatedEntitlement object to a human-readable string representation.
     *
     * @return string The string representation of the AggregatedEntitlement object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'AggregatedEntitlement',
            [
                'featureKey' => $this->featureKey,
                'periodicityKey' => $this->periodicityKey,
                'name' => $this->name,
                'type' => $this->type,
                'value' => $this->value,
                'enabled' => $this->enabled,
                'periodicity' => $this->getPeriodicity(),
                'sourceProducts' => $this->sourceProducts,
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
        if (isset($this->featureKey)) {
            $json['feature_key']     = $this->featureKey;
        }
        if (isset($this->periodicityKey)) {
            $json['periodicity_key'] = $this->periodicityKey;
        }
        if (isset($this->name)) {
            $json['name']            = $this->name;
        }
        if (isset($this->type)) {
            $json['type']            = FeatureKind::checkValue($this->type);
        }
        if (isset($this->value)) {
            $json['value']           =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->value,
                    'anyOf(oneOf(bool,float,string),null)'
                );
        }
        if (isset($this->enabled)) {
            $json['enabled']         = $this->enabled;
        }
        if (!empty($this->periodicity)) {
            $json['periodicity']     = $this->periodicity['value'];
        }
        if (isset($this->sourceProducts)) {
            $json['source_products'] = $this->sourceProducts;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
