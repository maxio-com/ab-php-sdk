<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\SingleStringErrorResponseException;
use AdvancedBillingLib\Models\ReferralValidationResponse;
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ReferralCodesController extends BaseController
{
    /**
     * Validates whether a referral code is valid and applicable within your site. This method is useful
     * for validating referral codes that are entered by a customer.
     *
     * For more information, see [Understanding Referrals](https://docs.maxio.com/hc/en-
     * us/articles/24286981223693-Understanding-Referrals) in the product documentation.
     *
     * @param string $code The referral code you are trying to validate
     *
     * @return ReferralValidationResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function validateReferralCode(string $code): ReferralValidationResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/referral_codes/validate.json')
            ->auth('BasicAuth')
            ->parameters(QueryParam::init('code', $code)->commaSeparated()->required());

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '404',
                ErrorType::initWithErrorTemplate(
                    'Invalid referral code.',
                    SingleStringErrorResponseException::class
                )
            )
            ->type(ReferralValidationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
