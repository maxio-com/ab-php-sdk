<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ApplePayPaymentProfile implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var string|null
     */
    private $currentVault;

    /**
     * @var string|null
     */
    private $vaultToken;

    /**
     * @var array
     */
    private $billingAddress = [];

    /**
     * @var array
     */
    private $billingCity = [];

    /**
     * @var array
     */
    private $billingState = [];

    /**
     * @var array
     */
    private $billingZip = [];

    /**
     * @var array
     */
    private $billingCountry = [];

    /**
     * @var array
     */
    private $customerVaultToken = [];

    /**
     * @var array
     */
    private $billingAddress2 = [];

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var array
     */
    private $siteGatewaySettingId = [];

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @param string $paymentType
     */
    public function __construct(string $paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Id.
     * The Chargify-assigned ID of the Apple Pay payment profile.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Chargify-assigned ID of the Apple Pay payment profile.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns First Name.
     * The first name of the Apple Pay account holder
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the Apple Pay account holder
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the Apple Pay account holder
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the Apple Pay account holder
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Customer Id.
     * The Chargify-assigned id for the customer record to which the Apple Pay account belongs
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The Chargify-assigned id for the customer record to which the Apple Pay account belongs
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided vault_token.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided vault_token.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\ApplePayVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     * The “token” provided by your vault storage for an already stored payment profile
     */
    public function getVaultToken(): ?string
    {
        return $this->vaultToken;
    }

    /**
     * Sets Vault Token.
     * The “token” provided by your vault storage for an already stored payment profile
     *
     * @maps vault_token
     */
    public function setVaultToken(?string $vaultToken): void
    {
        $this->vaultToken = $vaultToken;
    }

    /**
     * Returns Billing Address.
     * The current billing street address for the Apple Pay account
     */
    public function getBillingAddress(): ?string
    {
        if (count($this->billingAddress) == 0) {
            return null;
        }
        return $this->billingAddress['value'];
    }

    /**
     * Sets Billing Address.
     * The current billing street address for the Apple Pay account
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress['value'] = $billingAddress;
    }

    /**
     * Unsets Billing Address.
     * The current billing street address for the Apple Pay account
     */
    public function unsetBillingAddress(): void
    {
        $this->billingAddress = [];
    }

    /**
     * Returns Billing City.
     * The current billing address city for the Apple Pay account
     */
    public function getBillingCity(): ?string
    {
        if (count($this->billingCity) == 0) {
            return null;
        }
        return $this->billingCity['value'];
    }

    /**
     * Sets Billing City.
     * The current billing address city for the Apple Pay account
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity['value'] = $billingCity;
    }

    /**
     * Unsets Billing City.
     * The current billing address city for the Apple Pay account
     */
    public function unsetBillingCity(): void
    {
        $this->billingCity = [];
    }

    /**
     * Returns Billing State.
     * The current billing address state for the Apple Pay account
     */
    public function getBillingState(): ?string
    {
        if (count($this->billingState) == 0) {
            return null;
        }
        return $this->billingState['value'];
    }

    /**
     * Sets Billing State.
     * The current billing address state for the Apple Pay account
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState['value'] = $billingState;
    }

    /**
     * Unsets Billing State.
     * The current billing address state for the Apple Pay account
     */
    public function unsetBillingState(): void
    {
        $this->billingState = [];
    }

    /**
     * Returns Billing Zip.
     * The current billing address zip code for the Apple Pay account
     */
    public function getBillingZip(): ?string
    {
        if (count($this->billingZip) == 0) {
            return null;
        }
        return $this->billingZip['value'];
    }

    /**
     * Sets Billing Zip.
     * The current billing address zip code for the Apple Pay account
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip['value'] = $billingZip;
    }

    /**
     * Unsets Billing Zip.
     * The current billing address zip code for the Apple Pay account
     */
    public function unsetBillingZip(): void
    {
        $this->billingZip = [];
    }

    /**
     * Returns Billing Country.
     * The current billing address country for the Apple Pay account
     */
    public function getBillingCountry(): ?string
    {
        if (count($this->billingCountry) == 0) {
            return null;
        }
        return $this->billingCountry['value'];
    }

    /**
     * Sets Billing Country.
     * The current billing address country for the Apple Pay account
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry['value'] = $billingCountry;
    }

    /**
     * Unsets Billing Country.
     * The current billing address country for the Apple Pay account
     */
    public function unsetBillingCountry(): void
    {
        $this->billingCountry = [];
    }

    /**
     * Returns Customer Vault Token.
     */
    public function getCustomerVaultToken(): ?string
    {
        if (count($this->customerVaultToken) == 0) {
            return null;
        }
        return $this->customerVaultToken['value'];
    }

    /**
     * Sets Customer Vault Token.
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken['value'] = $customerVaultToken;
    }

    /**
     * Unsets Customer Vault Token.
     */
    public function unsetCustomerVaultToken(): void
    {
        $this->customerVaultToken = [];
    }

    /**
     * Returns Billing Address 2.
     * The current billing street address, second line, for the Apple Pay account
     */
    public function getBillingAddress2(): ?string
    {
        if (count($this->billingAddress2) == 0) {
            return null;
        }
        return $this->billingAddress2['value'];
    }

    /**
     * Sets Billing Address 2.
     * The current billing street address, second line, for the Apple Pay account
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2['value'] = $billingAddress2;
    }

    /**
     * Unsets Billing Address 2.
     * The current billing street address, second line, for the Apple Pay account
     */
    public function unsetBillingAddress2(): void
    {
        $this->billingAddress2 = [];
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @required
     * @maps payment_type
     * @factory \AdvancedBillingLib\Models\PaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Site Gateway Setting Id.
     */
    public function getSiteGatewaySettingId(): ?int
    {
        if (count($this->siteGatewaySettingId) == 0) {
            return null;
        }
        return $this->siteGatewaySettingId['value'];
    }

    /**
     * Sets Site Gateway Setting Id.
     *
     * @maps site_gateway_setting_id
     */
    public function setSiteGatewaySettingId(?int $siteGatewaySettingId): void
    {
        $this->siteGatewaySettingId['value'] = $siteGatewaySettingId;
    }

    /**
     * Unsets Site Gateway Setting Id.
     */
    public function unsetSiteGatewaySettingId(): void
    {
        $this->siteGatewaySettingId = [];
    }

    /**
     * Returns Gateway Handle.
     */
    public function getGatewayHandle(): ?string
    {
        if (count($this->gatewayHandle) == 0) {
            return null;
        }
        return $this->gatewayHandle['value'];
    }

    /**
     * Sets Gateway Handle.
     *
     * @maps gateway_handle
     */
    public function setGatewayHandle(?string $gatewayHandle): void
    {
        $this->gatewayHandle['value'] = $gatewayHandle;
    }

    /**
     * Unsets Gateway Handle.
     */
    public function unsetGatewayHandle(): void
    {
        $this->gatewayHandle = [];
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
        if (isset($this->id)) {
            $json['id']                      = $this->id;
        }
        if (isset($this->firstName)) {
            $json['first_name']              = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']               = $this->lastName;
        }
        if (isset($this->customerId)) {
            $json['customer_id']             = $this->customerId;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']           = ApplePayVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']             = $this->vaultToken;
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address']         = $this->billingAddress['value'];
        }
        if (!empty($this->billingCity)) {
            $json['billing_city']            = $this->billingCity['value'];
        }
        if (!empty($this->billingState)) {
            $json['billing_state']           = $this->billingState['value'];
        }
        if (!empty($this->billingZip)) {
            $json['billing_zip']             = $this->billingZip['value'];
        }
        if (!empty($this->billingCountry)) {
            $json['billing_country']         = $this->billingCountry['value'];
        }
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']    = $this->customerVaultToken['value'];
        }
        if (!empty($this->billingAddress2)) {
            $json['billing_address_2']       = $this->billingAddress2['value'];
        }
        $json['payment_type']                = PaymentType::checkValue($this->paymentType);
        if (!empty($this->siteGatewaySettingId)) {
            $json['site_gateway_setting_id'] = $this->siteGatewaySettingId['value'];
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']          = $this->gatewayHandle['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
