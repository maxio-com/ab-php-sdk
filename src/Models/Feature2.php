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

class Feature2 implements \JsonSerializable
{
    /**
     * @var int
     */
    private $featureTemplateId;

    /**
     * @var string|null
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
    private $pricePointType = [];

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var bool|null
     */
    private $propagateToSubscriptions = false;

    /**
     * @param int $featureTemplateId
     */
    public function __construct(int $featureTemplateId)
    {
        $this->featureTemplateId = $featureTemplateId;
    }

    /**
     * Returns Feature Template Id.
     * The id of the feature template to attach.
     */
    public function getFeatureTemplateId(): int
    {
        return $this->featureTemplateId;
    }

    /**
     * Sets Feature Template Id.
     * The id of the feature template to attach.
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
     * The value granted. Defaults to the feature template's `default_value`; required when the template
     * has none.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The value granted. Defaults to the feature template's `default_value`; required when the template
     * has none.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Periodicity Interval.
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
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
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
     *
     * @maps periodicity_interval
     */
    public function setPeriodicityInterval(?int $periodicityInterval): void
    {
        $this->periodicityInterval['value'] = $periodicityInterval;
    }

    /**
     * Unsets Periodicity Interval.
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
     */
    public function unsetPeriodicityInterval(): void
    {
        $this->periodicityInterval = [];
    }

    /**
     * Returns Periodicity Unit.
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
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
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
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
     * Required for `usage_limit` features, unless the feature template has a default periodicity, which is
     * used when omitted. Must be omitted for other kinds.
     */
    public function unsetPeriodicityUnit(): void
    {
        $this->periodicityUnit = [];
    }

    /**
     * Returns Price Point Type.
     * Set together with `price_point_id` to scope the feature catalog item to a single price point. Omit
     * both to create a product/component-level item, which is a template: it is copied onto price points
     * created afterwards (except bulk-created ones; Clone Component Price Point applies only the items
     * sent with it), but not added to price points that already exist or to their subscribers.
     */
    public function getPricePointType(): ?string
    {
        if (count($this->pricePointType) == 0) {
            return null;
        }
        return $this->pricePointType['value'];
    }

    /**
     * Sets Price Point Type.
     * Set together with `price_point_id` to scope the feature catalog item to a single price point. Omit
     * both to create a product/component-level item, which is a template: it is copied onto price points
     * created afterwards (except bulk-created ones; Clone Component Price Point applies only the items
     * sent with it), but not added to price points that already exist or to their subscribers.
     *
     * @maps price_point_type
     * @factory \AdvancedBillingLib\Models\FeatureOwnerPricePointType::checkValue
     */
    public function setPricePointType(?string $pricePointType): void
    {
        $this->pricePointType['value'] = $pricePointType;
    }

    /**
     * Unsets Price Point Type.
     * Set together with `price_point_id` to scope the feature catalog item to a single price point. Omit
     * both to create a product/component-level item, which is a template: it is copied onto price points
     * created afterwards (except bulk-created ones; Clone Component Price Point applies only the items
     * sent with it), but not added to price points that already exist or to their subscribers.
     */
    public function unsetPricePointType(): void
    {
        $this->pricePointType = [];
    }

    /**
     * Returns Price Point Id.
     */
    public function getPricePointId(): ?int
    {
        if (count($this->pricePointId) == 0) {
            return null;
        }
        return $this->pricePointId['value'];
    }

    /**
     * Sets Price Point Id.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Propagate to Subscriptions.
     * Applies to price-point-scoped items only. When `true`, existing subscriptions on that price point
     * are granted an entitlement for this feature by a background job shortly after, instead of at their
     * next subscription change. When `false` (default) and the price point already has subscribers, the
     * feature is created on a clone of the price point instead, and existing subscribers are unaffected.
     * On a product/component-level item it has no effect, except when the call restores that item's
     * archived price-point copies (creating an item again for a feature template whose item was archived):
     * then `true` grants the feature to those price points' subscribers, and without it the call returns
     * `422` if any of them lack the feature.
     */
    public function getPropagateToSubscriptions(): ?bool
    {
        return $this->propagateToSubscriptions;
    }

    /**
     * Sets Propagate to Subscriptions.
     * Applies to price-point-scoped items only. When `true`, existing subscriptions on that price point
     * are granted an entitlement for this feature by a background job shortly after, instead of at their
     * next subscription change. When `false` (default) and the price point already has subscribers, the
     * feature is created on a clone of the price point instead, and existing subscribers are unaffected.
     * On a product/component-level item it has no effect, except when the call restores that item's
     * archived price-point copies (creating an item again for a feature template whose item was archived):
     * then `true` grants the feature to those price points' subscribers, and without it the call returns
     * `422` if any of them lack the feature.
     *
     * @maps propagate_to_subscriptions
     */
    public function setPropagateToSubscriptions(?bool $propagateToSubscriptions): void
    {
        $this->propagateToSubscriptions = $propagateToSubscriptions;
    }

    /**
     * Converts the Feature2 object to a human-readable string representation.
     *
     * @return string The string representation of the Feature2 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Feature2',
            [
                'featureTemplateId' => $this->featureTemplateId,
                'value' => $this->value,
                'periodicityInterval' => $this->getPeriodicityInterval(),
                'periodicityUnit' => $this->getPeriodicityUnit(),
                'pricePointType' => $this->getPricePointType(),
                'pricePointId' => $this->getPricePointId(),
                'propagateToSubscriptions' => $this->propagateToSubscriptions,
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
        $json['feature_template_id']            = $this->featureTemplateId;
        if (isset($this->value)) {
            $json['value']                      = $this->value;
        }
        if (!empty($this->periodicityInterval)) {
            $json['periodicity_interval']       = $this->periodicityInterval['value'];
        }
        if (!empty($this->periodicityUnit)) {
            $json['periodicity_unit']           =
                EntitlementPeriodicityUnit::checkValue(
                    $this->periodicityUnit['value']
                );
        }
        if (!empty($this->pricePointType)) {
            $json['price_point_type']           =
                FeatureOwnerPricePointType::checkValue(
                    $this->pricePointType['value']
                );
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']             = $this->pricePointId['value'];
        }
        if (isset($this->propagateToSubscriptions)) {
            $json['propagate_to_subscriptions'] = $this->propagateToSubscriptions;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
