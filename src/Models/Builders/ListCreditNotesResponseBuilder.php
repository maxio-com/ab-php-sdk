<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListCreditNotesResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListCreditNotesResponse
 *
 * @see ListCreditNotesResponse
 */
class ListCreditNotesResponseBuilder
{
    /**
     * @var ListCreditNotesResponse
     */
    private $instance;

    private function __construct(ListCreditNotesResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list credit notes response Builder object.
     */
    public static function init(array $creditNotes): self
    {
        return new self(new ListCreditNotesResponse($creditNotes));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new list credit notes response object.
     */
    public function build(): ListCreditNotesResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
