<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionBankAccount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $bankAccountHolderType;

    /**
     * @var string|null
     */
    private $bankAccountType;

    /**
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $billingAddress;

    /**
     * @var string|null
     */
    private $billingAddress2;

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
     * @var string|null
     */
    private $currentVault;

    /**
     * @var int|null
     */
    private $customerId;

    /**
     * @var string|null
     */
    private $customerVaultToken;

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
    private $id;

    /**
     * @var string|null
     */
    private $maskedBankAccountNumber;

    /**
     * @var string|null
     */
    private $maskedBankRoutingNumber;

    /**
     * @var string|null
     */
    private $vaultToken;

    /**
     * @var string|null
     */
    private $chargifyToken;

    /**
     * @var int|null
     */
    private $siteGatewaySettingId;

    /**
     * @var string|null
     */
    private $gatewayHandle;

    /**
     * Returns Bank Account Holder Type.
     * Defaults to personal
     */
    public function getBankAccountHolderType(): ?string
    {
        return $this->bankAccountHolderType;
    }

    /**
     * Sets Bank Account Holder Type.
     * Defaults to personal
     *
     * @maps bank_account_holder_type
     */
    public function setBankAccountHolderType(?string $bankAccountHolderType): void
    {
        $this->bankAccountHolderType = $bankAccountHolderType;
    }

    /**
     * Returns Bank Account Type.
     * Defaults to checking
     */
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     * Defaults to checking
     *
     * @maps bank_account_type
     */
    public function setBankAccountType(?string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

    /**
     * Returns Bank Name.
     * The bank where the account resides
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Sets Bank Name.
     * The bank where the account resides
     *
     * @maps bank_name
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Returns Billing Address.
     * The current billing street address for the bank account
     */
    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The current billing street address for the bank account
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing Address 2.
     * The current billing street address, second line, for the bank account
     */
    public function getBillingAddress2(): ?string
    {
        return $this->billingAddress2;
    }

    /**
     * Sets Billing Address 2.
     * The current billing street address, second line, for the bank account
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2 = $billingAddress2;
    }

    /**
     * Returns Billing City.
     * The current billing address city for the bank account
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    /**
     * Sets Billing City.
     * The current billing address city for the bank account
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * Returns Billing State.
     * The current billing address state for the bank account
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    /**
     * Sets Billing State.
     * The current billing address state for the bank account
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * Returns Billing Zip.
     * The current billing address zip code for the bank account
     */
    public function getBillingZip(): ?string
    {
        return $this->billingZip;
    }

    /**
     * Sets Billing Zip.
     * The current billing address zip code for the bank account
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip = $billingZip;
    }

    /**
     * Returns Billing Country.
     * The current billing address country for the bank account
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    /**
     * Sets Billing Country.
     * The current billing address country for the bank account
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
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
     * @factory \AdvancedBillingLib\Models\BankAccountVault::checkValue
     */
    public function setCurrentVault(?string $currentVault): void
    {
        $this->currentVault = $currentVault;
    }

    /**
     * Returns Customer Id.
     * The Chargify-assigned id for the customer record to which the bank account belongs
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }

    /**
     * Sets Customer Id.
     * The Chargify-assigned id for the customer record to which the bank account belongs
     *
     * @maps customer_id
     */
    public function setCustomerId(?int $customerId): void
    {
        $this->customerId = $customerId;
    }

    /**
     * Returns Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token
     */
    public function getCustomerVaultToken(): ?string
    {
        return $this->customerVaultToken;
    }

    /**
     * Sets Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken = $customerVaultToken;
    }

    /**
     * Returns First Name.
     * The first name of the bank account holder
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the bank account holder
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the bank account holder
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the bank account holder
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Id.
     * The Chargify-assigned ID of the stored bank account. This value can be used as an input to
     * payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the
     * same customer
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The Chargify-assigned ID of the stored bank account. This value can be used as an input to
     * payment_profile_id when creating a subscription, in order to re-use a stored payment profile for the
     * same customer
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Masked Bank Account Number.
     * A string representation of the stored bank account number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’)
     */
    public function getMaskedBankAccountNumber(): ?string
    {
        return $this->maskedBankAccountNumber;
    }

    /**
     * Sets Masked Bank Account Number.
     * A string representation of the stored bank account number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’)
     *
     * @maps masked_bank_account_number
     */
    public function setMaskedBankAccountNumber(?string $maskedBankAccountNumber): void
    {
        $this->maskedBankAccountNumber = $maskedBankAccountNumber;
    }

    /**
     * Returns Masked Bank Routing Number.
     * A string representation of the stored bank routing number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’). payment_type will be bank_account
     */
    public function getMaskedBankRoutingNumber(): ?string
    {
        return $this->maskedBankRoutingNumber;
    }

    /**
     * Sets Masked Bank Routing Number.
     * A string representation of the stored bank routing number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’). payment_type will be bank_account
     *
     * @maps masked_bank_routing_number
     */
    public function setMaskedBankRoutingNumber(?string $maskedBankRoutingNumber): void
    {
        $this->maskedBankRoutingNumber = $maskedBankRoutingNumber;
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
     * Returns Chargify Token.
     * Token received after sending billing informations using chargify.js. This token will only be
     * received if passed as a sole attribute of credit_card_attributes (i.e.
     * tok_9g6hw85pnpt6knmskpwp4ttt)
     */
    public function getChargifyToken(): ?string
    {
        return $this->chargifyToken;
    }

    /**
     * Sets Chargify Token.
     * Token received after sending billing informations using chargify.js. This token will only be
     * received if passed as a sole attribute of credit_card_attributes (i.e.
     * tok_9g6hw85pnpt6knmskpwp4ttt)
     *
     * @maps chargify_token
     */
    public function setChargifyToken(?string $chargifyToken): void
    {
        $this->chargifyToken = $chargifyToken;
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
        if (isset($this->bankAccountHolderType)) {
            $json['bank_account_holder_type']   = $this->bankAccountHolderType;
        }
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']          = $this->bankAccountType;
        }
        if (isset($this->bankName)) {
            $json['bank_name']                  = $this->bankName;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']            = $this->billingAddress;
        }
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']          = $this->billingAddress2;
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
        if (isset($this->currentVault)) {
            $json['current_vault']              = BankAccountVault::checkValue($this->currentVault);
        }
        if (isset($this->customerId)) {
            $json['customer_id']                = $this->customerId;
        }
        if (isset($this->customerVaultToken)) {
            $json['customer_vault_token']       = $this->customerVaultToken;
        }
        if (isset($this->firstName)) {
            $json['first_name']                 = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']                  = $this->lastName;
        }
        if (isset($this->id)) {
            $json['id']                         = $this->id;
        }
        if (isset($this->maskedBankAccountNumber)) {
            $json['masked_bank_account_number'] = $this->maskedBankAccountNumber;
        }
        if (isset($this->maskedBankRoutingNumber)) {
            $json['masked_bank_routing_number'] = $this->maskedBankRoutingNumber;
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']                = $this->vaultToken;
        }
        if (isset($this->chargifyToken)) {
            $json['chargify_token']             = $this->chargifyToken;
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
