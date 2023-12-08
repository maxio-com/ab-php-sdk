<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class BatchJobResponse implements \JsonSerializable
{
    /**
     * @var BatchJob
     */
    private $batchjob;

    /**
     * @param BatchJob $batchjob
     */
    public function __construct(BatchJob $batchjob)
    {
        $this->batchjob = $batchjob;
    }

    /**
     * Returns Batchjob.
     */
    public function getBatchjob(): BatchJob
    {
        return $this->batchjob;
    }

    /**
     * Sets Batchjob.
     *
     * @required
     * @maps batchjob
     */
    public function setBatchjob(BatchJob $batchjob): void
    {
        $this->batchjob = $batchjob;
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
        $json['batchjob'] = $this->batchjob;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
