<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPublicKeysMeta;
use AdvancedBillingLib\Models\ListPublicKeysResponse;
use AdvancedBillingLib\Models\PublicKey;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPublicKeysResponse
 *
 * @see ListPublicKeysResponse
 */
class ListPublicKeysResponseBuilder
{
    /**
     * @var ListPublicKeysResponse
     */
    private $instance;

    private function __construct(ListPublicKeysResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Public Keys Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPublicKeysResponse());
    }

    /**
     * Sets chargify js keys field.
     *
     * @param PublicKey[]|null $value
     */
    public function chargifyJsKeys(?array $value): self
    {
        $this->instance->setChargifyJsKeys($value);
        return $this;
    }

    /**
     * Sets meta field.
     *
     * @param ListPublicKeysMeta|null $value
     */
    public function meta(?ListPublicKeysMeta $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new List Public Keys Response object.
     */
    public function build(): ListPublicKeysResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
