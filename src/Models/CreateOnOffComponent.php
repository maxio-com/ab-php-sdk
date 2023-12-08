<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateOnOffComponent implements \JsonSerializable
{
    /**
     * @var OnOffComponent
     */
    private $onOffComponent;

    /**
     * @param OnOffComponent $onOffComponent
     */
    public function __construct(OnOffComponent $onOffComponent)
    {
        $this->onOffComponent = $onOffComponent;
    }

    /**
     * Returns On Off Component.
     */
    public function getOnOffComponent(): OnOffComponent
    {
        return $this->onOffComponent;
    }

    /**
     * Sets On Off Component.
     *
     * @required
     * @maps on_off_component
     */
    public function setOnOffComponent(OnOffComponent $onOffComponent): void
    {
        $this->onOffComponent = $onOffComponent;
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
        $json['on_off_component'] = $this->onOffComponent;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
