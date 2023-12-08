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

class AddSubscriptionToAGroup implements \JsonSerializable
{
    /**
     * @var GroupSettings|bool|null
     */
    private $group;

    /**
     * Returns Group.
     *
     * @return GroupSettings|bool|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets Group.
     *
     * @maps group
     * @mapsBy anyOf(oneOf(GroupSettings,bool),null)
     *
     * @param GroupSettings|bool|null $group
     */
    public function setGroup($group): void
    {
        $this->group = $group;
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
        if (isset($this->group)) {
            $json['group'] =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->group,
                    'anyOf(oneOf(GroupSettings,bool),null)'
                );
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
