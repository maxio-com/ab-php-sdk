<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Exceptions;

class SubscriptionRemoveCouponErrorsException extends ApiException
{
    /**
     * @var string[]
     */
    private $subscription;

    /**
     * @param string $reason
     * @param \AdvancedBillingLib\Http\HttpRequest $request
     * @param \AdvancedBillingLib\Http\HttpResponse $response
     * @param string[] $subscription
     */
    public function __construct(
        string $reason,
        \AdvancedBillingLib\Http\HttpRequest $request,
        \AdvancedBillingLib\Http\HttpResponse $response,
        array $subscription
    ) {
        parent::__construct($reason, $request, $response);
        $this->subscription = $subscription;
    }

    /**
     * Returns Subscription.
     *
     * @return string[]
     */
    public function getSubscription(): array
    {
        return $this->subscription;
    }

    /**
     * Sets Subscription.
     *
     * @required
     * @maps subscription
     *
     * @param string[] $subscription
     */
    public function setSubscription(array $subscription): void
    {
        $this->subscription = $subscription;
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
