<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionNoteResponse implements \JsonSerializable
{
    /**
     * @var SubscriptionNote
     */
    private $note;

    /**
     * @param SubscriptionNote $note
     */
    public function __construct(SubscriptionNote $note)
    {
        $this->note = $note;
    }

    /**
     * Returns Note.
     */
    public function getNote(): SubscriptionNote
    {
        return $this->note;
    }

    /**
     * Sets Note.
     *
     * @required
     * @maps note
     */
    public function setNote(SubscriptionNote $note): void
    {
        $this->note = $note;
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
        $json['note'] = $this->note;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
