<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionNote;
use AdvancedBillingLib\Models\SubscriptionNoteResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionNoteResponse
 *
 * @see SubscriptionNoteResponse
 */
class SubscriptionNoteResponseBuilder
{
    /**
     * @var SubscriptionNoteResponse
     */
    private $instance;

    private function __construct(SubscriptionNoteResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Subscription Note Response Builder object.
     *
     * @param SubscriptionNote $note
     */
    public static function init(SubscriptionNote $note): self
    {
        return new self(new SubscriptionNoteResponse($note));
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
     * Initializes a new Subscription Note Response object.
     */
    public function build(): SubscriptionNoteResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
