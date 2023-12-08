<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ResentInvitation;
use Core\Utils\CoreHelper;

/**
 * Builder for model ResentInvitation
 *
 * @see ResentInvitation
 */
class ResentInvitationBuilder
{
    /**
     * @var ResentInvitation
     */
    private $instance;

    private function __construct(ResentInvitation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new resent invitation Builder object.
     */
    public static function init(): self
    {
        return new self(new ResentInvitation());
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
     * Sets send invite link text field.
     */
    public function sendInviteLinkText(?string $value): self
    {
        $this->instance->setSendInviteLinkText($value);
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
     * Initializes a new resent invitation object.
     */
    public function build(): ResentInvitation
    {
        return CoreHelper::clone($this->instance);
    }
}
