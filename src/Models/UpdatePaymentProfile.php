<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class UpdatePaymentProfile implements \JsonSerializable
{
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
    private $fullNumber;

    /**
     * @var string|null
     */
    private $cardType;

    /**
     * @var string|null
     */
    private $expirationMonth;

    /**
     * @var string|null
     */
    private $expirationYear;

    /**
     * @var string|null
     */
    private $currentVault;

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
    private $billingAddress2 = [];

    /**
     * Returns First Name.
     * The first name of the card holder.
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Sets First Name.
     * The first name of the card holder.
     *
     * @maps first_name
     */
    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Returns Last Name.
     * The last name of the card holder.
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Sets Last Name.
     * The last name of the card holder.
     *
     * @maps last_name
     */
    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * Returns Full Number.
     * The full credit card number
     */
    public function getFullNumber(): ?string
    {
        return $this->fullNumber;
    }

    /**
     * Sets Full Number.
     * The full credit card number
     *
     * @maps full_number
     */
    public function setFullNumber(?string $fullNumber): void
    {
        $this->fullNumber = $fullNumber;
    }

    /**
     * Returns Card Type.
     * The type of card used.
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }

    /**
     * Sets Card Type.
     * The type of card used.
     *
     * @maps card_type
     * @factory \AdvancedBillingLib\Models\CardType::checkValue
     */
    public function setCardType(?string $cardType): void
    {
        $this->cardType = $cardType;
    }

    /**
     * Returns Expiration Month.
     * (Optional when performing an Import via vault_token, required otherwise) The 1- or 2-digit credit
     * card expiration month, as an integer or string, i.e. 5
     */
    public function getExpirationMonth(): ?string
    {
        return $this->expirationMonth;
    }

    /**
     * Sets Expiration Month.
     * (Optional when performing an Import via vault_token, required otherwise) The 1- or 2-digit credit
     * card expiration month, as an integer or string, i.e. 5
     *
     * @maps expiration_month
     */
    public function setExpirationMonth(?string $expirationMonth): void
    {
        $this->expirationMonth = $expirationMonth;
    }

    /**
     * Returns Expiration Year.
     * (Optional when performing a Import via vault_token, required otherwise) The 4-digit credit card
     * expiration year, as an integer or string, i.e. 2012
     */
    public function getExpirationYear(): ?string
    {
        return $this->expirationYear;
    }

    /**
     * Sets Expiration Year.
     * (Optional when performing a Import via vault_token, required otherwise) The 4-digit credit card
     * expiration year, as an integer or string, i.e. 2012
     *
     * @maps expiration_year
     */
    public function setExpirationYear(?string $expirationYear): void
    {
        $this->expirationYear = $expirationYear;
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
     * Returns Billing Address.
     * The credit card or bank account billing street address (i.e. 123 Main St.). This value is merely
     * passed through to the payment gateway.
     */
    public function getBillingAddress(): ?string
    {
        return $this->billingAddress;
    }

    /**
     * Sets Billing Address.
     * The credit card or bank account billing street address (i.e. 123 Main St.). This value is merely
     * passed through to the payment gateway.
     *
     * @maps billing_address
     */
    public function setBillingAddress(?string $billingAddress): void
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * Returns Billing City.
     * The credit card or bank account billing address city (i.e. “Boston”). This value is merely passed
     * through to the payment gateway.
     */
    public function getBillingCity(): ?string
    {
        return $this->billingCity;
    }

    /**
     * Sets Billing City.
     * The credit card or bank account billing address city (i.e. “Boston”). This value is merely passed
     * through to the payment gateway.
     *
     * @maps billing_city
     */
    public function setBillingCity(?string $billingCity): void
    {
        $this->billingCity = $billingCity;
    }

    /**
     * Returns Billing State.
     * The credit card or bank account billing address state (i.e. MA). This value is merely passed through
     * to the payment gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-
     * 1#Current_codes) in order to be valid for tax locale purposes.
     */
    public function getBillingState(): ?string
    {
        return $this->billingState;
    }

    /**
     * Sets Billing State.
     * The credit card or bank account billing address state (i.e. MA). This value is merely passed through
     * to the payment gateway. This must conform to the [ISO_3166-1](https://en.wikipedia.org/wiki/ISO_3166-
     * 1#Current_codes) in order to be valid for tax locale purposes.
     *
     * @maps billing_state
     */
    public function setBillingState(?string $billingState): void
    {
        $this->billingState = $billingState;
    }

    /**
     * Returns Billing Zip.
     * The credit card or bank account billing address zip code (i.e. 12345). This value is merely passed
     * through to the payment gateway.
     */
    public function getBillingZip(): ?string
    {
        return $this->billingZip;
    }

    /**
     * Sets Billing Zip.
     * The credit card or bank account billing address zip code (i.e. 12345). This value is merely passed
     * through to the payment gateway.
     *
     * @maps billing_zip
     */
    public function setBillingZip(?string $billingZip): void
    {
        $this->billingZip = $billingZip;
    }

    /**
     * Returns Billing Country.
     * The credit card or bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.
     * wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to
     * the payment gateway. Some gateways require country codes in a specific format. Please check your
     * gateway’s documentation. If creating an ACH subscription, only US is supported at this time.
     */
    public function getBillingCountry(): ?string
    {
        return $this->billingCountry;
    }

    /**
     * Sets Billing Country.
     * The credit card or bank account billing address country, required in [ISO_3166-1 alpha-2](https://en.
     * wikipedia.org/wiki/ISO_3166-1_alpha-2) format (i.e. “US”). This value is merely passed through to
     * the payment gateway. Some gateways require country codes in a specific format. Please check your
     * gateway’s documentation. If creating an ACH subscription, only US is supported at this time.
     *
     * @maps billing_country
     */
    public function setBillingCountry(?string $billingCountry): void
    {
        $this->billingCountry = $billingCountry;
    }

    /**
     * Returns Billing Address 2.
     * Second line of the customer’s billing address i.e. Apt. 100
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
     * Second line of the customer’s billing address i.e. Apt. 100
     *
     * @maps billing_address_2
     */
    public function setBillingAddress2(?string $billingAddress2): void
    {
        $this->billingAddress2['value'] = $billingAddress2;
    }

    /**
     * Unsets Billing Address 2.
     * Second line of the customer’s billing address i.e. Apt. 100
     */
    public function unsetBillingAddress2(): void
    {
        $this->billingAddress2 = [];
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
        if (isset($this->firstName)) {
            $json['first_name']        = $this->firstName;
        }
        if (isset($this->lastName)) {
            $json['last_name']         = $this->lastName;
        }
        if (isset($this->fullNumber)) {
            $json['full_number']       = $this->fullNumber;
        }
        if (isset($this->cardType)) {
            $json['card_type']         = CardType::checkValue($this->cardType);
        }
        if (isset($this->expirationMonth)) {
            $json['expiration_month']  = $this->expirationMonth;
        }
        if (isset($this->expirationYear)) {
            $json['expiration_year']   = $this->expirationYear;
        }
        if (isset($this->currentVault)) {
            $json['current_vault']     = CurrentVault::checkValue($this->currentVault);
        }
        if (isset($this->billingAddress)) {
            $json['billing_address']   = $this->billingAddress;
        }
        if (isset($this->billingCity)) {
            $json['billing_city']      = $this->billingCity;
        }
        if (isset($this->billingState)) {
            $json['billing_state']     = $this->billingState;
        }
        if (isset($this->billingZip)) {
            $json['billing_zip']       = $this->billingZip;
        }
        if (isset($this->billingCountry)) {
            $json['billing_country']   = $this->billingCountry;
        }
        if (!empty($this->billingAddress2)) {
            $json['billing_address_2'] = $this->billingAddress2['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
