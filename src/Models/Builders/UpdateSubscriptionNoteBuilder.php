<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\UpdateSubscriptionNote;
use Core\Utils\CoreHelper;

/**
 * Builder for model UpdateSubscriptionNote
 *
 * @see UpdateSubscriptionNote
 */
class UpdateSubscriptionNoteBuilder
{
    /**
     * @var UpdateSubscriptionNote
     */
    private $instance;

    private function __construct(UpdateSubscriptionNote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new update subscription note Builder object.
     */
    public static function init(string $body, bool $sticky): self
    {
        return new self(new UpdateSubscriptionNote($body, $sticky));
    }

    /**
     * Initializes a new update subscription note object.
     */
    public function build(): UpdateSubscriptionNote
    {
        return CoreHelper::clone($this->instance);
    }
}
