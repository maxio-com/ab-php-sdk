## How to run e2e tests locally

### Prerequisites

- PHP 8.1 or higher
- Composer installed
- Advanced Billing Dev Container running
- Access to Acme Admin account

### Setup Instructions

1. **Start Advanced Billing in Dev Container**
   - Ensure the dev container is running and accessible at `https://chargify.test`

2. **Create a Test Site**
   - Login as an Acme Admin
   - Create a new site (e.g., `sdk-php-tests`)
   - **Important**: Use a consistent site name as it will be used in your subdomain

3. **Configure Multi-Currency Support**
   - Navigate to: Site → Config → Settings → Multi-Currency
   - Add at least one additional currency (required for some tests)

4. **Generate API Key**
   - Navigate to: Site → Config → Integration → New API Key
   - Copy the generated API Key for use in environment variables

5. **Set Environment Variables**
   ```bash
   export BASIC_AUTH_USERNAME="<your-api-key-here>"
   export BASIC_AUTH_PASSWORD="x"
   export SUB_DOMAIN="sdk-php-tests"  # Use your actual site name
   export DOMAIN="chargify.test"
   ```
   
6. **Apply Required Code Patches**
   
   **⚠️ IMPORTANT**: These patches are for local testing only. Do NOT commit them to git.
   
   Currently, PHP SDK does not allow to override the API base URL, therefore the following changes are required:
   **Patch 1**: Update API base URL in `src/AdvancedBillingClient.php`:
   ```diff
   --- a/src/AdvancedBillingClient.php
   +++ b/src/AdvancedBillingClient.php
   @@ -679,8 +679,8 @@ class AdvancedBillingClient implements ConfigurationInterface
        */
       private const ENVIRONMENT_MAP = [
           Environment::US => [
   -            Server::PRODUCTION => 'https://{site}.chargify.com',
   -            Server::EBB => 'https://events.chargify.com/{site}'
   +            Server::PRODUCTION => 'https://{site}.chargify.test',
   +            Server::EBB => 'https://events.chargify.test/{site}'
           ],
           Environment::EU => [
               Server::PRODUCTION => 'https://{site}.ebilling.maxio.com',
   ```

   **Patch 2**: The `tests/phpunit.xml` should already have these settings, but verify:
   ```xml
   beStrictAboutOutputDuringTests="false"
   convertDeprecationsToExceptions="false"
   ```

### Running the Tests

**⚠️ IMPORTANT**: After each time you run the tests locally, you need to restore the database to its original state by running [./cleanupSite.sh](../cleanupSite.sh) script from the root folder.

Run the following commands in `tests` directory:

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Run All E2E Tests**
   ```bash
   ./vendor/bin/phpunit
   ```

3. **Run Specific Test Classes**
   ```bash
   ./vendor/bin/phpunit tests/Controllers/CustomersControllerTest.php
   ./vendor/bin/phpunit tests/Controllers/PaymentProfilesControllerTest.php
   ./vendor/bin/phpunit tests/Controllers/ComponentsControllerTest.php
   ./vendor/bin/phpunit tests/Controllers/CouponsControllerTest.php
   ```

4. **Run Tests with Verbose Output**
   ```bash
   ./vendor/bin/phpunit --verbose
   ```
