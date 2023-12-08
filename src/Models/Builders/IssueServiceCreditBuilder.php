<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueServiceCredit;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueServiceCredit
 *
 * @see IssueServiceCredit
 */
class IssueServiceCreditBuilder
{
    /**
     * @var IssueServiceCredit
     */
    private $instance;

    private function __construct(IssueServiceCredit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new issue service credit Builder object.
     */
    public static function init($amount, string $memo): self
    {
        return new self(new IssueServiceCredit($amount, $memo));
    }

    /**
     * Initializes a new issue service credit object.
     */
    public function build(): IssueServiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
