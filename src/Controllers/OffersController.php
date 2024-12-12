<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorArrayMapResponseException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Models\CreateOfferRequest;
use AdvancedBillingLib\Models\ListOffersResponse;
use AdvancedBillingLib\Models\OfferResponse;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class OffersController extends BaseController
{
    /**
     * Create an offer within your Advanced Billing site by sending a POST request.
     *
     * ## Documentation
     *
     * Offers allow you to package complicated combinations of products, components and coupons into a
     * convenient package which can then be subscribed to just like products.
     *
     * Once an offer is defined it can be used as an alternative to the product when creating subscriptions.
     *
     * Full documentation on how to use offers in the Advanced Billing UI can be located [here](https:
     * //maxio.zendesk.com/hc/en-us/articles/24261295098637-Offers-Overview).
     *
     * ## Using a Product Price Point
     *
     * You can optionally pass in a `product_price_point_id` that corresponds with the `product_id` and the
     * offer will use that price point. If a `product_price_point_id` is not passed in, the product's
     * default price point will be used.
     *
     * @param CreateOfferRequest|null $body
     *
     * @return OfferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOffer(?CreateOfferRequest $body = null): OfferResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/offers.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorArrayMapResponseException::class
                )
            )
            ->type(OfferResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint will list offers for a site.
     *
     * @param array $options Array with all options for search
     *
     * @return ListOffersResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listOffers(array $options): ListOffersResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/offers.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('include_archived', $options)->commaSeparated()->extract('includeArchived')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ListOffersResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows you to list a specific offer's attributes. This is different than list all offers
     * for a site, as it requires an `offer_id`.
     *
     * @param int $offerId The Chargify id of the offer
     *
     * @return OfferResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readOffer(int $offerId): OfferResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/offers/{offer_id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('offer_id', $offerId)->required());

        $_resHandler = $this->responseHandler()->type(OfferResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Archive an existing offer. Please provide an `offer_id` in order to archive the correct item.
     *
     * @param int $offerId The Chargify id of the offer
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveOffer(int $offerId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/offers/{offer_id}/archive.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('offer_id', $offerId)->required());

        $this->execute($_reqBuilder);
    }

    /**
     * Unarchive a previously archived offer. Please provide an `offer_id` in order to un-archive the
     * correct item.
     *
     * @param int $offerId The Chargify id of the offer
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function unarchiveOffer(int $offerId): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/offers/{offer_id}/unarchive.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('offer_id', $offerId)->required());

        $this->execute($_reqBuilder);
    }
}
