<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

/**
 * (Optional) If passed, the proof of the authorized ACH agreement terms will be persisted.
 */
class ACHAgreement implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $agreementTerms;

    /**
     * @var string|null
     */
    private $authorizerFirstName;

    /**
     * @var string|null
     */
    private $authorizerLastName;

    /**
     * @var string|null
     */
    private $ipAddress;

    /**
     * Returns Agreement Terms.
     * (Required when providing ACH agreement params) The ACH authorization agreement terms.
     */
    public function getAgreementTerms(): ?string
    {
        return $this->agreementTerms;
    }

    /**
     * Sets Agreement Terms.
     * (Required when providing ACH agreement params) The ACH authorization agreement terms.
     *
     * @maps agreement_terms
     */
    public function setAgreementTerms(?string $agreementTerms): void
    {
        $this->agreementTerms = $agreementTerms;
    }

    /**
     * Returns Authorizer First Name.
     * (Required when providing ACH agreement params) The first name of the person authorizing the ACH
     * agreement.
     */
    public function getAuthorizerFirstName(): ?string
    {
        return $this->authorizerFirstName;
    }

    /**
     * Sets Authorizer First Name.
     * (Required when providing ACH agreement params) The first name of the person authorizing the ACH
     * agreement.
     *
     * @maps authorizer_first_name
     */
    public function setAuthorizerFirstName(?string $authorizerFirstName): void
    {
        $this->authorizerFirstName = $authorizerFirstName;
    }

    /**
     * Returns Authorizer Last Name.
     * (Required when providing ACH agreement params) The last name of the person authorizing the ACH
     * agreement.
     */
    public function getAuthorizerLastName(): ?string
    {
        return $this->authorizerLastName;
    }

    /**
     * Sets Authorizer Last Name.
     * (Required when providing ACH agreement params) The last name of the person authorizing the ACH
     * agreement.
     *
     * @maps authorizer_last_name
     */
    public function setAuthorizerLastName(?string $authorizerLastName): void
    {
        $this->authorizerLastName = $authorizerLastName;
    }

    /**
     * Returns Ip Address.
     * (Required when providing ACH agreement params) The IP address of the person authorizing the ACH
     * agreement.
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * Sets Ip Address.
     * (Required when providing ACH agreement params) The IP address of the person authorizing the ACH
     * agreement.
     *
     * @maps ip_address
     */
    public function setIpAddress(?string $ipAddress): void
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * Converts the ACHAgreement object to a human-readable string representation.
     *
     * @return string The string representation of the ACHAgreement object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ACHAgreement',
            [
                'agreementTerms' => $this->agreementTerms,
                'authorizerFirstName' => $this->authorizerFirstName,
                'authorizerLastName' => $this->authorizerLastName,
                'ipAddress' => $this->ipAddress,
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
        if (isset($this->agreementTerms)) {
            $json['agreement_terms']       = $this->agreementTerms;
        }
        if (isset($this->authorizerFirstName)) {
            $json['authorizer_first_name'] = $this->authorizerFirstName;
        }
        if (isset($this->authorizerLastName)) {
            $json['authorizer_last_name']  = $this->authorizerLastName;
        }
        if (isset($this->ipAddress)) {
            $json['ip_address']            = $this->ipAddress;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
