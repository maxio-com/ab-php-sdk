<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
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
     * @var \DateTime|null
     */
    private $lastInviteSentAt;

    /**
     * @var \DateTime|null
     */
    private $lastInviteAcceptedAt;

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
     * Returns Last Invite Sent At.
     */
    public function getLastInviteSentAt(): ?\DateTime
    {
        return $this->lastInviteSentAt;
    }

    /**
     * Sets Last Invite Sent At.
     *
     * @maps last_invite_sent_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastInviteSentAt(?\DateTime $lastInviteSentAt): void
    {
        $this->lastInviteSentAt = $lastInviteSentAt;
    }

    /**
     * Returns Last Invite Accepted At.
     */
    public function getLastInviteAcceptedAt(): ?\DateTime
    {
        return $this->lastInviteAcceptedAt;
    }

    /**
     * Sets Last Invite Accepted At.
     *
     * @maps last_invite_accepted_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setLastInviteAcceptedAt(?\DateTime $lastInviteAcceptedAt): void
    {
        $this->lastInviteAcceptedAt = $lastInviteAcceptedAt;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
            $json['last_sent_at']            = $this->lastSentAt;
        }
        if (isset($this->lastAcceptedAt)) {
            $json['last_accepted_at']        = $this->lastAcceptedAt;
        }
        if (isset($this->sendInviteLinkText)) {
            $json['send_invite_link_text']   = $this->sendInviteLinkText;
        }
        if (isset($this->uninvitedCount)) {
            $json['uninvited_count']         = $this->uninvitedCount;
        }
        if (isset($this->lastInviteSentAt)) {
            $json['last_invite_sent_at']     = DateTimeHelper::toRfc3339DateTime($this->lastInviteSentAt);
        }
        if (isset($this->lastInviteAcceptedAt)) {
            $json['last_invite_accepted_at'] = DateTimeHelper::toRfc3339DateTime($this->lastInviteAcceptedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
