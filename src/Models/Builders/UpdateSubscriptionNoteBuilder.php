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
     * Initializes a new Update Subscription Note Builder object.
     *
     * @param string $body
     * @param bool $sticky
     */
    public static function init(string $body, bool $sticky): self
    {
        return new self(new UpdateSubscriptionNote($body, $sticky));
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
     * Initializes a new Update Subscription Note object.
     */
    public function build(): UpdateSubscriptionNote
    {
        return CoreHelper::clone($this->instance);
    }
}
