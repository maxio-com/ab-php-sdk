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
     * @mapsBy anyOf(oneOf(UpdateMetafield,UpdateMetafield[]),null)
     *
     * @param UpdateMetafield|UpdateMetafield[]|null $metafields
     */
    public function setMetafields($metafields): void
    {
        $this->metafields = $metafields;
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
        if (isset($this->metafields)) {
            $json['metafields'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->metafields,
                    'anyOf(oneOf(UpdateMetafield,UpdateMetafield[]),null)'
                );
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
