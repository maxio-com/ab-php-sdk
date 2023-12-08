<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Controllers;

use AdvancedBillingLib\Exceptions\ApiException;
use AdvancedBillingLib\Exceptions\EventBasedBillingListSegmentsErrorsException;
use AdvancedBillingLib\Exceptions\EventBasedBillingSegmentErrorsException;
use AdvancedBillingLib\Exceptions\EventBasedBillingSegmentException;
use AdvancedBillingLib\Models\BulkCreateSegments;
use AdvancedBillingLib\Models\BulkUpdateSegments;
use AdvancedBillingLib\Models\CreateSegmentRequest;
use AdvancedBillingLib\Models\ListSegmentsResponse;
use AdvancedBillingLib\Models\SegmentResponse;
use AdvancedBillingLib\Models\UpdateSegmentRequest;
use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;

class EventsBasedBillingSegmentsController extends BaseController
{
    /**
     * This endpoint creates a new Segment for a Component with segmented Metric. It allows you to specify
     * properties to bill upon and prices for each Segment. You can only pass as many "property_values" as
     * the related Metric has segmenting properties defined.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param string $componentId ID or Handle for the Component
     * @param string $pricePointId ID or Handle for the Price Point belonging to the Component
     * @param CreateSegmentRequest|null $body
     *
     * @return SegmentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSegment(
        string $componentId,
        string $pricePointId,
        ?CreateSegmentRequest $body = null
    ): SegmentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/components/{component_id}/price_points/{price_point_id}/segments.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', EventBasedBillingSegmentErrorsException::class)
            )
            ->type(SegmentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to fetch Segments created for a given Price Point. They will be returned in
     * the order of creation.
     *
     * You can pass `page` and `per_page` parameters in order to access all of the segments. By default it
     * will return `30` records. You can set `per_page` to `200` at most.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param array $options Array with all options for search
     *
     * @return ListSegmentsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function listSegmentsForPricePoint(array $options): ListSegmentsResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/components/{component_id}/price_points/{price_point_id}/segments.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $options)->extract('componentId')->required(),
                TemplateParam::init('price_point_id', $options)->extract('pricePointId')->required(),
                QueryParam::init('page', $options)->commaSeparated()->extract('page', 1),
                QueryParam::init('per_page', $options)->commaSeparated()->extract('perPage', 30),
                QueryParam::init('filter[segment_property_1_value]', $options)
                    ->commaSeparated()
                    ->extract('filterSegmentProperty1Value'),
                QueryParam::init('filter[segment_property_2_value]', $options)
                    ->commaSeparated()
                    ->extract('filterSegmentProperty2Value'),
                QueryParam::init('filter[segment_property_3_value]', $options)
                    ->commaSeparated()
                    ->extract('filterSegmentProperty3Value'),
                QueryParam::init('filter[segment_property_4_value]', $options)
                    ->commaSeparated()
                    ->extract('filterSegmentProperty4Value')
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init(
                    'Unprocessable Entity (WebDAV)',
                    EventBasedBillingListSegmentsErrorsException::class
                )
            )
            ->type(ListSegmentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint updates a single Segment for a Component with a segmented Metric. It allows you to
     * update the pricing for the segment.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param string $componentId ID or Handle of the Component
     * @param string $pricePointId ID or Handle of the Price Point belonging to the Component
     * @param float $id The ID of the Segment
     * @param UpdateSegmentRequest|null $body
     *
     * @return SegmentResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSegment(
        string $componentId,
        string $pricePointId,
        float $id,
        ?UpdateSegmentRequest $body = null
    ): SegmentResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/components/{component_id}/price_points/{price_point_id}/segments/{id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                TemplateParam::init('id', $id)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', EventBasedBillingSegmentErrorsException::class)
            )
            ->type(SegmentResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to delete a Segment with specified ID.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param string $componentId ID or Handle of the Component
     * @param string $pricePointId ID or Handle of the Price Point belonging to the Component
     * @param float $id The ID of the Segment
     *
     * @return void Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function deleteSegment(string $componentId, string $pricePointId, float $id): void
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::DELETE,
            '/components/{component_id}/price_points/{price_point_id}/segments/{id}.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                TemplateParam::init('id', $id)->required()
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn('422', ErrorType::init('Unprocessable Entity (WebDAV)'));

        $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to create multiple segments in one request. The array of segments can
     * contain up to `2000` records.
     *
     * If any of the records contain an error the whole request would fail and none of the requested
     * segments get created. The error response contains a message for only the one segment that failed
     * validation, with the corresponding index in the array.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param string $componentId ID or Handle for the Component
     * @param string $pricePointId ID or Handle for the Price Point belonging to the Component
     * @param BulkCreateSegments|null $body
     *
     * @return ListSegmentsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function createSegments(
        string $componentId,
        string $pricePointId,
        ?BulkCreateSegments $body = null
    ): ListSegmentsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::POST,
            '/components/{component_id}/price_points/{price_point_id}/segments/bulk.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', EventBasedBillingSegmentException::class)
            )
            ->type(ListSegmentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * This endpoint allows you to update multiple segments in one request. The array of segments can
     * contain up to `1000` records.
     *
     * If any of the records contain an error the whole request would fail and none of the requested
     * segments get updated. The error response contains a message for only the one segment that failed
     * validation, with the corresponding index in the array.
     *
     * You may specify component and/or price point by using either the numeric ID or the `handle:gold`
     * syntax.
     *
     * @param string $componentId ID or Handle for the Component
     * @param string $pricePointId ID or Handle for the Price Point belonging to the Component
     * @param BulkUpdateSegments|null $body
     *
     * @return ListSegmentsResponse Response from the API call
     *
     * @throws ApiException Thrown if API call fails
     */
    public function updateSegments(
        string $componentId,
        string $pricePointId,
        ?BulkUpdateSegments $body = null
    ): ListSegmentsResponse {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::PUT,
            '/components/{component_id}/price_points/{price_point_id}/segments/bulk.json'
        )
            ->auth('global')
            ->parameters(
                TemplateParam::init('component_id', $componentId)->required(),
                TemplateParam::init('price_point_id', $pricePointId)->required(),
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('401', ErrorType::init('Unauthorized'))
            ->throwErrorOn('403', ErrorType::init('Forbidden'))
            ->throwErrorOn('404', ErrorType::init('Not Found'))
            ->throwErrorOn(
                '422',
                ErrorType::init('Unprocessable Entity (WebDAV)', EventBasedBillingSegmentException::class)
            )
            ->type(ListSegmentsResponse::class);

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
