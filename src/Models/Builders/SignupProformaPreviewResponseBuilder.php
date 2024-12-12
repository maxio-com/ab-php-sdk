<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SignupProformaPreview;
use AdvancedBillingLib\Models\SignupProformaPreviewResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model SignupProformaPreviewResponse
 *
 * @see SignupProformaPreviewResponse
 */
class SignupProformaPreviewResponseBuilder
{
    /**
     * @var SignupProformaPreviewResponse
     */
    private $instance;

    private function __construct(SignupProformaPreviewResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Signup Proforma Preview Response Builder object.
     *
     * @param SignupProformaPreview $proformaInvoicePreview
     */
    public static function init(SignupProformaPreview $proformaInvoicePreview): self
    {
        return new self(new SignupProformaPreviewResponse($proformaInvoicePreview));
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
     * Initializes a new Signup Proforma Preview Response object.
     */
    public function build(): SignupProformaPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
