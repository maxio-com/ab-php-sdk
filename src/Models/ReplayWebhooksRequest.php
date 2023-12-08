<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ReplayWebhooksRequest implements \JsonSerializable
{
    /**
     * @var int[]
     */
    private $ids;

    /**
     * @param int[] $ids
     */
    public function __construct(array $ids)
    {
        $this->ids = $ids;
    }

    /**
     * Returns Ids.
     *
     * @return int[]
     */
    public function getIds(): array
    {
        return $this->ids;
    }

    /**
     * Sets Ids.
     *
     * @required
     * @maps ids
     *
     * @param int[] $ids
     */
    public function setIds(array $ids): void
    {
        $this->ids = $ids;
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
        $json['ids'] = $this->ids;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
