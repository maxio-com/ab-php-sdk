<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionProductMigrationRequest implements \JsonSerializable
{
    /**
     * @var SubscriptionProductMigration
     */
    private $migration;

    /**
     * @param SubscriptionProductMigration $migration
     */
    public function __construct(SubscriptionProductMigration $migration)
    {
        $this->migration = $migration;
    }

    /**
     * Returns Migration.
     */
    public function getMigration(): SubscriptionProductMigration
    {
        return $this->migration;
    }

    /**
     * Sets Migration.
     *
     * @required
     * @maps migration
     */
    public function setMigration(SubscriptionProductMigration $migration): void
    {
        $this->migration = $migration;
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
        $json['migration'] = $this->migration;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
