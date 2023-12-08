<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CancellationOptions implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $cancellationMessage;

    /**
     * @var string|null
     */
    private $reasonCode;

    /**
     * Returns Cancellation Message.
     * For your internal use. An indication as to why the subscription is being canceled.
     */
    public function getCancellationMessage(): ?string
    {
        return $this->cancellationMessage;
    }

    /**
     * Sets Cancellation Message.
     * For your internal use. An indication as to why the subscription is being canceled.
     *
     * @maps cancellation_message
     */
    public function setCancellationMessage(?string $cancellationMessage): void
    {
        $this->cancellationMessage = $cancellationMessage;
    }

    /**
     * Returns Reason Code.
     * The reason code associated with the cancellation. See the list of reason codes associated with your
     * site.
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * Sets Reason Code.
     * The reason code associated with the cancellation. See the list of reason codes associated with your
     * site.
     *
     * @maps reason_code
     */
    public function setReasonCode(?string $reasonCode): void
    {
        $this->reasonCode = $reasonCode;
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
        if (isset($this->cancellationMessage)) {
            $json['cancellation_message'] = $this->cancellationMessage;
        }
        if (isset($this->reasonCode)) {
            $json['reason_code']          = $this->reasonCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
