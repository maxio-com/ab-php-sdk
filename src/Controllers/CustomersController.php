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
     * This method allows to retrieve the Customer properties by Chargify-generated Customer ID.
     *
     * @param int $id The Chargify id of the customer
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readCustomer(int $id): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/customers/{id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('id', $id)->required());

        $_resHandler = $this->responseHandler()->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method allows to update the Customer.
     *
     * @param int $id The Chargify id of the customer
     * @param UpdateCustomerRequest|null $body
     *
     * @return CustomerResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateCustomer(int $id, ?UpdateCustomerRequest $body = null): CustomerResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/customers/{id}.json')
            ->auth('global')
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
     * Use this method to return the customer object if you have the unique **Reference ID (Your App)**
     * value handy. It will return a single match.
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
            ->auth('global')
            ->parameters(QueryParam::init('reference', $reference)->commaSeparated()->required());

        $_resHandler = $this->responseHandler()->type(CustomerResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This method lists all subscriptions that belong to a customer.
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
            ->auth('global')
            ->parameters(TemplateParam::init('customer_id', $customerId)->required());

        $_resHandler = $this->responseHandler()->type(SubscriptionResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will by default list all customers associated with your Site.
     *
     * ## Find Customer
     *
     * Use the search feature with the `q` query parameter to retrieve an array of customers that matches
     * the search query.
     *
     * Common use cases are:
     *
     * + Search by an email
     * + Search by a Chargify ID
     * + Search by an organization
     * + Search by a reference value from your application
     * + Search by a first or last name
     *
     * To retrieve a single, exact match by reference, please use the [lookup endpoint](https://developers.
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
            ->auth('global')
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
     * You may create a new Customer at any time, or you may create a Customer at the same time you create
     * a Subscription. The only validation restriction is that you may only create one customer for a given
     * reference value.
     *
     * If provided, the `reference` value must be unique. It represents a unique identifier for the
     * customer from your own app, i.e. the customer’s ID. This allows you to retrieve a given customer via
     * a piece of shared information. Alternatively, you may choose to leave `reference` blank, and store
     * Chargify’s unique ID for the customer, which is in the `id` attribute.
     *
     * Full documentation on how to locate, create and edit Customers in the Chargify UI can be located
     * [here](https://chargify.zendesk.com/hc/en-us/articles/4407659914267).
     *
     * ## Required Country Format
     *
     * Chargify requires that you use the ISO Standard Country codes when formatting country attribute of
     * the customer.
     *
     * Countries should be formatted as 2 characters. For more information, please see the following
     * wikipedia article on [ISO_3166-1.](http://en.wikipedia.org/wiki/ISO_3166-1#Current_codes)
     *
     * ## Required State Format
     *
     * Chargify requires that you use the ISO Standard State codes when formatting state attribute of the
     * customer.
     *
     * + US States (2 characters): [ISO_3166-2](https://en.wikipedia.org/wiki/ISO_3166-2:US)
     *
     * + States Outside the US (2-3 characters): To find the correct state codes outside of the US, please
     * go to [ISO_3166-1](http://en.wikipedia.org/wiki/ISO_3166-1#Current_codes) and click on the link in
     * the “ISO 3166-2 codes” column next to country you wish to populate.
     *
     * ## Locale
     *
     * Chargify allows you to attribute a language/region to your customer to deliver invoices in any
     * required language.
     * For more: [Customer Locale](https://chargify.zendesk.com/hc/en-us/articles/4407870384283#customer-
     * locale)
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
            ->auth('global')
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
     * This method allows you to delete the Customer.
     *
     * @param int $id The Chargify id of the customer
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteCustomer(int $id): void
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::DELETE, '/customers/{id}.json')
            ->auth('global')
            ->parameters(TemplateParam::init('id', $id)->required());

        $this->execute($_reqBuilder);
    }
}
