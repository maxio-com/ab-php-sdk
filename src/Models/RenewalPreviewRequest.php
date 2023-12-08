<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RenewalPreviewRequest implements \JsonSerializable
{
    /**
     * @var RenewalPreviewComponent[]|null
     */
    private $components;

    /**
     * Returns Components.
     * An optional array of component definitions to preview. Providing any component definitions here will
     * override the actual components on the subscription (and their quantities), and the billing preview
     * will contain only these components (in addition to any product base fees).
     *
     * @return RenewalPreviewComponent[]|null
     */
    public function getComponents(): ?array
    {
        return $this->components;
    }

    /**
     * Sets Components.
     * An optional array of component definitions to preview. Providing any component definitions here will
     * override the actual components on the subscription (and their quantities), and the billing preview
     * will contain only these components (in addition to any product base fees).
     *
     * @maps components
     *
     * @param RenewalPreviewComponent[]|null $components
     */
    public function setComponents(?array $components): void
    {
        $this->components = $components;
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
        if (isset($this->components)) {
            $json['components'] = $this->components;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
