<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RenewalPreviewResponse implements \JsonSerializable
{
    /**
     * @var RenewalPreview
     */
    private $renewalPreview;

    /**
     * @param RenewalPreview $renewalPreview
     */
    public function __construct(RenewalPreview $renewalPreview)
    {
        $this->renewalPreview = $renewalPreview;
    }

    /**
     * Returns Renewal Preview.
     */
    public function getRenewalPreview(): RenewalPreview
    {
        return $this->renewalPreview;
    }

    /**
     * Sets Renewal Preview.
     *
     * @required
     * @maps renewal_preview
     */
    public function setRenewalPreview(RenewalPreview $renewalPreview): void
    {
        $this->renewalPreview = $renewalPreview;
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
        $json['renewal_preview'] = $this->renewalPreview;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
