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

class BankAccountPaymentProfile implements \JsonSerializable
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
     * @var string|null
     */
    private $bankName;

    /**
     * @var string|null
     */
    private $maskedBankRoutingNumber;

    /**
     * @var string
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
     * @var string
     */
    private $paymentType;

    /**
     * @var bool|null
     */
    private $verified = false;

    /**
     * @var array
     */
    private $siteGatewaySettingId = [];

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @param string $maskedBankAccountNumber
     * @param string $paymentType
     */
    public function __construct(string $maskedBankAccountNumber, string $paymentType)
    {
        $this->maskedBankAccountNumber = $maskedBankAccountNumber;
        $this->paymentType = $paymentType;
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
     * Returns Current Vault.
     * The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing.
     */
    public function getCurrentVault(): ?string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided vault_token. Use `bogus` for testing.
     *
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\BankAccountVault::checkValue
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
     * The current billing street address for the bank account
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
     * The current billing street address for the bank account
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress['value'] = $billingAddress;
    }

    /**
     * Unsets Billing Address.
     * The current billing street address for the bank account
     */
    public function unsetBillingAddress(): void
    {
        $this->billingAddress = [];
    }

    /**
     * Returns Billing City.
     * The current billing address city for the bank account
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
     * The current billing address city for the bank account
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity['value'] = $billingCity;
    }

    /**
     * Unsets Billing City.
     * The current billing address city for the bank account
     */
    public function unsetBillingCity(): void
    {
        $this->billingCity = [];
    }

    /**
     * Returns Billing State.
     * The current billing address state for the bank account
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
     * The current billing address state for the bank account
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState['value'] = $billingState;
    }

    /**
     * Unsets Billing State.
     * The current billing address state for the bank account
     */
    public function unsetBillingState(): void
    {
        $this->billingState = [];
    }

    /**
     * Returns Billing Zip.
     * The current billing address zip code for the bank account
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
     * The current billing address zip code for the bank account
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip['value'] = $billingZip;
    }

    /**
     * Unsets Billing Zip.
     * The current billing address zip code for the bank account
     */
    public function unsetBillingZip(): void
    {
        $this->billingZip = [];
    }

    /**
     * Returns Billing Country.
     * The current billing address country for the bank account
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
     * The current billing address country for the bank account
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry['value'] = $billingCountry;
    }

    /**
     * Unsets Billing Country.
     * The current billing address country for the bank account
     */
    public function unsetBillingCountry(): void
    {
        $this->billingCountry = [];
    }

    /**
     * Returns Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
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
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken['value'] = $customerVaultToken;
    }

    /**
     * Unsets Customer Vault Token.
     * (only for Authorize.Net CIM storage): the customerProfileId for the owner of the
     * customerPaymentProfileId provided as the vault_token.
     */
    public function unsetCustomerVaultToken(): void
    {
        $this->customerVaultToken = [];
    }

    /**
     * Returns Billing Address 2.
     * The current billing street address, second line, for the bank account
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
     * The current billing street address, second line, for the bank account
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2['value'] = $billingAddress2;
    }

    /**
     * Unsets Billing Address 2.
     * The current billing street address, second line, for the bank account
     */
    public function unsetBillingAddress2(): void
    {
        $this->billingAddress2 = [];
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
     * Returns Masked Bank Account Number.
     * A string representation of the stored bank account number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’)
     */
    public function getMaskedBankAccountNumber(): string
    {
        return $this->maskedBankAccountNumber;
    }

    /**
     * Sets Masked Bank Account Number.
     * A string representation of the stored bank account number with all but the last 4 digits marked with
     * X’s (i.e. ‘XXXXXXX1111’)
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
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    /**
     * Sets Bank Account Type.
     * Defaults to checking
     *
     * @maps bank_account_type
     * @factory \AdvancedBillingLib\Models\BankAccountType::checkValue
     */
    public function setBankAccountType(?string $bankAccountType): void
    {
        $this->bankAccountType = $bankAccountType;
    }

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
     * @factory \AdvancedBillingLib\Models\BankAccountHolderType::checkValue
     */
    public function setBankAccountHolderType(?string $bankAccountHolderType): void
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
     * @factory \AdvancedBillingLib\Models\PaymentType::checkValue
     */
    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    /**
     * Returns Verified.
     * denotes whether a bank account has been verified by providing the amounts of two small deposits made
     * into the account
     */
    public function getVerified(): ?bool
    {
        return $this->verified;
    }

    /**
     * Sets Verified.
     * denotes whether a bank account has been verified by providing the amounts of two small deposits made
     * into the account
     *
     * @maps verified
     */
    public function setVerified(?bool $verified): void
    {
        $this->verified = $verified;
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

    /**
     * Returns Created At.
     * A timestamp indicating when this payment profile was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * A timestamp indicating when this payment profile was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * A timestamp indicating when this payment profile was last updated
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * A timestamp indicating when this payment profile was last updated
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Converts the BankAccountPaymentProfile object to a human-readable string representation.
     *
     * @return string The string representation of the BankAccountPaymentProfile object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BankAccountPaymentProfile',
            [
                'id' => $this->id,
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'customerId' => $this->customerId,
                'currentVault' => $this->currentVault,
                'vaultToken' => $this->vaultToken,
                'billingAddress' => $this->getBillingAddress(),
                'billingCity' => $this->getBillingCity(),
                'billingState' => $this->getBillingState(),
                'billingZip' => $this->getBillingZip(),
                'billingCountry' => $this->getBillingCountry(),
                'customerVaultToken' => $this->getCustomerVaultToken(),
                'billingAddress2' => $this->getBillingAddress2(),
                'bankName' => $this->bankName,
                'maskedBankRoutingNumber' => $this->maskedBankRoutingNumber,
                'maskedBankAccountNumber' => $this->maskedBankAccountNumber,
                'bankAccountType' => $this->bankAccountType,
                'bankAccountHolderType' => $this->bankAccountHolderType,
                'paymentType' => $this->paymentType,
                'verified' => $this->verified,
                'siteGatewaySettingId' => $this->getSiteGatewaySettingId(),
                'gatewayHandle' => $this->getGatewayHandle(),
                'createdAt' => $this->createdAt,
                'updatedAt' => $this->updatedAt,
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
            $json['current_vault']              = BankAccountVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']                = $this->vaultToken;
        }
        if (!empty($this->billingAddress)) {
            $json['billing_address']            = $this->billingAddress['value'];
        }
        if (!empty($this->billingCity)) {
            $json['billing_city']               = $this->billingCity['value'];
        }
        if (!empty($this->billingState)) {
            $json['billing_state']              = $this->billingState['value'];
        }
        if (!empty($this->billingZip)) {
            $json['billing_zip']                = $this->billingZip['value'];
        }
        if (!empty($this->billingCountry)) {
            $json['billing_country']            = $this->billingCountry['value'];
        }
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']       = $this->customerVaultToken['value'];
        }
        if (!empty($this->billingAddress2)) {
            $json['billing_address_2']          = $this->billingAddress2['value'];
        }
        if (isset($this->bankName)) {
            $json['bank_name']                  = $this->bankName;
        }
        if (isset($this->maskedBankRoutingNumber)) {
            $json['masked_bank_routing_number'] = $this->maskedBankRoutingNumber;
        }
        $json['masked_bank_account_number']     = $this->maskedBankAccountNumber;
        if (isset($this->bankAccountType)) {
            $json['bank_account_type']          = BankAccountType::checkValue($this->bankAccountType);
        }
        if (isset($this->bankAccountHolderType)) {
            $json['bank_account_holder_type']   = BankAccountHolderType::checkValue($this->bankAccountHolderType);
        }
        $json['payment_type']                   = PaymentType::checkValue($this->paymentType);
        if (isset($this->verified)) {
            $json['verified']                   = $this->verified;
        }
        if (!empty($this->siteGatewaySettingId)) {
            $json['site_gateway_setting_id']    = $this->siteGatewaySettingId['value'];
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']             = $this->gatewayHandle['value'];
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
