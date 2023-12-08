<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PayerError implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $lastName;

    /**
     * @var string[]|null
     */
    private $firstName;

    /**
     * @var string[]|null
     */
    private $email;

    /**
     * Returns Last Name.
     *
     * @return string[]|null
     */
    public function getLastName(): ?array
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @maps last_name
     *
     * @param string[]|null $lastName
     */
    public function setLastName(?array $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns First Name.
     *
     * @return string[]|null
     */
    public function getFirstName(): ?array
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @maps first_name
     *
     * @param string[]|null $firstName
     */
    public function setFirstName(?array $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Email.
     *
     * @return string[]|null
     */
    public function getEmail(): ?array
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps email
     *
     * @param string[]|null $email
     */
    public function setEmail(?array $email): void
    {
        $this->email = $email;
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
        if (isset($this->lastName)) {
            $json['last_name']  = $this->lastName;
        }
        if (isset($this->firstName)) {
            $json['first_name'] = $this->firstName;
        }
        if (isset($this->email)) {
            $json['email']      = $this->email;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
