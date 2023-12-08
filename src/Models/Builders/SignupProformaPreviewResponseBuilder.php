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
     * Initializes a new signup proforma preview response Builder object.
     */
    public static function init(SignupProformaPreview $proformaInvoicePreview): self
    {
        return new self(new SignupProformaPreviewResponse($proformaInvoicePreview));
    }

    /**
     * Initializes a new signup proforma preview response object.
     */
    public function build(): SignupProformaPreviewResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
