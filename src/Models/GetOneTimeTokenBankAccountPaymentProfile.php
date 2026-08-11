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

class GetOneTimeTokenBankAccountPaymentProfile implements \JsonSerializable
{
    /**
     * @var array
     */
    private $id = [];

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var array
     */
    private $customerId = [];

    /**
     * @var string
     */
    private $currentVault;

    /**
     * @var string
     */
    private $vaultToken;

    /**
     * @var string
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $billingAddress2;

    /**
     * @var string
     */
    private $billingCity;

    /**
     * @var string
     */
    private $billingCountry;

    /**
     * @var string
     */
    private $billingState;

    /**
     * @var string
     */
    private $billingZip;

    /**
     * @var string
     */
    private $bankName;

    /**
     * @var string
     */
    private $maskedBankRoutingNumber;

    /**
     * @var string
     */
    private $maskedBankAccountNumber;

    /**
     * @var string
     */
    private $bankAccountType;

    /**
     * @var string
     */
    private $bankAccountHolderType;

    /**
     * @var string
     */
    private $paymentType;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var int
     */
    private $siteGatewaySettingId;

    /**
     * @var array
     */
    private $customerVaultToken = [];

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @var array
     */
    private $verified = [];

    /**
     * @param string $firstName
     * @param string $lastName
     * @param string $currentVault
     * @param string $vaultToken
     * @param string $billingAddress
     * @param string $billingCity
     * @param string $billingCountry
     * @param string $billingState
     * @param string $billingZip
     * @param string $bankName
     * @param string $maskedBankRoutingNumber
     * @param string $maskedBankAccountNumber
     * @param string $bankAccountType
     * @param string $bankAccountHolderType
     * @param string $paymentType
     * @param bool $disabled
     * @param int $siteGatewaySettingId
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $currentVault,
        string $vaultToken,
        string $billingAddress,
        string $billingCity,
        string $billingCountry,
        string $billingState,
        string $billingZip,
        string $bankName,
        string $maskedBankRoutingNumber,
        string $maskedBankAccountNumber,
        string $bankAccountType,
        string $bankAccountHolderType,
        string $paymentType,
        bool $disabled,
        int $siteGatewaySettingId
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->currentVault = $currentVault;
        $this->vaultToken = $vaultToken;
        $this->billingAddress = $billingAddress;
        $this->billingCity = $billingCity;
        $this->billingCountry = $billingCountry;
        $this->billingState = $billingState;
        $this->billingZip = $billingZip;
        $this->bankName = $bankName;
        $this->maskedBankRoutingNumber = $maskedBankRoutingNumber;
        $this->maskedBankAccountNumber = $maskedBankAccountNumber;
        $this->bankAccountType = $bankAccountType;
        $this->bankAccountHolderType = $bankAccountHolderType;
        $this->paymentType = $paymentType;
        $this->disabled = $disabled;
        $this->siteGatewaySettingId = $siteGatewaySettingId;
    }

    /**
     * Returns Id.
     */
    public function getId(): ?string
    {
        if (count($this->id) == 0) {
            return null;
        }
        return $this->id['value'];
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?string $id): void
    {
        $this->id['value'] = $id;
    }

    /**
     * Unsets Id.
     */
    public function unsetId(): void
    {
        $this->id = [];
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @required
     * @maps first_name
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @required
     * @maps last_name
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?string
    {
        if (count($this->customerId) == 0) {
            return null;
        }
        return $this->customerId['value'];
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?string $customerId): void
    {
        $this->customerId['value'] = $customerId;
    }

    /**
     * Unsets Customer Id.
     */
    public function unsetCustomerId(): void
    {
        $this->customerId = [];
    }

    /**
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing.
     */
    public function getCurrentVault(): string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing.
     *
     * @required
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\BankAccountVault::checkValue
     */
    public function setCurrentVault(string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     */
    public function getVaultToken(): string
    {
        return $this->vaultToken;
    }

    /**
     * Sets Vault Token.
     *
     * @required
     * @maps vault_token
     */
    public function setVaultToken(string $vaultToken): void
    {
        $this->vaultToken = $vaultToken;
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): string
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @required
     * @maps billing_address
     */
    public function setBillingAddress(string $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing Address 2.
     */
    public function getBillingAddress2(): ?string
    {
        return $this->billingAddress2;
    }

    /**
     * Sets Billing Address 2.
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2 = $billingAddress2;
    }

    /**
     * Returns Billing City.
     */
    public function getBillingCity(): string
    {
        return $this->billingCity;
    }

    /**
     * Sets Billing City.
     *
     * @required
     * @maps billing_city
     */
    public function setBillingCity(string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * Returns Billing Country.
     */
    public function getBillingCountry(): string
    {
        return $this->billingCountry;
    }

    /**
     * Sets Billing Country.
     *
     * @required
     * @maps billing_country
     */
    public function setBillingCountry(string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * Returns Billing State.
     */
    public function getBillingState(): string
    {
        return $this->billingState;
    }

    /**
     * Sets Billing State.
     *
     * @required
     * @maps billing_state
     */
    public function setBillingState(string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * Returns Billing Zip.
     */
    public function getBillingZip(): string
    {
        return $this->billingZip;
    }

    /**
     * Sets Billing Zip.
     *
     * @required
     * @maps billing_zip
     */
    public function setBillingZip(string $billingZip): void
    {
        $this->billingZip = $billingZip;
    }

    /**
     * Returns Bank Name.
     */
    public function getBankName(): string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     *
     * @required
     * @maps bank_name
     */
    public function setBankName(string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Masked Bank Routing Number.
     */
    public function getMaskedBankRoutingNumber(): string
    {
        return $this->maskedBankRoutingNumber;
    }

    /**
     * Sets Masked Bank Routing Number.
     *
     * @required
     * @maps masked_bank_routing_number
     */
    public function setMaskedBankRoutingNumber(string $maskedBankRoutingNumber): void
    {
        $this->maskedBankRoutingNumber = $maskedBankRoutingNumber;
    }

    /**
     * Returns Masked Bank Account Number.
     */
    public function getMaskedBankAccountNumber(): string
    {
        return $this->maskedBankAccountNumber;
    }

    /**
     * Sets Masked Bank Account Number.
     *
     * @required
     * @maps masked_bank_account_number
     */
    public function setMaskedBankAccountNumber(string $maskedBankAccountNumber): void
    {
        $this->maskedBankAccountNumber = $maskedBankAccountNumber;
    }

    /**
     * Returns Bank Account Type.
     * Defaults to checking
     */
    public function getBankAccountType(): string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     * Defaults to checking
     *
     * @required
     * @maps bank_account_type
     * @factory \AdvancedBillingLib\Models\BankAccountType::checkValue
     */
    public function setBankAccountType(string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

    /**
     * Returns Bank Account Holder Type.
     * Defaults to personal
     */
    public function getBankAccountHolderType(): string
    {
        return $this->bankAccountHolderType;
    }

    /**
     * Sets Bank Account Holder Type.
     * Defaults to personal
     *
     * @required
     * @maps bank_account_holder_type
     * @factory \AdvancedBillingLib\Models\BankAccountHolderType::checkValue
     */
    public function setBankAccountHolderType(string $bankAccountHolderType): void
    {
        $this->bankAccountHolderType = $bankAccountHolderType;
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
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Disabled.
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * Sets Disabled.
     *
     * @required
     * @maps disabled
     */
    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * Returns Site Gateway Setting Id.
     */
    public function getSiteGatewaySettingId(): int
    {
        return $this->siteGatewaySettingId;
    }

    /**
     * Sets Site Gateway Setting Id.
     *
     * @required
     * @maps site_gateway_setting_id
     */
    public function setSiteGatewaySettingId(int $siteGatewaySettingId): void
    {
        $this->siteGatewaySettingId = $siteGatewaySettingId;
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

    /**
     * Returns Verified.
     */
    public function getVerified(): ?bool
    {
        if (count($this->verified) == 0) {
            return null;
        }
        return $this->verified['value'];
    }

    /**
     * Sets Verified.
     *
     * @maps verified
     */
    public function setVerified(?bool $verified): void
    {
        $this->verified['value'] = $verified;
    }

    /**
     * Unsets Verified.
     */
    public function unsetVerified(): void
    {
        $this->verified = [];
    }

    /**
     * Converts the GetOneTimeTokenBankAccountPaymentProfile object to a human-readable string
     * representation.
     *
     * @return string The string representation of the GetOneTimeTokenBankAccountPaymentProfile object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'GetOneTimeTokenBankAccountPaymentProfile',
            [
                'id' => $this->getId(),
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'customerId' => $this->getCustomerId(),
                'currentVault' => $this->currentVault,
                'vaultToken' => $this->vaultToken,
                'billingAddress' => $this->billingAddress,
                'billingAddress2' => $this->billingAddress2,
                'billingCity' => $this->billingCity,
                'billingCountry' => $this->billingCountry,
                'billingState' => $this->billingState,
                'billingZip' => $this->billingZip,
                'bankName' => $this->bankName,
                'maskedBankRoutingNumber' => $this->maskedBankRoutingNumber,
                'maskedBankAccountNumber' => $this->maskedBankAccountNumber,
                'bankAccountType' => $this->bankAccountType,
                'bankAccountHolderType' => $this->bankAccountHolderType,
                'paymentType' => $this->paymentType,
                'disabled' => $this->disabled,
                'siteGatewaySettingId' => $this->siteGatewaySettingId,
                'customerVaultToken' => $this->getCustomerVaultToken(),
                'gatewayHandle' => $this->getGatewayHandle(),
                'verified' => $this->getVerified(),
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
        if (!empty($this->id)) {
            $json['id']                     = $this->id['value'];
        }
        $json['first_name']                 = $this->firstName;
        $json['last_name']                  = $this->lastName;
        if (!empty($this->customerId)) {
            $json['customer_id']            = $this->customerId['value'];
        }
        $json['current_vault']              = BankAccountVault::checkValue($this->currentVault);
        $json['vault_token']                = $this->vaultToken;
        $json['billing_address']            = $this->billingAddress;
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']      = $this->billingAddress2;
        }
        $json['billing_city']               = $this->billingCity;
        $json['billing_country']            = $this->billingCountry;
        $json['billing_state']              = $this->billingState;
        $json['billing_zip']                = $this->billingZip;
        $json['bank_name']                  = $this->bankName;
        $json['masked_bank_routing_number'] = $this->maskedBankRoutingNumber;
        $json['masked_bank_account_number'] = $this->maskedBankAccountNumber;
        $json['bank_account_type']          = BankAccountType::checkValue($this->bankAccountType);
        $json['bank_account_holder_type']   = BankAccountHolderType::checkValue($this->bankAccountHolderType);
        $json['payment_type']               = $this->paymentType;
        $json['disabled']                   = $this->disabled;
        $json['site_gateway_setting_id']    = $this->siteGatewaySettingId;
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']   = $this->customerVaultToken['value'];
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']         = $this->gatewayHandle['value'];
        }
        if (!empty($this->verified)) {
            $json['verified']               = $this->verified['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
