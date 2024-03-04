<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class IssueServiceCreditRequest implements \JsonSerializable
{
    /**
     * @var IssueServiceCredit
     */
    private $serviceCredit;

    /**
     * @param IssueServiceCredit $serviceCredit
     */
    public function __construct(IssueServiceCredit $serviceCredit)
    {
        $this->serviceCredit = $serviceCredit;
    }

    /**
     * Returns Service Credit.
     */
    public function getServiceCredit(): IssueServiceCredit
    {
        return $this->serviceCredit;
    }

    /**
     * Sets Service Credit.
     *
     * @required
     * @maps service_credit
     */
    public function setServiceCredit(IssueServiceCredit $serviceCredit): void
    {
        $this->serviceCredit = $serviceCredit;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
        $json['service_credit'] = $this->serviceCredit;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
