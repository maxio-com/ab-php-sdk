<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * A nested data structure detailing the method of payment
 *
 * @discriminator type
 * @discriminatorType Invoice Event Payment1
 */
class InvoiceEventPayment1 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string
     */
    private $maskedAccountNumber;

    /**
     * @var string
     */
    private $maskedRoutingNumber;

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
     * @var string|null
     */
    private $details;

    /**
     * @var string
     */
    private $kind;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string
     */
    private $email;

    /**
     * @param string $maskedAccountNumber
     * @param string $maskedRoutingNumber
     * @param string $cardBrand
     * @param string $maskedCardNumber
     * @param string $kind
     * @param string $email
     */
    public function __construct(
        string $maskedAccountNumber,
        string $maskedRoutingNumber,
        string $cardBrand,
        string $maskedCardNumber,
        string $kind,
        string $email
    ) {
        $this->maskedAccountNumber = $maskedAccountNumber;
        $this->maskedRoutingNumber = $maskedRoutingNumber;
        $this->cardBrand = $cardBrand;
        $this->maskedCardNumber = $maskedCardNumber;
        $this->kind = $kind;
        $this->email = $email;
    }

    /**
     * Returns Type.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     *
     * @maps type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Masked Account Number.
     */
    public function getMaskedAccountNumber(): string
    {
        return $this->maskedAccountNumber;
    }

    /**
     * Sets Masked Account Number.
     *
     * @required
     * @maps masked_account_number
     */
    public function setMaskedAccountNumber(string $maskedAccountNumber): void
    {
        $this->maskedAccountNumber = $maskedAccountNumber;
    }

    /**
     * Returns Masked Routing Number.
     */
    public function getMaskedRoutingNumber(): string
    {
        return $this->maskedRoutingNumber;
    }

    /**
     * Sets Masked Routing Number.
     *
     * @required
     * @maps masked_routing_number
     */
    public function setMaskedRoutingNumber(string $maskedRoutingNumber): void
    {
        $this->maskedRoutingNumber = $maskedRoutingNumber;
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
     * Returns Details.
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * Sets Details.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * Returns Kind.
     */
    public function getKind(): string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @required
     * @maps kind
     */
    public function setKind(string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        return $this->memo;
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo = $memo;
    }

    /**
     * Returns Email.
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @required
     * @maps email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
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
        $json['type']                  = $this->type ?? 'Invoice Event Payment1';
        $json['masked_account_number'] = $this->maskedAccountNumber;
        $json['masked_routing_number'] = $this->maskedRoutingNumber;
        $json['card_brand']            = $this->cardBrand;
        if (isset($this->cardExpiration)) {
            $json['card_expiration']   = $this->cardExpiration;
        }
        if (!empty($this->lastFour)) {
            $json['last_four']         = $this->lastFour['value'];
        }
        $json['masked_card_number']    = $this->maskedCardNumber;
        $json['details']               = $this->details;
        $json['kind']                  = $this->kind;
        $json['memo']                  = $this->memo;
        $json['email']                 = $this->email;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
