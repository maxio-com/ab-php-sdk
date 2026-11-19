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
 * One wallet template billing through this Wallet Product, joined to the Feature and plan/component
 * that assigns it, when there is one.
 */
class WalletProductUsageTemplate implements \JsonSerializable
{
    /**
     * @var array
     */
    private $planName = [];

    /**
     * @var array
     */
    private $walletTemplateName = [];

    /**
     * @var string|null
     */
    private $unitName;

    /**
     * @var array
     */
    private $purchaseMechanism = [];

    /**
     * @var array
     */
    private $pricePointName = [];

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var bool|null
     */
    private $active;

    /**
     * @var array
     */
    private $featureTemplateId = [];

    /**
     * @var array
     */
    private $featureTemplateName = [];

    /**
     * @var bool|null
     */
    private $pricePointOverride;

    /**
     * Returns Plan Name.
     * The name of the product or component the Feature is assigned to. `null` when the wallet template has
     * no assigning Feature.
     */
    public function getPlanName(): ?string
    {
        if (count($this->planName) == 0) {
            return null;
        }
        return $this->planName['value'];
    }

    /**
     * Sets Plan Name.
     * The name of the product or component the Feature is assigned to. `null` when the wallet template has
     * no assigning Feature.
     *
     * @maps plan_name
     */
    public function setPlanName(?string $planName): void
    {
        $this->planName['value'] = $planName;
    }

    /**
     * Unsets Plan Name.
     * The name of the product or component the Feature is assigned to. `null` when the wallet template has
     * no assigning Feature.
     */
    public function unsetPlanName(): void
    {
        $this->planName = [];
    }

    /**
     * Returns Wallet Template Name.
     * The label set in `wallet_behavior.name` on the Feature, or the standalone wallet's own `name`.
     */
    public function getWalletTemplateName(): ?string
    {
        if (count($this->walletTemplateName) == 0) {
            return null;
        }
        return $this->walletTemplateName['value'];
    }

    /**
     * Sets Wallet Template Name.
     * The label set in `wallet_behavior.name` on the Feature, or the standalone wallet's own `name`.
     *
     * @maps wallet_template_name
     */
    public function setWalletTemplateName(?string $walletTemplateName): void
    {
        $this->walletTemplateName['value'] = $walletTemplateName;
    }

    /**
     * Unsets Wallet Template Name.
     * The label set in `wallet_behavior.name` on the Feature, or the standalone wallet's own `name`.
     */
    public function unsetWalletTemplateName(): void
    {
        $this->walletTemplateName = [];
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
     * Returns Purchase Mechanism.
     * A best-effort label for how this wallet is expected to be replenished. Currently reports `"Overage"`
     * when the wallet template allows a negative balance, and `null` otherwise; there's no persisted field
     * yet distinguishing, for example, an intended "Auto top-up" from "Purchase more" setup. Treat this as
     * informational, not a stable enum.
     */
    public function getPurchaseMechanism(): ?string
    {
        if (count($this->purchaseMechanism) == 0) {
            return null;
        }
        return $this->purchaseMechanism['value'];
    }

    /**
     * Sets Purchase Mechanism.
     * A best-effort label for how this wallet is expected to be replenished. Currently reports `"Overage"`
     * when the wallet template allows a negative balance, and `null` otherwise; there's no persisted field
     * yet distinguishing, for example, an intended "Auto top-up" from "Purchase more" setup. Treat this as
     * informational, not a stable enum.
     *
     * @maps purchase_mechanism
     */
    public function setPurchaseMechanism(?string $purchaseMechanism): void
    {
        $this->purchaseMechanism['value'] = $purchaseMechanism;
    }

    /**
     * Unsets Purchase Mechanism.
     * A best-effort label for how this wallet is expected to be replenished. Currently reports `"Overage"`
     * when the wallet template allows a negative balance, and `null` otherwise; there's no persisted field
     * yet distinguishing, for example, an intended "Auto top-up" from "Purchase more" setup. Treat this as
     * informational, not a stable enum.
     */
    public function unsetPurchaseMechanism(): void
    {
        $this->purchaseMechanism = [];
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
     * Returns Active.
     * `false` when the assigning Feature is archived.
     */
    public function getActive(): ?bool
    {
        return $this->active;
    }

    /**
     * Sets Active.
     * `false` when the assigning Feature is archived.
     *
     * @maps active
     */
    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    /**
     * Returns Feature Template Id.
     */
    public function getFeatureTemplateId(): ?int
    {
        if (count($this->featureTemplateId) == 0) {
            return null;
        }
        return $this->featureTemplateId['value'];
    }

    /**
     * Sets Feature Template Id.
     *
     * @maps feature_template_id
     */
    public function setFeatureTemplateId(?int $featureTemplateId): void
    {
        $this->featureTemplateId['value'] = $featureTemplateId;
    }

    /**
     * Unsets Feature Template Id.
     */
    public function unsetFeatureTemplateId(): void
    {
        $this->featureTemplateId = [];
    }

    /**
     * Returns Feature Template Name.
     */
    public function getFeatureTemplateName(): ?string
    {
        if (count($this->featureTemplateName) == 0) {
            return null;
        }
        return $this->featureTemplateName['value'];
    }

    /**
     * Sets Feature Template Name.
     *
     * @maps feature_template_name
     */
    public function setFeatureTemplateName(?string $featureTemplateName): void
    {
        $this->featureTemplateName['value'] = $featureTemplateName;
    }

    /**
     * Unsets Feature Template Name.
     */
    public function unsetFeatureTemplateName(): void
    {
        $this->featureTemplateName = [];
    }

    /**
     * Returns Price Point Override.
     * `true` when this wallet template is priced at a price point other than the Wallet Product's default.
     */
    public function getPricePointOverride(): ?bool
    {
        return $this->pricePointOverride;
    }

    /**
     * Sets Price Point Override.
     * `true` when this wallet template is priced at a price point other than the Wallet Product's default.
     *
     * @maps price_point_override
     */
    public function setPricePointOverride(?bool $pricePointOverride): void
    {
        $this->pricePointOverride = $pricePointOverride;
    }

    /**
     * Converts the WalletProductUsageTemplate object to a human-readable string representation.
     *
     * @return string The string representation of the WalletProductUsageTemplate object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'WalletProductUsageTemplate',
            [
                'planName' => $this->getPlanName(),
                'walletTemplateName' => $this->getWalletTemplateName(),
                'unitName' => $this->unitName,
                'purchaseMechanism' => $this->getPurchaseMechanism(),
                'pricePointName' => $this->getPricePointName(),
                'currency' => $this->currency,
                'active' => $this->active,
                'featureTemplateId' => $this->getFeatureTemplateId(),
                'featureTemplateName' => $this->getFeatureTemplateName(),
                'pricePointOverride' => $this->pricePointOverride,
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
        if (!empty($this->planName)) {
            $json['plan_name']             = $this->planName['value'];
        }
        if (!empty($this->walletTemplateName)) {
            $json['wallet_template_name']  = $this->walletTemplateName['value'];
        }
        if (isset($this->unitName)) {
            $json['unit_name']             = $this->unitName;
        }
        if (!empty($this->purchaseMechanism)) {
            $json['purchase_mechanism']    = $this->purchaseMechanism['value'];
        }
        if (!empty($this->pricePointName)) {
            $json['price_point_name']      = $this->pricePointName['value'];
        }
        if (isset($this->currency)) {
            $json['currency']              = $this->currency;
        }
        if (isset($this->active)) {
            $json['active']                = $this->active;
        }
        if (!empty($this->featureTemplateId)) {
            $json['feature_template_id']   = $this->featureTemplateId['value'];
        }
        if (!empty($this->featureTemplateName)) {
            $json['feature_template_name'] = $this->featureTemplateName['value'];
        }
        if (isset($this->pricePointOverride)) {
            $json['price_point_override']  = $this->pricePointOverride;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
