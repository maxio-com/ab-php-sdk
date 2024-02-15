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

class PublicKey implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $publicKey;

    /**
     * @var bool|null
     */
    private $requiresSecurityToken;

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * Returns Public Key.
     */
    public function getPublicKey(): ?string
    {
        return $this->publicKey;
    }

    /**
     * Sets Public Key.
     *
     * @maps public_key
     */
    public function setPublicKey(?string $publicKey): void
    {
        $this->publicKey = $publicKey;
    }

    /**
     * Returns Requires Security Token.
     */
    public function getRequiresSecurityToken(): ?bool
    {
        return $this->requiresSecurityToken;
    }

    /**
     * Sets Requires Security Token.
     *
     * @maps requires_security_token
     */
    public function setRequiresSecurityToken(?bool $requiresSecurityToken): void
    {
        $this->requiresSecurityToken = $requiresSecurityToken;
    }

    /**
     * Returns Created At.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
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
        if (isset($this->publicKey)) {
            $json['public_key']              = $this->publicKey;
        }
        if (isset($this->requiresSecurityToken)) {
            $json['requires_security_token'] = $this->requiresSecurityToken;
        }
        if (isset($this->createdAt)) {
            $json['created_at']              = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
