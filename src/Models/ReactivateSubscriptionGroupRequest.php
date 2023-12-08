<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class ReactivateSubscriptionGroupRequest implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $resume;

    /**
     * @var bool|null
     */
    private $resumeMembers;

    /**
     * Returns Resume.
     */
    public function getResume(): ?bool
    {
        return $this->resume;
    }

    /**
     * Sets Resume.
     *
     * @maps resume
     */
    public function setResume(?bool $resume): void
    {
        $this->resume = $resume;
    }

    /**
     * Returns Resume Members.
     */
    public function getResumeMembers(): ?bool
    {
        return $this->resumeMembers;
    }

    /**
     * Sets Resume Members.
     *
     * @maps resume_members
     */
    public function setResumeMembers(?bool $resumeMembers): void
    {
        $this->resumeMembers = $resumeMembers;
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
        if (isset($this->resume)) {
            $json['resume']         = $this->resume;
        }
        if (isset($this->resumeMembers)) {
            $json['resume_members'] = $this->resumeMembers;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
