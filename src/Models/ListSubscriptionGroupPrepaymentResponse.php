<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListSubscriptionGroupPrepaymentResponse implements \JsonSerializable
{
    /**
     * @var ListSubscriptionGroupPrepayment[]
     */
    private $prepayments;

    /**
     * @param ListSubscriptionGroupPrepayment[] $prepayments
     */
    public function __construct(array $prepayments)
    {
        $this->prepayments = $prepayments;
    }

    /**
     * Returns Prepayments.
     *
     * @return ListSubscriptionGroupPrepayment[]
     */
    public function getPrepayments(): array
    {
        return $this->prepayments;
    }

    /**
     * Sets Prepayments.
     *
     * @required
     * @maps prepayments
     *
     * @param ListSubscriptionGroupPrepayment[] $prepayments
     */
    public function setPrepayments(array $prepayments): void
    {
        $this->prepayments = $prepayments;
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
        $json['prepayments'] = $this->prepayments;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
