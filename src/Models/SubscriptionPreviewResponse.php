<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SubscriptionPreviewResponse implements \JsonSerializable
{
    /**
     * @var SubscriptionPreview
     */
    private $subscriptionPreview;

    /**
     * @param SubscriptionPreview $subscriptionPreview
     */
    public function __construct(SubscriptionPreview $subscriptionPreview)
    {
        $this->subscriptionPreview = $subscriptionPreview;
    }

    /**
     * Returns Subscription Preview.
     */
    public function getSubscriptionPreview(): SubscriptionPreview
    {
        return $this->subscriptionPreview;
    }

    /**
     * Sets Subscription Preview.
     *
     * @required
     * @maps subscription_preview
     */
    public function setSubscriptionPreview(SubscriptionPreview $subscriptionPreview): void
    {
        $this->subscriptionPreview = $subscriptionPreview;
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
        $json['subscription_preview'] = $this->subscriptionPreview;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
