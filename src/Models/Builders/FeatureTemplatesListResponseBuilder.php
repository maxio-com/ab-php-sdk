<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\FeatureTemplate;
use AdvancedBillingLib\Models\FeatureTemplatesListResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model FeatureTemplatesListResponse
 *
 * @see FeatureTemplatesListResponse
 */
class FeatureTemplatesListResponseBuilder
{
    /**
     * @var FeatureTemplatesListResponse
     */
    private $instance;

    private function __construct(FeatureTemplatesListResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Feature Templates List Response Builder object.
     *
     * @param FeatureTemplate[] $items
     * @param int $totalCount
     * @param int $archivedCount
     */
    public static function init(array $items, int $totalCount, int $archivedCount): self
    {
        return new self(new FeatureTemplatesListResponse($items, $totalCount, $archivedCount));
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
     * Initializes a new Feature Templates List Response object.
     */
    public function build(): FeatureTemplatesListResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
