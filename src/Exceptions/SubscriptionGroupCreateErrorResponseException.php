<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SubscriptionGroupCreateErrorResponseException extends ApiException
{
    /**
     * @var \AdvancedBillingLib\Models\SubscriptionGroupMembersArrayError|\AdvancedBillingLib\Models\SubscriptionGroupSingleError|string
     */
    private $errors;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param \AdvancedBillingLib\Models\SubscriptionGroupMembersArrayError|\AdvancedBillingLib\Models\SubscriptionGroupSingleError|string $errors
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        $errors
    ) {
        parent::__construct($reason, $request, $response);
        $this->errors = $errors;
    }

    /**
     * Returns Errors.
     *
     * @return \AdvancedBillingLib\Models\SubscriptionGroupMembersArrayError|\AdvancedBillingLib\Models\SubscriptionGroupSingleError|string
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @required
     * @maps errors
     * @mapsBy oneOf(SubscriptionGroupMembersArrayError,SubscriptionGroupSingleError,string)
     *
     * @param \AdvancedBillingLib\Models\SubscriptionGroupMembersArrayError|\AdvancedBillingLib\Models\SubscriptionGroupSingleError|string $errors
     */
    public function setErrors($errors): void
    {
        $this->errors = $errors;
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
}
