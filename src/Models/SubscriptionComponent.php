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

class SubscriptionComponent implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var string|null
     */
    private $unitName;

    /**
     * @var bool|null
     */
    private $enabled;

    /**
     * @var int|null
     */
    private $unitBalance;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var int|string|null
     */
    private $allocatedQuantity;

    /**
     * @var array
     */
    private $pricingScheme = [];

    /**
     * @var int|null
     */
    private $componentId;

    /**
     * @var array
     */
    private $componentHandle = [];

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var array
     */
    private $upgradeCharge = [];

    /**
     * @var array
     */
    private $downgradeCredit = [];

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var array
     */
    private $pricePointId = [];

    /**
     * @var array
     */
    private $pricePointHandle = [];

    /**
     * @var string|null
     */
    private $pricePointType;

    /**
     * @var array
     */
    private $pricePointName = [];

    /**
     * @var int|null
     */
    private $productFamilyId;

    /**
     * @var string|null
     */
    private $productFamilyHandle;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var array
     */
    private $useSiteExchangeRate = [];

    /**
     * @var array
     */
    private $description = [];

    /**
     * @var bool|null
     */
    private $allowFractionalQuantities;

    /**
     * @var SubscriptionComponentSubscription|null
     */
    private $subscription;

    /**
     * @var bool|null
     */
    private $displayOnHostedPage;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

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
     * Returns Kind.
     * A handle for the component type
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     * A handle for the component type
     *
     * @maps kind
     * @factory \AdvancedBillingLib\Models\ComponentKind::checkValue
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Unit Name.
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }

    /**
     * Sets Unit Name.
     *
     * @maps unit_name
     */
    public function setUnitName(?string $unitName): void
    {
        $this->unitName = $unitName;
    }

    /**
     * Returns Enabled.
     * (for on/off components) indicates if the component is enabled for the subscription
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Sets Enabled.
     * (for on/off components) indicates if the component is enabled for the subscription
     *
     * @maps enabled
     */
    public function setEnabled(?bool $enabled): void
    {
        $this->enabled = $enabled;
    }

    /**
     * Returns Unit Balance.
     */
    public function getUnitBalance(): ?int
    {
        return $this->unitBalance;
    }

    /**
     * Sets Unit Balance.
     *
     * @maps unit_balance
     */
    public function setUnitBalance(?int $unitBalance): void
    {
        $this->unitBalance = $unitBalance;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Allocated Quantity.
     * For Quantity-based components: The current allocation for the component on the given subscription.
     * For On/Off components: Use 1 for on. Use 0 for off.
     *
     * @return int|string|null
     */
    public function getAllocatedQuantity()
    {
        return $this->allocatedQuantity;
    }

    /**
     * Sets Allocated Quantity.
     * For Quantity-based components: The current allocation for the component on the given subscription.
     * For On/Off components: Use 1 for on. Use 0 for off.
     *
     * @maps allocated_quantity
     * @mapsBy anyOf(oneOf(int,string),null)
     *
     * @param int|string|null $allocatedQuantity
     */
    public function setAllocatedQuantity($allocatedQuantity): void
    {
        $this->allocatedQuantity = $allocatedQuantity;
    }

    /**
     * Returns Pricing Scheme.
     */
    public function getPricingScheme(): ?string
    {
        if (count($this->pricingScheme) == 0) {
            return null;
        }
        return $this->pricingScheme['value'];
    }

    /**
     * Sets Pricing Scheme.
     *
     * @maps pricing_scheme
     * @mapsBy anyOf(oneOf(PricingScheme),null)
     * @factory \AdvancedBillingLib\Models\PricingScheme::checkValue PricingScheme
     */
    public function setPricingScheme(?string $pricingScheme): void
    {
        $this->pricingScheme['value'] = $pricingScheme;
    }

    /**
     * Unsets Pricing Scheme.
     */
    public function unsetPricingScheme(): void
    {
        $this->pricingScheme = [];
    }

    /**
     * Returns Component Id.
     */
    public function getComponentId(): ?int
    {
        return $this->componentId;
    }

    /**
     * Sets Component Id.
     *
     * @maps component_id
     */
    public function setComponentId(?int $componentId): void
    {
        $this->componentId = $componentId;
    }

    /**
     * Returns Component Handle.
     */
    public function getComponentHandle(): ?string
    {
        if (count($this->componentHandle) == 0) {
            return null;
        }
        return $this->componentHandle['value'];
    }

    /**
     * Sets Component Handle.
     *
     * @maps component_handle
     */
    public function setComponentHandle(?string $componentHandle): void
    {
        $this->componentHandle['value'] = $componentHandle;
    }

    /**
     * Unsets Component Handle.
     */
    public function unsetComponentHandle(): void
    {
        $this->componentHandle = [];
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
    }

    /**
     * Returns Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function getUpgradeCharge(): ?string
    {
        if (count($this->upgradeCharge) == 0) {
            return null;
        }
        return $this->upgradeCharge['value'];
    }

    /**
     * Sets Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     *
     * @maps upgrade_charge
     * @factory \AdvancedBillingLib\Models\CreditType::checkValue
     */
    public function setUpgradeCharge(?string $upgradeCharge): void
    {
        $this->upgradeCharge['value'] = $upgradeCharge;
    }

    /**
     * Unsets Upgrade Charge.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function unsetUpgradeCharge(): void
    {
        $this->upgradeCharge = [];
    }

    /**
     * Returns Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function getDowngradeCredit(): ?string
    {
        if (count($this->downgradeCredit) == 0) {
            return null;
        }
        return $this->downgradeCredit['value'];
    }

    /**
     * Sets Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     *
     * @maps downgrade_credit
     * @factory \AdvancedBillingLib\Models\CreditType::checkValue
     */
    public function setDowngradeCredit(?string $downgradeCredit): void
    {
        $this->downgradeCredit['value'] = $downgradeCredit;
    }

    /**
     * Unsets Downgrade Credit.
     * The type of credit to be created when upgrading/downgrading. Defaults to the component and then site
     * setting if one is not provided.
     * Available values: `full`, `prorated`, `none`.
     */
    public function unsetDowngradeCredit(): void
    {
        $this->downgradeCredit = [];
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
     * Returns Price Point Handle.
     */
    public function getPricePointHandle(): ?string
    {
        if (count($this->pricePointHandle) == 0) {
            return null;
        }
        return $this->pricePointHandle['value'];
    }

    /**
     * Sets Price Point Handle.
     *
     * @maps price_point_handle
     */
    public function setPricePointHandle(?string $pricePointHandle): void
    {
        $this->pricePointHandle['value'] = $pricePointHandle;
    }

    /**
     * Unsets Price Point Handle.
     */
    public function unsetPricePointHandle(): void
    {
        $this->pricePointHandle = [];
    }

    /**
     * Returns Price Point Type.
     */
    public function getPricePointType(): ?string
    {
        return $this->pricePointType;
    }

    /**
     * Sets Price Point Type.
     *
     * @maps price_point_type
     * @mapsBy anyOf(oneOf(PricePointType),null)
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue PricePointType
     */
    public function setPricePointType(?string $pricePointType): void
    {
        $this->pricePointType = $pricePointType;
    }

    /**
     * Returns Price Point Name.
     */
    public function getPricePointName(): ?string
    {
        if (count($this->pricePointName) == 0) {
            return null;
        }
        return $this->pricePointName['value'];
    }

    /**
     * Sets Price Point Name.
     *
     * @maps price_point_name
     */
    public function setPricePointName(?string $pricePointName): void
    {
        $this->pricePointName['value'] = $pricePointName;
    }

    /**
     * Unsets Price Point Name.
     */
    public function unsetPricePointName(): void
    {
        $this->pricePointName = [];
    }

    /**
     * Returns Product Family Id.
     */
    public function getProductFamilyId(): ?int
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?int $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Product Family Handle.
     */
    public function getProductFamilyHandle(): ?string
    {
        return $this->productFamilyHandle;
    }

    /**
     * Sets Product Family Handle.
     *
     * @maps product_family_handle
     */
    public function setProductFamilyHandle(?string $productFamilyHandle): void
    {
        $this->productFamilyHandle = $productFamilyHandle;
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
     * Returns Use Site Exchange Rate.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        if (count($this->useSiteExchangeRate) == 0) {
            return null;
        }
        return $this->useSiteExchangeRate['value'];
    }

    /**
     * Sets Use Site Exchange Rate.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate['value'] = $useSiteExchangeRate;
    }

    /**
     * Unsets Use Site Exchange Rate.
     */
    public function unsetUseSiteExchangeRate(): void
    {
        $this->useSiteExchangeRate = [];
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
     * Returns Allow Fractional Quantities.
     */
    public function getAllowFractionalQuantities(): ?bool
    {
        return $this->allowFractionalQuantities;
    }

    /**
     * Sets Allow Fractional Quantities.
     *
     * @maps allow_fractional_quantities
     */
    public function setAllowFractionalQuantities(?bool $allowFractionalQuantities): void
    {
        $this->allowFractionalQuantities = $allowFractionalQuantities;
    }

    /**
     * Returns Subscription.
     * An optional object, will be returned if provided `include=subscription` query param.
     */
    public function getSubscription(): ?SubscriptionComponentSubscription
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     * An optional object, will be returned if provided `include=subscription` query param.
     *
     * @maps subscription
     */
    public function setSubscription(?SubscriptionComponentSubscription $subscription): void
    {
        $this->subscription = $subscription;
    }

    /**
     * Returns Display on Hosted Page.
     */
    public function getDisplayOnHostedPage(): ?bool
    {
        return $this->displayOnHostedPage;
    }

    /**
     * Sets Display on Hosted Page.
     *
     * @maps display_on_hosted_page
     */
    public function setDisplayOnHostedPage(?bool $displayOnHostedPage): void
    {
        $this->displayOnHostedPage = $displayOnHostedPage;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of '30' coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of '30' coupled with an interval_unit of day would mean
     * this component price point would renew every 30 days. This property is only available for sites with
     * Multifrequency enabled.
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this component price point, either month or day. This
     * property is only available for sites with Multifrequency enabled.
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
            $json['id']                          = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                        = $this->name;
        }
        if (isset($this->kind)) {
            $json['kind']                        = ComponentKind::checkValue($this->kind);
        }
        if (isset($this->unitName)) {
            $json['unit_name']                   = $this->unitName;
        }
        if (isset($this->enabled)) {
            $json['enabled']                     = $this->enabled;
        }
        if (isset($this->unitBalance)) {
            $json['unit_balance']                = $this->unitBalance;
        }
        if (isset($this->currency)) {
            $json['currency']                    = $this->currency;
        }
        if (isset($this->allocatedQuantity)) {
            $json['allocated_quantity']          =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->allocatedQuantity,
                    'anyOf(oneOf(int,string),null)'
                );
        }
        if (!empty($this->pricingScheme)) {
            $json['pricing_scheme']              =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricingScheme['value'],
                    'anyOf(oneOf(PricingScheme),null)',
                    [
                        '\AdvancedBillingLib\Models\PricingScheme::checkValue PricingScheme'
                    ]
                );
        }
        if (isset($this->componentId)) {
            $json['component_id']                = $this->componentId;
        }
        if (!empty($this->componentHandle)) {
            $json['component_handle']            = $this->componentHandle['value'];
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']             = $this->subscriptionId;
        }
        if (isset($this->recurring)) {
            $json['recurring']                   = $this->recurring;
        }
        if (!empty($this->upgradeCharge)) {
            $json['upgrade_charge']              = CreditType::checkValue($this->upgradeCharge['value']);
        }
        if (!empty($this->downgradeCredit)) {
            $json['downgrade_credit']            = CreditType::checkValue($this->downgradeCredit['value']);
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                 = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (!empty($this->pricePointId)) {
            $json['price_point_id']              = $this->pricePointId['value'];
        }
        if (!empty($this->pricePointHandle)) {
            $json['price_point_handle']          = $this->pricePointHandle['value'];
        }
        if (isset($this->pricePointType)) {
            $json['price_point_type']            =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->pricePointType,
                    'anyOf(oneOf(PricePointType),null)',
                    [
                        '\AdvancedBillingLib\Models\PricePointType::checkValue PricePointType'
                    ]
                );
        }
        if (!empty($this->pricePointName)) {
            $json['price_point_name']            = $this->pricePointName['value'];
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']           = $this->productFamilyId;
        }
        if (isset($this->productFamilyHandle)) {
            $json['product_family_handle']       = $this->productFamilyHandle;
        }
        if (isset($this->createdAt)) {
            $json['created_at']                  = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                  = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (!empty($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']      = $this->useSiteExchangeRate['value'];
        }
        if (!empty($this->description)) {
            $json['description']                 = $this->description['value'];
        }
        if (isset($this->allowFractionalQuantities)) {
            $json['allow_fractional_quantities'] = $this->allowFractionalQuantities;
        }
        if (isset($this->subscription)) {
            $json['subscription']                = $this->subscription;
        }
        if (isset($this->displayOnHostedPage)) {
            $json['display_on_hosted_page']      = $this->displayOnHostedPage;
        }
        if (isset($this->interval)) {
            $json['interval']                    = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']               = IntervalUnit::checkValue($this->intervalUnit);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
