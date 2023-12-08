<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListPaymentProfileItem implements \JsonSerializable
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
     * @var string|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $billingCity;

    /**
     * @var string|null
     */
    private $billingState;

    /**
     * @var string|null
     */
    private $billingZip;

    /**
     * @var string|null
     */
    private $billingCountry;

    /**
     * @var array
     */
    private $customerVaultToken = [];

    /**
     * @var string|null
     */
    private $billingAddress2;

    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $maskedBankRoutingNumber;

    /**
     * @var string|null
     */
    private $maskedBankAccountNumber;

    /**
     * @var string|null
     */
    private $bankAccountType;

    /**
     * @var string|null
     */
    private $bankAccountHolderType;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * @var int|null
     */
    private $siteGatewaySettingId;

    /**
     * @var string|null
     */
    private $gatewayHandle;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns First Name.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Customer Id.
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\CurrentVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Vault Token.
     */
    public function getVaultToken(): ?string
    {
        return $this->vaultToken;
    }

    /**
     * Sets Vault Token.
     *
     * @maps vault_token
     */
    public function setVaultToken(?string $vaultToken): void
    {
        $this->vaultToken = $vaultToken;
    }

    /**
     * Returns Billing Address.
     */
    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing City.
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    /**
     * Sets Billing City.
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * Returns Billing State.
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    /**
     * Sets Billing State.
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * Returns Billing Zip.
     */
    public function getBillingZip(): ?string
    {
        return $this->billingZip;
    }

    /**
     * Sets Billing Zip.
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip = $billingZip;
    }

    /**
     * Returns Billing Country.
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    /**
     * Sets Billing Country.
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
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
     * Returns Bank Name.
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Masked Bank Routing Number.
     */
    public function getMaskedBankRoutingNumber(): ?string
    {
        return $this->maskedBankRoutingNumber;
    }

    /**
     * Sets Masked Bank Routing Number.
     *
     * @maps masked_bank_routing_number
     */
    public function setMaskedBankRoutingNumber(?string $maskedBankRoutingNumber): void
    {
        $this->maskedBankRoutingNumber = $maskedBankRoutingNumber;
    }

    /**
     * Returns Masked Bank Account Number.
     */
    public function getMaskedBankAccountNumber(): ?string
    {
        return $this->maskedBankAccountNumber;
    }

    /**
     * Sets Masked Bank Account Number.
     *
     * @maps masked_bank_account_number
     */
    public function setMaskedBankAccountNumber(?string $maskedBankAccountNumber): void
    {
        $this->maskedBankAccountNumber = $maskedBankAccountNumber;
    }

    /**
     * Returns Bank Account Type.
     */
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     *
     * @maps bank_account_type
     */
    public function setBankAccountType(?string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

    /**
     * Returns Bank Account Holder Type.
     */
    public function getBankAccountHolderType(): ?string
    {
        return $this->bankAccountHolderType;
    }

    /**
     * Sets Bank Account Holder Type.
     *
     * @maps bank_account_holder_type
     */
    public function setBankAccountHolderType(?string $bankAccountHolderType): void
    {
        $this->bankAccountHolderType = $bankAccountHolderType;
    }

    /**
     * Returns Payment Type.
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }

    /**
     * Sets Payment Type.
     *
     * @maps payment_type
     */
    public function setPaymentType(?string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Site Gateway Setting Id.
     */
    public function getSiteGatewaySettingId(): ?int
    {
        return $this->siteGatewaySettingId;
    }

    /**
     * Sets Site Gateway Setting Id.
     *
     * @maps site_gateway_setting_id
     */
    public function setSiteGatewaySettingId(?int $siteGatewaySettingId): void
    {
        $this->siteGatewaySettingId = $siteGatewaySettingId;
    }

    /**
     * Returns Gateway Handle.
     */
    public function getGatewayHandle(): ?string
    {
        return $this->gatewayHandle;
    }

    /**
     * Sets Gateway Handle.
     *
     * @maps gateway_handle
     */
    public function setGatewayHandle(?string $gatewayHandle): void
    {
        $this->gatewayHandle = $gatewayHandle;
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
            $json['id']                         = $this->id;
        }
        if (isset($this->firstName)) {
            $json['first_name']                 = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']                  = $this->lastName;
        }
        if (isset($this->customerId)) {
            $json['customer_id']                = $this->customerId;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']              = CurrentVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']                = $this->vaultToken;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']            = $this->billingAddress;
        }
        if (isset($this->billingCity)) {
            $json['billing_city']               = $this->billingCity;
        }
        if (isset($this->billingState)) {
            $json['billing_state']              = $this->billingState;
        }
        if (isset($this->billingZip)) {
            $json['billing_zip']                = $this->billingZip;
        }
        if (isset($this->billingCountry)) {
            $json['billing_country']            = $this->billingCountry;
        }
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']       = $this->customerVaultToken['value'];
        }
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']          = $this->billingAddress2;
        }
        if (isset($this->bankName)) {
            $json['bank_name']                  = $this->bankName;
        }
        if (isset($this->maskedBankRoutingNumber)) {
            $json['masked_bank_routing_number'] = $this->maskedBankRoutingNumber;
        }
        if (isset($this->maskedBankAccountNumber)) {
            $json['masked_bank_account_number'] = $this->maskedBankAccountNumber;
        }
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']          = $this->bankAccountType;
        }
        if (isset($this->bankAccountHolderType)) {
            $json['bank_account_holder_type']   = $this->bankAccountHolderType;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']               = $this->paymentType;
        }
        if (isset($this->siteGatewaySettingId)) {
            $json['site_gateway_setting_id']    = $this->siteGatewaySettingId;
        }
        if (isset($this->gatewayHandle)) {
            $json['gateway_handle']             = $this->gatewayHandle;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
