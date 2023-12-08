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

class UpdateMetafieldsRequest implements \JsonSerializable
{
    /**
     * @var UpdateMetafield|UpdateMetafield[]|null
     */
    private $metafields;

    /**
     * Returns Metafields.
     *
     * @return UpdateMetafield|UpdateMetafield[]|null
     */
    public function getMetafields()
    {
        return $this->metafields;
    }

    /**
     * Sets Metafields.
     *
     * @maps metafields
     * @mapsBy anyOf(anyOf(UpdateMetafield,UpdateMetafield[]),null)
     *
     * @param UpdateMetafield|UpdateMetafield[]|null $metafields
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
        if (isset($this->metafields)) {
            $json['metafields'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->metafields,
                    'anyOf(anyOf(UpdateMetafield,UpdateMetafield[]),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
