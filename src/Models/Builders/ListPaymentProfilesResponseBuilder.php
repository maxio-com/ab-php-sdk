<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPaymentProfileItem;
use AdvancedBillingLib\Models\ListPaymentProfilesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPaymentProfilesResponse
 *
 * @see ListPaymentProfilesResponse
 */
class ListPaymentProfilesResponseBuilder
{
    /**
     * @var ListPaymentProfilesResponse
     */
    private $instance;

    private function __construct(ListPaymentProfilesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list payment profiles response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPaymentProfilesResponse());
    }

    /**
     * Sets payment profile field.
     */
    public function paymentProfile(?ListPaymentProfileItem $value): self
    {
        $this->instance->setPaymentProfile($value);
        return $this;
    }

    /**
     * Initializes a new list payment profiles response object.
     */
    public function build(): ListPaymentProfilesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
