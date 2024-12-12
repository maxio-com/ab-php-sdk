<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PortalManagementLink;
use Core\Utils\CoreHelper;

/**
 * Builder for model PortalManagementLink
 *
 * @see PortalManagementLink
 */
class PortalManagementLinkBuilder
{
    /**
     * @var PortalManagementLink
     */
    private $instance;

    private function __construct(PortalManagementLink $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Portal Management Link Builder object.
     */
    public static function init(): self
    {
        return new self(new PortalManagementLink());
    }

    /**
     * Sets url field.
     *
     * @param string|null $value
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets fetch count field.
     *
     * @param int|null $value
     */
    public function fetchCount(?int $value): self
    {
        $this->instance->setFetchCount($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets new link available at field.
     *
     * @param \DateTime|null $value
     */
    public function newLinkAvailableAt(?\DateTime $value): self
    {
        $this->instance->setNewLinkAvailableAt($value);
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
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
     * Unsets last invite sent at field.
     */
    public function unsetLastInviteSentAt(): self
    {
        $this->instance->unsetLastInviteSentAt();
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
     * Initializes a new Portal Management Link object.
     */
    public function build(): PortalManagementLink
    {
        return CoreHelper::clone($this->instance);
    }
}
