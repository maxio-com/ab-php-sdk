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
 * A feature to put on the cloned price point. Requires Entitlements to be enabled for the site;
 * ignored otherwise.
 *
 * Unlike Create Feature Catalog Item, nothing falls back to the feature template's defaults: send
 * `value`, and for a `usage_limit` feature its periodicity (and any grant expiration) explicitly. If
 * any item can't be applied, for example a missing `value`, a `usage_limit` item without periodicity,
 * or an archived or unknown feature template, the whole clone fails with `422` and nothing is created.
 */
class CloneFeatureCatalogItem implements \JsonSerializable
{
    /**
     * @var int
     */
    private $featureTemplateId;

    /**
     * @var string
     */
    private $value;

    /**
     * @var array
     */
    private $periodicityInterval = [];

    /**
     * @var array
     */
    private $periodicityUnit = [];

    /**
     * @var array
     */
    private $grantExpirationInterval = [];

    /**
     * @var array
     */
    private $grantExpirationUnit = [];

    /**
     * @param int $featureTemplateId
     * @param string $value
     */
    public function __construct(int $featureTemplateId, string $value)
    {
        $this->featureTemplateId = $featureTemplateId;
        $this->value = $value;
    }

    /**
     * Returns Feature Template Id.
     */
    public function getFeatureTemplateId(): int
    {
        return $this->featureTemplateId;
    }

    /**
     * Sets Feature Template Id.
     *
     * @required
     * @maps feature_template_id
     */
    public function setFeatureTemplateId(int $featureTemplateId): void
    {
        $this->featureTemplateId = $featureTemplateId;
    }

    /**
     * Returns Value.
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @required
     * @maps value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Periodicity Interval.
     * Required for `usage_limit` features; must be omitted for other kinds.
     */
    public function getPeriodicityInterval(): ?int
    {
        if (count($this->periodicityInterval) == 0) {
            return null;
        }
        return $this->periodicityInterval['value'];
    }

    /**
     * Sets Periodicity Interval.
     * Required for `usage_limit` features; must be omitted for other kinds.
     *
     * @maps periodicity_interval
     */
    public function setPeriodicityInterval(?int $periodicityInterval): void
    {
        $this->periodicityInterval['value'] = $periodicityInterval;
    }

    /**
     * Unsets Periodicity Interval.
     * Required for `usage_limit` features; must be omitted for other kinds.
     */
    public function unsetPeriodicityInterval(): void
    {
        $this->periodicityInterval = [];
    }

    /**
     * Returns Periodicity Unit.
     * Required for `usage_limit` features; must be omitted for other kinds.
     */
    public function getPeriodicityUnit(): ?string
    {
        if (count($this->periodicityUnit) == 0) {
            return null;
        }
        return $this->periodicityUnit['value'];
    }

    /**
     * Sets Periodicity Unit.
     * Required for `usage_limit` features; must be omitted for other kinds.
     *
     * @maps periodicity_unit
     * @factory \AdvancedBillingLib\Models\EntitlementPeriodicityUnit::checkValue
     */
    public function setPeriodicityUnit(?string $periodicityUnit): void
    {
        $this->periodicityUnit['value'] = $periodicityUnit;
    }

    /**
     * Unsets Periodicity Unit.
     * Required for `usage_limit` features; must be omitted for other kinds.
     */
    public function unsetPeriodicityUnit(): void
    {
        $this->periodicityUnit = [];
    }

    /**
     * Returns Grant Expiration Interval.
     * `usage_limit` features only. A positive number of `grant_expiration_unit`s; required with `day` or
     * `month`, and must be omitted with `until_next_refill`.
     */
    public function getGrantExpirationInterval(): ?int
    {
        if (count($this->grantExpirationInterval) == 0) {
            return null;
        }
        return $this->grantExpirationInterval['value'];
    }

    /**
     * Sets Grant Expiration Interval.
     * `usage_limit` features only. A positive number of `grant_expiration_unit`s; required with `day` or
     * `month`, and must be omitted with `until_next_refill`.
     *
     * @maps grant_expiration_interval
     */
    public function setGrantExpirationInterval(?int $grantExpirationInterval): void
    {
        $this->grantExpirationInterval['value'] = $grantExpirationInterval;
    }

    /**
     * Unsets Grant Expiration Interval.
     * `usage_limit` features only. A positive number of `grant_expiration_unit`s; required with `day` or
     * `month`, and must be omitted with `until_next_refill`.
     */
    public function unsetGrantExpirationInterval(): void
    {
        $this->grantExpirationInterval = [];
    }

    /**
     * Returns Grant Expiration Unit.
     * `usage_limit` features only.
     */
    public function getGrantExpirationUnit(): ?string
    {
        if (count($this->grantExpirationUnit) == 0) {
            return null;
        }
        return $this->grantExpirationUnit['value'];
    }

    /**
     * Sets Grant Expiration Unit.
     * `usage_limit` features only.
     *
     * @maps grant_expiration_unit
     * @factory \AdvancedBillingLib\Models\GrantExpirationUnit::checkValue
     */
    public function setGrantExpirationUnit(?string $grantExpirationUnit): void
    {
        $this->grantExpirationUnit['value'] = $grantExpirationUnit;
    }

    /**
     * Unsets Grant Expiration Unit.
     * `usage_limit` features only.
     */
    public function unsetGrantExpirationUnit(): void
    {
        $this->grantExpirationUnit = [];
    }

    /**
     * Converts the CloneFeatureCatalogItem object to a human-readable string representation.
     *
     * @return string The string representation of the CloneFeatureCatalogItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CloneFeatureCatalogItem',
            [
                'featureTemplateId' => $this->featureTemplateId,
                'value' => $this->value,
                'periodicityInterval' => $this->getPeriodicityInterval(),
                'periodicityUnit' => $this->getPeriodicityUnit(),
                'grantExpirationInterval' => $this->getGrantExpirationInterval(),
                'grantExpirationUnit' => $this->getGrantExpirationUnit(),
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
        $json['feature_template_id']           = $this->featureTemplateId;
        $json['value']                         = $this->value;
        if (!empty($this->periodicityInterval)) {
            $json['periodicity_interval']      = $this->periodicityInterval['value'];
        }
        if (!empty($this->periodicityUnit)) {
            $json['periodicity_unit']          =
                EntitlementPeriodicityUnit::checkValue(
                    $this->periodicityUnit['value']
                );
        }
        if (!empty($this->grantExpirationInterval)) {
            $json['grant_expiration_interval'] = $this->grantExpirationInterval['value'];
        }
        if (!empty($this->grantExpirationUnit)) {
            $json['grant_expiration_unit']     = GrantExpirationUnit::checkValue($this->grantExpirationUnit['value']);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
