<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class PrepaidConfigurationResponse implements \JsonSerializable
{
    /**
     * @var PrepaidConfiguration
     */
    private $prepaidConfiguration;

    /**
     * @param PrepaidConfiguration $prepaidConfiguration
     */
    public function __construct(PrepaidConfiguration $prepaidConfiguration)
    {
        $this->prepaidConfiguration = $prepaidConfiguration;
    }

    /**
     * Returns Prepaid Configuration.
     */
    public function getPrepaidConfiguration(): PrepaidConfiguration
    {
        return $this->prepaidConfiguration;
    }

    /**
     * Sets Prepaid Configuration.
     *
     * @required
     * @maps prepaid_configuration
     */
    public function setPrepaidConfiguration(PrepaidConfiguration $prepaidConfiguration): void
    {
        $this->prepaidConfiguration = $prepaidConfiguration;
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
        $json['prepaid_configuration'] = $this->prepaidConfiguration;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
