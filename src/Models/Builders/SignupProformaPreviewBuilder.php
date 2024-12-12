<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ProformaInvoice;
use AdvancedBillingLib\Models\SignupProformaPreview;
use Core\Utils\CoreHelper;

/**
 * Builder for model SignupProformaPreview
 *
 * @see SignupProformaPreview
 */
class SignupProformaPreviewBuilder
{
    /**
     * @var SignupProformaPreview
     */
    private $instance;

    private function __construct(SignupProformaPreview $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Signup Proforma Preview Builder object.
     */
    public static function init(): self
    {
        return new self(new SignupProformaPreview());
    }

    /**
     * Sets current proforma invoice field.
     *
     * @param ProformaInvoice|null $value
     */
    public function currentProformaInvoice(?ProformaInvoice $value): self
    {
        $this->instance->setCurrentProformaInvoice($value);
        return $this;
    }

    /**
     * Sets next proforma invoice field.
     *
     * @param ProformaInvoice|null $value
     */
    public function nextProformaInvoice(?ProformaInvoice $value): self
    {
        $this->instance->setNextProformaInvoice($value);
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
     * Initializes a new Signup Proforma Preview object.
     */
    public function build(): SignupProformaPreview
    {
        return CoreHelper::clone($this->instance);
    }
}
