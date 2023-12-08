<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CustomerCustomFieldsChange implements \JsonSerializable
{
    /**
     * @var ProformaCustomField[]|null
     */
    private $before;

    /**
     * @var ProformaCustomField[]|null
     */
    private $after;

    /**
     * Returns Before.
     *
     * @return ProformaCustomField[]|null
     */
    public function getBefore(): ?array
    {
        return $this->before;
    }

    /**
     * Sets Before.
     *
     * @maps before
     *
     * @param ProformaCustomField[]|null $before
     */
    public function setBefore(?array $before): void
    {
        $this->before = $before;
    }

    /**
     * Returns After.
     *
     * @return ProformaCustomField[]|null
     */
    public function getAfter(): ?array
    {
        return $this->after;
    }

    /**
     * Sets After.
     *
     * @maps after
     *
     * @param ProformaCustomField[]|null $after
     */
    public function setAfter(?array $after): void
    {
        $this->after = $after;
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
        if (isset($this->before)) {
            $json['before'] = $this->before;
        }
        if (isset($this->after)) {
            $json['after']  = $this->after;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
