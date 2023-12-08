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

class SubscriptionGroupCreditCard implements \JsonSerializable
{
    /**
     * @var string|int|null
     */
    private $fullNumber;

    /**
     * @var string|int|null
     */
    private $expirationMonth;

    /**
     * @var string|int|null
     */
    private $expirationYear;

    /**
     * @var string|null
     */
    private $chargifyToken;

    /**
     * @var string|null
     */
    private $vaultToken;

    /**
     * @var string|null
     */
    private $currentVault;

    /**
     * @var string|null
     */
    private $gatewayHandle;

    /**
     * @var string|null
     */
    private $firstName;

    /**
     * @var string|null
     */
    private $lastName;

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
    private $lastFour;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var string|null
     */
    private $customerVaultToken;

    /**
     * @var string|null
     */
    private $cvv;

    /**
     * @var string|null
     */
    private $paymentType;

    /**
     * Returns Full Number.
     *
     * @return string|int|null
     */
    public function getFullNumber()
    {
        return $this->fullNumber;
    }

    /**
     * Sets Full Number.
     *
     * @maps full_number
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $fullNumber
     */
    public function setFullNumber($fullNumber): void
    {
        $this->fullNumber = $fullNumber;
    }

    /**
     * Returns Expiration Month.
     *
     * @return string|int|null
     */
    public function getExpirationMonth()
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     *
     * @maps expiration_month
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $expirationMonth
     */
    public function setExpirationMonth($expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     *
     * @return string|int|null
     */
    public function getExpirationYear()
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     *
     * @maps expiration_year
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $expirationYear
     */
    public function setExpirationYear($expirationYear): void
    {
        $this->expirationYear = $expirationYear;
    }

    /**
     * Returns Chargify Token.
     */
    public function getChargifyToken(): ?string
    {
        return $this->chargifyToken;
    }

    /**
     * Sets Chargify Token.
     *
     * @maps chargify_token
     */
    public function setChargifyToken(?string $chargifyToken): void
    {
        $this->chargifyToken = $chargifyToken;
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
     * Returns Last Four.
     */
    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    /**
     * Sets Last Four.
     *
     * @maps last_four
     */
    public function setLastFour(?string $lastFour): void
    {
        $this->lastFour = $lastFour;
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
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Customer Vault Token.
     */
    public function getCustomerVaultToken(): ?string
    {
        return $this->customerVaultToken;
    }

    /**
     * Sets Customer Vault Token.
     *
     * @maps customer_vault_token
     */
    public function setCustomerVaultToken(?string $customerVaultToken): void
    {
        $this->customerVaultToken = $customerVaultToken;
    }

    /**
     * Returns Cvv.
     */
    public function getCvv(): ?string
    {
        return $this->cvv;
    }

    /**
     * Sets Cvv.
     *
     * @maps cvv
     */
    public function setCvv(?string $cvv): void
    {
        $this->cvv = $cvv;
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
        if (isset($this->fullNumber)) {
            $json['full_number']          =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->fullNumber,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month']     =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationMonth,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']      =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationYear,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->chargifyToken)) {
            $json['chargify_token']       = $this->chargifyToken;
        }
        if (isset($this->vaultToken)) {
            $json['vault_token']          = $this->vaultToken;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']        = CurrentVault::checkValue($this->currentVault);
        }
        if (isset($this->gatewayHandle)) {
            $json['gateway_handle']       = $this->gatewayHandle;
        }
        if (isset($this->firstName)) {
            $json['first_name']           = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']            = $this->lastName;
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']      = $this->billingAddress;
        }
        if (isset($this->billingAddress2)) {
            $json['billing_address_2']    = $this->billingAddress2;
        }
        if (isset($this->billingCity)) {
            $json['billing_city']         = $this->billingCity;
        }
        if (isset($this->billingState)) {
            $json['billing_state']        = $this->billingState;
        }
        if (isset($this->billingZip)) {
            $json['billing_zip']          = $this->billingZip;
        }
        if (isset($this->billingCountry)) {
            $json['billing_country']      = $this->billingCountry;
        }
        if (isset($this->lastFour)) {
            $json['last_four']            = $this->lastFour;
        }
        if (isset($this->cardType)) {
            $json['card_type']            = $this->cardType;
        }
        if (isset($this->customerVaultToken)) {
            $json['customer_vault_token'] = $this->customerVaultToken;
        }
        if (isset($this->cvv)) {
            $json['cvv']                  = $this->cvv;
        }
        if (isset($this->paymentType)) {
            $json['payment_type']         = $this->paymentType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
