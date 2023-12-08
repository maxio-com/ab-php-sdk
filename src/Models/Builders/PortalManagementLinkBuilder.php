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
     * Initializes a new portal management link Builder object.
     */
    public static function init(): self
    {
        return new self(new PortalManagementLink());
    }

    /**
     * Sets url field.
     */
    public function url(?string $value): self
    {
        $this->instance->setUrl($value);
        return $this;
    }

    /**
     * Sets fetch count field.
     */
    public function fetchCount(?int $value): self
    {
        $this->instance->setFetchCount($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?string $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets new link available at field.
     */
    public function newLinkAvailableAt(?string $value): self
    {
        $this->instance->setNewLinkAvailableAt($value);
        return $this;
    }

    /**
     * Sets expires at field.
     */
    public function expiresAt(?string $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Sets last invite sent at field.
     */
    public function lastInviteSentAt(?string $value): self
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
     * Initializes a new portal management link object.
     */
    public function build(): PortalManagementLink
    {
        return CoreHelper::clone($this->instance);
    }
}
