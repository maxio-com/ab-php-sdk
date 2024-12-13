<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Invoice;
use AdvancedBillingLib\Models\IssueInvoiceEvent;
use AdvancedBillingLib\Models\IssueInvoiceEventData;
use Core\Utils\CoreHelper;

/**
 * Builder for model IssueInvoiceEvent
 *
 * @see IssueInvoiceEvent
 */
class IssueInvoiceEventBuilder
{
    /**
     * @var IssueInvoiceEvent
     */
    private $instance;

    private function __construct(IssueInvoiceEvent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Issue Invoice Event Builder object.
     *
     * @param int $id
     * @param \DateTime $timestamp
     * @param Invoice $invoice
     * @param string $eventType
     * @param IssueInvoiceEventData $eventData
     */
    public static function init(
        int $id,
        \DateTime $timestamp,
        Invoice $invoice,
        string $eventType,
        IssueInvoiceEventData $eventData
    ): self {
        return new self(new IssueInvoiceEvent($id, $timestamp, $invoice, $eventType, $eventData));
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
     * Initializes a new Issue Invoice Event object.
     */
    public function build(): IssueInvoiceEvent
    {
        return CoreHelper::clone($this->instance);
    }
}
