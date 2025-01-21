<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
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
     * Converts the PublicKey object to a human-readable string representation.
     *
     * @return string The string representation of the PublicKey object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PublicKey',
            [
                'publicKey' => $this->publicKey,
                'requiresSecurityToken' => $this->requiresSecurityToken,
                'createdAt' => $this->createdAt,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
