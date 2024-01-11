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
     * Use this method to determine if the referral code is valid and applicable within your Site. This
     * method is useful for validating referral codes that are entered by a customer.
     *
     * ## Referrals Documentation
     *
     * Full documentation on how to use the referrals feature in the Chargify UI can be located
     * [here](https://chargify.zendesk.com/hc/en-us/articles/4407802831643).
     *
     * ## Server Response
     *
     * If the referral code is valid the status code will be `200` and the referral code will be returned.
     * If the referral code is invalid, a `404` response will be returned.
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
            ->throwErrorOn('404', ErrorType::init('Not Found', SingleStringErrorResponseException::class))
            ->type(ReferralValidationResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
