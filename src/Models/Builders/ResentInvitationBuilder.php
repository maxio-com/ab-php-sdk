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
     * Initializes a new Resent Invitation Builder object.
     */
    public static function init(): self
    {
        return new self(new ResentInvitation());
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
     * Sets send invite link text field.
     *
     * @param string|null $value
     */
    public function sendInviteLinkText(?string $value): self
    {
        $this->instance->setSendInviteLinkText($value);
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
     * Sets last invite sent at field.
     *
     * @param \DateTime|null $value
     */
    public function lastInviteSentAt(?\DateTime $value): self
    {
        $this->instance->setLastInviteSentAt($value);
        return $this;
    }

    /**
     * Sets last invite accepted at field.
     *
     * @param \DateTime|null $value
     */
    public function lastInviteAcceptedAt(?\DateTime $value): self
    {
        $this->instance->setLastInviteAcceptedAt($value);
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
     * Initializes a new Resent Invitation object.
     */
    public function build(): ResentInvitation
    {
        return CoreHelper::clone($this->instance);
    }
}
