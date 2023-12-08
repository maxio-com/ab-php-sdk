<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib;

use AdvancedBillingLib\Controllers\AdvanceInvoiceController;
use AdvancedBillingLib\Controllers\APIExportsController;
use AdvancedBillingLib\Controllers\BillingPortalController;
use AdvancedBillingLib\Controllers\ComponentsController;
use AdvancedBillingLib\Controllers\CouponsController;
use AdvancedBillingLib\Controllers\CustomersController;
use AdvancedBillingLib\Controllers\CustomFieldsController;
use AdvancedBillingLib\Controllers\EventsBasedBillingSegmentsController;
use AdvancedBillingLib\Controllers\EventsController;
use AdvancedBillingLib\Controllers\InsightsController;
use AdvancedBillingLib\Controllers\InvoicesController;
use AdvancedBillingLib\Controllers\OffersController;
use AdvancedBillingLib\Controllers\PaymentProfilesController;
use AdvancedBillingLib\Controllers\ProductFamiliesController;
use AdvancedBillingLib\Controllers\ProductPricePointsController;
use AdvancedBillingLib\Controllers\ProductsController;
use AdvancedBillingLib\Controllers\ProformaInvoicesController;
use AdvancedBillingLib\Controllers\ReasonCodesController;
use AdvancedBillingLib\Controllers\ReferralCodesController;
use AdvancedBillingLib\Controllers\SalesCommissionsController;
use AdvancedBillingLib\Controllers\SitesController;
use AdvancedBillingLib\Controllers\SubscriptionComponentsController;
use AdvancedBillingLib\Controllers\SubscriptionGroupInvoiceAccountController;
use AdvancedBillingLib\Controllers\SubscriptionGroupsController;
use AdvancedBillingLib\Controllers\SubscriptionGroupStatusController;
use AdvancedBillingLib\Controllers\SubscriptionInvoiceAccountController;
use AdvancedBillingLib\Controllers\SubscriptionNotesController;
use AdvancedBillingLib\Controllers\SubscriptionProductsController;
use AdvancedBillingLib\Controllers\SubscriptionsController;
use AdvancedBillingLib\Controllers\SubscriptionStatusController;
use AdvancedBillingLib\Controllers\WebhooksController;
use AdvancedBillingLib\Utils\CompatibilityConverter;
use Core\ClientBuilder;
use Core\Request\Parameters\TemplateParam;
use Core\Utils\CoreHelper;
use Unirest\Configuration;
use Unirest\HttpClient;

class AdvancedBillingClient implements ConfigurationInterface
{
    private $aPIExports;

    private $advanceInvoice;

    private $billingPortal;

    private $coupons;

    private $components;

    private $customers;

    private $customFields;

    private $events;

    private $eventsBasedBillingSegments;

    private $insights;

    private $invoices;

    private $offers;

    private $paymentProfiles;

    private $productFamilies;

    private $products;

    private $productPricePoints;

    private $proformaInvoices;

    private $reasonCodes;

    private $referralCodes;

    private $salesCommissions;

    private $sites;

    private $subscriptions;

    private $subscriptionComponents;

    private $subscriptionGroups;

    private $subscriptionGroupInvoiceAccount;

    private $subscriptionGroupStatus;

    private $subscriptionInvoiceAccount;

    private $subscriptionNotes;

    private $subscriptionProducts;

    private $subscriptionStatus;

    private $webhooks;

    private $basicAuthManager;

    private $config;

    private $client;

    /**
     * @see AdvancedBillingClientBuilder::init()
     * @see AdvancedBillingClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->basicAuthManager = new BasicAuthManager(
            $this->config['basicAuthUserName'] ?? ConfigurationDefaults::BASIC_AUTH_USER_NAME,
            $this->config['basicAuthPassword'] ?? ConfigurationDefaults::BASIC_AUTH_PASSWORD
        );
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('AB SDK PHP:1.0.0 on OS {os-info}')
            ->globalConfig($this->getGlobalConfiguration())
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::DEFAULT_)
            ->authManagers(['global' => $this->basicAuthManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return AdvancedBillingClientBuilder AdvancedBillingClientBuilder instance
     */
    public function toBuilder(): AdvancedBillingClientBuilder
    {
        return AdvancedBillingClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->subdomain($this->getSubdomain())
            ->domain($this->getDomain())
            ->basicAuthUserName($this->basicAuthManager->getBasicAuthUserName())
            ->basicAuthPassword($this->basicAuthManager->getBasicAuthPassword())
            ->httpCallback($this->config['httpCallback'] ?? null);
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getSubdomain(): string
    {
        return $this->config['subdomain'] ?? ConfigurationDefaults::SUBDOMAIN;
    }

    public function getDomain(): string
    {
        return $this->config['domain'] ?? ConfigurationDefaults::DOMAIN;
    }

    public function getBasicAuthCredentials(): ?BasicAuthCredentials
    {
        return $this->basicAuthManager;
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see AdvancedBillingClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see AdvancedBillingClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::DEFAULT_): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns API Exports Controller
     */
    public function getAPIExportsController(): APIExportsController
    {
        if ($this->aPIExports == null) {
            $this->aPIExports = new APIExportsController($this->client);
        }
        return $this->aPIExports;
    }

    /**
     * Returns Advance Invoice Controller
     */
    public function getAdvanceInvoiceController(): AdvanceInvoiceController
    {
        if ($this->advanceInvoice == null) {
            $this->advanceInvoice = new AdvanceInvoiceController($this->client);
        }
        return $this->advanceInvoice;
    }

    /**
     * Returns Billing Portal Controller
     */
    public function getBillingPortalController(): BillingPortalController
    {
        if ($this->billingPortal == null) {
            $this->billingPortal = new BillingPortalController($this->client);
        }
        return $this->billingPortal;
    }

    /**
     * Returns Coupons Controller
     */
    public function getCouponsController(): CouponsController
    {
        if ($this->coupons == null) {
            $this->coupons = new CouponsController($this->client);
        }
        return $this->coupons;
    }

    /**
     * Returns Components Controller
     */
    public function getComponentsController(): ComponentsController
    {
        if ($this->components == null) {
            $this->components = new ComponentsController($this->client);
        }
        return $this->components;
    }

    /**
     * Returns Customers Controller
     */
    public function getCustomersController(): CustomersController
    {
        if ($this->customers == null) {
            $this->customers = new CustomersController($this->client);
        }
        return $this->customers;
    }

    /**
     * Returns Custom Fields Controller
     */
    public function getCustomFieldsController(): CustomFieldsController
    {
        if ($this->customFields == null) {
            $this->customFields = new CustomFieldsController($this->client);
        }
        return $this->customFields;
    }

    /**
     * Returns Events Controller
     */
    public function getEventsController(): EventsController
    {
        if ($this->events == null) {
            $this->events = new EventsController($this->client);
        }
        return $this->events;
    }

    /**
     * Returns Events Based Billing Segments Controller
     */
    public function getEventsBasedBillingSegmentsController(): EventsBasedBillingSegmentsController
    {
        if ($this->eventsBasedBillingSegments == null) {
            $this->eventsBasedBillingSegments = new EventsBasedBillingSegmentsController($this->client);
        }
        return $this->eventsBasedBillingSegments;
    }

    /**
     * Returns Insights Controller
     */
    public function getInsightsController(): InsightsController
    {
        if ($this->insights == null) {
            $this->insights = new InsightsController($this->client);
        }
        return $this->insights;
    }

    /**
     * Returns Invoices Controller
     */
    public function getInvoicesController(): InvoicesController
    {
        if ($this->invoices == null) {
            $this->invoices = new InvoicesController($this->client);
        }
        return $this->invoices;
    }

    /**
     * Returns Offers Controller
     */
    public function getOffersController(): OffersController
    {
        if ($this->offers == null) {
            $this->offers = new OffersController($this->client);
        }
        return $this->offers;
    }

    /**
     * Returns Payment Profiles Controller
     */
    public function getPaymentProfilesController(): PaymentProfilesController
    {
        if ($this->paymentProfiles == null) {
            $this->paymentProfiles = new PaymentProfilesController($this->client);
        }
        return $this->paymentProfiles;
    }

    /**
     * Returns Product Families Controller
     */
    public function getProductFamiliesController(): ProductFamiliesController
    {
        if ($this->productFamilies == null) {
            $this->productFamilies = new ProductFamiliesController($this->client);
        }
        return $this->productFamilies;
    }

    /**
     * Returns Products Controller
     */
    public function getProductsController(): ProductsController
    {
        if ($this->products == null) {
            $this->products = new ProductsController($this->client);
        }
        return $this->products;
    }

    /**
     * Returns Product Price Points Controller
     */
    public function getProductPricePointsController(): ProductPricePointsController
    {
        if ($this->productPricePoints == null) {
            $this->productPricePoints = new ProductPricePointsController($this->client);
        }
        return $this->productPricePoints;
    }

    /**
     * Returns Proforma Invoices Controller
     */
    public function getProformaInvoicesController(): ProformaInvoicesController
    {
        if ($this->proformaInvoices == null) {
            $this->proformaInvoices = new ProformaInvoicesController($this->client);
        }
        return $this->proformaInvoices;
    }

    /**
     * Returns Reason Codes Controller
     */
    public function getReasonCodesController(): ReasonCodesController
    {
        if ($this->reasonCodes == null) {
            $this->reasonCodes = new ReasonCodesController($this->client);
        }
        return $this->reasonCodes;
    }

    /**
     * Returns Referral Codes Controller
     */
    public function getReferralCodesController(): ReferralCodesController
    {
        if ($this->referralCodes == null) {
            $this->referralCodes = new ReferralCodesController($this->client);
        }
        return $this->referralCodes;
    }

    /**
     * Returns Sales Commissions Controller
     */
    public function getSalesCommissionsController(): SalesCommissionsController
    {
        if ($this->salesCommissions == null) {
            $this->salesCommissions = new SalesCommissionsController($this->client);
        }
        return $this->salesCommissions;
    }

    /**
     * Returns Sites Controller
     */
    public function getSitesController(): SitesController
    {
        if ($this->sites == null) {
            $this->sites = new SitesController($this->client);
        }
        return $this->sites;
    }

    /**
     * Returns Subscriptions Controller
     */
    public function getSubscriptionsController(): SubscriptionsController
    {
        if ($this->subscriptions == null) {
            $this->subscriptions = new SubscriptionsController($this->client);
        }
        return $this->subscriptions;
    }

    /**
     * Returns Subscription Components Controller
     */
    public function getSubscriptionComponentsController(): SubscriptionComponentsController
    {
        if ($this->subscriptionComponents == null) {
            $this->subscriptionComponents = new SubscriptionComponentsController($this->client);
        }
        return $this->subscriptionComponents;
    }

    /**
     * Returns Subscription Groups Controller
     */
    public function getSubscriptionGroupsController(): SubscriptionGroupsController
    {
        if ($this->subscriptionGroups == null) {
            $this->subscriptionGroups = new SubscriptionGroupsController($this->client);
        }
        return $this->subscriptionGroups;
    }

    /**
     * Returns Subscription Group Invoice Account Controller
     */
    public function getSubscriptionGroupInvoiceAccountController(): SubscriptionGroupInvoiceAccountController
    {
        if ($this->subscriptionGroupInvoiceAccount == null) {
            $this->subscriptionGroupInvoiceAccount = new SubscriptionGroupInvoiceAccountController($this->client);
        }
        return $this->subscriptionGroupInvoiceAccount;
    }

    /**
     * Returns Subscription Group Status Controller
     */
    public function getSubscriptionGroupStatusController(): SubscriptionGroupStatusController
    {
        if ($this->subscriptionGroupStatus == null) {
            $this->subscriptionGroupStatus = new SubscriptionGroupStatusController($this->client);
        }
        return $this->subscriptionGroupStatus;
    }

    /**
     * Returns Subscription Invoice Account Controller
     */
    public function getSubscriptionInvoiceAccountController(): SubscriptionInvoiceAccountController
    {
        if ($this->subscriptionInvoiceAccount == null) {
            $this->subscriptionInvoiceAccount = new SubscriptionInvoiceAccountController($this->client);
        }
        return $this->subscriptionInvoiceAccount;
    }

    /**
     * Returns Subscription Notes Controller
     */
    public function getSubscriptionNotesController(): SubscriptionNotesController
    {
        if ($this->subscriptionNotes == null) {
            $this->subscriptionNotes = new SubscriptionNotesController($this->client);
        }
        return $this->subscriptionNotes;
    }

    /**
     * Returns Subscription Products Controller
     */
    public function getSubscriptionProductsController(): SubscriptionProductsController
    {
        if ($this->subscriptionProducts == null) {
            $this->subscriptionProducts = new SubscriptionProductsController($this->client);
        }
        return $this->subscriptionProducts;
    }

    /**
     * Returns Subscription Status Controller
     */
    public function getSubscriptionStatusController(): SubscriptionStatusController
    {
        if ($this->subscriptionStatus == null) {
            $this->subscriptionStatus = new SubscriptionStatusController($this->client);
        }
        return $this->subscriptionStatus;
    }

    /**
     * Returns Webhooks Controller
     */
    public function getWebhooksController(): WebhooksController
    {
        if ($this->webhooks == null) {
            $this->webhooks = new WebhooksController($this->client);
        }
        return $this->webhooks;
    }

    /**
     * Get the defined global configurations
     */
    private function getGlobalConfiguration(): array
    {
        return [
            TemplateParam::init('subdomain', $this->getSubdomain())->dontEncode(),
            TemplateParam::init('domain', $this->getDomain())->dontEncode()
        ];
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION => [Server::DEFAULT_ => 'https://{subdomain}.{domain}'],
        Environment::ENVIRONMENT2 => [Server::DEFAULT_ => 'https://events.chargify.com']
    ];
}
