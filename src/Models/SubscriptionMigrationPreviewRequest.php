<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionMigrationPreviewRequest implements \JsonSerializable
{
    /**
     * @var SubscriptionMigrationPreviewOptions
     */
    private $migration;

    /**
     * @param SubscriptionMigrationPreviewOptions $migration
     */
    public function __construct(SubscriptionMigrationPreviewOptions $migration)
    {
        $this->migration = $migration;
    }

    /**
     * Returns Migration.
     */
    public function getMigration(): SubscriptionMigrationPreviewOptions
    {
        return $this->migration;
    }

    /**
     * Sets Migration.
     *
     * @required
     * @maps migration
     */
    public function setMigration(SubscriptionMigrationPreviewOptions $migration): void
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
