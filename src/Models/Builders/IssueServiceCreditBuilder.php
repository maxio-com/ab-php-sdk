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
    public static function init($amount): self
    {
        return new self(new IssueServiceCredit($amount));
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
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
     * Initializes a new issue service credit object.
     */
    public function build(): IssueServiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
