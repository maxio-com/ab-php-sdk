<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletProductUsageTemplate;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletProductUsageTemplate
 *
 * @see WalletProductUsageTemplate
 */
class WalletProductUsageTemplateBuilder
{
    /**
     * @var WalletProductUsageTemplate
     */
    private $instance;

    private function __construct(WalletProductUsageTemplate $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Product Usage Template Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletProductUsageTemplate());
    }

    /**
     * Sets plan name field.
     *
     * @param string|null $value
     */
    public function planName(?string $value): self
    {
        $this->instance->setPlanName($value);
        return $this;
    }

    /**
     * Unsets plan name field.
     */
    public function unsetPlanName(): self
    {
        $this->instance->unsetPlanName();
        return $this;
    }

    /**
     * Sets wallet template name field.
     *
     * @param string|null $value
     */
    public function walletTemplateName(?string $value): self
    {
        $this->instance->setWalletTemplateName($value);
        return $this;
    }

    /**
     * Unsets wallet template name field.
     */
    public function unsetWalletTemplateName(): self
    {
        $this->instance->unsetWalletTemplateName();
        return $this;
    }

    /**
     * Sets unit name field.
     *
     * @param string|null $value
     */
    public function unitName(?string $value): self
    {
        $this->instance->setUnitName($value);
        return $this;
    }

    /**
     * Sets purchase mechanism field.
     *
     * @param string|null $value
     */
    public function purchaseMechanism(?string $value): self
    {
        $this->instance->setPurchaseMechanism($value);
        return $this;
    }

    /**
     * Unsets purchase mechanism field.
     */
    public function unsetPurchaseMechanism(): self
    {
        $this->instance->unsetPurchaseMechanism();
        return $this;
    }

    /**
     * Sets price point name field.
     *
     * @param string|null $value
     */
    public function pricePointName(?string $value): self
    {
        $this->instance->setPricePointName($value);
        return $this;
    }

    /**
     * Unsets price point name field.
     */
    public function unsetPricePointName(): self
    {
        $this->instance->unsetPricePointName();
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets active field.
     *
     * @param bool|null $value
     */
    public function active(?bool $value): self
    {
        $this->instance->setActive($value);
        return $this;
    }

    /**
     * Sets feature template id field.
     *
     * @param int|null $value
     */
    public function featureTemplateId(?int $value): self
    {
        $this->instance->setFeatureTemplateId($value);
        return $this;
    }

    /**
     * Unsets feature template id field.
     */
    public function unsetFeatureTemplateId(): self
    {
        $this->instance->unsetFeatureTemplateId();
        return $this;
    }

    /**
     * Sets feature template name field.
     *
     * @param string|null $value
     */
    public function featureTemplateName(?string $value): self
    {
        $this->instance->setFeatureTemplateName($value);
        return $this;
    }

    /**
     * Unsets feature template name field.
     */
    public function unsetFeatureTemplateName(): self
    {
        $this->instance->unsetFeatureTemplateName();
        return $this;
    }

    /**
     * Sets price point override field.
     *
     * @param bool|null $value
     */
    public function pricePointOverride(?bool $value): self
    {
        $this->instance->setPricePointOverride($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Wallet Product Usage Template object.
     */
    public function build(): WalletProductUsageTemplate
    {
        return CoreHelper::clone($this->instance);
    }
}
