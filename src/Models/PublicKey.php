<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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
     * @var string|null
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
            $json['created_at']              = $this->createdAt;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
