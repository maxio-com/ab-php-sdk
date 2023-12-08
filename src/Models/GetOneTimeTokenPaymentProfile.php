<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class GetOneTimeTokenPaymentProfile implements \JsonSerializable
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
     * @var string
     */
    private $maskedCardNumber;

    /**
     * @var string
     */
    private $cardType;

    /**
     * @var float
     */
    private $expirationMonth;

    /**
     * @var float
     */
    private $expirationYear;

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
     * @param string $firstName
     * @param string $lastName
     * @param string $maskedCardNumber
     * @param string $cardType
     * @param float $expirationMonth
     * @param float $expirationYear
     * @param string $currentVault
     * @param string $vaultToken
     * @param string $billingAddress
     * @param string $billingCity
     * @param string $billingCountry
     * @param string $billingState
     * @param string $billingZip
     * @param string $paymentType
     * @param bool $disabled
     * @param int $siteGatewaySettingId
     */
    public function __construct(
        string $firstName,
        string $lastName,
        string $maskedCardNumber,
        string $cardType,
        float $expirationMonth,
        float $expirationYear,
        string $currentVault,
        string $vaultToken,
        string $billingAddress,
        string $billingCity,
        string $billingCountry,
        string $billingState,
        string $billingZip,
        string $paymentType,
        bool $disabled,
        int $siteGatewaySettingId
    ) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->maskedCardNumber = $maskedCardNumber;
        $this->cardType = $cardType;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
        $this->currentVault = $currentVault;
        $this->vaultToken = $vaultToken;
        $this->billingAddress = $billingAddress;
        $this->billingCity = $billingCity;
        $this->billingCountry = $billingCountry;
        $this->billingState = $billingState;
        $this->billingZip = $billingZip;
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
     * Returns Masked Card Number.
     */
    public function getMaskedCardNumber(): string
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets Masked Card Number.
     *
     * @required
     * @maps masked_card_number
     */
    public function setMaskedCardNumber(string $maskedCardNumber): void
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }

    /**
     * Returns Card Type.
     */
    public function getCardType(): string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     *
     * @required
     * @maps card_type
     */
    public function setCardType(string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Expiration Month.
     */
    public function getExpirationMonth(): float
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     *
     * @required
     * @maps expiration_month
     */
    public function setExpirationMonth(float $expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     */
    public function getExpirationYear(): float
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     *
     * @required
     * @maps expiration_year
     */
    public function setExpirationYear(float $expirationYear): void
    {
        $this->expirationYear = $expirationYear;
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
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     */
    public function getCurrentVault(): string
    {
        return $this->currentVault;
    }

    /**
     * Sets Current Vault.
     * The vault that stores the payment profile with the provided `vault_token`. Use `bogus` for testing.
     *
     * @required
     * @maps current_vault
     * @factory \AdvancedBillingLib\Models\CurrentVault::checkValue
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
            $json['id']                   = $this->id['value'];
        }
        $json['first_name']               = $this->firstName;
        $json['last_name']                = $this->lastName;
        $json['masked_card_number']       = $this->maskedCardNumber;
        $json['card_type']                = $this->cardType;
        $json['expiration_month']         = $this->expirationMonth;
        $json['expiration_year']          = $this->expirationYear;
        if (!empty($this->customerId)) {
            $json['customer_id']          = $this->customerId['value'];
        }
        $json['current_vault']            = CurrentVault::checkValue($this->currentVault);
        $json['vault_token']              = $this->vaultToken;
        $json['billing_address']          = $this->billingAddress;
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']    = $this->billingAddress2;
        }
        $json['billing_city']             = $this->billingCity;
        $json['billing_country']          = $this->billingCountry;
        $json['billing_state']            = $this->billingState;
        $json['billing_zip']              = $this->billingZip;
        $json['payment_type']             = $this->paymentType;
        $json['disabled']                 = $this->disabled;
        $json['site_gateway_setting_id']  = $this->siteGatewaySettingId;
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token'] = $this->customerVaultToken['value'];
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']       = $this->gatewayHandle['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
