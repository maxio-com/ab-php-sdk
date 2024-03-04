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
        if (isset($this->resume)) {
            $json['resume']         = $this->resume;
        }
        if (isset($this->resumeMembers)) {
            $json['resume_members'] = $this->resumeMembers;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
