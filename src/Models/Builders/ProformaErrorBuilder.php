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
     * Initializes a new proforma error Builder object.
     */
    public static function init(): self
    {
        return new self(new ProformaError());
    }

    /**
     * Sets subscription field.
     */
    public function subscription(?BaseStringError $value): self
    {
        $this->instance->setSubscription($value);
        return $this;
    }

    /**
     * Initializes a new proforma error object.
     */
    public function build(): ProformaError
    {
        return CoreHelper::clone($this->instance);
    }
}
