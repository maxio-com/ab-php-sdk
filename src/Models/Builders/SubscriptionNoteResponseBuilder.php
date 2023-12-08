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
     * Initializes a new subscription note response Builder object.
     */
    public static function init(SubscriptionNote $note): self
    {
        return new self(new SubscriptionNoteResponse($note));
    }

    /**
     * Initializes a new subscription note response object.
     */
    public function build(): SubscriptionNoteResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
