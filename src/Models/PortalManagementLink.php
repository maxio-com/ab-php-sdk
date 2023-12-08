<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PortalManagementLink implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $url;

    /**
     * @var int|null
     */
    private $fetchCount;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $newLinkAvailableAt;

    /**
     * @var string|null
     */
    private $expiresAt;

    /**
     * @var array
     */
    private $lastInviteSentAt = [];

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Fetch Count.
     */
    public function getFetchCount(): ?int
    {
        return $this->fetchCount;
    }

    /**
     * Sets Fetch Count.
     *
     * @maps fetch_count
     */
    public function setFetchCount(?int $fetchCount): void
    {
        $this->fetchCount = $fetchCount;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns New Link Available At.
     */
    public function getNewLinkAvailableAt(): ?string
    {
        return $this->newLinkAvailableAt;
    }

    /**
     * Sets New Link Available At.
     *
     * @maps new_link_available_at
     */
    public function setNewLinkAvailableAt(?string $newLinkAvailableAt): void
    {
        $this->newLinkAvailableAt = $newLinkAvailableAt;
    }

    /**
     * Returns Expires At.
     */
    public function getExpiresAt(): ?string
    {
        return $this->expiresAt;
    }

    /**
     * Sets Expires At.
     *
     * @maps expires_at
     */
    public function setExpiresAt(?string $expiresAt): void
    {
        $this->expiresAt = $expiresAt;
    }

    /**
     * Returns Last Invite Sent At.
     */
    public function getLastInviteSentAt(): ?string
    {
        if (count($this->lastInviteSentAt) == 0) {
            return null;
        }
        return $this->lastInviteSentAt['value'];
    }

    /**
     * Sets Last Invite Sent At.
     *
     * @maps last_invite_sent_at
     */
    public function setLastInviteSentAt(?string $lastInviteSentAt): void
    {
        $this->lastInviteSentAt['value'] = $lastInviteSentAt;
    }

    /**
     * Unsets Last Invite Sent At.
     */
    public function unsetLastInviteSentAt(): void
    {
        $this->lastInviteSentAt = [];
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->url)) {
            $json['url']                   = $this->url;
        }
        if (isset($this->fetchCount)) {
            $json['fetch_count']           = $this->fetchCount;
        }
        if (isset($this->createdAt)) {
            $json['created_at']            = $this->createdAt;
        }
        if (isset($this->newLinkAvailableAt)) {
            $json['new_link_available_at'] = $this->newLinkAvailableAt;
        }
        if (isset($this->expiresAt)) {
            $json['expires_at']            = $this->expiresAt;
        }
        if (!empty($this->lastInviteSentAt)) {
            $json['last_invite_sent_at']   = $this->lastInviteSentAt['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
