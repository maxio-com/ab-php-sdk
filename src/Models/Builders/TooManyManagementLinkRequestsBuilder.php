<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\TooManyManagementLinkRequests;
use Core\Utils\CoreHelper;

/**
 * Builder for model TooManyManagementLinkRequests
 *
 * @see TooManyManagementLinkRequests
 */
class TooManyManagementLinkRequestsBuilder
{
    /**
     * @var TooManyManagementLinkRequests
     */
    private $instance;

    private function __construct(TooManyManagementLinkRequests $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Too Many Management Link Requests Builder object.
     *
     * @param string $error
     * @param \DateTime $newLinkAvailableAt
     */
    public static function init(string $error, \DateTime $newLinkAvailableAt): self
    {
        return new self(new TooManyManagementLinkRequests($error, $newLinkAvailableAt));
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
     * Initializes a new Too Many Management Link Requests object.
     */
    public function build(): TooManyManagementLinkRequests
    {
        return CoreHelper::clone($this->instance);
    }
}
