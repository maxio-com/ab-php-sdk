<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class InvoicePaymentMethod implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $details;

    /**
     * @var string|null
     */
    private $kind;

    /**
     * @var string|null
     */
    private $memo;

    /**
     * @var string|null
     */
    private $type;

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
        if (isset($this->details)) {
            $json['details']            = $this->details;
        }
        if (isset($this->kind)) {
            $json['kind']               = $this->kind;
        }
        if (isset($this->memo)) {
            $json['memo']               = $this->memo;
        }
        if (isset($this->type)) {
            $json['type']               = $this->type;
        }
        if (isset($this->cardBrand)) {
            $json['card_brand']         = $this->cardBrand;
        }
        if (isset($this->cardExpiration)) {
            $json['card_expiration']    = $this->cardExpiration;
        }
        if (!empty($this->lastFour)) {
            $json['last_four']          = $this->lastFour['value'];
        }
        if (isset($this->maskedCardNumber)) {
            $json['masked_card_number'] = $this->maskedCardNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
