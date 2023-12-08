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

class CreateMetafieldsRequest implements \JsonSerializable
{
    /**
     * @var CreateMetafield|CreateMetafield[]
     */
    private $metafields;

    /**
     * @param CreateMetafield|CreateMetafield[] $metafields
     */
    public function __construct($metafields)
    {
        $this->metafields = $metafields;
    }

    /**
     * Returns Metafields.
     *
     * @return CreateMetafield|CreateMetafield[]
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     *
     * @required
     * @maps metafields
     * @mapsBy anyOf(CreateMetafield,CreateMetafield[])
     *
     * @param CreateMetafield|CreateMetafield[] $metafields
     */
    public function setMetafields($metafields): void
    {
        $this->metafields = $metafields;
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
        $json['metafields'] =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->metafields,
                'anyOf(CreateMetafield,CreateMetafield[])'
            );

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
