<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscriptionNote;
use AdvancedBillingLib\Models\UpdateSubscriptionNoteRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionNoteRequest
 *
 * @see UpdateSubscriptionNoteRequest
 */
class UpdateSubscriptionNoteRequestBuilder
{
    /**
     * @var UpdateSubscriptionNoteRequest
     */
    private $instance;

    private function __construct(UpdateSubscriptionNoteRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription note request Builder object.
     */
    public static function init(UpdateSubscriptionNote $note): self
    {
        return new self(new UpdateSubscriptionNoteRequest($note));
    }

    /**
     * Initializes a new update subscription note request object.
     */
    public function build(): UpdateSubscriptionNoteRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
