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
 * A feature that can be granted to subscribers, defined once at the site level and then attached to
 * products or components.
 */
class FeatureTemplate implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $key;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var string|null
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
     * @var int|null
     */
    private $productsCount;

    /**
     * @var int|null
     */
    private $plansCount;

    /**
     * Returns Id.
     * The Advanced Billing id of the feature template.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Advanced Billing id of the feature template.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Key.
     * A unique, lowercase, underscore-separated identifier for the feature. Immutable once set.
     */
    public function getKey(): ?string
    {
        return $this->key;
    }

    /**
     * Sets Key.
     * A unique, lowercase, underscore-separated identifier for the feature. Immutable once set.
     *
     * @maps key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * Returns Name.
     * The display name of the feature.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The display name of the feature.
     *
     * @maps name
     */
    public function setName(?string $name): void
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
    public function getKind(): ?string
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
     * @maps kind
     * @factory \AdvancedBillingLib\Models\FeatureKind::checkValue
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Unit.
     * The unit the feature is measured in (for example, `requests` or `GB`). Required when `kind` is
     * `usage_limit`.
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
     * The unit the feature is measured in (for example, `requests` or `GB`). Required when `kind` is
     * `usage_limit`.
     *
     * @maps unit
     */
    public function setUnit(?string $unit): void
    {
        $this->unit['value'] = $unit;
    }

    /**
     * Unsets Unit.
     * The unit the feature is measured in (for example, `requests` or `GB`). Required when `kind` is
     * `usage_limit`.
     */
    public function unsetUnit(): void
    {
        $this->unit = [];
    }

    /**
     * Returns Value Type.
     * The data type of a feature's value. For `access_right` features this is always `boolean`, and for
     * `usage_limit` features this is always `numeric`. For `service_right` features, you choose the value
     * type explicitly.
     */
    public function getValueType(): ?string
    {
        return $this->valueType;
    }

    /**
     * Sets Value Type.
     * The data type of a feature's value. For `access_right` features this is always `boolean`, and for
     * `usage_limit` features this is always `numeric`. For `service_right` features, you choose the value
     * type explicitly.
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
     * A default value used to pre-populate new feature catalog items created from this template.
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
     * A default value used to pre-populate new feature catalog items created from this template.
     *
     * @maps default_value
     */
    public function setDefaultValue(?string $defaultValue): void
    {
        $this->defaultValue['value'] = $defaultValue;
    }

    /**
     * Unsets Default Value.
     * A default value used to pre-populate new feature catalog items created from this template.
     */
    public function unsetDefaultValue(): void
    {
        $this->defaultValue = [];
    }

    /**
     * Returns Default Periodicity Interval.
     * For `usage_limit` features, the default periodicity interval used to pre-populate new feature
     * catalog items. Always `null` for other kinds.
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
     * For `usage_limit` features, the default periodicity interval used to pre-populate new feature
     * catalog items. Always `null` for other kinds.
     *
     * @maps default_periodicity_interval
     */
    public function setDefaultPeriodicityInterval(?int $defaultPeriodicityInterval): void
    {
        $this->defaultPeriodicityInterval['value'] = $defaultPeriodicityInterval;
    }

    /**
     * Unsets Default Periodicity Interval.
     * For `usage_limit` features, the default periodicity interval used to pre-populate new feature
     * catalog items. Always `null` for other kinds.
     */
    public function unsetDefaultPeriodicityInterval(): void
    {
        $this->defaultPeriodicityInterval = [];
    }

    /**
     * Returns Default Periodicity Unit.
     * For `usage_limit` features, the default periodicity unit used to pre-populate new feature catalog
     * items. Always `null` for other kinds.
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
     * For `usage_limit` features, the default periodicity unit used to pre-populate new feature catalog
     * items. Always `null` for other kinds.
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
     * For `usage_limit` features, the default periodicity unit used to pre-populate new feature catalog
     * items. Always `null` for other kinds.
     */
    public function unsetDefaultPeriodicityUnit(): void
    {
        $this->defaultPeriodicityUnit = [];
    }

    /**
     * Returns Archived At.
     * The date and time the feature template was archived, or `null` if it is active.
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
     * The date and time the feature template was archived, or `null` if it is active.
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
     * The date and time the feature template was archived, or `null` if it is active.
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
     * Returns Products Count.
     * The number of **components** this feature template is currently attached to via an active feature
     * catalog item. Despite the name, this counts components, not products. In the Advanced Billing UI,
     * components are labeled "Products."
     */
    public function getProductsCount(): ?int
    {
        return $this->productsCount;
    }

    /**
     * Sets Products Count.
     * The number of **components** this feature template is currently attached to via an active feature
     * catalog item. Despite the name, this counts components, not products. In the Advanced Billing UI,
     * components are labeled "Products."
     *
     * @maps products_count
     */
    public function setProductsCount(?int $productsCount): void
    {
        $this->productsCount = $productsCount;
    }

    /**
     * Returns Plans Count.
     * The number of **products** this feature template is currently attached to via an active feature
     * catalog item. Despite the name, this counts products, not plans. In the Advanced Billing UI,
     * products are labeled "Plans."
     */
    public function getPlansCount(): ?int
    {
        return $this->plansCount;
    }

    /**
     * Sets Plans Count.
     * The number of **products** this feature template is currently attached to via an active feature
     * catalog item. Despite the name, this counts products, not plans. In the Advanced Billing UI,
     * products are labeled "Plans."
     *
     * @maps plans_count
     */
    public function setPlansCount(?int $plansCount): void
    {
        $this->plansCount = $plansCount;
    }

    /**
     * Converts the FeatureTemplate object to a human-readable string representation.
     *
     * @return string The string representation of the FeatureTemplate object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'FeatureTemplate',
            [
                'id' => $this->id,
                'key' => $this->key,
                'name' => $this->name,
                'description' => $this->getDescription(),
                'kind' => $this->kind,
                'unit' => $this->getUnit(),
                'valueType' => $this->valueType,
                'defaultValue' => $this->getDefaultValue(),
                'defaultPeriodicityInterval' => $this->getDefaultPeriodicityInterval(),
                'defaultPeriodicityUnit' => $this->getDefaultPeriodicityUnit(),
                'archivedAt' => $this->getArchivedAt(),
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
                'productsCount' => $this->productsCount,
                'plansCount' => $this->plansCount,
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
            $json['id']                           = $this->id;
        }
        if (isset($this->key)) {
            $json['key']                          = $this->key;
        }
        if (isset($this->name)) {
            $json['name']                         = $this->name;
        }
        if (!empty($this->description)) {
            $json['description']                  = $this->description['value'];
        }
        if (isset($this->kind)) {
            $json['kind']                         = FeatureKind::checkValue($this->kind);
        }
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
        if (!empty($this->archivedAt)) {
            $json['archived_at']                  = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                   = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                   = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->productsCount)) {
            $json['products_count']               = $this->productsCount;
        }
        if (isset($this->plansCount)) {
            $json['plans_count']                  = $this->plansCount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
