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
     * Converts the SubscriptionProductMigrationRequest object to a human-readable string representation.
     *
     * @return string The string representation of the SubscriptionProductMigrationRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'SubscriptionProductMigrationRequest',
            ['migration' => $this->migration, 'additionalProperties' => $this->additionalProperties]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
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
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
