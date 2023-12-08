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
     * Initializes a new too many management link requests Builder object.
     */
    public static function init(string $error, \DateTime $newLinkAvailableAt): self
    {
        return new self(new TooManyManagementLinkRequests($error, $newLinkAvailableAt));
    }

    /**
     * Initializes a new too many management link requests object.
     */
    public function build(): TooManyManagementLinkRequests
    {
        return CoreHelper::clone($this->instance);
    }
}
