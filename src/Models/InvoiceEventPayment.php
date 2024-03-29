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
 * @discriminatorType Invoice Event Payment
 */
class InvoiceEventPayment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $maskedAccountNumber;

    /**
     * @var string|null
     */
    private $maskedRoutingNumber;

    /**
     * @var string|null
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
     * @var string|null
     */
    private $maskedCardNumber;

    /**
     * @var array
     */
    private $details = [];

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var array
     */
    private $memo = [];

    /**
     * @var string|null
     */
    private $email;

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
    public function getMaskedAccountNumber(): ?string
    {
        return $this->maskedAccountNumber;
    }

    /**
     * Sets Masked Account Number.
     *
     * @maps masked_account_number
     */
    public function setMaskedAccountNumber(?string $maskedAccountNumber): void
    {
        $this->maskedAccountNumber = $maskedAccountNumber;
    }

    /**
     * Returns Masked Routing Number.
     */
    public function getMaskedRoutingNumber(): ?string
    {
        return $this->maskedRoutingNumber;
    }

    /**
     * Sets Masked Routing Number.
     *
     * @maps masked_routing_number
     */
    public function setMaskedRoutingNumber(?string $maskedRoutingNumber): void
    {
        $this->maskedRoutingNumber = $maskedRoutingNumber;
    }

    /**
     * Returns Card Brand.
     */
    public function getCardBrand(): ?string
    {
        return $this->cardBrand;
    }

    /**
     * Sets Card Brand.
     *
     * @maps card_brand
     */
    public function setCardBrand(?string $cardBrand): void
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
    public function getMaskedCardNumber(): ?string
    {
        return $this->maskedCardNumber;
    }

    /**
     * Sets Masked Card Number.
     *
     * @maps masked_card_number
     */
    public function setMaskedCardNumber(?string $maskedCardNumber): void
    {
        $this->maskedCardNumber = $maskedCardNumber;
    }

    /**
     * Returns Details.
     */
    public function getDetails(): ?string
    {
        if (count($this->details) == 0) {
            return null;
        }
        return $this->details['value'];
    }

    /**
     * Sets Details.
     *
     * @maps details
     */
    public function setDetails(?string $details): void
    {
        $this->details['value'] = $details;
    }

    /**
     * Unsets Details.
     */
    public function unsetDetails(): void
    {
        $this->details = [];
    }

    /**
     * Returns Kind.
     */
    public function getKind(): ?string
    {
        return $this->kind;
    }

    /**
     * Sets Kind.
     *
     * @maps kind
     */
    public function setKind(?string $kind): void
    {
        $this->kind = $kind;
    }

    /**
     * Returns Memo.
     */
    public function getMemo(): ?string
    {
        if (count($this->memo) == 0) {
            return null;
        }
        return $this->memo['value'];
    }

    /**
     * Sets Memo.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Returns Email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     *
     * @maps email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['type']                      = $this->type ?? 'Invoice Event Payment';
        if (isset($this->maskedAccountNumber)) {
            $json['masked_account_number'] = $this->maskedAccountNumber;
        }
        if (isset($this->maskedRoutingNumber)) {
            $json['masked_routing_number'] = $this->maskedRoutingNumber;
        }
        if (isset($this->cardBrand)) {
            $json['card_brand']            = $this->cardBrand;
        }
        if (isset($this->cardExpiration)) {
            $json['card_expiration']       = $this->cardExpiration;
        }
        if (!empty($this->lastFour)) {
            $json['last_four']             = $this->lastFour['value'];
        }
        if (isset($this->maskedCardNumber)) {
            $json['masked_card_number']    = $this->maskedCardNumber;
        }
        if (!empty($this->details)) {
            $json['details']               = $this->details['value'];
        }
        if (isset($this->kind)) {
            $json['kind']                  = $this->kind;
        }
        if (!empty($this->memo)) {
            $json['memo']                  = $this->memo['value'];
        }
        if (isset($this->email)) {
            $json['email']                 = $this->email;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
