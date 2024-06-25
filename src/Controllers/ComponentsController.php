<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\ErrorListResponseException;
use AdvancedBillingLib\Models\BasicDateField;
use AdvancedBillingLib\Models\Component;
use AdvancedBillingLib\Models\ComponentResponse;
use AdvancedBillingLib\Models\CreateEBBComponent;
use AdvancedBillingLib\Models\CreateMeteredComponent;
use AdvancedBillingLib\Models\CreateOnOffComponent;
use AdvancedBillingLib\Models\CreatePrepaidComponent;
use AdvancedBillingLib\Models\CreateQuantityBasedComponent;
use AdvancedBillingLib\Models\UpdateComponentRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class ComponentsController extends BaseController
{
    /**
     * This request will create a component definition of kind **metered_component** under the specified
     * product family. Metered component can then be added and “allocated” for a subscription.
     *
     * Metered components are used to bill for any type of unit that resets to 0 at the end of the billing
     * period (think daily Google Adwords clicks or monthly cell phone minutes). This is most commonly
     * associated with usage-based billing and many other pricing schemes.
     *
     * Note that this is different from recurring quantity-based components, which DO NOT reset to zero at
     * the start of every billing period. If you want to bill for a quantity of something that does not
     * change unless you change it, then you want quantity components, instead.
     *
     * For more information on components, please see our documentation [here](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405020625677).
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param CreateMeteredComponent|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createMeteredComponent(
        int $productFamilyId,
        ?CreateMeteredComponent $body = null
    ): ComponentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/metered_components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will create a component definition of kind **quantity_based_component** under the
     * specified product family. Quantity Based component can then be added and “allocated” for a
     * subscription.
     *
     * When defining Quantity Based component, You can choose one of 2 types:
     * #### Recurring
     * Recurring quantity-based components are used to bill for the number of some unit (think monthly
     * software user licenses or the number of pairs of socks in a box-a-month club). This is most commonly
     * associated with billing for user licenses, number of users, number of employees, etc.
     *
     * #### One-time
     * One-time quantity-based components are used to create ad hoc usage charges that do not recur. For
     * example, at the time of signup, you might want to charge your customer a one-time fee for onboarding
     * or other services.
     *
     * The allocated quantity for one-time quantity-based components immediately gets reset back to zero
     * after the allocation is made.
     *
     * For more information on components, please see our documentation [here](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405020625677).
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param CreateQuantityBasedComponent|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createQuantityBasedComponent(
        int $productFamilyId,
        ?CreateQuantityBasedComponent $body = null
    ): ComponentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/quantity_based_components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will create a component definition of kind **on_off_component** under the specified
     * product family. On/Off component can then be added and “allocated” for a subscription.
     *
     * On/off components are used for any flat fee, recurring add on (think $99/month for tech support or a
     * flat add on shipping fee).
     *
     * For more information on components, please see our documentation [here](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405020625677).
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param CreateOnOffComponent|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createOnOffComponent(int $productFamilyId, ?CreateOnOffComponent $body = null): ComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/on_off_components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will create a component definition of kind **prepaid_usage_component** under the
     * specified product family. Prepaid component can then be added and “allocated” for a subscription.
     *
     * Prepaid components allow customers to pre-purchase units that can be used up over time on their
     * subscription. In a sense, they are the mirror image of metered components; while metered components
     * charge at the end of the period for the amount of units used, prepaid components are charged for at
     * the time of purchase, and we subsequently keep track of the usage against the amount purchased.
     *
     * For more information on components, please see our documentation [here](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405020625677).
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param CreatePrepaidComponent|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createPrepaidUsageComponent(
        int $productFamilyId,
        ?CreatePrepaidComponent $body = null
    ): ComponentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/prepaid_usage_components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will create a component definition of kind **event_based_component** under the
     * specified product family. Event-based component can then be added and “allocated” for a subscription.
     *
     * Event-based components are similar to other component types, in that you define the component
     * parameters (such as name and taxability) and the pricing. A key difference for the event-based
     * component is that it must be attached to a metric. This is because the metric provides the component
     * with the actual quantity used in computing what and how much will be billed each period for each
     * subscription.
     *
     * So, instead of reporting usage directly for each component (as you would with metered components),
     * the usage is derived from analysis of your events.
     *
     * For more information on components, please see our documentation [here](https://maxio-chargify.
     * zendesk.com/hc/en-us/articles/5405020625677).
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param CreateEBBComponent|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createEventBasedComponent(
        int $productFamilyId,
        ?CreateEBBComponent $body = null
    ): ComponentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/product_families/{product_family_id}/event_based_components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('404', ErrorType::initWithErrorTemplate('Not Found:\'{$response.body}\''))
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will return information regarding a component having the handle you provide. You can
     * identify your components with a handle so you don't have to save or reference the IDs we generate.
     *
     * @param string $handle The handle of the component to find
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function findComponent(string $handle): ComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components/lookup.json')
            ->auth('BasicAuth')
            ->parameters(QueryParam::init('handle', $handle)->commaSeparated()->required());

        $_resHandler = $this->responseHandler()->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will return information regarding a component from a specific product family.
     *
     * You may read the component by either the component's id or handle. When using the handle, it must be
     * prefixed with `handle:`.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param string $componentId Either the Chargify id of the component or the handle for the
     *        component prefixed with `handle:`
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function readComponent(int $productFamilyId, string $componentId): ComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/components/{component_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('component_id', $componentId)->required()
            );

        $_resHandler = $this->responseHandler()->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will update a component from a specific product family.
     *
     * You may read the component by either the component's id or handle. When using the handle, it must be
     * prefixed with `handle:`.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param string $componentId Either the Chargify id of the component or the handle for the
     *        component prefixed with `handle:`
     * @param UpdateComponentRequest|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateProductFamilyComponent(
        int $productFamilyId,
        string $componentId,
        ?UpdateComponentRequest $body = null
    ): ComponentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/product_families/{product_family_id}/components/{component_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('component_id', $componentId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Sending a DELETE request to this endpoint will archive the component. All current subscribers will
     * be unffected; their subscription/purchase will continue to be charged as usual.
     *
     * @param int $productFamilyId The Chargify id of the product family to which the component
     *        belongs
     * @param string $componentId Either the Chargify id of the component or the handle for the
     *        component prefixed with `handle:`
     *
     * @return Component Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function archiveComponent(int $productFamilyId, string $componentId): Component
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/product_families/{product_family_id}/components/{component_id}.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $productFamilyId)->required(),
                TemplateParam::init('component_id', $componentId)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(Component::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will return a list of components for a site.
     *
     * @param array $options Array with all options for search
     *
     * @return ComponentResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listComponents(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/components.json')
            ->auth('BasicAuth')
            ->parameters(
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('include_archived', $options)->commaSeparated()->extract('includeArchived'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('filter', $options)->commaSeparated()->extract('filter')
            );

        $_resHandler = $this->responseHandler()->type(ComponentResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will update a component.
     *
     * You may read the component by either the component's id or handle. When using the handle, it must be
     * prefixed with `handle:`.
     *
     * @param string $componentId The id or handle of the component
     * @param UpdateComponentRequest|null $body
     *
     * @return ComponentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateComponent(string $componentId, ?UpdateComponentRequest $body = null): ComponentResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::PUT, '/components/{component_id}.json')
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn(
                '422',
                ErrorType::initWithErrorTemplate(
                    'HTTP Response Not OK. Status code: {$statusCode}. Response: \'{$response.body}\'.',
                    ErrorListResponseException::class
                )
            )
            ->type(ComponentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This request will return a list of components for a particular product family.
     *
     * @param array $options Array with all options for search
     *
     * @return ComponentResponse[] Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listComponentsForProductFamily(array $options): array
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/product_families/{product_family_id}/components.json'
        )
            ->auth('BasicAuth')
            ->parameters(
                TemplateParam::init('product_family_id', $options)->extract('productFamilyId')->required(),
                QueryParam::init('include_archived', $options)->commaSeparated()->extract('includeArchived'),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 20),
                QueryParam::init('filter', $options)->commaSeparated()->extract('filter'),
                QueryParam::init('date_field', $options)
                    ->commaSeparated()
                    ->extract('dateField')
                    ->serializeBy([BasicDateField::class, 'checkValue']),
                QueryParam::init('end_date', $options)->commaSeparated()->extract('endDate'),
                QueryParam::init('end_datetime', $options)->commaSeparated()->extract('endDatetime'),
                QueryParam::init('start_date', $options)->commaSeparated()->extract('startDate'),
                QueryParam::init('start_datetime', $options)->commaSeparated()->extract('startDatetime')
            );

        $_resHandler = $this->responseHandler()->type(ComponentResponse::class, 1);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
