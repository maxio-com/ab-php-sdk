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

class SubscriptionGroupPrepaymentResponse implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var int|null
     */
    private $amountInCents;

    /**
     * @var int|null
     */
    private $endingBalanceInCents;

    /**
     * @var string|null
     */
    private $entryType;

    /**
     * @var array
     */
    private $memo = [];

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
     * Returns Amount in Cents.
     * The amount in cents of the entry.
     */
    public function getAmountInCents(): ?int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     * The amount in cents of the entry.
     *
     * @maps amount_in_cents
     */
    public function setAmountInCents(?int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Ending Balance in Cents.
     * The ending balance in cents of the account.
     */
    public function getEndingBalanceInCents(): ?int
    {
        return $this->endingBalanceInCents;
    }

    /**
     * Sets Ending Balance in Cents.
     * The ending balance in cents of the account.
     *
     * @maps ending_balance_in_cents
     */
    public function setEndingBalanceInCents(?int $endingBalanceInCents): void
    {
        $this->endingBalanceInCents = $endingBalanceInCents;
    }

    /**
     * Returns Entry Type.
     * The type of entry
     */
    public function getEntryType(): ?string
    {
        return $this->entryType;
    }

    /**
     * Sets Entry Type.
     * The type of entry
     *
     * @maps entry_type
     * @factory \AdvancedBillingLib\Models\ServiceCreditType::checkValue
     */
    public function setEntryType(?string $entryType): void
    {
        $this->entryType = $entryType;
    }

    /**
     * Returns Memo.
     * A memo attached to the entry.
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
     * A memo attached to the entry.
     *
     * @maps memo
     */
    public function setMemo(?string $memo): void
    {
        $this->memo['value'] = $memo;
    }

    /**
     * Unsets Memo.
     * A memo attached to the entry.
     */
    public function unsetMemo(): void
    {
        $this->memo = [];
    }

    /**
     * Converts the SubscriptionGroupPrepaymentResponse object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionGroupPrepaymentResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionGroupPrepaymentResponse',
            [
                'id' => $this->id,
                'amountInCents' => $this->amountInCents,
                'endingBalanceInCents' => $this->endingBalanceInCents,
                'entryType' => $this->entryType,
                'memo' => $this->getMemo(),
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
            $json['id']                      = $this->id;
        }
        if (isset($this->amountInCents)) {
            $json['amount_in_cents']         = $this->amountInCents;
        }
        if (isset($this->endingBalanceInCents)) {
            $json['ending_balance_in_cents'] = $this->endingBalanceInCents;
        }
        if (isset($this->entryType)) {
            $json['entry_type']              = ServiceCreditType::checkValue($this->entryType);
        }
        if (!empty($this->memo)) {
            $json['memo']                    = $this->memo['value'];
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
