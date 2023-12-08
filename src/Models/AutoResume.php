<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class AutoResume implements \JsonSerializable
{
    /**
     * @var array
     */
    private $automaticallyResumeAt = [];

    /**
     * Returns Automatically Resume At.
     */
    public function getAutomaticallyResumeAt(): ?\DateTime
    {
        if (count($this->automaticallyResumeAt) == 0) {
            return null;
        }
        return $this->automaticallyResumeAt['value'];
    }

    /**
     * Sets Automatically Resume At.
     *
     * @maps automatically_resume_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setAutomaticallyResumeAt(?\DateTime $automaticallyResumeAt): void
    {
        $this->automaticallyResumeAt['value'] = $automaticallyResumeAt;
    }

    /**
     * Unsets Automatically Resume At.
     */
    public function unsetAutomaticallyResumeAt(): void
    {
        $this->automaticallyResumeAt = [];
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
        if (!empty($this->automaticallyResumeAt)) {
            $json['automatically_resume_at'] = DateTimeHelper::toRfc3339DateTime($this->automaticallyResumeAt['value']);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
