<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class NetTerms implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $defaultNetTerms = 0;

    /**
     * @var int|null
     */
    private $automaticNetTerms = 0;

    /**
     * @var int|null
     */
    private $remittanceNetTerms = 0;

    /**
     * @var bool|null
     */
    private $netTermsOnRemittanceSignupsEnabled = false;

    /**
     * @var bool|null
     */
    private $customNetTermsEnabled = false;

    /**
     * Returns Default Net Terms.
     */
    public function getDefaultNetTerms(): ?int
    {
        return $this->defaultNetTerms;
    }

    /**
     * Sets Default Net Terms.
     *
     * @maps default_net_terms
     */
    public function setDefaultNetTerms(?int $defaultNetTerms): void
    {
        $this->defaultNetTerms = $defaultNetTerms;
    }

    /**
     * Returns Automatic Net Terms.
     */
    public function getAutomaticNetTerms(): ?int
    {
        return $this->automaticNetTerms;
    }

    /**
     * Sets Automatic Net Terms.
     *
     * @maps automatic_net_terms
     */
    public function setAutomaticNetTerms(?int $automaticNetTerms): void
    {
        $this->automaticNetTerms = $automaticNetTerms;
    }

    /**
     * Returns Remittance Net Terms.
     */
    public function getRemittanceNetTerms(): ?int
    {
        return $this->remittanceNetTerms;
    }

    /**
     * Sets Remittance Net Terms.
     *
     * @maps remittance_net_terms
     */
    public function setRemittanceNetTerms(?int $remittanceNetTerms): void
    {
        $this->remittanceNetTerms = $remittanceNetTerms;
    }

    /**
     * Returns Net Terms on Remittance Signups Enabled.
     */
    public function getNetTermsOnRemittanceSignupsEnabled(): ?bool
    {
        return $this->netTermsOnRemittanceSignupsEnabled;
    }

    /**
     * Sets Net Terms on Remittance Signups Enabled.
     *
     * @maps net_terms_on_remittance_signups_enabled
     */
    public function setNetTermsOnRemittanceSignupsEnabled(?bool $netTermsOnRemittanceSignupsEnabled): void
    {
        $this->netTermsOnRemittanceSignupsEnabled = $netTermsOnRemittanceSignupsEnabled;
    }

    /**
     * Returns Custom Net Terms Enabled.
     */
    public function getCustomNetTermsEnabled(): ?bool
    {
        return $this->customNetTermsEnabled;
    }

    /**
     * Sets Custom Net Terms Enabled.
     *
     * @maps custom_net_terms_enabled
     */
    public function setCustomNetTermsEnabled(?bool $customNetTermsEnabled): void
    {
        $this->customNetTermsEnabled = $customNetTermsEnabled;
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
        if (isset($this->defaultNetTerms)) {
            $json['default_net_terms']                       = $this->defaultNetTerms;
        }
        if (isset($this->automaticNetTerms)) {
            $json['automatic_net_terms']                     = $this->automaticNetTerms;
        }
        if (isset($this->remittanceNetTerms)) {
            $json['remittance_net_terms']                    = $this->remittanceNetTerms;
        }
        if (isset($this->netTermsOnRemittanceSignupsEnabled)) {
            $json['net_terms_on_remittance_signups_enabled'] = $this->netTermsOnRemittanceSignupsEnabled;
        }
        if (isset($this->customNetTermsEnabled)) {
            $json['custom_net_terms_enabled']                = $this->customNetTermsEnabled;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
