<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListSubscriptionGroupsMeta;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListSubscriptionGroupsMeta
 *
 * @see ListSubscriptionGroupsMeta
 */
class ListSubscriptionGroupsMetaBuilder
{
    /**
     * @var ListSubscriptionGroupsMeta
     */
    private $instance;

    private function __construct(ListSubscriptionGroupsMeta $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list subscription groups meta Builder object.
     */
    public static function init(): self
    {
        return new self(new ListSubscriptionGroupsMeta());
    }

    /**
     * Sets current page field.
     */
    public function currentPage(?int $value): self
    {
        $this->instance->setCurrentPage($value);
        return $this;
    }

    /**
     * Sets total count field.
     */
    public function totalCount(?int $value): self
    {
        $this->instance->setTotalCount($value);
        return $this;
    }

    /**
     * Initializes a new list subscription groups meta object.
     */
    public function build(): ListSubscriptionGroupsMeta
    {
        return CoreHelper::clone($this->instance);
    }
}
