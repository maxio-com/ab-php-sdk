<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ResentInvitation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $lastSentAt;

    /**
     * @var string|null
     */
    private $lastAcceptedAt;

    /**
     * @var string|null
     */
    private $sendInviteLinkText;

    /**
     * @var int|null
     */
    private $uninvitedCount;

    /**
     * Returns Last Sent At.
     */
    public function getLastSentAt(): ?string
    {
        return $this->lastSentAt;
    }

    /**
     * Sets Last Sent At.
     *
     * @maps last_sent_at
     */
    public function setLastSentAt(?string $lastSentAt): void
    {
        $this->lastSentAt = $lastSentAt;
    }

    /**
     * Returns Last Accepted At.
     */
    public function getLastAcceptedAt(): ?string
    {
        return $this->lastAcceptedAt;
    }

    /**
     * Sets Last Accepted At.
     *
     * @maps last_accepted_at
     */
    public function setLastAcceptedAt(?string $lastAcceptedAt): void
    {
        $this->lastAcceptedAt = $lastAcceptedAt;
    }

    /**
     * Returns Send Invite Link Text.
     */
    public function getSendInviteLinkText(): ?string
    {
        return $this->sendInviteLinkText;
    }

    /**
     * Sets Send Invite Link Text.
     *
     * @maps send_invite_link_text
     */
    public function setSendInviteLinkText(?string $sendInviteLinkText): void
    {
        $this->sendInviteLinkText = $sendInviteLinkText;
    }

    /**
     * Returns Uninvited Count.
     */
    public function getUninvitedCount(): ?int
    {
        return $this->uninvitedCount;
    }

    /**
     * Sets Uninvited Count.
     *
     * @maps uninvited_count
     */
    public function setUninvitedCount(?int $uninvitedCount): void
    {
        $this->uninvitedCount = $uninvitedCount;
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
        if (isset($this->lastSentAt)) {
            $json['last_sent_at']          = $this->lastSentAt;
        }
        if (isset($this->lastAcceptedAt)) {
            $json['last_accepted_at']      = $this->lastAcceptedAt;
        }
        if (isset($this->sendInviteLinkText)) {
            $json['send_invite_link_text'] = $this->sendInviteLinkText;
        }
        if (isset($this->uninvitedCount)) {
            $json['uninvited_count']       = $this->uninvitedCount;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
