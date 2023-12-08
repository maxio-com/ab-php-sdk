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
     * Initializes a new revoked invitation Builder object.
     */
    public static function init(): self
    {
        return new self(new RevokedInvitation());
    }

    /**
     * Sets last sent at field.
     */
    public function lastSentAt(?string $value): self
    {
        $this->instance->setLastSentAt($value);
        return $this;
    }

    /**
     * Sets last accepted at field.
     */
    public function lastAcceptedAt(?string $value): self
    {
        $this->instance->setLastAcceptedAt($value);
        return $this;
    }

    /**
     * Sets uninvited count field.
     */
    public function uninvitedCount(?int $value): self
    {
        $this->instance->setUninvitedCount($value);
        return $this;
    }

    /**
     * Initializes a new revoked invitation object.
     */
    public function build(): RevokedInvitation
    {
        return CoreHelper::clone($this->instance);
    }
}
