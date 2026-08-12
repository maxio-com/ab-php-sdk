<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\CustomerErrorResponseException;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\CreateCustomerRequest;
use AdvancedBillingLib\Models\CustomerResponse;
use AdvancedBillingLib\Models\SortingDirection;
use AdvancedBillingLib\Models\SubscriptionResponse;
use AdvancedBillingLib\Models\UpdateCustomerRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class CustomersController extends BaseController
{
    /**
     * Creates a new customer; can also be created alongside a new subscription. The only validation
     * restriction is that you can only create one customer for a given reference value.
     *
     * If provided, the `reference` value must be unique. It represents a unique identifier for the
     * customer from your own app, i.e. the customer’s ID. This allows you to retrieve a given customer via
     * a piece of shared information. Alternatively, you can choose to leave `reference` blank, and store
     * the system-assigned unique ID for the customer, which is in the `id` attribute.
     *
     * For more information, see [Customer Details](https://maxio.zendesk.com/hc/en-
     * us/articles/24252190590093-Customer-Details).
     *
     * ## Required Country Format
     *
     * Format the country attribute of the customer using the ISO Standard Country codes.
     *
     * Countries should be formatted as two characters. For more information, see [ISO 3166-1](http://en.
     * wikipedia.org/wiki/ISO_3166-1#Current_codes).
     *
     * ## Required State Format
     *
     * Format the state attribute of the customer using the ISO Standard State codes.
     *
     * + US States (two characters): see [ISO 3166-2](https://en.wikipedia.org/wiki/ISO_3166-2:US).
     *
     * + States Outside the US (two to three characters): To find the correct state codes outside the US,
     * go to [ISO 3166-1](http://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) and click on the link in
     * the “ISO 3166-2 codes” column next to the country you wish to populate.
     *
     * ## Locale
     *
     * You can attribute a language/region to the customer to deliver invoices in any required language.
     * For more information, see [Customer Locale](https://maxio.zendesk.com/hc/en-
     * us/articles/24286672013709-Customer-Locale).
     *
     * @param CreateCustomerRequest|null $body
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createCustomer(?CreateCustomerRequest $body = null): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/customers.json')
            ->auth('BasicAuth')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    CustomerErrorResponseException::class
                )
            )
            ->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all customers associated with your site, or filters results using the search parameter.
     *
     * ## Find Customer
     *
     * Use the search feature with the `q` query parameter to retrieve an array of customers that matches
     * the search query.
     *
     * Common use cases are:
     *
     * + Search by an email
     * + Search by an Advanced Billing ID
     * + Search by an organization
     * + Search by a reference value from your application
     * + Search by a first or last name
     *
     * To retrieve a single, exact match by reference, use the [lookup endpoint](https://developers.
     * chargify.com/docs/api-docs/b710d8fbef104-read-customer-by-reference).
     *
     * @param array $options Array with all options for search
     *
     * @return CustomerResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCustomers(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/customers.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('direction', $options)
                    ->commaSeparated()
                    ->extract('direction')
                    ->serializeBy([SortingDirection::class, 'checkValue']),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 50),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('q', $options)->commaSeparated()->extract('q')
            );

        $_resHandler = $this->responseHandler()->type(CustomerResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Retrieves the Customer properties by Advanced Billing-generated Customer ID.
     *
     * @param int $id The Advanced Billing id of the customer
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCustomer(int $id): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/customers/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Updates the customer.
     *
     * @param int $id The Advanced Billing id of the customer
     * @param UpdateCustomerRequest|null $body
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCustomer(int $id, ?UpdateCustomerRequest $body = null): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/customers/{id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    CustomerErrorResponseException::class
                )
            )
            ->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Deletes the customer.
     *
     * @param int $id The Advanced Billing id of the customer
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCustomer(int $id): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/customers/{id}.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('id', $id)->required());

        $this->execute($_reqBuilder);
    }

    /**
     * Returns a customer by their unique reference ID. It will return a single match.
     *
     * @param string $reference Customer reference
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCustomerByReference(string $reference): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/customers/lookup.json')
            ->auth('BasicAuth')
            ->parameters(QueryParam::init('reference', $reference)->commaSeparated()->required());

        $_resHandler = $this->responseHandler()->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Lists all subscriptions that belong to a customer.
     *
     * If you have the new [Catalog experience](page:help/announcements/2026-announcements#new-catalog-
     * experience-and-terminology) enabled, subscriptions no longer require an associated product. For
     * subscriptions without an associated product, 'product', 'product_price_point_id', and
     * 'product_price_point_type' are returned as 'null'.
     *
     * @param int $customerId The Chargify id of the customer
     *
     * @return SubscriptionResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listCustomerSubscriptions(int $customerId): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/customers/{customer_id}/subscriptions.json')
            ->auth('BasicAuth')
            ->parameters(TemplateParam::init('customer_id', $customerId)->required());

        $_resHandler = $this->responseHandler()->type(SubscriptionResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
