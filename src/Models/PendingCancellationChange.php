<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class PendingCancellationChange implements \JsonSerializable
{
    /**
     * @var string
     */
    private $cancellationState;

    /**
     * @var \DateTime
     */
    private $cancelsAt;

    /**
     * @param string $cancellationState
     * @param \DateTime $cancelsAt
     */
    public function __construct(string $cancellationState, \DateTime $cancelsAt)
    {
        $this->cancellationState = $cancellationState;
        $this->cancelsAt = $cancelsAt;
    }

    /**
     * Returns Cancellation State.
     */
    public function getCancellationState(): string
    {
        return $this->cancellationState;
    }

    /**
     * Sets Cancellation State.
     *
     * @required
     * @maps cancellation_state
     */
    public function setCancellationState(string $cancellationState): void
    {
        $this->cancellationState = $cancellationState;
    }

    /**
     * Returns Cancels At.
     */
    public function getCancelsAt(): \DateTime
    {
        return $this->cancelsAt;
    }

    /**
     * Sets Cancels At.
     *
     * @required
     * @maps cancels_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCancelsAt(\DateTime $cancelsAt): void
    {
        $this->cancelsAt = $cancelsAt;
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
        $json['cancellation_state'] = $this->cancellationState;
        $json['cancels_at']         = DateTimeHelper::toRfc3339DateTime($this->cancelsAt);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
