<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PreviewAllocationsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model PreviewAllocationsRequest
 *
 * @see PreviewAllocationsRequest
 */
class PreviewAllocationsRequestBuilder
{
    /**
     * @var PreviewAllocationsRequest
     */
    private $instance;

    private function __construct(PreviewAllocationsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new preview allocations request Builder object.
     */
    public static function init(array $allocations): self
    {
        return new self(new PreviewAllocationsRequest($allocations));
    }

    /**
     * Sets effective proration date field.
     */
    public function effectiveProrationDate(?\DateTime $value): self
    {
        $this->instance->setEffectiveProrationDate($value);
        return $this;
    }

    /**
     * Sets upgrade charge field.
     */
    public function upgradeCharge(?string $value): self
    {
        $this->instance->setUpgradeCharge($value);
        return $this;
    }

    /**
     * Unsets upgrade charge field.
     */
    public function unsetUpgradeCharge(): self
    {
        $this->instance->unsetUpgradeCharge();
        return $this;
    }

    /**
     * Sets downgrade credit field.
     */
    public function downgradeCredit(?string $value): self
    {
        $this->instance->setDowngradeCredit($value);
        return $this;
    }

    /**
     * Unsets downgrade credit field.
     */
    public function unsetDowngradeCredit(): self
    {
        $this->instance->unsetDowngradeCredit();
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new preview allocations request object.
     */
    public function build(): PreviewAllocationsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
