<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreditSchemeRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $creditScheme;

    /**
     * @param string $creditScheme
     */
    public function __construct(string $creditScheme)
    {
        $this->creditScheme = $creditScheme;
    }

    /**
     * Returns Credit Scheme.
     */
    public function getCreditScheme(): string
    {
        return $this->creditScheme;
    }

    /**
     * Sets Credit Scheme.
     *
     * @required
     * @maps credit_scheme
     * @factory \AdvancedBillingLib\Models\CreditScheme::checkValue
     */
    public function setCreditScheme(string $creditScheme): void
    {
        $this->creditScheme = $creditScheme;
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
        $json['credit_scheme'] = CreditScheme::checkValue($this->creditScheme);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
