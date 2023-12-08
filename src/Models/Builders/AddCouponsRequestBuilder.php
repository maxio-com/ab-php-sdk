<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AddCouponsRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model AddCouponsRequest
 *
 * @see AddCouponsRequest
 */
class AddCouponsRequestBuilder
{
    /**
     * @var AddCouponsRequest
     */
    private $instance;

    private function __construct(AddCouponsRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new add coupons request Builder object.
     */
    public static function init(): self
    {
        return new self(new AddCouponsRequest());
    }

    /**
     * Sets codes field.
     */
    public function codes(?array $value): self
    {
        $this->instance->setCodes($value);
        return $this;
    }

    /**
     * Initializes a new add coupons request object.
     */
    public function build(): AddCouponsRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
