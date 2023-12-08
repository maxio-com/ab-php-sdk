<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ListOffersResponse implements \JsonSerializable
{
    /**
     * @var Offer[]|null
     */
    private $offers;

    /**
     * Returns Offers.
     *
     * @return Offer[]|null
     */
    public function getOffers(): ?array
    {
        return $this->offers;
    }

    /**
     * Sets Offers.
     *
     * @maps offers
     *
     * @param Offer[]|null $offers
     */
    public function setOffers(?array $offers): void
    {
        $this->offers = $offers;
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
        if (isset($this->offers)) {
            $json['offers'] = $this->offers;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
