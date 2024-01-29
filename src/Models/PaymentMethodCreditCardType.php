<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PaymentMethodCreditCardType implements \JsonSerializable
{
    /**
     * @var string
     */
    private $cardBrand;

    /**
     * @var string|null
     */
    private $cardExpiration;

    /**
     * @var array
     */
    private $lastFour = [];

    /**
     * @var string
     */
    private $maskedCardNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @param string $cardBrand
     * @param string $maskedCardNumber
     * @param string $type
     */
    public function __construct(string $cardBrand, string $maskedCardNumber, string $type)
    {
        $this->cardBrand = $cardBrand;
        $this->maskedCardNumber = $maskedCardNumber;
        $this->type = $type;
    }

    /**
     * Returns Card Brand.
     */
    public function getCardBrand(): string
    {
        return $this->cardBrand;
    }

    /**
     * Sets Card Brand.
     *
     * @required
     * @maps card_brand
     */
    public function setCardBrand(string $cardBrand): void
    {
        $this->cardBrand = $cardBrand;
    }

    /**
     * Returns Card Expiration.
     */
    public function getCardExpiration(): ?string
    {
        return $this->cardExpiration;
    }

    /**
     * Sets Card Expiration.
     *
     * @maps card_expiration
     */
    public function setCardExpiration(?string $cardExpiration): void
    {
        $this->cardExpiration = $cardExpiration;
    }

    /**
     * Returns Last Four.
     */
    public function getLastFour(): ?string
    {
        if (count($this->lastFour) == 0) {
            return null;
        }
        return $this->lastFour['value'];
    }

    /**
     * Sets Last Four.
     *
     * @maps last_four
     */
    public function setLastFour(?string $lastFour): void
    {
        $this->lastFour['value'] = $lastFour;
    }

    /**
     * Unsets Last Four.
     */
    public function unsetLastFour(): void
    {
        $this->lastFour = [];
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
     * Returns Type.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @required
     * @maps type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
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
        $json['card_brand']          = $this->cardBrand;
        if (isset($this->cardExpiration)) {
            $json['card_expiration'] = $this->cardExpiration;
        }
        if (!empty($this->lastFour)) {
            $json['last_four']       = $this->lastFour['value'];
        }
        $json['masked_card_number']  = $this->maskedCardNumber;
        $json['type']                = $this->type;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
