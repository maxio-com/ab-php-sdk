<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Adjustment;
use Core\Utils\CoreHelper;

/**
 * Builder for model Adjustment
 *
 * @see Adjustment
 */
class AdjustmentBuilder
{
    /**
     * @var Adjustment
     */
    private $instance;

    private function __construct(Adjustment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Adjustment Builder object.
     *
     * @param string|int $amount
     * @param string $reason
     */
    public static function init($amount, string $reason): self
    {
        return new self(new Adjustment($amount, $reason));
    }

    /**
     * Sets grant id field.
     *
     * @param int|null $value
     */
    public function grantId(?int $value): self
    {
        $this->instance->setGrantId($value);
        return $this;
    }

    /**
     * Unsets grant id field.
     */
    public function unsetGrantId(): self
    {
        $this->instance->unsetGrantId();
        return $this;
    }

    /**
     * Sets source transaction id field.
     *
     * @param int|null $value
     */
    public function sourceTransactionId(?int $value): self
    {
        $this->instance->setSourceTransactionId($value);
        return $this;
    }

    /**
     * Unsets source transaction id field.
     */
    public function unsetSourceTransactionId(): self
    {
        $this->instance->unsetSourceTransactionId();
        return $this;
    }

    /**
     * Sets expected remaining field.
     *
     * @param string|null $value
     */
    public function expectedRemaining(?string $value): self
    {
        $this->instance->setExpectedRemaining($value);
        return $this;
    }

    /**
     * Unsets expected remaining field.
     */
    public function unsetExpectedRemaining(): self
    {
        $this->instance->unsetExpectedRemaining();
        return $this;
    }

    /**
     * Sets expected source corrections field.
     *
     * @param string|null $value
     */
    public function expectedSourceCorrections(?string $value): self
    {
        $this->instance->setExpectedSourceCorrections($value);
        return $this;
    }

    /**
     * Unsets expected source corrections field.
     */
    public function unsetExpectedSourceCorrections(): self
    {
        $this->instance->unsetExpectedSourceCorrections();
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
     * Initializes a new Adjustment object.
     */
    public function build(): Adjustment
    {
        return CoreHelper::clone($this->instance);
    }
}
