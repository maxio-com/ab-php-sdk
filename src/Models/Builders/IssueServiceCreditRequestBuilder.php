<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueServiceCredit;
use AdvancedBillingLib\Models\IssueServiceCreditRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueServiceCreditRequest
 *
 * @see IssueServiceCreditRequest
 */
class IssueServiceCreditRequestBuilder
{
    /**
     * @var IssueServiceCreditRequest
     */
    private $instance;

    private function __construct(IssueServiceCreditRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new issue service credit request Builder object.
     */
    public static function init(IssueServiceCredit $serviceCredit): self
    {
        return new self(new IssueServiceCreditRequest($serviceCredit));
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
     * Initializes a new issue service credit request object.
     */
    public function build(): IssueServiceCreditRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
