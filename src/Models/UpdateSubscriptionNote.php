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
 * Updatable fields for Subscription Note
 */
class UpdateSubscriptionNote implements \JsonSerializable
{
    /**
     * @var string
     */
    private $body;

    /**
     * @var bool
     */
    private $sticky;

    /**
     * @param string $body
     * @param bool $sticky
     */
    public function __construct(string $body, bool $sticky)
    {
        $this->body = $body;
        $this->sticky = $sticky;
    }

    /**
     * Returns Body.
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Sets Body.
     *
     * @required
     * @maps body
     */
    public function setBody(string $body): void
    {
        $this->body = $body;
    }

    /**
     * Returns Sticky.
     */
    public function getSticky(): bool
    {
        return $this->sticky;
    }

    /**
     * Sets Sticky.
     *
     * @required
     * @maps sticky
     */
    public function setSticky(bool $sticky): void
    {
        $this->sticky = $sticky;
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
        $json['body']   = $this->body;
        $json['sticky'] = $this->sticky;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
