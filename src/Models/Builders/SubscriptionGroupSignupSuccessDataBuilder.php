<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\SubscriptionGroupSignupSuccessData;
use Core\Utils\CoreHelper;

/**
 * Builder for model SubscriptionGroupSignupSuccessData
 *
 * @see SubscriptionGroupSignupSuccessData
 */
class SubscriptionGroupSignupSuccessDataBuilder
{
    /**
     * @var SubscriptionGroupSignupSuccessData
     */
    private $instance;

    private function __construct(SubscriptionGroupSignupSuccessData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new subscription group signup success data Builder object.
     */
    public static function init(
        string $uid,
        int $scheme,
        int $customerId,
        int $paymentProfileId,
        array $subscriptionIds,
        int $primarySubscriptionId,
        string $nextAssessmentAt,
        string $state,
        bool $cancelAtEndOfPeriod
    ): self {
        return new self(new SubscriptionGroupSignupSuccessData(
            $uid,
            $scheme,
            $customerId,
            $paymentProfileId,
            $subscriptionIds,
            $primarySubscriptionId,
            $nextAssessmentAt,
            $state,
            $cancelAtEndOfPeriod
        ));
    }

    /**
     * Initializes a new subscription group signup success data object.
     */
    public function build(): SubscriptionGroupSignupSuccessData
    {
        return CoreHelper::clone($this->instance);
    }
}
