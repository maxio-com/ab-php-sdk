<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\RevokedInvitation;
use Core\Utils\CoreHelper;

/**
 * Builder for model RevokedInvitation
 *
 * @see RevokedInvitation
 */
class RevokedInvitationBuilder
{
    /**
     * @var RevokedInvitation
     */
    private $instance;

    private function __construct(RevokedInvitation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Revoked Invitation Builder object.
     */
    public static function init(): self
    {
        return new self(new RevokedInvitation());
    }

    /**
     * Sets last sent at field.
     *
     * @param string|null $value
     */
    public function lastSentAt(?string $value): self
    {
        $this->instance->setLastSentAt($value);
        return $this;
    }

    /**
     * Sets last accepted at field.
     *
     * @param string|null $value
     */
    public function lastAcceptedAt(?string $value): self
    {
        $this->instance->setLastAcceptedAt($value);
        return $this;
    }

    /**
     * Sets uninvited count field.
     *
     * @param int|null $value
     */
    public function uninvitedCount(?int $value): self
    {
        $this->instance->setUninvitedCount($value);
        return $this;
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
     * Initializes a new Revoked Invitation object.
     */
    public function build(): RevokedInvitation
    {
        return CoreHelper::clone($this->instance);
    }
}
