<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class MRRResponse implements \JsonSerializable
{
    /**
     * @var MRR
     */
    private $mrr;

    /**
     * @param MRR $mrr
     */
    public function __construct(MRR $mrr)
    {
        $this->mrr = $mrr;
    }

    /**
     * Returns Mrr.
     */
    public function getMrr(): MRR
    {
        return $this->mrr;
    }

    /**
     * Sets Mrr.
     *
     * @required
     * @maps mrr
     */
    public function setMrr(MRR $mrr): void
    {
        $this->mrr = $mrr;
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
        $json['mrr'] = $this->mrr;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
