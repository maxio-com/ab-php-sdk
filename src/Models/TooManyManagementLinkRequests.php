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

class TooManyManagementLinkRequests implements \JsonSerializable
{
    /**
     * @var string
     */
    private $error;

    /**
     * @var \DateTime
     */
    private $newLinkAvailableAt;

    /**
     * @param string $error
     * @param \DateTime $newLinkAvailableAt
     */
    public function __construct(string $error, \DateTime $newLinkAvailableAt)
    {
        $this->error = $error;
        $this->newLinkAvailableAt = $newLinkAvailableAt;
    }

    /**
     * Returns Error.
     */
    public function getError(): string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @required
     * @maps error
     */
    public function setError(string $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns New Link Available At.
     */
    public function getNewLinkAvailableAt(): \DateTime
    {
        return $this->newLinkAvailableAt;
    }

    /**
     * Sets New Link Available At.
     *
     * @required
     * @maps new_link_available_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setNewLinkAvailableAt(\DateTime $newLinkAvailableAt): void
    {
        $this->newLinkAvailableAt = $newLinkAvailableAt;
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
        $json['error']                 = $this->error;
        $json['new_link_available_at'] = DateTimeHelper::toRfc3339DateTime($this->newLinkAvailableAt);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
