<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

/**
 * A feature template attached to a specific product or component (or one of their price points), with
 * a concrete value. When a subscriber signs up for or is assigned this product/component, the feature
 * catalog item is provisioned as an entitlement on their subscription.
 */
class FeatureCatalogItem implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $featureTemplateId;

    /**
     * @var string|null
     */
    private $featureKey;

    /**
     * @var string|null
     */
    private $featureName;

    /**
     * @var string|null
     */
    private $featureKind;

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
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Feature Template Id.
     * The id of the feature template this item was created from.
     */
    public function getFeatureTemplateId(): ?int
    {
        return $this->featureTemplateId;
    }

    /**
     * Sets Feature Template Id.
     * The id of the feature template this item was created from.
     *
     * @maps feature_template_id
     */
    public function setFeatureTemplateId(?int $featureTemplateId): void
    {
        $this->featureTemplateId = $featureTemplateId;
    }

    /**
     * Returns Feature Key.
     * The `key` of the parent feature template.
     */
    public function getFeatureKey(): ?string
    {
        return $this->featureKey;
    }

    /**
     * Sets Feature Key.
     * The `key` of the parent feature template.
     *
     * @maps feature_key
     */
    public function setFeatureKey(?string $featureKey): void
    {
        $this->featureKey = $featureKey;
    }

    /**
     * Returns Feature Name.
     * The `name` of the parent feature template.
     */
    public function getFeatureName(): ?string
    {
        return $this->featureName;
    }

    /**
     * Sets Feature Name.
     * The `name` of the parent feature template.
     *
     * @maps feature_name
     */
    public function setFeatureName(?string $featureName): void
    {
        $this->featureName = $featureName;
    }

    /**
     * Returns Feature Kind.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     */
    public function getFeatureKind(): ?string
    {
        return $this->featureKind;
    }

    /**
     * Sets Feature Kind.
     * The behavior of a feature:
     * - `access_right`: a boolean entitlement. A subscriber either has access or does not.
     * - `usage_limit`: a quantified allowance measured over a recurring period (for example, "10,000 API
     * calls per month").
     * - `service_right`: a free-form value (text, boolean, or number) that isn't a simple access flag or a
     * metered limit.
     *
     * @maps feature_kind
     * @factory \AdvancedBillingLib\Models\FeatureKind::checkValue
     */
    public function setFeatureKind(?string $featureKind): void
    {
        $this->featureKind = $featureKind;
    }

    /**
     * Returns Value.
     * The value granted by this feature catalog item. Interpreted according to `feature_kind`:
     * `"true"`/`"false"` for `access_right`, a numeric string for `usage_limit`, or any string for
     * `service_right` (shaped by the feature template's `value_type`).
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * The value granted by this feature catalog item. Interpreted according to `feature_kind`:
     * `"true"`/`"false"` for `access_right`, a numeric string for `usage_limit`, or any string for
     * `service_right` (shaped by the feature template's `value_type`).
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Periodicity Interval.
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
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
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
     *
     * @maps periodicity_interval
     */
    public function setPeriodicityInterval(?int $periodicityInterval): void
    {
        $this->periodicityInterval['value'] = $periodicityInterval;
    }

    /**
     * Unsets Periodicity Interval.
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
     */
    public function unsetPeriodicityInterval(): void
    {
        $this->periodicityInterval = [];
    }

    /**
     * Returns Periodicity Unit.
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
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
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
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
     * Set when `feature_kind` is `usage_limit`; `null` otherwise.
     */
    public function unsetPeriodicityUnit(): void
    {
        $this->periodicityUnit = [];
    }

    /**
     * Returns Price Point Type.
     * `null` when this feature catalog item applies to every price point of its owning product/component.
     * Set when the feature catalog item is an override for one specific price point.
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
     * `null` when this feature catalog item applies to every price point of its owning product/component.
     * Set when the feature catalog item is an override for one specific price point.
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
     * `null` when this feature catalog item applies to every price point of its owning product/component.
     * Set when the feature catalog item is an override for one specific price point.
     */
    public function unsetPricePointType(): void
    {
        $this->pricePointType = [];
    }

    /**
     * Returns Price Point Id.
     * Set together with `price_point_type` for price-point-specific overrides.
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
     * Set together with `price_point_type` for price-point-specific overrides.
     *
     * @maps price_point_id
     */
    public function setPricePointId(?int $pricePointId): void
    {
        $this->pricePointId['value'] = $pricePointId;
    }

    /**
     * Unsets Price Point Id.
     * Set together with `price_point_type` for price-point-specific overrides.
     */
    public function unsetPricePointId(): void
    {
        $this->pricePointId = [];
    }

    /**
     * Returns Archived At.
     */
    public function getArchivedAt(): ?\DateTime
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     *
     * @maps archived_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setArchivedAt(?\DateTime $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Converts the FeatureCatalogItem object to a human-readable string representation.
     *
     * @return string The string representation of the FeatureCatalogItem object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeatureCatalogItem',
            [
                'id' => $this->id,
                'featureTemplateId' => $this->featureTemplateId,
                'featureKey' => $this->featureKey,
                'featureName' => $this->featureName,
                'featureKind' => $this->featureKind,
                'value' => $this->value,
                'periodicityInterval' => $this->getPeriodicityInterval(),
                'periodicityUnit' => $this->getPeriodicityUnit(),
                'pricePointType' => $this->getPricePointType(),
                'pricePointId' => $this->getPricePointId(),
                'archivedAt' => $this->getArchivedAt(),
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
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
        if (isset($this->id)) {
            $json['id']                   = $this->id;
        }
        if (isset($this->featureTemplateId)) {
            $json['feature_template_id']  = $this->featureTemplateId;
        }
        if (isset($this->featureKey)) {
            $json['feature_key']          = $this->featureKey;
        }
        if (isset($this->featureName)) {
            $json['feature_name']         = $this->featureName;
        }
        if (isset($this->featureKind)) {
            $json['feature_kind']         = FeatureKind::checkValue($this->featureKind);
        }
        if (isset($this->value)) {
            $json['value']                = $this->value;
        }
        if (!empty($this->periodicityInterval)) {
            $json['periodicity_interval'] = $this->periodicityInterval['value'];
        }
        if (!empty($this->periodicityUnit)) {
            $json['periodicity_unit']     = EntitlementPeriodicityUnit::checkValue($this->periodicityUnit['value']);
        }
        if (!empty($this->pricePointType)) {
            $json['price_point_type']     = FeatureOwnerPricePointType::checkValue($this->pricePointType['value']);
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']       = $this->pricePointId['value'];
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']          = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->createdAt)) {
            $json['created_at']           = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']           = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
