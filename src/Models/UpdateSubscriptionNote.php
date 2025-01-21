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
     * Converts the UpdateSubscriptionNote object to a human-readable string representation.
     *
     * @return string The string representation of the UpdateSubscriptionNote object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'UpdateSubscriptionNote',
            [
                'body' => $this->body,
                'sticky' => $this->sticky,
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
        $json['body']   = $this->body;
        $json['sticky'] = $this->sticky;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
