<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\BaseStringError;
use AdvancedBillingLib\Models\ProformaError;
use Core\Utils\CoreHelper;

/**
 * Builder for model ProformaError
 *
 * @see ProformaError
 */
class ProformaErrorBuilder
{
    /**
     * @var ProformaError
     */
    private $instance;

    private function __construct(ProformaError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Proforma Error Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaError());
    }

    /**
     * Sets subscription field.
     *
     * @param BaseStringError|null $value
     */
    public function subscription(?BaseStringError $value): self
    {
        $this->instance->setSubscription($value);
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
     * Initializes a new Proforma Error object.
     */
    public function build(): ProformaError
    {
        return CoreHelper::clone($this->instance);
    }
}
