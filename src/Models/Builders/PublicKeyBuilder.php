<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PublicKey;
use Core\Utils\CoreHelper;

/**
 * Builder for model PublicKey
 *
 * @see PublicKey
 */
class PublicKeyBuilder
{
    /**
     * @var PublicKey
     */
    private $instance;

    private function __construct(PublicKey $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Public Key Builder object.
     */
    public static function init(): self
    {
        return new self(new PublicKey());
    }

    /**
     * Sets public key field.
     *
     * @param string|null $value
     */
    public function publicKey(?string $value): self
    {
        $this->instance->setPublicKey($value);
        return $this;
    }

    /**
     * Sets requires security token field.
     *
     * @param bool|null $value
     */
    public function requiresSecurityToken(?bool $value): self
    {
        $this->instance->setRequiresSecurityToken($value);
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
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
     * Initializes a new Public Key object.
     */
    public function build(): PublicKey
    {
        return CoreHelper::clone($this->instance);
    }
}
