<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateCustomerRequest implements \JsonSerializable
{
    /**
     * @var CreateCustomer
     */
    private $customer;

    /**
     * @param CreateCustomer $customer
     */
    public function __construct(CreateCustomer $customer)
    {
        $this->customer = $customer;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): CreateCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @required
     * @maps customer
     */
    public function setCustomer(CreateCustomer $customer): void
    {
        $this->customer = $customer;
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
        $json['customer'] = $this->customer;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
