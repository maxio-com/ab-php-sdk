<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditCardPaymentProfile implements \JsonSerializable
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
     * @var string
     */
    private $maskedCardNumber;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var int|null
     */
    private $expirationMonth;

    /**
     * @var int|null
     */
    private $expirationYear;

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
    private $paymentType;

    /**
     * @var bool|null
     */
    private $disabled;

    /**
     * @var int|null
     */
    private $siteGatewaySettingId;

    /**
     * @var array
     */
    private $gatewayHandle = [];

    /**
     * @param string $maskedCardNumber
     */
    public function __construct(string $maskedCardNumber)
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }

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
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     *
     * @maps card_type
     * @factory \AdvancedBillingLib\Models\CardType1::checkValue
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Expiration Month.
     */
    public function getExpirationMonth(): ?int
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     *
     * @maps expiration_month
     */
    public function setExpirationMonth(?int $expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     */
    public function getExpirationYear(): ?int
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     *
     * @maps expiration_year
     */
    public function setExpirationYear(?int $expirationYear): void
    {
        $this->expirationYear = $expirationYear;
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
     * Returns Disabled.
     */
    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }

    /**
     * Sets Disabled.
     *
     * @maps disabled
     */
    public function setDisabled(?bool $disabled): void
    {
        $this->disabled = $disabled;
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
        if (isset($this->id)) {
            $json['id']                      = $this->id;
        }
        if (isset($this->firstName)) {
            $json['first_name']              = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']               = $this->lastName;
        }
        $json['masked_card_number']          = $this->maskedCardNumber;
        if (isset($this->cardType)) {
            $json['card_type']               = CardType1::checkValue($this->cardType);
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month']        = $this->expirationMonth;
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']         = $this->expirationYear;
        }
        if (isset($this->customerId)) {
            $json['customer_id']             = $this->customerId;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']           = CurrentVault::checkValue($this->currentVault);
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']             = $this->vaultToken;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']         = $this->billingAddress;
        }
        if (isset($this->billingCity)) {
            $json['billing_city']            = $this->billingCity;
        }
        if (isset($this->billingState)) {
            $json['billing_state']           = $this->billingState;
        }
        if (isset($this->billingZip)) {
            $json['billing_zip']             = $this->billingZip;
        }
        if (isset($this->billingCountry)) {
            $json['billing_country']         = $this->billingCountry;
        }
        if (!empty($this->customerVaultToken)) {
            $json['customer_vault_token']    = $this->customerVaultToken['value'];
        }
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']       = $this->billingAddress2;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']            = $this->paymentType;
        }
        if (isset($this->disabled)) {
            $json['disabled']                = $this->disabled;
        }
        if (isset($this->siteGatewaySettingId)) {
            $json['site_gateway_setting_id'] = $this->siteGatewaySettingId;
        }
        if (!empty($this->gatewayHandle)) {
            $json['gateway_handle']          = $this->gatewayHandle['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
