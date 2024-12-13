<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\IssueInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueInvoiceEventData
 *
 * @see IssueInvoiceEventData
 */
class IssueInvoiceEventDataBuilder
{
    /**
     * @var IssueInvoiceEventData
     */
    private $instance;

    private function __construct(IssueInvoiceEventData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Issue Invoice Event Data Builder object.
     *
     * @param string $consolidationLevel
     * @param string $fromStatus
     * @param string $toStatus
     * @param string $dueAmount
     * @param string $totalAmount
     */
    public static function init(
        string $consolidationLevel,
        string $fromStatus,
        string $toStatus,
        string $dueAmount,
        string $totalAmount
    ): self {
        return new self(
            new IssueInvoiceEventData($consolidationLevel, $fromStatus, $toStatus, $dueAmount, $totalAmount)
        );
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
     * Initializes a new Issue Invoice Event Data object.
     */
    public function build(): IssueInvoiceEventData
    {
        return CoreHelper::clone($this->instance);
    }
}
