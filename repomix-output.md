This file is a merged representation of a subset of the codebase, containing files not matching ignore patterns, combined into a single document by Repomix.
The content has been processed where line numbers have been added.

# File Summary

## Purpose
This file contains a packed representation of a subset of the repository's contents that is considered the most important context.
It is designed to be easily consumable by AI systems for analysis, code review,
or other automated processes.

## File Format
The content is organized as follows:
1. This summary section
2. Repository information
3. Directory structure
4. Repository files (if enabled)
5. Multiple file entries, each consisting of:
  a. A header with the file path (## File: path/to/file)
  b. The full contents of the file in a code block

## Usage Guidelines
- This file should be treated as read-only. Any changes should be made to the
  original repository files, not this packed version.
- When processing this file, use the file path to distinguish
  between different files in the repository.
- Be aware that this file may contain sensitive information. Handle it with
  the same level of security as you would the original repository.
- Pay special attention to the Repository Description. These contain important context and guidelines specific to this project.

## Notes
- Some files may have been excluded based on .gitignore rules and Repomix's configuration
- Binary files are not included in this packed representation. Please refer to the Repository Structure section for a complete list of file paths, including binary files
- Files matching these patterns are excluded: vendor/**, node_modules/**, storage/**, bootstrap/cache/**, public/storage/**, public/build/**, public/assets/**, public/lib/**, resources/views/welcome.blade.php, tests/**, database/factories/**, database/seeders/**, *.lock, *.log, .env*, .git/**
- Files matching patterns in .gitignore are excluded
- Files matching default ignore patterns are excluded
- Line numbers have been added to the beginning of each line
- Files are sorted by Git change count (files with more changes are at the bottom)

# User Provided Header
Car Mediator Platform Backend Codebase Summary

# Directory Structure
```
.editorconfig
.gitattributes
.gitignore
.repomixignore
app/Enums/CategoryHasBrandTypeEnum.php
app/Enums/CategoryStatusEnum.php
app/Enums/CommissionTypeEnum.php
app/Enums/ComplaintStatusEnum.php
app/Enums/ComplaintSubjectEnum.php
app/Enums/ComplaintUserTypeEnum.php
app/Enums/CustomFieldTypeEnum.php
app/Enums/EntityNameCacheStaticDataEnum.php
app/Enums/PaymentStatusEnum.php
app/Enums/RequestCustomerStatusEnum.php
app/Enums/RequestResponseStatusEnum.php
app/Enums/StatusShippingRequestEnum.php
app/Enums/StatusUserEnum.php
app/Enums/user/UserRoleEnum.php
app/Enums/VendorDocumentTypeEnum.php
app/Events/NewMessage.php
app/Events/NotificationBadgeUpdated.php
app/Exceptions/CustomResponseException.php
app/Exceptions/CustomValidationException.php
app/Helpers/Helper.php
app/Http/Controllers/API/NotificationBadgeController.php
app/Http/Controllers/API/V1/Shared/Auth/AuthController.php
app/Http/Controllers/API/V1/Shared/CacheStaticDataVersionController.php
app/Http/Controllers/API/V1/Shared/CityController.php
app/Http/Controllers/API/V1/Shared/Complaints/ComplaintController.php
app/Http/Controllers/API/V1/Shared/Conversations/ConversationController.php
app/Http/Controllers/API/V1/Shared/Conversations/MessageConversationController.php
app/Http/Controllers/API/V1/Shared/NotificationController.php
app/Http/Controllers/API/V1/User/MyRequests/MyRequestUserController.php
app/Http/Controllers/API/V1/User/ProfileUserController.php
app/Http/Controllers/API/V1/User/Requests/RequestController.php
app/Http/Controllers/API/V1/User/VendorProfileController.php
app/Http/Controllers/Auth/AuthenticatedSessionController.php
app/Http/Controllers/Auth/ConfirmablePasswordController.php
app/Http/Controllers/Auth/EmailVerificationNotificationController.php
app/Http/Controllers/Auth/EmailVerificationPromptController.php
app/Http/Controllers/Auth/NewPasswordController.php
app/Http/Controllers/Auth/PasswordController.php
app/Http/Controllers/Auth/PasswordResetLinkController.php
app/Http/Controllers/Auth/RegisteredUserController.php
app/Http/Controllers/Auth/VerifyEmailController.php
app/Http/Controllers/Controller.php
app/Http/Controllers/Dashboard/AdminLogController.php
app/Http/Controllers/Dashboard/CategoryController.php
app/Http/Controllers/Dashboard/ComplaintManagement/ComplaintManagemntController.php
app/Http/Controllers/Dashboard/CustomerController.php
app/Http/Controllers/Dashboard/CustomFieldController.php
app/Http/Controllers/Dashboard/DashboardController.php
app/Http/Controllers/Dashboard/RequestResponseManagement/RequestResponseManagementController.php
app/Http/Controllers/Dashboard/RequestsManagement/RequestManagementController.php
app/Http/Controllers/Dashboard/Settings/NotificationEmailController.php
app/Http/Controllers/Dashboard/ShippingRequestManagement/ShippingRequestManagementController.php
app/Http/Controllers/Dashboard/VendorsManagement/JoinRequestVendorController.php
app/Http/Controllers/Dashboard/VendorsManagement/VendorManagementController.php
app/Http/Controllers/FileController.php
app/Http/Controllers/ProfileController.php
app/Http/Middleware/LocalizationMiddleware.php
app/Http/Repositories/Dashboard/CategoryRepository.php
app/Http/Repositories/Dashboard/ComplaintManagemnt/ComplaintManagemntRepository.php
app/Http/Repositories/Dashboard/CustomFieldRepository.php
app/Http/Repositories/Dashboard/RequestResponseManagement/ResponseManagementRepository.php
app/Http/Repositories/Dashboard/RequestsManagement/RequestsManagementRepository.php
app/Http/Repositories/Dashboard/ShippingRequestManagement/ShippingRequestManagementRepository.php
app/Http/Repositories/Dashboard/VendorsManagement/JoinRequestVendorRepository.php
app/Http/Repositories/Dashboard/VendorsManagement/VendorManagementRepository.php
app/Http/Repositories/Shared/Auth/AuthRepository.php
app/Http/Repositories/Shared/BrandCarRepository.php
app/Http/Repositories/Shared/CategoryHasBrandFieldRepository.php
app/Http/Repositories/Shared/CategoryRepository.php
app/Http/Repositories/Shared/CityRepository.php
app/Http/Repositories/Shared/ComplaintRepository.php
app/Http/Repositories/Shared/CustomFieldRepository.php
app/Http/Repositories/Shared/RegisterVendorRepository.php
app/Http/Repositories/Shared/ShippingRepository.php
app/Http/Repositories/User/MyRequests/MyRequestUserRepository.php
app/Http/Repositories/User/ProfileUserRepository.php
app/Http/Repositories/User/Requests/RequestRepository.php
app/Http/Requests/Auth/LoginRequest.php
app/Http/Requests/Dashboard/Category/StoreCategoryRequest.php
app/Http/Requests/Dashboard/Category/UpdateCategoryRequest.php
app/Http/Requests/Dashboard/CustomField/SaveCustomFieldRequest.php
app/Http/Requests/ProfileUpdateRequest.php
app/Http/Requests/Shared/Auth/LoginWithOtpRequest.php
app/Http/Requests/Shared/Complaints/CreateComplaintVendorServiceRequest.php
app/Http/Requests/User/Profile/UpdateProfileUserRequest.php
app/Http/Requests/User/Request/CheckEligibleVendorsRequest.php
app/Http/Requests/User/Request/ConfirmOrderRequest.php
app/Http/Requests/User/Request/ConfirmPriceShippingRequest.php
app/Http/Requests/User/Request/ConfirmShippingRequest.php
app/Http/Services/BaseService.php
app/Http/Services/Dashboard/CategoryService.php
app/Http/Services/Dashboard/ComplaintManagemnt/ComplaintManagemntService.php
app/Http/Services/Dashboard/CustomFieldService.php
app/Http/Services/Dashboard/RequestsManagement/RequestsManagementService.php
app/Http/Services/Dashboard/ResponseManagement/ResponseManagementService.php
app/Http/Services/Dashboard/ShippingRequestManagement/ShippingRequestManagementService.php
app/Http/Services/Dashboard/VendorsManagement/JoinRequestVendorService.php
app/Http/Services/Dashboard/VendorsManagement/VendorManagementService.php
app/Http/Services/Shared/Auth/AuthService.php
app/Http/Services/Shared/BrandCarService.php
app/Http/Services/Shared/CacheStaticDataVersionService.php
app/Http/Services/Shared/CategoryHasBrandFieldService.php
app/Http/Services/Shared/CategoryService.php
app/Http/Services/Shared/CityService.php
app/Http/Services/Shared/ComplaintService.php
app/Http/Services/Shared/CustomFieldService.php
app/Http/Services/Shared/EmailService.php
app/Http/Services/Shared/RegisterVendorService.php
app/Http/Services/Shared/ShippingService.php
app/Http/Services/User/MyRequests/MyRequestUserService.php
app/Http/Services/User/ProfileUserService.php
app/Http/Services/User/Requests/RequestService.php
app/Interfaces/RepositoryInterface.php
app/Jobs/SendNewShippingRequestNotificationJob.php
app/Models/Admin.php
app/Models/AdminNotificationEmail.php
app/Models/AdsBanner.php
app/Models/BrandCar.php
app/Models/CacheStaticDataVersion.php
app/Models/Category.php
app/Models/CategoryHasBrandField.php
app/Models/City.php
app/Models/Complaint.php
app/Models/Conversation.php
app/Models/CustomField.php
app/Models/MessageConversation.php
app/Models/Payment.php
app/Models/RequestBrandScope.php
app/Models/RequestCustomer.php
app/Models/RequestCustomFieldValue.php
app/Models/RequestEligibleVendor.php
app/Models/RequestImage.php
app/Models/RequestResponse.php
app/Models/RequestResponseImage.php
app/Models/Setting.php
app/Models/ShippingRequest.php
app/Models/User.php
app/Models/UserOtp.php
app/Models/Vendor.php
app/Models/VendorBrandCar.php
app/Models/VendorCity.php
app/Models/VendorDocument.php
app/Models/VendorReview.php
app/Models/VendorSpecialty.php
app/Notifications/SendNotification.php
app/Observers/AdsBannerObserver.php
app/Observers/BrandCarObserver.php
app/Observers/CategoryHasBrandFieldObserver.php
app/Observers/CategoryObserver.php
app/Observers/CityObserver.php
app/Observers/CustomFieldObserver.php
app/Providers/AppServiceProvider.php
app/Rules/DecimalFormatRule.php
app/Rules/RequiredBrandIfCategoryHasBrandRule.php
app/Rules/SaudiPhoneNumberRule.php
app/Services/EmailService.php
app/Traits/HandlesDatatablesTrait.php
app/Traits/NotificationsTrait.php
app/Utils/CacheUtils.php
app/Utils/ConfigUtils.php
app/Utils/FcmNotificationUtils.php
app/Utils/OTOServiceUtils.php
app/Utils/UploadUtils.php
app/View/Components/AppLayout.php
app/View/Components/GuestLayout.php
artisan
bootstrap/app.php
bootstrap/providers.php
composer.json
config/app.php
config/auth.php
config/broadcasting.php
config/cache.php
config/database.php
config/filesystems.php
config/logging.php
config/mail.php
config/permission.php
config/queue.php
config/reverb.php
config/sanctum.php
config/services.php
config/session.php
database/.gitignore
database/migrations/0001_01_01_000000_create_users_table.php
database/migrations/0001_01_01_000001_create_cache_table.php
database/migrations/0001_01_01_000002_create_jobs_table.php
database/migrations/2025_07_31_142843_create_user_otps_table.php
database/migrations/2025_07_31_144435_create_permission_tables.php
database/migrations/2025_07_31_145932_create_settings_table.php
database/migrations/2025_07_31_146032_create_personal_access_tokens_table.php
database/migrations/2025_07_31_146132_create_cache_static_data_versions_table.php
database/migrations/2025_07_31_150251_create_vendors_table.php
database/migrations/2025_07_31_153126_create_vendor_documents_table.php
database/migrations/2025_07_31_153502_create_cities_table.php
database/migrations/2025_07_31_153602_create_custom_fields_table.php
database/migrations/2025_07_31_154829_create_brand_cars_table.php
database/migrations/2025_07_31_155226_create_vendor_cities_table.php
database/migrations/2025_07_31_155835_create_categories_table.php
database/migrations/2025_07_31_160658_create_category_has_brand_fields_table.php
database/migrations/2025_08_02_135644_create_vendor_specialties_table.php
database/migrations/2025_08_02_141746_create_vendor_brand_cars_table.php
database/migrations/2025_08_02_142437_create_request_customers_table.php
database/migrations/2025_08_02_143918_create_request_brand_scopes_table.php
database/migrations/2025_08_02_144446_create_request_custom_field_values_table.php
database/migrations/2025_08_02_145053_create_request_eligible_vendors_table.php
database/migrations/2025_08_02_145442_create_request_responses_table.php
database/migrations/2025_08_02_145941_create_request_response_images_table.php
database/migrations/2025_08_02_150619_create_vendor_reviews_table.php
database/migrations/2025_08_02_151125_create_complaints_table.php
database/migrations/2025_08_02_153431_create_notifications_table.php
database/migrations/2025_08_16_151912_create_ads_banners_table.php
database/migrations/2025_08_2_144720_create_request_images_table.php
database/migrations/2025_10_19_131703_create_admins_table.php
database/migrations/2025_11_18_134243_create_conversations_table.php
database/migrations/2025_11_18_134332_create_message_conversations_table.php
database/migrations/2025_12_02_191255_create_shipping_requests_table.php
database/migrations/2025_12_07_170954_add_column_responseid_to_conversations_table.php
database/migrations/2026_01_18_202555_add_price_to_shipping_requests_table.php
database/migrations/2026_02_14_183641_add_otoid_to_shipping_requests_table.php
database/migrations/2026_02_25_181942_create_payments_table.php
database/migrations/2026_08_22_223909_add_location_and_name_to_shipping_requests_table.php
database/migrations/2026_08_28_000000_add_packages_to_shipping_requests_table.php
database/migrations/2026_09_05_000000_update_new_spare_parts_category_icon.php
database/migrations/2026_09_05_000001_update_new_spare_parts_category_icon_again.php
database/migrations/2026_09_05_023700_update_new_spare_parts_icon.php
database/migrations/2026_09_05_032200_update_categories_cache_version.php
database/migrations/2026_09_09_144900_create_admin_notification_emails_table.php
lang/ar/auth.php
lang/ar/exceptions.php
lang/ar/messages.php
lang/ar/pagination.php
lang/ar/passwords.php
lang/ar/validation.php
lang/en/auth.php
lang/en/exceptions.php
lang/en/messages.php
lang/en/pagination.php
lang/en/passwords.php
lang/en/validation.php
nixpacks.toml
package.json
phpunit.xml
postcss.config.js
public/.htaccess
public/favicon.ico
public/index.php
public/robots.txt
public/uploads/categories-icon/car-accessories-icon.png
public/uploads/categories-icon/heavy_equipment-icon.png
public/uploads/categories-icon/img_10202025174104326268f67430c9696.png
public/uploads/categories-icon/img_10202025184947852268f6844b7a4e5.png
public/uploads/categories-icon/img_10202025185126699668f684ae90aa2.png
public/uploads/categories-icon/new-cars-icon.png
public/uploads/categories-icon/new-pease.png
public/uploads/categories-icon/new-spare-parts-icon-v2.png
public/uploads/categories-icon/new-spare-parts-icon-v4.png
public/uploads/categories-icon/spare-parts-icon.png
public/uploads/categories-icon/spare-parts-new-icon.png
public/uploads/categories-icon/tow-truck-icon.png
public/uploads/categories-icon/trucks-icon.png
public/uploads/img_10132025174623438168ed3aef931ff.png
public/uploads/img_10132025180053299768ed3e5527db1.png
public/uploads/img_10132025180249846068ed3ec9e4fa4.jpg
public/uploads/img_10132025180442223468ed3f3a0b0e2.jpg
public/uploads/img_10132025180510224768ed3f56a925c.png
public/uploads/img_10132025181001352068ed407985cf6.png
public/uploads/img_10182025151444937068f3aee42d1c9.png
public/uploads/img_10202025173809314168f67381b36b2.png
public/uploads/img_12282025185919312469517e0717e12.jpg
public/uploads/img_12282025190026425869517e4a1f278.jpg
public/uploads/img_1228202519093170566951806ba924a.jpg
public/uploads/img_122820251915299216695181d19dfb5.png
public/uploads/img_122820251915552725695181eb2eb4f.png
public/uploads/img_1228202519212734436951833779b68.png
public/uploads/img_1228202519260371776951844b58726.jpg
public/uploads/listining_image1.jpeg
public/uploads/listining_image2.jpeg
README.md
repomix.config.json
resources/css/app.css
resources/js/app.js
resources/js/bootstrap.js
resources/js/echo.js
resources/views/auth/confirm-password.blade.php
resources/views/auth/forgot-password.blade.php
resources/views/auth/login.blade.php
resources/views/auth/register.blade.php
resources/views/auth/reset-password.blade.php
resources/views/auth/verify-email.blade.php
resources/views/components/application-logo.blade.php
resources/views/components/auth-session-status.blade.php
resources/views/components/custom/input.blade.php
resources/views/components/custom/label-input.blade.php
resources/views/components/custom/label-textarea.blade.php
resources/views/components/custom/label.blade.php
resources/views/components/danger-button.blade.php
resources/views/components/dropdown-link.blade.php
resources/views/components/dropdown.blade.php
resources/views/components/input-error.blade.php
resources/views/components/input-label.blade.php
resources/views/components/modal.blade.php
resources/views/components/nav-link.blade.php
resources/views/components/primary-button.blade.php
resources/views/components/responsive-nav-link.blade.php
resources/views/components/secondary-button.blade.php
resources/views/components/text-input.blade.php
resources/views/dashboard.blade.php
resources/views/dashboard/admin-logs/index.blade.php
resources/views/dashboard/categories/create.blade.php
resources/views/dashboard/categories/edit.blade.php
resources/views/dashboard/categories/index.blade.php
resources/views/dashboard/complaint-management/index.blade.php
resources/views/dashboard/custom-fields/index.blade.php
resources/views/dashboard/customers/index.blade.php
resources/views/dashboard/dashboard.blade.php
resources/views/dashboard/included/footer.blade.php
resources/views/dashboard/included/header.blade.php
resources/views/dashboard/included/sidebar.blade.php
resources/views/dashboard/included/toast-message.blade.php
resources/views/dashboard/layouts/app.blade.php
resources/views/dashboard/requests-management/index.blade.php
resources/views/dashboard/requests-management/partials/request-details-section.blade.php
resources/views/dashboard/requests-management/partials/user-details-request-section.blade.php
resources/views/dashboard/requests-management/show.blade.php
resources/views/dashboard/response-management/index.blade.php
resources/views/dashboard/settings/notification-emails/index.blade.php
resources/views/dashboard/shipping-request-management/index.blade.php
resources/views/dashboard/shipping-request-management/partails/details-shipping-section.blade.php
resources/views/dashboard/shipping-request-management/partails/shipping-section.blade.php
resources/views/dashboard/shipping-request-management/show.blade.php
resources/views/dashboard/vendors-management/join-request-vendor/index.blade.php
resources/views/dashboard/vendors-management/join-request-vendor/show-vendor.blade.php
resources/views/dashboard/vendors-management/vendors-manage/index.blade.php
resources/views/dashboard/vendors-management/vendors-manage/show.blade.php
resources/views/layouts/app.blade.php
resources/views/layouts/guest.blade.php
resources/views/layouts/navigation.blade.php
resources/views/profile/edit.blade.php
resources/views/profile/partials/delete-user-form.blade.php
resources/views/profile/partials/update-password-form.blade.php
resources/views/profile/partials/update-profile-information-form.blade.php
resources/views/shared/alert_danger.blade.php
resources/views/shared/loading_modal.blade.php
resources/views/shared/show-alert-validation-error.blade.php
routes/api_user_v1.php
routes/api_vendor_v1.php
routes/api.php
routes/auth.php
routes/channels.php
routes/console.php
routes/web.php
tailwind.config.js
vite.config.js
```

# Files

## File: .editorconfig
```
 1: root = true
 2: 
 3: [*]
 4: charset = utf-8
 5: end_of_line = lf
 6: indent_size = 4
 7: indent_style = space
 8: insert_final_newline = true
 9: trim_trailing_whitespace = true
10: 
11: [*.md]
12: trim_trailing_whitespace = false
13: 
14: [*.{yml,yaml}]
15: indent_size = 2
16: 
17: [docker-compose.yml]
18: indent_size = 4
```

## File: .gitattributes
```
 1: * text=auto eol=lf
 2: 
 3: *.blade.php diff=html
 4: *.css diff=css
 5: *.html diff=html
 6: *.md diff=markdown
 7: *.php diff=php
 8: 
 9: /.github export-ignore
10: CHANGELOG.md export-ignore
11: .styleci.yml export-ignore
```

## File: .gitignore
```
 1: *.log
 2: .DS_Store
 3: .env
 4: .env.backup
 5: .env.production
 6: .phpactor.json
 7: .phpunit.result.cache
 8: /.fleet
 9: /.idea
10: /.nova
11: /.phpunit.cache
12: /.vscode
13: /.zed
14: /auth.json
15: /node_modules
16: /public/build
17: /public/hot
18: /public/storage
19: /storage/*.key
20: /storage/app/json/firebase/
21: /storage/pail
22: /vendor
23: Homestead.json
24: Homestead.yaml
25: Thumbs.db
```

## File: .repomixignore
```
 1: vendor/
 2: node_modules/
 3: storage/
 4: bootstrap/cache/
 5: public/storage/
 6: public/build/
 7: tests/
 8: database/factories/
 9: database/seeders/
10: *.lock
11: *.log
12: .env*
13: .git/
```

## File: app/Enums/CategoryHasBrandTypeEnum.php
```php
1: <?php
2: 
3: namespace App\Enums;
4: 
5: enum CategoryHasBrandTypeEnum: string
6: {
7:     case BrandCars = 'brand_cars';
8: }
```

## File: app/Enums/CategoryStatusEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum CategoryStatusEnum: string
 6: {
 7:     case Active = 'Active';
 8:     case Inactive = 'Inactive';
 9:     case Soon = 'Soon';
10: }
```

## File: app/Enums/CommissionTypeEnum.php
```php
1: <?php
2: 
3: namespace App\Enums;
4: 
5: enum CommissionTypeEnum: string
6: {
7:     case Rate = 'rate';
8:     case Amount = 'amount';
9: }
```

## File: app/Enums/ComplaintStatusEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum ComplaintStatusEnum: string
 6: {
 7:     case New = 'new';
 8:     case UnderReview = 'under_review';
 9:     case Resolved = 'resolved';
10:     case Rejected = 'rejected';
11:     case Closed = 'closed';
12: }
```

## File: app/Enums/ComplaintSubjectEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum ComplaintSubjectEnum: string
 6: {
 7:     case Transaction = 'transaction';
 8:     case VendorService = 'vendor_service';
 9:     case ProductQuality = 'product_quality';
10:     case Delivery = 'delivery';
11:     case Payment = 'payment';
12:     case Technical = 'technical';
13:     case Fraud = 'fraud';
14:     case Other = 'other';
15: 
16:     public static function trans($value)
17:     {
18:         return match ($value) {
19:             self::Transaction->value => 'مشكلة في معاملة',
20:             self::VendorService->value => 'سوء خدمة بائع',
21:             self::ProductQuality->value => 'جودة المنتج',
22:             self::Delivery->value => 'مشكلة توصيل',
23:             self::Payment->value => 'مشكلة دفع',
24:             self::Technical->value => 'مشكلة فنية',
25:             self::Fraud->value => 'احتيال',
26:             self::Other->value => 'اخرى',
27:             default => '',
28:         };
29:     }
30: }
```

## File: app/Enums/ComplaintUserTypeEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum ComplaintUserTypeEnum: string
 6: {
 7:     case User = 'user';
 8:     case Vendor = 'vendor';
 9:     case Admin = 'admin';
10: }
```

## File: app/Enums/CustomFieldTypeEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum CustomFieldTypeEnum: string
 6: {
 7:     case Text = 'text';
 8:     case TextArea = 'text_area';
 9:     case Number = 'number';
10:     case Select = 'select';
11:     case Checkbox = 'checkbox';
12:     case Radio = 'radio';
13:     case Date = 'date';
14:     case File = 'file';
15: }
```

## File: app/Enums/EntityNameCacheStaticDataEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum EntityNameCacheStaticDataEnum: string
 6: {
 7:     case Cities = 'cities';
 8:     case BrandsCars = 'brands_cars';
 9:     case Categories = 'categories';
10:     case CategoryHasBrandField = 'category_has_brand_field';
11:     case CustomFields = 'custom_fields';
12:     case AdsBanner = 'ads_banners';
13: }
```

## File: app/Enums/PaymentStatusEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum PaymentStatusEnum: string
 6: {
 7:     case Pending = 'Pending';
 8:     case Success = 'Success';
 9:     case Failed = 'Failed';
10: }
```

## File: app/Enums/RequestCustomerStatusEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum RequestCustomerStatusEnum: string
 6: {
 7:     case Open = 'open';
 8:     case Closed = 'closed';
 9:     case Canceled = 'canceled';
10:     case Completed = 'completed';
11: 
12:     public static function trans($value)
13:     {
14:         return match ($value) {
15:             self::Open->value => 'مفتوح',
16:             self::Closed->value => 'مغلق',
17:             self::Canceled->value => 'ملغي',
18:             self::Completed->value => 'مكتمل',
19:             default => '',
20:         };
21:     }
22: }
```

## File: app/Enums/RequestResponseStatusEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum RequestResponseStatusEnum: string
 6: {
 7:     case Available = 'available';
 8:     case AvailableWithDifference = 'available_with_difference';
 9:     case Unavailable = 'unavailable';
10: }
```

## File: app/Enums/StatusShippingRequestEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: 
 6: enum StatusShippingRequestEnum: string
 7: {
 8:     case Pending = 'Pending';
 9:     case InProgress = 'InProgress';
10:     case Completed = 'Completed';
11: 
12:     public static function trans($value)
13:     {
14:         return match ($value) {
15:             self::Pending->value => 'قيد الانتظار',
16:             self::InProgress->value => 'قيد التنفيذ',
17:             self::Completed->value => 'مكتمل',
18:             default => $value,
19:         };
20:     }
21: }
```

## File: app/Enums/StatusUserEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums;
 4: 
 5: enum StatusUserEnum: string
 6: {
 7:     case Pending = 'Pending';
 8:     case Active = 'Active';
 9:     case Inactive = 'Inactive';
10:     case Suspended = 'Suspended';
11:     case Rejected = 'Rejected';
12: }
```

## File: app/Enums/user/UserRoleEnum.php
```php
 1: <?php
 2: 
 3: namespace App\Enums\user;
 4: 
 5: enum UserRoleEnum: string
 6: {
 7:     case Super_Admin = 'Super-Admin';
 8:     case Admin = 'admin';
 9:     case Vendor = 'vendor';
10:     case User = 'user';
11: }
```

## File: app/Enums/VendorDocumentTypeEnum.php
```php
1: <?php
2: 
3: namespace App\Enums;
4: 
5: enum VendorDocumentTypeEnum: string
6: {
7:     case National_Id = 'National_Id';
8:     case Commercial_Record = 'Commercial_Record';
9: }
```

## File: app/Events/NotificationBadgeUpdated.php
```php
 1: <?php
 2: 
 3: namespace App\Events;
 4: 
 5: use Illuminate\Broadcasting\Channel;
 6: use Illuminate\Broadcasting\InteractsWithSockets;
 7: use Illuminate\Broadcasting\PrivateChannel;
 8: use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
 9: use Illuminate\Foundation\Events\Dispatchable;
10: use Illuminate\Queue\SerializesModels;
11: 
12: class NotificationBadgeUpdated implements ShouldBroadcast
13: {
14:     use Dispatchable, InteractsWithSockets, SerializesModels;
15: 
16:     public $userId;
17:     public $category;
18:     public $unreadCounts;
19: 
20:     public function __construct($userId, $category, array $unreadCounts)
21:     {
22:         $this->userId = $userId;
23:         $this->category = $category;
24:         $this->unreadCounts = $unreadCounts;
25:     }
26: 
27:     public function broadcastOn(): array
28:     {
29:         return [new PrivateChannel("user.{$this->userId}")];
30:     }
31: 
32:     public function broadcastAs()
33:     {
34:         return 'notification.badge.updated';
35:     }
36: 
37:     public function broadcastWith(): array
38:     {
39:         return [
40:             'user_id' => $this->userId,
41:             'category' => $this->category,
42:             'unread_counts' => $this->unreadCounts,
43:         ];
44:     }
45: }
```

## File: app/Exceptions/CustomResponseException.php
```php
 1: <?php
 2: 
 3: namespace App\Exceptions;
 4: 
 5: use Exception;
 6: use Illuminate\Http\Request;
 7: use Illuminate\Http\JsonResponse;
 8: use Illuminate\Http\RedirectResponse;
 9: use Illuminate\Support\Facades\Log;
10: use Symfony\Component\HttpFoundation\Response;
11: 
12: class CustomResponseException extends Exception
13: {
14:     /**
15:      * @param string $message The error message for the user
16:      * @param int $code HTTP status code (e.g., 404, 422, 500)
17:      * @param ?\Throwable $previous Previous exception for tracing
18:      */
19:     public function __construct(string $message = "", int $code = Response::HTTP_INTERNAL_SERVER_ERROR, ?\Throwable $previous = null)
20:     {
21:         parent::__construct($message, $code, $previous);
22:     }
23: 
24:     /**
25:      * Log exception details.
26:      * Laravel will automatically pass the request.
27:      */
28:     public function report(): void
29:     {
30:         $exceptionToLog = $this->getPrevious() ?? $this;
31: 
32:         $request = request();
33: 
34:         Log::error($this->getMessage(), [
35:             'exception' => static::class,
36:             'excep_details' => $exceptionToLog->getMessage(),
37:             'userId' => getCurrUserIdHelper() ?? 'Guest',
38:             'code' => $this->getCode(),
39:             'file' => $this->getFile(),
40:             'line' => $this->getLine(),
41:             'url' => $request->fullUrl(),
42:             'request' => filterSensitiveDataFromLogHelper($request ? $request->all() : []),
43:         ]);
44:     }
45: 
46:     /**
47:      * Render the exception as an HTTP response.
48:      * Laravel will automatically pass the request.
49:      *
50:      * @param Request $request
51:      * @return JsonResponse|RedirectResponse
52:      */
53:     public function render(Request $request): JsonResponse|RedirectResponse
54:     {
55:         if (requestIsJsonApiHelper()) {
56:             $response = [
57:                 'status' => false,
58:                 'message' => $this->getMessage(),
59:                 'errors' => null,
60:             ];
61: 
62:             $statusCode = $this->isValidHttpStatusCode($this->getCode()) ? $this->getCode() : Response::HTTP_INTERNAL_SERVER_ERROR;
63: 
64:             return response()->json($response, $statusCode);
65:         }
66: 
67:         return back()->with('error', $this->getMessage())->withInput();
68:     }
69: 
70:     private function isValidHttpStatusCode(int $code): bool
71:     {
72:         return $code >= 100 && $code < 600;
73:     }
74: }
```

## File: app/Exceptions/CustomValidationException.php
```php
 1: <?php
 2: 
 3: namespace App\Exceptions;
 4: 
 5: use Illuminate\Validation\ValidationException;
 6: use Illuminate\Support\Facades\Log;
 7: use Symfony\Component\HttpFoundation\Response;
 8: 
 9: class CustomValidationException extends ValidationException
10: {
11:     public function render($request)
12:     {
13:         if (requestIsJsonApiHelper()) {
14:             return response()->json([
15:                 'status' => false,
16:                 'code' => 'VALIDATION_FAILED',
17:                 'message' => __('exceptions.validation_exception_422'),
18:                 'errors' => $this->errors(),
19:             ], Response::HTTP_UNPROCESSABLE_ENTITY);
20:         }
21: 
22:         return redirect()->back()
23:             ->withErrors($this->validator)
24:             ->withInput();
25: 
26:         return parent::render($request);
27:     }
28: 
29:     public function report()
30:     {
31:         $request = request();
32: 
33:         Log::warning('Validation failed', [
34:             'exception' => static::class,
35:             'userId' => getCurrUserIdHelper() ?? 'Guest',
36:             'endpoint' => $request->fullUrl(),
37:             'method' => $request->method(),
38:             'errors' => $this->errors(),
39:             'input' => filterSensitiveDataFromLogHelper($request ? $request->all() : [])
40:         ]);
41:     }
42: }
```

## File: app/Helpers/Helper.php
```php
  1: <?php
  2: 
  3: // use App\Enums\UserRoleEnum;
  4: // use Carbon\Carbon;
  5: // use Illuminate\Http\Request;
  6: // use Illuminate\Support\Number;
  7: 
  8: use App\Models\Vendor;
  9: use Illuminate\Http\Request;
 10: use Illuminate\Support\Facades\Log;
 11: use Illuminate\Support\Arr;
 12: use Illuminate\Validation\ValidationException;
 13: use Symfony\Component\HttpFoundation\Response;
 14: 
 15: if (!function_exists('currUserHelper')) {
 16:     function currUserHelper()
 17:     {
 18:         try {
 19:             if (auth('sanctum')->check()) {
 20:                 return auth('sanctum')->user();
 21:             }
 22: 
 23:             if (auth('web')->check()) {
 24:                 return auth('web')->user();
 25:             }
 26: 
 27:             // if (auth('admin')->check()) {
 28:             //     return auth('admin')->user();
 29:             // }
 30:         } catch (\Throwable $e) {
 31:             Log::warning('currUserHelper failed: ' . $e->getMessage());
 32:         }
 33: 
 34:         return null;
 35:     }
 36: }
 37: 
 38: if (!function_exists('getCurrUserIdHelper')) {
 39:     function getCurrUserIdHelper(): int
 40:     {
 41:         return currUserHelper()?->id ?? 0;
 42:     }
 43: }
 44: 
 45: if (!function_exists('getCurrVendorIdHelper')) {
 46:     function getCurrVendorIdHelper(): int
 47:     {
 48:         $userId = currUserHelper()?->id ?? 0;
 49:         return Vendor::where('user_id', $userId)->value('id') ?? 0;
 50:     }
 51: }
 52: 
 53: if (!function_exists('getRoleCurrUserHelper')) {
 54:     function getRoleCurrUserHelper()
 55:     {
 56:         return currUserHelper()->roles->pluck('name')[0] ?? '';
 57:     }
 58: }
 59: 
 60: if (!function_exists('requestIsJsonApiHelper')) {
 61:     /**
 62:      * check if the request expects a JSON/Api response
 63:      */
 64:     function requestIsJsonApiHelper(): bool
 65:     {
 66:         $request = request();
 67: 
 68:         if ($request->expectsJson()) {
 69:             return true;
 70:         }
 71: 
 72:         if ($request->is('api/*') || $request->is('*/api/*')) {
 73:             return true;
 74:         }
 75: 
 76:         $acceptHeader = $request->header('Accept');
 77: 
 78:         if ($acceptHeader) {
 79:             $contentTypes = explode(',', $acceptHeader);
 80:             foreach ($contentTypes as $type) {
 81:                 $type = strtolower(trim(explode(';', $type)[0]));
 82: 
 83:                 if ($type === 'application/json' || $type === 'application/vnd.api+json') {
 84:                     return true;
 85:                 }
 86:             }
 87:         }
 88: 
 89:         if ($request->header('X-Requested-With') === 'XMLHttpRequest') {
 90:             return true;
 91:         }
 92: 
 93:         return false;
 94:     }
 95: }
 96: 
 97: if (!function_exists('filterSensitiveDataFromLogHelper')) {
 98:     /**
 99:      * Filter sensitive data from logs
100:      */
101:     function filterSensitiveDataFromLogHelper(array $data): array
102:     {
103:         return Arr::except($data, [
104:             'password',
105:             'password_confirmation',
106:             'credit_card',
107:             'cvv',
108:             'token',
109:             'api_token',
110:             'secret'
111:         ]);
112:     }
113: }
114: 
115: if (!function_exists('buildApiResponseHelper')) {
116:     function buildApiResponseHelper(bool $success, string $message, $result = null, int $statusCode = Response::HTTP_OK)
117:     {
118:         $response = [
119:             'success' => $success,
120:             'message' => $message,
121:             'result' => $result,
122:         ];
123: 
124:         return response()->json($response, $statusCode);
125:     }
126: }
127: 
128: if (!function_exists('resultApiPaginationHelper')) {
129:     function resultApiPaginationHelper($result)
130:     {
131:         return [
132:             'current_page' => $result->currentPage(),
133:             'last_page' => $result->lastPage(),
134:             'data' => $result->items(),
135:         ];
136:     }
137: }
138: 
139: 
140: // function currUserRoleNameHelper()
141: // {
142: //     $role = currUserHelper()->roles->pluck('name')[0] ?? '';
143: 
144: //     switch ($role) {
145: //         case UserRoleEnum::TRAINEES->value:
146: //             return 'المتدربين';
147: //             break;
148: //         case UserRoleEnum::SUPER_ADMIN->value:
149: //             return 'مدير النظام';
150: //             break;
151: //         case UserRoleEnum::ADMIN->value:
152: //             return 'الإدارة';
153: //             break;
154: //         case UserRoleEnum::ADMISSION->value:
155: //             return 'القبول والتسجيل';
156: //             break;
157: //         case UserRoleEnum::TEACHER->value:
158: //             return 'المدربين';
159: //             break;
160: //         default:
161: //             return config('app.name');
162: //     }
163: // }
164: 
165: // function getCurrUserRoleHelper()
166: // {
167: //     return currUserHelper()->roles->pluck('name')[0] ?? '';
168: // }
169: 
170: // function activeGuardHelper()
171: // {
172: //     if (auth('web')->check()) {
173: //         return 'web';
174: //     } else if (auth('admin')->check()) {
175: //         return 'admin';
176: //     }
177: 
178: //     return null;
179: // }
180: 
181: //buildApiResponse
182: // function sendResponseHelper($success, $message, $result = null)
183: // {
184: //     $response = [
185: //         'success' => $success,
186: //         'message' => $message,
187: //         'result' => $result,
188: //     ];
189: 
190: //     return response()->json($response);
191: // }
192: 
193: // function responseDataTableHelper($draw, $recordsCount, $totalRecordswithFilter, $records)
194: // {
195: //     $response = [
196: //         "draw" => $draw,
197: //         "iTotalRecords" => $recordsCount,
198: //         "iTotalDisplayRecords" => $totalRecordswithFilter,
199: //         "aaData" =>  $records
200: //     ];
201: //     return response()->json($response);
202: // }
203: // /**
204: //  * for select2 jquery
205: //  */
206: // function responseSearchSelect2Helper($result)
207: // {
208: //     return response()->json([
209: //         "results" => $result->items(),
210: //         "pagination" => array(
211: //             "more" => $result->currentPage() < $result->lastPage()
212: //         )
213: //     ]);
214: // }
215: 
216: // function getColumnNameDataTableHelper(Request $request, $orderArr)
217: // {
218: //     $columnIndex = (!is_null($orderArr) && count($orderArr) !== 0) ?  $orderArr[0]['column'] : 0;
219: //     $columnName =  !empty($request->get('columns')[$columnIndex]['data']) ? $request->get('columns')[$columnIndex]['data'] : $request->get('columns')[$columnIndex]['name'];
220: //     return $columnName;
221: // }
222: 
223: // function getColumnSortOrderDataTableHelper($orderArr)
224: // {
225: //     return (!is_null($orderArr) && count($orderArr) !== 0) ?  $orderArr[0]['dir'] : 'asc'; // asc or desc
226: // }
227: 
228: // function getStatusTraineeAttendanceHelper($traineeAttendance, $day)
229: // {
230: //     foreach ($traineeAttendance as $item) {
231: //         if (Carbon::parse($item['date'])->day == $day) {
232: //             return $item['status'];
233: //         }
234: //     }
235: // }
236: 
237: // function currencyFormatHelper($amount)
238: // {
239: //     return Number::format(($amount ?? 0)) . ' ' . 'ر.س';
240: // }
241: 
242: // function generalSettingAppHelper(string $key, $default = '')
243: // {
244: //     return app('shared_general_setting_app')[$key] ?? $default;
245: // }
```

## File: app/Http/Controllers/API/V1/Shared/Auth/AuthController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared\Auth;
 4: 
 5: use App\Exceptions\CustomResponseException;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Requests\Shared\Auth\LoginWithOtpRequest;
 8: use App\Http\Services\Shared\Auth\AuthService;
 9: use Exception;
10: use Illuminate\Http\Request;
11: 
12: class AuthController extends Controller
13: {
14:     public function __construct(protected AuthService $authService) {}
15: 
16:     public function register(Request $request)
17:     {
18:         try {
19: 
20:             return $this->authService->register($request);
21:         } catch (Exception $e) {
22:             throw new CustomResponseException(message: __('exceptions.internal_server_error_500'), previous: $e);
23:         }
24:     }
25: 
26:     public function loginWithOtp(LoginWithOtpRequest $request)
27:     {
28:         try {
29:             return $this->authService->loginWithOtp($request);
30:         } catch (Exception $e) {
31:             throw new CustomResponseException(message: 'حدث خطأ أثناء تسجيل الدخول', previous: $e);
32:         }
33:     }
34: 
35: 
36:     public function logout(Request $request)
37:     {
38:         $user = $request->user();
39: 
40:         if (!$user) {
41:             abort(401); //Unauthenticated
42:         }
43: 
44:         $user->currentAccessToken()->delete();
45: 
46:         return buildApiResponseHelper(true, 'تم تسجيل الخروج بنجاح');
47:     }
48: }
```

## File: app/Http/Controllers/API/V1/Shared/CacheStaticDataVersionController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared;
 4: 
 5: use App\Exceptions\CustomResponseException;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Resources\CacheUpdateResource;
 8: use App\Http\Services\Shared\CacheStaticDataVersionService;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Arr;
11: use Illuminate\Support\Facades\Log;
12: 
13: class CacheStaticDataVersionController extends Controller
14: {
15:     public function __construct(protected CacheStaticDataVersionService $service) {}
16: 
17:     public function checkUpdates(Request $request)
18:     {
19:         $result = $this->service->checkUpdates($request);
20:         try {
21:             // If there are no updates at all
22:             if (!$result['hasUpdates']) {
23:                 return buildApiResponseHelper(false, __('messages.no_data_found')); // Not Modified
24:             }
25: 
26:             return buildApiResponseHelper(true, __('messages.data_fetched_successfully'), Arr::except($result, ['hasUpdates']));
27:         } catch (\Exception $e) {
28:             throw new CustomResponseException(message: __('exceptions.internal_server_error_500'), previous: $e);
29:         }
30:     }
31: }
```

## File: app/Http/Controllers/API/V1/Shared/Complaints/ComplaintController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared\Complaints;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Requests\Shared\Complaints\CreateComplaintVendorServiceRequest;
 7: use App\Http\Services\Shared\ComplaintService;
 8: use App\Traits\NotificationsTrait;
 9: 
10: class ComplaintController extends Controller
11: {
12:     use NotificationsTrait;
13: 
14:     public function __construct(protected ComplaintService $complaintService) {}
15: 
16:     public function complaintVendorService(CreateComplaintVendorServiceRequest $request)
17:     {
18:         $created = $this->complaintService->complaintVendorService($request);
19: 
20:         if (!$created)
21:             return buildApiResponseHelper(false, 'لم يتم تسجيل البلاغ ... الرجاء المحاولة مرة اخرى');
22: 
23:         $this->notifyToAdmin(title: 'بلاغ جديد', body: 'بلاغ عن الطلب (' . $request->requestId . ') ' . ' - الرد رقم (' . $request->responseId . ')');
24: 
25:         return buildApiResponseHelper(true, 'تم تسجيل البلاغ بنجاح ... سيتم الرد عليك من قبل الإدارة لاحقاً');
26:     }
27: }
```

## File: app/Http/Controllers/API/V1/Shared/NotificationController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Traits\NotificationsTrait;
 7: use Illuminate\Http\Request;
 8: 
 9: class NotificationController extends Controller
10: {
11:     use NotificationsTrait;
12: 
13:     public function index(Request $request)
14:     {
15:         return $this->getNotifications($request);
16:     }
17: }
```

## File: app/Http/Controllers/API/V1/User/MyRequests/MyRequestUserController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\User\MyRequests;
 4: 
 5: use App\Enums\RequestCustomerStatusEnum;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Services\User\MyRequests\MyRequestUserService;
 8: use App\Models\RequestCustomer;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\Log;
11: use Illuminate\Support\Facades\Validator;
12: use Illuminate\Validation\Rule;
13: 
14: class MyRequestUserController extends Controller
15: {
16:     public function __construct(protected MyRequestUserService $myRequestUserService) {}
17: 
18:     public function getMyRequest(Request $request)
19:     {
20:         $result = $this->myRequestUserService->getMyRequest();
21: 
22:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($result));
23:     }
24: 
25:     public function getMyRequestById(Request $request, $requestId)
26:     {
27:         return $this->myRequestUserService->getMyRequestById($request, $requestId);
28:     }
29: 
30:     public function getResponsesMyRequest(Request $request, $requestId)
31:     {
32:         $result = $this->myRequestUserService->getResponsesMyRequest($request, $requestId);
33:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($result));
34:     }
35: 
36:     public function getResponseRequestById(Request $request, $responseId)
37:     {
38:         $result = $this->myRequestUserService->getResponseRequestById($request, $responseId);
39:         return $result
40:             ? buildApiResponseHelper(true, 'تم التحميل بنجاح', $result)
41:             : buildApiResponseHelper(false, 'لا يوجد رد ');
42:     }
43: 
44:     public function updateStatus(Request $request)
45:     {
46:         $validator = Validator::make($request->all(), [
47:             'id' => 'required|integer|exists:request_customers,id',
48:             'status' => ['required', Rule::enum(RequestCustomerStatusEnum::class)],
49:         ]);
50: 
51:         if ($validator->fails()) {
52:             return response()->json($validator->errors(), 422);
53:         }
54: 
55:         $requestCustomer = RequestCustomer::where('id', $request->id)->where('user_id', getCurrUserIdHelper())->first();
56:         if (!$requestCustomer) {
57:             return buildApiResponseHelper(false, 'لا يوجد طلب');
58:         }
59: 
60:         $requestCustomer->status = $request->status;
61: 
62:         if (! $requestCustomer->save())
63:             return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
64: 
65:         $message = '';
66: 
67:         if ($request->status == RequestCustomerStatusEnum::Open->value) {
68:             $message = 'تم تفعيل الطلب بنجاح';
69:         } else if ($request->status == RequestCustomerStatusEnum::Closed->value) {
70:             $message = 'تم إغلاق الطلب بنجاح';
71:         } else if ($request->status == RequestCustomerStatusEnum::Canceled->value) {
72:             $message = 'تم إلغاء الطلب بنجاح';
73:         } else if ($request->status == RequestCustomerStatusEnum::Completed->value) {
74:             $message = 'تم إكتمال الطلب بنجاح';
75:         }
76: 
77:         return buildApiResponseHelper(true, $message);
78:     }
79: }
```

## File: app/Http/Controllers/API/V1/User/ProfileUserController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\User;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Requests\User\Profile\UpdateProfileUserRequest;
 7: use App\Http\Services\User\ProfileUserService;
 8: use Illuminate\Http\Request;
 9: use Illuminate\Support\Facades\DB;
10: 
11: class ProfileUserController extends Controller
12: {
13:     public function __construct(protected ProfileUserService $service) {}
14: 
15:     public function getUserProfile(Request $request)
16:     {
17:         $user = $this->service->getUserProfile();
18: 
19:         return $user ?
20:             buildApiResponseHelper(true, 'تم جلب بياناتك بنجاح', $user)
21:             : buildApiResponseHelper(false, 'لا توجد بيانات');
22:     }
23: 
24:     public function updateUserProfile(UpdateProfileUserRequest $request)
25:     {
26:         DB::beginTransaction();
27:         try {
28:             $user = $this->service->updateUserProfile($request);
29:             DB::commit();
30:             return buildApiResponseHelper(true, 'تم تحديث بياناتك بنجاح', ['user' => $user]);
31:         } catch (\Exception $e) {
32:             DB::rollBack();
33:             report($e);
34:             return buildApiResponseHelper(false, 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
35:         }
36:     }
37: }
```

## File: app/Http/Controllers/Auth/AuthenticatedSessionController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Requests\Auth\LoginRequest;
 7: use Illuminate\Http\RedirectResponse;
 8: use Illuminate\Http\Request;
 9: use Illuminate\Support\Facades\Auth;
10: use Illuminate\View\View;
11: 
12: class AuthenticatedSessionController extends Controller
13: {
14:     /**
15:      * Display the login view.
16:      */
17:     public function create(): View
18:     {
19:         return view('auth.login');
20:     }
21: 
22:     /**
23:      * Handle an incoming authentication request.
24:      */
25:     public function store(LoginRequest $request): RedirectResponse
26:     {
27:         $request->authenticate();
28: 
29:         $request->session()->regenerate();
30: 
31:         return redirect()->intended(route('dashboard', absolute: false));
32:     }
33: 
34:     /**
35:      * Destroy an authenticated session.
36:      */
37:     public function destroy(Request $request): RedirectResponse
38:     {
39:         Auth::guard('admin')->logout();
40: 
41:         $request->session()->invalidate();
42: 
43:         $request->session()->regenerateToken();
44: 
45:         return redirect('/');
46:     }
47: }
```

## File: app/Http/Controllers/Auth/ConfirmablePasswordController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Auth;
 9: use Illuminate\Validation\ValidationException;
10: use Illuminate\View\View;
11: 
12: class ConfirmablePasswordController extends Controller
13: {
14:     /**
15:      * Show the confirm password view.
16:      */
17:     public function show(): View
18:     {
19:         return view('auth.confirm-password');
20:     }
21: 
22:     /**
23:      * Confirm the user's password.
24:      */
25:     public function store(Request $request): RedirectResponse
26:     {
27:         if (! Auth::guard('web')->validate([
28:             'email' => $request->user()->email,
29:             'password' => $request->password,
30:         ])) {
31:             throw ValidationException::withMessages([
32:                 'password' => __('auth.password'),
33:             ]);
34:         }
35: 
36:         $request->session()->put('auth.password_confirmed_at', time());
37: 
38:         return redirect()->intended(route('dashboard', absolute: false));
39:     }
40: }
```

## File: app/Http/Controllers/Auth/EmailVerificationNotificationController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: 
 9: class EmailVerificationNotificationController extends Controller
10: {
11:     /**
12:      * Send a new email verification notification.
13:      */
14:     public function store(Request $request): RedirectResponse
15:     {
16:         if ($request->user()->hasVerifiedEmail()) {
17:             return redirect()->intended(route('dashboard', absolute: false));
18:         }
19: 
20:         $request->user()->sendEmailVerificationNotification();
21: 
22:         return back()->with('status', 'verification-link-sent');
23:     }
24: }
```

## File: app/Http/Controllers/Auth/EmailVerificationPromptController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: use Illuminate\View\View;
 9: 
10: class EmailVerificationPromptController extends Controller
11: {
12:     /**
13:      * Display the email verification prompt.
14:      */
15:     public function __invoke(Request $request): RedirectResponse|View
16:     {
17:         return $request->user()->hasVerifiedEmail()
18:                     ? redirect()->intended(route('dashboard', absolute: false))
19:                     : view('auth.verify-email');
20:     }
21: }
```

## File: app/Http/Controllers/Auth/NewPasswordController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Models\User;
 7: use Illuminate\Auth\Events\PasswordReset;
 8: use Illuminate\Http\RedirectResponse;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\Hash;
11: use Illuminate\Support\Facades\Password;
12: use Illuminate\Support\Str;
13: use Illuminate\Validation\Rules;
14: use Illuminate\View\View;
15: 
16: class NewPasswordController extends Controller
17: {
18:     /**
19:      * Display the password reset view.
20:      */
21:     public function create(Request $request): View
22:     {
23:         return view('auth.reset-password', ['request' => $request]);
24:     }
25: 
26:     /**
27:      * Handle an incoming new password request.
28:      *
29:      * @throws \Illuminate\Validation\ValidationException
30:      */
31:     public function store(Request $request): RedirectResponse
32:     {
33:         $request->validate([
34:             'token' => ['required'],
35:             'email' => ['required', 'email'],
36:             'password' => ['required', 'confirmed', Rules\Password::defaults()],
37:         ]);
38: 
39:         // Here we will attempt to reset the user's password. If it is successful we
40:         // will update the password on an actual user model and persist it to the
41:         // database. Otherwise we will parse the error and return the response.
42:         $status = Password::reset(
43:             $request->only('email', 'password', 'password_confirmation', 'token'),
44:             function (User $user) use ($request) {
45:                 $user->forceFill([
46:                     'password' => Hash::make($request->password),
47:                     'remember_token' => Str::random(60),
48:                 ])->save();
49: 
50:                 event(new PasswordReset($user));
51:             }
52:         );
53: 
54:         // If the password was successfully reset, we will redirect the user back to
55:         // the application's home authenticated view. If there is an error we can
56:         // redirect them back to where they came from with their error message.
57:         return $status == Password::PASSWORD_RESET
58:                     ? redirect()->route('login')->with('status', __($status))
59:                     : back()->withInput($request->only('email'))
60:                         ->withErrors(['email' => __($status)]);
61:     }
62: }
```

## File: app/Http/Controllers/Auth/PasswordController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Hash;
 9: use Illuminate\Validation\Rules\Password;
10: 
11: class PasswordController extends Controller
12: {
13:     /**
14:      * Update the user's password.
15:      */
16:     public function update(Request $request): RedirectResponse
17:     {
18:         $validated = $request->validateWithBag('updatePassword', [
19:             'current_password' => ['required', 'current_password'],
20:             'password' => ['required', Password::defaults(), 'confirmed'],
21:         ]);
22: 
23:         $request->user()->update([
24:             'password' => Hash::make($validated['password']),
25:         ]);
26: 
27:         return back()->with('status', 'password-updated');
28:     }
29: }
```

## File: app/Http/Controllers/Auth/PasswordResetLinkController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Password;
 9: use Illuminate\View\View;
10: 
11: class PasswordResetLinkController extends Controller
12: {
13:     /**
14:      * Display the password reset link request view.
15:      */
16:     public function create(): View
17:     {
18:         return view('auth.forgot-password');
19:     }
20: 
21:     /**
22:      * Handle an incoming password reset link request.
23:      *
24:      * @throws \Illuminate\Validation\ValidationException
25:      */
26:     public function store(Request $request): RedirectResponse
27:     {
28:         $request->validate([
29:             'email' => ['required', 'email'],
30:         ]);
31: 
32:         // We will send the password reset link to this user. Once we have attempted
33:         // to send the link, we will examine the response then see the message we
34:         // need to show to the user. Finally, we'll send out a proper response.
35:         $status = Password::sendResetLink(
36:             $request->only('email')
37:         );
38: 
39:         return $status == Password::RESET_LINK_SENT
40:                     ? back()->with('status', __($status))
41:                     : back()->withInput($request->only('email'))
42:                         ->withErrors(['email' => __($status)]);
43:     }
44: }
```

## File: app/Http/Controllers/Auth/RegisteredUserController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Models\User;
 7: use Illuminate\Auth\Events\Registered;
 8: use Illuminate\Http\RedirectResponse;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\Auth;
11: use Illuminate\Support\Facades\Hash;
12: use Illuminate\Validation\Rules;
13: use Illuminate\View\View;
14: 
15: class RegisteredUserController extends Controller
16: {
17:     /**
18:      * Display the registration view.
19:      */
20:     public function create(): View
21:     {
22:         return view('auth.register');
23:     }
24: 
25:     /**
26:      * Handle an incoming registration request.
27:      *
28:      * @throws \Illuminate\Validation\ValidationException
29:      */
30:     public function store(Request $request): RedirectResponse
31:     {
32:         $request->validate([
33:             'name' => ['required', 'string', 'max:255'],
34:             'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
35:             'password' => ['required', 'confirmed', Rules\Password::defaults()],
36:         ]);
37: 
38:         $user = User::create([
39:             'name' => $request->name,
40:             'email' => $request->email,
41:             'password' => Hash::make($request->password),
42:         ]);
43: 
44:         event(new Registered($user));
45: 
46:         Auth::login($user);
47: 
48:         return redirect(route('dashboard', absolute: false));
49:     }
50: }
```

## File: app/Http/Controllers/Auth/VerifyEmailController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Auth;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Auth\Events\Verified;
 7: use Illuminate\Foundation\Auth\EmailVerificationRequest;
 8: use Illuminate\Http\RedirectResponse;
 9: 
10: class VerifyEmailController extends Controller
11: {
12:     /**
13:      * Mark the authenticated user's email address as verified.
14:      */
15:     public function __invoke(EmailVerificationRequest $request): RedirectResponse
16:     {
17:         if ($request->user()->hasVerifiedEmail()) {
18:             return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
19:         }
20: 
21:         if ($request->user()->markEmailAsVerified()) {
22:             event(new Verified($request->user()));
23:         }
24: 
25:         return redirect()->intended(route('dashboard', absolute: false).'?verified=1');
26:     }
27: }
```

## File: app/Http/Controllers/Controller.php
```php
1: <?php
2: 
3: namespace App\Http\Controllers;
4: 
5: abstract class Controller
6: {
7:     //
8: }
```

## File: app/Http/Controllers/Dashboard/AdminLogController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\Request;
 7: use Illuminate\Support\Facades\File;
 8: 
 9: 
10: class AdminLogController extends Controller
11: {
12:     public function index()
13:     {
14:         $path = storage_path('logs/laravel.log');
15: 
16:         if (!File::exists($path)) {
17:             return back()->with('error', 'لا يوجد سجلات');
18:         }
19: 
20:         $logs = collect(file($path))->take(-1000)->implode('');
21: 
22:         return view('dashboard.admin-logs.index', compact('logs'));
23:     }
24: 
25:     public function clearLogs()
26:     {
27:         File::put(storage_path('logs/laravel.log'), '');
28:         return back()->with('success', 'تم حذف السجلات');
29:     }
30: 
31:     //download logs file
32:     public function downloadLogs()
33:     {
34:         $path = storage_path('logs/laravel.log');
35: 
36:         if (!File::exists($path)) {
37:             return back()->with('error', 'لا يوجد سجلات');
38:         }
39: 
40:         return response()->download($path);
41:     }
42: }
```

## File: app/Http/Controllers/Dashboard/CategoryController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard;
 4: 
 5: use App\Enums\CategoryStatusEnum;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Requests\Dashboard\Category\StoreCategoryRequest;
 8: use App\Http\Requests\Dashboard\Category\UpdateCategoryRequest;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\DB;
11: use Illuminate\Support\Facades\Log;
12: use Illuminate\Support\Facades\Validator;
13: use Illuminate\Validation\Rule;
14: 
15: class CategoryController extends Controller
16: {
17:     public function __construct(protected \App\Http\Services\Dashboard\CategoryService $categoryService) {}
18: 
19:     public function index()
20:     {
21:         $categories = $this->categoryService->all();
22: 
23:         return view('dashboard.categories.index', compact('categories'));
24:     }
25: 
26:     public function create()
27:     {
28:         return view('dashboard.categories.create');
29:     }
30: 
31:     public function store(StoreCategoryRequest $request)
32:     {
33:         DB::beginTransaction();
34:         try {
35:             $this->categoryService->createCategory($request);
36:             DB::commit();
37:             return redirect()->route('dashboard.categories.index');
38:         } catch (\Exception $e) {
39:             DB::rollBack();
40:             report($e);
41:             return back()->withErrors(['error' => 'حدث خطأ غير متوقع، يرجى المحاولة مرة أخرى.']);
42:         }
43:     }
44: 
45:     public function edit($id)
46:     {
47:         $category = $this->categoryService->editCategory($id);
48:         Log::info($category);
49:         return view('dashboard.categories.edit', compact('category'));
50:     }
51: 
52:     public function update(UpdateCategoryRequest $request, $id)
53:     {
54:         DB::beginTransaction();
55:         try {
56:             $this->categoryService->updateCategory($request);
57:             DB::commit();
58:             return redirect()->route('dashboard.categories.index');
59:         } catch (\Exception $e) {
60:             DB::rollBack();
61:             report($e);
62:             return back()->withErrors(['error' => 'حدث خطأ غير متوقع، يرجى المحاولة مرة أخرى.']);
63:         }
64:     }
65: 
66:     public function delete(Request $request, $id)
67:     {
68:         DB::beginTransaction();
69:         try {
70:             $this->categoryService->deleteCategory($request, $id);
71:             DB::commit();
72:             return buildApiResponseHelper(true, 'تم حذف القسم بنجاح');
73:         } catch (\Exception $e) {
74:             DB::rollBack();
75:             Log::error($e);
76:             return buildApiResponseHelper(false, $e->getMessage());
77:         }
78:     }
79: 
80:     public function updateStatusActiveCategory(Request $request)
81:     {
82:         $updated = $this->categoryService->updateStatusActiveCategory($request);
83:         return $updated ? buildApiResponseHelper(true, 'تم تغيير حالة القسم بنجاح') : buildApiResponseHelper(false, 'حدث خطأ في تغيير حالة القسم');
84:     }
85: }
```

## File: app/Http/Controllers/Dashboard/ComplaintManagement/ComplaintManagemntController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\ComplaintManagement;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Services\Dashboard\ComplaintManagemnt\ComplaintManagemntService;
 7: use Illuminate\Http\Request;
 8: 
 9: class ComplaintManagemntController extends Controller
10: {
11:     public function __construct(protected ComplaintManagemntService $service) {}
12: 
13:     public function index(Request $request)
14:     {
15:         if ($request->ajax()) {
16:             return $this->service->index($request);
17:         }
18:         return view('dashboard.complaint-management.index');
19:     }
20: }
```

## File: app/Http/Controllers/Dashboard/CustomerController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use App\Enums\user\UserRoleEnum;
 7: use App\Http\Controllers\Controller;
 8: use App\Models\User;
 9: use App\Traits\HandlesDatatablesTrait;
10: use Illuminate\Http\Request;
11: use Illuminate\Support\Facades\DB;
12: use Illuminate\Support\Facades\Log;
13: use Illuminate\Support\Facades\Validator;
14: use Illuminate\Validation\Rule;
15: 
16: class CustomerController extends Controller
17: {
18:     use HandlesDatatablesTrait;
19: 
20:     public function index(Request $request)
21:     {
22:         if ($request->ajax()) {
23:             $searchValue = $request->input('search.value');
24: 
25:             $recordsCount = User::select('count(*) as allcount')->role(UserRoleEnum::User->value)->count();
26:             $recordsCountwithFilter = User::select('count(*) as allcount')
27:                 ->searchValueFilter($searchValue)
28:                 ->role(UserRoleEnum::User->value)
29:                 ->count();
30: 
31:             $query = User::role(UserRoleEnum::User->value)
32:                 ->searchValueFilter($searchValue)
33:                 ->select(
34:                     'users.id',
35:                     'users.name',
36:                     'users.phone',
37:                     'users.logo',
38:                     'users.status',
39:                 );
40:             $records = $this->paginateRecordsForDatatables($request, $query);
41: 
42:             return $this->formatResponseDataTables($request->input('draw'), $recordsCount, $recordsCountwithFilter, $records);
43:         }
44: 
45:         return view('dashboard.customers.index');
46:     }
47: 
48:     public function updateStatus(Request $request)
49:     {
50:         $validator = Validator::make($request->all(), [
51:             'id' => 'required|integer|exists:users,id',
52:             'status' => ['required', Rule::enum(StatusUserEnum::class)],
53:         ]);
54: 
55:         if ($validator->fails()) {
56:             return response()->json($validator->errors(), 422);
57:         }
58: 
59:         $user = User::find($request->id);
60:         $user->status = $request->status;
61: 
62:         return $user->save()
63:             ? buildApiResponseHelper(true, $request->status == 'Active' ? 'تم تفعيل المستخدم' : 'تم تعطيل المستخدم')
64:             : buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
65:     }
66: 
67:     public function delete(Request $request, $id)
68:     {
69:         $validator = Validator::make(['id' => $id], [
70:             'id' => 'required|integer|exists:users,id',
71:         ]);
72: 
73:         if ($validator->fails()) {
74:             return response()->json($validator->errors(), 422);
75:         }
76: 
77:         DB::beginTransaction();
78:         try {
79:             $user = User::find($id);
80:             $user->delete();
81:             DB::commit();
82:             return buildApiResponseHelper(true, 'تم حذف المستخدم بنجاح');
83:         } catch (\Exception $e) {
84:             DB::rollBack();
85:             Log::error($e);
86:             return buildApiResponseHelper(false, $e->getMessage());
87:         }
88:     }
89: }
```

## File: app/Http/Controllers/Dashboard/CustomFieldController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Requests\Dashboard\CustomField\SaveCustomFieldRequest;
 7: use Illuminate\Http\Request;
 8: 
 9: class CustomFieldController extends Controller
10: {
11:     public function __construct(protected \App\Http\Services\Dashboard\CustomFieldService $customFieldService, protected \App\Http\Services\Dashboard\CategoryService $categoryService) {}
12:     public function index(Request $request, $categoryId)
13:     {
14:         $customFields = $this->customFieldService->getCustomFieldsByCategoryId($categoryId);
15:         $categoryName = $this->categoryService->getCategoryNameById($categoryId)?->cat_name_ar ?? '';
16:         return view('dashboard.custom-fields.index', compact('customFields', 'categoryName'));
17:     }
18: 
19:     public function saveCustomField(SaveCustomFieldRequest $request)
20:     {
21:         $saved = $this->customFieldService->saveCustomField($request);
22:         return $saved ? redirect()->back()->with('success', 'تم حفظ الحقل بنجاح') : redirect()->back()->with('error', 'حدث خطاء');
23:     }
24: 
25:     public function delete(Request $request, $id)
26:     {
27:         $deleted = $this->customFieldService->deleteCustomField($id);
28:         return $deleted ? buildApiResponseHelper(true, 'تم حذف الحقل بنجاح') : buildApiResponseHelper(false, 'حدث خطاء');
29:     }
30: }
```

## File: app/Http/Controllers/Dashboard/DashboardController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use Illuminate\Http\Request;
 7: 
 8: class DashboardController extends Controller
 9: {
10:     public function index()
11:     {
12:         return view('dashboard.dashboard');
13:     }
14: }
```

## File: app/Http/Controllers/Dashboard/RequestResponseManagement/RequestResponseManagementController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\RequestResponseManagement;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Services\Dashboard\ResponseManagement\ResponseManagementService;
 7: use Illuminate\Http\Request;
 8: 
 9: class RequestResponseManagementController extends Controller
10: {
11:     public function __construct(protected ResponseManagementService $service) {}
12: 
13:     public function index(Request $request, $requestId)
14:     {
15:         if ($request->ajax()) {
16:             return $this->service->index($request, $requestId);
17:         }
18:         return view('dashboard.response-management.index');
19:     }
20: }
```

## File: app/Http/Controllers/Dashboard/RequestsManagement/RequestManagementController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\RequestsManagement;
 4: 
 5: use App\Enums\RequestCustomerStatusEnum;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Services\Dashboard\RequestsManagement\RequestsManagementService;
 8: use App\Models\RequestCustomer;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\Validator;
11: use Illuminate\Validation\Rule;
12: 
13: class RequestManagementController extends Controller
14: {
15:     public function __construct(protected RequestsManagementService $service) {}
16: 
17:     public function index(Request $request)
18:     {
19:         if ($request->ajax()) {
20:             return $this->service->index($request);
21:         }
22:         return view('dashboard.requests-management.index');
23:     }
24: 
25:     public function show($id)
26:     {
27:         $requestDetails = $this->service->show($id);
28:         return view('dashboard.requests-management.show', compact('requestDetails'));
29:     }
30: 
31:     public function updateStatus(Request $request)
32:     {
33:         $validator = Validator::make($request->all(), [
34:             'id' => 'required|integer|exists:request_customers,id',
35:             'status' => ['required', Rule::enum(RequestCustomerStatusEnum::class)],
36:         ]);
37: 
38:         if ($validator->fails()) {
39:             return response()->json($validator->errors(), 422);
40:         }
41: 
42:         $requestCustomer = RequestCustomer::find($request->id);
43:         $requestCustomer->status = $request->status;
44: 
45:         if (! $requestCustomer->save())
46:             return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
47: 
48:         $message = '';
49: 
50:         if ($request->status == RequestCustomerStatusEnum::Open->value) {
51:             $message = 'تم تفعيل الطلب بنجاح';
52:         } else if ($request->status == RequestCustomerStatusEnum::Closed->value) {
53:             $message = 'تم إغلاق الطلب بنجاح';
54:         } else if ($request->status == RequestCustomerStatusEnum::Canceled->value) {
55:             $message = 'تم إلغاء الطلب بنجاح';
56:         } else if ($request->status == RequestCustomerStatusEnum::Completed->value) {
57:             $message = 'تم إكتمال الطلب بنجاح';
58:         }
59: 
60:         return buildApiResponseHelper(true, $message);
61:     }
62: 
63:     public function delete(Request $request, $id)
64:     {
65:         $validator = Validator::make(['id' => $id], [
66:             'id' => 'required|integer|exists:request_customers,id',
67:         ]);
68: 
69:         if ($validator->fails()) {
70:             return response()->json($validator->errors(), 422);
71:         }
72: 
73:         $requestCustomer = RequestCustomer::find($request->id);
74: 
75:         return $requestCustomer->delete()
76:             ? buildApiResponseHelper(true, 'تم حذف الطلب بنجاح')
77:             : buildApiResponseHelper(false, 'لم يتم حذف الطلب بنجاح');
78:     }
79: }
```

## File: app/Http/Controllers/Dashboard/ShippingRequestManagement/ShippingRequestManagementController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\ShippingRequestManagement;
 4: 
 5: use App\Enums\StatusShippingRequestEnum;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Services\Dashboard\ShippingRequestManagement\ShippingRequestManagementService;
 8: use App\Models\ShippingRequest;
 9: use Illuminate\Http\Request;
10: use Illuminate\Support\Facades\Validator;
11: use Illuminate\Validation\Rule;
12: 
13: class ShippingRequestManagementController extends Controller
14: {
15:     public function __construct(protected ShippingRequestManagementService $service) {}
16: 
17:     public function index(Request $request)
18:     {
19:         if ($request->ajax()) {
20:             return $this->service->index($request);
21:         }
22:         return view('dashboard.shipping-request-management.index');
23:     }
24: 
25:     public function updateStatus(Request $request)
26:     {
27:         $validator = Validator::make($request->all(), [
28:             'id' => 'required|integer|exists:shipping_requests,id',
29:             'status' => ['required', Rule::enum(StatusShippingRequestEnum::class)],
30:         ]);
31: 
32:         if ($validator->fails()) {
33:             return response()->json($validator->errors(), 422);
34:         }
35: 
36:         $shippingRequest = ShippingRequest::find($request->id);
37:         $shippingRequest->status = $request->status;
38: 
39:         if (! $shippingRequest->save())
40:             return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
41: 
42:         $message = '';
43: 
44:         if ($request->status == StatusShippingRequestEnum::Pending->value) {
45:             $message = 'الشحن قيد الإنتظار';
46:         } else if ($request->status == StatusShippingRequestEnum::InProgress->value) {
47:             $message = 'الشحن قيد التنفيذ';
48:         } else if ($request->status == StatusShippingRequestEnum::Completed->value) {
49:             $message = 'الشحن مكتمل';
50:         }
51: 
52:         return buildApiResponseHelper(true, $message);
53:     }
54: 
55:     public function show(Request $request, $id)
56:     {
57: 
58:         $result = $this->service->show($id);
59:         $shippingRequest = $result['shippingRequest'] ?? null;
60:         $cheapestCompany = $result['cheapestCompany'] ?? null;
61: 
62:         return view('dashboard.shipping-request-management.show', compact('shippingRequest', 'cheapestCompany'));
63:     }
64: 
65:     public function createOrderShippingRequest(Request $request)
66:     {
67:         $this->service->createOrderShippingRequest($request);
68:         return redirect()->route('dashboard.shipping-request-management.index')->with('success', 'تم إنشاء طلب الشحن بنجاح');
69:     }
70: 
71:     public function delete(Request $request, $id)
72:     {
73:         $validator = Validator::make(['id' => $id], [
74:             'id' => 'required|integer|exists:shipping_requests,id',
75:         ]);
76: 
77:         if ($validator->fails()) {
78:             return response()->json($validator->errors(), 422);
79:         }
80: 
81:         $requestCustomer = ShippingRequest::find($request->id);
82: 
83:         return $requestCustomer->delete()
84:             ? buildApiResponseHelper(true, 'تم الحذف  بنجاح')
85:             : buildApiResponseHelper(false, 'لم يتم الحذف  بنجاح');
86:     }
87: }
```

## File: app/Http/Controllers/Dashboard/VendorsManagement/JoinRequestVendorController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\VendorsManagement;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Http\Services\Dashboard\VendorsManagement\JoinRequestVendorService;
 7: use App\Traits\NotificationsTrait;
 8: use Illuminate\Http\Request;
 9: use Illuminate\Support\Facades\DB;
10: use Illuminate\Support\Facades\Log;
11: 
12: class JoinRequestVendorController extends Controller
13: {
14:     use NotificationsTrait;
15: 
16:     public function __construct(protected JoinRequestVendorService $service) {}
17: 
18:     public function index(Request $request)
19:     {
20:         if ($request->ajax()) {
21:             return $this->service->index($request);
22:         }
23:         return view('dashboard.vendors-management.join-request-vendor.index');
24:     }
25: 
26:     public function show(Request $request, $userId)
27:     {
28:         $result = $this->service->getVendorsByUserId($request, $userId);
29:         return view('dashboard.vendors-management.join-request-vendor.show-vendor', $result);
30:     }
31: 
32:     public function activeStatusVendor(Request $request)
33:     {
34:         DB::beginTransaction();
35:         try {
36:             $updated = $this->service->activeStatusVendor($request);
37:             DB::commit();
38:             if ($updated) {
39:                 $this->notifyByID(
40:                     userId: $request->userId,
41:                     title: 'تم قبول طلب انضمامك بنجاح',
42:                     body: 'تهانينا! تم قبول طلب انضمام شركتك  بنجاح إلى منصتنا. يمكنك الآن تسجيل الدخول والبدء في استخدام خدماتنا.'
43:                 );
44:                 return redirect()->route('dashboard.vendors-management.join-requests.index')->with('success', 'تم قبول طلب انضمامك بنجاح');
45:             } else {
46:                 return back()->with('error', 'لم يتم قبول طلب انضمامك، الرجاء المحاولة مرة اخرى');
47:             }
48:         } catch (\Exception $e) {
49:             DB::rollBack();
50:             report($e);
51:             return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
52:         }
53:     }
54: 
55:     public function rejectedStatusVendor(Request $request, $userId)
56:     {
57:         DB::beginTransaction();
58:         try {
59:             $updated = $this->service->rejectedStatusVendor($request, $userId);
60:             DB::commit();
61:             if ($updated) {
62:                 $this->notifyByID(
63:                     userId: $request->userId,
64:                     title: 'تم رفض طلب انضمامك ',
65:                     body: 'تم رفض طلب انضمامك ... ' . ' ' . $request->rejectReason
66:                 );
67:                 return redirect()->route('dashboard.vendors-management.join-requests.index')->with('success', 'تم رفض طلب الإنظمام ');
68:             } else {
69:                 return back()->with('error', 'لم يتم رفض طلب  الرجاء المحاولة مرة اخرى');
70:             }
71:         } catch (\Exception $e) {
72:             DB::rollBack();
73:             report($e);
74:             return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
75:         }
76:     }
77: 
78:     public function deleteVendor(Request $request, $userId)
79:     {
80:         DB::beginTransaction();
81:         try {
82:             $deleted = $this->service->deleteVendor($request, $userId);
83:             DB::commit();
84:             if ($deleted) {
85:                 return buildApiResponseHelper(true, 'تم حذف طلب الإنظمام بنجاح');
86:             } else {
87:                 return buildApiResponseHelper(false, 'لم يتم حذف طلب الإنظمام، الرجاء المحاولة مرة اخرى');
88:             }
89:         } catch (\Exception $e) {
90:             DB::rollBack();
91:             report($e);
92:             return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
93:         }
94:     }
95: }
```

## File: app/Http/Controllers/Dashboard/VendorsManagement/VendorManagementController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\VendorsManagement;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use App\Http\Controllers\Controller;
 7: use App\Http\Services\Dashboard\VendorsManagement\VendorManagementService;
 8: use App\Models\User;
 9: use App\Traits\NotificationsTrait;
10: use Illuminate\Http\Request;
11: use Illuminate\Support\Facades\DB;
12: use Illuminate\Support\Facades\Log;
13: use Illuminate\Support\Facades\Validator;
14: use Illuminate\Validation\Rule;
15: 
16: class VendorManagementController extends Controller
17: {
18:     use NotificationsTrait;
19: 
20:     public function __construct(protected VendorManagementService $service) {}
21: 
22:     public function index(Request $request)
23:     {
24:         if ($request->ajax()) {
25:             return $this->service->index($request);
26:         }
27:         return view('dashboard.vendors-management.vendors-manage.index');
28:     }
29: 
30:     public function show(Request $request, $userId)
31:     {
32:         $result = $this->service->getVendorsWithoutPendingByUserId($request, $userId);
33:         return view('dashboard.vendors-management.vendors-manage.show', $result);
34:     }
35: 
36:     public function updateStatus(Request $request)
37:     {
38:         $validator = Validator::make($request->all(), [
39:             'id' => 'required|integer|exists:users,id',
40:             'status' => ['required', Rule::enum(StatusUserEnum::class)],
41:         ]);
42: 
43:         if ($validator->fails()) {
44:             return response()->json($validator->errors(), 422);
45:         }
46: 
47:         $user = User::find($request->id);
48:         $user->status = $request->status;
49: 
50:         $message = '';
51:         if ($request->status == StatusUserEnum::Active->value) {
52:             $message = 'تم تفعيل حساب الشركة بنجاح';
53:         } else if ($request->status == StatusUserEnum::Inactive->value) {
54:             $message = 'تم تعطيل حساب الشركة بنجاح';
55:         } else if ($request->status == StatusUserEnum::Suspended->value) {
56:             $message = 'تم تعليق حساب الشركة بنجاح';
57:         } else if ($request->status == StatusUserEnum::Rejected->value) {
58:             $message = 'تم رفض حساب الشركة بنجاح';
59:         }
60: 
61:         if ($user->save()) {
62:             $this->notifyByID(
63:                 userId: $request->id,
64:                 title: $message,
65:                 body: $message
66:             );
67:             return buildApiResponseHelper(true, $message);
68:         }
69: 
70:         return buildApiResponseHelper(false, 'لم يتم التعديل بنجاح');
71:     }
72: 
73:     public function deleteVendor(Request $request, $userId)
74:     {
75:         DB::beginTransaction();
76:         try {
77:             $deleted = $this->service->deleteVendor($request, $userId);
78:             DB::commit();
79:             if ($deleted) {
80:                 return buildApiResponseHelper(true, 'تم حذف الشركة بنجاح');
81:             } else {
82:                 return buildApiResponseHelper(false, 'لم يتم حذف الشركة، الرجاء المحاولة مرة اخرى');
83:             }
84:         } catch (\Exception $e) {
85:             DB::rollBack();
86:             report($e);
87:             return back()->with('error', 'حدث خطاء في التحديث ... الرجاء المحاولة مرة اخرى');
88:         }
89:     }
90: }
```

## File: app/Http/Controllers/ProfileController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers;
 4: 
 5: use App\Http\Requests\ProfileUpdateRequest;
 6: use Illuminate\Http\RedirectResponse;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Auth;
 9: use Illuminate\Support\Facades\Redirect;
10: use Illuminate\View\View;
11: 
12: class ProfileController extends Controller
13: {
14:     /**
15:      * Display the user's profile form.
16:      */
17:     public function edit(Request $request): View
18:     {
19:         return view('profile.edit', [
20:             'user' => $request->user(),
21:         ]);
22:     }
23: 
24:     /**
25:      * Update the user's profile information.
26:      */
27:     public function update(ProfileUpdateRequest $request): RedirectResponse
28:     {
29:         $request->user()->fill($request->validated());
30: 
31:         if ($request->user()->isDirty('email')) {
32:             $request->user()->email_verified_at = null;
33:         }
34: 
35:         $request->user()->save();
36: 
37:         return Redirect::route('profile.edit')->with('status', 'profile-updated');
38:     }
39: 
40:     /**
41:      * Delete the user's account.
42:      */
43:     public function destroy(Request $request): RedirectResponse
44:     {
45:         $request->validateWithBag('userDeletion', [
46:             'password' => ['required', 'current_password'],
47:         ]);
48: 
49:         $user = $request->user();
50: 
51:         Auth::logout();
52: 
53:         $user->delete();
54: 
55:         $request->session()->invalidate();
56:         $request->session()->regenerateToken();
57: 
58:         return Redirect::to('/');
59:     }
60: }
```

## File: app/Http/Middleware/LocalizationMiddleware.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Middleware;
 4: 
 5: use Closure;
 6: use Illuminate\Http\Request;
 7: use Illuminate\Support\Facades\Log;
 8: use Symfony\Component\HttpFoundation\Response;
 9: 
10: class LocalizationMiddleware
11: {
12:     /**
13:      * Handle an incoming request.
14:      *
15:      * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
16:      */
17:     public function handle(Request $request, Closure $next): Response
18:     {
19:         $defaultLocale = config('app.locale');
20:         $supportedLocales = config('app.supported_locales', ['ar', 'en']);
21: 
22:         if ($request->hasHeader('Accept-Language')) {
23:             $this->detectLocaleFromHeader($request, $defaultLocale, $supportedLocales);
24:             return $next($request);
25:         }
26: 
27:         // From the authenticated user
28:         $user = $request->user();
29:         if ($user  && in_array($user->locale, $supportedLocales)) {
30:             $this->setLocale($user->locale, $defaultLocale, $supportedLocales);
31:             return $next($request);
32:         }
33: 
34:         if ($locale = $this->getLocaleFromUrl($request, $supportedLocales)) {
35:             $this->setLocale($locale, $defaultLocale, $supportedLocales);
36:             return $next($request);
37:         }
38: 
39:         if ($locale = $request->cookie('locale')) {
40:             $this->setLocale($locale, $defaultLocale, $supportedLocales);
41:             return $next($request);
42:         }
43: 
44:         app()->setLocale($defaultLocale);
45:         return $next($request);
46:     }
47: 
48:     /**
49:      * Detect locale from Accept-Language header
50:      */
51:     protected function detectLocaleFromHeader(Request $request, $defaultLocale, array $supportedLocales): void
52:     {
53:         $value = $request->header('Accept-Language');
54:         if (!empty($value) && strlen($value) === 2 && in_array($value, $supportedLocales)) {
55:             app()->setLocale($value);
56:             return;
57:         }
58: 
59:         app()->setLocale($defaultLocale);
60:     }
61: 
62:     /**
63:      * Extract the locale from the URL
64:      */
65:     protected function getLocaleFromUrl(Request $request, $supportedLocales): ?string
66:     {
67:         $segments = $request->segments();
68:         $locale = $segments[0] ?? null;
69: 
70:         if (in_array($locale, $supportedLocales)) {
71:             $request->route()->forgetParameter('locale');
72:             return $locale;
73:         }
74: 
75:         return null;
76:     }
77: 
78:     /**
79:      * Set the locale and log the user's choice
80:      */
81:     protected function setLocale(string $locale, $defaultLocale, $supportedLocales): void
82:     {
83:         if (in_array($locale, $supportedLocales)) {
84:             app()->setLocale($locale);
85:         } else {
86:             app()->setLocale($defaultLocale);
87:         }
88:     }
89: }
```

## File: app/Http/Repositories/Dashboard/CategoryRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard;
 4: 
 5: use App\Models\Category;
 6: use App\Models\CategoryHasBrandField;
 7: 
 8: class CategoryRepository
 9: {
10:     public function all()
11:     {
12:         return Category::get();
13:     }
14: 
15:     public function createCategory(array $data)
16:     {
17:         return Category::create($data);
18:     }
19: 
20:     public function addCategoryHasBrandField($categoryId)
21:     {
22:         CategoryHasBrandField::create(['category_id' => $categoryId]);
23:     }
24: 
25:     public function updateCategoryHasBrandField($categoryId)
26:     {
27:         CategoryHasBrandField::where('category_id', $categoryId)->updateOrCreate(['category_id' => $categoryId]);
28:     }
29: 
30:     public function deleteCategoryHasBrandField($categoryId)
31:     {
32:         $model = CategoryHasBrandField::where('category_id', $categoryId)->first();
33:         $model->delete();
34:     }
35: 
36:     public function editCategory($categoryId)
37:     {
38:         return Category::leftJoin('category_has_brand_fields', 'categories.id', '=', 'category_has_brand_fields.category_id')
39:             ->where('categories.id', $categoryId)
40:             ->select('categories.*', 'category_has_brand_fields.id as is_category_has_brand_field')
41:             ->first();
42:     }
43: 
44:     public function updateCategory(array $data, $categoryId)
45:     {
46:         $model = Category::where('id', $categoryId)->first(['id']);
47:         return $model->update($data);
48:     }
49: 
50:     public function deleteCategory($categoryId)
51:     {
52:         $model = Category::where('id', $categoryId)->first(['id']);
53:         if (!$model)
54:             return false;
55:         return $model->delete();
56:     }
57: 
58:     public function getCategoryNameById(int $categoryId)
59:     {
60:         return Category::where('id', $categoryId)->first(['cat_name_ar']);
61:     }
62: }
```

## File: app/Http/Repositories/Dashboard/ComplaintManagemnt/ComplaintManagemntRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard\ComplaintManagemnt;
 4: 
 5: use App\Models\Complaint;
 6: use App\Traits\HandlesDatatablesTrait;
 7: use Symfony\Component\HttpFoundation\Request;
 8: 
 9: class ComplaintManagemntRepository
10: {
11:     use HandlesDatatablesTrait;
12: 
13:     public function index(Request $request, $searchValue)
14:     {
15:         $query = Complaint::query()
16:             ->leftJoin('users', 'complaints.user_id', '=', 'users.id')
17:             ->searchValueFilter($searchValue)
18:             ->select(
19:                 'complaints.id',
20:                 'complaints.user_id',
21:                 'users.name',
22:                 'users.phone',
23:                 'complaints.subject',
24:                 'complaints.title',
25:                 'complaints.description',
26:                 'complaints.status',
27:                 'complaints.created_at as date_complaint',
28:             );
29: 
30:         return $this->paginateRecordsForDatatables($request, $query);
31:     }
32: }
```

## File: app/Http/Repositories/Dashboard/CustomFieldRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard;
 4: 
 5: use App\Models\CustomField;
 6: 
 7: class CustomFieldRepository
 8: {
 9:     public function getCustomFieldsByCategoryId(int $categoryId)
10:     {
11:         return CustomField::where('custom_fields.category_id', $categoryId)->get();
12:     }
13: }
```

## File: app/Http/Repositories/Dashboard/RequestResponseManagement/ResponseManagementRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard\RequestResponseManagement;
 4: 
 5: use App\Models\RequestCustomer;
 6: use App\Models\RequestResponse;
 7: use App\Traits\HandlesDatatablesTrait;
 8: use Illuminate\Http\Request;
 9: 
10: class ResponseManagementRepository
11: {
12:     use HandlesDatatablesTrait;
13: 
14:     public function index(Request $request, $requestId, $searchValue)
15:     {
16:         $query = RequestResponse::query()->joinRequestCustomer()
17:             ->leftJoinVendor()
18:             ->leftJoinVendorToUser()
19:             ->where('request_responses.request_id', $requestId)
20:             ->searchValueFilter($searchValue)
21:             ->select(
22:                 'request_responses.id as response_id',
23:                 'request_responses.status as response_status',
24:                 'request_responses.created_at as response_date',
25:                 'request_responses.price as price_response',
26:                 'request_responses.warranty as warranty_response',
27:                 'request_responses.note as note_response',
28:                 'vendors.company_name_ar',
29:                 'vendors.user_id',
30:             );
31: 
32:         return $this->paginateRecordsForDatatables($request, $query);
33:     }
34: 
35:     public function recordsCountResponseWithFilter($requestId, $searchValue)
36:     {
37:         return RequestResponse::select('count(*) as allcount')->where('request_responses.request_id', $requestId)->searchValueFilter($searchValue)->count();
38:     }
39: }
```

## File: app/Http/Repositories/Dashboard/RequestsManagement/RequestsManagementRepository.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Repositories\Dashboard\RequestsManagement;
  4: 
  5: use App\Models\BrandCar;
  6: use App\Models\City;
  7: use App\Models\CustomField;
  8: use App\Models\RequestBrandScope;
  9: use App\Models\RequestCustomer;
 10: use App\Models\RequestCustomFieldValue;
 11: use App\Models\RequestImage;
 12: use App\Traits\HandlesDatatablesTrait;
 13: use Illuminate\Http\Request;
 14: 
 15: class RequestsManagementRepository
 16: {
 17:     use HandlesDatatablesTrait;
 18: 
 19:     public function index(Request $request, $searchValue)
 20:     {
 21:         $query = RequestCustomer::leftJoinCity()
 22:             ->leftJoinCategory()
 23:             ->searchValueFilter($searchValue)
 24:             ->selectRaw(
 25:                 'request_customers.id as request_id,
 26:                 request_customers.status as request_status,
 27:                 categories.cat_name_ar,
 28:                 request_customers.created_at as request_date,
 29:                 cities.city_name_ar as city_customer_name_ar,
 30:                 (SELECT COUNT(id) FROM request_responses WHERE request_responses.request_id = request_customers.id) as count_response
 31:                 ',
 32:             )
 33:             ->orderBy('request_customers.id', 'desc');
 34: 
 35:         return $this->paginateRecordsForDatatables($request, $query);
 36:     }
 37: 
 38:     public function recordsCountRequestsCustomerWithFilter($searchValue)
 39:     {
 40:         return RequestCustomer::select('count(*) as allcount')->searchValueFilter($searchValue)->count();
 41:     }
 42: 
 43:     public function getRequestById(int $requestId)
 44:     {
 45:         return RequestCustomer::leftJoinCategory()
 46:             ->leftJoinCity()
 47:             ->leftJoinUser()
 48:             ->where('request_customers.id', $requestId)
 49:             ->select(
 50:                 'request_customers.id as request_id',
 51:                 'request_customers.user_id',
 52:                 'categories.cat_name_ar',
 53:                 'request_customers.created_at as request_date',
 54:                 'cities.city_name_ar as city_customer_name_ar',
 55:                 'request_customers.description',
 56:                 'request_customers.cities_ids_scope as cities',
 57:                 'request_customers.status as request_status',
 58:                 'users.name as user_name',
 59:                 'users.phone as user_phone',
 60:                 'users.logo as user_logo',
 61:             )
 62:             ->first();
 63:     }
 64: 
 65:     public function getRequestBrandNamesScope($requestId)
 66:     {
 67:         $brandIdsScope = RequestBrandScope::where('request_id', $requestId)->first(['brand_ids_scope']);
 68:         $BrandCarsCached =  BrandCar::getBrandCarsCached();
 69: 
 70:         $brandsNames = [];
 71:         foreach ($brandIdsScope->brand_ids_scope as $brand) {
 72:             $brandsNames[] = $BrandCarsCached->where('id', (int) $brand)->value('brand_name_ar') ?? '';
 73:         }
 74: 
 75:         return $brandsNames;
 76:     }
 77: 
 78:     public function getRequestCitiesNamesScope($cityIdsScope)
 79:     {
 80:         $citiesCached =  City::getCitiesCached();
 81: 
 82:         $citiesNames = [];
 83:         foreach (json_decode($cityIdsScope) as $city) {
 84:             $citiesNames[] = $citiesCached->where('id', (int) $city)->value('city_name_ar') ?? '';
 85:         }
 86: 
 87:         return $citiesNames;
 88:     }
 89: 
 90:     public function getRequestImages($requestId)
 91:     {
 92:         return RequestImage::where('request_id', $requestId)->get(['image_name']);
 93:     }
 94: 
 95:     public function getRequestCustomFields($requestId)
 96:     {
 97:         $requestCustomFields = RequestCustomFieldValue::where('request_id', $requestId)->get();
 98:         $customFieldsCached = CustomField::getCustomFieldsCached();
 99: 
100:         $result = [];
101:         foreach ($requestCustomFields as $item) {
102:             $temp = [];
103:             $temp['key'] = $customFieldsCached->where('id', $item->custom_field_id)->value('label_ar') ?? '';
104:             $temp['value'] = json_decode($item->value);
105:             array_push($result, $temp);
106:         }
107: 
108:         return $result;
109:     }
110: }
```

## File: app/Http/Repositories/Dashboard/ShippingRequestManagement/ShippingRequestManagementRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard\ShippingRequestManagement;
 4: 
 5: use App\Models\ShippingRequest;
 6: use App\Traits\HandlesDatatablesTrait;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Log;
 9: 
10: class ShippingRequestManagementRepository
11: {
12: 
13:     use HandlesDatatablesTrait;
14: 
15:     public function index(Request $request, $searchValue)
16:     {
17:         $query = ShippingRequest::select(
18:             'shipping_requests.id',
19:             'shipping_requests.request_id',
20:             'shipping_requests.response_id',
21:             'shipping_requests.city_origin_vendor',
22:             'shipping_requests.city_origin_dimensions',
23:             'shipping_requests.phone_origin_dimensions',
24:             'shipping_requests.fee_cheapest_shipping',
25:             'shipping_requests.amount_rate_app',
26:             'shipping_requests.is_user_confirmed',
27:             'shipping_requests.status',
28:             'shipping_requests.created_at as shipping_request_date',
29:         )
30:             ->confirmShippingFilter($request->input('confirmShippingFilter'))
31:             ->orderBy('shipping_requests.created_at', 'desc');
32: 
33:         return $this->paginateRecordsForDatatables($request, $query);
34:     }
35: 
36:     public function recordsCountShippingRequestWithFilter($searchValue)
37:     {
38:         return ShippingRequest::select('count(*) as allcount')->searchValueFilter($searchValue)->count();
39:     }
40: 
41:     public function show($id)
42:     {
43:         return ShippingRequest::where('id', $id)->first();
44:     }
45: 
46:     public function getShippingRequestDetailById($id)
47:     {
48:         return ShippingRequest::select(
49:             'shipping_requests.*',
50:             'request_user.name as customer_name',
51:             'vendor_user.name as company_sender_name'
52:         )
53:             ->leftJoin('request_customers', 'request_customers.id', '=', 'shipping_requests.request_id')
54:             ->leftJoin('users as request_user', 'request_user.id', '=', 'request_customers.user_id')
55:             ->leftJoin('request_responses', 'request_responses.id', '=', 'shipping_requests.response_id')
56:             ->leftJoin('vendors', 'vendors.id', '=', 'request_responses.vendor_id')
57:             ->leftJoin('users as vendor_user', 'vendor_user.id', '=', 'vendors.user_id')
58:             ->where('shipping_requests.id', $id)
59:             ->first();
60:     }
61: }
```

## File: app/Http/Repositories/Dashboard/VendorsManagement/JoinRequestVendorRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Dashboard\VendorsManagement;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use App\Enums\user\UserRoleEnum;
 7: use App\Models\User;
 8: use App\Models\Vendor;
 9: use App\Models\VendorDocument;
10: use App\Traits\HandlesDatatablesTrait;
11: use Illuminate\Http\Request;
12: 
13: class JoinRequestVendorRepository
14: {
15:     use HandlesDatatablesTrait;
16: 
17:     public function index(Request $request, $searchValue)
18:     {
19:         $query = User::joinVendors()
20:             ->role(UserRoleEnum::Vendor->value)
21:             ->searchValueFilter($searchValue)
22:             ->where('users.status', StatusUserEnum::Pending->value)
23:             ->select(
24:                 'users.id',
25:                 'vendors.company_name_ar',
26:                 'vendors.commercial_record',
27:                 'users.phone',
28:                 'users.logo',
29:                 'users.created_at as member_since',
30:             );
31: 
32:         return $this->paginateRecordsForDatatables($request, $query);
33:     }
34: 
35:     public function recordsCountPendingVendors()
36:     {
37:         return $this->queryRecordsCountPendingVendors()
38:             ->count();
39:     }
40: 
41:     public function recordsCountPendingVendorsWithFilter($searchValue)
42:     {
43:         return $this->queryRecordsCountPendingVendors()
44:             ->searchValueFilter($searchValue)
45:             ->count();
46:     }
47: 
48:     private function queryRecordsCountPendingVendors()
49:     {
50:         return User::select('count(*) as allcount')
51:             ->role(UserRoleEnum::Vendor->value)
52:             ->where('status', StatusUserEnum::Pending->value);
53:     }
54: }
```

## File: app/Http/Repositories/Dashboard/VendorsManagement/VendorManagementRepository.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Repositories\Dashboard\VendorsManagement;
  4: 
  5: use App\Enums\StatusUserEnum;
  6: use App\Enums\user\UserRoleEnum;
  7: use App\Models\User;
  8: use App\Models\Vendor;
  9: use App\Models\VendorDocument;
 10: use App\Traits\HandlesDatatablesTrait;
 11: use Illuminate\Http\Request;
 12: 
 13: class VendorManagementRepository
 14: {
 15:     use HandlesDatatablesTrait;
 16: 
 17:     public function index(Request $request, $searchValue)
 18:     {
 19:         $query = User::joinVendors()
 20:             ->role(UserRoleEnum::Vendor->value)
 21:             ->searchValueFilter($searchValue)
 22:             ->where('users.status', '!=', StatusUserEnum::Pending->value)
 23:             ->select(
 24:                 'users.id',
 25:                 'vendors.company_name_ar',
 26:                 'vendors.commercial_record',
 27:                 'users.phone',
 28:                 'users.logo',
 29:                 'users.status',
 30:                 'users.created_at as member_since',
 31:             );
 32: 
 33:         return $this->paginateRecordsForDatatables($request, $query);
 34:     }
 35: 
 36:     public function recordsCountVendors()
 37:     {
 38:         return $this->queryRecordsCountVendors()
 39:             ->count();
 40:     }
 41: 
 42:     public function recordsCountVendorsWithFilter($searchValue)
 43:     {
 44:         return $this->queryRecordsCountVendors()
 45:             ->searchValueFilter($searchValue)
 46:             ->count();
 47:     }
 48: 
 49:     private function queryRecordsCountVendors()
 50:     {
 51:         return User::select('count(*) as allcount')
 52:             ->role(UserRoleEnum::Vendor->value)
 53:             ->where('status', '!=', StatusUserEnum::Pending->value);
 54:     }
 55: 
 56:     public function getVendorsWithoutPendingByUserId($userId)
 57:     {
 58:         return User::joinVendors()
 59:             ->role(UserRoleEnum::Vendor->value)
 60:             ->where('users.status', '!=', StatusUserEnum::Pending->value)
 61:             ->where('users.id', $userId)
 62:             ->select(
 63:                 'users.phone',
 64:                 'users.logo',
 65:                 'users.created_at as member_since',
 66:                 'vendors.id as vendor_id',
 67:                 'vendors.*',
 68:             )
 69:             ->first();
 70:     }
 71: 
 72:     public function getVendorsByUserId($userId, $status)
 73:     {
 74:         return User::joinVendors()
 75:             ->role(UserRoleEnum::Vendor->value)
 76:             // ->where('users.status', $status)
 77:             ->where('users.id', $userId)
 78:             ->select(
 79:                 'users.phone',
 80:                 'users.logo',
 81:                 'users.created_at as member_since',
 82:                 'vendors.id as vendor_id',
 83:                 'vendors.*',
 84:             )
 85:             ->first();
 86:     }
 87: 
 88:     public function getVendorDocumentByVendorId($vendorId)
 89:     {
 90:         return VendorDocument::where('vendor_id', $vendorId)
 91:             ->first(['file_path'])?->file_path;
 92:     }
 93: 
 94:     public function getVendorCities($vendorId)
 95:     {
 96:         return Vendor::join('vendor_cities', 'vendor_cities.vendor_id', '=', 'vendors.id')
 97:             ->leftJoin('cities', 'cities.id', '=', 'vendor_cities.city_id')
 98:             ->where('vendors.id', $vendorId)
 99:             ->select(
100:                 'cities.city_name_ar'
101:             )
102:             ->get();
103:     }
104: 
105:     public function getVendorCategories($vendorId)
106:     {
107:         return Vendor::join('vendor_specialties', 'vendor_specialties.vendor_id', '=', 'vendors.id')
108:             ->leftJoin('categories', 'categories.id', '=', 'vendor_specialties.category_id')
109:             ->where('vendors.id', $vendorId)
110:             ->select(
111:                 'categories.cat_name_ar'
112:             )
113:             ->get();
114:     }
115: 
116:     public function updateVendorStatus($userId, $status)
117:     {
118:         return User::where('id', $userId)->update(['status' => $status]);
119:     }
120: 
121:     public function deleteVendor($userId)
122:     {
123:         $deleted = User::where('id', $userId)->delete();
124:         if ($deleted)
125:             Vendor::where('user_id', $userId)->delete();
126:         return $deleted;
127:     }
128: }
```

## File: app/Http/Repositories/Shared/Auth/AuthRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared\Auth;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\User;
 7: use App\Models\UserOtp;
 8: use App\Utils\ConfigUtils;
 9: 
10: class AuthRepository implements RepositoryInterface
11: {
12:     public function create(array $data)
13:     {
14:         return User::create($data);
15:     }
16:     public function first(int $id, array $columns = ['*'])
17:     {
18:         return User::where('id', $id)->first($columns);
19:     }
20:     public function update(int $id, array $attributes = []) {}
21:     public function delete(int $id) {}
22:     public function getAll(array $columns = ['*']) {}
23: 
24:     public function getUserByPhoneNumber(string $phoneNumber, array $columns = ['*'])
25:     {
26:         return User::where('phone', $phoneNumber)->first($columns);
27:     }
28: 
29:     public function generateOtp($user): UserOtp
30:     {
31:         $userOtp = UserOtp::where('user_id', $user->id)->latest()->first();
32:         $now = now();
33: 
34:         if ($userOtp && $now->isBefore($userOtp->expire_at)) {
35:             return $userOtp;
36:         }
37: 
38:         return UserOtp::create([
39:             'user_id' => $user->id,
40:             'otp' => ConfigUtils::generateOtpRandomInt(),
41:             'expire_at' => ConfigUtils::getExpireAtOtpUser(),
42:         ]);
43:     }
44: 
45:     public function getLatestUserOtpByOtp($id, $otp): UserOtp
46:     {
47:         return UserOtp::where('user_id', $id)->where('otp', $otp)->latest()->first();
48:     }
49: }
```

## File: app/Http/Repositories/Shared/BrandCarRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\BrandCar;
 7: 
 8: class BrandCarRepository implements RepositoryInterface
 9: {
10:     public function create(array $data) {}
11:     public function first(int $id, $columns = ['*']) {}
12:     public function update(int $id, array $attributes = []) {}
13:     public function delete(int $id) {}
14: 
15:     public function getAll($columns = ['*'])
16:     {
17:         BrandCar::get($columns);
18:     }
19: }
```

## File: app/Http/Repositories/Shared/CategoryHasBrandFieldRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\CategoryHasBrandField;
 7: 
 8: class CategoryHasBrandFieldRepository implements RepositoryInterface
 9: {
10:     public function create(array $data) {}
11:     public function first(int $id, $columns = ['*']) {}
12:     public function update(int $id, array $attributes = []) {}
13:     public function delete(int $id) {}
14: 
15:     public function getAll($columns = ['*'])
16:     {
17:         CategoryHasBrandField::get($columns);
18:     }
19: }
```

## File: app/Http/Repositories/Shared/CategoryRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\Category;
 7: 
 8: class CategoryRepository implements RepositoryInterface
 9: {
10:     public function create(array $data) {}
11:     public function first(int $id, $columns = ['*']) {}
12:     public function update(int $id, array $attributes = []) {}
13:     public function delete(int $id) {}
14: 
15:     public function getAll($columns = ['*'])
16:     {
17:         Category::get($columns);
18:     }
19: }
```

## File: app/Http/Repositories/Shared/CityRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\City;
 7: 
 8: class CityRepository implements RepositoryInterface
 9: {
10:     public function create(array $data) {}
11:     public function first(int $id, $columns = ['*']) {}
12:     public function update(int $id, array $attributes = [])
13:     {
14:         $model = $this->first($id);
15:         if ($model) {
16:             $model->update($attributes);
17:         }
18: 
19:         //or
20: 
21:         $model = $this->first($id);
22:         if (!empty($model)) {
23:             $model->update($attributes);
24:         }
25:     }
26:     public function delete(int $id) {}
27: 
28:     public function getAll($columns = ['*'])
29:     {
30:         City::get($columns);
31:     }
32: 
33:     // get categories from cache
34:     public function getCachedCities($columns = ['*'])
35:     {
36:         return City::get($columns);
37:     }
38: }
```

## File: app/Http/Repositories/Shared/ComplaintRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Models\Complaint;
 6: 
 7: class ComplaintRepository
 8: {
 9:     public function create(array $data)
10:     {
11:         return Complaint::create($data);
12:     }
13: }
```

## File: app/Http/Repositories/Shared/CustomFieldRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\CustomField;
 7: use App\Utils\CacheUtils;
 8: 
 9: class CustomFieldRepository implements RepositoryInterface
10: {
11:     public function create(array $data) {}
12:     public function first(int $id, $columns = ['*'])
13:     {
14:         return CustomField::where('id', $id)->first($columns);
15:     }
16:     public function update(int $id, array $attributes = []) {}
17:     public function delete(int $id) {}
18: 
19:     public function getAll($columns = ['*'])
20:     {
21:         return CustomField::get($columns);
22:     }
23: 
24:     public function getCustomFieldsByCategoryId(int $categoryId)
25:     {
26:         return CacheUtils::remember(CacheUtils::customFieldsByCategoryIdCacheAppKey($categoryId), function () use ($categoryId) {
27:             return CustomField::where('category_id', $categoryId)->get();
28:         }, now()->addMinutes(30));
29:     }
30: }
```

## File: app/Http/Repositories/Shared/RegisterVendorRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Interfaces\RepositoryInterface;
 6: use App\Models\User;
 7: use App\Models\Vendor;
 8: use App\Models\VendorCity;
 9: use App\Models\VendorDocument;
10: use App\Models\VendorSpecialty;
11: 
12: class RegisterVendorRepository implements RepositoryInterface
13: {
14:     public function create(array $data) {}
15:     public function first(int $id, $columns = ['*']) {}
16:     public function update(int $id, array $attributes = []) {}
17:     public function delete(int $id) {}
18: 
19:     public function getAll($columns = ['*']) {}
20: 
21:     public function createUser(array $data)
22:     {
23:         return User::create($data);
24:     }
25: 
26:     public function createVendor(array $data)
27:     {
28:         return Vendor::create($data);
29:     }
30: 
31:     public function createVendorCities(array $data)
32:     {
33:         return VendorCity::create($data);
34:     }
35: 
36:     public function createVendorCategories(array $data)
37:     {
38:         return VendorSpecialty::create($data);
39:     }
40: 
41:     public function createVendorDocuments(array $data)
42:     {
43:         return VendorDocument::create($data);
44:     }
45: }
```

## File: app/Http/Repositories/Shared/ShippingRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\Shared;
 4: 
 5: use App\Models\ShippingRequest;
 6: 
 7: class ShippingRepository
 8: {
 9:     public function storeShippingRequest(array $data)
10:     {
11:         return ShippingRequest::create($data);
12:     }
13: }
```

## File: app/Http/Repositories/User/ProfileUserRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\User;
 4: 
 5: use App\Models\User;
 6: 
 7: class ProfileUserRepository
 8: {
 9:     public function getUser()
10:     {
11:         return User::where('id', getCurrUserIdHelper())->first(['id', 'name', 'logo']);
12:     }
13: 
14:     public function updateUser(array $data, $userId)
15:     {
16:         return User::where('id', $userId)->update($data);
17:     }
18: 
19:     public function updateLogoUser(array $filesName, $userId)
20:     {
21:         if (! (count($filesName) == 0)) {
22:             return User::where('id', $userId)->update(['logo' => $filesName[0]]);
23:         }
24:     }
25: }
```

## File: app/Http/Requests/Auth/LoginRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Auth;
 4: 
 5: use Illuminate\Auth\Events\Lockout;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Support\Facades\Auth;
 8: use Illuminate\Support\Facades\RateLimiter;
 9: use Illuminate\Support\Str;
10: use Illuminate\Validation\ValidationException;
11: 
12: class LoginRequest extends FormRequest
13: {
14:     /**
15:      * Determine if the user is authorized to make this request.
16:      */
17:     public function authorize(): bool
18:     {
19:         return true;
20:     }
21: 
22:     /**
23:      * Get the validation rules that apply to the request.
24:      *
25:      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
26:      */
27:     public function rules(): array
28:     {
29:         return [
30:             'email' => ['required', 'string', 'email'],
31:             'password' => ['required', 'string'],
32:         ];
33:     }
34: 
35:     /**
36:      * Attempt to authenticate the request's credentials.
37:      *
38:      * @throws \Illuminate\Validation\ValidationException
39:      */
40:     public function authenticate(): void
41:     {
42:         $this->ensureIsNotRateLimited();
43: 
44:         if (! Auth::guard('admin')->attempt($this->only('email', 'password'), $this->boolean('remember'))) {
45:             RateLimiter::hit($this->throttleKey());
46: 
47:             throw ValidationException::withMessages([
48:                 'email' => trans('auth.failed'),
49:             ]);
50:         }
51: 
52:         RateLimiter::clear($this->throttleKey());
53:     }
54: 
55:     /**
56:      * Ensure the login request is not rate limited.
57:      *
58:      * @throws \Illuminate\Validation\ValidationException
59:      */
60:     public function ensureIsNotRateLimited(): void
61:     {
62:         if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
63:             return;
64:         }
65: 
66:         event(new Lockout($this));
67: 
68:         $seconds = RateLimiter::availableIn($this->throttleKey());
69: 
70:         throw ValidationException::withMessages([
71:             'email' => trans('auth.throttle', [
72:                 'seconds' => $seconds,
73:                 'minutes' => ceil($seconds / 60),
74:             ]),
75:         ]);
76:     }
77: 
78:     /**
79:      * Get the rate limiting throttle key for the request.
80:      */
81:     public function throttleKey(): string
82:     {
83:         return Str::transliterate(Str::lower($this->string('email')) . '|' . $this->ip());
84:     }
85: }
```

## File: app/Http/Requests/Dashboard/Category/StoreCategoryRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Dashboard\Category;
 4: 
 5: use App\Enums\CommissionTypeEnum;
 6: use Closure;
 7: use Illuminate\Contracts\Validation\Validator;
 8: use Illuminate\Foundation\Http\FormRequest;
 9: use Illuminate\Validation\Rule;
10: use Illuminate\Validation\ValidationException;
11: 
12: class StoreCategoryRequest extends FormRequest
13: {
14:     public function authorize(): bool
15:     {
16:         return auth('admin')->check();
17:     }
18: 
19:     public function rules(): array
20:     {
21:         return [
22:             'catNameAr' => 'required|string|max:100|unique:categories,cat_name_ar',
23:             'commissionType' => ['required', 'string', Rule::enum(CommissionTypeEnum::class)],
24:             'commission' => [
25:                 'required',
26:                 'numeric',
27:                 function (string $attribute, mixed $value, Closure $fail) {
28:                     if (request()->input('commissionType') === CommissionTypeEnum::Rate->value && ($value < 0 || $value > 100)) {
29:                         $fail('النسبة يجب أن تكون بين 0 و 100.');
30:                     }
31:                 }
32:             ],
33:             'categoryHasBrand' => ['required', 'boolean'],
34:             'file' => 'required|image|mimes:png,jpg,jpeg,webp|max:5000|dimensions:min_width=64,min_height=64,max_width=64,max_height=64'
35:         ];
36:     }
37: 
38:     public function messages(): array
39:     {
40:         return [
41:             'catNameAr.required' => 'اسم التصنيف بالعربية مطلوب.',
42:             'catNameAr.string' => 'اسم التصنيف يجب أن يكون نصًا.',
43:             'catNameAr.max' => 'اسم التصنيف لا يجب أن يتجاوز 100 حرف.',
44:             'catNameAr.unique' => 'اسم التصنيف هذا موجود بالفعل.',
45: 
46:             'commissionType.required' => 'نوع العمولة مطلوب.',
47:             'commissionType.string' => 'نوع العمولة يجب أن يكون نصًا صحيحًا.',
48:             'commissionType.enum' => 'نوع العمولة المحدد غير صالح.',
49: 
50:             'commission.required' => 'قيمة العمولة مطلوبة.',
51:             'commission.numeric' => 'قيمة العمولة يجب أن تكون رقمًا.',
52: 
53:             'categoryHasBrand.required' => 'يجب تحديد ما إذا كان التصنيف يحتوي على ماركة .',
54:             'categoryHasBrand.boolean' => 'قيمة الحقل يجب أن تكون صحيحة أو خاطئة (true/false).',
55: 
56:             'file.required' => 'الصورة مطلوبة.',
57:             'file.image' => 'الملف يجب أن يكون صورة.',
58:             'file.mimes' => 'يجب أن تكون الصورة من نوع PNG أو JPG أو JPEG أو WEBP.',
59:             'file.max' => 'حجم الصورة يجب ألا يتجاوز 5 ميجابايت.',
60:             'file.dimensions' => 'أبعاد الصورة يجب أن تكون بين 64×64 .',
61:         ];
62:     }
63: 
64:     protected function failedValidation(Validator $validator)
65:     {
66:         throw (new ValidationException($validator))
67:             ->errorBag($this->errorBag)
68:             ->redirectTo($this->getRedirectUrl());
69:     }
70: }
```

## File: app/Http/Requests/Dashboard/Category/UpdateCategoryRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Dashboard\Category;
 4: 
 5: use App\Enums\CommissionTypeEnum;
 6: use Closure;
 7: use Illuminate\Contracts\Validation\Validator;
 8: use Illuminate\Foundation\Http\FormRequest;
 9: use Illuminate\Validation\Rule;
10: use Illuminate\Validation\ValidationException;
11: 
12: class UpdateCategoryRequest extends FormRequest
13: {
14:     public function authorize(): bool
15:     {
16:         return auth('admin')->check();
17:     }
18: 
19:     protected function prepareForValidation(): void
20:     {
21:         $this->merge([
22:             'id' => $this->route('id')
23:         ]);
24:     }
25: 
26:     public function rules(): array
27:     {
28:         return [
29:             'id' => ['required', 'integer', 'exists:categories,id'],
30:             'catNameAr' => 'required|string|max:100|unique:categories,cat_name_ar,' . $this->id,
31:             'commissionType' => ['required', 'string', Rule::enum(CommissionTypeEnum::class)],
32:             'commission' => [
33:                 'required',
34:                 'numeric',
35:                 function (string $attribute, mixed $value, Closure $fail) {
36:                     if (request()->input('commissionType') === CommissionTypeEnum::Rate->value && ($value < 0 || $value > 100)) {
37:                         $fail('النسبة يجب أن تكون بين 0 و 100.');
38:                     }
39:                 }
40:             ],
41:             'categoryHasBrand' => ['required', 'boolean'],
42:             'file' => 'nullable|image|mimes:png,jpg,jpeg,webp|max:5000|dimensions:min_width=64,min_height=64,max_width=64,max_height=64'
43:         ];
44:     }
45: 
46:     public function messages(): array
47:     {
48:         return [
49:             'id.required' => 'معرف التصنيف مطلوب.',
50:             'id.integer' => 'معرف التصنيف يجب أن يكون رقمًا صحيحًا.',
51:             'id.exists' => 'معرف التصنيف غير موجود.',
52:             'catNameAr.required' => 'اسم التصنيف بالعربية مطلوب.',
53:             'catNameAr.string' => 'اسم التصنيف يجب أن يكون نصًا.',
54:             'catNameAr.max' => 'اسم التصنيف لا يجب أن يتجاوز 100 حرف.',
55:             'catNameAr.unique' => 'اسم التصنيف هذا موجود بالفعل.',
56: 
57:             'commissionType.required' => 'نوع العمولة مطلوب.',
58:             'commissionType.string' => 'نوع العمولة يجب أن يكون نصًا صحيحًا.',
59:             'commissionType.enum' => 'نوع العمولة المحدد غير صالح.',
60: 
61:             'commission.required' => 'قيمة العمولة مطلوبة.',
62:             'commission.numeric' => 'قيمة العمولة يجب أن تكون رقمًا.',
63: 
64:             'categoryHasBrand.required' => 'يجب تحديد ما إذا كان التصنيف يحتوي على ماركة .',
65:             'categoryHasBrand.boolean' => 'قيمة الحقل يجب أن تكون صحيحة أو خاطئة (true/false).',
66: 
67:             'file.image' => 'الملف يجب أن يكون صورة.',
68:             'file.mimes' => 'يجب أن تكون الصورة من نوع PNG أو JPG أو JPEG أو WEBP.',
69:             'file.max' => 'حجم الصورة يجب ألا يتجاوز 5 ميجابايت.',
70:             'file.dimensions' => 'أبعاد الصورة يجب أن تكون بين 64×64 .',
71:         ];
72:     }
73: 
74:     protected function failedValidation(Validator $validator)
75:     {
76:         throw (new ValidationException($validator))
77:             ->errorBag($this->errorBag)
78:             ->redirectTo($this->getRedirectUrl());
79:     }
80: }
```

## File: app/Http/Requests/Dashboard/CustomField/SaveCustomFieldRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Dashboard\CustomField;
 4: 
 5: use App\Enums\CustomFieldTypeEnum;
 6: use Illuminate\Contracts\Validation\Validator;
 7: use Illuminate\Foundation\Http\FormRequest;
 8: use Illuminate\Validation\Rule;
 9: use Illuminate\Validation\ValidationException;
10: 
11: class SaveCustomFieldRequest extends FormRequest
12: {
13:     public function authorize(): bool
14:     {
15:         return auth('admin')->check();
16:     }
17: 
18:     public function rules(): array
19:     {
20:         return [
21:             'categoryId' => ['required', 'integer', 'exists:categories,id'],
22:             'labelAr' => 'required|string|max:150',
23:             'fieldName' => [
24:                 'required',
25:                 'string',
26:                 'max:100'
27:             ],
28:             'fieldType' => ['required', 'string', Rule::enum(CustomFieldTypeEnum::class)],
29:             'isRequired' => ['required', 'boolean'],
30:         ];
31:     }
32: 
33:     public function messages(): array
34:     {
35:         return [
36:             'categoryId.required' => 'يجب تحديد القسم.',
37:             'categoryId.integer' => 'معرّف القسم يجب أن يكون رقمًا صحيحًا.',
38:             'categoryId.exists' => 'القسم المحدد غير موجود.',
39: 
40:             'labelAr.required' => 'يجب إدخال العنوان .',
41:             'labelAr.string' => 'العنوان  يجب أن يكون نصًا.',
42:             'labelAr.max' => 'العنوان  يجب ألا يتجاوز 150 حرفًا.',
43: 
44:             'fieldName.required' => 'يجب إدخال اسم الحقل.',
45:             'fieldName.string' => 'اسم الحقل يجب أن يكون نصًا.',
46:             'fieldName.max' => 'اسم الحقل يجب ألا يتجاوز 100 حرف.',
47: 
48:             'fieldType.required' => 'يجب تحديد نوع الحقل.',
49:             'fieldType.string' => 'نوع الحقل يجب أن يكون نصًا.',
50: 
51:             'isRequired.required' => 'يجب تحديد ما إذا كان الحقل إلزاميًا أم لا.',
52:             'isRequired.boolean' => 'قيمة إلزامية الحقل يجب أن تكون صحيحة أو خاطئة.',
53:         ];
54:     }
55: 
56: 
57:     protected function failedValidation(Validator $validator)
58:     {
59:         throw (new ValidationException($validator))
60:             ->errorBag($this->errorBag)
61:             ->redirectTo($this->getRedirectUrl());
62:     }
63: }
```

## File: app/Http/Requests/ProfileUpdateRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests;
 4: 
 5: use App\Models\User;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Validation\Rule;
 8: 
 9: class ProfileUpdateRequest extends FormRequest
10: {
11:     /**
12:      * Get the validation rules that apply to the request.
13:      *
14:      * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
15:      */
16:     public function rules(): array
17:     {
18:         return [
19:             'name' => ['required', 'string', 'max:255'],
20:             'email' => [
21:                 'required',
22:                 'string',
23:                 'lowercase',
24:                 'email',
25:                 'max:255',
26:                 Rule::unique(User::class)->ignore($this->user()->id),
27:             ],
28:         ];
29:     }
30: }
```

## File: app/Http/Requests/Shared/Auth/LoginWithOtpRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Shared\Auth;
 4: 
 5: use App\Rules\SaudiPhoneNumberRule;
 6: use Illuminate\Contracts\Validation\Validator;
 7: use Illuminate\Foundation\Http\FormRequest;
 8: use Illuminate\Validation\ValidationException;
 9: 
10: class LoginWithOtpRequest extends FormRequest
11: {
12:     public function authorize(): bool
13:     {
14:         return true;
15:     }
16: 
17:     public function rules(): array
18:     {
19:         return [
20:             'phoneNumber' => ['required', new SaudiPhoneNumberRule, 'exists:users,phone'],
21:             'otp' => 'required',
22:             'fcmToken' => 'nullable|string|max:255',
23:             'apiKey' => 'nullable|string|max:255',
24:         ];
25:     }
26: 
27:     public function messages(): array
28:     {
29:         return [
30:             'phoneNumber.required' => 'رقم الجوال مطلوب.',
31:             'phoneNumber.exists'   => 'رقم الجوال غير مسجل لدينا.',
32:             'otp.required'         => 'رمز التحقق مطلوب.',
33:             'fcmToken.string'      => 'رمز FCM يجب أن يكون نصاً.',
34:             'fcmToken.max'         => 'رمز FCM يجب ألا يتجاوز 255 حرفاً.',
35:             'apiKey.string'        => 'مفتاح API يجب أن يكون نصاً.',
36:             'apiKey.max'           => 'مفتاح API يجب ألا يتجاوز 255 حرفاً.',
37:         ];
38:     }
39: 
40:     protected function failedValidation(Validator $validator)
41:     {
42:         $response = response()->json($validator->errors(), 422);
43:         throw (new ValidationException($validator, $response))
44:             ->errorBag($this->errorBag)
45:             ->redirectTo($this->getRedirectUrl());
46:     }
47: }
```

## File: app/Http/Requests/Shared/Complaints/CreateComplaintVendorServiceRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\Shared\Complaints;
 4: 
 5: use Illuminate\Contracts\Validation\Validator;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Validation\ValidationException;
 8: 
 9: class CreateComplaintVendorServiceRequest extends FormRequest
10: {
11:     public function authorize(): bool
12:     {
13:         return auth('sanctum')->check();
14:     }
15: 
16:     public function rules(): array
17:     {
18:         return [
19:             'requestId'       => ['required', 'integer', 'exists:request_customers,id'],
20:             'responseId'       => ['required', 'integer'],
21:             'description'       => ['required', 'string', 'max:2000'],
22:         ];
23:     }
24: 
25:     public function messages(): array
26:     {
27:         return [
28:             'requestId.required'   => 'يجب إدخال رقم الطلب.',
29:             'requestId.integer'    => 'رقم الطلب يجب أن يكون رقمًا صحيحًا.',
30:             'requestId.exists'     => 'رقم الطلب غير موجود في قاعدة البيانات.',
31: 
32:             'responseId.required'   => 'يجب إدخال رقم الرد.',
33:             'responseId.integer'    => 'رقم الرد يجب أن يكون رقمًا صحيحًا.',
34: 
35:             'description.required' => 'يجب إدخال وصف البلاغ.',
36:             'description.string'   => 'الوصف يجب أن يكون نصًا.',
37:             'description.max'      => 'الوصف لا يجب أن يتجاوز 2000 حرف.',
38:         ];
39:     }
40: 
41:     protected function failedValidation(Validator $validator)
42:     {
43:         $response = response()->json($validator->errors(), 422);
44:         throw (new ValidationException($validator, $response))
45:             ->errorBag($this->errorBag)
46:             ->redirectTo($this->getRedirectUrl());
47:     }
48: }
```

## File: app/Http/Requests/User/Profile/UpdateProfileUserRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\User\Profile;
 4: 
 5: use Illuminate\Contracts\Validation\Validator;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Validation\ValidationException;
 8: 
 9: class UpdateProfileUserRequest extends FormRequest
10: {
11:     public function authorize(): bool
12:     {
13:         return auth('sanctum')->check();
14:     }
15: 
16:     public function rules(): array
17:     {
18:         return [
19:             'name' => ['required', 'string', 'max:255'],
20:             'images' => 'nullable|array|max:20',
21:             'images.*' => 'image|mimes:png,jpg,jpeg,webp|max:5000',
22:         ];
23:     }
24: 
25:     public function messages(): array
26:     {
27:         return [
28:             'images.*.max' => 'الصورة يجب ان تكون اقل من 5 ميغابايت.',
29:             'images.*.mimes' => 'الصورة يجب ان تكون png,jpg,jpeg,webp.',
30:             'images.*.image' => 'الصورة يجب ان تكون صورة.',
31:             'images.max' => 'الصورة يجب ان تكون اقل من 20 صور.',
32:             'images.array' => 'الصورة يجب ان تكون مصفوفة.',
33:             'name.required' => 'الإسم مطلوب.',
34:             'name.max' => 'الإسم يجب ان يكون اقل من 255 حرف.',
35:         ];
36:     }
37: 
38:     protected function failedValidation(Validator $validator)
39:     {
40:         $response = response()->json($validator->errors(), 422);
41:         throw (new ValidationException($validator, $response))
42:             ->errorBag($this->errorBag)
43:             ->redirectTo($this->getRedirectUrl());
44:     }
45: }
```

## File: app/Http/Requests/User/Request/ConfirmPriceShippingRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\User\Request;
 4: 
 5: use Illuminate\Contracts\Validation\Validator;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Validation\ValidationException;
 8: 
 9: class ConfirmPriceShippingRequest extends FormRequest
10: {
11:     public function authorize(): bool
12:     {
13:         return auth('sanctum')->check();
14:     }
15: 
16:     public function rules(): array
17:     {
18:         return [
19:             'id'       => ['required', 'integer', 'exists:shipping_requests,id'],
20:         ];
21:     }
22: 
23:     public function messages(): array
24:     {
25:         return [
26:             'id.required'      => 'الطلب مطلوبة.',
27:             'id.integer'      => 'الطلب يجب ان يكون رقم صحيح.',
28:             'id.exists'      => 'الطلب غير موجود.',
29:         ];
30:     }
31: 
32:     protected function failedValidation(Validator $validator)
33:     {
34:         $response = response()->json($validator->errors(), 422);
35:         throw (new ValidationException($validator, $response))
36:             ->errorBag($this->errorBag)
37:             ->redirectTo($this->getRedirectUrl());
38:     }
39: }
```

## File: app/Http/Requests/User/Request/ConfirmShippingRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\User\Request;
 4: 
 5: use Illuminate\Contracts\Validation\Validator;
 6: use Illuminate\Foundation\Http\FormRequest;
 7: use Illuminate\Validation\ValidationException;
 8: 
 9: class ConfirmShippingRequest extends FormRequest
10: {
11:     public function authorize(): bool
12:     {
13:         return auth('sanctum')->check();
14:     }
15: 
16:     public function rules(): array
17:     {
18:         return [
19:             'requestId'       => ['required', 'integer'],
20:             'responseId'  => ['required', 'integer'],
21:             'vendorId'  => ['required', 'integer'],
22:             'idNumberUser'       => ['required', 'string', 'max:20'],
23:             'cityOriginDimensions'       => ['required', 'string', 'max:255'],
24:             'addressOriginDimensions'       => ['required', 'string', 'max:255'],
25:             'phoneOriginDimensions'       => ['required', 'string', 'max:20'],
26:         ];
27:     }
28: 
29:     public function messages(): array
30:     {
31:         return [
32:             'requestId.required'      => 'الطلب مطلوبة.',
33:             'requestId.integer'      => 'الطلب يجب ان يكون رقم صحيح.',
34:             'responseId.required'      => 'رد الشركة مطلوبة.',
35:             'responseId.integer'      => 'رد الشركة يجب ان يكون رقم صحيح.',
36:             'idNumberUser.required'      => 'رقم الهوية مطلوبة.',
37:             'idNumberUser.string'      => 'رقم الهوية يجب ان يكون نص.',
38:             'idNumberUser.max'      => 'رقم الهوية يجب ان يكون اقل من 20 حرف.',
39:             'cityOriginDimensions.required'      => 'المدينة مطلوبة.',
40:             'cityOriginDimensions.string'      => 'المدينة يجب ان يكون نص.',
41:             'cityOriginDimensions.max'      => 'المدينة يجب ان يكون اقل من 255 حرف.',
42:             'addressOriginDimensions.required'      => 'العنوان مطلوبة.',
43:             'addressOriginDimensions.string'      => 'العنوان يجب ان يكون نص.',
44:             'addressOriginDimensions.max'      => 'العنوان يجب ان يكون اقل من 255 حرف.',
45:             'phoneOriginDimensions.required'      => 'رقم الهاتف مطلوبة.',
46:             'phoneOriginDimensions.string'      => 'رقم الهاتف يجب ان يكون نص.',
47:         ];
48:     }
49: 
50:     protected function failedValidation(Validator $validator)
51:     {
52:         $response = response()->json($validator->errors(), 422);
53:         throw (new ValidationException($validator, $response))
54:             ->errorBag($this->errorBag)
55:             ->redirectTo($this->getRedirectUrl());
56:     }
57: }
```

## File: app/Http/Services/BaseService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services;
 4: 
 5: use App\Exceptions\CustomValidationException;
 6: use Illuminate\Support\Facades\Validator;
 7: 
 8: class BaseService
 9: {
10:     public function validate($data, $rules, $messages = [])
11:     {
12:         $validator = Validator::make($data, $rules, $messages);
13: 
14:         if ($validator->fails())
15:             throw new CustomValidationException($validator);
16:     }
17: }
```

## File: app/Http/Services/Dashboard/CategoryService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard;
 4: 
 5: use App\Enums\CategoryStatusEnum;
 6: use App\Enums\CommissionTypeEnum;
 7: use App\Http\Services\BaseService;
 8: use App\Utils\UploadUtils;
 9: use Illuminate\Http\Request;
10: use Illuminate\Validation\Rule;
11: 
12: class CategoryService extends BaseService
13: {
14:     public function __construct(protected \App\Http\Repositories\Dashboard\CategoryRepository $categoryRepository) {}
15: 
16:     public function all()
17:     {
18:         return $this->categoryRepository->all();
19:     }
20: 
21:     public function createCategory(Request $request)
22:     {
23:         $imageName = UploadUtils::uploadImageToPublic($request->file, 'uploads/categories-icon');
24:         $commission = $request->commissionType == CommissionTypeEnum::Rate->value ? ($request->commission / 100) : $request->commission;
25: 
26:         $create = $this->categoryRepository->createCategory([
27:             'cat_name_ar' => $request->catNameAr,
28:             'cat_name_en' => $request->catNameAr,
29:             'cat_icon_path' => $imageName,
30:             'commission_type' => $request->commissionType,
31:             'commission' => $commission,
32:             'active' => CategoryStatusEnum::Inactive->value,
33:         ]);
34: 
35:         if ($request->categoryHasBrand) {
36:             $this->categoryRepository->addCategoryHasBrandField($create->id);
37:         }
38:     }
39: 
40:     public function editCategory($id)
41:     {
42:         return $this->categoryRepository->editCategory($id);
43:     }
44: 
45:     public function updateCategory(Request $request)
46:     {
47:         $imageName = UploadUtils::uploadImageToPublic($request->file, 'uploads/categories-icon');
48:         $commission = $request->commissionType == CommissionTypeEnum::Rate->value ? ($request->commission / 100) : $request->commission;
49: 
50:         $data = [
51:             'cat_name_ar' => $request->catNameAr,
52:             'cat_name_en' => $request->catNameAr,
53:             'commission_type' => $request->commissionType,
54:             'commission' => $commission,
55:         ];
56: 
57:         if (!empty($imageName)) {
58:             $data['cat_icon_path'] = $imageName;
59:         }
60: 
61:         $updated = $this->categoryRepository->updateCategory($data, $request->id);
62: 
63:         if ($request->categoryHasBrand) {
64:             $this->categoryRepository->updateCategoryHasBrandField($request->id);
65:         } else {
66:             $this->categoryRepository->deleteCategoryHasBrandField($request->id);
67:         }
68:     }
69: 
70:     public function deleteCategory(Request $request, $id)
71:     {
72:         $deleted = $this->categoryRepository->deleteCategory($id);
73:         if ($deleted)
74:             $this->categoryRepository->deleteCategoryHasBrandField($request->id);
75: 
76:         return $deleted;
77:     }
78: 
79:     public function updateStatusActiveCategory(Request $request)
80:     {
81:         $this->validate($request->all(), [
82:             'id' => 'required|integer|exists:categories,id',
83:             'status' => ['required', Rule::enum(CategoryStatusEnum::class)],
84:         ]);
85: 
86:         return $this->categoryRepository->updateCategory(['active' => $request->status], $request->id);
87:     }
88: 
89:     public function getCategoryNameById(int $categoryId)
90:     {
91:         return $this->categoryRepository->getCategoryNameById($categoryId);
92:     }
93: }
```

## File: app/Http/Services/Dashboard/ComplaintManagemnt/ComplaintManagemntService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard\ComplaintManagemnt;
 4: 
 5: use App\Enums\ComplaintSubjectEnum;
 6: use App\Http\Repositories\Dashboard\ComplaintManagemnt\ComplaintManagemntRepository;
 7: use App\Models\Complaint;
 8: use Illuminate\Http\Request;
 9: 
10: class ComplaintManagemntService
11: {
12:     public function __construct(protected ComplaintManagemntRepository $repo) {}
13: 
14:     public function index(Request $request)
15:     {
16:         $searchValue = $request->input('search.value');
17: 
18:         $recordsCount =  $this->repo->getTotalRecordsCount(Complaint::class);
19:         $recordsCountwithFilter = Complaint::select('count(*) as allcount')->searchValueFilter($searchValue)->count();;
20:         $records = $this->repo->index($request, $searchValue);
21: 
22:         foreach ($records as $record) {
23:             $record->subject = ComplaintSubjectEnum::trans($record->subject);
24:         }
25: 
26:         return $this->repo->formatResponseDataTables(
27:             draw: $request->input('draw'),
28:             recordsCount: $recordsCount,
29:             recordsCountwithFilter: $recordsCountwithFilter,
30:             records: $records
31:         );
32:     }
33: }
```

## File: app/Http/Services/Dashboard/CustomFieldService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard;
 4: 
 5: use App\Enums\CustomFieldTypeEnum;
 6: use App\Http\Services\BaseService;
 7: use App\Models\CustomField;
 8: use Illuminate\Http\Request;
 9: 
10: class CustomFieldService extends BaseService
11: {
12:     public function __construct(protected \App\Http\Repositories\Dashboard\CustomFieldRepository $customFieldRepository) {}
13: 
14:     public function getCustomFieldsByCategoryId($categoryId)
15:     {
16:         $this->validate(['categoryId' => $categoryId], ['categoryId' => 'required|integer|exists:categories,id']);
17: 
18:         return $this->customFieldRepository->getCustomFieldsByCategoryId($categoryId);
19:     }
20: 
21:     public function saveCustomField(Request $request)
22:     {
23:         return CustomField::updateOrCreate(
24:             ['category_id' => $request->categoryId, 'field_name' => $request->fieldName],
25:             [
26:                 'label_ar' => $request->labelAr,
27:                 'label_en' => $request->labelAr,
28:                 'field_type' => $request->fieldType,
29:                 'is_required' => $request->isRequired,
30:                 'min_length' => $this->customMinLength($request->fieldType),
31:                 'max_length' => $this->customMaxLength($request->fieldType),
32:             ]
33:         );
34:     }
35: 
36:     public function deleteCustomField($id)
37:     {
38:         $this->validate(['id' => $id], ['id' => 'required|integer|exists:custom_fields,id']);
39:         $model =  CustomField::where('id', $id)->first(['id']);
40:         return $model->delete();
41:     }
42: 
43:     private function customMinLength($minLength)
44:     {
45:         $value = null;
46:         if ($minLength == CustomFieldTypeEnum::Text->value || $minLength == CustomFieldTypeEnum::TextArea->value)
47:             $value = 1;
48: 
49:         return $value;
50:     }
51: 
52:     private function customMaxLength($maxLength)
53:     {
54:         $value = null;
55:         if ($maxLength == CustomFieldTypeEnum::Text->value)
56:             $value = 255;
57: 
58:         if ($maxLength == CustomFieldTypeEnum::TextArea->value)
59:             $value = 2000;
60: 
61:         return $value;
62:     }
63: }
```

## File: app/Http/Services/Dashboard/RequestsManagement/RequestsManagementService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard\RequestsManagement;
 4: 
 5: use App\Http\Repositories\Dashboard\RequestsManagement\RequestsManagementRepository;
 6: use App\Http\Services\BaseService;
 7: use App\Models\RequestCustomer;
 8: use Illuminate\Http\Request;
 9: use Illuminate\Support\Facades\Log;
10: 
11: class RequestsManagementService extends BaseService
12: {
13:     public function __construct(protected RequestsManagementRepository $repo) {}
14: 
15:     public function index(Request $request)
16:     {
17:         $searchValue = $request->input('search.value');
18: 
19:         $recordsCount =  $this->repo->getTotalRecordsCount(RequestCustomer::class);
20:         $recordsCountwithFilter = $this->repo->recordsCountRequestsCustomerWithFilter($searchValue);
21:         $records = $this->repo->index($request, $searchValue);
22: 
23:         return $this->repo->formatResponseDataTables(
24:             draw: $request->input('draw'),
25:             recordsCount: $recordsCount,
26:             recordsCountwithFilter: $recordsCountwithFilter,
27:             records: $records
28:         );
29:     }
30: 
31:     public function show($id)
32:     {
33:         $this->validate(['id' => $id], ['id' => 'required|integer|exists:request_customers,id'], [
34:             'requestId.required' => 'معرف الطلب مطلوب',
35:             'requestId.integer' => 'رقم الطلب يجب أن يكون رقم صحيح',
36:             'requestId.exists' => 'رقم الطلب غير موجود',
37:         ]);
38: 
39:         $result = $this->repo->getRequestById($id);
40: 
41:         $result['brandsNames'] = $this->repo->getRequestBrandNamesScope($id);
42:         $result['cities'] = $this->repo->getRequestCitiesNamesScope($result->cities);
43:         $result['requestImages'] = $this->repo->getRequestImages($id);
44:         $result['customFields'] = $this->repo->getRequestCustomFields($id);
45: 
46:         return $result;
47:     }
48: }
```

## File: app/Http/Services/Dashboard/ResponseManagement/ResponseManagementService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard\ResponseManagement;
 4: 
 5: use App\Http\Repositories\Dashboard\RequestResponseManagement\ResponseManagementRepository;
 6: use App\Http\Services\BaseService;
 7: use App\Models\RequestResponse;
 8: use Illuminate\Http\Request;
 9: 
10: class ResponseManagementService extends BaseService
11: {
12:     public function __construct(protected ResponseManagementRepository $repo) {}
13: 
14:     public function index(Request $request, $requestId)
15:     {
16:         $searchValue = $request->input('search.value');
17: 
18:         $recordsCount =  $this->repo->getTotalRecordsCount(RequestResponse::class);
19:         $recordsCountwithFilter = $this->repo->recordsCountResponseWithFilter($requestId, $searchValue);
20:         $records = $this->repo->index($request, $requestId, $searchValue);
21: 
22:         return $this->repo->formatResponseDataTables(
23:             draw: $request->input('draw'),
24:             recordsCount: $recordsCount,
25:             recordsCountwithFilter: $recordsCountwithFilter,
26:             records: $records
27:         );
28:     }
29: }
```

## File: app/Http/Services/Dashboard/VendorsManagement/JoinRequestVendorService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard\VendorsManagement;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use App\Enums\user\UserRoleEnum;
 7: use App\Http\Repositories\Dashboard\VendorsManagement\JoinRequestVendorRepository;
 8: use App\Http\Repositories\Dashboard\VendorsManagement\VendorManagementRepository;
 9: use App\Http\Services\BaseService;
10: use App\Models\User;
11: use App\Models\Vendor;
12: use Illuminate\Http\Request;
13: use Illuminate\Support\Facades\Log;
14: 
15: class JoinRequestVendorService extends BaseService
16: {
17:     public function __construct(protected JoinRequestVendorRepository $repo, protected VendorManagementRepository $vendorManagementRepo) {}
18: 
19:     public function index(Request $request)
20:     {
21:         $searchValue = $request->input('search.value');
22: 
23:         return $this->repo->formatResponseDataTables(
24:             draw: $request->input('draw'),
25:             recordsCount: $this->repo->recordsCountPendingVendors(),
26:             recordsCountwithFilter: $this->repo->recordsCountPendingVendorsWithFilter($searchValue),
27:             records: $this->repo->index($request, $searchValue)
28:         );
29:     }
30: 
31:     public function getVendorsByUserId(Request $request, $userId)
32:     {
33:         $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
34:             'userId.required' => 'معرف المستخدم مطلوب',
35:             'userId.exists' => 'معرف المستخدم غير صحيح',
36:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
37:         ]);
38: 
39:         $vendor = $this->vendorManagementRepo->getVendorsByUserId($userId, StatusUserEnum::Pending->value);
40:         $vendorDocument = $this->vendorManagementRepo->getVendorDocumentByVendorId($vendor->vendor_id);
41:         $vendorCities = $this->vendorManagementRepo->getVendorCities($vendor->vendor_id);
42:         $vendorCategories = $this->vendorManagementRepo->getVendorCategories($vendor->vendor_id);
43: 
44:         return compact('vendor', 'vendorDocument', 'vendorCities', 'vendorCategories');
45:     }
46: 
47:     public function activeStatusVendor(Request $request)
48:     {
49:         $this->validate($request->all(), ['userId' => 'required|integer|exists:users,id'], [
50:             'userId.required' => 'معرف المستخدم مطلوب',
51:             'userId.exists' => ' المستخدم غير موجود',
52:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
53:         ]);
54: 
55:         return $this->vendorManagementRepo->updateVendorStatus($request->userId, StatusUserEnum::Active->value);
56:     }
57: 
58:     public function rejectedStatusVendor(Request $request, $userId)
59:     {
60:         $request->merge(['userId' => $userId]);
61:         $this->validate($request->all(), [
62:             'userId' => 'required|integer|exists:users,id',
63:             'rejectReason' => 'required|string|max:500',
64:         ], [
65:             'userId.required' => 'معرف المستخدم مطلوب',
66:             'userId.exists' => ' المستخدم غير موجود',
67:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
68:             'rejectReason.required' => 'سبب الرفض مطلوب',
69:             'rejectReason.string' => 'سبب الرفض يجب ان يكون نص',
70:             'rejectReason.max' => 'سبب الرفض يجب ان يكون اقل من 500 حرف',
71:         ]);
72: 
73:         $updated = $this->vendorManagementRepo->updateVendorStatus($request->userId, StatusUserEnum::Rejected->value);
74:         if ($updated)
75:             Vendor::where('user_id', $request->userId)->update(['verification_notes' => $request->rejectReason]);
76: 
77:         return $updated;
78:     }
79: 
80:     public function deleteVendor(Request $request, $userId)
81:     {
82:         $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
83:             'userId.required' => 'معرف المستخدم مطلوب',
84:             'userId.exists' => ' المستخدم غير موجود',
85:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
86:         ]);
87: 
88:         return $this->vendorManagementRepo->deleteVendor($userId);
89:     }
90: }
```

## File: app/Http/Services/Dashboard/VendorsManagement/VendorManagementService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Dashboard\VendorsManagement;
 4: 
 5: use App\Http\Repositories\Dashboard\VendorsManagement\VendorManagementRepository;
 6: use App\Http\Services\BaseService;
 7: use Illuminate\Http\Request;
 8: use Illuminate\Support\Facades\Log;
 9: 
10: class VendorManagementService extends BaseService
11: {
12:     public function __construct(protected VendorManagementRepository $repo) {}
13: 
14:     public function index(Request $request)
15:     {
16:         $searchValue = $request->input('search.value');
17: 
18:         return $this->repo->formatResponseDataTables(
19:             draw: $request->input('draw'),
20:             recordsCount: $this->repo->recordsCountVendors(),
21:             recordsCountwithFilter: $this->repo->recordsCountVendorsWithFilter($searchValue),
22:             records: $this->repo->index($request, $searchValue)
23:         );
24:     }
25: 
26:     public function getVendorsWithoutPendingByUserId(Request $request, $userId)
27:     {
28:         $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
29:             'userId.required' => 'معرف المستخدم مطلوب',
30:             'userId.exists' => 'معرف المستخدم غير صحيح',
31:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
32:         ]);
33: 
34:         $vendor = $this->repo->getVendorsWithoutPendingByUserId($userId);
35:         $vendorDocument = $this->repo->getVendorDocumentByVendorId($vendor->vendor_id);
36:         $vendorCities = $this->repo->getVendorCities($vendor->vendor_id);
37:         $vendorCategories = $this->repo->getVendorCategories($vendor->vendor_id);
38: 
39:         return compact('vendor', 'vendorDocument', 'vendorCities', 'vendorCategories');
40:     }
41: 
42:     public function deleteVendor(Request $request, $userId)
43:     {
44:         $this->validate(['userId' => $userId], ['userId' => 'required|integer|exists:users,id'], [
45:             'userId.required' => 'معرف المستخدم مطلوب',
46:             'userId.exists' => ' المستخدم غير موجود',
47:             'userId.integer' => 'معرف المستخدم يجب ان يكون رقم',
48:         ]);
49: 
50:         return $this->repo->deleteVendor($userId);
51:     }
52: }
```

## File: app/Http/Services/Shared/Auth/AuthService.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Services\Shared\Auth;
  4: 
  5: use App\Enums\StatusUserEnum;
  6: use App\Enums\user\UserRoleEnum;
  7: use App\Exceptions\CustomResponseException;
  8: use App\Http\Repositories\Shared\Auth\AuthRepository;
  9: use App\Http\Services\BaseService;
 10: use App\Models\User;
 11: use App\Models\Vendor;
 12: use App\Rules\SaudiPhoneNumberRule;
 13: use Illuminate\Http\Request;
 14: use Symfony\Component\HttpFoundation\Response;
 15: 
 16: class AuthService extends BaseService
 17: {
 18:     public function __construct(protected AuthRepository $authRepository) {}
 19: 
 20:     public function register(Request $request)
 21:     {
 22:         $this->validate($request->all(), [
 23:             'phoneNumber' => ['required', new SaudiPhoneNumberRule],
 24:         ]);
 25: 
 26:         $user = $this->authRepository->getUserByPhoneNumber($request->phoneNumber);
 27: 
 28:         if ($user && $user->status == StatusUserEnum::Pending->value)
 29:             return buildApiResponseHelper(false, 'حسابك قيد المراجعة');
 30:         else if ($user && $user->status == StatusUserEnum::Inactive->value)
 31:             return buildApiResponseHelper(false,  'حسابك محظور');
 32:         else if ($user && $user->status == StatusUserEnum::Suspended->value)
 33:             return buildApiResponseHelper(false,  'تم تعليق حسابك ... الرجاء مراجعة الإدارة');
 34:         else if ($user && $user->status == StatusUserEnum::Rejected->value)
 35:             return buildApiResponseHelper(false,  'تم رفض حسابك ... الرجاء مراجعة الإدارة');
 36: 
 37:         if (!$user)
 38:             $user = $this->createUser($request);
 39: 
 40:         $userOtp = $this->authRepository->generateOtp($user);
 41:         // $userOtp->sendSMS($request->phoneNumber);
 42: 
 43:         return buildApiResponseHelper(true, 'سيتم إرسال كود التحقق الى رقم الجوال');
 44:     }
 45: 
 46:     public function loginWithOtp(Request $request)
 47:     {
 48:         $user = $this->authRepository->getUserByPhoneNumber($request->phoneNumber);
 49:         if (!$user)  return buildApiResponseHelper(false, 'المستخدم غير موجود');
 50: 
 51:         $userOtp = $this->authRepository->getLatestUserOtpByOtp($user->id, $request->otp);
 52: 
 53:         $now = now();
 54: 
 55:         if (!$userOtp)
 56:             return buildApiResponseHelper(false, 'كود التحقق غير صحيح');
 57: 
 58:         if ($userOtp && $now->isAfter($userOtp->expire_at))
 59:             return buildApiResponseHelper(false, 'تم انتهاء صلاحية كود التحقق');
 60: 
 61: 
 62:         $user->fcm_token = $request->fcmToken;
 63:         $user->save();
 64: 
 65:         $userOtp->update(['expire_at' => now()]);
 66:         $token = $user->createToken($request->apiKey, [$user->roles->pluck('name')[0] ?? ''])->plainTextToken;
 67: 
 68:         return buildApiResponseHelper(true, 'تم تسجيل الدخول بنجاح', [
 69:             'user' => $this->buildResponseLoginWithOtp($user),
 70:             'token' => $token,
 71:         ]);
 72:     }
 73: 
 74:     private function buildResponseLoginWithOtp($user)
 75:     {
 76:         $result = [
 77:             'id' => $user->id,
 78:             'name' => $user->name,
 79:             'phone' => $user->phone,
 80:             'logo' => $user->logo,
 81:             'role' => UserRoleEnum::User->value,
 82:         ];
 83: 
 84:         if ($user->hasRole(UserRoleEnum::Vendor->value)) {
 85:             $vendor = Vendor::where('user_id', $user->id)->first(['id', 'company_name_ar', 'company_name_en']);
 86:             $result['company_name_ar'] = $vendor->company_name_ar;
 87:             $result['company_name_en'] = $vendor->company_name_en;
 88:             $result['role'] = UserRoleEnum::Vendor->value;
 89:         }
 90: 
 91:         return $result;
 92:     }
 93: 
 94:     private function createUser(Request $request): User
 95:     {
 96:         $user = $this->authRepository->create([
 97:             'phone' => $request->phoneNumber,
 98:             'name' => 'user-' . $request->phoneNumber,
 99:             'status' => StatusUserEnum::Active->value,
100:         ]);
101: 
102:         $user->assignRole(UserRoleEnum::User->value);
103: 
104:         return $user;
105:     }
106: }
```

## File: app/Http/Services/Shared/BrandCarService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Http\Repositories\Shared\BrandCarRepository;
 6: 
 7: class BrandCarService
 8: {
 9:     public function __construct(protected BrandCarRepository $brandCarRepository) {}
10: 
11:     public function getAllBrandCars()
12:     {
13:         return $this->brandCarRepository->getAll(['id', 'brand_name_ar', 'brand_name_en']);
14:     }
15: }
```

## File: app/Http/Services/Shared/CacheStaticDataVersionService.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Services\Shared;
  4: 
  5: use App\Enums\EntityNameCacheStaticDataEnum;
  6: use App\Http\Services\BaseService;
  7: use App\Models\{
  8:     AdsBanner,
  9:     BrandCar,
 10:     CacheStaticDataVersion,
 11:     Category,
 12:     CategoryHasBrandField,
 13:     City,
 14:     CustomField
 15: };
 16: use App\Utils\CacheUtils;
 17: use Carbon\Carbon;
 18: use Illuminate\Http\Request;
 19: 
 20: class CacheStaticDataVersionService extends BaseService
 21: {
 22: 
 23:     public function checkUpdates(Request $request): array
 24:     {
 25:         $this->validate($request->all(), [
 26:             'cities_last_update_at' => 'nullable|date',
 27:             'brands_cars_last_update_at' => 'nullable|date',
 28:             'categories_last_update_at' => 'nullable|date',
 29:             'category_has_brand_field_last_update_at' => 'nullable|date',
 30:             'custom_fields_last_update_at' => 'nullable|date',
 31:             'ads_banners_last_update_at' => 'nullable|date',
 32:         ]);
 33: 
 34:         $response = $this->initializeResponseStructure();
 35:         $entities = $this->getEntityConfigrations($request);
 36: 
 37:         foreach ($entities as $entity) {
 38:             $this->processEntityUpdates($entity, $response);
 39:         }
 40: 
 41:         return $response;
 42:     }
 43: 
 44:     private function initializeResponseStructure(): array
 45:     {
 46:         return [
 47:             'hasUpdates' => false,
 48:             'dataList' => [],
 49:             'lastUpdateTimesList' => [],
 50:         ];
 51:     }
 52: 
 53:     private function getEntityConfigrations(Request $request): array
 54:     {
 55:         return [
 56:             [
 57:                 'enum' => EntityNameCacheStaticDataEnum::Cities,
 58:                 'model' => City::class,
 59:                 'columns' => ['id', 'city_name_ar', 'city_name_en', 'is_active'],
 60:                 'cacheKey' => CacheUtils::citiesCacheStaticDataAppKey(),
 61:                 'clientLastUpdate' => $request->input('cities_last_update_at'),
 62:             ],
 63:             [
 64:                 'enum' => EntityNameCacheStaticDataEnum::BrandsCars,
 65:                 'model' => BrandCar::class,
 66:                 'columns' => ['id', 'brand_name_ar', 'brand_name_en'],
 67:                 'cacheKey' => CacheUtils::brandsCarsCacheStaticDataAppKey(),
 68:                 'clientLastUpdate' => $request->input('brands_cars_last_update_at'),
 69:             ],
 70:             [
 71:                 'enum' => EntityNameCacheStaticDataEnum::Categories,
 72:                 'model' => Category::class,
 73:                 'columns' => ['id', 'cat_name_ar', 'cat_name_en', 'cat_icon_path', 'commission_type', 'commission', 'active'],
 74:                 'cacheKey' => CacheUtils::categoriesCacheStaticDataAppKey(),
 75:                 'clientLastUpdate' => $request->input('categories_last_update_at'),
 76:             ],
 77:             [
 78:                 'enum' => EntityNameCacheStaticDataEnum::CategoryHasBrandField,
 79:                 'model' => CategoryHasBrandField::class,
 80:                 'columns' => ['id', 'category_id'],
 81:                 'cacheKey' => CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey(),
 82:                 'clientLastUpdate' => $request->input('category_has_brand_field_last_update_at'),
 83:             ],
 84:             [
 85:                 'enum' => EntityNameCacheStaticDataEnum::CustomFields,
 86:                 'model' => CustomField::class,
 87:                 'columns' => ['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length'],
 88:                 'cacheKey' => CacheUtils::customFieldsCacheStaticDataAppKey(),
 89:                 'clientLastUpdate' => $request->input('custom_fields_last_update_at'),
 90:             ],
 91:             [
 92:                 'enum' => EntityNameCacheStaticDataEnum::AdsBanner,
 93:                 'model' => AdsBanner::class,
 94:                 'columns' => ['id', 'ads_image', 'is_active'],
 95:                 'cacheKey' => CacheUtils::adsBannersCacheStaticDataAppKey(),
 96:                 'clientLastUpdate' => $request->input('ads_banners_last_update_at'),
 97:             ],
 98:         ];
 99:     }
100: 
101:     private function processEntityUpdates(array $entity, array &$response): void
102:     {
103:         $entityName = $entity['enum']->value;
104:         $modelClass = $entity['model'];
105:         $columns = $entity['columns'];
106: 
107:         $clientLastUpdate = $entity['clientLastUpdate'] ? Carbon::parse($entity['clientLastUpdate']) : null;
108: 
109:         $serverUpdatedAt = CacheStaticDataVersion::getTimestamp($entityName);
110:         $response['lastUpdateTimesList'][$entityName] = $serverUpdatedAt->toIso8601String();
111: 
112:         if (!$clientLastUpdate || $serverUpdatedAt->gt($clientLastUpdate)) {
113:             $response['dataList'][$entityName] = CacheUtils::rememberForever($entity['cacheKey'], function () use ($modelClass, $columns) {
114:                 return $modelClass::get($columns);
115:             });
116:             $response['hasUpdates'] = true;
117:         }
118:     }
119: }
```

## File: app/Http/Services/Shared/CategoryHasBrandFieldService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Http\Repositories\Shared\CategoryHasBrandFieldRepository;
 6: 
 7: class CategoryHasBrandFieldService
 8: {
 9:     public function __construct(protected CategoryHasBrandFieldRepository $categoryHasBrandFieldRepository) {}
10: 
11:     public function getAllCategoryHasBrandFields()
12:     {
13:         return $this->categoryHasBrandFieldRepository->getAll(['id', 'category_id']);
14:     }
15: }
```

## File: app/Http/Services/Shared/CategoryService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Http\Repositories\Shared\CategoryRepository;
 6: 
 7: class CategoryService
 8: {
 9:     public function __construct(protected CategoryRepository $categoryRepository) {}
10: 
11:     public function getAllCategories()
12:     {
13:         return $this->categoryRepository->getAll(['id', 'cat_name_ar', 'cat_name_en', 'cat_icon_path', 'commission_type', 'commission', 'active']);
14:     }
15: }
```

## File: app/Http/Services/Shared/CityService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Http\Repositories\Shared\CityRepository;
 6: 
 7: class CityService
 8: {
 9:     public function __construct(protected CityRepository $cityRepository) {}
10: 
11:     public function getAllCities()
12:     {
13:         return $this->cityRepository->getAll(['id', 'city_name_ar', 'city_name_en', 'is_active']);
14:     }
15: }
```

## File: app/Http/Services/Shared/ComplaintService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Enums\ComplaintSubjectEnum;
 6: use App\Enums\ComplaintUserTypeEnum;
 7: use App\Http\Repositories\Shared\ComplaintRepository;
 8: use Illuminate\Http\Request;
 9: 
10: class ComplaintService
11: {
12:     public function __construct(protected ComplaintRepository $complaintRepository) {}
13: 
14:     public function complaintVendorService(Request $request)
15:     {
16:         // إبلاغ عن إساءة
17:         return $this->complaintRepository->create([
18:             'user_type' => ComplaintUserTypeEnum::User->value,
19:             'user_id' => getCurrUserIdHelper(),
20:             'subject' => ComplaintSubjectEnum::VendorService->value,
21:             'request_id' => $request->requestId,
22:             'title' => 'بلاغ عن الطلب (' . $request->requestId . ') ' . ' - الرد رقم (' . $request->responseId . ')',
23:             'description' => $request->description,
24:         ]);
25:     }
26: }
```

## File: app/Http/Services/Shared/CustomFieldService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Http\Repositories\Shared\CustomFieldRepository;
 6: use App\Utils\CacheUtils;
 7: 
 8: class CustomFieldService
 9: {
10:     public function __construct(protected CustomFieldRepository $customFieldRepository) {}
11: 
12:     public function getAllCustomFields()
13:     {
14:         CacheUtils::remember(CacheUtils::customFieldsCacheStaticDataAppKey(), function () {
15:             return $this->customFieldRepository->getAll(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
16:         }, now()->addMinutes(30));
17:         return $this->customFieldRepository->getAll(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
18:     }
19: 
20:     public function getCustomFieldsByCategoryId(int $categoryId)
21:     {
22:         return $this->customFieldRepository->getCustomFieldsByCategoryId($categoryId);
23:     }
24: }
```

## File: app/Http/Services/Shared/RegisterVendorService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use App\Enums\user\UserRoleEnum;
 7: use App\Http\Repositories\Shared\RegisterVendorRepository;
 8: use App\Utils\UploadUtils;
 9: use Illuminate\Http\Request;
10: 
11: class RegisterVendorService
12: {
13:     public function __construct(protected RegisterVendorRepository $registerVendorRepository) {}
14: 
15:     public function registerVendor(Request $request)
16:     {
17:         $createUser = $this->registerVendorRepository->createUser([
18:             'phone' => $request->phoneNumber,
19:             'name' => $request->companyNameAr,
20:             'fcm_token' => $request->fcmToken,
21:             'status' => StatusUserEnum::Pending->value,
22:         ]);
23: 
24:         $createUser->assignRole(UserRoleEnum::Vendor->value);
25: 
26:         $createVendor = $this->registerVendorRepository->createVendor([
27:             'user_id' => $createUser->id,
28:             'company_name_ar' => $request->companyNameAr,
29:             'commercial_record' => $request->commercialRecord,
30:             'national_id' => $request->commercialRecord,
31:             'date_expire_commercial_record' => $request->dateExpireCommercialRecord,
32:         ]);
33: 
34:         $this->registerVendorRepository->createVendorCities([
35:             'vendor_id' => $createVendor->id,
36:             'city_id' => $request->cityId,
37:         ]);
38: 
39:         foreach ($request->categoriesIds as $categoryId) {
40:             $this->registerVendorRepository->createVendorCategories([
41:                 'vendor_id' => $createVendor->id,
42:                 'category_id' => $categoryId,
43:             ]);
44:         }
45: 
46:         foreach ($request->images as $file) {
47:             $fileName = UploadUtils::encryptAndStoreSensitiveFile($file);
48:             $this->registerVendorRepository->createVendorDocuments([
49:                 'vendor_id' => $createVendor->id,
50:                 'document_type' => 'Commercial_Record',
51:                 'file_path' => $fileName,
52:             ]);
53:         }
54:     }
55: }
```

## File: app/Http/Services/User/MyRequests/MyRequestUserService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\User\MyRequests;
 4: 
 5: use App\Http\Repositories\User\MyRequests\MyRequestUserRepository;
 6: use App\Http\Services\BaseService;
 7: use Illuminate\Http\Request;
 8: 
 9: class MyRequestUserService extends BaseService
10: {
11:     public function __construct(protected MyRequestUserRepository $myRequestUserRepository) {}
12: 
13:     public function getMyRequest()
14:     {
15:         return $this->myRequestUserRepository->getMyRequest();
16:     }
17: 
18:     public function getMyRequestById(Request $request, $requestId)
19:     {
20:         $this->validate(['requestId' => $requestId], ['requestId' => 'required|integer|exists:request_customers,id'], [
21:             'requestId.required' => 'معرف الطلب مطلوب',
22:             'requestId.integer' => 'رقم الطلب يجب أن يكون رقم صحيح',
23:             'requestId.exists' => 'رقم الطلب غير موجود',
24:         ]);
25: 
26:         $result = $this->myRequestUserRepository->getMyRequestById($requestId);
27: 
28:         if (!$result)
29:             return buildApiResponseHelper(false, 'الطلب غير موجود');
30: 
31:         $result['brandsNames'] = $this->myRequestUserRepository->getRequestBrandNamesScope($request->requestId);
32:         $result['cities'] = $this->myRequestUserRepository->getRequestCitiesNamesScope($result->cities);
33:         $result['requestImages'] = $this->myRequestUserRepository->getRequestImages($request->requestId);
34:         $result['customFields'] = $this->myRequestUserRepository->getRequestCustomFields($request->requestId);
35: 
36:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', $result);
37:     }
38: 
39:     public function getResponsesMyRequest(Request $request, $requestId)
40:     {
41:         $this->validate(['requestId' => $requestId], ['requestId' => 'required|integer'], [
42:             'requestId.required' => 'معرف الطلب مطلوب',
43:             'requestId.integer' => 'رقم الطلب يجب أن يكون رقم صحيح',
44:         ]);
45: 
46:         return $this->myRequestUserRepository->getResponsesMyRequest($requestId);
47:     }
48: 
49:     public function getResponseRequestById(Request $request, $responseId)
50:     {
51:         $this->validate(['responseId' => $responseId], ['responseId' => 'required|integer'], [
52:             'responseId.required' => 'معرف الرد مطلوب',
53:             'responseId.integer' => 'رقم الرد يجب أن يكون رقم صحيح',
54: 
55:         ]);
56: 
57:         return $this->myRequestUserRepository->getResponseRequestById($responseId);
58:     }
59: }
```

## File: app/Http/Services/User/ProfileUserService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\User;
 4: 
 5: use App\Http\Repositories\User\ProfileUserRepository;
 6: use App\Utils\UploadUtils;
 7: use Illuminate\Http\Request;
 8: 
 9: class ProfileUserService
10: {
11:     public function __construct(protected ProfileUserRepository $repo) {}
12: 
13:     public function getUserProfile()
14:     {
15:         return $this->repo->getUser();
16:     }
17: 
18:     public function updateUserProfile(Request $request)
19:     {
20:         $userId = getCurrUserIdHelper();
21: 
22:         $this->repo->updateUser([
23:             'name' => $request->name,
24:         ], $userId);
25: 
26:         $filesName = UploadUtils::uploadMultipleImageToPublic($request->images);
27: 
28:         $this->repo->updateLogoUser($filesName, $userId);
29: 
30:         return [
31:             'logo' => (count($filesName) == 0) ? (currUserHelper()->logo ?? '') : $filesName[0],
32:         ];
33:     }
34: }
```

## File: app/Interfaces/RepositoryInterface.php
```php
 1: <?php
 2: 
 3: namespace App\Interfaces;
 4: 
 5: interface RepositoryInterface
 6: {
 7:     public function create(array $data);
 8:     public function first(int $id, array $columns = ['*']);
 9:     public function update(int $id, array $attributes = []);
10:     public function delete(int $id);
11:     public function getAll(array $columns = ['*']);
12: }
```

## File: app/Models/Admin.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: use Illuminate\Notifications\Notifiable;
 8: use Illuminate\Foundation\Auth\User as Authenticatable;
 9: use Spatie\Permission\Traits\HasRoles;
10: 
11: class Admin extends Authenticatable
12: {
13:     use Notifiable, HasRoles, SoftDeletes;
14: 
15:     protected $guard = 'admin';
16: 
17:     protected $fillable = [
18:         'email',
19:         'password',
20:     ];
21: 
22:     protected $hidden = [
23:         'password',
24:         'remember_token',
25:     ];
26: 
27:     protected function casts(): array
28:     {
29:         return [
30:             'password' => 'hashed',
31:         ];
32:     }
33: }
```

## File: app/Models/AdsBanner.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: 
 7: class AdsBanner extends Model
 8: {
 9:     protected $fillable = ['ads_image', 'is_active'];
10: 
11:     protected $casts = [
12:         'is_active' => 'boolean',
13:     ];
14: }
```

## File: app/Models/BrandCar.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Utils\CacheUtils;
 6: use Illuminate\Database\Eloquent\Model;
 7: use Illuminate\Database\Eloquent\SoftDeletes;
 8: 
 9: class BrandCar extends Model
10: {
11:     use SoftDeletes;
12: 
13:     protected $fillable = ['brand_name_ar', 'brand_name_en'];
14: 
15:     public static function getBrandCarsCached()
16:     {
17:         return CacheUtils::rememberForever(CacheUtils::brandsCarsCacheStaticDataAppKey(), function () {
18:             return self::get(['id', 'brand_name_ar', 'brand_name_en']);
19:         });
20:     }
21: }
```

## File: app/Models/CacheStaticDataVersion.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Utils\CacheUtils;
 6: use Carbon\Carbon;
 7: use Illuminate\Database\Eloquent\Model;
 8: use Illuminate\Support\Facades\Log;
 9: 
10: class CacheStaticDataVersion extends Model
11: {
12:     protected $fillable = [
13:         'entity_name',
14:         'last_updated_at',
15:     ];
16: 
17:     protected $casts = [
18:         'last_updated_at' => 'datetime',
19:     ];
20: 
21:     protected $dates = ['last_updated_at'];
22: 
23:     public static function updateTimestamp(string $entityName): void
24:     {
25:         static::where('entity_name', $entityName)
26:             ->update(['last_updated_at' => now()]);
27:         CacheUtils::forget(CacheUtils::cacheStaticDataVersionAppKey($entityName));
28:     }
29: 
30:     public static function getTimestamp(string $entityName): ?Carbon
31:     {
32:         return CacheUtils::rememberForever(CacheUtils::cacheStaticDataVersionAppKey($entityName), function () use ($entityName) {
33:             return self::where('entity_name', $entityName)->value('last_updated_at');
34:         });
35:     }
36: }
```

## File: app/Models/Category.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class Category extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'cat_name_ar',
14:         'cat_name_en',
15:         'cat_icon_path',
16:         'commission_type',
17:         'commission',
18:         'active',
19:     ];
20: 
21:     protected $casts = [
22:         'commission' => 'decimal:2',
23:     ];
24: }
```

## File: app/Models/CategoryHasBrandField.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: 
 7: class CategoryHasBrandField extends Model
 8: {
 9:     protected $fillable = [
10:         'category_id',
11:         'has_brand_type',
12:     ];
13: 
14:     protected $casts = [
15:         'has_brand_type' => 'string',
16:     ];
17: }
```

## File: app/Models/City.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Utils\CacheUtils;
 6: use Illuminate\Database\Eloquent\Model;
 7: use Illuminate\Database\Eloquent\SoftDeletes;
 8: use Illuminate\Support\Facades\Log;
 9: 
10: class City extends Model
11: {
12:     use SoftDeletes;
13: 
14:     protected $fillable = [
15:         'city_name_ar',
16:         'city_name_en',
17:         'is_active',
18:     ];
19: 
20:     protected $casts = [
21:         'is_active' => 'boolean',
22:     ];
23: 
24:     public static function getCitiesCached()
25:     {
26:         return CacheUtils::rememberForever(CacheUtils::citiesCacheStaticDataAppKey(), function () {
27:             return self::get(['id', 'city_name_ar', 'city_name_en', 'is_active']);
28:         });
29:     }
30: }
```

## File: app/Models/Complaint.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Carbon\Carbon;
 6: use Illuminate\Database\Eloquent\Casts\Attribute;
 7: use Illuminate\Database\Eloquent\Model;
 8: use Illuminate\Database\Eloquent\SoftDeletes;
 9: 
10: class Complaint extends Model
11: {
12:     use SoftDeletes;
13: 
14:     protected $fillable = [
15:         'user_type',
16:         'user_id',
17:         'subject',
18:         'request_id',
19:         'title',
20:         'description',
21:         'status',
22:         'reviewed_by',
23:     ];
24: 
25:     protected $casts = [
26:         'user_type' => 'string',
27:         'subject' => 'string',
28:         'status' => 'string',
29:     ];
30: 
31:     protected function dateComplaint(): Attribute
32:     {
33:         return Attribute::make(
34:             get: fn($value) =>
35:             $value
36:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
37:                 : null
38:         );
39:     }
40: 
41:     protected function scopeSearchValueFilter($query, $value)
42:     {
43:         $query->when($value, function ($query, $value) {
44:             return $query->whereAny([
45:                 'complaints.id',
46:                 'users.user_id',
47:                 'users.name',
48:                 'users.phone',
49:                 'complaints.title',
50:                 'complaints.description',
51:                 'complaints.created_at',
52:             ], 'like', '%' . $value . '%');
53:         });
54:     }
55: }
```

## File: app/Models/CustomField.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Utils\CacheUtils;
 6: use Illuminate\Database\Eloquent\Model;
 7: use Illuminate\Database\Eloquent\SoftDeletes;
 8: 
 9: class CustomField extends Model
10: {
11:     use SoftDeletes;
12: 
13:     protected $fillable = [
14:         'category_id',
15:         'label_ar',
16:         'label_en',
17:         'field_name',
18:         'field_type',
19:         'is_required',
20:         'options',
21:         'min_length',
22:         'max_length',
23:     ];
24: 
25:     protected $casts = [
26:         'is_required' => 'boolean',
27:         'options' => 'array',
28:         'min_length' => 'integer',
29:         'max_length' => 'integer',
30:         'field_type' => 'string',
31:     ];
32: 
33:     public static function getCustomFieldsCached()
34:     {
35:         return CacheUtils::rememberForever(CacheUtils::customFieldsCacheStaticDataAppKey(), function () {
36:             return self::get(['id', 'category_id', 'label_ar', 'label_en', 'field_name', 'field_type', 'is_required', 'options', 'min_length', 'max_length']);
37:         });
38:     }
39: 
40:     public function scopeJoinCategory($query)
41:     {
42:         return $query->join('categories', 'categories.id', '=', 'custom_fields.category_id');
43:     }
44: }
```

## File: app/Models/Payment.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Enums\PaymentStatusEnum;
 6: use Illuminate\Database\Eloquent\Model;
 7: 
 8: class Payment extends Model
 9: {
10:     protected $fillable = [
11:         'user_id',
12:         'amount',
13:         'date',
14:         'name_transfer',
15:         'number_request',
16:         'notes',
17:         'invoice_image',
18:         'status',
19:     ];
20: 
21:     // cast
22:     protected $casts = [
23:         'amount' => 'double',
24:         'date' => 'date',
25:         'status' => PaymentStatusEnum::class
26:     ];
27: }
```

## File: app/Models/RequestBrandScope.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class RequestBrandScope extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'request_id',
14:         'brand_type',
15:         'brand_ids_scope',
16:     ];
17: 
18:     protected $casts = [
19:         'brand_type' => 'string',
20:         'brand_ids_scope' => 'array',
21:     ];
22: }
```

## File: app/Models/RequestCustomFieldValue.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class RequestCustomFieldValue extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'request_id',
14:         'custom_field_id',
15:         'value',
16:     ];
17: }
```

## File: app/Models/RequestEligibleVendor.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class RequestEligibleVendor extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'request_id',
14:         'vendor_id',
15:         'notification_sent',
16:     ];
17: 
18:     protected $casts = [
19:         'notification_sent' => 'boolean',
20:     ];
21: 
22:     public function scopeJoinRequestCustomer($query)
23:     {
24:         return $query->join('request_customers', 'request_eligible_vendors.request_id', '=', 'request_customers.id');
25:     }
26: 
27:     public function scopeLeftJoinCategoryToRequest($query)
28:     {
29:         return $query->leftJoin('categories', 'request_customers.category_id', '=', 'categories.id');
30:     }
31: 
32:     public function scopeLeftJoinCityCustomerToRequest($query)
33:     {
34:         return $query->leftJoin('cities', 'request_customers.customer_city_id', '=', 'cities.id');
35:     }
36: }
```

## File: app/Models/RequestImage.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: 
 7: class RequestImage extends Model
 8: {
 9:     protected $fillable = [
10:         'request_id',
11:         'image_name',
12:     ];
13: }
```

## File: app/Models/RequestResponse.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Carbon\Carbon;
 6: use Illuminate\Database\Eloquent\Casts\Attribute;
 7: use Illuminate\Database\Eloquent\Model;
 8: use Illuminate\Database\Eloquent\SoftDeletes;
 9: 
10: class RequestResponse extends Model
11: {
12:     use SoftDeletes;
13: 
14:     protected $fillable = [
15:         'request_id',
16:         'vendor_id',
17:         'status',
18:         'price',
19:         'note',
20:         'warranty',
21:     ];
22: 
23:     protected $casts = [
24:         'request_id' => 'integer',
25:         'price' => 'decimal:2',
26:         'status' => 'string',
27:     ];
28: 
29:     protected function requestDate(): Attribute
30:     {
31:         return Attribute::make(
32:             get: fn($value) =>
33:             $value
34:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
35:                 : null
36:         );
37:     }
38: 
39:     protected function responseDate(): Attribute
40:     {
41:         return Attribute::make(
42:             get: fn($value) =>
43:             $value
44:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
45:                 : null
46:         );
47:     }
48: 
49: 
50:     public function scopeJoinRequestCustomer($query)
51:     {
52:         return $query->join('request_customers', 'request_responses.request_id', '=', 'request_customers.id');
53:     }
54: 
55:     public function scopeLeftJoinCategoryToRequest($query)
56:     {
57:         return $query->leftJoin('categories', 'request_customers.category_id', '=', 'categories.id');
58:     }
59: 
60:     public function scopeLeftJoinCityCustomerToRequest($query)
61:     {
62:         return $query->leftJoin('cities', 'request_customers.customer_city_id', '=', 'cities.id');
63:     }
64: 
65:     public function scopeLeftJoinUserToRequest($query)
66:     {
67:         return $query->leftJoin('users', 'request_customers.user_id', '=', 'users.id');
68:     }
69: 
70:     public function scopeLeftJoinVendor($query)
71:     {
72:         return $query->leftJoin('vendors', 'request_responses.vendor_id', '=', 'vendors.id');
73:     }
74: 
75:     public function scopeLeftJoinVendorToUser($query)
76:     {
77:         return $query->leftJoin('users', 'vendors.user_id', '=', 'users.id');
78:     }
79: 
80:     public function scopeLeftJoinShippingRequest($query)
81:     {
82:         return $query->leftJoin('shipping_requests', function ($join) {
83:             $join->on('request_responses.request_id', '=', 'shipping_requests.request_id')
84:                 ->on('request_responses.id', '=', 'shipping_requests.response_id');
85:         });
86:     }
87: 
88:     protected function scopeSearchValueFilter($query, $value)
89:     {
90:         $query->when($value, function ($query, $value) {
91:             return $query->whereAny([
92:                 'request_responses.id',
93:                 'vendors.company_name_ar',
94:                 'request_responses.created_at',
95:             ], 'like', '%' . $value . '%');
96:         });
97:     }
98: }
```

## File: app/Models/RequestResponseImage.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: 
 7: class RequestResponseImage extends Model
 8: {
 9:     protected $fillable = [
10:         'response_id',
11:         'image_name',
12:     ];
13: }
```

## File: app/Models/Setting.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class Setting extends Model
 9: {
10:     use SoftDeletes;
11: 
12: 
13:     protected $fillable = ['key', 'value', 'type', 'group'];
14: 
15: 
16:     protected static function booted()
17:     {
18:         static::saved(function ($setting) {
19:             // cache()->forget(CacheUtils::GENERAL_SETTING_APP_KEY);
20:         });
21: 
22:         static::deleted(function ($setting) {
23:             // cache()->forget(CacheUtils::GENERAL_SETTING_APP_KEY);
24:         });
25:     }
26: 
27:     // get value setting with casting datatype automatics
28:     public static function get($key, $default = null)
29:     {
30:         $setting = static::where('key', $key)->first(['key', 'value', 'type']);
31: 
32:         if (!$setting) return $default;
33: 
34:         return match ($setting->type) {
35:             'array' => json_decode($setting->value, true),
36:             'object' => json_decode($setting->value),
37:             'boolean' => (bool) $setting->value,
38:             'integer' => (int) $setting->value,
39:             'float' => (float) $setting->value,
40:             default => $setting->value
41:         };
42:     }
43: 
44:     // create or update setting value with determine datatype automatics
45:     public static function set($key, $value, $group = '')
46:     {
47:         $type = gettype($value);
48:         $storedValue = $value;
49: 
50:         if ($type === 'array' || $type === 'object') {
51:             $storedValue = json_encode($value);
52:         } elseif ($type === 'boolean') {
53:             $storedValue = $value ? '1' : '0';
54:         }
55: 
56:         return static::updateOrCreate(
57:             ['key' => $key],
58:             [
59:                 'value' => $storedValue,
60:                 'type' => $type,
61:                 'group' => $group
62:             ]
63:         );
64:     }
65: }
```

## File: app/Models/User.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: // use Illuminate\Contracts\Auth\MustVerifyEmail;
 6: 
 7: use Carbon\Carbon;
 8: use Illuminate\Database\Eloquent\Factories\HasFactory;
 9: use Illuminate\Database\Eloquent\SoftDeletes;
10: use Illuminate\Foundation\Auth\User as Authenticatable;
11: use Illuminate\Notifications\Notifiable;
12: use Laravel\Sanctum\HasApiTokens;
13: use Spatie\Permission\Traits\HasRoles;
14: use Illuminate\Database\Eloquent\Casts\Attribute;
15: 
16: class User extends Authenticatable
17: {
18:     /** @use HasFactory<\Database\Factories\UserFactory> */
19:     use HasFactory, Notifiable, HasRoles, SoftDeletes, HasApiTokens;
20: 
21:     protected static function booted(): void
22:     {
23:         static::deleting(function (User $user) {
24:             if (! $user->isForceDeleting()) {
25:                 $user->phone = $user->phone . '_deleted_' . time();
26:                 $user->save();
27:             }
28:         });
29:     }
30: 
31:     /**
32:      * The attributes that are mass assignable.
33:      *
34:      * @var list<string>
35:      */
36:     protected $fillable = [
37:         'name',
38:         'phone',
39:         'logo',
40:         'status',
41:         'fcm_token',
42:     ];
43: 
44:     /**
45:      * The attributes that should be hidden for serialization.
46:      *
47:      * @var list<string>
48:      */
49:     protected $hidden = [
50:         'password',
51:         'remember_token',
52:     ];
53: 
54:     /**
55:      * Get the attributes that should be cast.
56:      *
57:      * @return array<string, string>
58:      */
59:     protected function casts(): array
60:     {
61:         return [
62:             'email_verified_at' => 'datetime',
63:             'password' => 'hashed',
64:         ];
65:     }
66: 
67:     protected function memberSince(): Attribute
68:     {
69:         return Attribute::make(
70:             get: fn($value) =>
71:             $value
72:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
73:                 : null
74:         );
75:     }
76: 
77:     protected function scopeSearchValueFilter($query, $value)
78:     {
79:         $query->when($value, function ($query, $value) {
80:             return $query->whereAny([
81:                 'users.id',
82:                 'users.name',
83:                 'users.phone',
84:             ], 'like', '%' . $value . '%');
85:         });
86:     }
87: 
88:     public function scopeJoinVendors($query)
89:     {
90:         return $query->join('vendors', 'users.id', '=', 'vendors.user_id');
91:     }
92: }
```

## File: app/Models/UserOtp.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Exception;
 6: use Illuminate\Database\Eloquent\Model;
 7: use Twilio\Rest\Client;
 8: 
 9: class UserOtp extends Model
10: {
11:     protected $fillable = [
12:         'user_id',
13:         'otp',
14:         'expire_at',
15:     ];
16: 
17:     protected $casts = [
18:         'expire_at' => 'datetime',
19:     ];
20: 
21:     protected $dates = [
22:         'expire_at',
23:     ];
24: 
25:     public function sendSMS($receiverNumber)
26:     {
27:         $message = "Login OTP is " . $this->otp;
28: 
29:         try {
30:             $account_sid = env("TWILIO_AUTH_SID");
31:             $auth_token = env("TWILIO_AUTH_TOKEN");
32:             $twilio_number = env("TWILIO_WHATSAPP_FROM");
33: 
34:             $client = new Client($account_sid, $auth_token);
35:             $client->messages->create('whatsapp:+967774211463', [
36:                 'from' => 'whatsapp:+14155238886',
37:                 'body' => $message
38:             ]);
39: 
40:             info('SMS Sent Successfully.');
41:         } catch (Exception $e) {
42:             info("Error: " . $e->getMessage());
43:         }
44:     }
45: 
46:     private function whatsappNotification(string $recipient)
47:     {
48:         $sid    = env("TWILIO_AUTH_SID");
49:         $token  = env("TWILIO_AUTH_TOKEN");
50:         $wa_from = env("TWILIO_WHATSAPP_FROM");
51:         $client = new Client($sid, $token);
52:         $twilio = new Client($sid, $token);
53: 
54:         $body = "Hello, welcome to codelapan.com.";
55: 
56:         return $twilio->messages->create("whatsapp:$recipient", ["from" => "whatsapp:$wa_from", "body" => $body]);
57:     }
58: }
```

## File: app/Models/Vendor.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Enums\StatusUserEnum;
 6: use Illuminate\Database\Eloquent\Model;
 7: use Illuminate\Database\Eloquent\SoftDeletes;
 8: 
 9: class Vendor extends Model
10: {
11:     use SoftDeletes;
12: 
13:     protected $fillable = [
14:         'user_id',
15:         'company_name_ar',
16:         'company_name_en',
17:         'description',
18:         'commercial_record',
19:         'date_expire_commercial_record',
20:         'phone_contact',
21:         'rating',
22:         'is_hide_phone_contact',
23:         'is_verified',
24:         'verification_notes',
25:         'verified_at',
26:     ];
27: 
28:     protected $casts = [
29:         'rating' => 'float',
30:         'is_hide_phone_contact' => 'boolean',
31:         'is_verified' => 'boolean',
32:         'verified_at' => 'datetime',
33:         'date_expire_commercial_record' => 'date',
34:     ];
35: 
36:     protected $dates = ['verified_at', 'date_expire_commercial_record'];
37: 
38:     public function scopeJoinUsers($query)
39:     {
40:         return $query->join('users', 'vendors.user_id', '=', 'users.id');
41:     }
42: 
43:     public function scopeJoinVendorSpecialties($query)
44:     {
45:         return $query->join('vendor_specialties', 'vendors.id', '=', 'vendor_specialties.vendor_id');
46:     }
47: 
48:     public function scopeJoinVendorCities($query)
49:     {
50:         return $query->join('vendor_cities', 'vendors.id', '=', 'vendor_cities.vendor_id');
51:     }
52: 
53:     public function scopeLeftJoinVendorBrandCars($query, $categoryId)
54:     {
55:         return $query->leftJoin('vendor_brand_cars', function ($join) use ($categoryId) {
56:             $join->on('vendors.id', '=', 'vendor_brand_cars.vendor_id')
57:                 ->where('vendor_brand_cars.category_id', '=', $categoryId);
58:         });
59:     }
60: 
61:     public function scopeWhereCategoryVendorSpecialty($query, $categoryId)
62:     {
63:         return $query->where('vendor_specialties.category_id', $categoryId);
64:     }
65: 
66:     public function scopeWhereInVendorCities($query, $citiesIdsScope)
67:     {
68:         return $query->whereIn('vendor_cities.city_id', (array) $citiesIdsScope);
69:     }
70: 
71:     public function scopeIsActive($query)
72:     {
73:         return $query->where('users.status', StatusUserEnum::Active->value);
74:     }
75: 
76:     public function scopeGetUserIdByVendorId($query, $vendorId)
77:     {
78:         return $query->where('id', $vendorId)->value('user_id') ?? 0;
79:     }
80: }
```

## File: app/Models/VendorBrandCar.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class VendorBrandCar extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'vendor_id',
14:         'category_id',
15:         'brand_car_id',
16:     ];
17: }
```

## File: app/Models/VendorCity.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class VendorCity extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'vendor_id',
14:         'city_id',
15:         'address_ar',
16:         'address_en',
17:         'latitude',
18:         'longitude',
19:     ];
20: 
21:     protected $casts = [
22:         'latitude' => 'decimal:10',
23:         'longitude' => 'decimal:10',
24:     ];
25: }
```

## File: app/Models/VendorDocument.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class VendorDocument extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'vendor_id',
14:         'document_type',
15:         'file_path',
16:     ];
17: 
18:     protected $casts = [
19:         'document_type' => 'string',
20:     ];
21: }
```

## File: app/Models/VendorReview.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class VendorReview extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'request_id',
14:         'vendor_id',
15:         'user_id',
16:         'rating',
17:         'review',
18:         'is_visible',
19:     ];
20: 
21:     protected $casts = [
22:         'rating' => 'decimal:1',
23:         'is_visible' => 'boolean',
24:     ];
25: }
```

## File: app/Models/VendorSpecialty.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Database\Eloquent\SoftDeletes;
 7: 
 8: class VendorSpecialty extends Model
 9: {
10:     use SoftDeletes;
11: 
12:     protected $fillable = [
13:         'vendor_id',
14:         'category_id',
15:         'is_receive_all_brand_cars',
16:     ];
17: 
18:     protected $casts = [
19:         'is_receive_all_brand_cars' => 'boolean',
20:     ];
21: 
22:     public function scopeJoinCategoryHasBrandFields($query)
23:     {
24:         return $query->join('category_has_brand_fields', 'category_has_brand_fields.category_id', '=', 'vendor_specialties.category_id');
25:     }
26: }
```

## File: app/Notifications/SendNotification.php
```php
 1: <?php
 2: 
 3: namespace App\Notifications;
 4: 
 5: use Illuminate\Bus\Queueable;
 6: use Illuminate\Notifications\Notification;
 7: 
 8: class SendNotification extends Notification
 9: {
10:     use Queueable;
11: 
12:     protected $title;
13:     protected $body;
14:     protected $category;
15:     protected $targetId;
16: 
17:     public function __construct($title, $body, $category = 'customer_requests', $targetId = null)
18:     {
19:         $this->title = $title;
20:         $this->body = $body;
21:         $this->category = $category;
22:         $this->targetId = $targetId;
23:     }
24: 
25:     /**
26:      * Get the notification's delivery channels.
27:      *
28:      * @return array<int, string>
29:      */
30:     public function via(object $notifiable): array
31:     {
32:         return ['database'];
33:     }
34: 
35:     /**
36:      * Get the array representation of the notification.
37:      *
38:      * @return array<string, mixed>
39:      */
40:     public function toArray(object $notifiable): array
41:     {
42:         return [
43:             'title' => $this->title,
44:             'body' => $this->body,
45:             'category' => $this->category,
46:             'target_id' => $this->targetId,
47:         ];
48:     }
49: }
```

## File: app/Observers/AdsBannerObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\AdsBanner;
 7: use App\Models\CacheStaticDataVersion;
 8: use App\Utils\CacheUtils;
 9: 
10: class AdsBannerObserver
11: {
12:     /**
13:      * Handle the AdsBanner "created" event.
14:      */
15:     public function created(AdsBanner $adsBanner): void
16:     {
17:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
18:         CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
19:     }
20: 
21:     /**
22:      * Handle the AdsBanner "updated" event.
23:      */
24:     public function updated(AdsBanner $adsBanner): void
25:     {
26:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
27:         CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
28:     }
29: 
30:     /**
31:      * Handle the AdsBanner "deleted" event.
32:      */
33:     public function deleted(AdsBanner $adsBanner): void
34:     {
35:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::AdsBanner->value);
36:         CacheUtils::forget(CacheUtils::adsBannersCacheStaticDataAppKey());
37:     }
38: }
```

## File: app/Observers/BrandCarObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\BrandCar;
 7: use App\Models\CacheStaticDataVersion;
 8: use App\Utils\CacheUtils;
 9: 
10: class BrandCarObserver
11: {
12:     public function created(BrandCar $brandCar): void
13:     {
14:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
15:         CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
16:     }
17: 
18:     public function updated(BrandCar $brandCar): void
19:     {
20:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
21:         CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
22:     }
23: 
24:     public function deleted(BrandCar $brandCar): void
25:     {
26:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
27:         CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
28:     }
29: 
30:     public function restored(BrandCar $brandCar): void
31:     {
32:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
33:         CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
34:     }
35: 
36:     public function forceDeleted(BrandCar $brandCar): void
37:     {
38:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::BrandsCars->value);
39:         CacheUtils::forget(CacheUtils::brandsCarsCacheStaticDataAppKey());
40:     }
41: }
```

## File: app/Observers/CategoryHasBrandFieldObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\CacheStaticDataVersion;
 7: use App\Models\CategoryHasBrandField;
 8: use App\Utils\CacheUtils;
 9: 
10: class CategoryHasBrandFieldObserver
11: {
12:     public function created(CategoryHasBrandField $categoryHasBrandField): void
13:     {
14:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
15:         CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
16:     }
17: 
18:     public function updated(CategoryHasBrandField $categoryHasBrandField): void
19:     {
20:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
21:         CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
22:     }
23: 
24:     public function deleted(CategoryHasBrandField $categoryHasBrandField): void
25:     {
26:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
27:         CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
28:     }
29: 
30:     public function restored(CategoryHasBrandField $categoryHasBrandField): void
31:     {
32:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
33:         CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
34:     }
35: 
36:     public function forceDeleted(CategoryHasBrandField $categoryHasBrandField): void
37:     {
38:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CategoryHasBrandField->value);
39:         CacheUtils::forget(CacheUtils::categoryHasBrandFieldCacheStaticDataAppKey());
40:     }
41: }
```

## File: app/Observers/CategoryObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\CacheStaticDataVersion;
 7: use App\Models\Category;
 8: use App\Utils\CacheUtils;
 9: 
10: class CategoryObserver
11: {
12:     public function created(Category $category): void
13:     {
14:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
15:         CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
16:     }
17: 
18:     public function updated(Category $category): void
19:     {
20:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
21:         CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
22:     }
23: 
24:     public function deleted(Category $category): void
25:     {
26:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
27:         CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
28:     }
29: 
30:     public function restored(Category $category): void
31:     {
32:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
33:         CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
34:     }
35: 
36:     public function forceDeleted(Category $category): void
37:     {
38:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Categories->value);
39:         CacheUtils::forget(CacheUtils::categoriesCacheStaticDataAppKey());
40:     }
41: }
```

## File: app/Observers/CityObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\CacheStaticDataVersion;
 7: use App\Models\City;
 8: use App\Utils\CacheUtils;
 9: use Illuminate\Support\Facades\Log;
10: 
11: class CityObserver
12: {
13:     // Handle the City events.
14: 
15:     public function created(City $city): void
16:     {
17:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
18:         CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
19:     }
20: 
21:     public function updated(City $city): void
22:     {
23:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
24:         CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
25:     }
26: 
27:     public function deleted(City $city): void
28:     {
29:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
30:         CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
31:     }
32: 
33:     public function restored(City $city): void
34:     {
35:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
36:         CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
37:     }
38: 
39:     public function forceDeleted(City $city): void
40:     {
41:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::Cities->value);
42:         CacheUtils::forget(CacheUtils::citiesCacheStaticDataAppKey());
43:     }
44: }
```

## File: app/Observers/CustomFieldObserver.php
```php
 1: <?php
 2: 
 3: namespace App\Observers;
 4: 
 5: use App\Enums\EntityNameCacheStaticDataEnum;
 6: use App\Models\CacheStaticDataVersion;
 7: use App\Models\CustomField;
 8: use App\Utils\CacheUtils;
 9: 
10: class CustomFieldObserver
11: {
12:     public function created(CustomField $customField): void
13:     {
14:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
15:         CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
16:         CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
17:     }
18: 
19:     public function updated(CustomField $customField): void
20:     {
21:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
22:         CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
23:         CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
24:     }
25: 
26:     public function deleted(CustomField $customField): void
27:     {
28:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
29:         CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
30:         CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
31:     }
32: 
33:     public function restored(CustomField $customField): void
34:     {
35:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
36:         CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
37:         CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
38:     }
39: 
40:     public function forceDeleted(CustomField $customField): void
41:     {
42:         CacheStaticDataVersion::updateTimestamp(EntityNameCacheStaticDataEnum::CustomFields->value);
43:         CacheUtils::forget(CacheUtils::customFieldsCacheStaticDataAppKey());
44:         CacheUtils::forget(CacheUtils::customFieldsByCategoryIdCacheAppKey($customField->category_id ?? 0));
45:     }
46: }
```

## File: app/Rules/DecimalFormatRule.php
```php
 1: <?php
 2: 
 3: namespace App\Rules;
 4: 
 5: use Closure;
 6: use Illuminate\Contracts\Validation\ValidationRule;
 7: 
 8: class DecimalFormatRule implements ValidationRule
 9: {
10:     protected int $totalDigits;
11:     protected int $decimalPlaces;
12: 
13:     public function __construct(int $totalDigits = 10, int $decimalPlaces = 2)
14:     {
15:         $this->totalDigits = $totalDigits;
16:         $this->decimalPlaces = $decimalPlaces;
17:     }
18: 
19:     public function validate(string $attribute, mixed $value, Closure $fail): void
20:     {
21:         if (! is_numeric($value)) {
22:             $fail("حقل {$attribute} يجب أن يكون رقمياً.");
23:             return;
24:         }
25: 
26:         // تحويل القيمة لنص للتأكد من الطول
27:         $parts = explode('.', (string)$value);
28: 
29:         $integerPart = $parts[0] ?? '';
30:         $decimalPart = $parts[1] ?? '';
31: 
32:         // تحقق من طول الجزء الصحيح والعشري
33:         if (strlen($integerPart) > ($this->totalDigits - $this->decimalPlaces)) {
34:             $attributeTrans = __('validation.attributes.' . $attribute);
35:             $fail("حقل {$attributeTrans} يجب ألا يتجاوز " . ($this->totalDigits - $this->decimalPlaces) . " أرقام قبل الفاصلة.");
36:         }
37: 
38:         if (strlen($decimalPart) > $this->decimalPlaces) {
39:             $attributeTrans = __('validation.attributes.' . $attribute);
40:             $fail("حقل {$attributeTrans} يجب ألا يتجاوز {$this->decimalPlaces} أرقام بعد الفاصلة.");
41:         }
42:     }
43: }
```

## File: app/Rules/SaudiPhoneNumberRule.php
```php
 1: <?php
 2: 
 3: namespace App\Rules;
 4: 
 5: use Closure;
 6: use Illuminate\Contracts\Validation\ValidationRule;
 7: 
 8: class SaudiPhoneNumberRule implements ValidationRule
 9: {
10:     public function validate(string $attribute, mixed $value, Closure $fail): void
11:     {
12:         if (! preg_match('/^(?:05\d{8}|\+9665\d{8})$/', $value)) {
13:             $fail('رقم الهاتف يجب أن يكون رقم صحيح يبدأ بـ 05 أو +9665.');
14:         }
15:     }
16: }
```

## File: app/Traits/HandlesDatatablesTrait.php
```php
 1: <?php
 2: 
 3: namespace App\Traits;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: use Illuminate\Http\Request;
 7: 
 8: trait HandlesDatatablesTrait
 9: {
10:     /**
11:      * For Fetch records or data with paginate For Datatables
12:      */
13:     public function paginateRecordsForDatatables(Request $request, $query)
14:     {
15:         $this->applyOrderBy($request, $query);
16: 
17:         return $this->applyPaginate($request, $query);
18:     }
19: 
20:     private function applyOrderBy(Request $request, $query)
21:     {
22:         $orderColumnIndex = $request->input('order.0.column', 0);
23:         $getColumn = $request->input("columns.{$orderColumnIndex}");
24:         $orderColumnName = !empty($getColumn['data']) ? $getColumn['data'] : $getColumn['name'];
25:         $orderDirection = $request->input('order.0.dir', 'asc');
26: 
27:         $query->orderBy($orderColumnName, $orderDirection);
28:     }
29: 
30:     private function applyPaginate(Request $request, $query)
31:     {
32:         // $rowperpage = $request->input("length"); // Rows display per page
33:         return $query->skip($request->input('start'))
34:             ->take($request->input('length'))
35:             ->get();
36:     }
37: 
38:     /**
39:      * For get total records Count For Datatables
40:      *
41:      * Ex: getTotalRecordsCount(User::class)
42:      */
43:     public function getTotalRecordsCount(string $modelClass)
44:     {
45:         return $modelClass::select('count(*) as allcount')->count();
46:     }
47: 
48:     public function formatResponseDataTables($draw, $recordsCount, $recordsCountwithFilter, $records)
49:     {
50:         return response()->json([
51:             "draw" => intval($draw),
52:             "iTotalRecords" => $recordsCount,
53:             "iTotalDisplayRecords" => $recordsCountwithFilter,
54:             "aaData" =>  $records
55:         ]);
56:     }
57: }
```

## File: app/Utils/CacheUtils.php
```php
  1: <?php
  2: 
  3: namespace App\Utils;
  4: 
  5: use App\Enums\EntityNameCacheStaticDataEnum;
  6: use Illuminate\Support\Facades\Cache;
  7: use Closure;
  8: 
  9: enum CachePrefix: string
 10: {
 11:     case CacheStaticData = 'app-cache_static_data-';
 12:     case appCache = 'app-cache-';
 13: }
 14: 
 15: 
 16: class CacheUtils
 17: {
 18:     public static function cacheStaticDataVersionAppKey(string $entityName): string
 19:     {
 20:         return CachePrefix::CacheStaticData->value . "version-{$entityName}";
 21:     }
 22: 
 23:     public static function citiesCacheStaticDataAppKey(): string
 24:     {
 25:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::Cities->value;
 26:     }
 27: 
 28:     public static function brandsCarsCacheStaticDataAppKey(): string
 29:     {
 30:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::BrandsCars->value;
 31:     }
 32: 
 33:     public static function categoriesCacheStaticDataAppKey(): string
 34:     {
 35:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::Categories->value;
 36:     }
 37: 
 38:     public static function categoryHasBrandFieldCacheStaticDataAppKey(): string
 39:     {
 40:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::CategoryHasBrandField->value;
 41:     }
 42: 
 43:     public static function customFieldsCacheStaticDataAppKey(): string
 44:     {
 45:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::CustomFields->value;
 46:     }
 47: 
 48:     public static function customFieldsByCategoryIdCacheAppKey(int $categoryId): string
 49:     {
 50:         return CachePrefix::appCache->value . "custom_fields_by_category_id-{$categoryId}";
 51:     }
 52: 
 53:     public static function adsBannersCacheStaticDataAppKey(): string
 54:     {
 55:         return CachePrefix::CacheStaticData->value . EntityNameCacheStaticDataEnum::AdsBanner->value;
 56:     }
 57: 
 58:     // -------------------- cache operations -------------------------
 59: 
 60:     /**
 61:      * Removes one or more items from the cache.
 62:      *
 63:      * @param string ...$keys The cache keys to be removed.
 64:      * @return void
 65:      */
 66:     public static function forget(string $keys): void
 67:     {
 68:         Cache::forget($keys);
 69:     }
 70: 
 71:     /**
 72:      * Retrieves a value from the cache, or stores it if it does not exist.
 73:      *
 74:      * @param string $key The cache key.
 75:      * @param \Closure $callback The function to execute to retrieve the data if not present in the cache.
 76:      * @param \DateTimeInterface|\DateInterval|float|int|null $ttl The cache duration (in seconds).
 77:      *
 78:      * @return mixed The cached value or the value retrieved.
 79:      */
 80:     public static function remember(string $key, Closure $callback, \DateTimeInterface|\DateInterval|float|int|null $ttl): mixed
 81:     {
 82:         return Cache::remember($key, $ttl, $callback);
 83:     }
 84: 
 85:     /**
 86:      * Retrieves a value from the cache, or stores it forever if it does not exist.
 87:      *
 88:      * @param string $key The cache key.
 89:      * @param \Closure $callback The function to execute to retrieve the data if not present in the cache.
 90:      * @return mixed The cached value or the value retrieved.
 91:      */
 92:     public static function rememberForever(string $key, Closure $callback): mixed
 93:     {
 94:         return Cache::rememberForever($key, $callback);
 95:     }
 96: 
 97:     // جلب تفاصيل دورة معينة، وتخزينها إلى الأبد
 98:     // $course = CacheUtils::rememberForever(CacheUtils::courseDetailsKey(456), function () {
 99:     //    return \App\Models\Course::find(456);
100:     // });
101: 
102:     /**
103:      * Clears all cache items.
104:      *
105:      * @return void
106:      */
107:     public static function flushAll(): void
108:     {
109:         Cache::flush();
110:     }
111: 
112:     // public static function clearAllDefinedCache(): void
113:     // {
114:     //     $allKeys = array_map(fn(CacheKey $key) => $key->value, CacheKey::cases());
115:     //     Cache::forget($allKeys);
116:     // }
117: }
```

## File: app/Utils/ConfigUtils.php
```php
 1: <?php
 2: 
 3: namespace App\Utils;
 4: 
 5: class ConfigUtils
 6: {
 7:     public static function getExpireAtOtpUser()
 8:     {
 9:         return now()->addMinutes(5);
10:     }
11: 
12:     public static function generateOtpRandomInt(): int
13:     {
14:         // return random_int(10000, 99999);
15:         return 11111;
16:     }
17: 
18:     public static function getAmountRateAppForCharge()
19:     {
20:         return 10;
21:     }
22: }
```

## File: app/View/Components/AppLayout.php
```php
 1: <?php
 2: 
 3: namespace App\View\Components;
 4: 
 5: use Illuminate\View\Component;
 6: use Illuminate\View\View;
 7: 
 8: class AppLayout extends Component
 9: {
10:     /**
11:      * Get the view / contents that represents the component.
12:      */
13:     public function render(): View
14:     {
15:         return view('layouts.app');
16:     }
17: }
```

## File: app/View/Components/GuestLayout.php
```php
 1: <?php
 2: 
 3: namespace App\View\Components;
 4: 
 5: use Illuminate\View\Component;
 6: use Illuminate\View\View;
 7: 
 8: class GuestLayout extends Component
 9: {
10:     /**
11:      * Get the view / contents that represents the component.
12:      */
13:     public function render(): View
14:     {
15:         return view('layouts.guest');
16:     }
17: }
```

## File: artisan
```
 1: #!/usr/bin/env php
 2: <?php
 3: 
 4: use Illuminate\Foundation\Application;
 5: use Symfony\Component\Console\Input\ArgvInput;
 6: 
 7: define('LARAVEL_START', microtime(true));
 8: 
 9: // Register the Composer autoloader...
10: require __DIR__.'/vendor/autoload.php';
11: 
12: // Bootstrap Laravel and handle the command...
13: /** @var Application $app */
14: $app = require_once __DIR__.'/bootstrap/app.php';
15: 
16: $status = $app->handleCommand(new ArgvInput);
17: 
18: exit($status);
```

## File: bootstrap/app.php
```php
 1: <?php
 2: 
 3: use Illuminate\Foundation\Application;
 4: use Illuminate\Foundation\Configuration\Exceptions;
 5: use Illuminate\Foundation\Configuration\Middleware;
 6: 
 7: return Application::configure(basePath: dirname(__DIR__))
 8:     ->withRouting(
 9:         web: __DIR__ . '/../routes/web.php',
10:         api: __DIR__ . '/../routes/api.php',
11:         commands: __DIR__ . '/../routes/console.php',
12:         health: '/up',
13:     )
14:     ->withMiddleware(function (Middleware $middleware): void {
15:         $middleware->append(\App\Http\Middleware\LocalizationMiddleware::class);
16:         $middleware->alias([
17:             'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
18:             'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
19:             'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
20:         ]);
21:     })
22:     ->withExceptions(function (Exceptions $exceptions): void {
23:         //
24:     })->create();
```

## File: bootstrap/providers.php
```php
1: <?php
2: 
3: return [
4:     App\Providers\AppServiceProvider::class,
5: ];
```

## File: config/app.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     /*
  6:     |--------------------------------------------------------------------------
  7:     | Application Name
  8:     |--------------------------------------------------------------------------
  9:     |
 10:     | This value is the name of your application, which will be used when the
 11:     | framework needs to place the application's name in a notification or
 12:     | other UI elements where an application name needs to be displayed.
 13:     |
 14:     */
 15: 
 16:     'name' => env('APP_NAME', 'Laravel'),
 17: 
 18:     /*
 19:     |--------------------------------------------------------------------------
 20:     | Application Environment
 21:     |--------------------------------------------------------------------------
 22:     |
 23:     | This value determines the "environment" your application is currently
 24:     | running in. This may determine how you prefer to configure various
 25:     | services the application utilizes. Set this in your ".env" file.
 26:     |
 27:     */
 28: 
 29:     'env' => env('APP_ENV', 'production'),
 30: 
 31:     /*
 32:     |--------------------------------------------------------------------------
 33:     | Application Debug Mode
 34:     |--------------------------------------------------------------------------
 35:     |
 36:     | When your application is in debug mode, detailed error messages with
 37:     | stack traces will be shown on every error that occurs within your
 38:     | application. If disabled, a simple generic error page is shown.
 39:     |
 40:     */
 41: 
 42:     'debug' => (bool) env('APP_DEBUG', false),
 43: 
 44:     /*
 45:     |--------------------------------------------------------------------------
 46:     | Application URL
 47:     |--------------------------------------------------------------------------
 48:     |
 49:     | This URL is used by the console to properly generate URLs when using
 50:     | the Artisan command line tool. You should set this to the root of
 51:     | the application so that it's available within Artisan commands.
 52:     |
 53:     */
 54: 
 55:     'url' => filter_var(env('APP_URL'), FILTER_VALIDATE_URL) ? env('APP_URL') : 'http://localhost',
 56: 
 57:     /*
 58:     |--------------------------------------------------------------------------
 59:     | Application Timezone
 60:     |--------------------------------------------------------------------------
 61:     |
 62:     | Here you may specify the default timezone for your application, which
 63:     | will be used by the PHP date and date-time functions. The timezone
 64:     | is set to "UTC" by default as it is suitable for most use cases.
 65:     |
 66:     */
 67: 
 68:     'timezone' => env('APP_TIMEZONE', 'Asia/Riyadh'),
 69:     'user_timezone' => env('APP_USER_TIMEZONE', 'Asia/Riyadh'),
 70: 
 71:     /*
 72:     |--------------------------------------------------------------------------
 73:     | Application Locale Configuration
 74:     |--------------------------------------------------------------------------
 75:     |
 76:     | The application locale determines the default locale that will be used
 77:     | by Laravel's translation / localization methods. This option can be
 78:     | set to any locale for which you plan to have translation strings.
 79:     |
 80:     */
 81: 
 82:     'locale' => env('APP_LOCALE', 'ar'),
 83: 
 84:     'fallback_locale' => env('APP_FALLBACK_LOCALE', 'en'),
 85: 
 86:     'faker_locale' => env('APP_FAKER_LOCALE', 'en_US'),
 87: 
 88:     'supported_locales' => ['ar', 'en'],
 89: 
 90:     /*
 91:     |--------------------------------------------------------------------------
 92:     | Encryption Key
 93:     |--------------------------------------------------------------------------
 94:     |
 95:     | This key is utilized by Laravel's encryption services and should be set
 96:     | to a random, 32 character string to ensure that all encrypted values
 97:     | are secure. You should do this prior to deploying the application.
 98:     |
 99:     */
100: 
101:     'cipher' => 'AES-256-CBC',
102: 
103:     'key' => env('APP_KEY'),
104: 
105:     'previous_keys' => [
106:         ...array_filter(
107:             explode(',', (string) env('APP_PREVIOUS_KEYS', ''))
108:         ),
109:     ],
110: 
111:     /*
112:     |--------------------------------------------------------------------------
113:     | Maintenance Mode Driver
114:     |--------------------------------------------------------------------------
115:     |
116:     | These configuration options determine the driver used to determine and
117:     | manage Laravel's "maintenance mode" status. The "cache" driver will
118:     | allow maintenance mode to be controlled across multiple machines.
119:     |
120:     | Supported drivers: "file", "cache"
121:     |
122:     */
123: 
124:     'maintenance' => [
125:         'driver' => env('APP_MAINTENANCE_DRIVER', 'file'),
126:         'store' => env('APP_MAINTENANCE_STORE', 'database'),
127:     ],
128: 
129: ];
```

## File: config/auth.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     /*
  6:     |--------------------------------------------------------------------------
  7:     | Authentication Defaults
  8:     |--------------------------------------------------------------------------
  9:     |
 10:     | This option defines the default authentication "guard" and password
 11:     | reset "broker" for your application. You may change these values
 12:     | as required, but they're a perfect start for most applications.
 13:     |
 14:     */
 15: 
 16:     'defaults' => [
 17:         'guard' => env('AUTH_GUARD', 'web'),
 18:         'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
 19:     ],
 20: 
 21:     /*
 22:     |--------------------------------------------------------------------------
 23:     | Authentication Guards
 24:     |--------------------------------------------------------------------------
 25:     |
 26:     | Next, you may define every authentication guard for your application.
 27:     | Of course, a great default configuration has been defined for you
 28:     | which utilizes session storage plus the Eloquent user provider.
 29:     |
 30:     | All authentication guards have a user provider, which defines how the
 31:     | users are actually retrieved out of your database or other storage
 32:     | system used by the application. Typically, Eloquent is utilized.
 33:     |
 34:     | Supported: "session"
 35:     |
 36:     */
 37: 
 38:     'guards' => [
 39:         'web' => [
 40:             'driver' => 'session',
 41:             'provider' => 'users',
 42:         ],
 43: 
 44:         'admin' => [
 45:             'driver' => 'session',
 46:             'provider' => 'admins',
 47:         ],
 48:     ],
 49: 
 50:     /*
 51:     |--------------------------------------------------------------------------
 52:     | User Providers
 53:     |--------------------------------------------------------------------------
 54:     |
 55:     | All authentication guards have a user provider, which defines how the
 56:     | users are actually retrieved out of your database or other storage
 57:     | system used by the application. Typically, Eloquent is utilized.
 58:     |
 59:     | If you have multiple user tables or models you may configure multiple
 60:     | providers to represent the model / table. These providers may then
 61:     | be assigned to any extra authentication guards you have defined.
 62:     |
 63:     | Supported: "database", "eloquent"
 64:     |
 65:     */
 66: 
 67:     'providers' => [
 68:         'users' => [
 69:             'driver' => 'eloquent',
 70:             'model' => env('AUTH_MODEL', App\Models\User::class),
 71:         ],
 72: 
 73:         'admins' => [
 74:             'driver' => 'eloquent',
 75:             'model' => App\Models\Admin::class,
 76:         ],
 77: 
 78:         // 'users' => [
 79:         //     'driver' => 'database',
 80:         //     'table' => 'users',
 81:         // ],
 82:     ],
 83: 
 84:     /*
 85:     |--------------------------------------------------------------------------
 86:     | Resetting Passwords
 87:     |--------------------------------------------------------------------------
 88:     |
 89:     | These configuration options specify the behavior of Laravel's password
 90:     | reset functionality, including the table utilized for token storage
 91:     | and the user provider that is invoked to actually retrieve users.
 92:     |
 93:     | The expiry time is the number of minutes that each reset token will be
 94:     | considered valid. This security feature keeps tokens short-lived so
 95:     | they have less time to be guessed. You may change this as needed.
 96:     |
 97:     | The throttle setting is the number of seconds a user must wait before
 98:     | generating more password reset tokens. This prevents the user from
 99:     | quickly generating a very large amount of password reset tokens.
100:     |
101:     */
102: 
103:     'passwords' => [
104:         'users' => [
105:             'provider' => 'users',
106:             'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
107:             'expire' => 60,
108:             'throttle' => 60,
109:         ],
110:     ],
111: 
112:     /*
113:     |--------------------------------------------------------------------------
114:     | Password Confirmation Timeout
115:     |--------------------------------------------------------------------------
116:     |
117:     | Here you may define the number of seconds before a password confirmation
118:     | window expires and users are asked to re-enter their password via the
119:     | confirmation screen. By default, the timeout lasts for three hours.
120:     |
121:     */
122: 
123:     'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),
124: 
125: ];
```

## File: config/broadcasting.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Default Broadcaster
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | This option controls the default broadcaster that will be used by the
11:     | framework when an event needs to be broadcast. You may set this to
12:     | any of the connections defined in the "connections" array below.
13:     |
14:     | Supported: "reverb", "pusher", "ably", "redis", "log", "null"
15:     |
16:     */
17: 
18:     'default' => env('BROADCAST_CONNECTION', 'reverb'),
19: 
20:     /*
21:     |--------------------------------------------------------------------------
22:     | Broadcast Connections
23:     |--------------------------------------------------------------------------
24:     |
25:     | Here you may define all of the broadcast connections that will be used
26:     | to broadcast events to other systems or over WebSockets. Samples of
27:     | each available type of connection are provided inside this array.
28:     |
29:     */
30: 
31:     'connections' => [
32: 
33:         'reverb' => [
34:             'driver' => 'reverb',
35:             'key' => env('REVERB_APP_KEY'),
36:             'secret' => env('REVERB_APP_SECRET'),
37:             'app_id' => env('REVERB_APP_ID'),
38:             'options' => [
39:                 'host' => env('REVERB_HOST'),
40:                 'port' => env('REVERB_PORT', 443),
41:                 'scheme' => env('REVERB_SCHEME', 'https'),
42:                 'useTLS' => env('REVERB_SCHEME', 'https') === 'https',
43:             ],
44:             'client_options' => [
45:                 // Guzzle client options: https://docs.guzzlephp.org/en/stable/request-options.html
46:             ],
47:         ],
48: 
49:         'pusher' => [
50:             'driver' => 'pusher',
51:             'key' => env('PUSHER_APP_KEY'),
52:             'secret' => env('PUSHER_APP_SECRET'),
53:             'app_id' => env('PUSHER_APP_ID'),
54:             'options' => [
55:                 'cluster' => env('PUSHER_APP_CLUSTER'),
56:                 'host' => env('PUSHER_HOST') ?: 'api-' . env('PUSHER_APP_CLUSTER', 'mt1') . '.pusher.com',
57:                 'port' => env('PUSHER_PORT', 443),
58:                 'scheme' => env('PUSHER_SCHEME', 'https'),
59:                 'encrypted' => true,
60:                 'useTLS' => env('PUSHER_SCHEME', 'https') === 'https',
61:             ],
62:             'client_options' => [
63:                 // Guzzle client options: https://docs.guzzlephp.org/en/stable/request-options.html
64:             ],
65:         ],
66: 
67:         'ably' => [
68:             'driver' => 'ably',
69:             'key' => env('ABLY_KEY'),
70:         ],
71: 
72:         'log' => [
73:             'driver' => 'log',
74:         ],
75: 
76:         'null' => [
77:             'driver' => 'null',
78:         ],
79: 
80:     ],
81: 
82: ];
```

## File: config/cache.php
```php
  1: <?php
  2: 
  3: use Illuminate\Support\Str;
  4: 
  5: return [
  6: 
  7:     /*
  8:     |--------------------------------------------------------------------------
  9:     | Default Cache Store
 10:     |--------------------------------------------------------------------------
 11:     |
 12:     | This option controls the default cache store that will be used by the
 13:     | framework. This connection is utilized if another isn't explicitly
 14:     | specified when running a cache operation inside the application.
 15:     |
 16:     */
 17: 
 18:     'default' => env('CACHE_STORE', 'database'),
 19: 
 20:     /*
 21:     |--------------------------------------------------------------------------
 22:     | Cache Stores
 23:     |--------------------------------------------------------------------------
 24:     |
 25:     | Here you may define all of the cache "stores" for your application as
 26:     | well as their drivers. You may even define multiple stores for the
 27:     | same cache driver to group types of items stored in your caches.
 28:     |
 29:     | Supported drivers: "array", "database", "file", "memcached",
 30:     |                    "redis", "dynamodb", "octane", "null"
 31:     |
 32:     */
 33: 
 34:     'stores' => [
 35: 
 36:         'array' => [
 37:             'driver' => 'array',
 38:             'serialize' => false,
 39:         ],
 40: 
 41:         'database' => [
 42:             'driver' => 'database',
 43:             'connection' => env('DB_CACHE_CONNECTION'),
 44:             'table' => env('DB_CACHE_TABLE', 'cache'),
 45:             'lock_connection' => env('DB_CACHE_LOCK_CONNECTION'),
 46:             'lock_table' => env('DB_CACHE_LOCK_TABLE'),
 47:         ],
 48: 
 49:         'file' => [
 50:             'driver' => 'file',
 51:             'path' => storage_path('framework/cache/data'),
 52:             'lock_path' => storage_path('framework/cache/data'),
 53:         ],
 54: 
 55:         'memcached' => [
 56:             'driver' => 'memcached',
 57:             'persistent_id' => env('MEMCACHED_PERSISTENT_ID'),
 58:             'sasl' => [
 59:                 env('MEMCACHED_USERNAME'),
 60:                 env('MEMCACHED_PASSWORD'),
 61:             ],
 62:             'options' => [
 63:                 // Memcached::OPT_CONNECT_TIMEOUT => 2000,
 64:             ],
 65:             'servers' => [
 66:                 [
 67:                     'host' => env('MEMCACHED_HOST', '127.0.0.1'),
 68:                     'port' => env('MEMCACHED_PORT', 11211),
 69:                     'weight' => 100,
 70:                 ],
 71:             ],
 72:         ],
 73: 
 74:         'redis' => [
 75:             'driver' => 'redis',
 76:             'connection' => env('REDIS_CACHE_CONNECTION', 'cache'),
 77:             'lock_connection' => env('REDIS_CACHE_LOCK_CONNECTION', 'default'),
 78:         ],
 79: 
 80:         'dynamodb' => [
 81:             'driver' => 'dynamodb',
 82:             'key' => env('AWS_ACCESS_KEY_ID'),
 83:             'secret' => env('AWS_SECRET_ACCESS_KEY'),
 84:             'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
 85:             'table' => env('DYNAMODB_CACHE_TABLE', 'cache'),
 86:             'endpoint' => env('DYNAMODB_ENDPOINT'),
 87:         ],
 88: 
 89:         'octane' => [
 90:             'driver' => 'octane',
 91:         ],
 92: 
 93:     ],
 94: 
 95:     /*
 96:     |--------------------------------------------------------------------------
 97:     | Cache Key Prefix
 98:     |--------------------------------------------------------------------------
 99:     |
100:     | When utilizing the APC, database, memcached, Redis, and DynamoDB cache
101:     | stores, there might be other applications using the same cache. For
102:     | that reason, you may prefix every cache key to avoid collisions.
103:     |
104:     */
105: 
106:     'prefix' => env('CACHE_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-cache-'),
107: 
108: ];
```

## File: config/database.php
```php
  1: <?php
  2: 
  3: use Illuminate\Support\Str;
  4: 
  5: return [
  6: 
  7:     /*
  8:     |--------------------------------------------------------------------------
  9:     | Default Database Connection Name
 10:     |--------------------------------------------------------------------------
 11:     |
 12:     | Here you may specify which of the database connections below you wish
 13:     | to use as your default connection for database operations. This is
 14:     | the connection which will be utilized unless another connection
 15:     | is explicitly specified when you execute a query / statement.
 16:     |
 17:     */
 18: 
 19:     'default' => env('DB_CONNECTION', 'sqlite'),
 20: 
 21:     /*
 22:     |--------------------------------------------------------------------------
 23:     | Database Connections
 24:     |--------------------------------------------------------------------------
 25:     |
 26:     | Below are all of the database connections defined for your application.
 27:     | An example configuration is provided for each database system which
 28:     | is supported by Laravel. You're free to add / remove connections.
 29:     |
 30:     */
 31: 
 32:     'connections' => [
 33: 
 34:         'sqlite' => [
 35:             'driver' => 'sqlite',
 36:             'url' => env('DB_URL'),
 37:             'database' => env('DB_DATABASE', database_path('database.sqlite')),
 38:             'prefix' => '',
 39:             'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
 40:             'busy_timeout' => null,
 41:             'journal_mode' => null,
 42:             'synchronous' => null,
 43:         ],
 44: 
 45:         'mysql' => [
 46:             'driver' => 'mysql',
 47:             'url' => env('DB_URL'),
 48:             'host' => env('DB_HOST', '127.0.0.1'),
 49:             'port' => env('DB_PORT', '3306'),
 50:             'database' => env('DB_DATABASE', 'laravel'),
 51:             'username' => env('DB_USERNAME', 'root'),
 52:             'password' => env('DB_PASSWORD', ''),
 53:             'unix_socket' => env('DB_SOCKET', ''),
 54:             'charset' => env('DB_CHARSET', 'utf8mb4'),
 55:             'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
 56:             'prefix' => '',
 57:             'prefix_indexes' => true,
 58:             'strict' => true,
 59:             'engine' => null,
 60:             'options' => extension_loaded('pdo_mysql') ? array_filter([
 61:                 PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
 62:             ]) : [],
 63:         ],
 64: 
 65:         'mariadb' => [
 66:             'driver' => 'mariadb',
 67:             'url' => env('DB_URL'),
 68:             'host' => env('DB_HOST', '127.0.0.1'),
 69:             'port' => env('DB_PORT', '3306'),
 70:             'database' => env('DB_DATABASE', 'laravel'),
 71:             'username' => env('DB_USERNAME', 'root'),
 72:             'password' => env('DB_PASSWORD', ''),
 73:             'unix_socket' => env('DB_SOCKET', ''),
 74:             'charset' => env('DB_CHARSET', 'utf8mb4'),
 75:             'collation' => env('DB_COLLATION', 'utf8mb4_unicode_ci'),
 76:             'prefix' => '',
 77:             'prefix_indexes' => true,
 78:             'strict' => true,
 79:             'engine' => null,
 80:             'options' => extension_loaded('pdo_mysql') ? array_filter([
 81:                 PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
 82:             ]) : [],
 83:         ],
 84: 
 85:         'pgsql' => [
 86:             'driver' => 'pgsql',
 87:             'url' => env('DB_URL'),
 88:             'host' => env('DB_HOST', '127.0.0.1'),
 89:             'port' => env('DB_PORT', '5432'),
 90:             'database' => env('DB_DATABASE', 'laravel'),
 91:             'username' => env('DB_USERNAME', 'root'),
 92:             'password' => env('DB_PASSWORD', ''),
 93:             'charset' => env('DB_CHARSET', 'utf8'),
 94:             'prefix' => '',
 95:             'prefix_indexes' => true,
 96:             'search_path' => 'public',
 97:             'sslmode' => 'prefer',
 98:         ],
 99: 
100:         'sqlsrv' => [
101:             'driver' => 'sqlsrv',
102:             'url' => env('DB_URL'),
103:             'host' => env('DB_HOST', 'localhost'),
104:             'port' => env('DB_PORT', '1433'),
105:             'database' => env('DB_DATABASE', 'laravel'),
106:             'username' => env('DB_USERNAME', 'root'),
107:             'password' => env('DB_PASSWORD', ''),
108:             'charset' => env('DB_CHARSET', 'utf8'),
109:             'prefix' => '',
110:             'prefix_indexes' => true,
111:             // 'encrypt' => env('DB_ENCRYPT', 'yes'),
112:             // 'trust_server_certificate' => env('DB_TRUST_SERVER_CERTIFICATE', 'false'),
113:         ],
114: 
115:     ],
116: 
117:     /*
118:     |--------------------------------------------------------------------------
119:     | Migration Repository Table
120:     |--------------------------------------------------------------------------
121:     |
122:     | This table keeps track of all the migrations that have already run for
123:     | your application. Using this information, we can determine which of
124:     | the migrations on disk haven't actually been run on the database.
125:     |
126:     */
127: 
128:     'migrations' => [
129:         'table' => 'migrations',
130:         'update_date_on_publish' => true,
131:     ],
132: 
133:     /*
134:     |--------------------------------------------------------------------------
135:     | Redis Databases
136:     |--------------------------------------------------------------------------
137:     |
138:     | Redis is an open source, fast, and advanced key-value store that also
139:     | provides a richer body of commands than a typical key-value system
140:     | such as Memcached. You may define your connection settings here.
141:     |
142:     */
143: 
144:     'redis' => [
145: 
146:         'client' => env('REDIS_CLIENT', 'phpredis'),
147: 
148:         'options' => [
149:             'cluster' => env('REDIS_CLUSTER', 'redis'),
150:             'prefix' => env('REDIS_PREFIX', Str::slug((string) env('APP_NAME', 'laravel')).'-database-'),
151:             'persistent' => env('REDIS_PERSISTENT', false),
152:         ],
153: 
154:         'default' => [
155:             'url' => env('REDIS_URL'),
156:             'host' => env('REDIS_HOST', '127.0.0.1'),
157:             'username' => env('REDIS_USERNAME'),
158:             'password' => env('REDIS_PASSWORD'),
159:             'port' => env('REDIS_PORT', '6379'),
160:             'database' => env('REDIS_DB', '0'),
161:         ],
162: 
163:         'cache' => [
164:             'url' => env('REDIS_URL'),
165:             'host' => env('REDIS_HOST', '127.0.0.1'),
166:             'username' => env('REDIS_USERNAME'),
167:             'password' => env('REDIS_PASSWORD'),
168:             'port' => env('REDIS_PORT', '6379'),
169:             'database' => env('REDIS_CACHE_DB', '1'),
170:         ],
171: 
172:     ],
173: 
174: ];
```

## File: config/filesystems.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Default Filesystem Disk
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | Here you may specify the default filesystem disk that should be used
11:     | by the framework. The "local" disk, as well as a variety of cloud
12:     | based disks are available to your application for file storage.
13:     |
14:     */
15: 
16:     'default' => env('FILESYSTEM_DISK', 'local'),
17: 
18:     /*
19:     |--------------------------------------------------------------------------
20:     | Filesystem Disks
21:     |--------------------------------------------------------------------------
22:     |
23:     | Below you may configure as many filesystem disks as necessary, and you
24:     | may even configure multiple disks for the same driver. Examples for
25:     | most supported storage drivers are configured here for reference.
26:     |
27:     | Supported drivers: "local", "ftp", "sftp", "s3"
28:     |
29:     */
30: 
31:     'disks' => [
32: 
33:         'local' => [
34:             'driver' => 'local',
35:             'root' => storage_path('app/private'),
36:             'serve' => true,
37:             'throw' => false,
38:             'report' => false,
39:         ],
40: 
41:         'public' => [
42:             'driver' => 'local',
43:             'root' => storage_path('app/public'),
44:             'url' => env('APP_URL').'/storage',
45:             'visibility' => 'public',
46:             'throw' => false,
47:             'report' => false,
48:         ],
49: 
50:         's3' => [
51:             'driver' => 's3',
52:             'key' => env('AWS_ACCESS_KEY_ID'),
53:             'secret' => env('AWS_SECRET_ACCESS_KEY'),
54:             'region' => env('AWS_DEFAULT_REGION'),
55:             'bucket' => env('AWS_BUCKET'),
56:             'url' => env('AWS_URL'),
57:             'endpoint' => env('AWS_ENDPOINT'),
58:             'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
59:             'throw' => false,
60:             'report' => false,
61:         ],
62: 
63:     ],
64: 
65:     /*
66:     |--------------------------------------------------------------------------
67:     | Symbolic Links
68:     |--------------------------------------------------------------------------
69:     |
70:     | Here you may configure the symbolic links that will be created when the
71:     | `storage:link` Artisan command is executed. The array keys should be
72:     | the locations of the links and the values should be their targets.
73:     |
74:     */
75: 
76:     'links' => [
77:         public_path('storage') => storage_path('app/public'),
78:     ],
79: 
80: ];
```

## File: config/logging.php
```php
  1: <?php
  2: 
  3: use Monolog\Handler\NullHandler;
  4: use Monolog\Handler\StreamHandler;
  5: use Monolog\Handler\SyslogUdpHandler;
  6: use Monolog\Processor\PsrLogMessageProcessor;
  7: 
  8: return [
  9: 
 10:     /*
 11:     |--------------------------------------------------------------------------
 12:     | Default Log Channel
 13:     |--------------------------------------------------------------------------
 14:     |
 15:     | This option defines the default log channel that is utilized to write
 16:     | messages to your logs. The value provided here should match one of
 17:     | the channels present in the list of "channels" configured below.
 18:     |
 19:     */
 20: 
 21:     'default' => env('LOG_CHANNEL', 'stack'),
 22: 
 23:     /*
 24:     |--------------------------------------------------------------------------
 25:     | Deprecations Log Channel
 26:     |--------------------------------------------------------------------------
 27:     |
 28:     | This option controls the log channel that should be used to log warnings
 29:     | regarding deprecated PHP and library features. This allows you to get
 30:     | your application ready for upcoming major versions of dependencies.
 31:     |
 32:     */
 33: 
 34:     'deprecations' => [
 35:         'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
 36:         'trace' => env('LOG_DEPRECATIONS_TRACE', false),
 37:     ],
 38: 
 39:     /*
 40:     |--------------------------------------------------------------------------
 41:     | Log Channels
 42:     |--------------------------------------------------------------------------
 43:     |
 44:     | Here you may configure the log channels for your application. Laravel
 45:     | utilizes the Monolog PHP logging library, which includes a variety
 46:     | of powerful log handlers and formatters that you're free to use.
 47:     |
 48:     | Available drivers: "single", "daily", "slack", "syslog",
 49:     |                    "errorlog", "monolog", "custom", "stack"
 50:     |
 51:     */
 52: 
 53:     'channels' => [
 54: 
 55:         'stack' => [
 56:             'driver' => 'stack',
 57:             'channels' => explode(',', (string) env('LOG_STACK', 'single')),
 58:             'ignore_exceptions' => false,
 59:         ],
 60: 
 61:         'single' => [
 62:             'driver' => 'single',
 63:             'path' => storage_path('logs/laravel.log'),
 64:             'level' => env('LOG_LEVEL', 'debug'),
 65:             'replace_placeholders' => true,
 66:         ],
 67: 
 68:         'daily' => [
 69:             'driver' => 'daily',
 70:             'path' => storage_path('logs/laravel.log'),
 71:             'level' => env('LOG_LEVEL', 'debug'),
 72:             'days' => env('LOG_DAILY_DAYS', 14),
 73:             'replace_placeholders' => true,
 74:         ],
 75: 
 76:         'slack' => [
 77:             'driver' => 'slack',
 78:             'url' => env('LOG_SLACK_WEBHOOK_URL'),
 79:             'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
 80:             'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
 81:             'level' => env('LOG_LEVEL', 'critical'),
 82:             'replace_placeholders' => true,
 83:         ],
 84: 
 85:         'papertrail' => [
 86:             'driver' => 'monolog',
 87:             'level' => env('LOG_LEVEL', 'debug'),
 88:             'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
 89:             'handler_with' => [
 90:                 'host' => env('PAPERTRAIL_URL'),
 91:                 'port' => env('PAPERTRAIL_PORT'),
 92:                 'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
 93:             ],
 94:             'processors' => [PsrLogMessageProcessor::class],
 95:         ],
 96: 
 97:         'stderr' => [
 98:             'driver' => 'monolog',
 99:             'level' => env('LOG_LEVEL', 'debug'),
100:             'handler' => StreamHandler::class,
101:             'handler_with' => [
102:                 'stream' => 'php://stderr',
103:             ],
104:             'formatter' => env('LOG_STDERR_FORMATTER'),
105:             'processors' => [PsrLogMessageProcessor::class],
106:         ],
107: 
108:         'syslog' => [
109:             'driver' => 'syslog',
110:             'level' => env('LOG_LEVEL', 'debug'),
111:             'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
112:             'replace_placeholders' => true,
113:         ],
114: 
115:         'errorlog' => [
116:             'driver' => 'errorlog',
117:             'level' => env('LOG_LEVEL', 'debug'),
118:             'replace_placeholders' => true,
119:         ],
120: 
121:         'null' => [
122:             'driver' => 'monolog',
123:             'handler' => NullHandler::class,
124:         ],
125: 
126:         'emergency' => [
127:             'path' => storage_path('logs/laravel.log'),
128:         ],
129: 
130:     ],
131: 
132: ];
```

## File: config/permission.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     'models' => [
  6: 
  7:         /*
  8:          * When using the "HasPermissions" trait from this package, we need to know which
  9:          * Eloquent model should be used to retrieve your permissions. Of course, it
 10:          * is often just the "Permission" model but you may use whatever you like.
 11:          *
 12:          * The model you want to use as a Permission model needs to implement the
 13:          * `Spatie\Permission\Contracts\Permission` contract.
 14:          */
 15: 
 16:         'permission' => Spatie\Permission\Models\Permission::class,
 17: 
 18:         /*
 19:          * When using the "HasRoles" trait from this package, we need to know which
 20:          * Eloquent model should be used to retrieve your roles. Of course, it
 21:          * is often just the "Role" model but you may use whatever you like.
 22:          *
 23:          * The model you want to use as a Role model needs to implement the
 24:          * `Spatie\Permission\Contracts\Role` contract.
 25:          */
 26: 
 27:         'role' => Spatie\Permission\Models\Role::class,
 28: 
 29:     ],
 30: 
 31:     'table_names' => [
 32: 
 33:         /*
 34:          * When using the "HasRoles" trait from this package, we need to know which
 35:          * table should be used to retrieve your roles. We have chosen a basic
 36:          * default value but you may easily change it to any table you like.
 37:          */
 38: 
 39:         'roles' => 'roles',
 40: 
 41:         /*
 42:          * When using the "HasPermissions" trait from this package, we need to know which
 43:          * table should be used to retrieve your permissions. We have chosen a basic
 44:          * default value but you may easily change it to any table you like.
 45:          */
 46: 
 47:         'permissions' => 'permissions',
 48: 
 49:         /*
 50:          * When using the "HasPermissions" trait from this package, we need to know which
 51:          * table should be used to retrieve your models permissions. We have chosen a
 52:          * basic default value but you may easily change it to any table you like.
 53:          */
 54: 
 55:         'model_has_permissions' => 'model_has_permissions',
 56: 
 57:         /*
 58:          * When using the "HasRoles" trait from this package, we need to know which
 59:          * table should be used to retrieve your models roles. We have chosen a
 60:          * basic default value but you may easily change it to any table you like.
 61:          */
 62: 
 63:         'model_has_roles' => 'model_has_roles',
 64: 
 65:         /*
 66:          * When using the "HasRoles" trait from this package, we need to know which
 67:          * table should be used to retrieve your roles permissions. We have chosen a
 68:          * basic default value but you may easily change it to any table you like.
 69:          */
 70: 
 71:         'role_has_permissions' => 'role_has_permissions',
 72:     ],
 73: 
 74:     'column_names' => [
 75:         /*
 76:          * Change this if you want to name the related pivots other than defaults
 77:          */
 78:         'role_pivot_key' => null, // default 'role_id',
 79:         'permission_pivot_key' => null, // default 'permission_id',
 80: 
 81:         /*
 82:          * Change this if you want to name the related model primary key other than
 83:          * `model_id`.
 84:          *
 85:          * For example, this would be nice if your primary keys are all UUIDs. In
 86:          * that case, name this `model_uuid`.
 87:          */
 88: 
 89:         'model_morph_key' => 'model_id',
 90: 
 91:         /*
 92:          * Change this if you want to use the teams feature and your related model's
 93:          * foreign key is other than `team_id`.
 94:          */
 95: 
 96:         'team_foreign_key' => 'team_id',
 97:     ],
 98: 
 99:     /*
100:      * When set to true, the method for checking permissions will be registered on the gate.
101:      * Set this to false if you want to implement custom logic for checking permissions.
102:      */
103: 
104:     'register_permission_check_method' => true,
105: 
106:     /*
107:      * When set to true, Laravel\Octane\Events\OperationTerminated event listener will be registered
108:      * this will refresh permissions on every TickTerminated, TaskTerminated and RequestTerminated
109:      * NOTE: This should not be needed in most cases, but an Octane/Vapor combination benefited from it.
110:      */
111:     'register_octane_reset_listener' => false,
112: 
113:     /*
114:      * Events will fire when a role or permission is assigned/unassigned:
115:      * \Spatie\Permission\Events\RoleAttached
116:      * \Spatie\Permission\Events\RoleDetached
117:      * \Spatie\Permission\Events\PermissionAttached
118:      * \Spatie\Permission\Events\PermissionDetached
119:      *
120:      * To enable, set to true, and then create listeners to watch these events.
121:      */
122:     'events_enabled' => false,
123: 
124:     /*
125:      * Teams Feature.
126:      * When set to true the package implements teams using the 'team_foreign_key'.
127:      * If you want the migrations to register the 'team_foreign_key', you must
128:      * set this to true before doing the migration.
129:      * If you already did the migration then you must make a new migration to also
130:      * add 'team_foreign_key' to 'roles', 'model_has_roles', and 'model_has_permissions'
131:      * (view the latest version of this package's migration file)
132:      */
133: 
134:     'teams' => false,
135: 
136:     /*
137:      * The class to use to resolve the permissions team id
138:      */
139:     'team_resolver' => \Spatie\Permission\DefaultTeamResolver::class,
140: 
141:     /*
142:      * Passport Client Credentials Grant
143:      * When set to true the package will use Passports Client to check permissions
144:      */
145: 
146:     'use_passport_client_credentials' => false,
147: 
148:     /*
149:      * When set to true, the required permission names are added to exception messages.
150:      * This could be considered an information leak in some contexts, so the default
151:      * setting is false here for optimum safety.
152:      */
153: 
154:     'display_permission_in_exception' => false,
155: 
156:     /*
157:      * When set to true, the required role names are added to exception messages.
158:      * This could be considered an information leak in some contexts, so the default
159:      * setting is false here for optimum safety.
160:      */
161: 
162:     'display_role_in_exception' => false,
163: 
164:     /*
165:      * By default wildcard permission lookups are disabled.
166:      * See documentation to understand supported syntax.
167:      */
168: 
169:     'enable_wildcard_permission' => false,
170: 
171:     /*
172:      * The class to use for interpreting wildcard permissions.
173:      * If you need to modify delimiters, override the class and specify its name here.
174:      */
175:     // 'wildcard_permission' => Spatie\Permission\WildcardPermission::class,
176: 
177:     /* Cache-specific settings */
178: 
179:     'cache' => [
180: 
181:         /*
182:          * By default all permissions are cached for 24 hours to speed up performance.
183:          * When permissions or roles are updated the cache is flushed automatically.
184:          */
185: 
186:         'expiration_time' => \DateInterval::createFromDateString('24 hours'),
187: 
188:         /*
189:          * The cache key used to store all permissions.
190:          */
191: 
192:         'key' => 'spatie.permission.cache',
193: 
194:         /*
195:          * You may optionally indicate a specific cache driver to use for permission and
196:          * role caching using any of the `store` drivers listed in the cache.php config
197:          * file. Using 'default' here means to use the `default` set in cache.php.
198:          */
199: 
200:         'store' => 'default',
201:     ],
202: ];
```

## File: config/queue.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     /*
  6:     |--------------------------------------------------------------------------
  7:     | Default Queue Connection Name
  8:     |--------------------------------------------------------------------------
  9:     |
 10:     | Laravel's queue supports a variety of backends via a single, unified
 11:     | API, giving you convenient access to each backend using identical
 12:     | syntax for each. The default queue connection is defined below.
 13:     |
 14:     */
 15: 
 16:     'default' => env('QUEUE_CONNECTION', 'database'),
 17: 
 18:     /*
 19:     |--------------------------------------------------------------------------
 20:     | Queue Connections
 21:     |--------------------------------------------------------------------------
 22:     |
 23:     | Here you may configure the connection options for every queue backend
 24:     | used by your application. An example configuration is provided for
 25:     | each backend supported by Laravel. You're also free to add more.
 26:     |
 27:     | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
 28:     |
 29:     */
 30: 
 31:     'connections' => [
 32: 
 33:         'sync' => [
 34:             'driver' => 'sync',
 35:         ],
 36: 
 37:         'database' => [
 38:             'driver' => 'database',
 39:             'connection' => env('DB_QUEUE_CONNECTION'),
 40:             'table' => env('DB_QUEUE_TABLE', 'jobs'),
 41:             'queue' => env('DB_QUEUE', 'default'),
 42:             'retry_after' => (int) env('DB_QUEUE_RETRY_AFTER', 90),
 43:             'after_commit' => false,
 44:         ],
 45: 
 46:         'beanstalkd' => [
 47:             'driver' => 'beanstalkd',
 48:             'host' => env('BEANSTALKD_QUEUE_HOST', 'localhost'),
 49:             'queue' => env('BEANSTALKD_QUEUE', 'default'),
 50:             'retry_after' => (int) env('BEANSTALKD_QUEUE_RETRY_AFTER', 90),
 51:             'block_for' => 0,
 52:             'after_commit' => false,
 53:         ],
 54: 
 55:         'sqs' => [
 56:             'driver' => 'sqs',
 57:             'key' => env('AWS_ACCESS_KEY_ID'),
 58:             'secret' => env('AWS_SECRET_ACCESS_KEY'),
 59:             'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
 60:             'queue' => env('SQS_QUEUE', 'default'),
 61:             'suffix' => env('SQS_SUFFIX'),
 62:             'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
 63:             'after_commit' => false,
 64:         ],
 65: 
 66:         'redis' => [
 67:             'driver' => 'redis',
 68:             'connection' => env('REDIS_QUEUE_CONNECTION', 'default'),
 69:             'queue' => env('REDIS_QUEUE', 'default'),
 70:             'retry_after' => (int) env('REDIS_QUEUE_RETRY_AFTER', 90),
 71:             'block_for' => null,
 72:             'after_commit' => false,
 73:         ],
 74: 
 75:     ],
 76: 
 77:     /*
 78:     |--------------------------------------------------------------------------
 79:     | Job Batching
 80:     |--------------------------------------------------------------------------
 81:     |
 82:     | The following options configure the database and table that store job
 83:     | batching information. These options can be updated to any database
 84:     | connection and table which has been defined by your application.
 85:     |
 86:     */
 87: 
 88:     'batching' => [
 89:         'database' => env('DB_CONNECTION', 'sqlite'),
 90:         'table' => 'job_batches',
 91:     ],
 92: 
 93:     /*
 94:     |--------------------------------------------------------------------------
 95:     | Failed Queue Jobs
 96:     |--------------------------------------------------------------------------
 97:     |
 98:     | These options configure the behavior of failed queue job logging so you
 99:     | can control how and where failed jobs are stored. Laravel ships with
100:     | support for storing failed jobs in a simple file or in a database.
101:     |
102:     | Supported drivers: "database-uuids", "dynamodb", "file", "null"
103:     |
104:     */
105: 
106:     'failed' => [
107:         'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
108:         'database' => env('DB_CONNECTION', 'sqlite'),
109:         'table' => 'failed_jobs',
110:     ],
111: 
112: ];
```

## File: config/reverb.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Default Reverb Server
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | This option controls the default server used by Reverb to handle
11:     | incoming messages as well as broadcasting message to all your
12:     | connected clients. At this time only "reverb" is supported.
13:     |
14:     */
15: 
16:     'default' => env('REVERB_SERVER', 'reverb'),
17: 
18:     /*
19:     |--------------------------------------------------------------------------
20:     | Reverb Servers
21:     |--------------------------------------------------------------------------
22:     |
23:     | Here you may define details for each of the supported Reverb servers.
24:     | Each server has its own configuration options that are defined in
25:     | the array below. You should ensure all the options are present.
26:     |
27:     */
28: 
29:     'servers' => [
30: 
31:         'reverb' => [
32:             'host' => env('REVERB_SERVER_HOST', '0.0.0.0'),
33:             'port' => env('REVERB_SERVER_PORT', 8080),
34:             'path' => env('REVERB_SERVER_PATH', ''),
35:             'hostname' => env('REVERB_HOST'),
36:             'options' => [
37:                 'tls' => [],
38:             ],
39:             'max_request_size' => env('REVERB_MAX_REQUEST_SIZE', 10_000),
40:             'scaling' => [
41:                 'enabled' => env('REVERB_SCALING_ENABLED', false),
42:                 'channel' => env('REVERB_SCALING_CHANNEL', 'reverb'),
43:                 'server' => [
44:                     'url' => env('REDIS_URL'),
45:                     'host' => env('REDIS_HOST', '127.0.0.1'),
46:                     'port' => env('REDIS_PORT', '6379'),
47:                     'username' => env('REDIS_USERNAME'),
48:                     'password' => env('REDIS_PASSWORD'),
49:                     'database' => env('REDIS_DB', '0'),
50:                     'timeout' => env('REDIS_TIMEOUT', 60),
51:                 ],
52:             ],
53:             'pulse_ingest_interval' => env('REVERB_PULSE_INGEST_INTERVAL', 15),
54:             'telescope_ingest_interval' => env('REVERB_TELESCOPE_INGEST_INTERVAL', 15),
55:         ],
56: 
57:     ],
58: 
59:     /*
60:     |--------------------------------------------------------------------------
61:     | Reverb Applications
62:     |--------------------------------------------------------------------------
63:     |
64:     | Here you may define how Reverb applications are managed. If you choose
65:     | to use the "config" provider, you may define an array of apps which
66:     | your server will support, including their connection credentials.
67:     |
68:     */
69: 
70:     'apps' => [
71: 
72:         'provider' => 'config',
73: 
74:         'apps' => [
75:             [
76:                 'key' => env('REVERB_APP_KEY'),
77:                 'secret' => env('REVERB_APP_SECRET'),
78:                 'app_id' => env('REVERB_APP_ID'),
79:                 'options' => [
80:                     'host' => env('REVERB_HOST'),
81:                     'port' => env('REVERB_PORT', 443),
82:                     'scheme' => env('REVERB_SCHEME', 'https'),
83:                     'useTLS' => env('REVERB_SCHEME', 'https') === 'https',
84:                 ],
85:                 'allowed_origins' => ['*'],
86:                 'ping_interval' => env('REVERB_APP_PING_INTERVAL', 60),
87:                 'activity_timeout' => env('REVERB_APP_ACTIVITY_TIMEOUT', 30),
88:                 'max_connections' => env('REVERB_APP_MAX_CONNECTIONS'),
89:                 'max_message_size' => env('REVERB_APP_MAX_MESSAGE_SIZE', 10_000),
90:             ],
91:         ],
92: 
93:     ],
94: 
95: ];
```

## File: config/sanctum.php
```php
 1: <?php
 2: 
 3: use Laravel\Sanctum\Sanctum;
 4: 
 5: return [
 6: 
 7:     /*
 8:     |--------------------------------------------------------------------------
 9:     | Stateful Domains
10:     |--------------------------------------------------------------------------
11:     |
12:     | Requests from the following domains / hosts will receive stateful API
13:     | authentication cookies. Typically, these should include your local
14:     | and production domains which access your API via a frontend SPA.
15:     |
16:     */
17: 
18:     'stateful' => explode(',', env('SANCTUM_STATEFUL_DOMAINS', sprintf(
19:         '%s%s',
20:         'localhost,localhost:3000,127.0.0.1,127.0.0.1:8000,::1',
21:         Sanctum::currentApplicationUrlWithPort(),
22:         // Sanctum::currentRequestHost(),
23:     ))),
24: 
25:     /*
26:     |--------------------------------------------------------------------------
27:     | Sanctum Guards
28:     |--------------------------------------------------------------------------
29:     |
30:     | This array contains the authentication guards that will be checked when
31:     | Sanctum is trying to authenticate a request. If none of these guards
32:     | are able to authenticate the request, Sanctum will use the bearer
33:     | token that's present on an incoming request for authentication.
34:     |
35:     */
36: 
37:     'guard' => ['web'],
38: 
39:     /*
40:     |--------------------------------------------------------------------------
41:     | Expiration Minutes
42:     |--------------------------------------------------------------------------
43:     |
44:     | This value controls the number of minutes until an issued token will be
45:     | considered expired. This will override any values set in the token's
46:     | "expires_at" attribute, but first-party sessions are not affected.
47:     |
48:     */
49: 
50:     'expiration' => null,
51: 
52:     /*
53:     |--------------------------------------------------------------------------
54:     | Token Prefix
55:     |--------------------------------------------------------------------------
56:     |
57:     | Sanctum can prefix new tokens in order to take advantage of numerous
58:     | security scanning initiatives maintained by open source platforms
59:     | that notify developers if they commit tokens into repositories.
60:     |
61:     | See: https://docs.github.com/en/code-security/secret-scanning/about-secret-scanning
62:     |
63:     */
64: 
65:     'token_prefix' => env('SANCTUM_TOKEN_PREFIX', ''),
66: 
67:     /*
68:     |--------------------------------------------------------------------------
69:     | Sanctum Middleware
70:     |--------------------------------------------------------------------------
71:     |
72:     | When authenticating your first-party SPA with Sanctum you may need to
73:     | customize some of the middleware Sanctum uses while processing the
74:     | request. You may change the middleware listed below as required.
75:     |
76:     */
77: 
78:     'middleware' => [
79:         'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
80:         'encrypt_cookies' => Illuminate\Cookie\Middleware\EncryptCookies::class,
81:         'validate_csrf_token' => Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
82:     ],
83: 
84: ];
```

## File: config/session.php
```php
  1: <?php
  2: 
  3: use Illuminate\Support\Str;
  4: 
  5: return [
  6: 
  7:     /*
  8:     |--------------------------------------------------------------------------
  9:     | Default Session Driver
 10:     |--------------------------------------------------------------------------
 11:     |
 12:     | This option determines the default session driver that is utilized for
 13:     | incoming requests. Laravel supports a variety of storage options to
 14:     | persist session data. Database storage is a great default choice.
 15:     |
 16:     | Supported: "file", "cookie", "database", "memcached",
 17:     |            "redis", "dynamodb", "array"
 18:     |
 19:     */
 20: 
 21:     'driver' => env('SESSION_DRIVER', 'database'),
 22: 
 23:     /*
 24:     |--------------------------------------------------------------------------
 25:     | Session Lifetime
 26:     |--------------------------------------------------------------------------
 27:     |
 28:     | Here you may specify the number of minutes that you wish the session
 29:     | to be allowed to remain idle before it expires. If you want them
 30:     | to expire immediately when the browser is closed then you may
 31:     | indicate that via the expire_on_close configuration option.
 32:     |
 33:     */
 34: 
 35:     'lifetime' => (int) env('SESSION_LIFETIME', 120),
 36: 
 37:     'expire_on_close' => env('SESSION_EXPIRE_ON_CLOSE', false),
 38: 
 39:     /*
 40:     |--------------------------------------------------------------------------
 41:     | Session Encryption
 42:     |--------------------------------------------------------------------------
 43:     |
 44:     | This option allows you to easily specify that all of your session data
 45:     | should be encrypted before it's stored. All encryption is performed
 46:     | automatically by Laravel and you may use the session like normal.
 47:     |
 48:     */
 49: 
 50:     'encrypt' => env('SESSION_ENCRYPT', false),
 51: 
 52:     /*
 53:     |--------------------------------------------------------------------------
 54:     | Session File Location
 55:     |--------------------------------------------------------------------------
 56:     |
 57:     | When utilizing the "file" session driver, the session files are placed
 58:     | on disk. The default storage location is defined here; however, you
 59:     | are free to provide another location where they should be stored.
 60:     |
 61:     */
 62: 
 63:     'files' => storage_path('framework/sessions'),
 64: 
 65:     /*
 66:     |--------------------------------------------------------------------------
 67:     | Session Database Connection
 68:     |--------------------------------------------------------------------------
 69:     |
 70:     | When using the "database" or "redis" session drivers, you may specify a
 71:     | connection that should be used to manage these sessions. This should
 72:     | correspond to a connection in your database configuration options.
 73:     |
 74:     */
 75: 
 76:     'connection' => env('SESSION_CONNECTION'),
 77: 
 78:     /*
 79:     |--------------------------------------------------------------------------
 80:     | Session Database Table
 81:     |--------------------------------------------------------------------------
 82:     |
 83:     | When using the "database" session driver, you may specify the table to
 84:     | be used to store sessions. Of course, a sensible default is defined
 85:     | for you; however, you're welcome to change this to another table.
 86:     |
 87:     */
 88: 
 89:     'table' => env('SESSION_TABLE', 'sessions'),
 90: 
 91:     /*
 92:     |--------------------------------------------------------------------------
 93:     | Session Cache Store
 94:     |--------------------------------------------------------------------------
 95:     |
 96:     | When using one of the framework's cache driven session backends, you may
 97:     | define the cache store which should be used to store the session data
 98:     | between requests. This must match one of your defined cache stores.
 99:     |
100:     | Affects: "dynamodb", "memcached", "redis"
101:     |
102:     */
103: 
104:     'store' => env('SESSION_STORE'),
105: 
106:     /*
107:     |--------------------------------------------------------------------------
108:     | Session Sweeping Lottery
109:     |--------------------------------------------------------------------------
110:     |
111:     | Some session drivers must manually sweep their storage location to get
112:     | rid of old sessions from storage. Here are the chances that it will
113:     | happen on a given request. By default, the odds are 2 out of 100.
114:     |
115:     */
116: 
117:     'lottery' => [2, 100],
118: 
119:     /*
120:     |--------------------------------------------------------------------------
121:     | Session Cookie Name
122:     |--------------------------------------------------------------------------
123:     |
124:     | Here you may change the name of the session cookie that is created by
125:     | the framework. Typically, you should not need to change this value
126:     | since doing so does not grant a meaningful security improvement.
127:     |
128:     */
129: 
130:     'cookie' => env(
131:         'SESSION_COOKIE',
132:         Str::snake((string) env('APP_NAME', 'laravel')).'_session'
133:     ),
134: 
135:     /*
136:     |--------------------------------------------------------------------------
137:     | Session Cookie Path
138:     |--------------------------------------------------------------------------
139:     |
140:     | The session cookie path determines the path for which the cookie will
141:     | be regarded as available. Typically, this will be the root path of
142:     | your application, but you're free to change this when necessary.
143:     |
144:     */
145: 
146:     'path' => env('SESSION_PATH', '/'),
147: 
148:     /*
149:     |--------------------------------------------------------------------------
150:     | Session Cookie Domain
151:     |--------------------------------------------------------------------------
152:     |
153:     | This value determines the domain and subdomains the session cookie is
154:     | available to. By default, the cookie will be available to the root
155:     | domain and all subdomains. Typically, this shouldn't be changed.
156:     |
157:     */
158: 
159:     'domain' => env('SESSION_DOMAIN'),
160: 
161:     /*
162:     |--------------------------------------------------------------------------
163:     | HTTPS Only Cookies
164:     |--------------------------------------------------------------------------
165:     |
166:     | By setting this option to true, session cookies will only be sent back
167:     | to the server if the browser has a HTTPS connection. This will keep
168:     | the cookie from being sent to you when it can't be done securely.
169:     |
170:     */
171: 
172:     'secure' => env('SESSION_SECURE_COOKIE'),
173: 
174:     /*
175:     |--------------------------------------------------------------------------
176:     | HTTP Access Only
177:     |--------------------------------------------------------------------------
178:     |
179:     | Setting this value to true will prevent JavaScript from accessing the
180:     | value of the cookie and the cookie will only be accessible through
181:     | the HTTP protocol. It's unlikely you should disable this option.
182:     |
183:     */
184: 
185:     'http_only' => env('SESSION_HTTP_ONLY', true),
186: 
187:     /*
188:     |--------------------------------------------------------------------------
189:     | Same-Site Cookies
190:     |--------------------------------------------------------------------------
191:     |
192:     | This option determines how your cookies behave when cross-site requests
193:     | take place, and can be used to mitigate CSRF attacks. By default, we
194:     | will set this value to "lax" to permit secure cross-site requests.
195:     |
196:     | See: https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie#samesitesamesite-value
197:     |
198:     | Supported: "lax", "strict", "none", null
199:     |
200:     */
201: 
202:     'same_site' => env('SESSION_SAME_SITE', 'lax'),
203: 
204:     /*
205:     |--------------------------------------------------------------------------
206:     | Partitioned Cookies
207:     |--------------------------------------------------------------------------
208:     |
209:     | Setting this value to true will tie the cookie to the top-level site for
210:     | a cross-site context. Partitioned cookies are accepted by the browser
211:     | when flagged "secure" and the Same-Site attribute is set to "none".
212:     |
213:     */
214: 
215:     'partitioned' => env('SESSION_PARTITIONED_COOKIE', false),
216: 
217: ];
```

## File: database/.gitignore
```
1: *.sqlite*
```

## File: database/migrations/0001_01_01_000000_create_users_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('users', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('name');
17:             $table->string('phone', 20)->unique();
18:             $table->string('logo')->nullable();
19:             $table->string('fcm_token')->nullable();
20:             $table->enum('status', ['Pending', 'Active', 'Inactive', 'Suspended', 'Rejected'])->default('Pending');
21:             $table->timestamp('email_verified_at')->nullable();
22:             $table->softDeletes();
23:             $table->rememberToken();
24:             $table->timestamps();
25:         });
26: 
27:         Schema::create('password_reset_tokens', function (Blueprint $table) {
28:             $table->string('email')->primary();
29:             $table->string('token');
30:             $table->timestamp('created_at')->nullable();
31:         });
32: 
33:         Schema::create('sessions', function (Blueprint $table) {
34:             $table->string('id')->primary();
35:             $table->foreignId('user_id')->nullable()->index();
36:             $table->string('ip_address', 45)->nullable();
37:             $table->text('user_agent')->nullable();
38:             $table->longText('payload');
39:             $table->integer('last_activity')->index();
40:         });
41:     }
42: 
43:     /**
44:      * Reverse the migrations.
45:      */
46:     public function down(): void
47:     {
48:         Schema::dropIfExists('users');
49:         Schema::dropIfExists('password_reset_tokens');
50:         Schema::dropIfExists('sessions');
51:     }
52: };
```

## File: database/migrations/0001_01_01_000001_create_cache_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('cache', function (Blueprint $table) {
15:             $table->string('key')->primary();
16:             $table->mediumText('value');
17:             $table->integer('expiration');
18:         });
19: 
20:         Schema::create('cache_locks', function (Blueprint $table) {
21:             $table->string('key')->primary();
22:             $table->string('owner');
23:             $table->integer('expiration');
24:         });
25:     }
26: 
27:     /**
28:      * Reverse the migrations.
29:      */
30:     public function down(): void
31:     {
32:         Schema::dropIfExists('cache');
33:         Schema::dropIfExists('cache_locks');
34:     }
35: };
```

## File: database/migrations/0001_01_01_000002_create_jobs_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('jobs', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('queue')->index();
17:             $table->longText('payload');
18:             $table->unsignedTinyInteger('attempts');
19:             $table->unsignedInteger('reserved_at')->nullable();
20:             $table->unsignedInteger('available_at');
21:             $table->unsignedInteger('created_at');
22:         });
23: 
24:         Schema::create('job_batches', function (Blueprint $table) {
25:             $table->string('id')->primary();
26:             $table->string('name');
27:             $table->integer('total_jobs');
28:             $table->integer('pending_jobs');
29:             $table->integer('failed_jobs');
30:             $table->longText('failed_job_ids');
31:             $table->mediumText('options')->nullable();
32:             $table->integer('cancelled_at')->nullable();
33:             $table->integer('created_at');
34:             $table->integer('finished_at')->nullable();
35:         });
36: 
37:         Schema::create('failed_jobs', function (Blueprint $table) {
38:             $table->id();
39:             $table->string('uuid')->unique();
40:             $table->text('connection');
41:             $table->text('queue');
42:             $table->longText('payload');
43:             $table->longText('exception');
44:             $table->timestamp('failed_at')->useCurrent();
45:         });
46:     }
47: 
48:     /**
49:      * Reverse the migrations.
50:      */
51:     public function down(): void
52:     {
53:         Schema::dropIfExists('jobs');
54:         Schema::dropIfExists('job_batches');
55:         Schema::dropIfExists('failed_jobs');
56:     }
57: };
```

## File: database/migrations/2025_07_31_142843_create_user_otps_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('user_otps', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->string('otp', 10);
18:             $table->timestamp('expire_at')->nullable();
19:             $table->timestamps();
20:         });
21:     }
22: 
23:     /**
24:      * Reverse the migrations.
25:      */
26:     public function down(): void
27:     {
28:         Schema::dropIfExists('user_otps');
29:     }
30: };
```

## File: database/migrations/2025_07_31_144435_create_permission_tables.php
```php
  1: <?php
  2: 
  3: use Illuminate\Database\Migrations\Migration;
  4: use Illuminate\Database\Schema\Blueprint;
  5: use Illuminate\Support\Facades\Schema;
  6: 
  7: return new class extends Migration
  8: {
  9:     /**
 10:      * Run the migrations.
 11:      */
 12:     public function up(): void
 13:     {
 14:         $teams = config('permission.teams');
 15:         $tableNames = config('permission.table_names');
 16:         $columnNames = config('permission.column_names');
 17:         $pivotRole = $columnNames['role_pivot_key'] ?? 'role_id';
 18:         $pivotPermission = $columnNames['permission_pivot_key'] ?? 'permission_id';
 19: 
 20:         throw_if(empty($tableNames), new Exception('Error: config/permission.php not loaded. Run [php artisan config:clear] and try again.'));
 21:         throw_if($teams && empty($columnNames['team_foreign_key'] ?? null), new Exception('Error: team_foreign_key on config/permission.php not loaded. Run [php artisan config:clear] and try again.'));
 22: 
 23:         Schema::create($tableNames['permissions'], static function (Blueprint $table) {
 24:             // $table->engine('InnoDB');
 25:             $table->bigIncrements('id'); // permission id
 26:             $table->string('name');       // For MyISAM use string('name', 225); // (or 166 for InnoDB with Redundant/Compact row format)
 27:             $table->string('guard_name'); // For MyISAM use string('guard_name', 25);
 28:             $table->timestamps();
 29: 
 30:             $table->unique(['name', 'guard_name']);
 31:         });
 32: 
 33:         Schema::create($tableNames['roles'], static function (Blueprint $table) use ($teams, $columnNames) {
 34:             // $table->engine('InnoDB');
 35:             $table->bigIncrements('id'); // role id
 36:             if ($teams || config('permission.testing')) { // permission.testing is a fix for sqlite testing
 37:                 $table->unsignedBigInteger($columnNames['team_foreign_key'])->nullable();
 38:                 $table->index($columnNames['team_foreign_key'], 'roles_team_foreign_key_index');
 39:             }
 40:             $table->string('name');       // For MyISAM use string('name', 225); // (or 166 for InnoDB with Redundant/Compact row format)
 41:             $table->string('guard_name'); // For MyISAM use string('guard_name', 25);
 42:             $table->timestamps();
 43:             if ($teams || config('permission.testing')) {
 44:                 $table->unique([$columnNames['team_foreign_key'], 'name', 'guard_name']);
 45:             } else {
 46:                 $table->unique(['name', 'guard_name']);
 47:             }
 48:         });
 49: 
 50:         Schema::create($tableNames['model_has_permissions'], static function (Blueprint $table) use ($tableNames, $columnNames, $pivotPermission, $teams) {
 51:             $table->unsignedBigInteger($pivotPermission);
 52: 
 53:             $table->string('model_type');
 54:             $table->unsignedBigInteger($columnNames['model_morph_key']);
 55:             $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_permissions_model_id_model_type_index');
 56: 
 57:             $table->foreign($pivotPermission)
 58:                 ->references('id') // permission id
 59:                 ->on($tableNames['permissions'])
 60:                 ->onDelete('cascade');
 61:             if ($teams) {
 62:                 $table->unsignedBigInteger($columnNames['team_foreign_key']);
 63:                 $table->index($columnNames['team_foreign_key'], 'model_has_permissions_team_foreign_key_index');
 64: 
 65:                 $table->primary([$columnNames['team_foreign_key'], $pivotPermission, $columnNames['model_morph_key'], 'model_type'],
 66:                     'model_has_permissions_permission_model_type_primary');
 67:             } else {
 68:                 $table->primary([$pivotPermission, $columnNames['model_morph_key'], 'model_type'],
 69:                     'model_has_permissions_permission_model_type_primary');
 70:             }
 71: 
 72:         });
 73: 
 74:         Schema::create($tableNames['model_has_roles'], static function (Blueprint $table) use ($tableNames, $columnNames, $pivotRole, $teams) {
 75:             $table->unsignedBigInteger($pivotRole);
 76: 
 77:             $table->string('model_type');
 78:             $table->unsignedBigInteger($columnNames['model_morph_key']);
 79:             $table->index([$columnNames['model_morph_key'], 'model_type'], 'model_has_roles_model_id_model_type_index');
 80: 
 81:             $table->foreign($pivotRole)
 82:                 ->references('id') // role id
 83:                 ->on($tableNames['roles'])
 84:                 ->onDelete('cascade');
 85:             if ($teams) {
 86:                 $table->unsignedBigInteger($columnNames['team_foreign_key']);
 87:                 $table->index($columnNames['team_foreign_key'], 'model_has_roles_team_foreign_key_index');
 88: 
 89:                 $table->primary([$columnNames['team_foreign_key'], $pivotRole, $columnNames['model_morph_key'], 'model_type'],
 90:                     'model_has_roles_role_model_type_primary');
 91:             } else {
 92:                 $table->primary([$pivotRole, $columnNames['model_morph_key'], 'model_type'],
 93:                     'model_has_roles_role_model_type_primary');
 94:             }
 95:         });
 96: 
 97:         Schema::create($tableNames['role_has_permissions'], static function (Blueprint $table) use ($tableNames, $pivotRole, $pivotPermission) {
 98:             $table->unsignedBigInteger($pivotPermission);
 99:             $table->unsignedBigInteger($pivotRole);
100: 
101:             $table->foreign($pivotPermission)
102:                 ->references('id') // permission id
103:                 ->on($tableNames['permissions'])
104:                 ->onDelete('cascade');
105: 
106:             $table->foreign($pivotRole)
107:                 ->references('id') // role id
108:                 ->on($tableNames['roles'])
109:                 ->onDelete('cascade');
110: 
111:             $table->primary([$pivotPermission, $pivotRole], 'role_has_permissions_permission_id_role_id_primary');
112:         });
113: 
114:         app('cache')
115:             ->store(config('permission.cache.store') != 'default' ? config('permission.cache.store') : null)
116:             ->forget(config('permission.cache.key'));
117:     }
118: 
119:     /**
120:      * Reverse the migrations.
121:      */
122:     public function down(): void
123:     {
124:         $tableNames = config('permission.table_names');
125: 
126:         if (empty($tableNames)) {
127:             throw new \Exception('Error: config/permission.php not found and defaults could not be merged. Please publish the package configuration before proceeding, or drop the tables manually.');
128:         }
129: 
130:         Schema::drop($tableNames['role_has_permissions']);
131:         Schema::drop($tableNames['model_has_roles']);
132:         Schema::drop($tableNames['model_has_permissions']);
133:         Schema::drop($tableNames['roles']);
134:         Schema::drop($tableNames['permissions']);
135:     }
136: };
```

## File: database/migrations/2025_07_31_145932_create_settings_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('settings', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('key')->unique();
17:             $table->text('value')->nullable();
18:             $table->string('type')->default('string');
19:             $table->string('group')->default('general');
20:             $table->softDeletes();
21:             $table->timestamps();
22:         });
23:     }
24: 
25:     /**
26:      * Reverse the migrations.
27:      */
28:     public function down(): void
29:     {
30:         Schema::dropIfExists('settings');
31:     }
32: };
```

## File: database/migrations/2025_07_31_146032_create_personal_access_tokens_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('personal_access_tokens', function (Blueprint $table) {
15:             $table->id();
16:             $table->morphs('tokenable');
17:             $table->text('name');
18:             $table->string('token', 64)->unique();
19:             $table->text('abilities')->nullable();
20:             $table->timestamp('last_used_at')->nullable();
21:             $table->timestamp('expires_at')->nullable()->index();
22:             $table->timestamps();
23:         });
24:     }
25: 
26:     /**
27:      * Reverse the migrations.
28:      */
29:     public function down(): void
30:     {
31:         Schema::dropIfExists('personal_access_tokens');
32:     }
33: };
```

## File: database/migrations/2025_07_31_146132_create_cache_static_data_versions_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('cache_static_data_versions', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('entity_name')->unique();
17:             $table->timestamp('last_updated_at')->useCurrent();
18:             $table->timestamps();
19:         });
20:     }
21: 
22:     /**
23:      * Reverse the migrations.
24:      */
25:     public function down(): void
26:     {
27:         Schema::dropIfExists('cache_static_data_versions');
28:     }
29: };
```

## File: database/migrations/2025_07_31_150251_create_vendors_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendors', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->string('company_name_ar');
18:             $table->string('company_name_en')->nullable();
19:             $table->string('description', 1000)->nullable();
20:             $table->string('commercial_record', 20)->unique();
21:             $table->date('date_expire_commercial_record');
22:             $table->string('phone_contact', 20)->nullable();
23:             $table->float('rating')->default(0);
24:             $table->boolean('is_hide_phone_contact')->default(false);
25:             $table->boolean('is_verified')->default(false);
26:             $table->string('verification_notes', 500)->nullable();
27:             $table->timestamp('verified_at')->nullable();
28:             $table->softDeletes();
29:             $table->timestamps();
30:         });
31:     }
32: 
33:     /**
34:      * Reverse the migrations.
35:      */
36:     public function down(): void
37:     {
38:         Schema::dropIfExists('vendors');
39:     }
40: };
```

## File: database/migrations/2025_07_31_153126_create_vendor_documents_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendor_documents', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('vendor_id');
17:             $table->enum('document_type', ['National_Id', 'Commercial_Record']);
18:             $table->string('file_path');
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('vendor_documents');
30:     }
31: };
```

## File: database/migrations/2025_07_31_153502_create_cities_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('cities', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('city_name_ar', 100);
17:             $table->string('city_name_en', 100);
18:             $table->boolean('is_active')->default(true);
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('cities');
30:     }
31: };
```

## File: database/migrations/2025_07_31_153602_create_custom_fields_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('custom_fields', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('category_id');
17:             $table->string('label_ar', 150);
18:             $table->string('label_en', 150);
19:             $table->string('field_name', 100);
20:             $table->enum('field_type', ['text', 'text_area', 'number', 'select', 'checkbox', 'radio', 'date', 'file']);
21:             $table->boolean('is_required')->default(true);
22:             $table->json('options')->nullable();
23:             $table->integer('min_length')->nullable();
24:             $table->integer('max_length')->nullable();
25:             // $table->unique(['category_id', 'field_name'], 'custom_fields_category_field_unique');
26:             $table->softDeletes();
27:             $table->timestamps();
28:         });
29:     }
30: 
31:     /**
32:      * Reverse the migrations.
33:      */
34:     public function down(): void
35:     {
36:         Schema::dropIfExists('custom_fields');
37:     }
38: };
```

## File: database/migrations/2025_07_31_154829_create_brand_cars_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('brand_cars', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('brand_name_ar', 100);
17:             $table->string('brand_name_en', 100);
18:             $table->softDeletes();
19:             $table->timestamps();
20:         });
21:     }
22: 
23:     /**
24:      * Reverse the migrations.
25:      */
26:     public function down(): void
27:     {
28:         Schema::dropIfExists('brand_cars');
29:     }
30: };
```

## File: database/migrations/2025_07_31_155226_create_vendor_cities_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendor_cities', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('vendor_id');
17:             $table->unsignedBigInteger('city_id');
18:             $table->string('address_ar')->nullable();
19:             $table->string('address_en')->nullable();
20:             $table->decimal('latitude', 15, 10)->nullable();
21:             $table->decimal('longitude', 15, 10)->nullable();
22:             $table->softDeletes();
23:             $table->timestamps();
24:         });
25:     }
26: 
27:     /**
28:      * Reverse the migrations.
29:      */
30:     public function down(): void
31:     {
32:         Schema::dropIfExists('vendor_cities');
33:     }
34: };
```

## File: database/migrations/2025_07_31_155835_create_categories_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('categories', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('cat_name_ar', 100);
17:             $table->string('cat_name_en', 100);
18:             $table->string('cat_icon_path');
19:             $table->enum('commission_type', ['rate', 'amount']);
20:             $table->decimal('commission', 8, 2)->default(0);
21:             $table->enum('active', ['Active', 'Inactive', 'Soon'])->default('Active');
22:             $table->softDeletes();
23:             $table->timestamps();
24:         });
25:     }
26: 
27:     /**
28:      * Reverse the migrations.
29:      */
30:     public function down(): void
31:     {
32:         Schema::dropIfExists('categories');
33:     }
34: };
```

## File: database/migrations/2025_07_31_160658_create_category_has_brand_fields_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('category_has_brand_fields', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('category_id');
17:             $table->enum('has_brand_type', ['brand_cars'])->default('brand_cars');
18:             $table->timestamps();
19:         });
20:     }
21: 
22:     /**
23:      * Reverse the migrations.
24:      */
25:     public function down(): void
26:     {
27:         Schema::dropIfExists('category_has_brand_fields');
28:     }
29: };
```

## File: database/migrations/2025_08_02_135644_create_vendor_specialties_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendor_specialties', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('vendor_id');
17:             $table->unsignedBigInteger('category_id');
18:             $table->boolean('is_receive_all_brand_cars')->default(true);
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('vendor_specialties');
30:     }
31: };
```

## File: database/migrations/2025_08_02_141746_create_vendor_brand_cars_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendor_brand_cars', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('vendor_id');
17:             $table->unsignedBigInteger('category_id');
18:             $table->unsignedBigInteger('brand_car_id');
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('vendor_brand_cars');
30:     }
31: };
```

## File: database/migrations/2025_08_02_142437_create_request_customers_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_customers', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->unsignedBigInteger('category_id');
18:             $table->unsignedBigInteger('customer_city_id');
19:             $table->decimal('customer_latitude', 15, 10)->nullable();
20:             $table->decimal('customer_longitude', 15, 10)->nullable();
21:             $table->string('description', 4000);
22:             $table->json('cities_ids_scope')->nullable();
23:             $table->enum('status', ['open', 'closed', 'canceled', 'completed'])->default('open');
24:             $table->softDeletes();
25:             $table->timestamps();
26:         });
27:     }
28: 
29:     /**
30:      * Reverse the migrations.
31:      */
32:     public function down(): void
33:     {
34:         Schema::dropIfExists('request_customers');
35:     }
36: };
```

## File: database/migrations/2025_08_02_143918_create_request_brand_scopes_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_brand_scopes', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->enum('brand_type', ['brand_cars']);
18:             $table->json('brand_ids_scope');
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('request_brand_scopes');
30:     }
31: };
```

## File: database/migrations/2025_08_02_144446_create_request_custom_field_values_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_custom_field_values', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->unsignedBigInteger('custom_field_id');
18:             $table->string('value', 4000)->nullable();
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('request_custom_field_values');
30:     }
31: };
```

## File: database/migrations/2025_08_02_145053_create_request_eligible_vendors_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_eligible_vendors', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->unsignedBigInteger('vendor_id');
18:             $table->boolean('notification_sent')->default(false);
19:             $table->softDeletes();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('request_eligible_vendors');
30:     }
31: };
```

## File: database/migrations/2025_08_02_145442_create_request_responses_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_responses', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->unsignedBigInteger('vendor_id');
18:             $table->enum('status', ['available', 'available_with_difference', 'unavailable']);
19:             $table->decimal('price', 10, 2)->nullable();
20:             $table->string('note', 4000)->nullable();
21:             $table->string('warranty')->nullable();
22:             $table->softDeletes();
23:             $table->timestamps();
24:         });
25:     }
26: 
27:     /**
28:      * Reverse the migrations.
29:      */
30:     public function down(): void
31:     {
32:         Schema::dropIfExists('request_responses');
33:     }
34: };
```

## File: database/migrations/2025_08_02_145941_create_request_response_images_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_response_images', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('response_id');
17:             $table->string('image_name');
18:             $table->timestamps();
19:         });
20:     }
21: 
22:     /**
23:      * Reverse the migrations.
24:      */
25:     public function down(): void
26:     {
27:         Schema::dropIfExists('request_response_images');
28:     }
29: };
```

## File: database/migrations/2025_08_02_150619_create_vendor_reviews_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('vendor_reviews', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->unsignedBigInteger('vendor_id');
18:             $table->unsignedBigInteger('user_id');
19:             $table->decimal('rating', 2, 1);
20:             $table->string('review', 500)->nullable();
21:             $table->boolean('is_visible')->default(true);
22:             $table->softDeletes();
23:             $table->timestamps();
24:         });
25:     }
26: 
27:     /**
28:      * Reverse the migrations.
29:      */
30:     public function down(): void
31:     {
32:         Schema::dropIfExists('vendor_reviews');
33:     }
34: };
```

## File: database/migrations/2025_08_02_151125_create_complaints_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('complaints', function (Blueprint $table) {
15:             $table->id();
16:             $table->enum('user_type', ['user', 'vendor', 'admin']);
17:             $table->unsignedBigInteger('user_id');
18:             $table->enum('subject', ['transaction', 'vendor_service', 'product_quality', 'delivery', 'payment', 'technical', 'fraud', 'other'])->default('other');
19:             $table->unsignedBigInteger('request_id')->nullable();
20:             $table->string('title');
21:             $table->string('description', 2000);
22:             $table->enum('status', ['new', 'under_review', 'resolved', 'rejected', 'closed'])->default('new');
23:             $table->unsignedBigInteger('reviewed_by')->nullable();
24:             $table->softDeletes();
25:             $table->timestamps();
26:         });
27:     }
28: 
29:     /**
30:      * Reverse the migrations.
31:      */
32:     public function down(): void
33:     {
34:         Schema::dropIfExists('complaints');
35:     }
36: };
```

## File: database/migrations/2025_08_02_153431_create_notifications_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('notifications', function (Blueprint $table) {
15:             $table->uuid('id')->primary();
16:             $table->string('type');
17:             $table->morphs('notifiable');
18:             $table->text('data');
19:             $table->timestamp('read_at')->nullable();
20:             $table->timestamps();
21:         });
22:     }
23: 
24:     /**
25:      * Reverse the migrations.
26:      */
27:     public function down(): void
28:     {
29:         Schema::dropIfExists('notifications');
30:     }
31: };
```

## File: database/migrations/2025_08_16_151912_create_ads_banners_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('ads_banners', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('ads_image');
17:             $table->boolean('is_active')->default(0);
18:             $table->timestamps();
19:         });
20:     }
21: 
22:     /**
23:      * Reverse the migrations.
24:      */
25:     public function down(): void
26:     {
27:         Schema::dropIfExists('ads_banners');
28:     }
29: };
```

## File: database/migrations/2025_08_2_144720_create_request_images_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('request_images', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->string('image_name');
18:             $table->timestamps();
19:         });
20:     }
21: 
22:     /**
23:      * Reverse the migrations.
24:      */
25:     public function down(): void
26:     {
27:         Schema::dropIfExists('request_images');
28:     }
29: };
```

## File: database/migrations/2025_10_19_131703_create_admins_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('admins', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->string('email')->unique();
18:             $table->string('password');
19:             $table->rememberToken();
20:             $table->softDeletes();
21:             $table->timestamps();
22:         });
23:     }
24: 
25:     /**
26:      * Reverse the migrations.
27:      */
28:     public function down(): void
29:     {
30:         Schema::dropIfExists('admins');
31:     }
32: };
```

## File: database/migrations/2025_11_18_134243_create_conversations_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('conversations', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->unsignedBigInteger('vendor_id');
18:             $table->unsignedBigInteger('request_id');
19:             $table->timestamps();
20:         });
21:     }
22: 
23:     /**
24:      * Reverse the migrations.
25:      */
26:     public function down(): void
27:     {
28:         Schema::dropIfExists('conversations');
29:     }
30: };
```

## File: database/migrations/2025_11_18_134332_create_message_conversations_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('message_conversations', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('conversation_id');
17:             $table->unsignedBigInteger('sender_id');
18:             $table->text('body')->nullable();
19:             $table->string('image')->nullable();
20:             $table->boolean('is_shipping_request')->default(false);
21:             $table->boolean('read')->default(false);
22:             $table->timestamps();
23:         });
24:     }
25: 
26:     /**
27:      * Reverse the migrations.
28:      */
29:     public function down(): void
30:     {
31:         Schema::dropIfExists('message_conversations');
32:     }
33: };
```

## File: database/migrations/2025_12_02_191255_create_shipping_requests_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('shipping_requests', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('request_id');
17:             $table->unsignedBigInteger('response_id');
18:             $table->string('order_number')->nullable();
19:             $table->string('city_origin_vendor', 100)->nullable();
20:             $table->string('address_origin_vendor')->nullable();
21:             $table->string('phone_origin_vendor', 20)->nullable();
22:             $table->double('length')->nullable();
23:             $table->double('width')->nullable();
24:             $table->double('height')->nullable();
25:             $table->double('weight')->nullable();
26:             $table->string('id_number_user', 20)->nullable();
27:             $table->string('city_origin_dimensions', 100)->nullable();
28:             $table->string('address_origin_dimensions')->nullable();
29:             $table->string('phone_origin_dimensions', 20)->nullable();
30:             $table->string('status', 100)->default('Pending');
31:             $table->softDeletes();
32:             $table->timestamps();
33:         });
34:     }
35: 
36:     /**
37:      * Reverse the migrations.
38:      */
39:     public function down(): void
40:     {
41:         Schema::dropIfExists('shipping_requests');
42:     }
43: };
```

## File: database/migrations/2025_12_07_170954_add_column_responseid_to_conversations_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::table('conversations', function (Blueprint $table) {
15:             $table->unsignedBigInteger('response_id')->default(0);
16:         });
17:     }
18: 
19:     /**
20:      * Reverse the migrations.
21:      */
22:     public function down(): void
23:     {
24:         Schema::table('conversations', function (Blueprint $table) {
25:             $table->dropColumn('response_id');
26:         });
27:     }
28: };
```

## File: database/migrations/2026_01_18_202555_add_price_to_shipping_requests_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::table('shipping_requests', function (Blueprint $table) {
15:             $table->double('fee_cheapest_shipping')->default(0);
16:             $table->double('amount_rate_app')->default(0);
17:             $table->boolean('is_user_confirmed')->default(false);
18:         });
19:     }
20: 
21:     /**
22:      * Reverse the migrations.
23:      */
24:     public function down(): void
25:     {
26:         Schema::table('shipping_requests', function (Blueprint $table) {
27:             $table->dropColumn('fee_cheapest_shipping');
28:             $table->dropColumn('amount_rate_app');
29:             $table->dropColumn('is_user_confirmed');
30:         });
31:     }
32: };
```

## File: database/migrations/2026_02_14_183641_add_otoid_to_shipping_requests_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::table('shipping_requests', function (Blueprint $table) {
15:             $table->string('oto_id')->nullable();
16:         });
17:     }
18: 
19:     /**
20:      * Reverse the migrations.
21:      */
22:     public function down(): void
23:     {
24:         Schema::table('shipping_requests', function (Blueprint $table) {
25:             $table->dropColumn('oto_id');
26:         });
27:     }
28: };
```

## File: database/migrations/2026_02_25_181942_create_payments_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('payments', function (Blueprint $table) {
15:             $table->id();
16:             $table->unsignedBigInteger('user_id');
17:             $table->double('amount');
18:             $table->date('date');
19:             $table->string('name_transfer')->nullable();
20:             $table->bigInteger('number_request')->nullable();
21:             $table->string('notes', 500)->nullable();
22:             $table->string('invoice_image')->nullable();
23:             $table->string('status')->default('Pending');
24:             $table->timestamps();
25:         });
26:     }
27: 
28:     /**
29:      * Reverse the migrations.
30:      */
31:     public function down(): void
32:     {
33:         Schema::dropIfExists('payments');
34:     }
35: };
```

## File: lang/ar/auth.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | سطور لغة المصادقة
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | سطور اللغة التالية تُستخدم أثناء عملية المصادقة لعرض رسائل متنوعة
11:     | نحتاج لعرضها للمستخدم. لك مطلق الحرية في تعديل سطور اللغة هذه
12:     | بما يتوافق مع متطلبات تطبيقك.
13:     |
14:     */
15: 
16:     'failed' => 'خطأ باسم المستخدم او كلمة المرور',
17:     'password' => 'كلمة المرور المُقدّمة غير صحيحة.',
18:     'throttle' => 'محاولات تسجيل دخول كثيرة جدًا. يرجى المحاولة مرة أخرى بعد :seconds ثانية.',
19: 
20: ];
```

## File: lang/ar/exceptions.php
```php
1: <?php
2: 
3: return [
4:     'not_found_http_exception_404' => 'العنصر المطلوب غير موجود.',
5:     'authentication_exception_401' => 'غير مصرح لك بالوصول.',
6:     'forbidden_exception_403' => 'ليس لديك الصلاحية لتنفيذ هذا الإجراء.',
7:     'validation_exception_422' => 'البيانات المدخلة غير صالحة',
8:     'internal_server_error_500' => 'حدث خطأ غير متوقع، يرجى المحاولة لاحقاً',
9: ];
```

## File: lang/ar/messages.php
```php
1: <?php
2: 
3: return [
4:     'data_fetched_successfully' => 'تم جلب البيانات بنجاح',
5:     'no_data_found' => 'لا توجد بيانات',
6:     'rate' => 'نسبة',
7:     'amount' => 'مبلغ',
8: ];
```

## File: lang/ar/pagination.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Pagination Language Lines
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | The following language lines are used by the paginator library to build
11:     | the simple pagination links. You are free to change them to anything
12:     | you want to customize your views to better match your application.
13:     |
14:     */
15: 
16:     'previous' => '&laquo; السابق',
17:     'next'     => 'التالي &raquo;',
18: 
19: ];
```

## File: lang/ar/passwords.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Password Reset Language Lines
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | The following language lines are the default lines which match reasons
11:     | that are given by the password broker for a password update attempt
12:     | outcome such as failure due to an invalid password / reset token.
13:     |
14:     */
15: 
16: 
17:     'reset'     => 'تمت إعادة تعيين كلمة المرور!',
18:     'sent'      => 'تم إرسال تفاصيل استعادة كلمة المرور الخاصة بك إلى بريدك الإلكتروني!',
19:     'throttled' => 'الرجاء الانتظار قبل إعادة المحاولة.',
20:     'token'     => 'رمز استعادة كلمة المرور الذي أدخلته غير صحيح.',
21:     'user'      => 'لم يتم العثور على أيّ حسابٍ بهذا العنوان الإلكتروني.',
22: 
23: ];
```

## File: lang/ar/validation.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     'accepted' => 'يجب قبول حقل :attribute.',
  6:     'accepted_if' => 'يجب قبول حقل :attribute عندما يكون :other يساوي :value.',
  7:     'active_url' => 'حقل :attribute ليس رابطًا صالحًا.',
  8:     'after' => 'حقل :attribute يجب أن يكون تاريخًا بعد :date.',
  9:     'after_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
 10:     'alpha' => 'حقل :attribute يجب أن يحتوي على حروف فقط.',
 11:     'alpha_dash' => 'حقل :attribute يجب أن يحتوي على حروف، أرقام، شرطات (-)، وشرطات سفلية (_) فقط.',
 12:     'alpha_num' => 'حقل :attribute يجب أن يحتوي على حروف وأرقام فقط.',
 13:     'array' => 'حقل :attribute يجب أن يكون مصفوفة.',
 14:     'ascii' => 'حقل :attribute يجب أن يحتوي فقط على رموز وأحرف أبجدية رقمية أحادية البايت.',
 15:     'before' => 'حقل :attribute يجب أن يكون تاريخًا قبل :date.',
 16:     'before_or_equal' => 'حقل :attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
 17:     'between' => [
 18:         'array' => 'يجب أن يحتوي حقل :attribute على عدد من العناصر بين :min و :max.',
 19:         'file' => 'يجب أن تكون مساحة ملف :attribute بين :min و :max كيلوبايت.',
 20:         'numeric' => 'يجب أن تكون قيمة حقل :attribute بين :min و :max.',
 21:         'string' => 'يجب أن يكون طول نص :attribute بين :min و :max حرفًا.',
 22:     ],
 23:     'boolean' => 'حقل :attribute يجب أن يكون صحيحًا أو خاطئًا.',
 24:     'can' => 'حقل :attribute يحتوي على قيمة غير مصرح بها.',
 25:     'confirmed' => 'تأكيد حقل :attribute غير مطابق.',
 26:     'current_password' => 'كلمة المرور غير صحيحة.',
 27:     'date' => 'حقل :attribute ليس تاريخًا صالحًا.',
 28:     'date_equals' => 'حقل :attribute يجب أن يكون تاريخًا مطابقًا لـ :date.',
 29:     'date_format' => 'حقل :attribute لا يتطابق مع الصيغة :format.',
 30:     'decimal' => 'يجب أن يحتوي حقل :attribute على :decimal خانات عشرية.',
 31:     'declined' => 'يجب رفض حقل :attribute.',
 32:     'declined_if' => 'يجب رفض حقل :attribute عندما يكون :other يساوي :value.',
 33:     'different' => 'يجب أن يكون حقلا :attribute و :other مختلفين.',
 34:     'digits' => 'يجب أن يتكون حقل :attribute من :digits أرقام.',
 35:     'digits_between' => 'يجب أن يتكون حقل :attribute من عدد من الأرقام بين :min و :max.',
 36:     'dimensions' => 'حقل :attribute يحتوي على أبعاد صورة غير صالحة.',
 37:     'distinct' => 'حقل :attribute يحتوي على قيمة مكررة.',
 38:     'doesnt_end_with' => 'يجب ألا ينتهي حقل :attribute بأحد القيم التالية: :values.',
 39:     'doesnt_start_with' => 'يجب ألا يبدأ حقل :attribute بأحد القيم التالية: :values.',
 40:     'email' => 'حقل :attribute يجب أن يكون عنوان بريد إلكتروني صالح.',
 41:     'ends_with' => 'يجب أن ينتهي حقل :attribute بأحد القيم التالية: :values.',
 42:     'enum' => 'القيمة المختارة لـ :attribute غير صالحة.',
 43:     'exists' => 'القيمة المحددة في حقل :attribute غير صالحة.',
 44:     'extensions' => 'يجب أن يكون امتداد ملف :attribute واحدًا من التالي: :values.',
 45:     'file' => 'حقل :attribute يجب أن يكون ملفًا.',
 46:     'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',
 47:     'gt' => [
 48:         'array' => 'يجب أن يحتوي حقل :attribute على أكثر من :value عنصرًا.',
 49:         'file' => 'يجب أن تكون مساحة ملف :attribute أكبر من :value كيلوبايت.',
 50:         'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :value.',
 51:         'string' => 'يجب أن يكون طول نص :attribute أكبر من :value حرفًا.',
 52:     ],
 53:     'gte' => [
 54:         'array' => 'يجب أن يحتوي حقل :attribute على :value عنصرًا أو أكثر.',
 55:         'file' => 'يجب أن تكون مساحة ملف :attribute أكبر من أو تساوي :value كيلوبايت.',
 56:         'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من أو تساوي :value.',
 57:         'string' => 'يجب أن يكون طول نص :attribute أكبر من أو يساوي :value حرفًا.',
 58:     ],
 59:     'hex_color' => 'يجب أن يكون حقل :attribute لونًا سداسيًا عشريًا صالحًا.',
 60:     'image' => 'حقل :attribute يجب أن يكون صورة.',
 61:     'in' => 'القيمة المحددة في حقل :attribute غير صالحة.',
 62:     'in_array' => 'حقل :attribute يجب أن يوجد في :other.',
 63:     'integer' => 'حقل :attribute يجب أن يكون عددًا صحيحًا.',
 64:     'ip' => 'حقل :attribute يجب أن يكون عنوان IP صالحًا.',
 65:     'ipv4' => 'حقل :attribute يجب أن يكون عنوان IPv4 صالحًا.',
 66:     'ipv6' => 'حقل :attribute يجب أن يكون عنوان IPv6 صالحًا.',
 67:     'json' => 'حقل :attribute يجب أن يكون نص JSON صالحًا.',
 68:     'list' => 'حقل :attribute يجب أن يكون قائمة.',
 69:     'lowercase' => 'حقل :attribute يجب أن يكون بأحرف صغيرة.',
 70:     'lt' => [
 71:         'array' => 'يجب أن يحتوي حقل :attribute على أقل من :value عنصرًا.',
 72:         'file' => 'يجب أن تكون مساحة ملف :attribute أقل من :value كيلوبايت.',
 73:         'numeric' => 'يجب أن تكون قيمة حقل :attribute أقل من :value.',
 74:         'string' => 'يجب أن يكون طول نص :attribute أقل من :value حرفًا.',
 75:     ],
 76:     'lte' => [
 77:         'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :value عنصرًا.',
 78:         'file' => 'يجب أن تكون مساحة ملف :attribute أقل من أو تساوي :value كيلوبايت.',
 79:         'numeric' => 'يجب أن تكون قيمة حقل :attribute أقل من أو تساوي :value.',
 80:         'string' => 'يجب أن يكون طول نص :attribute أقل من أو يساوي :value حرفًا.',
 81:     ],
 82:     'mac_address' => 'حقل :attribute يجب أن يكون عنوان MAC صالحًا.',
 83:     'max' => [
 84:         'array' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max عنصرًا.',
 85:         'file' => 'يجب ألا تكون مساحة ملف :attribute أكبر من :max كيلوبايت.',
 86:         'numeric' => 'يجب ألا تكون قيمة حقل :attribute أكبر من :max.',
 87:         'string' => 'يجب ألا يكون طول نص :attribute أكبر من :max حرفًا.',
 88:     ],
 89:     'max_digits' => 'يجب ألا يحتوي حقل :attribute على أكثر من :max أرقام.',
 90:     'mimes' => 'حقل :attribute يجب أن يكون ملفًا من نوع: :values.',
 91:     'mimetypes' => 'حقل :attribute يجب أن يكون ملفًا من نوع: :values.',
 92:     'min' => [
 93:         'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عنصرًا.',
 94:         'file' => 'يجب أن تكون مساحة ملف :attribute على الأقل :min كيلوبايت.',
 95:         'numeric' => 'يجب أن تكون قيمة حقل :attribute على الأقل :min.',
 96:         'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حرفًا.',
 97:     ],
 98:     'min_digits' => 'يجب أن يحتوي حقل :attribute على الأقل على :min أرقام.',
 99:     'missing' => 'حقل :attribute يجب أن يكون مفقودًا.',
100:     'missing_if' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :other يساوي :value.',
101:     'missing_unless' => 'حقل :attribute يجب أن يكون مفقودًا ما لم يكن :other يساوي :value.',
102:     'missing_with' => 'حقل :attribute يجب أن يكون مفقودًا عند وجود :values.',
103:     'missing_with_all' => 'حقل :attribute يجب أن يكون مفقودًا عند وجود كل :values.',
104:     'multiple_of' => 'حقل :attribute يجب أن يكون من مضاعفات :value.',
105:     'not_in' => 'القيمة المحددة في حقل :attribute غير صالحة.',
106:     'not_regex' => 'صيغة حقل :attribute غير صالحة.',
107:     'numeric' => 'حقل :attribute يجب أن يكون رقمًا.',
108:     'password' => [
109:         'letters' => 'يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.',
110:         'mixed' => 'يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير واحد على الأقل.',
111:         'numbers' => 'يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.',
112:         'symbols' => 'يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.',
113:         'uncompromised' => 'كلمة المرور :attribute المستخدمة ظهرت في تسريب بيانات. يرجى اختيار :attribute مختلفة.',
114:     ],
115:     'present' => 'حقل :attribute يجب أن يكون موجودًا.',
116:     'present_if' => 'حقل :attribute يجب أن يكون موجودًا عندما يكون :other يساوي :value.',
117:     'present_unless' => 'حقل :attribute يجب أن يكون موجودًا ما لم يكن :other يساوي :value.',
118:     'present_with' => 'حقل :attribute يجب أن يكون موجودًا عند وجود :values.',
119:     'present_with_all' => 'حقل :attribute يجب أن يكون موجودًا عند وجود كل :values.',
120:     'prohibited' => 'حقل :attribute محظور.',
121:     'prohibited_if' => 'حقل :attribute محظور عندما يكون :other يساوي :value.',
122:     'prohibited_unless' => 'حقل :attribute محظور ما لم يكن :other ضمن :values.',
123:     'prohibits' => 'حقل :attribute يمنع وجود :other.',
124:     'regex' => 'صيغة حقل :attribute غير صالحة.',
125:     'required' => 'حقل :attribute مطلوب.',
126:     'required_array_keys' => 'حقل :attribute يجب أن يحتوي على إدخالات لـ: :values.',
127:     'required_if' => 'حقل :attribute مطلوب عندما يكون :other يساوي :value.',
128:     'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
129:     'required_unless' => 'حقل :attribute مطلوب ما لم يكن :other ضمن :values.',
130:     'required_with' => 'حقل :attribute مطلوب عند وجود :values.',
131:     'required_with_all' => 'حقل :attribute مطلوب عند وجود كل :values.',
132:     'required_without' => 'حقل :attribute مطلوب عند عدم وجود :values.',
133:     'required_without_all' => 'حقل :attribute مطلوب عند عدم وجود أي من :values.',
134:     'same' => 'يجب أن يتطابق حقلا :attribute و :other.',
135:     'size' => [
136:         'array' => 'يجب أن يحتوي حقل :attribute على :size عنصرًا.',
137:         'file' => 'يجب أن تكون مساحة ملف :attribute :size كيلوبايت.',
138:         'numeric' => 'يجب أن تكون قيمة حقل :attribute :size.',
139:         'string' => 'يجب أن يكون طول نص :attribute :size حرفًا.',
140:     ],
141:     'starts_with' => 'يجب أن يبدأ حقل :attribute بأحد القيم التالية: :values.',
142:     'string' => 'حقل :attribute يجب أن يكون نصًا.',
143:     'timezone' => 'حقل :attribute يجب أن يكون منطقة زمنية صالحة.',
144:     'unique' => 'قيمة حقل :attribute مُستخدمة من قبل.',
145:     'uploaded' => 'فشل تحميل ملف :attribute.',
146:     'uppercase' => 'حقل :attribute يجب أن يكون بأحرف كبيرة.',
147:     'url' => 'حقل :attribute يجب أن يكون رابطًا صالحًا.',
148:     'ulid' => 'حقل :attribute يجب أن يكون ULID صالحًا.',
149:     'uuid' => 'حقل :attribute يجب أن يكون UUID صالحًا.',
150: 
151:     /*
152:     |--------------------------------------------------------------------------
153:     | سطور لغة التحقق المخصصة
154:     |--------------------------------------------------------------------------
155:     |
156:     | هنا يمكنك تحديد رسائل التحقق المخصصة للسمات باستخدام
157:     | الاصطلاح "attribute.rule" لتسمية السطور. هذا يجعل من السهل
158:     | تحديد سطر لغة مخصص معين لقاعدة سمة معينة.
159:     |
160:     */
161: 
162:     'custom' => [
163:         'attribute-name' => [
164:             'rule-name' => 'custom-message',
165:         ],
166:     ],
167: 
168:     /*
169:     |--------------------------------------------------------------------------
170:     | سمات التحقق المخصصة
171:     |--------------------------------------------------------------------------
172:     |
173:     | سطور اللغة التالية تستخدم لتبديل العنصر النائب للسمة
174:     | بشيء أكثر قابلية للقراءة مثل "عنوان البريد الإلكتروني" بدلاً
175:     | من "email". هذا ببساطة يساعدنا على جعل رسالتنا أكثر تعبيرًا.
176:     |
177:     */
178: 
179:     'attributes' => [
180:         'name' => 'الاسم',
181:         'min_price' => 'السعر الأدنى',
182:         'max_price' => 'السعر الأعلى',
183:         'minPrice' => 'السعر الأدنى',
184:         'maxPrice' => 'السعر الأعلى',
185:         'categoryId' => 'القسم',
186:         'customerCityId' => 'مدينتك',
187:         'description' => 'الوصف',
188:         'citiesIdsScope' => 'المدن',
189:         'brandId' => 'الماركة',
190:         'images' => 'الصور',
191:     ],
192: 
193: ];
```

## File: lang/en/auth.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Authentication Language Lines
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | The following language lines are used during authentication for various
11:     | messages that we need to display to the user. You are free to modify
12:     | these language lines according to your application's requirements.
13:     |
14:     */
15: 
16:     'failed' => 'These credentials do not match our records.',
17:     'password' => 'The provided password is incorrect.',
18:     'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
19: 
20: ];
```

## File: lang/en/exceptions.php
```php
1: <?php
2: 
3: return [
4:     'not_found_http_exception_404' => 'The requested item was not found.',
5:     'authentication_exception_401' => 'You are not authorized to access.',
6:     'forbidden_exception_403' => 'You do not have permission to perform this action.',
7:     'validation_exception_422' => 'The entered data is invalid.',
8:     'internal_server_error_500' => 'An unexpected error occurred, please try again later.',
9: ];
```

## File: lang/en/messages.php
```php
1: <?php
2: 
3: return [
4:     'data_fetched_successfully' => 'data fetched successfully',
5: ];
```

## File: lang/en/pagination.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Pagination Language Lines
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | The following language lines are used by the paginator library to build
11:     | the simple pagination links. You are free to change them to anything
12:     | you want to customize your views to better match your application.
13:     |
14:     */
15: 
16:     'previous' => '&laquo; Previous',
17:     'next' => 'Next &raquo;',
18: 
19: ];
```

## File: lang/en/passwords.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Password Reset Language Lines
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | The following language lines are the default lines which match reasons
11:     | that are given by the password broker for a password update attempt
12:     | outcome such as failure due to an invalid password / reset token.
13:     |
14:     */
15: 
16:     'reset' => 'Your password has been reset.',
17:     'sent' => 'We have emailed your password reset link.',
18:     'throttled' => 'Please wait before retrying.',
19:     'token' => 'This password reset token is invalid.',
20:     'user' => "We can't find a user with that email address.",
21: 
22: ];
```

## File: lang/en/validation.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     'accepted' => 'The :attribute field must be accepted.',
  6:     'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
  7:     'active_url' => 'The :attribute field must be a valid URL.',
  8:     'after' => 'The :attribute field must be a date after :date.',
  9:     'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
 10:     'alpha' => 'The :attribute field must only contain letters.',
 11:     'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
 12:     'alpha_num' => 'The :attribute field must only contain letters and numbers.',
 13:     'any_of' => 'The :attribute field is invalid.',
 14:     'array' => 'The :attribute field must be an array.',
 15:     'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
 16:     'before' => 'The :attribute field must be a date before :date.',
 17:     'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
 18:     'between' => [
 19:         'array' => 'The :attribute field must have between :min and :max items.',
 20:         'file' => 'The :attribute field must be between :min and :max kilobytes.',
 21:         'numeric' => 'The :attribute field must be between :min and :max.',
 22:         'string' => 'The :attribute field must be between :min and :max characters.',
 23:     ],
 24:     'boolean' => 'The :attribute field must be true or false.',
 25:     'can' => 'The :attribute field contains an unauthorized value.',
 26:     'confirmed' => 'The :attribute field confirmation does not match.',
 27:     'contains' => 'The :attribute field is missing a required value.',
 28:     'current_password' => 'The password is incorrect.',
 29:     'date' => 'The :attribute field must be a valid date.',
 30:     'date_equals' => 'The :attribute field must be a date equal to :date.',
 31:     'date_format' => 'The :attribute field must match the format :format.',
 32:     'decimal' => 'The :attribute field must have :decimal decimal places.',
 33:     'declined' => 'The :attribute field must be declined.',
 34:     'declined_if' => 'The :attribute field must be declined when :other is :value.',
 35:     'different' => 'The :attribute field and :other must be different.',
 36:     'digits' => 'The :attribute field must be :digits digits.',
 37:     'digits_between' => 'The :attribute field must be between :min and :max digits.',
 38:     'dimensions' => 'The :attribute field has invalid image dimensions.',
 39:     'distinct' => 'The :attribute field has a duplicate value.',
 40:     'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
 41:     'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
 42:     'email' => 'The :attribute field must be a valid email address.',
 43:     'ends_with' => 'The :attribute field must end with one of the following: :values.',
 44:     'enum' => 'The selected :attribute is invalid.',
 45:     'exists' => 'The selected :attribute is invalid.',
 46:     'extensions' => 'The :attribute field must have one of the following extensions: :values.',
 47:     'file' => 'The :attribute field must be a file.',
 48:     'filled' => 'The :attribute field must have a value.',
 49:     'gt' => [
 50:         'array' => 'The :attribute field must have more than :value items.',
 51:         'file' => 'The :attribute field must be greater than :value kilobytes.',
 52:         'numeric' => 'The :attribute field must be greater than :value.',
 53:         'string' => 'The :attribute field must be greater than :value characters.',
 54:     ],
 55:     'gte' => [
 56:         'array' => 'The :attribute field must have :value items or more.',
 57:         'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
 58:         'numeric' => 'The :attribute field must be greater than or equal to :value.',
 59:         'string' => 'The :attribute field must be greater than or equal to :value characters.',
 60:     ],
 61:     'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
 62:     'image' => 'The :attribute field must be an image.',
 63:     'in' => 'The selected :attribute is invalid.',
 64:     'in_array' => 'The :attribute field must exist in :other.',
 65:     'in_array_keys' => 'The :attribute field must contain at least one of the following keys: :values.',
 66:     'integer' => 'The :attribute field must be an integer.',
 67:     'ip' => 'The :attribute field must be a valid IP address.',
 68:     'ipv4' => 'The :attribute field must be a valid IPv4 address.',
 69:     'ipv6' => 'The :attribute field must be a valid IPv6 address.',
 70:     'json' => 'The :attribute field must be a valid JSON string.',
 71:     'list' => 'The :attribute field must be a list.',
 72:     'lowercase' => 'The :attribute field must be lowercase.',
 73:     'lt' => [
 74:         'array' => 'The :attribute field must have less than :value items.',
 75:         'file' => 'The :attribute field must be less than :value kilobytes.',
 76:         'numeric' => 'The :attribute field must be less than :value.',
 77:         'string' => 'The :attribute field must be less than :value characters.',
 78:     ],
 79:     'lte' => [
 80:         'array' => 'The :attribute field must not have more than :value items.',
 81:         'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
 82:         'numeric' => 'The :attribute field must be less than or equal to :value.',
 83:         'string' => 'The :attribute field must be less than or equal to :value characters.',
 84:     ],
 85:     'mac_address' => 'The :attribute field must be a valid MAC address.',
 86:     'max' => [
 87:         'array' => 'The :attribute field must not have more than :max items.',
 88:         'file' => 'The :attribute field must not be greater than :max kilobytes.',
 89:         'numeric' => 'The :attribute field must not be greater than :max.',
 90:         'string' => 'The :attribute field must not be greater than :max characters.',
 91:     ],
 92:     'max_digits' => 'The :attribute field must not have more than :max digits.',
 93:     'mimes' => 'The :attribute field must be a file of type: :values.',
 94:     'mimetypes' => 'The :attribute field must be a file of type: :values.',
 95:     'min' => [
 96:         'array' => 'The :attribute field must have at least :min items.',
 97:         'file' => 'The :attribute field must be at least :min kilobytes.',
 98:         'numeric' => 'The :attribute field must be at least :min.',
 99:         'string' => 'The :attribute field must be at least :min characters.',
100:     ],
101:     'min_digits' => 'The :attribute field must have at least :min digits.',
102:     'missing' => 'The :attribute field must be missing.',
103:     'missing_if' => 'The :attribute field must be missing when :other is :value.',
104:     'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
105:     'missing_with' => 'The :attribute field must be missing when :values is present.',
106:     'missing_with_all' => 'The :attribute field must be missing when :values are present.',
107:     'multiple_of' => 'The :attribute field must be a multiple of :value.',
108:     'not_in' => 'The selected :attribute is invalid.',
109:     'not_regex' => 'The :attribute field format is invalid.',
110:     'numeric' => 'The :attribute field must be a number.',
111:     'password' => [
112:         'letters' => 'The :attribute field must contain at least one letter.',
113:         'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
114:         'numbers' => 'The :attribute field must contain at least one number.',
115:         'symbols' => 'The :attribute field must contain at least one symbol.',
116:         'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
117:     ],
118:     'present' => 'The :attribute field must be present.',
119:     'present_if' => 'The :attribute field must be present when :other is :value.',
120:     'present_unless' => 'The :attribute field must be present unless :other is :value.',
121:     'present_with' => 'The :attribute field must be present when :values is present.',
122:     'present_with_all' => 'The :attribute field must be present when :values are present.',
123:     'prohibited' => 'The :attribute field is prohibited.',
124:     'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
125:     'prohibited_if_accepted' => 'The :attribute field is prohibited when :other is accepted.',
126:     'prohibited_if_declined' => 'The :attribute field is prohibited when :other is declined.',
127:     'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
128:     'prohibits' => 'The :attribute field prohibits :other from being present.',
129:     'regex' => 'The :attribute field format is invalid.',
130:     'required' => 'The :attribute field is required.',
131:     'required_array_keys' => 'The :attribute field must contain entries for: :values.',
132:     'required_if' => 'The :attribute field is required when :other is :value.',
133:     'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
134:     'required_if_declined' => 'The :attribute field is required when :other is declined.',
135:     'required_unless' => 'The :attribute field is required unless :other is in :values.',
136:     'required_with' => 'The :attribute field is required when :values is present.',
137:     'required_with_all' => 'The :attribute field is required when :values are present.',
138:     'required_without' => 'The :attribute field is required when :values is not present.',
139:     'required_without_all' => 'The :attribute field is required when none of :values are present.',
140:     'same' => 'The :attribute field must match :other.',
141:     'size' => [
142:         'array' => 'The :attribute field must contain :size items.',
143:         'file' => 'The :attribute field must be :size kilobytes.',
144:         'numeric' => 'The :attribute field must be :size.',
145:         'string' => 'The :attribute field must be :size characters.',
146:     ],
147:     'starts_with' => 'The :attribute field must start with one of the following: :values.',
148:     'string' => 'The :attribute field must be a string.',
149:     'timezone' => 'The :attribute field must be a valid timezone.',
150:     'unique' => 'The :attribute has already been taken.',
151:     'uploaded' => 'The :attribute failed to upload.',
152:     'uppercase' => 'The :attribute field must be uppercase.',
153:     'url' => 'The :attribute field must be a valid URL.',
154:     'ulid' => 'The :attribute field must be a valid ULID.',
155:     'uuid' => 'The :attribute field must be a valid UUID.',
156: 
157:     /*
158:     |--------------------------------------------------------------------------
159:     | Custom Validation Language Lines
160:     |--------------------------------------------------------------------------
161:     |
162:     | Here you may specify custom validation messages for attributes using the
163:     | convention "attribute.rule" to name the lines. This makes it quick to
164:     | specify a specific custom language line for a given attribute rule.
165:     |
166:     */
167: 
168:     'custom' => [
169:         'attribute-name' => [
170:             'rule-name' => 'custom-message',
171:         ],
172:     ],
173: 
174:     /*
175:     |--------------------------------------------------------------------------
176:     | Custom Validation Attributes
177:     |--------------------------------------------------------------------------
178:     |
179:     | The following language lines are used to swap our attribute placeholder
180:     | with something more reader friendly such as "E-Mail Address" instead
181:     | of "email". This simply helps us make our message more expressive.
182:     |
183:     */
184: 
185:     'attributes' => [
186:         'name' => 'name',
187:     ],
188: 
189: ];
```

## File: package.json
```json
 1: {
 2:     "$schema": "https://json.schemastore.org/package.json",
 3:     "private": true,
 4:     "type": "module",
 5:     "scripts": {
 6:         "build": "vite build",
 7:         "dev": "vite"
 8:     },
 9:     "devDependencies": {
10:         "@tailwindcss/forms": "^0.5.2",
11:         "@tailwindcss/vite": "^4.0.0",
12:         "alpinejs": "^3.4.2",
13:         "autoprefixer": "^10.4.2",
14:         "axios": "^1.8.2",
15:         "concurrently": "^9.0.1",
16:         "laravel-vite-plugin": "^2.0.0",
17:         "postcss": "^8.4.31",
18:         "tailwindcss": "^3.1.0",
19:         "vite": "^7.0.4"
20:     }
21: }
```

## File: phpunit.xml
```xml
 1: <?xml version="1.0" encoding="UTF-8"?>
 2: <phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
 3:          xsi:noNamespaceSchemaLocation="vendor/phpunit/phpunit/phpunit.xsd"
 4:          bootstrap="vendor/autoload.php"
 5:          colors="true"
 6: >
 7:     <testsuites>
 8:         <testsuite name="Unit">
 9:             <directory>tests/Unit</directory>
10:         </testsuite>
11:         <testsuite name="Feature">
12:             <directory>tests/Feature</directory>
13:         </testsuite>
14:     </testsuites>
15:     <source>
16:         <include>
17:             <directory>app</directory>
18:         </include>
19:     </source>
20:     <php>
21:         <env name="APP_ENV" value="testing"/>
22:         <env name="APP_MAINTENANCE_DRIVER" value="file"/>
23:         <env name="BCRYPT_ROUNDS" value="4"/>
24:         <env name="CACHE_STORE" value="array"/>
25:         <env name="DB_CONNECTION" value="sqlite"/>
26:         <env name="DB_DATABASE" value=":memory:"/>
27:         <env name="MAIL_MAILER" value="array"/>
28:         <env name="QUEUE_CONNECTION" value="sync"/>
29:         <env name="SESSION_DRIVER" value="array"/>
30:         <env name="PULSE_ENABLED" value="false"/>
31:         <env name="TELESCOPE_ENABLED" value="false"/>
32:         <env name="NIGHTWATCH_ENABLED" value="false"/>
33:     </php>
34: </phpunit>
```

## File: postcss.config.js
```javascript
1: export default {
2:     plugins: {
3:         tailwindcss: {},
4:         autoprefixer: {},
5:     },
6: };
```

## File: public/.htaccess
```
 1: <IfModule mod_rewrite.c>
 2:     <IfModule mod_negotiation.c>
 3:         Options -MultiViews -Indexes
 4:     </IfModule>
 5: 
 6:     RewriteEngine On
 7: 
 8:     # Handle Authorization Header
 9:     RewriteCond %{HTTP:Authorization} .
10:     RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]
11: 
12:     # Handle X-XSRF-Token Header
13:     RewriteCond %{HTTP:x-xsrf-token} .
14:     RewriteRule .* - [E=HTTP_X_XSRF_TOKEN:%{HTTP:X-XSRF-Token}]
15: 
16:     # Redirect Trailing Slashes If Not A Folder...
17:     RewriteCond %{REQUEST_FILENAME} !-d
18:     RewriteCond %{REQUEST_URI} (.+)/$
19:     RewriteRule ^ %1 [L,R=301]
20: 
21:     # Send Requests To Front Controller...
22:     RewriteCond %{REQUEST_FILENAME} !-d
23:     RewriteCond %{REQUEST_FILENAME} !-f
24:     RewriteRule ^ index.php [L]
25: </IfModule>
```

## File: public/index.php
```php
 1: <?php
 2: 
 3: use Illuminate\Foundation\Application;
 4: use Illuminate\Http\Request;
 5: 
 6: define('LARAVEL_START', microtime(true));
 7: 
 8: // Determine if the application is in maintenance mode...
 9: if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
10:     require $maintenance;
11: }
12: 
13: // Register the Composer autoloader...
14: require __DIR__.'/../vendor/autoload.php';
15: 
16: // Bootstrap Laravel and handle the request...
17: /** @var Application $app */
18: $app = require_once __DIR__.'/../bootstrap/app.php';
19: 
20: $app->handleRequest(Request::capture());
```

## File: public/robots.txt
```
1: User-agent: *
2: Disallow:
```

## File: README.md
```markdown
 1: <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
 2: 
 3: <p align="center">
 4: <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
 5: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
 6: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
 7: <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
 8: </p>
 9: 
10: ## About Laravel
11: 
12: Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:
13: 
14: - [Simple, fast routing engine](https://laravel.com/docs/routing).
15: - [Powerful dependency injection container](https://laravel.com/docs/container).
16: - Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
17: - Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
18: - Database agnostic [schema migrations](https://laravel.com/docs/migrations).
19: - [Robust background job processing](https://laravel.com/docs/queues).
20: - [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
21: 
22: Laravel is accessible, powerful, and provides tools required for large, robust applications.
23: 
24: ## Learning Laravel
25: 
26: Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.
27: 
28: You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.
29: 
30: If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
31: 
32: ## Laravel Sponsors
33: 
34: We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).
35: 
36: ### Premium Partners
37: 
38: - **[Vehikl](https://vehikl.com)**
39: - **[Tighten Co.](https://tighten.co)**
40: - **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
41: - **[64 Robots](https://64robots.com)**
42: - **[Curotec](https://www.curotec.com/services/technologies/laravel)**
43: - **[DevSquad](https://devsquad.com/hire-laravel-developers)**
44: - **[Redberry](https://redberry.international/laravel-development)**
45: - **[Active Logic](https://activelogic.com)**
46: 
47: ## Contributing
48: 
49: Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).
50: 
51: ## Code of Conduct
52: 
53: In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
54: 
55: ## Security Vulnerabilities
56: 
57: If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
58: 
59: ## License
60: 
61: The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
```

## File: resources/css/app.css
```css
1: @tailwind base;
2: @tailwind components;
3: @tailwind utilities;
```

## File: resources/js/app.js
```javascript
1: import './bootstrap';
2: 
3: import Alpine from 'alpinejs';
4: 
5: window.Alpine = Alpine;
6: 
7: Alpine.start();
```

## File: resources/js/bootstrap.js
```javascript
 1: import axios from 'axios';
 2: window.axios = axios;
 3: 
 4: window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
 5: 
 6: /**
 7:  * Echo exposes an expressive API for subscribing to channels and listening
 8:  * for events that are broadcast by Laravel. Echo and event broadcasting
 9:  * allow your team to quickly build robust real-time web applications.
10:  */
11: 
12: //import './echo';
```

## File: resources/js/echo.js
```javascript
 1: import Echo from 'laravel-echo';
 2: 
 3: import Pusher from 'pusher-js';
 4: window.Pusher = Pusher;
 5: 
 6: window.Echo = new Echo({
 7:     broadcaster: 'reverb',
 8:     key: import.meta.env.VITE_REVERB_APP_KEY,
 9:     wsHost: import.meta.env.VITE_REVERB_HOST,
10:     wsPort: import.meta.env.VITE_REVERB_PORT ?? 80,
11:     wssPort: import.meta.env.VITE_REVERB_PORT ?? 443,
12:     forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
13:     enabledTransports: ['ws', 'wss'],
14: });
```

## File: resources/views/auth/confirm-password.blade.php
```php
 1: <x-guest-layout>
 2:     <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
 3:         {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
 4:     </div>
 5: 
 6:     <form method="POST" action="{{ route('password.confirm') }}">
 7:         @csrf
 8: 
 9:         <!-- Password -->
10:         <div>
11:             <x-input-label for="password" :value="__('Password')" />
12: 
13:             <x-text-input id="password" class="block mt-1 w-full"
14:                             type="password"
15:                             name="password"
16:                             required autocomplete="current-password" />
17: 
18:             <x-input-error :messages="$errors->get('password')" class="mt-2" />
19:         </div>
20: 
21:         <div class="flex justify-end mt-4">
22:             <x-primary-button>
23:                 {{ __('Confirm') }}
24:             </x-primary-button>
25:         </div>
26:     </form>
27: </x-guest-layout>
```

## File: resources/views/auth/forgot-password.blade.php
```php
 1: <x-guest-layout>
 2:     <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
 3:         {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
 4:     </div>
 5: 
 6:     <!-- Session Status -->
 7:     <x-auth-session-status class="mb-4" :status="session('status')" />
 8: 
 9:     <form method="POST" action="{{ route('password.email') }}">
10:         @csrf
11: 
12:         <!-- Email Address -->
13:         <div>
14:             <x-input-label for="email" :value="__('Email')" />
15:             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
16:             <x-input-error :messages="$errors->get('email')" class="mt-2" />
17:         </div>
18: 
19:         <div class="flex items-center justify-end mt-4">
20:             <x-primary-button>
21:                 {{ __('Email Password Reset Link') }}
22:             </x-primary-button>
23:         </div>
24:     </form>
25: </x-guest-layout>
```

## File: resources/views/auth/login.blade.php
```php
 1: <x-guest-layout>
 2:     <!-- Session Status -->
 3:     <x-auth-session-status class="mb-4" :status="session('status')" />
 4: 
 5:     <form method="POST" action="{{ route('login') }}">
 6:         @csrf
 7: 
 8:         <!-- Email Address -->
 9:         <div>
10:             <x-input-label for="email" :value="__('البريد الإلكتروني')" />
11:             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
12:                 autofocus autocomplete="username" />
13:             <x-input-error :messages="$errors->get('email')" class="mt-2" />
14:         </div>
15: 
16:         <!-- Password -->
17:         {{-- <div class="mt-4">
18:             <x-input-label for="password" :value="__('كلمة المرور')" />
19: 
20:             <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
21:                 autocomplete="current-password" />
22: 
23:             <x-input-error :messages="$errors->get('password')" class="mt-2" />
24:         </div> --}}
25: 
26:         <div class="mt-4 relative">
27:             <x-input-label for="password" :value="__('كلمة المرور')" />
28: 
29:             <div class="flex items-center">
30:                 <x-text-input id="password" class="block mt-1 w-full pr-10" style="padding-right: 20px;"
31:                     type="password" name="password" required autocomplete="current-password" />
32:                 <!-- Eye Icon Button -->
33:                 <button type="button" onclick="togglePassword()"
34:                     class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500">
35:                     <!-- SVG Eye Icon -->
36:                     <svg id="eyeIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
37:                         viewBox="0 0 24 24" stroke="currentColor">
38:                         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
39:                             d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6 0c0 3.866-3.582 7-8 7s-8-3.134-8-7 3.582-7 8-7 8 3.134 8 7z" />
40:                     </svg>
41:                 </button>
42:             </div>
43: 
44:             <x-input-error :messages="$errors->get('password')" class="mt-2" />
45:         </div>
46: 
47:         <!-- Remember Me -->
48:         <div class="block mt-4">
49:             <label for="remember_me" class="inline-flex items-center">
50:                 <input id="remember_me" type="checkbox"
51:                     class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 text-black"
52:                     name="remember">
53:                 <span class="ms-2 text-sm text-gray-600">{{ __('تذكرني') }}</span>
54:             </label>
55:         </div>
56: 
57:         <div class="flex items-center justify-end mt-4">
58:             <x-primary-button class="ms-3">
59:                 {{ __('تسجيل الدخول') }}
60:             </x-primary-button>
61:         </div>
62:     </form>
63: 
64:     @push('my-java-script')
65:         <script>
66:             function togglePassword() {
67:                 const input = document.getElementById('password');
68:                 const icon = document.getElementById('eyeIcon');
69:                 if (input.type === 'password') {
70:                     input.type = 'text';
71:                     icon.setAttribute('stroke', '#6366f1'); // Optional: change color when visible
72:                 } else {
73:                     input.type = 'password';
74:                     icon.setAttribute('stroke', 'currentColor');
75:                 }
76:             }
77:         </script>
78:     @endpush
79: </x-guest-layout>
```

## File: resources/views/auth/register.blade.php
```php
 1: <x-guest-layout>
 2:     <form method="POST" action="{{ route('register') }}">
 3:         @csrf
 4: 
 5:         <!-- Name -->
 6:         <div>
 7:             <x-input-label for="name" :value="__('Name')" />
 8:             <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
 9:                 autofocus autocomplete="name" />
10:             <x-input-error :messages="$errors->get('name')" class="mt-2" />
11:         </div>
12: 
13:         <!-- Email Address -->
14:         <div class="mt-4">
15:             <x-input-label for="email" :value="__('Email')" />
16:             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
17:                 required autocomplete="username" />
18:             <x-input-error :messages="$errors->get('email')" class="mt-2" />
19:         </div>
20: 
21:         <!-- Password -->
22:         <div class="mt-4">
23:             <x-input-label for="password" :value="__('Password')" />
24: 
25:             <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
26:                 autocomplete="new-password" />
27: 
28:             <x-input-error :messages="$errors->get('password')" class="mt-2" />
29:         </div>
30: 
31:         <!-- Confirm Password -->
32:         <div class="mt-4">
33:             <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
34: 
35:             <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
36:                 name="password_confirmation" required autocomplete="new-password" />
37: 
38:             <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
39:         </div>
40: 
41:         <div class="flex items-center justify-end mt-4">
42:             <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
43:                 href="{{ route('login') }}">
44:                 {{ __('Already registered?') }}
45:             </a>
46: 
47:             <x-primary-button class="ms-4">
48:                 {{ __('Register') }}
49:             </x-primary-button>
50:         </div>
51:     </form>
52: </x-guest-layout>
```

## File: resources/views/auth/reset-password.blade.php
```php
 1: <x-guest-layout>
 2:     <form method="POST" action="{{ route('password.store') }}">
 3:         @csrf
 4: 
 5:         <!-- Password Reset Token -->
 6:         <input type="hidden" name="token" value="{{ $request->route('token') }}">
 7: 
 8:         <!-- Email Address -->
 9:         <div>
10:             <x-input-label for="email" :value="__('Email')" />
11:             <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
12:             <x-input-error :messages="$errors->get('email')" class="mt-2" />
13:         </div>
14: 
15:         <!-- Password -->
16:         <div class="mt-4">
17:             <x-input-label for="password" :value="__('Password')" />
18:             <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
19:             <x-input-error :messages="$errors->get('password')" class="mt-2" />
20:         </div>
21: 
22:         <!-- Confirm Password -->
23:         <div class="mt-4">
24:             <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
25: 
26:             <x-text-input id="password_confirmation" class="block mt-1 w-full"
27:                                 type="password"
28:                                 name="password_confirmation" required autocomplete="new-password" />
29: 
30:             <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
31:         </div>
32: 
33:         <div class="flex items-center justify-end mt-4">
34:             <x-primary-button>
35:                 {{ __('Reset Password') }}
36:             </x-primary-button>
37:         </div>
38:     </form>
39: </x-guest-layout>
```

## File: resources/views/auth/verify-email.blade.php
```php
 1: <x-guest-layout>
 2:     <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
 3:         {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
 4:     </div>
 5: 
 6:     @if (session('status') == 'verification-link-sent')
 7:         <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
 8:             {{ __('A new verification link has been sent to the email address you provided during registration.') }}
 9:         </div>
10:     @endif
11: 
12:     <div class="mt-4 flex items-center justify-between">
13:         <form method="POST" action="{{ route('verification.send') }}">
14:             @csrf
15: 
16:             <div>
17:                 <x-primary-button>
18:                     {{ __('Resend Verification Email') }}
19:                 </x-primary-button>
20:             </div>
21:         </form>
22: 
23:         <form method="POST" action="{{ route('logout') }}">
24:             @csrf
25: 
26:             <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
27:                 {{ __('Log Out') }}
28:             </button>
29:         </form>
30:     </div>
31: </x-guest-layout>
```

## File: resources/views/components/application-logo.blade.php
```php
1: <svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
2:     <path d="M305.8 81.125C305.77 80.995 305.69 80.885 305.65 80.755C305.56 80.525 305.49 80.285 305.37 80.075C305.29 79.935 305.17 79.815 305.07 79.685C304.94 79.515 304.83 79.325 304.68 79.175C304.55 79.045 304.39 78.955 304.25 78.845C304.09 78.715 303.95 78.575 303.77 78.475L251.32 48.275C249.97 47.495 248.31 47.495 246.96 48.275L194.51 78.475C194.33 78.575 194.19 78.725 194.03 78.845C193.89 78.955 193.73 79.045 193.6 79.175C193.45 79.325 193.34 79.515 193.21 79.685C193.11 79.815 192.99 79.935 192.91 80.075C192.79 80.285 192.71 80.525 192.63 80.755C192.58 80.875 192.51 80.995 192.48 81.125C192.38 81.495 192.33 81.875 192.33 82.265V139.625L148.62 164.795V52.575C148.62 52.185 148.57 51.805 148.47 51.435C148.44 51.305 148.36 51.195 148.32 51.065C148.23 50.835 148.16 50.595 148.04 50.385C147.96 50.245 147.84 50.125 147.74 49.995C147.61 49.825 147.5 49.635 147.35 49.485C147.22 49.355 147.06 49.265 146.92 49.155C146.76 49.025 146.62 48.885 146.44 48.785L93.99 18.585C92.64 17.805 90.98 17.805 89.63 18.585L37.18 48.785C37 48.885 36.86 49.035 36.7 49.155C36.56 49.265 36.4 49.355 36.27 49.485C36.12 49.635 36.01 49.825 35.88 49.995C35.78 50.125 35.66 50.245 35.58 50.385C35.46 50.595 35.38 50.835 35.3 51.065C35.25 51.185 35.18 51.305 35.15 51.435C35.05 51.805 35 52.185 35 52.575V232.235C35 233.795 35.84 235.245 37.19 236.025L142.1 296.425C142.33 296.555 142.58 296.635 142.82 296.725C142.93 296.765 143.04 296.835 143.16 296.865C143.53 296.965 143.9 297.015 144.28 297.015C144.66 297.015 145.03 296.965 145.4 296.865C145.5 296.835 145.59 296.775 145.69 296.745C145.95 296.655 146.21 296.565 146.45 296.435L251.36 236.035C252.72 235.255 253.55 233.815 253.55 232.245V174.885L303.81 145.945C305.17 145.165 306 143.725 306 142.155V82.265C305.95 81.875 305.89 81.495 305.8 81.125ZM144.2 227.205L100.57 202.515L146.39 176.135L196.66 147.195L240.33 172.335L208.29 190.625L144.2 227.205ZM244.75 114.995V164.795L226.39 154.225L201.03 139.625V89.825L219.39 100.395L244.75 114.995ZM249.12 57.105L292.81 82.265L249.12 107.425L205.43 82.265L249.12 57.105ZM114.49 184.425L96.13 194.995V85.305L121.49 70.705L139.85 60.135V169.815L114.49 184.425ZM91.76 27.425L135.45 52.585L91.76 77.745L48.07 52.585L91.76 27.425ZM43.67 60.135L62.03 70.705L87.39 85.305V202.545V202.555V202.565C87.39 202.735 87.44 202.895 87.46 203.055C87.49 203.265 87.49 203.485 87.55 203.695V203.705C87.6 203.875 87.69 204.035 87.76 204.195C87.84 204.375 87.89 204.575 87.99 204.745C87.99 204.745 87.99 204.755 88 204.755C88.09 204.905 88.22 205.035 88.33 205.175C88.45 205.335 88.55 205.495 88.69 205.635L88.7 205.645C88.82 205.765 88.98 205.855 89.12 205.965C89.28 206.085 89.42 206.225 89.59 206.325C89.6 206.325 89.6 206.325 89.61 206.335C89.62 206.335 89.62 206.345 89.63 206.345L139.87 234.775V285.065L43.67 229.705V60.135ZM244.75 229.705L148.58 285.075V234.775L219.8 194.115L244.75 179.875V229.705ZM297.2 139.625L253.49 164.795V114.995L278.85 100.395L297.21 89.825V139.625H297.2Z"/>
3: </svg>
```

## File: resources/views/components/auth-session-status.blade.php
```php
1: @props(['status'])
2: 
3: @if ($status)
4:     <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
5:         {{ $status }}
6:     </div>
7: @endif
```

## File: resources/views/components/custom/input.blade.php
```php
1: 
```

## File: resources/views/components/custom/label-input.blade.php
```php
1: @props(['label', 'labelRequired' => false, 'name', 'type' => 'text'])
2: 
3: <label for="{{ $name ?? $slot }}" class="form-label"> {{ $label ?? $slot }}<span class="text-danger">
4:         {{ $labelRequired ? ' * ' : '' }} </span></label>
5: <input type="{{ $type }}" name="{{ $name ?? $slot }}" id="{{ $name ?? $slot }}" {!! $attributes->merge(['class' => 'form-control']) !!}>
6: <span class="error" id="{{ $name . '_err' ?? $slot }}"></span>
```

## File: resources/views/components/custom/label-textarea.blade.php
```php
1: @props(['label', 'labelRequired' => false, 'name', 'rows' => 3])
2: 
3: <label for="{{ $name ?? $slot }}" class="form-label mt-2"> {{ $label ?? $slot }}<span class="text-danger">
4:         {{ $labelRequired ? '*' : '' }} </span></label>
5: <textarea name="{{ $name ?? $slot }}" id="{{ $name ?? $slot }}" class="form-control" rows="{{ $rows }}"></textarea>
6: <span class="error" id="{{ $name . '_err' ?? $slot }}"> </span>
```

## File: resources/views/components/custom/label.blade.php
```php
1: @props(['label', 'labelRequired' => false, 'name'])
2: 
3: <label for="{{ $name ?? $slot }}" class="form-label"> {{ $label ?? $slot }}<span class="text-danger">
4:         {{ $labelRequired ? ' * ' : '' }} </span></label>
```

## File: resources/views/components/danger-button.blade.php
```php
1: <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
2:     {{ $slot }}
3: </button>
```

## File: resources/views/components/dropdown-link.blade.php
```php
1: <a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out']) }}>{{ $slot }}</a>
```

## File: resources/views/components/dropdown.blade.php
```php
 1: @props(['align' => 'right', 'width' => '48', 'contentClasses' => 'py-1 bg-white'])
 2: 
 3: @php
 4: $alignmentClasses = match ($align) {
 5:     'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
 6:     'top' => 'origin-top',
 7:     default => 'ltr:origin-top-right rtl:origin-top-left end-0',
 8: };
 9: 
10: $width = match ($width) {
11:     '48' => 'w-48',
12:     default => $width,
13: };
14: @endphp
15: 
16: <div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
17:     <div @click="open = ! open">
18:         {{ $trigger }}
19:     </div>
20: 
21:     <div x-show="open"
22:             x-transition:enter="transition ease-out duration-200"
23:             x-transition:enter-start="opacity-0 scale-95"
24:             x-transition:enter-end="opacity-100 scale-100"
25:             x-transition:leave="transition ease-in duration-75"
26:             x-transition:leave-start="opacity-100 scale-100"
27:             x-transition:leave-end="opacity-0 scale-95"
28:             class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{ $alignmentClasses }}"
29:             style="display: none;"
30:             @click="open = false">
31:         <div class="rounded-md ring-1 ring-black ring-opacity-5 {{ $contentClasses }}">
32:             {{ $content }}
33:         </div>
34:     </div>
35: </div>
```

## File: resources/views/components/input-error.blade.php
```php
1: @props(['messages'])
2: 
3: @if ($messages)
4:     <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
5:         @foreach ((array) $messages as $message)
6:             <li>{{ $message }}</li>
7:         @endforeach
8:     </ul>
9: @endif
```

## File: resources/views/components/input-label.blade.php
```php
1: @props(['value'])
2: 
3: <label {{ $attributes->merge(['class' => 'block font-medium text-sm text-black']) }}>
4:     {{ $value ?? $slot }}
5: </label>
```

## File: resources/views/components/modal.blade.php
```php
 1: @props([
 2:     'name',
 3:     'show' => false,
 4:     'maxWidth' => '2xl'
 5: ])
 6: 
 7: @php
 8: $maxWidth = [
 9:     'sm' => 'sm:max-w-sm',
10:     'md' => 'sm:max-w-md',
11:     'lg' => 'sm:max-w-lg',
12:     'xl' => 'sm:max-w-xl',
13:     '2xl' => 'sm:max-w-2xl',
14: ][$maxWidth];
15: @endphp
16: 
17: <div
18:     x-data="{
19:         show: @js($show),
20:         focusables() {
21:             // All focusable element types...
22:             let selector = 'a, button, input:not([type=\'hidden\']), textarea, select, details, [tabindex]:not([tabindex=\'-1\'])'
23:             return [...$el.querySelectorAll(selector)]
24:                 // All non-disabled elements...
25:                 .filter(el => ! el.hasAttribute('disabled'))
26:         },
27:         firstFocusable() { return this.focusables()[0] },
28:         lastFocusable() { return this.focusables().slice(-1)[0] },
29:         nextFocusable() { return this.focusables()[this.nextFocusableIndex()] || this.firstFocusable() },
30:         prevFocusable() { return this.focusables()[this.prevFocusableIndex()] || this.lastFocusable() },
31:         nextFocusableIndex() { return (this.focusables().indexOf(document.activeElement) + 1) % (this.focusables().length + 1) },
32:         prevFocusableIndex() { return Math.max(0, this.focusables().indexOf(document.activeElement)) -1 },
33:     }"
34:     x-init="$watch('show', value => {
35:         if (value) {
36:             document.body.classList.add('overflow-y-hidden');
37:             {{ $attributes->has('focusable') ? 'setTimeout(() => firstFocusable().focus(), 100)' : '' }}
38:         } else {
39:             document.body.classList.remove('overflow-y-hidden');
40:         }
41:     })"
42:     x-on:open-modal.window="$event.detail == '{{ $name }}' ? show = true : null"
43:     x-on:close-modal.window="$event.detail == '{{ $name }}' ? show = false : null"
44:     x-on:close.stop="show = false"
45:     x-on:keydown.escape.window="show = false"
46:     x-on:keydown.tab.prevent="$event.shiftKey || nextFocusable().focus()"
47:     x-on:keydown.shift.tab.prevent="prevFocusable().focus()"
48:     x-show="show"
49:     class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
50:     style="display: {{ $show ? 'block' : 'none' }};"
51: >
52:     <div
53:         x-show="show"
54:         class="fixed inset-0 transform transition-all"
55:         x-on:click="show = false"
56:         x-transition:enter="ease-out duration-300"
57:         x-transition:enter-start="opacity-0"
58:         x-transition:enter-end="opacity-100"
59:         x-transition:leave="ease-in duration-200"
60:         x-transition:leave-start="opacity-100"
61:         x-transition:leave-end="opacity-0"
62:     >
63:         <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
64:     </div>
65: 
66:     <div
67:         x-show="show"
68:         class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full {{ $maxWidth }} sm:mx-auto"
69:         x-transition:enter="ease-out duration-300"
70:         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
71:         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
72:         x-transition:leave="ease-in duration-200"
73:         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
74:         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
75:     >
76:         {{ $slot }}
77:     </div>
78: </div>
```

## File: resources/views/components/nav-link.blade.php
```php
 1: @props(['active'])
 2: 
 3: @php
 4: $classes = ($active ?? false)
 5:             ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
 6:             : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
 7: @endphp
 8: 
 9: <a {{ $attributes->merge(['class' => $classes]) }}>
10:     {{ $slot }}
11: </a>
```

## File: resources/views/components/primary-button.blade.php
```php
1: <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
2:     {{ $slot }}
3: </button>
```

## File: resources/views/components/responsive-nav-link.blade.php
```php
 1: @props(['active'])
 2: 
 3: @php
 4: $classes = ($active ?? false)
 5:             ? 'block w-full ps-3 pe-4 py-2 border-l-4 border-indigo-400 text-start text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out'
 6:             : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out';
 7: @endphp
 8: 
 9: <a {{ $attributes->merge(['class' => $classes]) }}>
10:     {{ $slot }}
11: </a>
```

## File: resources/views/components/secondary-button.blade.php
```php
1: <button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150']) }}>
2:     {{ $slot }}
3: </button>
```

## File: resources/views/components/text-input.blade.php
```php
1: @props(['disabled' => false])
2: 
3: <input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
```

## File: resources/views/dashboard.blade.php
```php
 1: <x-app-layout>
 2:     <x-slot name="header">
 3:         <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
 4:             {{ __('Dashboard') }}
 5:         </h2>
 6:     </x-slot>
 7: 
 8:     <div class="py-12">
 9:         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
10:             <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
11:                 <div class="p-6 text-gray-900 dark:text-gray-100">
12:                     {{ __("You're logged in!") }}
13:                 </div>
14:             </div>
15:         </div>
16:     </div>
17: </x-app-layout>
```

## File: resources/views/dashboard/admin-logs/index.blade.php
```php
 1: @extends('dashboard.layouts.app')
 2: @section('title', 'Logs')
 3: @section('content')
 4:     <main class="app-main">
 5:         <div class="app-content-header">
 6:             <div class="container-fluid">
 7:                 <div class="row">
 8:                     <div class="col-sm-6">
 9:                         <ol class="breadcrumb float-sm-start">
10:                             <li class="breadcrumb-item active" aria-current="page">
11:                                 Logs
12:                             </li>
13:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
14:                         </ol>
15:                     </div>
16:                     <div class="col-sm-6">
17:                         <div class="float-sm-end">
18:                             <form id="clearLogsForm" method="POST" action="{{ route('dashboard.logs.clear-logs') }}">
19:                                 @csrf
20:                                 <button type="submit" id="btnClearLogs" class="btn btn-danger">Clear Logs</button>
21:                             </form>
22:                         </div>
23:                         <div class="float-sm-end me-2">
24:                             <a href="{{ route('dashboard.logs.download-logs') }}" class="btn btn-primary">Download
25:                                 Logs</a>
26:                         </div>
27:                     </div>
28:                 </div>
29:             </div>
30:         </div>
31: 
32:         <div class="app-content">
33:             <div class="container-fluid">
34:                 <div dir="ltr" class="text-end"
35:                     style="
36:     background:#0d1117;
37:     color:#c9d1d9;
38:     padding:15px;
39:     height:600px;
40:     font-size:14px;
41:     font-weight:500;
42:     overflow:auto;
43:     font-family: monospace;
44:     white-space: pre-wrap;
45: ">
46:                     {{ $logs }}
47:                 </div>
48:             </div>
49:         </div>
50:     </main>
51: @endsection
52: @push('my-java-script')
53:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
54:     @include('dashboard.included.toast-message')
55:     @include('shared.show-alert-validation-error')
56:     <script>
57:         $(document).ready(function() {
58:             $('#btnClearLogs').on('click', function(e) {
59:                 e.preventDefault();
60:                 // arabic
61:                 Swal.fire({
62:                     title: 'هل انت متاكد؟',
63:                     text: "لن يمكنك التراجع عن هذا",
64:                     icon: 'warning',
65:                     showCancelButton: true,
66:                     confirmButtonColor: '#3085d6',
67:                     cancelButtonColor: '#d33',
68:                     confirmButtonText: 'تأكيد',
69:                     cancelButtonText: 'الغاء'
70:                 }).then((result) => {
71:                     if (result.isConfirmed) {
72:                         $('#clearLogsForm').submit();
73:                     }
74:                 })
75:             });
76:         });
77:     </script>
78: @endpush
```

## File: resources/views/dashboard/categories/create.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'إضافة قسم')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 إضافة قسم
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21: 
 22:                 <div class="card card-primary card-outline mb-4 mt-1">
 23:                     <div class="card-header py-2">
 24:                         <div class="card-title">إضافة قسم</div>
 25:                     </div>
 26:                     <form method="POST" id="formDataID" action="{{ route('dashboard.categories.store') }}"
 27:                         enctype="multipart/form-data" autocomplete="off">
 28:                         @csrf
 29:                         <div class="card-body">
 30:                             <div class="row mb-3">
 31:                                 <div class="col-md-6 form-group ">
 32:                                     <x-custom.label :label="'إسم القسم'" :labelRequired="true" :name="'catNameAr'" />
 33:                                     <input type="text" name="catNameAr" id="catNameAr" value="{{ old('catNameAr') }}"
 34:                                         class="form-control">
 35:                                     <span class="error" id="catNameAr_err">{{ $errors->first('catNameAr') }}</span>
 36:                                 </div>
 37:                             </div>
 38: 
 39:                             <div class="row mb-3">
 40:                                 <div class="col-md-6 form-group">
 41:                                     <x-custom.label :label="'نوع العمولة'" :labelRequired="true" :name="'commissionType'" />
 42:                                     <select class="form-control form-select form-control-sm" name="commissionType">
 43:                                         @foreach (\App\Enums\CommissionTypeEnum::cases() as $case)
 44:                                             <option value="{{ $case->value }}"
 45:                                                 {{ $case->value == old('commissionType') ? 'selected' : '' }}>
 46:                                                 {{ __('messages.' . $case->value . '') }}
 47:                                             </option>
 48:                                         @endforeach
 49:                                     </select>
 50:                                     <span class="error" id="commissionType_err"> </span>
 51:                                 </div>
 52:                                 <div class="col-md-6 form-group ">
 53:                                     <x-custom.label :label="'العمولة'" :labelRequired="true" :name="'commission'" />
 54:                                     <input type="number" name="commission" id="commission" value="{{ old('commission') }}"
 55:                                         class="form-control text-start">
 56:                                     <span class="error" id="commission_err">{{ $errors->first('commission') }}</span>
 57:                                 </div>
 58:                             </div>
 59: 
 60:                             <div class="row mb-3">
 61:                                 <div class="col-md-6 form-group ">
 62:                                     <div class="form-check form-switch">
 63:                                         <input type="hidden" name="categoryHasBrand" value="0">
 64:                                         <input type="checkbox" class="form-check-input" name="categoryHasBrand"
 65:                                             id="categoryHasBrand" value="1" checked>
 66:                                         <label class="form-check-label" for="categoryHasBrand">حقل ماركة ( موديل )
 67:                                             السيارات</label>
 68:                                     </div>
 69:                                 </div>
 70:                             </div>
 71: 
 72:                             <div class="row mt-5">
 73:                                 <div class="col-md-12 form-group">
 74:                                     <div class="mb-2 d-flex justify-content-center">
 75:                                         <div class="text-center">
 76:                                             <img id="previewSelectedImageId" class="img-border"
 77:                                                 style="width: 100%; height: 100px"
 78:                                                 src="{{ asset('assets/dashboard/images/empty_image.png') }}" alt="image">
 79:                                         </div>
 80:                                     </div>
 81:                                     <div class="d-flex justify-content-center">
 82:                                         <div data-mdb-ripple-init class="btn btn-primary btn-rounded py-0">
 83:                                             <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
 84:                                             <label class="form-label text-white m-1" for="file">إختر
 85:                                                 صورة الدورة</label>
 86:                                             <input type="file" class="form-control d-none" name="file" id="file"
 87:                                                 accept=".png,.jpg,.jpeg,.webp"
 88:                                                 onchange="previewSelectedImage(event, 'previewSelectedImageId')" />
 89:                                         </div>
 90:                                     </div>
 91:                                     <div class="d-flex justify-content-center">
 92:                                         <span class="error fs-4" id="file_err">{{ $errors->first('file') }}</span>
 93:                                     </div>
 94:                                 </div>
 95:                             </div>
 96: 
 97:                         </div>
 98:                         <div class="card-footer mt-4 py-3"> <button type="submit" id="btnSave" class="btn btn-primary"><i
 99:                                     class="fa-solid fa-plus me-2"></i>إضافة</button> </div>
100:                     </form>
101:                 </div>
102:             </div>
103:         </div>
104:     </main>
105: 
106: @endsection
107: 
108: @push('my-java-script')
109:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
110:     @include('dashboard.included.toast-message')
111:     @include('shared.show-alert-validation-error')
112:     <script>
113:         $(document).ready(function() {
114:             $('#formDataID #btnSave').click(function(e) {
115:                 e.preventDefault();
116:                 if (requiredValidation("#catNameAr") && requiredValidation("#commission") &&
117:                     requiredValidation("#file")) {
118:                     $('#btnSave').addClass("disabled").html(spinnerBorderLight()).attr('disabled', true);
119:                     $("#formDataID").submit()
120:                 }
121:             });
122:         })
123:     </script>
124: @endpush
```

## File: resources/views/dashboard/categories/edit.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'تعديل قسم')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 تعديل قسم
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21: 
 22:                 <div class="card card-primary card-outline mb-4 mt-1">
 23:                     <div class="card-header py-2">
 24:                         <div class="card-title">تعديل قسم</div>
 25:                     </div>
 26:                     <form method="POST" id="formDataID"
 27:                         action="{{ route('dashboard.categories.update', ['id' => $category->id]) }}"
 28:                         enctype="multipart/form-data" autocomplete="off">
 29:                         @csrf
 30:                         <div class="card-body">
 31:                             <div class="row mb-3">
 32:                                 <div class="col-md-6 form-group ">
 33:                                     <x-custom.label :label="'إسم القسم'" :labelRequired="true" :name="'catNameAr'" />
 34:                                     <input type="text" name="catNameAr" id="catNameAr"
 35:                                         value="{{ old('catNameAr', $category->cat_name_ar ?? '') }}" class="form-control">
 36:                                     <span class="error" id="catNameAr_err">{{ $errors->first('catNameAr') }}</span>
 37:                                 </div>
 38:                             </div>
 39: 
 40:                             <div class="row mb-3">
 41:                                 <div class="col-md-6 form-group">
 42:                                     <x-custom.label :label="'نوع العمولة'" :labelRequired="true" :name="'commissionType'" />
 43:                                     <select class="form-control form-select form-control-sm" name="commissionType">
 44:                                         @foreach (\App\Enums\CommissionTypeEnum::cases() as $case)
 45:                                             <option value="{{ $case->value }}"
 46:                                                 {{ $case->value == old('commissionType', $category->commission_type ?? '') ? 'selected' : '' }}>
 47:                                                 {{ __('messages.' . $case->value . '') }}
 48:                                             </option>
 49:                                         @endforeach
 50:                                     </select>
 51:                                     <span class="error" id="commissionType_err"> </span>
 52:                                 </div>
 53:                                 <div class="col-md-6 form-group ">
 54:                                     <x-custom.label :label="'العمولة'" :labelRequired="true" :name="'commission'" />
 55:                                     <input type="number" name="commission" id="commission"
 56:                                         value="{{ old('commission', $category->commission_type == \App\Enums\CommissionTypeEnum::Rate->value ? $category->commission * 100 : $category->commission ?? '') }}"
 57:                                         class="form-control text-start">
 58:                                     <span class="error" id="commission_err">{{ $errors->first('commission') }}</span>
 59:                                 </div>
 60:                             </div>
 61: 
 62:                             <div class="row mb-3">
 63:                                 <div class="col-md-6 form-group ">
 64:                                     <div class="form-check form-switch">
 65:                                         <input type="hidden" name="categoryHasBrand" value="0">
 66:                                         <input type="checkbox" class="form-check-input" name="categoryHasBrand"
 67:                                             id="categoryHasBrand" value="1"
 68:                                             {{ old('categoryHasBrand', $category->is_category_has_brand_field ?? false) ? 'checked' : '' }}>
 69:                                         <label class="form-check-label" for="categoryHasBrand">حقل ماركة ( موديل )
 70:                                             السيارات</label>
 71:                                     </div>
 72:                                 </div>
 73:                             </div>
 74: 
 75:                             <div class="row mt-5">
 76:                                 <div class="col-md-12 form-group">
 77:                                     <div class="mb-2 d-flex justify-content-center">
 78:                                         <div class="text-center">
 79:                                             <img id="previewSelectedImageId" class="img-border"
 80:                                                 style="width: 100%; height: 100px"
 81:                                                 src="{{ empty($category->cat_icon_path) ? asset('assets/dashboard/images/empty_image.png') : url('uploads/categories-icon/' . $category->cat_icon_path) ?? asset('assets/dashboard/images/empty_image.png') }}"
 82:                                                 alt="image">
 83:                                         </div>
 84:                                     </div>
 85:                                     <div class="d-flex justify-content-center">
 86:                                         <div data-mdb-ripple-init class="btn btn-primary btn-rounded py-0">
 87:                                             <i class="fa-solid fa-plus me-1" style="font-size: 14px;"></i>
 88:                                             <label class="form-label text-white m-1" for="file">إختر
 89:                                                 صورة الدورة</label>
 90:                                             <input type="file" class="form-control d-none" name="file" id="file"
 91:                                                 accept=".png,.jpg,.jpeg,.webp"
 92:                                                 onchange="previewSelectedImage(event, 'previewSelectedImageId')" />
 93:                                         </div>
 94:                                     </div>
 95:                                     <div class="d-flex justify-content-center">
 96:                                         <span class="error fs-4" id="file_err">{{ $errors->first('file') }}</span>
 97:                                     </div>
 98:                                 </div>
 99:                             </div>
100: 
101:                         </div>
102:                         <div class="card-footer mt-4 py-3"> <button type="submit" id="btnSave" class="btn btn-primary"><i
103:                                     class="fa-solid fa-plus me-2"></i>تعديل</button> </div>
104:                     </form>
105:                 </div>
106:             </div>
107:         </div>
108:     </main>
109: 
110: @endsection
111: 
112: @push('my-java-script')
113:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
114:     @include('dashboard.included.toast-message')
115:     @include('shared.show-alert-validation-error')
116:     <script>
117:         $(document).ready(function() {
118:             $('#formDataID #btnSave').click(function(e) {
119:                 e.preventDefault();
120:                 if (requiredValidation("#catNameAr") && requiredValidation("#commission")) {
121:                     $('#btnSave').addClass("disabled").html(spinnerBorderLight()).attr('disabled', true);
122:                     $("#formDataID").submit()
123:                 }
124:             });
125:         })
126:     </script>
127: @endpush
```

## File: resources/views/dashboard/categories/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'الأقسام')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 الأقسام
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                     <div class="col-sm-6">
 17:                         <div class="float-sm-end">
 18:                             <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary"><i
 19:                                     class="fa-solid fa-plus me-1"></i>
 20:                                 إضافة قسم</a>
 21:                         </div>
 22:                     </div>
 23:                 </div>
 24:             </div>
 25:         </div>
 26:         <div class="app-content">
 27:             <div class="container-fluid">
 28: 
 29:                 <div class="card card-primary card-outline mb-4 mt-1">
 30:                     <div class="card-header py-2">
 31:                         <div class="card-title">الأقسام</div>
 32:                     </div>
 33:                     <div class="card-body">
 34:                         <div class="table-responsive mt-2">
 35:                             <table class="table table-hover nowrap dataTable" style="width:100%;">
 36:                                 <thead>
 37:                                     <tr>
 38:                                         <th class="text-start">#</th>
 39:                                         <th class="text-center">إسم القسم</th>
 40:                                         <th class="text-center">صورة القسم</th>
 41:                                         <th class="text-center">نوع العمولة</th>
 42:                                         <th class="text-center">العمولة</th>
 43:                                         <th class="text-center">الحالة</th>
 44:                                         <th class="text-center"></th>
 45:                                     </tr>
 46:                                 </thead>
 47:                                 <tbody>
 48:                                     @foreach ($categories as $item)
 49:                                         <tr>
 50:                                             <td>{{ $item->id }}</td>
 51:                                             <td class="text-center align-middle">{{ $item->cat_name_ar }}</td>
 52:                                             <td class="text-center"><img
 53:                                                     src="{{ url('/uploads/categories-icon/' . $item->cat_icon_path) }}"
 54:                                                     width="60px" height="50px"></td>
 55:                                             <td class="text-center align-middle">
 56:                                                 {{ $item->commission_type == App\Enums\CommissionTypeEnum::Amount->value ? 'قيمة' : 'نسبة' }}
 57:                                             </td>
 58: 
 59:                                             <td class="text-center align-middle">{{ $item->commission }}</td>
 60:                                             <td class="text-center align-middle">
 61:                                                 <div class="dropdown">
 62:                                                     <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown"
 63:                                                         href="javascript:void(0)" role="button" data-bs-toggle="dropdown"
 64:                                                         aria-expanded="false">
 65: 
 66:                                                         @if ($item->active == App\Enums\CategoryStatusEnum::Active->value)
 67:                                                             <i class="fa-regular fa-circle-dot text-success me-1"></i><span
 68:                                                                 class="mx-2">مفعل</span>
 69:                                                         @elseif($item->active == App\Enums\CategoryStatusEnum::Inactive->value)
 70:                                                             <i class="fa-regular fa-circle-dot text-danger me-1"></i><span
 71:                                                                 class="mx-2">معطل</span>
 72:                                                         @elseif($item->active == App\Enums\CategoryStatusEnum::Soon->value)
 73:                                                             <i class="fa-regular fa-circle-dot text-primary me-1"></i><span
 74:                                                                 class="mx-2">قريباً</span>
 75:                                                         @endif
 76: 
 77:                                                     </a>
 78:                                                     <ul class="dropdown-menu">
 79:                                                         <li>
 80:                                                             <a class="dropdown-item activeDropdownId"
 81:                                                                 href="javascript:void(0)" data-id="{{ $item->id }}"
 82:                                                                 data-status="Active">
 83:                                                                 <i class="fa-regular fa-circle-dot text-success mx-2"></i>
 84:                                                                 <span class="mx-2">نشيط</span>
 85:                                                             </a>
 86:                                                         </li>
 87:                                                         <li>
 88:                                                             <a class="dropdown-item activeDropdownId"
 89:                                                                 href="javascript:void(0)" data-id="{{ $item->id }}"
 90:                                                                 data-status="Inactive">
 91:                                                                 <i class="fa-regular fa-circle-dot text-danger mx-2"></i>
 92:                                                                 <span class="mx-2">معطل</span>
 93:                                                             </a>
 94:                                                         </li>
 95:                                                         <li>
 96:                                                             <a class="dropdown-item activeDropdownId"
 97:                                                                 href="javascript:void(0)" data-id="{{ $item->id }}"
 98:                                                                 data-status="Soon">
 99:                                                                 <i class="fa-regular fa-circle-dot text-primary mx-2"></i>
100:                                                                 <span class="mx-2">قريباً</span>
101:                                                             </a>
102:                                                         </li>
103:                                                     </ul>
104:                                                 </div>
105:                                             </td>
106:                                             <td class="text-center align-middle">
107:                                                 <div class="dropdown dropdown-action mx-3">
108:                                                     <a class="dropdown dropdown-toggle action-icon"
109:                                                         style="text-decoration: none;" data-bs-toggle="dropdown"
110:                                                         href="javascript:void(0)" aria-expanded="false">
111:                                                         <i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i>
112:                                                     </a>
113: 
114:                                                     <div class="dropdown-menu">
115:                                                         {{-- <a href="{{ url('dashboard/categories/edit/' . $item->id) }}"
116:                                                             class="dropdown-item">
117:                                                             <i class="fa-solid fa-eye me-2 color-hint"></i>
118:                                                             مشاهدة
119:                                                         </a> --}}
120:                                                         <a href="{{ url('dashboard/categories/edit/' . $item->id) }}"
121:                                                             class="dropdown-item mt-1">
122:                                                             <i class="fa-solid fa-pen me-2 color-hint"></i>
123:                                                             تعديل
124:                                                         </a>
125:                                                         <a id="deleteActionDropdownId" href="javascript:void(0)"
126:                                                             data-id="{{ $item->id }}"
127:                                                             data-action="{{ url('dashboard/categories/delete/' . $item->id) }}"
128:                                                             class="dropdown-item mt-1">
129:                                                             <i class="fa-solid fa-trash-can me-2 color-hint"></i>
130:                                                             حذف
131:                                                         </a>
132:                                                         <a href="{{ url('dashboard/custom-fields-category/' . $item->id) }}"
133:                                                             class="dropdown-item mt-1">
134:                                                             <i class="fa-solid fa-add me-2 color-hint"></i>
135:                                                             إضافة حقول مخصصة
136:                                                         </a>
137:                                                     </div>
138:                                                 </div>
139:                                             </td>
140:                                         </tr>
141:                                     @endforeach
142:                                 </tbody>
143:                             </table>
144:                         </div>
145:                     </div>
146:                 </div>
147:             </div>
148:         </div>
149:     </main>
150: 
151: @endsection
152: 
153: @push('my-java-script')
154:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
155:     @include('dashboard.included.toast-message')
156:     @include('shared.show-alert-validation-error')
157:     <script>
158:         $(document).ready(function() {
159:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
160:                 e.preventDefault();
161:                 var dataDelete = $(this).data('id');
162:                 var myUrl = $(this).data('action');
163:                 swalAlertDeleteConfirm({
164:                     isConfirmed: function() {
165:                         deleteDataAjax({
166:                             url: myUrl,
167:                             success: function(res) {
168:                                 if (res.success) {
169:                                     window.location.reload();
170:                                 } else {
171:                                     swalToast({
172:                                         title: res.message,
173:                                         icon: 'error'
174:                                     });
175:                                 }
176:                             }
177:                         });
178:                     }
179:                 });
180:             });
181: 
182:             $(document).on('click', 'a.activeDropdownId', function(e) {
183:                 let id = $(this).data('id');
184:                 let status = $(this).data('status');
185:                 let formData = new FormData();
186:                 formData.append('id', id);
187:                 formData.append('status', status);
188:                 ajax_setup();
189:                 postDataAjax({
190:                     url: baseUrl + `dashboard/categories/update-status`,
191:                     formData: formData,
192:                     beforeSend: function() {
193:                         $('#loadingModalId').modal('show');
194:                     },
195:                     complete: function() {
196:                         $('#loadingModalId').modal('hide');
197:                     },
198:                     success: function(res) {
199:                         if (res.success == true) {
200:                             swalToast({
201:                                 title: res.message
202:                             });
203:                             window.location.reload();
204:                         } else {
205:                             swalToast({
206:                                 title: res.message,
207:                                 icon: 'error'
208:                             });
209:                         }
210:                     }
211:                 });
212:             });
213:         })
214:     </script>
215: @endpush
```

## File: resources/views/dashboard/complaint-management/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'الشكاوي')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 الشكاوي
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title"> الشكاوي</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">#</th>
 32:                                         <th class="text-center">إسم المشتكي</th>
 33:                                         <th class="text-center">رقم الجوال</th>
 34:                                         <th class="text-center">نوع الشكوى</th>
 35:                                         <th class="text-center">عنوان الشكوى</th>
 36:                                         <th class="text-center">الشكوى</th>
 37:                                         <th class="text-center">تاريخ الشكوى</th>
 38:                                         {{-- <th class="text-center">الحالة</th> --}}
 39: 
 40:                                     </tr>
 41:                                 </thead>
 42:                                 <tbody>
 43:                                 </tbody>
 44:                             </table>
 45:                         </div>
 46:                     </div>
 47:                 </div>
 48:             </div>
 49:         </div>
 50:     </main>
 51: @endsection
 52: 
 53: @push('my-java-script')
 54:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 55:     @include('dashboard.included.toast-message')
 56:     @include('shared.show-alert-validation-error')
 57:     <script>
 58:         $(document).ready(function() {
 59:             var _columns = eval(
 60:                 '[{"columns" : [{"data": "id", "className": "text-center align-middle"}]}]'
 61:             );
 62: 
 63:             _columns[0].columns.push({
 64:                 "data": "name",
 65:                 "className": "text-center",
 66:             });
 67: 
 68:             _columns[0].columns.push({
 69:                 "data": null,
 70:                 "orderable": false,
 71:                 "className": "text-center",
 72:                 "render": function(data, type, row, meta) {
 73:                     return '<a href="tel:' + data.phone + '" class="text-decoration-none">' + data
 74:                         .phone + '</a>';
 75:                 }
 76:             });
 77: 
 78:             _columns[0].columns.push({
 79:                 "data": "subject",
 80:                 "className": "text-center",
 81:             });
 82: 
 83:             _columns[0].columns.push({
 84:                 "data": "title",
 85:                 "className": "text-center",
 86:             });
 87:             _columns[0].columns.push({
 88:                 "data": "description",
 89:                 "className": "text-center",
 90:             });
 91:             _columns[0].columns.push({
 92:                 "data": "date_complaint",
 93:                 "className": "text-center",
 94:             });
 95:             // _columns[0].columns.push({
 96:             //     "data": "status",
 97:             //     "className": "text-center",
 98:             // });
 99: 
100:             let myDatatable = customDatatable({
101:                 url: '{{ 'dashboard/complaint-management/complaints' }}',
102:                 columns: _columns
103:             });
104:         })
105:     </script>
106: @endpush
```

## File: resources/views/dashboard/custom-fields/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'الحقول المخصصة')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 الحقول المخصصة لقسم : {{ $categoryName ?? '' }}
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                     {{-- <div class="col-sm-6">
 17:                         <div class="float-sm-end">
 18:                             <a href="{{ route('dashboard.categories.create') }}" class="btn btn-primary"><i
 19:                                     class="fa-solid fa-plus me-1"></i>
 20:                                 إضافة قسم</a>
 21:                         </div>
 22:                     </div> --}}
 23:                 </div>
 24:             </div>
 25:         </div>
 26:         <div class="app-content">
 27:             <div class="container-fluid">
 28: 
 29:                 <div class="card card-primary card-outline mb-5 mt-1">
 30:                     <div class="card-header py-2">
 31:                         <div class="card-title">إضافة قسم</div>
 32:                     </div>
 33:                     <form method="POST" id="formDataID" action="{{ route('dashboard.custom-fields.save-custom-field') }}"
 34:                         enctype="multipart/form-data" autocomplete="off">
 35:                         @csrf
 36:                         <input type="hidden" name="categoryId" value="{{ request()->route('categoryId') }}">
 37:                         <div class="card-body">
 38:                             <div class="row mb-3">
 39:                                 <div class="col-md-6 form-group">
 40:                                     <x-custom.label :label="'عنوان الحقل'" :labelRequired="true" :name="'labelAr'" />
 41:                                     <input type="text" name="labelAr" id="labelAr" value="{{ old('labelAr') }}"
 42:                                         class="form-control">
 43:                                     <span class="error" id="labelAr_err">{{ $errors->first('labelAr') }}</span>
 44:                                 </div>
 45:                                 <div class="col-md-6 form-group">
 46:                                     <x-custom.label :label="'إسم الحقل (إنجليزي بدون مسافات)'" :labelRequired="true" :name="'fieldName'" />
 47:                                     <input type="text" name="fieldName" id="fieldName" value="{{ old('fieldName') }}"
 48:                                         class="form-control">
 49:                                     <span class="error" id="fieldName_err">{{ $errors->first('fieldName') }}</span>
 50:                                 </div>
 51:                             </div>
 52: 
 53:                             <div class="row mb-3">
 54:                                 <div class="col-md-6 form-group">
 55:                                     <x-custom.label :label="'نوع الحقل'" :labelRequired="true" :name="'fieldType'" />
 56:                                     <select class="form-control form-select form-control-sm" name="fieldType">
 57:                                         <option value="{{ \App\Enums\CustomFieldTypeEnum::Text->value }}" selected>
 58:                                             {{ \App\Enums\CustomFieldTypeEnum::Text->value }}
 59:                                         </option>
 60:                                         <option value="{{ \App\Enums\CustomFieldTypeEnum::TextArea->value }}">
 61:                                             {{ \App\Enums\CustomFieldTypeEnum::TextArea->value }}
 62:                                         </option>
 63:                                         <option value="{{ \App\Enums\CustomFieldTypeEnum::Number->value }}">
 64:                                             {{ \App\Enums\CustomFieldTypeEnum::Number->value }}
 65:                                         </option>
 66:                                         <option value="{{ \App\Enums\CustomFieldTypeEnum::Date->value }}">
 67:                                             {{ \App\Enums\CustomFieldTypeEnum::Date->value }}
 68:                                         </option>
 69:                                         <option value="{{ \App\Enums\CustomFieldTypeEnum::File->value }}">
 70:                                             {{ \App\Enums\CustomFieldTypeEnum::File->value }}
 71:                                         </option>
 72:                                     </select>
 73:                                     <span class="error" id="fieldType_err"> </span>
 74:                                 </div>
 75:                             </div>
 76: 
 77:                             <div class="row mb-3">
 78:                                 <div class="col-md-6 form-group ">
 79:                                     <div class="form-check form-switch">
 80:                                         <input type="hidden" name="isRequired" value="0">
 81:                                         <input type="checkbox" class="form-check-input" name="isRequired" id="isRequired"
 82:                                             value="1" checked>
 83:                                         <label class="form-check-label" for="isRequired">الحقل مطلوب (إجبار المستخدم
 84:                                             على إدخال هذا الحقل)</label>
 85:                                     </div>
 86:                                 </div>
 87:                             </div>
 88:                         </div>
 89:                         <div class="card-footer py-3"> <button type="submit" id="btnSave" class="btn btn-primary">
 90:                                 حفظ</button> </div>
 91:                     </form>
 92:                 </div>
 93: 
 94:                 <div class="card card-primary card-outline mb-4 mt-5">
 95:                     <div class="card-header py-2">
 96:                         <div class="card-title">الحقول المخصصة لقسم : {{ $categoryName ?? '' }}</div>
 97:                     </div>
 98:                     <div class="card-body">
 99:                         <div class="table-responsive mt-2">
100:                             <table class="table table-hover nowrap dataTable" style="width:100%;">
101:                                 <thead>
102:                                     <tr>
103:                                         <th class="text-start">#</th>
104:                                         <th class="text-center">عنوان الحقل</th>
105:                                         <th class="text-center">إسم الحقل</th>
106:                                         <th class="text-center">نوع الحقل</th>
107:                                         <th class="text-center">مطلوب</th>
108:                                         <th class="text-center"></th>
109:                                     </tr>
110:                                 </thead>
111:                                 <tbody>
112:                                     @foreach ($customFields as $item)
113:                                         <tr>
114:                                             <td>{{ $item->id }}</td>
115:                                             <td class="text-center align-middle">{{ $item->label_ar }}</td>
116:                                             <td class="text-center align-middle">{{ $item->field_name }}</td>
117:                                             <td class="text-center align-middle">{{ $item->field_type }}</td>
118:                                             <td class="text-center align-middle">
119:                                                 {{ $item->is_required ? 'نعم' : 'إختياري' }}
120:                                             </td>
121: 
122:                                             {{-- <td class="text-center"><img
123:                                                     src="{{ url('/uploads/categories-icon/' . $item->cat_icon_path) }}"
124:                                                     width="60px" height="50px"></td>
125:                                             <td class="text-center align-middle">
126:                                                 {{ $item->commission_type == App\Enums\CommissionTypeEnum::Amount->value ? 'قيمة' : 'نسبة' }}
127:                                             </td> --}}
128: 
129: 
130:                                             <td class="text-center align-middle">
131:                                                 <div class="d-flex justify-content-center">
132: 
133:                                                     <a id="editActionDropdownId" href="javascript:void(0)"
134:                                                         data-label_ar="{{ $item->label_ar }}"
135:                                                         data-field_name="{{ $item->field_name }}"
136:                                                         data-field_type="{{ $item->field_type }}"
137:                                                         data-is_required="{{ $item->is_required }}"
138:                                                         class="btn btn-primary py-2 me-2 btn-sm"><i
139:                                                             class="fas fa-pencil-alt text-white"></i></a>
140:                                                     <a id="deleteActionDropdownId" href="javascript:void(0)"
141:                                                         data-action="{{ url('dashboard/custom-fields-category/delete/' . $item->id) }}"
142:                                                         data-id="{{ $item->id }}"
143:                                                         class="btn btn-danger py-2 btn-sm"><i
144:                                                             class="fas fa-trash"></i></a>
145:                                                 </div>
146:                                             </td>
147:                                         </tr>
148:                                     @endforeach
149:                                 </tbody>
150:                             </table>
151:                         </div>
152:                     </div>
153:                 </div>
154:             </div>
155:         </div>
156:     </main>
157: 
158: @endsection
159: 
160: @push('my-java-script')
161:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
162:     @include('dashboard.included.toast-message')
163:     @include('shared.show-alert-validation-error')
164:     <script>
165:         $(document).ready(function() {
166: 
167:             $(document).on('click', 'a#editActionDropdownId', function(e) {
168: 
169:                 $('#labelAr').val($(this).data('label_ar'));
170:                 $('#fieldName').val($(this).data('field_name'));
171:                 $('select[name="fieldType"]').val($(this).data('field_type'));
172:                 $('#isRequired').prop('checked', $(this).data('is_required') == 1);
173: 
174:             });
175: 
176:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
177:                 e.preventDefault();
178:                 var dataDelete = $(this).data('id');
179:                 var myUrl = $(this).data('action');
180:                 swalAlertDeleteConfirm({
181:                     isConfirmed: function() {
182:                         deleteDataAjax({
183:                             url: myUrl,
184:                             success: function(res) {
185:                                 if (res.success) {
186:                                     window.location.reload();
187:                                 } else {
188:                                     swalToast({
189:                                         title: res.message,
190:                                         icon: 'error'
191:                                     });
192:                                 }
193:                             }
194:                         });
195:                     }
196:                 });
197:             });
198:         })
199:     </script>
200: @endpush
```

## File: resources/views/dashboard/customers/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'إدارة العملاء')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 ادارة العملاء
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">العملاء</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">#</th>
 32:                                         <th class="text-center">رقم العميل</th>
 33:                                         <th class="text-center">الإسم</th>
 34:                                         <th class="text-center">صورة العميل</th>
 35:                                         <th class="text-center">الحالة</th>
 36:                                         <th class="text-center"></th>
 37:                                     </tr>
 38:                                 </thead>
 39:                                 <tbody>
 40:                                 </tbody>
 41:                             </table>
 42:                         </div>
 43:                     </div>
 44:                 </div>
 45:             </div>
 46:         </div>
 47:     </main>
 48: @endsection
 49: 
 50: @push('my-java-script')
 51:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 52:     @include('dashboard.included.toast-message')
 53:     @include('shared.show-alert-validation-error')
 54:     <script>
 55:         $(document).ready(function() {
 56:             var _columns = eval(
 57:                 '[{"columns" : [{"data": "id", "className": "text-center align-middle"}, {"data": "phone", "className": "text-center align-middle"}, {"data": "name", "className": "text-center align-middle"}]}]'
 58:             );
 59:             _columns[0].columns.push({
 60:                 "data": null,
 61:                 "name": "logo",
 62:                 "className": "text-center align-middle",
 63:                 "render": function(data, type, row, meta) {
 64:                     return data.logo ? '<img src="' + baseUrl + 'uploads/' + data.logo +
 65:                         '" style="width: 60px; height: 50px;" class="rounded-circle">' : '<img src="' +
 66:                         baseUrl +
 67:                         'assets/dashboard/images/img_user.gif" style="width: 60px; height: 50px;" class="rounded-circle">';
 68:                 }
 69:             });
 70:             _columns[0].columns.push({
 71:                 "data": null,
 72:                 "orderable": false,
 73:                 "className": "text-center align-middle",
 74:                 "render": function(data, type, row, meta) {
 75:                     var text =
 76:                         '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
 77:                     if (data.status == '{{ 'Active' }}') {
 78:                         text +=
 79:                             '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">نشيط</span></a>';
 80:                     } else {
 81:                         text +=
 82:                             '<i class="fa-regular fa-circle-dot text-danger me-1"></i><span class="mx-2">غير نشيط</span></a>';
 83:                     }
 84:                     text += '<ul class="dropdown-menu">' +
 85:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
 86:                         data.id +
 87:                         '" data-status="Active"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">نشيط</span></a></li>' +
 88:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
 89:                         data.id +
 90:                         '" data-status="Inactive"><i class="fa-regular fa-circle-dot text-danger mx-2"></i><span class="mx-2">غير نشيط</span></a></li>' +
 91:                         '</ul>';
 92:                     return text += '</div>';
 93:                 }
 94:             });
 95:             _columns[0].columns.push({
 96:                 "data": null,
 97:                 "orderable": false,
 98:                 "className": "text-center align-middle",
 99:                 "render": function(data, type, row, meta) {
100:                     var text =
101:                         '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
102: 
103:                     text += '<a id="deleteUsersModal" data-id="' + data.id + '" data-action="' +
104:                         baseUrl + 'dashboard/customers/delete/' + data.id +
105:                         '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';
106: 
107:                     return text += '</div></div>';
108:                 }
109:             });
110:             let myDatatable = customDatatable({
111:                 url: '{{ 'dashboard/customers' }}',
112:                 columns: _columns
113:             });
114: 
115:             $(document).on('click', 'a.activeUserDropdownId', function(e) {
116:                 let id = $(this).data('id');
117:                 let status = $(this).data('status');
118:                 let formData = new FormData();
119:                 formData.append('id', id);
120:                 formData.append('status', status);
121:                 ajax_setup();
122:                 postDataAjax({
123:                     url: baseUrl + `dashboard/customers/update-status`,
124:                     formData: formData,
125:                     success: function(res) {
126:                         if (res.success == true) {
127:                             $('#datatableID').DataTable().ajax.reload();
128:                             swalToast({
129:                                 title: res.message
130:                             });
131:                         } else {
132:                             swalToast({
133:                                 title: res.message,
134:                                 icon: 'error'
135:                             });
136:                         }
137:                     }
138:                 });
139:             });
140: 
141:             $(document).on('click', 'a#deleteUsersModal', function(e) {
142:                 e.preventDefault();
143:                 let dataDelete = $(this).data('id');
144:                 let myUrl = $(this).data('action');
145:                 Swal.fire({
146:                     text: 'تأكيد عملية الحذف ؟',
147:                     icon: 'warning',
148:                     showCancelButton: true,
149:                     confirmButtonColor: '#3085d6',
150:                     cancelButtonColor: '#d33',
151:                     confirmButtonText: 'نعم',
152:                     cancelButtonText: 'خروج'
153:                 }).then((result) => {
154:                     if (result.isConfirmed) {
155:                         deleteDataAjax({
156:                             url: myUrl,
157:                             success: function(res) {
158:                                 if (res.success) {
159:                                     $('#datatableID').DataTable().rows().every(function(
160:                                         rowIdx, tableLoop, rowLoop) {
161:                                         if (this.data().id == dataDelete) {
162:                                             $('#datatableID').DataTable().row(
163:                                                 rowIdx).remove().draw();
164:                                         }
165:                                     });
166:                                 } else {
167:                                     swalToast({
168:                                         title: res.message,
169:                                         icon: 'error'
170:                                     });
171:                                 }
172:                             }
173:                         });
174:                     }
175:                 })
176:             });
177:         })
178:     </script>
179: @endpush
```

## File: resources/views/dashboard/dashboard.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'الرئيسية')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item active" aria-current="page">
 11:                                 لوحة التحكم
 12:                             </li>
 13:                             <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19: 
 20:         <div class="app-content">
 21:             <div class="container-fluid">
 22:                 <div class="row">
 23:                     <div class="col-lg-3 col-6">
 24:                         <div class="small-box text-bg-primary">
 25:                             <div class="inner">
 26:                                 <h3>1</h3>
 27:                                 <p class="fw-bold">الشركات</p>
 28:                             </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
 29:                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
 30:                                 <path
 31:                                     d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023">
 32:                                 </path>
 33:                             </svg> <a href="#"
 34:                                 class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
 35:                                 المزيد <i class="bi bi-link-45deg"></i> </a>
 36:                         </div>
 37:                     </div>
 38:                     <div class="col-lg-3 col-6">
 39:                         <div class="small-box text-bg-success">
 40:                             <div class="inner">
 41:                                 <h3>0</h3>
 42:                                 <p class="fw-bold">طلبات إنظمام الشركات</p>
 43:                             </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
 44:                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
 45:                                 <path
 46:                                     d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023">
 47:                                 </path>
 48:                             </svg> <a href="#"
 49:                                 class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
 50:                                 المزيد <i class="bi bi-link-45deg"></i> </a>
 51:                         </div>
 52:                     </div>
 53:                     <div class="col-lg-3 col-6">
 54:                         <div class="small-box" style="background-color: #f39c12 !important;">
 55:                             <div class="inner">
 56:                                 <h3 class=" text-white">4</h3>
 57:                                 <p class="fw-bold text-white">الطلبات</p>
 58:                             </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
 59:                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
 60:                                 <path
 61:                                     d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023">
 62:                                 </path>
 63:                             </svg> <a href="#"
 64:                                 class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
 65:                                 المزيد <i class="bi bi-link-45deg"></i> </a>
 66:                         </div>
 67:                     </div>
 68:                     <div class="col-lg-3 col-6">
 69:                         <div class="small-box text-bg-danger">
 70:                             <div class="inner">
 71:                                 <h3>0</h3>
 72:                                 <p class="fw-bold">الشكاوي الجديدة</p>
 73:                             </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
 74:                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
 75:                                 <path
 76:                                     d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023">
 77:                                 </path>
 78:                             </svg> <a href="#"
 79:                                 class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
 80:                                 المزيد <i class="bi bi-link-45deg"></i> </a>
 81:                         </div>
 82:                     </div>
 83:                 </div>
 84:                 <div class="row">
 85:                     <div class="col-lg-3 col-6">
 86:                         <div class="small-box text-bg-warning">
 87:                             <div class="inner">
 88:                                 <h3 class="text-white">3</h3>
 89:                                 <p class="text-white fw-bold">العملاء</p>
 90:                             </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 24 24"
 91:                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
 92:                                 <path fill-rule="evenodd"
 93:                                     d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z"
 94:                                     clip-rule="evenodd" />
 95:                             </svg> <a href="#"
 96:                                 class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover text-white">
 97:                                 المزيد <i class="bi bi-link-45deg"></i> </a>
 98:                         </div>
 99:                     </div>
100:                 </div>
101:             </div>
102:         </div>
103:     </main>
104: @endsection
105: @push('my-java-script')
106:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
107:     @include('dashboard.included.toast-message')
108:     @include('shared.show-alert-validation-error')
109: @endpush
```

## File: resources/views/dashboard/included/footer.blade.php
```php
1: <footer class="app-footer">
2:     <div class="text-center">
3:         جميع الحقوق محفوظة
4:         <strong>
5:             <a href="#" class="text-decoration-none">وسيط سيارات</a>.
6:             Copyright &copy; {{ \Carbon\Carbon::now()->year }}&nbsp;
7:         </strong>
8:     </div>
9: </footer>
```

## File: resources/views/dashboard/included/header.blade.php
```php
  1: <nav class="app-header navbar navbar-expand bg-body">
  2:     <div class="container-fluid">
  3:         <ul class="navbar-nav">
  4:             <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
  5:                         class="bi bi-list"></i> </a> </li>
  6:             <li class="nav-item"> <a href="#" class="nav-link">الموقع</a> </li>
  7:         </ul>
  8:         <ul class="navbar-nav ms-auto">
  9:             <li class="nav-item">
 10:                 <a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i
 11:                         class="bi bi-search"></i> </a>
 12:             </li>
 13: 
 14:             <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
 15:                         class="bi bi-chat-text"></i> <span class="navbar-badge badge text-bg-danger">3</span> </a>
 16:                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
 17:                     <a href="#" class="dropdown-item">
 18:                         <!--begin::Message-->
 19:                         <div class="d-flex">
 20:                             <div class="flex-shrink-0"> <img src="{{ asset('assets/dashboard/images/img_user.gif') }}"
 21:                                     alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
 22:                             <div class="flex-grow-1">
 23:                                 <h3 class="dropdown-item-title">
 24:                                     مركز دار الرؤى
 25:                                     <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
 26:                                 </h3>
 27:                                 <p class="fs-7">هلا</p>
 28:                                 <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
 29:                                 </p>
 30:                             </div>
 31:                         </div> <!--end::Message-->
 32:                     </a>
 33:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item">
 34:                         <!--begin::Message-->
 35:                         <div class="d-flex">
 36:                             <div class="flex-shrink-0"> <img src="{{ asset('assets/dashboard/images/img_user.gif') }}"
 37:                                     alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
 38:                             <div class="flex-grow-1">
 39:                                 <h3 class="dropdown-item-title">
 40:                                     مركز دار الرؤى
 41:                                     <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i>
 42:                                     </span>
 43:                                 </h3>
 44:                                 <p class="fs-7">مرحبا</p>
 45:                                 <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
 46:                                 </p>
 47:                             </div>
 48:                         </div> <!--end::Message-->
 49:                     </a>
 50:                     <div class="dropdown-divider"></div>
 51:                     {{-- <a href="#" class="dropdown-item">
 52:                         <!--begin::Message-->
 53:                         <div class="d-flex">
 54:                             <div class="flex-shrink-0"> <img src="{{ asset('assets/dashboard/images/img_user.gif') }}"
 55:                                     alt="User Avatar" class="img-size-50 rounded-circle me-3"> </div>
 56:                             <div class="flex-grow-1">
 57:                                 <h3 class="dropdown-item-title">
 58:                                     Nora Silvester
 59:                                     <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i>
 60:                                     </span>
 61:                                 </h3>
 62:                                 <p class="fs-7">The subject goes here</p>
 63:                                 <p class="fs-7 text-secondary"> <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
 64:                                 </p>
 65:                             </div>
 66:                         </div>
 67:                     </a> --}}
 68:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">See
 69:                         All
 70:                         Messages</a>
 71:                 </div>
 72:             </li>
 73:             <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
 74:                         class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
 75:                 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span
 76:                         class="dropdown-item dropdown-header">15 Notifications</span>
 77:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i
 78:                             class="bi bi-envelope me-2"></i> 4 new messages
 79:                         <span class="float-end text-secondary fs-7">3 mins</span> </a>
 80:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i
 81:                             class="bi bi-people-fill me-2"></i> 8 friend requests
 82:                         <span class="float-end text-secondary fs-7">12 hours</span> </a>
 83:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"> <i
 84:                             class="bi bi-file-earmark-fill me-2"></i> 3 new reports
 85:                         <span class="float-end text-secondary fs-7">2 days</span> </a>
 86:                     <div class="dropdown-divider"></div> <a href="#" class="dropdown-item dropdown-footer">
 87:                         See All Notifications
 88:                     </a>
 89:                 </div>
 90:             </li>
 91: 
 92:             <!--begin::Fullscreen Toggle-->
 93:             <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i
 94:                         data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize"
 95:                         class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li>
 96:             <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
 97: 
 98:             <li class="nav-item dropdown user-menu"> <a href="#" class="nav-link dropdown-toggle"
 99:                     data-bs-toggle="dropdown"> <img
100:                         src="{{ empty(currUserHelper()->logo) ? asset('assets/dashboard/images/img_user.gif') : url(\App\Enums\FilesFolderPathEnum::USERS_IMAGES->value . currUserHelper()->logo) }}"
101:                         class="user-image rounded-circle shadow" alt="User Image"> <span
102:                         class="d-none d-md-inline">{{ currUserHelper()->name ?? ' الإدارة' }}</span> </a>
103:                 <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
104:                     <li class="user-header text-bg-primary"> <img
105:                             src="{{ empty(currUserHelper()->logo) ? asset('assets/dashboard/images/img_user.gif') : url(\App\Enums\FilesFolderPathEnum::USERS_IMAGES->value . currUserHelper()->logo) }}"
106:                             class="rounded-circle shadow" alt="User Image">
107:                         <p>
108:                             {{ currUserHelper()->name ?? 'الإسم' }}
109:                             <small>{{ currUserHelper()->user_name ?? ' الإدارة' }}</small>
110:                         </p>
111:                     </li>
112:                     {{-- <li class="user-body">
113:                         <div class="row">
114:                             <div class="col-4 text-center"> <a href="#">Followers</a> </div>
115:                             <div class="col-4 text-center"> <a href="#">Sales</a> </div>
116:                             <div class="col-4 text-center"> <a href="#">Friends</a> </div>
117:                         </div>
118:                     </li> --}}
119:                     <li class="row user-footer text-center mb-3">
120:                         <div class="col-md-6 mt-3">
121:                             <a href="#" class="btn btn-primary btn-block w-100">الملف الشخصي</a>
122:                         </div>
123:                         <div class="col-md-6 mt-3">
124:                             <form method="POST" id="formDataLogout" action="{{ route('logout') }}">
125:                                 @csrf
126:                                 <a href="#" onclick="event.preventDefault(); this.closest('form').submit();"
127:                                     class="btn btn-primary btn-block w-100">تسجيل الخروج</a>
128:                             </form>
129:                         </div>
130:                     </li>
131: 
132:                 </ul>
133:             </li>
134:         </ul>
135:     </div>
136: </nav>
```

## File: resources/views/dashboard/included/toast-message.blade.php
```php
 1: <script>
 2:     @if (session()->has('success'))
 3:         swalToast({
 4:             title: "{{ session('success') }}"
 5:         });
 6:     @endif
 7:     @if (session()->has('error'))
 8:         swalToast({
 9:             title: "{{ session('error') }}",
10:             icon: "error"
11:         });
12:     @endif
13: </script>
```

## File: resources/views/dashboard/layouts/app.blade.php
```php
  1: <!DOCTYPE html>
  2: <html lang="ar" dir="rtl">
  3: 
  4: <head>
  5:     <meta charset="UTF-8">
  6:     <meta http-equiv="X-UA-Compatible" content="IE=edge">
  7:     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  8:     <meta name="csrf-token" content="{{ csrf_token() }}">
  9: 
 10:     <title> @yield('title') | {{ config('app.name') }}</title>
 11: 
 12:     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 13: 
 14:     <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.min.css" />
 15:     <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
 16:     <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.min.js"></script>
 17: 
 18:     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css"
 19:         integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous">
 20:     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.css"
 21:         integrity="sha512-rDHV59PgRefDUbMm2lSjvf0ZhXZy3wgROFyao0JxZPGho3oOuWejq/ELx0FOZJpgaE5QovVtRN65Y3rrb7JhdQ=="
 22:         crossorigin="anonymous" referrerpolicy="no-referrer" />
 23:     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
 24:         integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
 25:         crossorigin="anonymous" referrerpolicy="no-referrer" />
 26: 
 27:     <!-- Include Moment.js CDN -->
 28:     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.30.1/moment.min.js"></script>
 29: 
 30:     <!-- Include Bootstrap DateTimePicker CDN -->
 31:     <link
 32:         href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
 33:         rel="stylesheet">
 34:     <script
 35:         src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js">
 36:     </script>
 37:     <!-- Font Awesome Icons -->
 38:     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 39:         integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
 40:         crossorigin="anonymous" referrerpolicy="no-referrer" />
 41: 
 42:     <link href='https://fonts.googleapis.com/css?family=Droid%20Arabic%20Kufi' rel='stylesheet' type='text/css'>
 43: 
 44:     <link rel="stylesheet" href="{{ asset('assets/dashboard/css/adminlte.rtl.css') }}">
 45:     <link rel="stylesheet" href="{{ asset('assets/dashboard/css/custom.css') }}">
 46: 
 47:     @stack('css_styles')
 48:     {{-- <style>
 49:         * {
 50:             font-family: 'Droid Arabic Kufi';
 51:             font-size: 13px;
 52:             font-weight: 400;
 53:             font-style: normal;
 54:         }
 55:     </style> --}}
 56: </head>
 57: 
 58: <body class="sidebar-expand-lg bg-body-tertiary">
 59:     <!-- GLOBAL-LOADER -->
 60:     {{-- <div id="global-loader">
 61:         <img src="https://alruaa.oxfordtraining.org.uk/dashboard-assets/images/loader.svg" class="loader-img"
 62:             alt="Loader">
 63:     </div> --}}
 64:     <!-- /GLOBAL-LOADER -->
 65: 
 66:     <div class="app-wrapper">
 67:         @include('dashboard.included.header')
 68:         @include('dashboard.included.sidebar')
 69:         @include('shared.alert_danger')
 70:         @include('shared.loading_modal')
 71: 
 72:         @yield('content')
 73: 
 74:         @include('dashboard.included.footer')
 75:     </div>
 76: 
 77:     <script>
 78:         var baseUrl = '{{ url('/') . '/' }}'
 79:     </script>
 80:     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
 81:         integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
 82:         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 83:     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 84:         integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
 85:     </script>
 86:     <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.9.1/summernote-bs5.min.js"
 87:         integrity="sha512-qTQLA91yGDLA06GBOdbT7nsrQY8tN6pJqjT16iTuk08RWbfYmUz/pQD3Gly1syoINyCFNsJh7A91LtrLIwODnw=="
 88:         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 89:     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
 90:         integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
 91:         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 92:     <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/i18n/ar.min.js"
 93:         integrity="sha512-OhFAHE0MI75RpzE5EbUHuZ4Ql0b5Sqinj6yLJ7qxTqcCdxDykIvnopD2uAfXC8LeJRJhazL5r7HnqOGdZbgKQA=="
 94:         crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 95: 
 96: 
 97:     <script src="{{ asset('assets/dashboard/js/adminlte.js') }}"></script>
 98:     <script src="{{ asset('assets/dashboard/js/custom.js') }}"></script>
 99: 
100:     {{-- add stack  --}}
101:     @stack('my-java-script')
102: 
103:     <script>
104:         $(document).ready(function() {
105:             $(document).on('click', '.unread-notification-counter', function() {
106:                 $.ajax({
107:                     datatype: "json",
108:                     type: "get",
109:                     url: baseUrl + "mark-as-read",
110:                     success: function(res) {
111:                         if (res.success == true) {
112:                             $('#unreadNotificationCounter').html('0');
113:                         }
114:                     },
115:                 })
116:             })
117:         })
118:     </script>
119: </body>
120: 
121: </html>
```

## File: resources/views/dashboard/requests-management/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'إدارة الطلبات')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 إدارة الطلبات
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">إدارة الطلبات</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">رقم الطلب</th>
 32:                                         <th class="text-center">القسم</th>
 33:                                         <th class="text-center">مدينة الطلب</th>
 34:                                         <th class="text-center">تاريخ الطلب</th>
 35:                                         <th class="text-center">عدد الردود</th>
 36:                                         <th class="text-center">الحالة</th>
 37:                                         <th class="text-center"></th>
 38:                                     </tr>
 39:                                 </thead>
 40:                                 <tbody>
 41:                                 </tbody>
 42:                             </table>
 43:                         </div>
 44:                     </div>
 45:                 </div>
 46:             </div>
 47:         </div>
 48:     </main>
 49: @endsection
 50: 
 51: @push('my-java-script')
 52:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 53:     @include('dashboard.included.toast-message')
 54:     @include('shared.show-alert-validation-error')
 55:     <script>
 56:         $(document).ready(function() {
 57:             var _columns = eval(
 58:                 '[{"columns" : [{"data": "request_id", "className": "text-center align-middle"}, {"data": "cat_name_ar", "className": "text-center align-middle"}, {"data": "city_customer_name_ar", "className": "text-center align-middle"}, {"data": "request_date", "className": "text-center align-middle"}]}]'
 59:             );
 60: 
 61:             _columns[0].columns.push({
 62:                 "data": null,
 63:                 "orderable": false,
 64:                 "className": "text-center",
 65:                 "render": function(data, type, row, meta) {
 66:                     return '<div class="cell-counter-link"><a href="' + baseUrl +
 67:                         'dashboard/response-management/responses/' + data.request_id +
 68:                         '" ><span><i class="fa-solid fa-plus me-1"></i>' + data
 69:                         .count_response +
 70:                         '</span></a></div>';
 71:                 }
 72:             });
 73: 
 74:             _columns[0].columns.push({
 75:                 "data": null,
 76:                 "orderable": false,
 77:                 "className": "text-center align-middle",
 78:                 "render": function(data, type, row, meta) {
 79:                     var text =
 80:                         '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
 81:                     if (data.request_status == '{{ 'open' }}') {
 82:                         text +=
 83:                             '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">مفتوح</span></a>';
 84:                     } else if (data.request_status == '{{ 'closed' }}') {
 85:                         text +=
 86:                             '<i class="fa-regular fa-circle-dot text-danger me-1"></i><span class="mx-2">مغلق</span></a>';
 87:                     } else if (data.request_status == '{{ 'canceled' }}') {
 88:                         text +=
 89:                             '<i class="fa-regular fa-circle-dot text-warning me-1"></i><span class="mx-2">ملغي</span></a>';
 90:                     } else {
 91:                         text +=
 92:                             '<i class="fa-regular fa-circle-dot text-primary me-1"></i><span class="mx-2">مكتمل</span></a>';
 93:                     }
 94: 
 95:                     text += '<ul class="dropdown-menu">' +
 96:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
 97:                         data.request_id +
 98:                         '" data-status="open"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">مفتوح</span></a></li>' +
 99: 
100:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
101:                         data.request_id +
102:                         '" data-status="closed"><i class="fa-regular fa-circle-dot text-danger mx-2"></i><span class="mx-2">مغلق</span></a></li>' +
103: 
104:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
105:                         data.request_id +
106:                         '" data-status="canceled"><i class="fa-regular fa-circle-dot text-warning mx-2"></i><span class="mx-2">ملغي</span></a></li>' +
107: 
108:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
109:                         data.request_id +
110:                         '" data-status="completed"><i class="fa-regular fa-circle-dot text-primary mx-2"></i><span class="mx-2">مكتمل</span></a></li>' +
111: 
112:                         '</ul>';
113:                     return text += '</div>';
114:                 }
115:             });
116: 
117:             _columns[0].columns.push({
118:                 "data": null,
119:                 "orderable": false,
120:                 "className": "text-center align-middle",
121:                 "render": function(data, type, row, meta) {
122:                     var text =
123:                         '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
124: 
125:                     text += '<a href="' +
126:                         baseUrl + 'dashboard/requests-management/show/' + data.request_id +
127:                         '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';
128: 
129:                     text += '<a id="deleteActionDropdownId" data-id="' + data.request_id +
130:                         '" data-action="' +
131:                         baseUrl + 'dashboard/requests-management/delete/' + data
132:                         .request_id +
133:                         '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';
134: 
135:                     return text += '</div></div>';
136:                 }
137:             });
138:             let myDatatable = customDatatable({
139:                 url: '{{ 'dashboard/requests-management' }}',
140:                 columns: _columns
141:             });
142: 
143:             $(document).on('click', 'a.statusUpdateDropdownId', function(e) {
144:                 let id = $(this).data('id');
145:                 let status = $(this).data('status');
146:                 let formData = new FormData();
147:                 formData.append('id', id);
148:                 formData.append('status', status);
149:                 ajax_setup();
150:                 postDataAjax({
151:                     url: baseUrl + `dashboard/requests-management/update-status`,
152:                     formData: formData,
153:                     success: function(res) {
154:                         if (res.success == true) {
155:                             $('#datatableID').DataTable().ajax.reload();
156:                             swalToast({
157:                                 title: res.message
158:                             });
159:                         } else {
160:                             swalToast({
161:                                 title: res.message,
162:                                 icon: 'error'
163:                             });
164:                         }
165:                     }
166:                 });
167:             });
168: 
169:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
170:                 e.preventDefault();
171:                 var dataDelete = $(this).data('id');
172:                 var myUrl = $(this).data('action');
173:                 swalAlertDeleteConfirm({
174:                     isConfirmed: function() {
175:                         deleteDataAjax({
176:                             url: myUrl,
177:                             success: function(res) {
178:                                 if (res.success) {
179:                                     $('#datatableID').DataTable().ajax.reload();
180:                                 } else {
181:                                     swalToast({
182:                                         title: res.message,
183:                                         icon: 'error'
184:                                     });
185:                                 }
186:                             }
187:                         });
188:                     }
189:                 });
190:             });
191:         })
192:     </script>
193: @endpush
```

## File: resources/views/dashboard/requests-management/partials/request-details-section.blade.php
```php
  1: <div class="card card-primary card-outline mb-4 mt-1">
  2:      <div class="card-header py-2">
  3:          <div class="card-title">تفاصيل الطلب : {{ $requestDetails->request_id ?? '' }}</div>
  4:      </div>
  5:      <div class="card-body">
  6:          <div class="table-responsive mt-2">
  7:              <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
  8:                  <tbody>
  9:                      <tr>
 10:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1">رقم الطلب
 11:                          </td>
 12:                          <td class="text-center align-middle" style="width: 70%;">
 13:                              {{ $requestDetails->request_id ?? '' }}</td>
 14:                      </tr>
 15:                      <tr>
 16:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1">القسم</td>
 17:                          <td class="text-center align-middle" style="width: 70%;">
 18:                              {{ $requestDetails->cat_name_ar ?? '' }}</td>
 19:                      </tr>
 20:                      <tr>
 21:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1">تاريخ الطلب
 22:                          </td>
 23:                          <td class="text-center align-middle" style="width: 70%;">
 24:                              {{ $requestDetails->request_date ?? '' }}</td>
 25:                      </tr>
 26:                      <tr>
 27:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> مدينة العميل
 28:                          </td>
 29:                          <td class="text-center align-middle" style="width: 70%;">
 30:                              {{ $requestDetails->city_customer_name_ar ?? '' }}</td>
 31:                      </tr>
 32:                      <tr>
 33:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> نطاق المدن
 34:                          </td>
 35:                          <td class="text-center align-middle" style="width: 70%;">
 36:                              @foreach ($requestDetails->cities as $city)
 37:                                  <span class="badge text-white px-3 py-2 mx-1"
 38:                                      style="background-color: #2a4d73; font-weight: 500;">{{ $city ?? '' }}</span>
 39:                              @endforeach
 40:                          </td>
 41:                      </tr>
 42:                      <tr>
 43:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الماركة
 44:                          </td>
 45:                          <td class="text-center align-middle" style="width: 70%;">
 46:                              @foreach ($requestDetails->brandsNames as $brand)
 47:                                  <span class="badge text-white px-3 py-2 mx-1"
 48:                                      style="background-color: #2a4d73; font-weight: 500;">{{ $brand ?? '' }}</span>
 49:                              @endforeach
 50:                          </td>
 51:                      </tr>
 52:                      <tr>
 53:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1">تفاصيل الطلب
 54:                          </td>
 55:                          <td class="text-center align-middle" style="width: 70%;">
 56:                              {{ $requestDetails->description ?? '' }}</td>
 57:                      </tr>
 58:                      <tr>
 59:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> حالة الطلب
 60:                          </td>
 61:                          <td class="text-center align-middle" style="width: 70%; font-weight: bold;">
 62:                              {{ App\Enums\RequestCustomerStatusEnum::trans($requestDetails->request_status ?? '') }}
 63:                          </td>
 64:                      </tr>
 65: 
 66:                      @foreach ($requestDetails->customFields as $item)
 67:                          <tr>
 68:                              <td class="text-center" style="width: 30%; background-color: #f1f1f1">
 69:                                  {{ $item['key'] }}</td>
 70:                              <td class="text-center align-middle" style="width: 70%;">
 71:                                  {{ $item['value'] }}
 72:                              </td>
 73:                          </tr>
 74:                      @endforeach
 75:                  </tbody>
 76:              </table>
 77:          </div>
 78: 
 79:          <div class="mt-5">
 80:              @foreach ($requestDetails->requestImages as $item)
 81:                  <img src="{{ route('uploads-private', ['filename' => $item->image_name]) }}" class="img-fluid"
 82:                      alt="الصورة" style="width: 400px;">
 83:              @endforeach
 84:          </div>
 85: 
 86:          {{-- <div class="d-flex justify-content-center mt-5">
 87:                             <form id="activeStatusVendorForm"
 88:                                 action="{{ route('dashboard.vendors-management.join-requests.active-status') }}"
 89:                                 method="POST" class="mx-2">
 90:                                 @csrf
 91:                                 <input type="hidden" name="userId" value="{{ $requestDetails->user_id ?? 0 }}">
 92:                                 <button id="btnActive" type="submit" class="btn btn-success px-4 py-2">قبول
 93:                                     الطلب</button>
 94:                             </form>
 95:                             <button type="button" id="btnRejectOpenModal" class="btn btn-danger px-4 py-2"
 96:                                 data-action="{{ route('dashboard.vendors-management.join-requests.rejected-status', ['userId' => $requestDetails->user_id ?? 0]) }}"
 97:                                 data-id="{{ $requestDetails->user_id ?? 0 }}">رفض
 98:                                 الطلب</button>
 99:                         </div> --}}
100:      </div>
101:  </div>
```

## File: resources/views/dashboard/requests-management/partials/user-details-request-section.blade.php
```php
 1: <div class="card card-primary card-outline mb-4 mt-1">
 2:      <div class="card-header py-2">
 3:          <div class="card-title">بيانات العميل (المرسل)</div>
 4:      </div>
 5:      <div class="card-body">
 6:          <div class="text-center mb-4">
 7:              <img src="{{ $requestDetails->user_logo ? url('uploads/' . $requestDetails->user_name ?? '') : url('assets/dashboard/images/img_user.gif') }}"
 8:                  alt="{{ $requestDetails->user_name ?? '' }}" class="img-fluid" style="width: 100px;">
 9:          </div>
10:          <div class="table-responsive mt-2">
11:              <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
12:                  <tbody>
13:                      <tr>
14:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1">معرف العميل ID</td>
15:                          <td class="text-center align-middle" style="width: 70%;">
16:                              {{ $requestDetails->user_id ?? '' }}</td>
17:                      </tr>
18:                      <tr>
19:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الاسم
20:                          </td>
21:                          <td class="text-center align-middle" style="width: 70%;">
22:                              {{ $requestDetails->user_name ?? '' }}</td>
23:                      </tr>
24:                      <tr>
25:                          <td class="text-center" style="width: 30%; background-color: #f1f1f1"> رقم الجوال
26:                          </td>
27:                          <td class="text-center align-middle" style="width: 70%;">
28:                              <a
29:                                  href="tel:{{ $requestDetails->user_phone ?? '' }}">{{ $requestDetails->user_phone ?? '' }}</a>
30:                          </td>
31:                      </tr>
32:                  </tbody>
33:              </table>
34:          </div>
35:      </div>
36:  </div>
```

## File: resources/views/dashboard/requests-management/show.blade.php
```php
 1: @extends('dashboard.layouts.app')
 2: @section('title', 'تفاصيل الطلب')
 3: @section('content')
 4:     <main class="app-main">
 5:         <div class="app-content-header py-2">
 6:             <div class="container-fluid">
 7:                 <div class="row">
 8:                     <div class="col-sm-6">
 9:                         <ol class="breadcrumb float-sm-start">
10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
11:                             <li class="breadcrumb-item active" aria-current="page">
12:                                 تفاصيل الطلب
13:                             </li>
14:                         </ol>
15:                     </div>
16:                 </div>
17:             </div>
18:         </div>
19: 
20:         <div class="app-content">
21:             <div class="container-fluid">
22:                 <div class="row g-4">
23:                     <div class="col-md-8">
24:                         @include('dashboard.requests-management.partials.request-details-section')
25:                     </div>
26:                     <div class="col-md-4">
27:                         @include('dashboard.requests-management.partials.user-details-request-section')
28:                     </div>
29:                 </div>
30:             </div>
31:     </main>
32:     <div class="modal fade" id="myModalId" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
33:         aria-labelledby="myModelLabel" aria-hidden="true">
34:         <div class="modal-dialog  modal-lg" role="document">
35:             <div class="modal-content">
36:                 <div class="modal-header bg-modal-header">
37:                     <h5 class="modal-title" id="titleModelLabel">رفض طلب الإنظمام</h5>
38:                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
39:                 </div>
40:                 <div class="modal-body">
41:                     <form method="post" id="formDataRejectStatus">
42:                         @csrf
43:                         <div class="form-group">
44:                             <x-custom.label-input :label="'سبب الرفض'" :labelRequired="true" :name="'rejectReason'" />
45:                         </div>
46:                         <div class="modal-footer mt-5 pb-0 d-flex  align-items-start">
47:                             <button type="submit" id="btnReject" class="btn btn-primary px-3">موافق</button>
48:                             <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">إغلاق</button>
49:                         </div>
50:                     </form>
51:                 </div>
52:             </div>
53:         </div>
54:     </div>
55: @endsection
56: 
57: @push('my-java-script')
58:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
59:     @include('dashboard.included.toast-message')
60:     @include('shared.show-alert-validation-error')
61:     <script>
62:         $(document).ready(function() {
63:             $('#activeStatusVendorForm #btnActive').click(function(e) {
64:                 e.preventDefault();
65:                 swalAlertConfirm({
66:                     text: 'هل انت متاكد من قبول طلب الانظمام لهذه الشركة؟',
67:                     isConfirmed: function() {
68:                         $('#btnActive').addClass("disabled").html(spinnerBorderLight()).attr(
69:                             'disabled', true);
70:                         $("#activeStatusVendorForm").submit()
71:                     }
72:                 });
73:             });
74: 
75:             $('button#btnRejectOpenModal').click(function() {
76:                 const url = $(this).data('action');
77:                 $('span.error').html('');
78:                 $('#formDataRejectStatus').trigger("reset");
79:                 $('#myModalId').modal('show');
80:                 $('#formDataRejectStatus').attr('action', url);
81:             });
82: 
83:             $('#formDataRejectStatus #btnReject').click(function(e) {
84:                 e.preventDefault();
85:                 if (requiredValidation("#rejectReason")) {
86:                     $('#btnReject').addClass("disabled").html(spinnerBorderLight()).attr(
87:                         'disabled', true);
88:                     $("#formDataRejectStatus").submit();
89:                 }
90:             });
91:         })
92:     </script>
93: @endpush
```

## File: resources/views/dashboard/response-management/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'ردود الطلب')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 ردود الطلب
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title"> ردود الطلب</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">رقم الرد</th>
 32:                                         <th class="text-center">إسم الشركة</th>
 33:                                         <th class="text-center">حالة الرد</th>
 34:                                         <th class="text-center">السعر</th>
 35:                                         <th class="text-center">مدة الضمان</th>
 36:                                         <th class="text-center">تاريخ الرد</th>
 37:                                         <th class="text-center">ملاحظات الرد</th>
 38:                                     </tr>
 39:                                 </thead>
 40:                                 <tbody>
 41:                                 </tbody>
 42:                             </table>
 43:                         </div>
 44:                     </div>
 45:                 </div>
 46:             </div>
 47:         </div>
 48:     </main>
 49: @endsection
 50: 
 51: @push('my-java-script')
 52:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 53:     @include('dashboard.included.toast-message')
 54:     @include('shared.show-alert-validation-error')
 55:     <script>
 56:         $(document).ready(function() {
 57:             var _columns = eval(
 58:                 '[{"columns" : [{"data": "response_id", "className": "text-center align-middle"}]}]'
 59:             );
 60: 
 61:             _columns[0].columns.push({
 62:                 "data": null,
 63:                 "orderable": false,
 64:                 "className": "text-center",
 65:                 "render": function(data, type, row, meta) {
 66:                     return '<a href="' + baseUrl + 'dashboard/vendors-management/vendors/show/' + data
 67:                         .user_id +
 68:                         '">' + data.company_name_ar + '</a>';
 69:                 }
 70:             });
 71: 
 72:             _columns[0].columns.push({
 73:                 "data": "response_status",
 74:                 "className": "text-center",
 75:             });
 76: 
 77:             _columns[0].columns.push({
 78:                 "data": "price_response",
 79:                 "className": "text-center",
 80:             });
 81: 
 82:             _columns[0].columns.push({
 83:                 "data": "warranty_response",
 84:                 "className": "text-center",
 85:             });
 86:             _columns[0].columns.push({
 87:                 "data": "response_date",
 88:                 "className": "text-center",
 89:             });
 90:             _columns[0].columns.push({
 91:                 "data": "note_response",
 92:                 "className": "text-center",
 93:             });
 94: 
 95:             let myDatatable = customDatatable({
 96:                 url: '{{ 'dashboard/response-management/responses/' . request()->route('requestId') }}',
 97:                 columns: _columns
 98:             });
 99: 
100:             $(document).on('click', 'a.statusUpdateDropdownId', function(e) {
101:                 let id = $(this).data('id');
102:                 let status = $(this).data('status');
103:                 let formData = new FormData();
104:                 formData.append('id', id);
105:                 formData.append('status', status);
106:                 ajax_setup();
107:                 postDataAjax({
108:                     url: baseUrl + `dashboard/requests-management/update-status`,
109:                     formData: formData,
110:                     success: function(res) {
111:                         if (res.success == true) {
112:                             $('#datatableID').DataTable().ajax.reload();
113:                             swalToast({
114:                                 title: res.message
115:                             });
116:                         } else {
117:                             swalToast({
118:                                 title: res.message,
119:                                 icon: 'error'
120:                             });
121:                         }
122:                     }
123:                 });
124:             });
125: 
126:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
127:                 e.preventDefault();
128:                 var dataDelete = $(this).data('id');
129:                 var myUrl = $(this).data('action');
130:                 swalAlertDeleteConfirm({
131:                     isConfirmed: function() {
132:                         deleteDataAjax({
133:                             url: myUrl,
134:                             success: function(res) {
135:                                 if (res.success) {
136:                                     $('#datatableID').DataTable().ajax.reload();
137:                                 } else {
138:                                     swalToast({
139:                                         title: res.message,
140:                                         icon: 'error'
141:                                     });
142:                                 }
143:                             }
144:                         });
145:                     }
146:                 });
147:             });
148:         })
149:     </script>
150: @endpush
```

## File: resources/views/dashboard/shipping-request-management/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'إدارة طلبات الشحن')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 إدارة طلبات الشحن
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">إدارة طلبات الشحن</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         {{-- Search Filter  --}}
 27:                         <div class="row">
 28:                             <div class="col-md-5 mb-3">
 29:                                 <div class="form-floating">
 30:                                     <select class="form-control form-select form-control-sm" id="confirmShippingFilter">
 31:                                         <option value="1" selected>الطلبات المؤكدة</option>
 32:                                         <option value="">الكل</option>
 33:                                     </select>
 34:                                     <label for="confirmShippingFilter">الطلبات</label>
 35:                                 </div>
 36:                             </div>
 37:                             <div class="col-md-2 mb-3">
 38:                                 <button class="btn btn-primary h-100 w-100" id="btnSearchFilterDataTableId">فلترة</button>
 39:                             </div>
 40:                         </div>
 41:                         {{-- end Search Filter  --}}
 42:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 43:                             <table class="table table-hover nowrap " id="datatableID"
 44:                                 style="width:100%; padding-bottom: 100px;">
 45:                                 <thead>
 46:                                     <tr>
 47:                                         <th class="text-center">#</th>
 48:                                         <th class="text-center">رقم الطلب</th>
 49:                                         <th class="text-center">رقم الرد</th>
 50:                                         <th class="text-center">مدينة الإرسال</th>
 51:                                         <th class="text-center">مدينة الإستلام</th>
 52:                                         <th class="text-center">رقم المستلم</th>
 53:                                         <th class="text-center">مبلغ الشحن</th>
 54:                                         <th class="text-center">المبلغ الإجمالي</th>
 55:                                         <th class="text-center">موافقة الشحن</th>
 56:                                         <th class="text-center">التاريخ</th>
 57:                                         <th class="text-center">الحالة</th>
 58:                                         <th class="text-center"></th>
 59:                                     </tr>
 60:                                 </thead>
 61:                                 <tbody>
 62:                                 </tbody>
 63:                             </table>
 64:                         </div>
 65:                     </div>
 66:                 </div>
 67:             </div>
 68:         </div>
 69:     </main>
 70: @endsection
 71: 
 72: @push('my-java-script')
 73:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 74:     @include('dashboard.included.toast-message')
 75:     @include('shared.show-alert-validation-error')
 76:     <script>
 77:         $(document).ready(function() {
 78:             var _columns = eval(
 79:                 '[{"columns" : [{"data": "id", "className": "text-center align-middle"}, {"data": "request_id", "className": "text-center align-middle"}, {"data": "response_id", "className": "text-center align-middle"}, {"data": "city_origin_vendor", "className": "text-center align-middle"},{"data": "city_origin_dimensions", "className": "text-center align-middle"},{"data": "phone_origin_dimensions", "className": "text-center align-middle"},{"data": "fee_cheapest_shipping", "className": "text-center align-middle"}]}]'
 80:             );
 81: 
 82:             _columns[0].columns.push({
 83:                 "data": null,
 84:                 "orderable": false,
 85:                 "className": "text-center",
 86:                 "render": function(data, type, row, meta) {
 87:                     return data.fee_cheapest_shipping + data.amount_rate_app;
 88:                 }
 89:             });
 90: 
 91:             _columns[0].columns.push({
 92:                 "data": null,
 93:                 "orderable": false,
 94:                 "className": "text-center",
 95:                 "render": function(data, type, row, meta) {
 96:                     if (data.is_user_confirmed) {
 97:                         return '<span class="badge bg-success px-3 py-2">نعم</span>';
 98:                     } else {
 99:                         return '<span class="badge bg-danger px-3 py-2">لا</span>';
100:                     }
101:                 }
102:             });
103: 
104:             _columns[0].columns.push({
105:                 "data": null,
106:                 "orderable": false,
107:                 "className": "text-center",
108:                 "render": function(data, type, row, meta) {
109:                     return data.shipping_request_date;
110:                 }
111:             });
112: 
113:             _columns[0].columns.push({
114:                 "data": null,
115:                 "orderable": false,
116:                 "className": "text-center align-middle",
117:                 "render": function(data, type, row, meta) {
118:                     var text =
119:                         '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
120:                     if (data.status == '{{ 'Pending' }}') {
121:                         text +=
122:                             '<i class="fa-regular fa-circle-dot text-primary me-1"></i><span class="mx-2">قيد الانتظار</span></a>';
123:                     } else if (data.status == '{{ 'InProgress' }}') {
124:                         text +=
125:                             '<i class="fa-regular fa-circle-dot text-warning me-1"></i><span class="mx-2">جاري المعالجة</span></a>';
126:                     } else if (data.status == '{{ 'Completed' }}') {
127:                         text +=
128:                             '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">مكتمل</span></a>';
129:                     } else {
130:                         return '';
131:                     }
132: 
133:                     text += '<ul class="dropdown-menu">' +
134:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
135:                         data.id +
136:                         '" data-status="Pending"><i class="fa-regular fa-circle-dot text-primary mx-2"></i><span class="mx-2">قيد الانتظار</span></a></li>' +
137: 
138:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
139:                         data.id +
140:                         '" data-status="InProgress"><i class="fa-regular fa-circle-dot text-warning mx-2"></i><span class="mx-2">جاري المعالجة</span></a></li>' +
141: 
142:                         '<li><a class="dropdown-item statusUpdateDropdownId" href="javascript:void(0)" data-id="' +
143:                         data.id +
144:                         '" data-status="Completed"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">مكتمل</span></a></li>' +
145:                         '</ul>';
146:                     return text += '</div>';
147:                 }
148:             });
149: 
150:             _columns[0].columns.push({
151:                 "data": null,
152:                 "orderable": false,
153:                 "className": "text-center align-middle",
154:                 "render": function(data, type, row, meta) {
155:                     var text =
156:                         '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
157: 
158:                     text += '<a href="' +
159:                         baseUrl + 'dashboard/shipping-request-management/show/' + data.id +
160:                         '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>عرض</a>';
161: 
162:                     text += '<a id="deleteActionDropdownId" data-id="' + data.id +
163:                         '" data-action="' +
164:                         baseUrl + 'dashboard/shipping-request-management/delete/' + data
165:                         .id +
166:                         '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';
167: 
168:                     return text += '</div></div>';
169:                 }
170:             });
171:             let myDatatable = customDatatable({
172:                 url: '{{ 'dashboard/shipping-request-management' }}',
173:                 dataFilter: function(d) {
174:                     d.confirmShippingFilter = $('#confirmShippingFilter').val();
175:                 },
176:                 columns: _columns
177:             });
178: 
179:             $(document).on('click', 'a.statusUpdateDropdownId', function(e) {
180:                 let id = $(this).data('id');
181:                 let status = $(this).data('status');
182:                 let formData = new FormData();
183:                 formData.append('id', id);
184:                 formData.append('status', status);
185:                 ajax_setup();
186:                 postDataAjax({
187:                     url: baseUrl + `dashboard/shipping-request-management/update-status`,
188:                     formData: formData,
189:                     success: function(res) {
190:                         if (res.success == true) {
191:                             $('#datatableID').DataTable().ajax.reload();
192:                             swalToast({
193:                                 title: res.message
194:                             });
195:                         } else {
196:                             swalToast({
197:                                 title: res.message,
198:                                 icon: 'error'
199:                             });
200:                         }
201:                     }
202:                 });
203:             });
204: 
205:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
206:                 e.preventDefault();
207:                 var dataDelete = $(this).data('id');
208:                 var myUrl = $(this).data('action');
209:                 swalAlertDeleteConfirm({
210:                     isConfirmed: function() {
211:                         deleteDataAjax({
212:                             url: myUrl,
213:                             success: function(res) {
214:                                 if (res.success) {
215:                                     $('#datatableID').DataTable().ajax.reload();
216:                                 } else {
217:                                     swalToast({
218:                                         title: res.message,
219:                                         icon: 'error'
220:                                     });
221:                                 }
222:                             }
223:                         });
224:                     }
225:                 });
226:             });
227:         })
228:     </script>
229: @endpush
```

## File: resources/views/dashboard/shipping-request-management/partails/shipping-section.blade.php
```php
 1: <div class="card card-primary card-outline mb-4 mt-1">
 2:     <div class="card-header py-2">
 3:         <div class="card-title">أرخص شركة شحن</div>
 4:     </div>
 5:     <div class="card-body">
 6:         @if ($shippingRequest->oto_id)
 7:             <div class="alert alert-success">
 8:                 تم إنشاء طلب الشحن بنجاح مع شركة الشحن، رقم تتبع الشحنة هو: <b>{{ $shippingRequest->oto_id }}</b>
 9:             </div>
10:         @endif
11: 
12:         @if (!($shippingRequest->status === \App\Enums\StatusShippingRequestEnum::Pending))
13:             <div class="alert alert-info">
14:                 {{ \App\Enums\StatusShippingRequestEnum::trans($shippingRequest->status->value) }}
15:             </div>
16:         @elseif (!$shippingRequest->is_user_confirmed)
17:             <div class="alert alert-warning">
18:                 في إنتظار تأكيد المستخدم لطلب الشحن
19:             </div>
20:         @elseif (!isset($cheapestCompany))
21:             <div class="alert alert-info">
22:                 لا يوجد شركات شحن متاحة لهذا الطلب
23:             </div>
24:         @elseif (isset($cheapestCompany) && count($cheapestCompany) > 0)
25:             <table class="table table-borderless mb-5" style="width:100%">
26:                 <tbody>
27:                     <tr>
28:                         <th style="width:30%">إسم الشركة</th>
29:                         <td>{{ $cheapestCompany['deliveryCompanyName'] ?? '-' }}</td>
30:                     </tr>
31:                     <tr>
32:                         <th style="width:30%">السعر</th>
33:                         <td>{{ $cheapestCompany['price'] ?? '-' }}</td>
34:                     </tr>
35:                     <tr>
36:                         <th style="width:30%">مدة التوصيل المتوقعة</th>
37:                         <td>{{ $cheapestCompany['avgDeliveryTime'] ?? '-' }}</td>
38:                     </tr>
39:                 </tbody>
40:             </table>
41:             <form id="form-query-shipping" method="POST"
42:                 action="{{ route('dashboard.shipping-request-management.create-order-shipping') }}">
43:                 @csrf
44:                 <input type="hidden" name="shippingRequestId" value="{{ $shippingRequest->id }}">
45:                 <input type="hidden" name="deliveryOptionId" value="{{ $cheapestCompany['deliveryOptionId'] }}">
46:                 <button type="submit" class="btn btn-primary" id="btn-query-shipping">طلب الشحن</button>
47:             </form>
48:         @endif
49: 
50:     </div>
51: </div>
```

## File: resources/views/dashboard/shipping-request-management/show.blade.php
```php
 1: @extends('dashboard.layouts.app')
 2: @section('title', 'عرض طلب الشحن')
 3: @section('content')
 4:     <main class="app-main">
 5:         <div class="app-content-header py-2">
 6:             <div class="container-fluid">
 7:                 <div class="row">
 8:                     <div class="col-sm-6">
 9:                         <ol class="breadcrumb float-sm-start">
10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
11:                             <li class="breadcrumb-item active" aria-current="page">
12:                                 عرض طلب الشحن
13:                             </li>
14:                         </ol>
15:                     </div>
16:                 </div>
17:             </div>
18:         </div>
19:         <div class="app-content">
20:             <div class="container-fluid">
21:                 <div class="row">
22:                     <div class="col-md-6">
23:                         @include('dashboard.shipping-request-management.partails.details-shipping-section')
24:                     </div>
25:                     <div class="col-md-6">
26:                         @include('dashboard.shipping-request-management.partails.shipping-section')
27:                     </div>
28:                 </div>
29:             </div>
30:         </div>
31:     </main>
32: @endsection
33: 
34: @push('my-java-script')
35:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
36:     @include('dashboard.included.toast-message')
37:     @include('shared.show-alert-validation-error')
38:     <script>
39:         $(document).ready(function() {
40: 
41:         })
42:     </script>
43: @endpush
```

## File: resources/views/dashboard/vendors-management/join-request-vendor/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'طلبات الإنظمام')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 طلبات إنظمام الجديدة
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">طلبات إنظمام الجديدة</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">#</th>
 32:                                         <th class="text-center">رقم الشركة</th>
 33:                                         <th class="text-center">إسم الشركة</th>
 34:                                         <th class="text-center">رقم السجل</th>
 35:                                         <th class="text-center">صورة الشعار</th>
 36:                                         <th class="text-center">تاريخ الطلب</th>
 37:                                         <th class="text-center"></th>
 38:                                     </tr>
 39:                                 </thead>
 40:                                 <tbody>
 41:                                 </tbody>
 42:                             </table>
 43:                         </div>
 44:                     </div>
 45:                 </div>
 46:             </div>
 47:         </div>
 48:     </main>
 49: @endsection
 50: 
 51: @push('my-java-script')
 52:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 53:     @include('dashboard.included.toast-message')
 54:     @include('shared.show-alert-validation-error')
 55:     <script>
 56:         $(document).ready(function() {
 57:             var _columns = eval(
 58:                 '[{"columns" : [{"data": "id", "className": "text-center align-middle"}, {"data": "phone", "className": "text-center align-middle"}, {"data": "company_name_ar", "className": "text-center align-middle"}, {"data": "commercial_record", "className": "text-center align-middle"}]}]'
 59:             );
 60:             _columns[0].columns.push({
 61:                 "data": null,
 62:                 "name": "logo",
 63:                 "className": "text-center align-middle",
 64:                 "render": function(data, type, row, meta) {
 65:                     return data.logo ? '<img src="' + baseUrl + 'uploads/' + data.logo +
 66:                         '" style="width: 55px; height: 50px;" class="rounded-circle">' : '<img src="' +
 67:                         baseUrl +
 68:                         'assets/dashboard/images/img_user.gif" style="width: 55px; height: 50px;" class="rounded-circle">';
 69:                 }
 70:             });
 71:             _columns[0].columns.push({
 72:                 "data": null,
 73:                 "name": "created_at",
 74:                 "className": "text-center align-middle",
 75:                 "render": function(data, type, row, meta) {
 76:                     return data.member_since;
 77:                 }
 78:             });
 79: 
 80:             _columns[0].columns.push({
 81:                 "data": null,
 82:                 "orderable": false,
 83:                 "className": "text-center align-middle",
 84:                 "render": function(data, type, row, meta) {
 85:                     var text =
 86:                         '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
 87: 
 88:                     text += '<a href="' +
 89:                         baseUrl + 'dashboard/vendors-management/join-requests/show/' + data.id +
 90:                         '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';
 91: 
 92:                     text += '<a id="deleteActionDropdownId" data-id="' + data.id + '" data-action="' +
 93:                         baseUrl + 'dashboard/vendors-management/join-requests/delete/' + data.id +
 94:                         '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';
 95: 
 96:                     return text += '</div></div>';
 97:                 }
 98:             });
 99:             let myDatatable = customDatatable({
100:                 url: '{{ 'dashboard/vendors-management/join-requests' }}',
101:                 columns: _columns
102:             });
103: 
104:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
105:                 e.preventDefault();
106:                 var dataDelete = $(this).data('id');
107:                 var myUrl = $(this).data('action');
108:                 swalAlertDeleteConfirm({
109:                     isConfirmed: function() {
110:                         deleteDataAjax({
111:                             url: myUrl,
112:                             success: function(res) {
113:                                 if (res.success) {
114:                                     window.location.reload();
115:                                 } else {
116:                                     swalToast({
117:                                         title: res.message,
118:                                         icon: 'error'
119:                                     });
120:                                 }
121:                             }
122:                         });
123:                     }
124:                 });
125:             });
126:         })
127:     </script>
128: @endpush
```

## File: resources/views/dashboard/vendors-management/join-request-vendor/show-vendor.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'عرض بيانات الشركة')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 طلبات إنظمام الجديدة
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">طلب إنظمام شركة : {{ $vendor->company_name_ar ?? '' }}</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="text-center mb-3">
 27:                             <img src="{{ $vendor->logo ? url('uploads/' . $vendor->logo ?? '') : url('assets/dashboard/images/img_user.gif') }}"
 28:                                 alt="{{ $vendor->company_name_ar ?? '' }}" class="img-fluid" style="width: 100px;">
 29:                         </div>
 30:                         <div class="table-responsive mt-2">
 31:                             <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
 32:                                 <tbody>
 33:                                     <tr>
 34:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">معرف (ID)
 35:                                             الشركة</td>
 36:                                         <td class="text-center align-middle" style="width: 70%;">
 37:                                             {{ $vendor->user_id ?? '' }}</td>
 38:                                     </tr>
 39:                                     <tr>
 40:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">تاريخ الإنظمام
 41:                                         </td>
 42:                                         <td class="text-center align-middle" style="width: 70%;">
 43:                                             {{ $vendor->member_since ?? '' }}</td>
 44:                                     </tr>
 45:                                     <tr>
 46:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">اسم الشركة
 47:                                         </td>
 48:                                         <td class="text-center align-middle" style="width: 70%;">
 49:                                             {{ $vendor->company_name_ar ?? '' }}</td>
 50:                                     </tr>
 51:                                     <tr>
 52:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">رقم جوال
 53:                                             التسجيل</td>
 54:                                         <td class="text-center align-middle" style="width: 70%;">
 55: 
 56:                                             <a href="tel:{{ $vendor->phone ?? '' }}">{{ $vendor->phone ?? '' }}</a>
 57:                                         </td>
 58:                                     </tr>
 59:                                     <tr>
 60:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> السجل التجاري
 61:                                         </td>
 62:                                         <td class="text-center align-middle" style="width: 70%;">
 63:                                             {{ $vendor->commercial_record ?? '' }}</td>
 64:                                     </tr>
 65:                                     <tr>
 66:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> تاريخ إنتهاء
 67:                                             السجل التجاري</td>
 68:                                         <td class="text-center align-middle" style="width: 70%;">
 69:                                             {{ $vendor->date_expire_commercial_record ?? '' }}</td>
 70:                                     </tr>
 71:                                     @if ($vendor->phone_contact)
 72:                                         <tr>
 73:                                             <td class="text-center" style="width: 30%; background-color: #f1f1f1"> رقم
 74:                                                 التواصل </td>
 75:                                             <td class="text-center align-middle" style="width: 70%;">
 76:                                                 <a
 77:                                                     href="tel:{{ $vendor->phone_contact ?? '' }}">{{ $vendor->phone_contact ?? '' }}</a>
 78:                                             </td>
 79:                                         </tr>
 80:                                     @endif
 81:                                     @if ($vendor->description)
 82:                                         <tr>
 83:                                             <td class="text-center" style="width: 30%; background-color: #f1f1f1"> نبذة عن
 84:                                                 الشركة </td>
 85:                                             <td class="text-center align-middle" style="width: 70%;">
 86:                                                 {{ $vendor->description ?? '' }}</td>
 87:                                         </tr>
 88:                                     @endif
 89:                                     <tr>
 90:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> المدن</td>
 91:                                         <td class="text-center align-middle" style="width: 70%;">
 92:                                             @foreach ($vendorCities as $city)
 93:                                                 <span class="badge text-white px-3 py-2 mx-1"
 94:                                                     style="background-color: #2a4d73; font-weight: 500;">{{ $city->city_name_ar ?? '' }}</span>
 95:                                             @endforeach
 96:                                         </td>
 97:                                     </tr>
 98:                                     <tr>
 99:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الخدمات</td>
100:                                         <td class="text-center align-middle" style="width: 70%;">
101:                                             @foreach ($vendorCategories as $cat)
102:                                                 <span class="badge text-white px-3 py-2 mx-1"
103:                                                     style="background-color: #2a4d73; font-weight: 500;">{{ $cat->cat_name_ar ?? '' }}</span>
104:                                             @endforeach
105:                                         </td>
106:                                     </tr>
107:                                     <tr>
108:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> صورة السجل
109:                                             التجاري</td>
110:                                         <td class="text-center align-middle" style="width: 70%;">
111:                                             <div class="mt-2">
112:                                                 <a href="{{ route('uploads-private', ['filename' => $vendorDocument]) }}"
113:                                                     target="_blank" style="font-weight: 500; text-decoration: none;">
114:                                                     <i class="fa-solid fa-eye me-2"></i>إستعراض
115:                                                 </a>
116:                                             </div>
117:                                         </td>
118:                                     </tr>
119:                                 </tbody>
120:                             </table>
121:                         </div>
122: 
123:                         <div class="d-flex justify-content-center mt-5">
124:                             <form id="activeStatusVendorForm"
125:                                 action="{{ route('dashboard.vendors-management.join-requests.active-status') }}"
126:                                 method="POST" class="mx-2">
127:                                 @csrf
128:                                 <input type="hidden" name="userId" value="{{ $vendor->user_id ?? 0 }}">
129:                                 <button id="btnActive" type="submit" class="btn btn-success px-4 py-2">قبول
130:                                     الطلب</button>
131:                             </form>
132:                             <button type="button" id="btnRejectOpenModal" class="btn btn-danger px-4 py-2"
133:                                 data-action="{{ route('dashboard.vendors-management.join-requests.rejected-status', ['userId' => $vendor->user_id ?? 0]) }}"
134:                                 data-id="{{ $vendor->user_id ?? 0 }}">رفض
135:                                 الطلب</button>
136:                         </div>
137:                     </div>
138:                 </div>
139:             </div>
140:     </main>
141:     <div class="modal fade" id="myModalId" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
142:         aria-labelledby="myModelLabel" aria-hidden="true">
143:         <div class="modal-dialog  modal-lg" role="document">
144:             <div class="modal-content">
145:                 <div class="modal-header bg-modal-header">
146:                     <h5 class="modal-title" id="titleModelLabel">رفض طلب الإنظمام</h5>
147:                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
148:                 </div>
149:                 <div class="modal-body">
150:                     <form method="post" id="formDataRejectStatus">
151:                         @csrf
152:                         <div class="form-group">
153:                             <x-custom.label-input :label="'سبب الرفض'" :labelRequired="true" :name="'rejectReason'" />
154:                         </div>
155:                         <div class="modal-footer mt-5 pb-0 d-flex  align-items-start">
156:                             <button type="submit" id="btnReject" class="btn btn-primary px-3">موافق</button>
157:                             <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">إغلاق</button>
158:                         </div>
159:                     </form>
160:                 </div>
161:             </div>
162:         </div>
163:     </div>
164: @endsection
165: 
166: @push('my-java-script')
167:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
168:     @include('dashboard.included.toast-message')
169:     @include('shared.show-alert-validation-error')
170:     <script>
171:         $(document).ready(function() {
172:             $('#activeStatusVendorForm #btnActive').click(function(e) {
173:                 e.preventDefault();
174:                 swalAlertConfirm({
175:                     text: 'هل انت متاكد من قبول طلب الانظمام لهذه الشركة؟',
176:                     isConfirmed: function() {
177:                         $('#btnActive').addClass("disabled").html(spinnerBorderLight()).attr(
178:                             'disabled', true);
179:                         $("#activeStatusVendorForm").submit()
180:                     }
181:                 });
182:             });
183: 
184:             $('button#btnRejectOpenModal').click(function() {
185:                 const url = $(this).data('action');
186:                 $('span.error').html('');
187:                 $('#formDataRejectStatus').trigger("reset");
188:                 $('#myModalId').modal('show');
189:                 $('#formDataRejectStatus').attr('action', url);
190:             });
191: 
192:             $('#formDataRejectStatus #btnReject').click(function(e) {
193:                 e.preventDefault();
194:                 if (requiredValidation("#rejectReason")) {
195:                     $('#btnReject').addClass("disabled").html(spinnerBorderLight()).attr(
196:                         'disabled', true);
197:                     $("#formDataRejectStatus").submit();
198:                 }
199:             });
200:         })
201:     </script>
202: @endpush
```

## File: resources/views/dashboard/vendors-management/vendors-manage/index.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'إدارة الشركات')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 إدارة الشركات
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">إدارة الشركات</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="table-responsive mt-2" style="padding-bottom: 120px;">
 27:                             <table class="table table-hover nowrap " id="datatableID"
 28:                                 style="width:100%; padding-bottom: 100px;">
 29:                                 <thead>
 30:                                     <tr>
 31:                                         <th class="text-center">#</th>
 32:                                         <th class="text-center">رقم الشركة</th>
 33:                                         <th class="text-center">إسم الشركة</th>
 34:                                         <th class="text-center">رقم السجل</th>
 35:                                         <th class="text-center">صورة الشعار</th>
 36:                                         <th class="text-center">تاريخ الطلب</th>
 37:                                         <th class="text-center">الحالة</th>
 38:                                         <th class="text-center"></th>
 39:                                     </tr>
 40:                                 </thead>
 41:                                 <tbody>
 42:                                 </tbody>
 43:                             </table>
 44:                         </div>
 45:                     </div>
 46:                 </div>
 47:             </div>
 48:         </div>
 49:     </main>
 50: @endsection
 51: 
 52: @push('my-java-script')
 53:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 54:     @include('dashboard.included.toast-message')
 55:     @include('shared.show-alert-validation-error')
 56:     <script>
 57:         $(document).ready(function() {
 58:             var _columns = eval(
 59:                 '[{"columns" : [{"data": "id", "className": "text-center align-middle"}, {"data": "phone", "className": "text-center align-middle"}, {"data": "company_name_ar", "className": "text-center align-middle"}, {"data": "commercial_record", "className": "text-center align-middle"}]}]'
 60:             );
 61:             _columns[0].columns.push({
 62:                 "data": null,
 63:                 "name": "logo",
 64:                 "className": "text-center align-middle",
 65:                 "render": function(data, type, row, meta) {
 66:                     return data.logo ? '<img src="' + baseUrl + 'uploads/' + data.logo +
 67:                         '" style="width: 55px; height: 50px;" class="rounded-circle">' : '<img src="' +
 68:                         baseUrl +
 69:                         'assets/dashboard/images/img_user.gif" style="width: 55px; height: 50px;" class="rounded-circle">';
 70:                 }
 71:             });
 72:             _columns[0].columns.push({
 73:                 "data": null,
 74:                 "name": "created_at",
 75:                 "className": "text-center align-middle",
 76:                 "render": function(data, type, row, meta) {
 77:                     return data.member_since;
 78:                 }
 79:             });
 80: 
 81:             _columns[0].columns.push({
 82:                 "data": null,
 83:                 "orderable": false,
 84:                 "className": "text-center align-middle",
 85:                 "render": function(data, type, row, meta) {
 86:                     var text =
 87:                         '<div class="dropdown"> <a class="btn btn-white btn-sm dropdown-toggle btn-rounded-dropdown" href="javascript:void(0)" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
 88:                     if (data.status == '{{ 'Active' }}') {
 89:                         text +=
 90:                             '<i class="fa-regular fa-circle-dot text-success me-1"></i><span class="mx-2">نشيط</span></a>';
 91:                     } else if (data.status == '{{ 'Inactive' }}') {
 92:                         text +=
 93:                             '<i class="fa-regular fa-circle-dot me-1" style="color: #9CA3AF"></i><span class="mx-2">غير نشيط</span></a>';
 94:                     } else if (data.status == '{{ 'Suspended' }}') {
 95:                         text +=
 96:                             '<i class="fa-regular fa-circle-dot me-1" style="color: #F97316"></i><span class="mx-2">معلق</span></a>';
 97:                     } else if (data.status == '{{ 'Rejected' }}') {
 98:                         text +=
 99:                             '<i class="fa-regular fa-circle-dot text-danger me-1"></i><span class="mx-2">مرفوض</span></a>';
100:                     }
101:                     text += '<ul class="dropdown-menu">' +
102:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
103:                         data.id +
104:                         '" data-status="Active"><i class="fa-regular fa-circle-dot text-success mx-2"></i><span class="mx-2">نشيط</span></a></li>' +
105:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
106:                         data.id +
107:                         '" data-status="Inactive"><i class="fa-regular fa-circle-dot mx-2" style="color: #9CA3AF"></i><span class="mx-2">غير نشيط</span></a></li>' +
108:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
109:                         data.id +
110:                         '" data-status="Suspended"><i class="fa-regular fa-circle-dot mx-2" style="color: #F97316"></i><span class="mx-2">معلق</span></a></li>' +
111:                         '<li><a class="dropdown-item activeUserDropdownId" href="javascript:void(0)" data-id="' +
112:                         data.id +
113:                         '" data-status="Rejected"><i class="fa-regular fa-circle-dot text-danger mx-2"></i><span class="mx-2">مرفوض</span></a></li>' +
114:                         '</ul>';
115:                     return text += '</div>';
116:                 }
117:             });
118: 
119:             _columns[0].columns.push({
120:                 "data": null,
121:                 "orderable": false,
122:                 "className": "text-center align-middle",
123:                 "render": function(data, type, row, meta) {
124:                     var text =
125:                         '<div class="dropdown dropdown-action mx-3"><a  class="dropdown dropdown-toggle action-icon" data-bs-toggle="dropdown" href="javascript:void(0)" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical fs-4 fw-bold"></i></a><div class="dropdown-menu">';
126: 
127:                     text += '<a href="' +
128:                         baseUrl + 'dashboard/vendors-management/vendors/show/' + data.id +
129:                         '" class="dropdown-item"><i class="fa-solid fa-eye me-2 color-hint"></i>مشاهدة</a>';
130: 
131:                     text += '<a id="deleteActionDropdownId" data-id="' + data.id + '" data-action="' +
132:                         baseUrl + 'dashboard/vendors-management/vendors/delete/' + data.id +
133:                         '" class="dropdown-item mt-1" href="javascript:void(0)"><i class="fa-solid fa-trash-can me-2 color-hint"></i>حذف</a>';
134: 
135:                     return text += '</div></div>';
136:                 }
137:             });
138:             let myDatatable = customDatatable({
139:                 url: '{{ 'dashboard/vendors-management/vendors' }}',
140:                 columns: _columns
141:             });
142: 
143:             $(document).on('click', 'a.activeUserDropdownId', function(e) {
144:                 let formData = new FormData();
145:                 formData.append('id', $(this).data('id'));
146:                 formData.append('status', $(this).data('status'));
147:                 ajax_setup();
148:                 postDataAjax({
149:                     url: baseUrl + `dashboard/vendors-management/vendors/update-status`,
150:                     formData: formData,
151:                     success: function(res) {
152:                         if (res.success == true) {
153:                             $('#datatableID').DataTable().ajax.reload();
154:                             swalToast({
155:                                 title: res.message
156:                             });
157:                         } else {
158:                             swalToast({
159:                                 title: res.message,
160:                                 icon: 'error'
161:                             });
162:                         }
163:                     }
164:                 });
165:             });
166: 
167:             $(document).on('click', 'a#deleteActionDropdownId', function(e) {
168:                 e.preventDefault();
169:                 var dataDelete = $(this).data('id');
170:                 var myUrl = $(this).data('action');
171:                 swalAlertDeleteConfirm({
172:                     isConfirmed: function() {
173:                         deleteDataAjax({
174:                             url: myUrl,
175:                             success: function(res) {
176:                                 if (res.success) {
177:                                     window.location.reload();
178:                                 } else {
179:                                     swalToast({
180:                                         title: res.message,
181:                                         icon: 'error'
182:                                     });
183:                                 }
184:                             }
185:                         });
186:                     }
187:                 });
188:             });
189:         })
190:     </script>
191: @endpush
```

## File: resources/views/dashboard/vendors-management/vendors-manage/show.blade.php
```php
  1: @extends('dashboard.layouts.app')
  2: @section('title', 'عرض بيانات الشركة')
  3: @section('content')
  4:     <main class="app-main">
  5:         <div class="app-content-header py-2">
  6:             <div class="container-fluid">
  7:                 <div class="row">
  8:                     <div class="col-sm-6">
  9:                         <ol class="breadcrumb float-sm-start">
 10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
 11:                             <li class="breadcrumb-item active" aria-current="page">
 12:                                 طلبات إنظمام الجديدة
 13:                             </li>
 14:                         </ol>
 15:                     </div>
 16:                 </div>
 17:             </div>
 18:         </div>
 19:         <div class="app-content">
 20:             <div class="container-fluid">
 21:                 <div class="card card-primary card-outline mb-4 mt-1">
 22:                     <div class="card-header py-2">
 23:                         <div class="card-title">طلب إنظمام شركة : {{ $vendor->company_name_ar ?? '' }}</div>
 24:                     </div>
 25:                     <div class="card-body">
 26:                         <div class="text-center mb-3">
 27:                             <img src="{{ $vendor->logo ? url('uploads/' . $vendor->logo ?? '') : url('assets/dashboard/images/img_user.gif') }}"
 28:                                 alt="{{ $vendor->company_name_ar ?? '' }}" class="img-fluid" style="width: 100px;">
 29:                         </div>
 30:                         <div class="table-responsive mt-2">
 31:                             <table class="table table-bordered " style="width:100%; padding-bottom: 100px;">
 32:                                 <tbody>
 33:                                     <tr>
 34:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">معرف (ID)
 35:                                             الشركة</td>
 36:                                         <td class="text-center align-middle" style="width: 70%;">
 37:                                             {{ $vendor->user_id ?? '' }}</td>
 38:                                     </tr>
 39:                                     <tr>
 40:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">تاريخ الإنظمام
 41:                                         </td>
 42:                                         <td class="text-center align-middle" style="width: 70%;">
 43:                                             {{ $vendor->member_since ?? '' }}</td>
 44:                                     </tr>
 45:                                     <tr>
 46:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">اسم الشركة
 47:                                         </td>
 48:                                         <td class="text-center align-middle" style="width: 70%;">
 49:                                             {{ $vendor->company_name_ar ?? '' }}</td>
 50:                                     </tr>
 51:                                     <tr>
 52:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1">رقم جوال
 53:                                             التسجيل</td>
 54:                                         <td class="text-center align-middle" style="width: 70%;">
 55:                                             <a href="tel:{{ $vendor->phone ?? '' }}">{{ $vendor->phone ?? '' }}</a>
 56:                                         </td>
 57:                                     </tr>
 58:                                     <tr>
 59:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> السجل التجاري
 60:                                         </td>
 61:                                         <td class="text-center align-middle" style="width: 70%;">
 62:                                             {{ $vendor->commercial_record ?? '' }}</td>
 63:                                     </tr>
 64:                                     <tr>
 65:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> تاريخ إنتهاء
 66:                                             السجل التجاري</td>
 67:                                         <td class="text-center align-middle" style="width: 70%;">
 68:                                             {{ $vendor->date_expire_commercial_record ?? '' }}</td>
 69:                                     </tr>
 70:                                     @if ($vendor->phone_contact)
 71:                                         <tr>
 72:                                             <td class="text-center" style="width: 30%; background-color: #f1f1f1"> رقم
 73:                                                 التواصل </td>
 74:                                             <td class="text-center align-middle" style="width: 70%;">
 75:                                                 <a
 76:                                                     href="tel:{{ $vendor->phone_contact ?? '' }}">{{ $vendor->phone_contact ?? '' }}</a>
 77:                                             </td>
 78:                                         </tr>
 79:                                     @endif
 80:                                     @if ($vendor->description)
 81:                                         <tr>
 82:                                             <td class="text-center" style="width: 30%; background-color: #f1f1f1"> نبذة عن
 83:                                                 الشركة </td>
 84:                                             <td class="text-center align-middle" style="width: 70%;">
 85:                                                 {{ $vendor->description ?? '' }}</td>
 86:                                         </tr>
 87:                                     @endif
 88:                                     <tr>
 89:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> المدن</td>
 90:                                         <td class="text-center align-middle" style="width: 70%;">
 91:                                             @foreach ($vendorCities as $city)
 92:                                                 <span class="badge text-white px-3 py-2 mx-1"
 93:                                                     style="background-color: #2a4d73; font-weight: 500;">{{ $city->city_name_ar ?? '' }}</span>
 94:                                             @endforeach
 95:                                         </td>
 96:                                     </tr>
 97:                                     <tr>
 98:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> الخدمات</td>
 99:                                         <td class="text-center align-middle" style="width: 70%;">
100:                                             @foreach ($vendorCategories as $cat)
101:                                                 <span class="badge text-white px-3 py-2 mx-1"
102:                                                     style="background-color: #2a4d73; font-weight: 500;">{{ $cat->cat_name_ar ?? '' }}</span>
103:                                             @endforeach
104:                                         </td>
105:                                     </tr>
106:                                     <tr>
107:                                         <td class="text-center" style="width: 30%; background-color: #f1f1f1"> صورة السجل
108:                                             التجاري</td>
109:                                         <td class="text-center align-middle" style="width: 70%;">
110:                                             <div class="mt-2">
111:                                                 <a href="{{ route('uploads-private', ['filename' => $vendorDocument]) }}"
112:                                                     target="_blank" style="font-weight: 500; text-decoration: none;">
113:                                                     <i class="fa-solid fa-eye me-2"></i>إستعراض
114:                                                 </a>
115:                                             </div>
116:                                         </td>
117:                                     </tr>
118:                                 </tbody>
119:                             </table>
120:                         </div>
121: 
122:                         {{-- <div class="d-flex justify-content-center mt-5">
123:                             <form id="activeStatusVendorForm"
124:                                 action="{{ route('dashboard.vendors-management.join-requests.active-status') }}"
125:                                 method="POST" class="mx-2">
126:                                 @csrf
127:                                 <input type="hidden" name="userId" value="{{ $vendor->user_id ?? 0 }}">
128:                                 <button id="btnActive" type="submit" class="btn btn-success px-4 py-2">قبول
129:                                     الطلب</button>
130:                             </form>
131:                             <button type="button" id="btnRejectOpenModal" class="btn btn-danger px-4 py-2"
132:                                 data-action="{{ route('dashboard.vendors-management.join-requests.rejected-status', ['userId' => $vendor->user_id ?? 0]) }}"
133:                                 data-id="{{ $vendor->user_id ?? 0 }}">رفض
134:                                 الطلب</button>
135:                         </div> --}}
136:                     </div>
137:                 </div>
138:             </div>
139:     </main>
140:     <div class="modal fade" id="myModalId" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
141:         aria-labelledby="myModelLabel" aria-hidden="true">
142:         <div class="modal-dialog  modal-lg" role="document">
143:             <div class="modal-content">
144:                 <div class="modal-header bg-modal-header">
145:                     <h5 class="modal-title" id="titleModelLabel">رفض طلب الإنظمام</h5>
146:                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
147:                 </div>
148:                 <div class="modal-body">
149:                     <form method="post" id="formDataRejectStatus">
150:                         @csrf
151:                         <div class="form-group">
152:                             <x-custom.label-input :label="'سبب الرفض'" :labelRequired="true" :name="'rejectReason'" />
153:                         </div>
154:                         <div class="modal-footer mt-5 pb-0 d-flex  align-items-start">
155:                             <button type="submit" id="btnReject" class="btn btn-primary px-3">موافق</button>
156:                             <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">إغلاق</button>
157:                         </div>
158:                     </form>
159:                 </div>
160:             </div>
161:         </div>
162:     </div>
163: @endsection
164: 
165: @push('my-java-script')
166:     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
167:     @include('dashboard.included.toast-message')
168:     @include('shared.show-alert-validation-error')
169:     <script>
170:         $(document).ready(function() {
171:             // $('#activeStatusVendorForm #btnActive').click(function(e) {
172:             //     e.preventDefault();
173:             //     swalAlertConfirm({
174:             //         text: 'هل انت متاكد من قبول طلب الانظمام لهذه الشركة؟',
175:             //         isConfirmed: function() {
176:             //             $('#btnActive').addClass("disabled").html(spinnerBorderLight()).attr(
177:             //                 'disabled', true);
178:             //             $("#activeStatusVendorForm").submit()
179:             //         }
180:             //     });
181:             // });
182: 
183:             $('button#btnRejectOpenModal').click(function() {
184:                 const url = $(this).data('action');
185:                 $('span.error').html('');
186:                 $('#formDataRejectStatus').trigger("reset");
187:                 $('#myModalId').modal('show');
188:                 $('#formDataRejectStatus').attr('action', url);
189:             });
190: 
191:             $('#formDataRejectStatus #btnReject').click(function(e) {
192:                 e.preventDefault();
193:                 if (requiredValidation("#rejectReason")) {
194:                     $('#btnReject').addClass("disabled").html(spinnerBorderLight()).attr(
195:                         'disabled', true);
196:                     $("#formDataRejectStatus").submit();
197:                 }
198:             });
199:         })
200:     </script>
201: @endpush
```

## File: resources/views/layouts/app.blade.php
```php
 1: <!DOCTYPE html>
 2: <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 3: 
 4: <head>
 5:     <meta charset="utf-8">
 6:     <meta name="viewport" content="width=device-width, initial-scale=1">
 7:     <meta name="csrf-token" content="{{ csrf_token() }}">
 8: 
 9:     <title>{{ config('app.name', '') }}</title>
10:     <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">
11:     <link rel="apple-touch-icon" href="{{ asset('favicon.ico') }}">
12:     <!-- Fonts -->
13:     <link rel="preconnect" href="https://fonts.bunny.net">
14:     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
15: 
16:     <!-- Scripts -->
17:     @vite(['resources/css/app.css', 'resources/js/app.js'])
18: </head>
19: 
20: <body class="font-sans antialiased">
21:     <div class="min-h-screen bg-gray-100">
22:         @include('layouts.navigation')
23: 
24:         <!-- Page Heading -->
25:         @isset($header)
26:             <header class="bg-white shadow">
27:                 <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
28:                     {{ $header }}
29:                 </div>
30:             </header>
31:         @endisset
32: 
33:         <!-- Page Content -->
34:         <main>
35:             {{ $slot }}
36:         </main>
37:     </div>
38: </body>
39: 
40: </html>
```

## File: resources/views/layouts/guest.blade.php
```php
 1: <!DOCTYPE html>
 2: <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
 3: 
 4: <head>
 5:     <meta charset="utf-8">
 6:     <meta name="viewport" content="width=device-width, initial-scale=1">
 7:     <meta name="csrf-token" content="{{ csrf_token() }}">
 8: 
 9:     <title>{{ config('app.name', '') }}</title>
10:     <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
11:     <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
12:     <!-- Fonts -->
13:     <link rel="preconnect" href="https://fonts.bunny.net">
14:     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
15: 
16:     <!-- Scripts -->
17:     @vite(['resources/css/app.css', 'resources/js/app.js'])
18: </head>
19: 
20: <body class="font-sans text-gray-900 antialiased">
21:     <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
22:         <div>
23:             <a href="/">
24:                 {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
25:                 <img src="{{ asset('assets/dashboard/images/logo.png') }}" class="w-20 h-20 fill-current text-gray-500"
26:                     alt="logo image">
27:             </a>
28:         </div>
29: 
30:         <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
31:             {{ $slot }}
32:         </div>
33:     </div>
34:     @stack('my-java-script')
35: </body>
36: 
37: </html>
```

## File: resources/views/layouts/navigation.blade.php
```php
  1: <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
  2:     <!-- Primary Navigation Menu -->
  3:     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
  4:         <div class="flex justify-between h-16">
  5:             <div class="flex">
  6:                 <!-- Logo -->
  7:                 <div class="shrink-0 flex items-center">
  8:                     <a href="{{ route('dashboard') }}">
  9:                         <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
 10:                     </a>
 11:                 </div>
 12: 
 13:                 <!-- Navigation Links -->
 14:                 <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
 15:                     <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
 16:                         {{ __('Dashboard') }}
 17:                     </x-nav-link>
 18:                 </div>
 19:             </div>
 20: 
 21:             <!-- Settings Dropdown -->
 22:             <div class="hidden sm:flex sm:items-center sm:ms-6">
 23:                 <x-dropdown align="right" width="48">
 24:                     <x-slot name="trigger">
 25:                         <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
 26:                             <div>{{ Auth::user()->name }}</div>
 27: 
 28:                             <div class="ms-1">
 29:                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
 30:                                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
 31:                                 </svg>
 32:                             </div>
 33:                         </button>
 34:                     </x-slot>
 35: 
 36:                     <x-slot name="content">
 37:                         <x-dropdown-link :href="route('profile.edit')">
 38:                             {{ __('Profile') }}
 39:                         </x-dropdown-link>
 40: 
 41:                         <!-- Authentication -->
 42:                         <form method="POST" action="{{ route('logout') }}">
 43:                             @csrf
 44: 
 45:                             <x-dropdown-link :href="route('logout')"
 46:                                     onclick="event.preventDefault();
 47:                                                 this.closest('form').submit();">
 48:                                 {{ __('Log Out') }}
 49:                             </x-dropdown-link>
 50:                         </form>
 51:                     </x-slot>
 52:                 </x-dropdown>
 53:             </div>
 54: 
 55:             <!-- Hamburger -->
 56:             <div class="-me-2 flex items-center sm:hidden">
 57:                 <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
 58:                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
 59:                         <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
 60:                         <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
 61:                     </svg>
 62:                 </button>
 63:             </div>
 64:         </div>
 65:     </div>
 66: 
 67:     <!-- Responsive Navigation Menu -->
 68:     <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
 69:         <div class="pt-2 pb-3 space-y-1">
 70:             <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
 71:                 {{ __('Dashboard') }}
 72:             </x-responsive-nav-link>
 73:         </div>
 74: 
 75:         <!-- Responsive Settings Options -->
 76:         <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
 77:             <div class="px-4">
 78:                 <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
 79:                 <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
 80:             </div>
 81: 
 82:             <div class="mt-3 space-y-1">
 83:                 <x-responsive-nav-link :href="route('profile.edit')">
 84:                     {{ __('Profile') }}
 85:                 </x-responsive-nav-link>
 86: 
 87:                 <!-- Authentication -->
 88:                 <form method="POST" action="{{ route('logout') }}">
 89:                     @csrf
 90: 
 91:                     <x-responsive-nav-link :href="route('logout')"
 92:                             onclick="event.preventDefault();
 93:                                         this.closest('form').submit();">
 94:                         {{ __('Log Out') }}
 95:                     </x-responsive-nav-link>
 96:                 </form>
 97:             </div>
 98:         </div>
 99:     </div>
100: </nav>
```

## File: resources/views/profile/edit.blade.php
```php
 1: <x-app-layout>
 2:     <x-slot name="header">
 3:         <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
 4:             {{ __('Profile') }}
 5:         </h2>
 6:     </x-slot>
 7: 
 8:     <div class="py-12">
 9:         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
10:             <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
11:                 <div class="max-w-xl">
12:                     @include('profile.partials.update-profile-information-form')
13:                 </div>
14:             </div>
15: 
16:             <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
17:                 <div class="max-w-xl">
18:                     @include('profile.partials.update-password-form')
19:                 </div>
20:             </div>
21: 
22:             <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
23:                 <div class="max-w-xl">
24:                     @include('profile.partials.delete-user-form')
25:                 </div>
26:             </div>
27:         </div>
28:     </div>
29: </x-app-layout>
```

## File: resources/views/profile/partials/delete-user-form.blade.php
```php
 1: <section class="space-y-6">
 2:     <header>
 3:         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
 4:             {{ __('Delete Account') }}
 5:         </h2>
 6: 
 7:         <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
 8:             {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
 9:         </p>
10:     </header>
11: 
12:     <x-danger-button
13:         x-data=""
14:         x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
15:     >{{ __('Delete Account') }}</x-danger-button>
16: 
17:     <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
18:         <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
19:             @csrf
20:             @method('delete')
21: 
22:             <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
23:                 {{ __('Are you sure you want to delete your account?') }}
24:             </h2>
25: 
26:             <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
27:                 {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
28:             </p>
29: 
30:             <div class="mt-6">
31:                 <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
32: 
33:                 <x-text-input
34:                     id="password"
35:                     name="password"
36:                     type="password"
37:                     class="mt-1 block w-3/4"
38:                     placeholder="{{ __('Password') }}"
39:                 />
40: 
41:                 <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
42:             </div>
43: 
44:             <div class="mt-6 flex justify-end">
45:                 <x-secondary-button x-on:click="$dispatch('close')">
46:                     {{ __('Cancel') }}
47:                 </x-secondary-button>
48: 
49:                 <x-danger-button class="ms-3">
50:                     {{ __('Delete Account') }}
51:                 </x-danger-button>
52:             </div>
53:         </form>
54:     </x-modal>
55: </section>
```

## File: resources/views/profile/partials/update-password-form.blade.php
```php
 1: <section>
 2:     <header>
 3:         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
 4:             {{ __('Update Password') }}
 5:         </h2>
 6: 
 7:         <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
 8:             {{ __('Ensure your account is using a long, random password to stay secure.') }}
 9:         </p>
10:     </header>
11: 
12:     <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
13:         @csrf
14:         @method('put')
15: 
16:         <div>
17:             <x-input-label for="update_password_current_password" :value="__('Current Password')" />
18:             <x-text-input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
19:             <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
20:         </div>
21: 
22:         <div>
23:             <x-input-label for="update_password_password" :value="__('New Password')" />
24:             <x-text-input id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
25:             <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
26:         </div>
27: 
28:         <div>
29:             <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
30:             <x-text-input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
31:             <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
32:         </div>
33: 
34:         <div class="flex items-center gap-4">
35:             <x-primary-button>{{ __('Save') }}</x-primary-button>
36: 
37:             @if (session('status') === 'password-updated')
38:                 <p
39:                     x-data="{ show: true }"
40:                     x-show="show"
41:                     x-transition
42:                     x-init="setTimeout(() => show = false, 2000)"
43:                     class="text-sm text-gray-600 dark:text-gray-400"
44:                 >{{ __('Saved.') }}</p>
45:             @endif
46:         </div>
47:     </form>
48: </section>
```

## File: resources/views/profile/partials/update-profile-information-form.blade.php
```php
 1: <section>
 2:     <header>
 3:         <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
 4:             {{ __('Profile Information') }}
 5:         </h2>
 6: 
 7:         <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
 8:             {{ __("Update your account's profile information and email address.") }}
 9:         </p>
10:     </header>
11: 
12:     <form id="send-verification" method="post" action="{{ route('verification.send') }}">
13:         @csrf
14:     </form>
15: 
16:     <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
17:         @csrf
18:         @method('patch')
19: 
20:         <div>
21:             <x-input-label for="name" :value="__('Name')" />
22:             <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
23:             <x-input-error class="mt-2" :messages="$errors->get('name')" />
24:         </div>
25: 
26:         <div>
27:             <x-input-label for="email" :value="__('Email')" />
28:             <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
29:             <x-input-error class="mt-2" :messages="$errors->get('email')" />
30: 
31:             @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
32:                 <div>
33:                     <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
34:                         {{ __('Your email address is unverified.') }}
35: 
36:                         <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
37:                             {{ __('Click here to re-send the verification email.') }}
38:                         </button>
39:                     </p>
40: 
41:                     @if (session('status') === 'verification-link-sent')
42:                         <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
43:                             {{ __('A new verification link has been sent to your email address.') }}
44:                         </p>
45:                     @endif
46:                 </div>
47:             @endif
48:         </div>
49: 
50:         <div class="flex items-center gap-4">
51:             <x-primary-button>{{ __('Save') }}</x-primary-button>
52: 
53:             @if (session('status') === 'profile-updated')
54:                 <p
55:                     x-data="{ show: true }"
56:                     x-show="show"
57:                     x-transition
58:                     x-init="setTimeout(() => show = false, 2000)"
59:                     class="text-sm text-gray-600 dark:text-gray-400"
60:                 >{{ __('Saved.') }}</p>
61:             @endif
62:         </div>
63:     </form>
64: </section>
```

## File: resources/views/shared/alert_danger.blade.php
```php
 1: <div class="alert-danger-top">
 2:     <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
 3:         <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
 4:             <path
 5:                 d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z">
 6:             </path>
 7:         </symbol>
 8:     </svg>
 9:     <div class="alert alert-danger alert-dismissible fade container show" style="display: none;" id="top-message"
10:         role="alert">
11:         <svg class="bi flex-shrink-0 me-2 mb-1" style="width: 24px; height:24px;" role="img" aria-label="Danger:">
12:             <use xlink:href="#exclamation-triangle-fill" />
13:         </svg> خطأ :
14: 
15:         <ul class="alert-danger-top-text"></ul>
16:         <button type="button" class="btn-close my-btn-close-alert"></button>
17:     </div>
18: </div>
```

## File: resources/views/shared/loading_modal.blade.php
```php
 1: <div class="modal fade" id="loadingModalId" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
 2:      aria-labelledby="myModelLabel" aria-hidden="true">
 3:      <div class="modal-dialog  modal-sm modal-dialog-centered px-5" role="document">
 4:          <div class="modal-content">
 5:              <div class="modal-body">
 6:                  <div>
 7:                      <div class="d-flex justify-content-center mb-2">جارٍ المعالجة...</div>
 8:                      <div class="d-flex justify-content-center"><i
 9:                              class='fa fa-spinner fa-spin fa-3x fa-fw color-primary '></i></div>
10:                  </div>
11:              </div>
12:          </div>
13:      </div>
14:  </div>
```

## File: resources/views/shared/show-alert-validation-error.blade.php
```php
1: <script>
2:     @if ($errors->any())
3:         $('.alert-danger-top #top-message').find("ul").empty();
4:         @foreach ($errors->all() as $error)
5:             $('.alert-danger-top #top-message').find("ul").append('<li>' + '{{ $error }}' + '</li>');
6:         @endforeach
7:         $('.alert-danger-top #top-message').css('display', 'block');
8:     @endif
9: </script>
```

## File: routes/api_vendor_v1.php
```php
 1: <?php
 2: 
 3: use Illuminate\Support\Facades\Log;
 4: use Illuminate\Support\Facades\Route;
 5: 
 6: Route::post('/register-vendor', [App\Http\Controllers\API\V1\Vendor\RegisterVendorController::class, 'registerVendor']);
 7: 
 8: Route::middleware(['auth:sanctum', 'role:vendor'])->group(function () {
 9:     Route::prefix('/new-requests')->controller(App\Http\Controllers\API\V1\Vendor\NewRequestController::class)->group(function () {
10:         Route::get('/get-all-new-requests', 'getNewRequests');
11:         Route::get('/details-new-requests/{requestId}', 'detailsNewRequests');
12:     });
13: 
14:     Route::prefix('/responses-requests')->controller(App\Http\Controllers\API\V1\Vendor\ResponseRequestController::class)->group(function () {
15:         Route::get('/get-my-response-requests', 'getMyResponseRequests');
16:         Route::post('/send-response-request', 'sendResponseRequest');
17:         Route::get('/details-response-request/{responseId}', 'detailsResponseRequests');
18:     });
19: 
20:     Route::prefix('/specialties')->controller(App\Http\Controllers\API\V1\Vendor\SpecialtyVendorController::class)->group(function () {
21:         Route::get('/get-categories-specialty', 'getCategoriesSpecialty');
22:         Route::post('/update-category-specialty', 'updateCategorySpecialty');
23:         Route::get('/get-vendor-cities', 'getVendorCities');
24:         Route::post('/update-vendor-cities', 'updateVendorCities');
25:         Route::get('/get-vendor-brands-car', 'getVendorBrandsCar');
26:     });
27: 
28:     Route::prefix('/profile')->controller(App\Http\Controllers\API\V1\Vendor\ProfileVendorController::class)->group(function () {
29:         Route::get('/', 'getVendorProfile');
30:         Route::post('/update', 'updateVendorProfile');
31:         Route::post('/upload-commercial-record', 'uploadCommercialRecordImage');
32:     });
33:     Route::prefix('/app-commission')->controller(App\Http\Controllers\API\V1\Vendor\AppCommissionController::class)->group(function () {
34:         Route::post('/pay', 'payAppCommission');
35:     });
36: });
```

## File: routes/auth.php
```php
 1: <?php
 2: 
 3: use App\Http\Controllers\Auth\AuthenticatedSessionController;
 4: use App\Http\Controllers\Auth\ConfirmablePasswordController;
 5: use App\Http\Controllers\Auth\EmailVerificationNotificationController;
 6: use App\Http\Controllers\Auth\EmailVerificationPromptController;
 7: use App\Http\Controllers\Auth\NewPasswordController;
 8: use App\Http\Controllers\Auth\PasswordController;
 9: use App\Http\Controllers\Auth\PasswordResetLinkController;
10: use App\Http\Controllers\Auth\RegisteredUserController;
11: use App\Http\Controllers\Auth\VerifyEmailController;
12: use Illuminate\Support\Facades\Route;
13: 
14: Route::middleware('guest')->group(function () {
15:     Route::get('register', [RegisteredUserController::class, 'create'])
16:         ->name('register');
17: 
18:     Route::post('register', [RegisteredUserController::class, 'store']);
19: 
20:     Route::get('login', [AuthenticatedSessionController::class, 'create'])
21:         ->name('login');
22: 
23:     Route::post('login', [AuthenticatedSessionController::class, 'store']);
24: 
25:     Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
26:         ->name('password.request');
27: 
28:     Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
29:         ->name('password.email');
30: 
31:     Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
32:         ->name('password.reset');
33: 
34:     Route::post('reset-password', [NewPasswordController::class, 'store'])
35:         ->name('password.store');
36: });
37: 
38: Route::middleware('auth')->group(function () {
39:     Route::get('verify-email', EmailVerificationPromptController::class)
40:         ->name('verification.notice');
41: 
42:     Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
43:         ->middleware(['signed', 'throttle:6,1'])
44:         ->name('verification.verify');
45: 
46:     Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
47:         ->middleware('throttle:6,1')
48:         ->name('verification.send');
49: 
50:     Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
51:         ->name('password.confirm');
52: 
53:     Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
54: 
55:     Route::put('password', [PasswordController::class, 'update'])->name('password.update');
56: 
57:     Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
58:         ->name('logout');
59: });
```

## File: routes/console.php
```php
1: <?php
2: 
3: use Illuminate\Foundation\Inspiring;
4: use Illuminate\Support\Facades\Artisan;
5: 
6: Artisan::command('inspire', function () {
7:     $this->comment(Inspiring::quote());
8: })->purpose('Display an inspiring quote');
```

## File: tailwind.config.js
```javascript
 1: import defaultTheme from 'tailwindcss/defaultTheme';
 2: import forms from '@tailwindcss/forms';
 3: 
 4: /** @type {import('tailwindcss').Config} */
 5: export default {
 6:     content: [
 7:         './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
 8:         './storage/framework/views/*.php',
 9:         './resources/views/**/*.blade.php',
10:     ],
11: 
12:     theme: {
13:         extend: {
14:             fontFamily: {
15:                 sans: ['Figtree', ...defaultTheme.fontFamily.sans],
16:             },
17:         },
18:     },
19: 
20:     plugins: [forms],
21: };
```

## File: vite.config.js
```javascript
 1: import { defineConfig } from 'vite';
 2: import laravel from 'laravel-vite-plugin';
 3: 
 4: export default defineConfig({
 5:     plugins: [
 6:         laravel({
 7:             input: ['resources/css/app.css', 'resources/js/app.js'],
 8:             refresh: true,
 9:         }),
10:     ],
11: });
```

## File: app/Events/NewMessage.php
```php
 1: <?php
 2: 
 3: namespace App\Events;
 4: 
 5: use App\Models\MessageConversation;
 6: use Illuminate\Broadcasting\Channel;
 7: use Illuminate\Broadcasting\InteractsWithSockets;
 8: use Illuminate\Broadcasting\PresenceChannel;
 9: use Illuminate\Broadcasting\PrivateChannel;
10: use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
11: use Illuminate\Foundation\Events\Dispatchable;
12: use Illuminate\Queue\SerializesModels;
13: 
14: class NewMessage implements ShouldBroadcast
15: {
16:     use Dispatchable, SerializesModels;
17: 
18: 
19:     public $message;
20:     public $conversationId;
21: 
22:     public function __construct($conversationId, $message)
23:     {
24:         $this->conversationId = $conversationId;
25:         $this->message = $message;
26:     }
27: 
28:     public function broadcastOn(): array
29:     {
30:         return [new PrivateChannel("conversation.{$this->conversationId}")];
31:     }
32: 
33:     public function broadcastAs()
34:     {
35:         return 'message.sent';
36:     }
37: 
38:     public function broadcastWith()
39:     {
40:         return [
41:             'id' => $this->message->id ?? null,
42:             'sender_id' => $this->message->sender_id ?? null,
43:             'body' => $this->message->body ?? null,
44:             'image' => $this->message->image ?? null,
45:             'is_shipping_request' => (bool) ($this->message->is_shipping_request ?? false),
46:             'conversation_id' => (int) $this->conversationId,
47:             'date_sent' => $this->message->created_at?->format('h:i a') ?? '',
48:             'created_at' => $this->message->created_at?->toDateTimeString(),
49:         ];
50:     }
51: }
```

## File: app/Http/Controllers/API/NotificationBadgeController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\API;
  4: 
  5: use App\Http\Controllers\Controller;
  6: use App\Models\Conversation;
  7: use App\Models\MessageConversation;
  8: use App\Models\Vendor;
  9: use Illuminate\Http\Request;
 10: use Illuminate\Support\Facades\DB;
 11: use Illuminate\Support\Facades\Log;
 12: 
 13: class NotificationBadgeController extends Controller
 14: {
 15:     /**
 16:      * Get unread notification counts grouped by section and per-entity.
 17:      */
 18:     public function unreadCounts(Request $request)
 19:     {
 20:         try {
 21:             $user = $request->user();
 22:             if (!$user) {
 23:                 return response()->json([
 24:                     'success' => false,
 25:                     'message' => 'Unauthenticated'
 26:                 ], 401);
 27:             }
 28: 
 29:             $userId = $user->id;
 30:             $isVendor = Vendor::where('user_id', $userId)->exists();
 31: 
 32:             // Fetch unread notifications collection safely
 33:             $unreadNotifications = $user->unreadNotifications()->get();
 34: 
 35:             // 1. Unread Customer Requests (For Vendors)
 36:             $customerRequestsCount = 0;
 37:             $customerRequestsEntityCounts = [];
 38: 
 39:             // 2. Unread Company Responses (For Customers)
 40:             $companyResponsesCount = 0;
 41:             $companyResponsesEntityCounts = [];
 42: 
 43:             foreach ($unreadNotifications as $item) {
 44:                 $data = is_array($item->data) ? $item->data : (json_decode($item->data, true) ?? []);
 45:                 $category = (string)($data['category'] ?? '');
 46:                 $title = (string)($data['title'] ?? '');
 47:                 $body = (string)($data['body'] ?? '');
 48:                 $targetId = (string)($data['target_id'] ?? $data['entity_id'] ?? $data['request_id'] ?? '');
 49: 
 50:                 if ($category === 'company_responses' || str_contains($title, 'رد') || str_contains($body, 'الرد')) {
 51:                     $companyResponsesCount++;
 52:                     if ($targetId !== '') {
 53:                         $companyResponsesEntityCounts[$targetId] = ($companyResponsesEntityCounts[$targetId] ?? 0) + 1;
 54:                     }
 55:                 } elseif ($category === 'customer_requests' || str_contains($title, 'طلب جديد') || str_contains($body, 'طلب جديد')) {
 56:                     $customerRequestsCount++;
 57:                     if ($targetId !== '') {
 58:                         $customerRequestsEntityCounts[$targetId] = ($customerRequestsEntityCounts[$targetId] ?? 0) + 1;
 59:                     }
 60:                 }
 61:             }
 62: 
 63:             // Sync section count strictly with specific unread entity counts if present
 64:             if (!empty($customerRequestsEntityCounts)) {
 65:                 $customerRequestsCount = array_sum($customerRequestsEntityCounts);
 66:             }
 67:             if (!empty($companyResponsesEntityCounts)) {
 68:                 $companyResponsesCount = array_sum($companyResponsesEntityCounts);
 69:             }
 70: 
 71:             // 3. Unread Conversations (For both Users & Vendors)
 72:             $userConversationIds = Conversation::where('user_id', $userId)
 73:                 ->orWhere('vendor_id', $userId)
 74:                 ->pluck('id');
 75: 
 76:             $conversationsCount = 0;
 77:             $conversationEntityCounts = [];
 78:             $requestConversationsEntityCounts = [];
 79: 
 80:             if ($userConversationIds->isNotEmpty()) {
 81:                 $rawCounts = MessageConversation::join('conversations', 'message_conversations.conversation_id', '=', 'conversations.id')
 82:                     ->whereIn('message_conversations.conversation_id', $userConversationIds)
 83:                     ->where('message_conversations.sender_id', '!=', $userId)
 84:                     ->where(function ($q) {
 85:                         $q->where('message_conversations.read', 0)->orWhere('message_conversations.read', false)->orWhereNull('message_conversations.read');
 86:                     })
 87:                     ->select('message_conversations.conversation_id', 'conversations.request_id', DB::raw('count(*) as count'))
 88:                     ->groupBy('message_conversations.conversation_id', 'conversations.request_id')
 89:                     ->get();
 90: 
 91:                 foreach ($rawCounts as $row) {
 92:                     $conversationEntityCounts[(string)$row->conversation_id] = (int)$row->count;
 93:                     if ($row->request_id) {
 94:                         $requestConversationsEntityCounts[(string)$row->request_id] = ($requestConversationsEntityCounts[(string)$row->request_id] ?? 0) + (int)$row->count;
 95:                     }
 96:                     $conversationsCount += (int)$row->count;
 97:                 }
 98:             }
 99: 
100:             return response()->json([
101:                 'success' => true,
102:                 'data' => [
103:                     'customer_requests' => (int)$customerRequestsCount,
104:                     'company_responses' => (int)$companyResponsesCount,
105:                     'conversations' => (int)$conversationsCount,
106:                     'sections' => [
107:                         'customer_requests' => (int)$customerRequestsCount,
108:                         'company_responses' => (int)$companyResponsesCount,
109:                         'conversations' => (int)$conversationsCount,
110:                     ],
111:                     'entities' => [
112:                         'conversations' => $conversationEntityCounts,
113:                         'request_conversations' => $requestConversationsEntityCounts,
114:                         'customer_requests' => $customerRequestsEntityCounts,
115:                         'company_responses' => $companyResponsesEntityCounts,
116:                     ]
117:                 ]
118:             ]);
119:         } catch (\Throwable $e) {
120:             Log::error("[NotificationBadgeController] unreadCounts ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
121:             return response()->json([
122:                 'success' => false,
123:                 'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
124:             ], 500);
125:         }
126:     }
127: 
128:     /**
129:      * Mark a specific entity (e.g. conversation_id or request_id) as read.
130:      */
131:     public function markEntityRead(Request $request)
132:     {
133:         try {
134:             $user = $request->user();
135:             if (!$user) {
136:                 return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
137:             }
138: 
139:             $section = $request->input('section');
140:             $entityId = $request->input('entity_id');
141:             $userId = $user->id;
142: 
143:             if ($section === 'conversations' && $entityId) {
144:                 MessageConversation::where('conversation_id', $entityId)
145:                     ->where('sender_id', '!=', $userId)
146:                     ->update(['read' => 1]);
147:             } elseif ($section === 'customer_requests' || $section === 'company_responses') {
148:                 if ($entityId) {
149:                     $notifications = DB::table('notifications')
150:                         ->where('notifiable_type', get_class($user))
151:                         ->where('notifiable_id', $userId)
152:                         ->whereNull('read_at')
153:                         ->get();
154: 
155:                     $foundSpecific = false;
156:                     foreach ($notifications as $notif) {
157:                         $data = json_decode($notif->data, true) ?? [];
158:                         $targetId = (string)($data['target_id'] ?? $data['entity_id'] ?? $data['request_id'] ?? '');
159:                         if ($targetId === (string)$entityId) {
160:                             DB::table('notifications')
161:                                 ->where('id', $notif->id)
162:                                 ->update(['read_at' => now()]);
163:                             $foundSpecific = true;
164:                         }
165:                     }
166: 
167:                     if (!$foundSpecific && $notifications->isNotEmpty()) {
168:                         DB::table('notifications')
169:                             ->where('id', $notifications->first()->id)
170:                             ->update(['read_at' => now()]);
171:                     }
172:                 } else {
173:                     DB::table('notifications')
174:                         ->where('notifiable_type', get_class($user))
175:                         ->where('notifiable_id', $userId)
176:                         ->whereNull('read_at')
177:                         ->update(['read_at' => now()]);
178:                 }
179:             }
180: 
181:             return $this->unreadCounts($request);
182:         } catch (\Throwable $e) {
183:             Log::error("[NotificationBadgeController] markEntityRead ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
184:             return response()->json([
185:                 'success' => false,
186:                 'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
187:             ], 500);
188:         }
189:     }
190: 
191:     /**
192:      * Mark notifications for a specific category/section as read.
193:      */
194:     public function markCategoryRead(Request $request)
195:     {
196:         try {
197:             $user = $request->user();
198:             if (!$user) {
199:                 return response()->json(['success' => false, 'message' => 'Unauthenticated'], 401);
200:             }
201: 
202:             $category = $request->input('category');
203:             $userId = $user->id;
204: 
205:             // Direct DB update for notifications
206:             DB::table('notifications')
207:                 ->where('notifiable_type', get_class($user))
208:                 ->where('notifiable_id', $userId)
209:                 ->whereNull('read_at')
210:                 ->update(['read_at' => now()]);
211: 
212:             // Direct DB update for conversations messages
213:             if ($category === 'conversations') {
214:                 $userConversationIds = Conversation::where('user_id', $userId)
215:                     ->orWhere('vendor_id', $userId)
216:                     ->pluck('id');
217: 
218:                 if ($userConversationIds->isNotEmpty()) {
219:                     MessageConversation::whereIn('conversation_id', $userConversationIds)
220:                         ->where('sender_id', '!=', $userId)
221:                         ->update(['read' => 1]);
222:                 }
223:             }
224: 
225:             return $this->unreadCounts($request);
226:         } catch (\Throwable $e) {
227:             Log::error("[NotificationBadgeController] markCategoryRead ERROR: " . $e->getMessage() . " at " . $e->getFile() . ":" . $e->getLine());
228:             return response()->json([
229:                 'success' => false,
230:                 'message' => 'حدث خطأ غير متوقع. الرجاء المحاولة لاحقاً.'
231:             ], 500);
232:         }
233:     }
234: }
```

## File: app/Http/Controllers/Dashboard/Settings/NotificationEmailController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\Dashboard\Settings;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Models\AdminNotificationEmail;
 7: use Illuminate\Http\Request;
 8: 
 9: class NotificationEmailController extends Controller
10: {
11:     public function index()
12:     {
13:         $emails = AdminNotificationEmail::latest()->get();
14:         return view('dashboard.settings.notification-emails.index', compact('emails'));
15:     }
16: 
17:     public function store(Request $request)
18:     {
19:         $request->validate([
20:             'email' => 'required|email|unique:admin_notification_emails,email'
21:         ], [
22:             'email.required' => 'البريد الإلكتروني مطلوب.',
23:             'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
24:             'email.unique' => 'هذا البريد مسجل مسبقاً.'
25:         ]);
26: 
27:         AdminNotificationEmail::create([
28:             'email' => $request->email
29:         ]);
30: 
31:         return redirect()->back()->with('success', 'تم إضافة البريد الإلكتروني بنجاح.');
32:     }
33: 
34:     public function destroy($id)
35:     {
36:         $email = AdminNotificationEmail::findOrFail($id);
37:         $email->delete();
38: 
39:         return redirect()->back()->with('success', 'تم حذف البريد الإلكتروني بنجاح.');
40:     }
41: }
```

## File: app/Http/Controllers/FileController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers;
 4: 
 5: use App\Utils\UploadUtils;
 6: use Illuminate\Http\Request;
 7: use Illuminate\Support\Facades\Log;
 8: use Illuminate\Support\Facades\Storage;
 9: 
10: class FileController extends Controller
11: {
12:     public function getSensitiveImage($filename)
13:     {
14:         // تحقق أن الملف موجود
15:         if (!Storage::disk('local')->exists("private/{$filename}")) {
16:             abort(404, 'الملف غير موجود');
17:         }
18: 
19:         return UploadUtils::getSensitiveFile($filename);
20: 
21:         // display in flutter
22:         //         Image.network(
23:         //   "http://192.168.1.34/api/v1/user/sensitive-image/123.enc",
24:         //   headers: {
25:         //     "Authorization": "Bearer YOUR_TOKEN",
26:         //   },
27:         // )
28:     }
29: 
30:     public function getImage($filename)
31:     {
32:         $publicPath = public_path('uploads/' . $filename);
33:         if (file_exists($publicPath)) {
34:             $mimeType = mime_content_type($publicPath) ?: 'image/jpeg';
35:             return response()->file($publicPath, [
36:                 'Content-Type' => $mimeType,
37:                 'Cache-Control' => 'public, max-age=31536000',
38:             ]);
39:         }
40: 
41:         if (Storage::disk('local')->exists("private/{$filename}")) {
42:             $image = Storage::disk('local')->get("private/{$filename}");
43:             return response($image, 200)->header('Content-Type', 'image/jpeg');
44:         }
45: 
46:         if (Storage::disk('public')->exists($filename)) {
47:             $image = Storage::disk('public')->get($filename);
48:             return response($image, 200)->header('Content-Type', 'image/jpeg');
49:         }
50: 
51:         abort(404, 'الملف غير موجود');
52:     }
53: }
```

## File: app/Http/Repositories/User/Requests/RequestRepository.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Repositories\User\Requests;
 4: 
 5: use App\Models\RequestBrandScope;
 6: use App\Models\RequestCustomer;
 7: use App\Models\RequestCustomFieldValue;
 8: use App\Models\RequestEligibleVendor;
 9: use App\Models\ShippingRequest;
10: use App\Models\Vendor;
11: use Illuminate\Http\Request;
12: 
13: class RequestRepository
14: {
15:     private function queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)
16:     {
17:         $brandIdList = is_string($brandId) ? (json_decode($brandId, true) ?? $brandId) : $brandId;
18: 
19:         return Vendor::joinUsers()
20:             ->joinVendorSpecialties()
21:             ->joinVendorCities()
22:             ->leftJoinVendorBrandCars($categoryId)
23:             ->whereCategoryVendorSpecialty($categoryId)
24:             ->whereInVendorCities($citiesIdsScope)
25:             ->isActive()
26:             ->when(!empty($brandIdList), function ($query) use ($brandIdList) {
27:                 $query->where(function ($q) use ($brandIdList) {
28:                     $q->where('vendor_specialties.is_receive_all_brand_cars', true);
29: 
30:                     if (is_array($brandIdList)) {
31:                         $q->orWhereIn('vendor_brand_cars.brand_car_id', $brandIdList);
32:                     } else {
33:                         $q->orWhere('vendor_brand_cars.brand_car_id', $brandIdList);
34:                     }
35:                 });
36:             })
37:             ->distinct();
38:     }
39: 
40:     public function countFilterEligibleVendors(Request $request): int
41:     {
42:         $categoryId = $request->categoryId;
43:         $citiesIdsScope = $request->citiesIdsScope;
44:         $brandId = $request->input('brandId');
45: 
46:         return $this->queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)->count();
47:     }
48: 
49:     public function getFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)
50:     {
51:         return $this->queryFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId)->get(['vendors.id', 'vendors.user_id']);
52:     }
53: 
54:     public function createRequest(array $data): RequestCustomer
55:     {
56:         return RequestCustomer::create($data);
57:     }
58: 
59:     public function createRequestBrandScope(int $requestId, $brandId): RequestBrandScope
60:     {
61:         $brandIdList = is_string($brandId) ? (json_decode($brandId, true) ?? $brandId) : $brandId;
62:         $brandArray = is_array($brandIdList) ? array_map('intval', $brandIdList) : [(int)$brandIdList];
63: 
64:         return RequestBrandScope::create([
65:             'request_id' => $requestId,
66:             'brand_type' => 'brand_cars',
67:             'brand_ids_scope' => $brandArray,
68:         ]);
69:     }
70: 
71:     public function createRequestCustomFieldValues(array $data): RequestCustomFieldValue
72:     {
73:         return RequestCustomFieldValue::create($data);
74:     }
75: 
76:     public function createRequestEligibleVendors(array $data): RequestEligibleVendor
77:     {
78:         return RequestEligibleVendor::create($data);
79:     }
80: 
81:     public function storeShippingRequest(array $data)
82:     {
83:         return ShippingRequest::create($data);
84:     }
85: }
```

## File: app/Http/Requests/User/Request/CheckEligibleVendorsRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Requests\User\Request;
 4: 
 5: use App\Rules\RequiredBrandIfCategoryHasBrandRule;
 6: use Illuminate\Contracts\Validation\Validator;
 7: use Illuminate\Foundation\Http\FormRequest;
 8: use Illuminate\Validation\ValidationException;
 9: 
10: class CheckEligibleVendorsRequest extends FormRequest
11: {
12:     public function authorize(): bool
13:     {
14:         return auth('sanctum')->check();
15:     }
16: 
17:     protected function prepareForValidation(): void
18:     {
19:         $brandId = $this->input('brandId');
20:         if (is_string($brandId) && str_starts_with(trim($brandId), '[')) {
21:             $brandId = json_decode($brandId, true);
22:         }
23:         $this->merge([
24:             'brandId' => $brandId,
25:         ]);
26:     }
27: 
28:     public function rules(): array
29:     {
30:         return [
31:             'categoryId' => 'required|integer|exists:categories,id',
32:             'citiesIdsScope' => 'required|array|min:1',
33:             'citiesIdsScope.*' => ['required', 'integer'],
34:             'brandId' => ['nullable', new RequiredBrandIfCategoryHasBrandRule],
35:         ];
36:     }
37: 
38:     public function messages(): array
39:     {
40:         return [
41:             'categoryId.required' => 'القسم مطلوب',
42:             'categoryId.integer'  => ' القسم يجب أن يكون رقم صحيح.',
43:             'categoryId.exists'   => 'القسم المحدد غير موجود في النظام.',
44: 
45:             'citiesIdsScope.required' => 'يجب اختيار مدينة واحدة على الأقل.',
46:             'citiesIdsScope.array'    => 'تنسيق المدن غير صحيح.',
47:             'citiesIdsScope.min'      => 'يجب اختيار مدينة واحدة على الأقل.',
48:             'citiesIdsScope.*.required' => 'كل مدينة في القائمة مطلوبة.',
49:             'citiesIdsScope.*.integer'  => 'قيمة المدينة يجب أن تكون رقم صحيح.',
50: 
51:             'brandId.integer'  => 'حقل الماركة يجب أن يكون رقم صحيح.',
52:             'brandId.nullable' => 'حقل الماركة اختياري، لكن إن تم إدخاله يجب أن يكون صحيح.',
53:         ];
54:     }
55: 
56:     protected function failedValidation(Validator $validator)
57:     {
58:         $response = response()->json($validator->errors(), 422);
59:         throw (new ValidationException($validator, $response))
60:             ->errorBag($this->errorBag)
61:             ->redirectTo($this->getRedirectUrl());
62:     }
63: }
```

## File: app/Http/Services/Dashboard/ShippingRequestManagement/ShippingRequestManagementService.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Services\Dashboard\ShippingRequestManagement;
  4: 
  5: use App\Enums\StatusShippingRequestEnum;
  6: use App\Http\Repositories\Dashboard\ShippingRequestManagement\ShippingRequestManagementRepository;
  7: use App\Http\Services\BaseService;
  8: use App\Models\ShippingRequest;
  9: use App\Utils\ConfigUtils;
 10: use App\Utils\OTOServiceUtils;
 11: use Exception;
 12: use Illuminate\Http\Request;
 13: use Illuminate\Support\Facades\Http;
 14: use Illuminate\Support\Facades\Log;
 15: 
 16: class ShippingRequestManagementService extends BaseService
 17: {
 18:     public function __construct(protected ShippingRequestManagementRepository $repo, protected OTOServiceUtils $otoServiceUtils) {}
 19: 
 20:     public function index(Request $request)
 21:     {
 22:         $searchValue = $request->input('search.value');
 23: 
 24:         $recordsCount =  $this->repo->getTotalRecordsCount(ShippingRequest::class);
 25:         $recordsCountwithFilter = $this->repo->recordsCountShippingRequestWithFilter($searchValue);
 26:         $records = $this->repo->index($request, $searchValue);
 27: 
 28:         return $this->repo->formatResponseDataTables(
 29:             draw: $request->input('draw'),
 30:             recordsCount: $recordsCount,
 31:             recordsCountwithFilter: $recordsCountwithFilter,
 32:             records: $records
 33:         );
 34:     }
 35:     public function show($id)
 36:     {
 37:         $this->validate(['id' => $id], [
 38:             'id' => 'required|integer|exists:shipping_requests,id',
 39:         ]);
 40: 
 41:         $shippingRequest = $this->repo->show($id);
 42:         $accessToken = $this->otoServiceUtils->getAccessTokenOTO();
 43:         $cheapestCompany = null;
 44:         if ($shippingRequest->is_user_confirmed && $shippingRequest->status == StatusShippingRequestEnum::Pending) {
 45:             $cheapestCompany = $this->otoServiceUtils->checkDeliveryFeeAndGetCheapest(
 46:                 accessToken: $accessToken,
 47:                 originCity: $shippingRequest->city_origin_vendor,
 48:                 destinationCity: $shippingRequest->city_origin_dimensions,
 49:                 width: $shippingRequest->width,
 50:                 length: $shippingRequest->length,
 51:                 height: $shippingRequest->height,
 52:                 weight: $shippingRequest->weight
 53:             );
 54:         }
 55:         Log::info($cheapestCompany);
 56: 
 57:         return [
 58:             'shippingRequest' => $shippingRequest,
 59:             'cheapestCompany' => $cheapestCompany,
 60:         ];
 61:     }
 62: 
 63:     public function createOrderShippingRequest(Request $request)
 64:     {
 65:         $this->validate($request->all(), [
 66:             'shippingRequestId' => 'required|integer|exists:shipping_requests,id',
 67:             'deliveryOptionId' => 'required',
 68:         ]);
 69: 
 70:         $shippingRequest = $this->repo->getShippingRequestDetailById($request->input('shippingRequestId'));
 71:         Log::info('Shipping Request Details: ', ['customer_name' => $shippingRequest->customer_name, 'company_sender_name' => $shippingRequest->company_sender_name]);
 72:         $accessToken = $this->otoServiceUtils->getAccessTokenOTO();
 73:         $body = [
 74:             "orderId" =>  '766576',
 75:             "createShipment" => true, // إنشاء الشحنة مباشرة
 76:             "payment_method" => "cod", // الدفع عند الاستلام
 77:             "amount" => ConfigUtils::getAmountRateAppForCharge(),
 78:             "amount_due" => 0,
 79:             "deliveryOptionId" => $request->input('deliveryOptionId'),
 80:             // "brandId" => 1233,
 81:             // "customsValue" => "12",
 82:             // "customsCurrency" => "SAR",
 83:             // "shippingAmount" => 20,
 84:             // "subtotal" => 200,
 85:             "currency" => "SAR",
 86:             // "shippingNotes" => "be careful. it is fragile",
 87:             // "packageSize" => "small",
 88:             // "packageCount" => 2,
 89:             // "packageWeight" => 1,
 90:             // "boxWidth" => 10,
 91:             // "boxLength" => 10,
 92:             // "boxHeight" => 10,
 93:             // "orderDate" => now()->format('d/m/Y H:i'),
 94:             // "deliverySlotDate" => now()->addDay()->format('d/m/Y'),
 95:             // "deliverySlotTo" => "12pm",
 96:             // "deliverySlotFrom" => "2:30pm",
 97:             "senderName" => $shippingRequest->company_sender_name ?? '',
 98:             "senderInformation" => [
 99:                 "senderFullName" => $shippingRequest->company_sender_name ?? '',
100:                 "senderMobile" => $shippingRequest->phone_origin_vendor ?? '',
101:                 // "senderEmail" => "test@example.com",
102:                 "senderCountry" => "SA",
103:                 "senderCity" => \App\Utils\OTOServiceUtils::sanitizeCity($shippingRequest->city_origin_vendor),
104:                 "senderAddressLine" => $shippingRequest->address_origin_vendor ?? ''
105:             ],
106:             "customer" => [
107:                 "name" => $shippingRequest->company_sender_name ?? '',
108:                 // "email" => "test@test.com",
109:                 "mobile" => $shippingRequest->phone_origin_dimensions ?? '',
110:                 "address" => $shippingRequest->address_origin_dimensions ?? '',
111:                 // "district" => "Al Mughaisilah Dist.",
112:                 "city" => \App\Utils\OTOServiceUtils::sanitizeCity($shippingRequest->city_origin_dimensions),
113:                 "country" => "SA",
114:                 // "postcode" => "42315"
115:             ],
116:             "items" => [
117:                 [
118:                     // "productId" => 112,
119:                     "name" => "box 1",
120:                     "price" => ConfigUtils::getAmountRateAppForCharge(),
121:                     // "rowTotal" => 5,
122:                     // "taxAmount" => 0,
123:                     "quantity" => 1,
124:                     // "sku" => "test-product",
125:                     // "currency" => "SAR"
126:                 ],
127:             ]
128:         ];
129:         // $shippingRequest->update([
130:         //     'status' => StatusShippingRequestEnum::InProgress,
131:         // ]);
132:         $createOrderResponse = $this->otoServiceUtils->createOrder($body, $accessToken);
133:         // array(
134:         //     'success' => true,
135:         //     'otoId' => 25014681,
136:         // );
137:         Log::info($createOrderResponse);
138:         if ($createOrderResponse['success']) {
139:             $shippingRequest->update([
140:                 'status' => StatusShippingRequestEnum::InProgress,
141:                 'oto_id' => $createOrderResponse['otoId'],
142:             ]);
143:         }
144:     }
145: }
```

## File: app/Http/Services/Shared/EmailService.php
```php
1: <?php
2: 
3: namespace App\Http\Services\Shared;
4: 
5: use App\Services\EmailService as BaseEmailService;
6: 
7: class EmailService extends BaseEmailService
8: {
9: }
```

## File: app/Jobs/SendNewShippingRequestNotificationJob.php
```php
 1: <?php
 2: 
 3: namespace App\Jobs;
 4: 
 5: use Illuminate\Bus\Queueable;
 6: use Illuminate\Contracts\Queue\ShouldQueue;
 7: use Illuminate\Foundation\Bus\Dispatchable;
 8: use Illuminate\Queue\InteractsWithQueue;
 9: use Illuminate\Queue\SerializesModels;
10: use App\Models\AdminNotificationEmail;
11: use App\Services\EmailService;
12: use Illuminate\Support\Facades\Log;
13: 
14: class SendNewShippingRequestNotificationJob implements ShouldQueue
15: {
16:     use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
17: 
18:     public $shippingRequestId;
19:     public $vendorName;
20: 
21:     /**
22:      * Create a new job instance.
23:      *
24:      * @return void
25:      */
26:     public function __construct($shippingRequestId, $vendorName = null)
27:     {
28:         $this->shippingRequestId = $shippingRequestId;
29:         $this->vendorName = $vendorName;
30:     }
31: 
32:     /**
33:      * Execute the job.
34:      *
35:      * @return void
36:      */
37:     public function handle(EmailService $emailService)
38:     {
39:         try {
40:             $emails = AdminNotificationEmail::pluck('email')->toArray();
41:             
42:             if (empty($emails)) {
43:                 Log::info('No admin notification emails found to send new shipping request alert.');
44:                 return;
45:             }
46: 
47:             $subject = 'طلب شحن جديد بانتظار المراجعة - #' . $this->shippingRequestId;
48:             
49:             $vendorText = $this->vendorName ? "الخاص بالبائع: <strong>{$this->vendorName}</strong>" : "";
50:             
51:             $dashboardUrl = url('/dashboard/shipping-request-management/show/' . $this->shippingRequestId);
52:             
53:             $htmlMessage = "
54:                 <div style='direction: rtl; text-align: right; font-family: Arial, sans-serif; line-height: 1.6;'>
55:                     <h2 style='color: #2c3e50;'>مرحباً،</h2>
56:                     <p>هناك طلب شحن جديد تم تأكيده من قبل العميل وهو بانتظار المراجعة الآن في لوحة التحكم.</p>
57:                     <p><strong>رقم الطلب:</strong> {$this->shippingRequestId}</p>
58:                     <p>{$vendorText}</p>
59:                     <br>
60:                     <p>
61:                         <a href='{$dashboardUrl}' style='display: inline-block; padding: 10px 20px; background-color: #3498db; color: #ffffff; text-decoration: none; border-radius: 5px;'>
62:                             مراجعة الطلب في لوحة التحكم
63:                         </a>
64:                     </p>
65:                     <br>
66:                     <p>تحياتنا،<br>فريق وسيط السيارات</p>
67:                 </div>
68:             ";
69: 
70:             foreach ($emails as $email) {
71:                 $emailService->sendEmail($email, $subject, $htmlMessage);
72:             }
73:             
74:             Log::info("Sent new shipping request notification for request #{$this->shippingRequestId} to " . count($emails) . " admins.");
75:             
76:         } catch (\Exception $e) {
77:             Log::error('Error in SendNewShippingRequestNotificationJob: ' . $e->getMessage());
78:         }
79:     }
80: }
```

## File: app/Models/AdminNotificationEmail.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Factories\HasFactory;
 6: use Illuminate\Database\Eloquent\Model;
 7: 
 8: class AdminNotificationEmail extends Model
 9: {
10:     use HasFactory;
11: 
12:     protected $fillable = ['email'];
13: }
```

## File: app/Models/Conversation.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Illuminate\Database\Eloquent\Model;
 6: 
 7: class Conversation extends Model
 8: {
 9:     protected $fillable = [
10:         'user_id',
11:         'vendor_id',
12:         'request_id',
13:         'response_id'
14:     ];
15: 
16:     public function scopeGetReceiverId($query, $conversationId, $currentUserId)
17:     {
18:         $conversation = $query->where('id', $conversationId)->first(['id', 'vendor_id', 'user_id']);
19:         if (!$conversation) return 0;
20: 
21:         $vendorUserId = Vendor::where('id', $conversation->vendor_id)->value('user_id') ?: $conversation->vendor_id;
22: 
23:         if ($currentUserId == $vendorUserId || $currentUserId == $conversation->vendor_id) {
24:             return $conversation->user_id;
25:         } else {
26:             return $vendorUserId;
27:         }
28:     }
29: }
```

## File: app/Models/MessageConversation.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Carbon\Carbon;
 6: use Illuminate\Database\Eloquent\Casts\Attribute;
 7: use Illuminate\Database\Eloquent\Model;
 8: 
 9: class MessageConversation extends Model
10: {
11:     protected $fillable = [
12:         'conversation_id',
13:         'sender_id',
14:         'body',
15:         'image',
16:         'is_shipping_request',
17:         'read',
18:     ];
19: 
20:     // casts
21:     protected $casts = [
22:         'is_shipping_request' => 'boolean',
23:         'read' => 'boolean',
24:     ];
25: 
26: 
27:     //date_sent
28:     protected function dateSent(): Attribute
29:     {
30:         return Attribute::make(
31:             get: fn($value) =>
32:             $value
33:                 ? Carbon::parse($value)->setTimezone(config('app.timezone', 'Asia/Riyadh'))->format('h:i a')
34:                 : null
35:         );
36:     }
37: }
```

## File: app/Models/ShippingRequest.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use App\Enums\StatusShippingRequestEnum;
 6: use Carbon\Carbon;
 7: use Illuminate\Database\Eloquent\Model;
 8: use Illuminate\Database\Eloquent\SoftDeletes;
 9: use Illuminate\Database\Eloquent\Casts\Attribute;
10: 
11: class ShippingRequest extends Model
12: {
13:     use SoftDeletes;
14: 
15:     protected $fillable = [
16:         'request_id',
17:         'response_id',
18:         'order_number',
19:         'name_origin_vendor',
20:         'city_origin_vendor',
21:         'address_origin_vendor',
22:         'lat_origin_vendor',
23:         'lng_origin_vendor',
24:         'phone_origin_vendor',
25:         'length',
26:         'width',
27:         'height',
28:         'weight',
29:         'id_number_user',
30:         'city_origin_dimensions',
31:         'address_origin_dimensions',
32:         'phone_origin_dimensions',
33:         'status',
34:         'fee_cheapest_shipping',
35:         'amount_rate_app',
36:         'is_user_confirmed',
37:         'oto_id',
38:     ];
39: 
40:     protected $casts = [
41:         'length' => 'double',
42:         'width' => 'double',
43:         'height' => 'double',
44:         'weight' => 'double',
45:         'fee_cheapest_shipping' => 'double',
46:         'amount_rate_app' => 'double',
47:         'is_user_confirmed' => 'boolean',
48:         'status' => StatusShippingRequestEnum::class,
49:     ];
50: 
51:     protected function shippingRequestDate(): Attribute
52:     {
53:         return Attribute::make(
54:             get: fn($value) =>
55:             $value
56:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
57:                 : null
58:         );
59:     }
60: 
61:     protected function scopeSearchValueFilter($query, $value)
62:     {
63:         $query->when($value, function ($query, $value) {
64:             return $query->whereAny([
65:                 'shipping_requests.id',
66:                 'shipping_requests.request_id',
67:                 'shipping_requests.response_id',
68:                 'shipping_requests.city_origin_vendor',
69:                 'shipping_requests.city_origin_dimensions',
70:                 'shipping_requests.created_at',
71:             ], 'like', '%' . $value . '%');
72:         });
73:     }
74: 
75:     protected function scopeConfirmShippingFilter($query, $value)
76:     {
77:         return $query->when($value, function ($query, $value) {
78:             return $query->where('shipping_requests.is_user_confirmed', $value);
79:         });
80:     }
81: }
```

## File: app/Rules/RequiredBrandIfCategoryHasBrandRule.php
```php
 1: <?php
 2: 
 3: namespace App\Rules;
 4: 
 5: use App\Models\CategoryHasBrandField;
 6: use Closure;
 7: use Illuminate\Contracts\Validation\ValidationRule;
 8: 
 9: class RequiredBrandIfCategoryHasBrandRule implements ValidationRule
10: {
11:     public function validate(string $attribute, mixed $value, Closure $fail): void
12:     {
13:         $categoryId = request()->input('categoryId');
14: 
15:         if (!$categoryId) {
16:             return; // لو ما فيه categoryId ما نتحقق
17:         }
18: 
19:         $isHasBrand = CategoryHasBrandField::where('category_id', $categoryId)->exists();
20: 
21:         if ($isHasBrand) {
22:             if (empty($value) || (is_array($value) && count($value) === 0)) {
23:                 $fail('الرجاء اختيار الموديل / الماركة');
24:             }
25:         }
26:     }
27: }
```

## File: app/Services/EmailService.php
```php
 1: <?php
 2: 
 3: namespace App\Services;
 4: 
 5: use Illuminate\Support\Facades\Mail;
 6: use Illuminate\Support\Facades\Log;
 7: use Throwable;
 8: 
 9: class EmailService
10: {
11:     /**
12:      * Send an HTML email using the configured SMTP driver (Gmail).
13:      *
14:      * @param string $email Recipient email address
15:      * @param string $subject Email subject line
16:      * @param string $htmlMessage HTML formatted message body
17:      * @return bool True if sent successfully, false otherwise
18:      */
19:     public function sendEmail(string $email, string $subject, string $htmlMessage): bool
20:     {
21:         try {
22:             Log::info("Connecting to SMTP and sending email to: {$email} with subject: '{$subject}'");
23: 
24:             Mail::html($htmlMessage, function ($message) use ($email, $subject) {
25:                 $message->to($email)
26:                         ->subject($subject);
27:             });
28: 
29:             Log::info("Email sent successfully to {$email}");
30:             return true;
31:         } catch (Throwable $e) {
32:             Log::error("Failed to send email to {$email}. Error: " . $e->getMessage(), [
33:                 'email' => $email,
34:                 'subject' => $subject,
35:                 'trace' => $e->getTraceAsString(),
36:             ]);
37:             return false;
38:         }
39:     }
40: 
41:     /**
42:      * Send a plain text email.
43:      *
44:      * @param string $email Recipient email address
45:      * @param string $subject Email subject line
46:      * @param string $textMessage Plain text message body
47:      * @return bool True if sent successfully, false otherwise
48:      */
49:     public function sendPlainEmail(string $email, string $subject, string $textMessage): bool
50:     {
51:         try {
52:             Log::info("Sending plain text email to: {$email}");
53: 
54:             Mail::raw($textMessage, function ($message) use ($email, $subject) {
55:                 $message->to($email)
56:                         ->subject($subject);
57:             });
58: 
59:             Log::info("Plain email sent successfully to {$email}");
60:             return true;
61:         } catch (Throwable $e) {
62:             Log::error("Failed to send plain email to {$email}. Error: " . $e->getMessage());
63:             return false;
64:         }
65:     }
66: }
```

## File: app/Traits/NotificationsTrait.php
```php
 1: <?php
 2: 
 3: namespace App\Traits;
 4: 
 5: use App\Enums\user\UserRoleEnum;
 6: use App\Utils\FcmNotificationUtils;
 7: use App\Models\User;
 8: use App\Notifications\SendNotification;
 9: use Illuminate\Http\Request;
10: 
11: trait NotificationsTrait
12: {
13: 
14:     public function notifyToAdmin($title, $body)
15:     {
16:         $admins = User::role([UserRoleEnum::Super_Admin->value, UserRoleEnum::Admin->value], 'admin')->get();
17:         foreach ($admins as $admin) {
18:             $admin->notify(new SendNotification(title: $title, body: $body));
19:         }
20:     }
21: 
22:     public function notifyRequestToEligibleVendors($vendors, $requestId = null)
23:     {
24:         foreach ($vendors as $vendor) {
25:             $user = User::where('id', $vendor->user_id)->first(['id', 'fcm_token']);
26:             if ($user) {
27:                 $user->notify(new SendNotification(title: 'طلب جديد', body: 'تم اضافة طلب جديد', category: 'customer_requests', targetId: $requestId));
28:                 (new FcmNotificationUtils())->setTitle('طلب جديد')->setBody('تم اضافة طلب جديد')->setCategory('customer_requests')->setToken($user->fcm_token)->send();
29:             }
30:         }
31:     }
32: 
33:     public function notifyByID($userId, $title, $body, $notifyDB = true, $category = 'conversations', $targetId = null, array $extraData = [])
34:     {
35:         $user = User::where('id', $userId)->first(['id', 'fcm_token']);
36:         if ($user) {
37:             if ($notifyDB) {
38:                 $user->notify(new SendNotification(title: $title, body: $body, category: $category, targetId: $targetId));
39:             }
40:             (new FcmNotificationUtils())
41:                 ->setTitle($title)
42:                 ->setBody($body)
43:                 ->setCategory($category)
44:                 ->setExtraData($extraData)
45:                 ->setToken($user->fcm_token)
46:                 ->send();
47:         }
48:     }
49: 
50:     public function getNotifications(Request $request)
51:     {
52:         $user = currUserHelper();
53:         $notifications = $user->notifications()
54:             ->select('id', 'data', 'created_at')
55:             ->orderBy('created_at', 'desc')
56:             ->paginate(20);
57: 
58:         $notifications->getCollection()->transform(function ($item) {
59:             $data = $item->data;
60: 
61:             return [
62:                 'id' => $item->id,
63:                 'title' => $data['title'] ?? null,
64:                 'body' => $data['body'] ?? null,
65:                 'created_at' => $item->created_at->format('Y-m-d H:i'),
66:             ];
67:         });
68: 
69:         // return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
70:         //     'current_page' => $result->currentPage(),
71:         //     'last_page' => $result->lastPage(),
72:         //     'data' => $result->items(),
73:         // ]);
74: 
75:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', [
76:             'current_page' => $notifications->currentPage(),
77:             'last_page' => $notifications->lastPage(),
78:             'total' => $notifications->total(),
79:             'per_page' => $notifications->perPage(),
80:             'data' => $notifications->items(),
81:         ]);
82:     }
83: }
```

## File: config/services.php
```php
 1: <?php
 2: 
 3: return [
 4: 
 5:     /*
 6:     |--------------------------------------------------------------------------
 7:     | Third Party Services
 8:     |--------------------------------------------------------------------------
 9:     |
10:     | This file is for storing the credentials for third party services such
11:     | as Mailgun, Postmark, AWS and more. This file provides the de facto
12:     | location for this type of information, allowing packages to have
13:     | a conventional file to locate the various service credentials.
14:     |
15:     */
16: 
17:     'postmark' => [
18:         'token' => env('POSTMARK_TOKEN'),
19:     ],
20: 
21:     'resend' => [
22:         'key' => env('RESEND_KEY'),
23:     ],
24: 
25:     'ses' => [
26:         'key' => env('AWS_ACCESS_KEY_ID'),
27:         'secret' => env('AWS_SECRET_ACCESS_KEY'),
28:         'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
29:     ],
30: 
31:     'slack' => [
32:         'notifications' => [
33:             'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
34:             'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
35:         ],
36:     ],
37: 
38:     'oto' => [
39:         'url' => env('OTO_API_URL', 'https://api.tryoto.com/rest/v2'),
40:         'refresh_token' => env('OTO_REFRESH_TOKEN', 'AMf-vBwsG7J61J_1EkBNW_wnKdQc4Xyalpz59J1QittknHfsekYzdv-1sDxoeD1oaw5_OBxmnVtjkwzm7nAUsfkEZoZpmMQtAINMhJLIWxAiJ1xnX9IY4ksBrIGoiGFG1ULhV8nT-a7ucNxD28bjK-cf6bOPEVWYpVDdQToxKpvgEXp2yQTujA3HT5XMIo_x31f1k6I41WA3pdKzsrwSCU_NQSijp1oBxQ'),
41:         'access_token' => env('OTO_ACCESS_TOKEN'),
42:     ],
43: 
44: ];
```

## File: database/migrations/2026_08_22_223909_add_location_and_name_to_shipping_requests_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     public function up(): void
10:     {
11:         Schema::table('shipping_requests', function (Blueprint $table) {
12:             $table->string('name_origin_vendor')->nullable()->after('order_number');
13:             $table->double('lat_origin_vendor')->nullable()->after('address_origin_vendor');
14:             $table->double('lng_origin_vendor')->nullable()->after('lat_origin_vendor');
15:         });
16:     }
17: 
18:     public function down(): void
19:     {
20:         Schema::table('shipping_requests', function (Blueprint $table) {
21:             $table->dropColumn(['name_origin_vendor', 'lat_origin_vendor', 'lng_origin_vendor']);
22:         });
23:     }
24: };
```

## File: database/migrations/2026_09_05_000000_update_new_spare_parts_category_icon.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: use Illuminate\Support\Facades\DB;
 7: 
 8: return new class extends Migration
 9: {
10:     /**
11:      * Run the migrations.
12:      */
13:     public function up(): void
14:     {
15:         DB::table('categories')
16:             ->where('cat_name_en', 'New Spare Parts')
17:             ->orWhere('cat_name_ar', 'قطع غيار جديدة')
18:             ->update(['cat_icon_path' => 'spare-parts-new-icon.png']);
19:     }
20: 
21:     /**
22:      * Reverse the migrations.
23:      */
24:     public function down(): void
25:     {
26:         DB::table('categories')
27:             ->where('cat_name_en', 'New Spare Parts')
28:             ->orWhere('cat_name_ar', 'قطع غيار جديدة')
29:             ->update(['cat_icon_path' => 'spare-parts-icon.png']);
30:     }
31: };
```

## File: database/migrations/2026_09_05_000001_update_new_spare_parts_category_icon_again.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: use Illuminate\Support\Facades\DB;
 7: 
 8: return new class extends Migration
 9: {
10:     /**
11:      * Run the migrations.
12:      */
13:     public function up(): void
14:     {
15:         DB::table('categories')
16:             ->where('cat_name_en', 'New Spare Parts')
17:             ->orWhere('cat_name_ar', 'قطع غيار جديدة')
18:             ->update(['cat_icon_path' => 'new-pease.png']);
19:     }
20: 
21:     /**
22:      * Reverse the migrations.
23:      */
24:     public function down(): void
25:     {
26:         DB::table('categories')
27:             ->where('cat_name_en', 'New Spare Parts')
28:             ->orWhere('cat_name_ar', 'قطع غيار جديدة')
29:             ->update(['cat_icon_path' => 'spare-parts-new-icon.png']);
30:     }
31: };
```

## File: database/migrations/2026_09_05_023700_update_new_spare_parts_icon.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: use Illuminate\Support\Facades\DB;
 7: 
 8: return new class extends Migration
 9: {
10:     public function up(): void
11:     {
12:         DB::table('categories')
13:             ->where('cat_name_ar', 'LIKE', '%جديدة%')
14:             ->orWhere('cat_name_ar', 'LIKE', '%جديده%')
15:             ->update(['cat_icon_path' => 'new-spare-parts-icon.png']);
16:     }
17: 
18:     public function down(): void
19:     {
20:     }
21: };
```

## File: database/migrations/2026_09_05_032200_update_categories_cache_version.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: use Illuminate\Support\Facades\DB;
 7: use App\Enums\EntityNameCacheStaticDataEnum;
 8: use Illuminate\Support\Facades\Cache;
 9: use App\Utils\CacheUtils;
10: 
11: return new class extends Migration
12: {
13:     public function up(): void
14:     {
15:         DB::table('cache_static_data_versions')
16:             ->updateOrInsert(
17:                 ['entity_name' => 'Categories'],
18:                 ['updated_at' => now()]
19:             );
20:             
21:         Cache::forget('categories_cache_static_data_app');
22:     }
23: 
24:     public function down(): void
25:     {
26:     }
27: };
```

## File: database/migrations/2026_09_09_144900_create_admin_notification_emails_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration
 8: {
 9:     /**
10:      * Run the migrations.
11:      */
12:     public function up(): void
13:     {
14:         Schema::create('admin_notification_emails', function (Blueprint $table) {
15:             $table->id();
16:             $table->string('email')->unique();
17:             $table->timestamps();
18:         });
19:     }
20: 
21:     /**
22:      * Reverse the migrations.
23:      */
24:     public function down(): void
25:     {
26:         Schema::dropIfExists('admin_notification_emails');
27:     }
28: };
```

## File: repomix.config.json
```json
 1: {
 2:   "output": {
 3:     "filePath": "repomix-output.md",
 4:     "style": "markdown",
 5:     "headerText": "Car Mediator Platform Backend Codebase Summary",
 6:     "showLineNumbers": true
 7:   },
 8:   "ignore": {
 9:     "useGitignore": true,
10:     "useDefaultPatterns": true,
11:     "customPatterns": [
12:       "vendor/**",
13:       "node_modules/**",
14:       "storage/**",
15:       "bootstrap/cache/**",
16:       "public/storage/**",
17:       "public/build/**",
18:       "public/assets/**",
19:       "public/lib/**",
20:       "resources/views/welcome.blade.php",
21:       "tests/**",
22:       "database/factories/**",
23:       "database/seeders/**",
24:       "*.lock",
25:       "*.log",
26:       ".env*",
27:       ".git/**"
28:     ]
29:   }
30: }
```

## File: resources/views/dashboard/included/sidebar.blade.php
```php
  1: @use('App\Enums\PermissionEnum')
  2: <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  3:     <div class="sidebar-brand"> <a href="{{ route('dashboard') }}" class="brand-link">
  4:             <span class="brand-text fs-3 fw-semibold">لوحة تحكم الإدارة</span> </a>
  5:     </div>
  6:     <div class="sidebar-wrapper">
  7:         <nav class="mt-2">
  8:             <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
  9:                 <li class="nav-item"> <a href="{{ route('dashboard') }}"
 10:                         class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
 11:                         <i class="nav-icon fa fa-house"></i>
 12:                         <p>الرئيسية</p>
 13:                     </a>
 14:                 </li>
 15:                 <li class="nav-item"> <a href="#" class="nav-link">
 16:                         <i class="nav-icon fa-solid fa-gear"></i>
 17:                         <p>الإعدادات</p>
 18:                     </a>
 19:                 </li>
 20:                 <li class="nav-item"> <a href="{{ route('dashboard.categories.index') }}"
 21:                         class="nav-link {{ request()->routeIs('dashboard.categories.*') ? 'active' : '' }}">
 22:                         <i class="nav-icon fa-solid fa-layer-group"></i>
 23:                         <p> الأقسام</p>
 24:                     </a>
 25:                 </li>
 26: 
 27:                 <li class="nav-item"> <a href="{{ route('dashboard.customers.index') }}"
 28:                         class="nav-link {{ request()->routeIs('dashboard.customers.*') ? 'active' : '' }}">
 29:                         <i class="nav-icon fa-solid fa-users"></i>
 30:                         <p> إدارة العملاء</p>
 31:                     </a>
 32:                 </li>
 33: 
 34:                 <li class="nav-item {{ request()->routeIs('dashboard.vendors-management.*') ? 'menu-open' : '' }}">
 35:                     <a href="#"
 36:                         class="nav-link {{ request()->routeIs('dashboard.vendors-management.*') ? 'active' : '' }}"> <i
 37:                             class="nav-icon fa-solid fa-building"></i>
 38:                         <p>إدارة الشركات <i class="nav-arrow bi bi-chevron-right"></i></p>
 39:                     </a>
 40:                     <ul class="nav nav-treeview">
 41:                         <li class="nav-item"> <a href="{{ route('dashboard.vendors-management.vendors.index') }}"
 42:                                 class="nav-link {{ request()->routeIs('dashboard.vendors-management.vendors.*') ? 'active' : '' }}">
 43:                                 <i class="nav-icon bi bi-circle"></i>
 44:                                 <p>الشركات</p>
 45:                             </a>
 46:                         </li>
 47:                         <li class="nav-item"> <a href="{{ route('dashboard.vendors-management.join-requests.index') }}"
 48:                                 class="nav-link {{ request()->routeIs('dashboard.vendors-management.join-requests.*') ? 'active' : '' }}">
 49:                                 <i class="nav-icon bi bi-circle"></i>
 50:                                 <p>طلبات الإنضمام</p>
 51:                             </a>
 52:                         </li>
 53:                     </ul>
 54:                 </li>
 55: 
 56:                 <li class="nav-item"> <a href="{{ route('dashboard.requests-management.index') }}"
 57:                         class="nav-link {{ request()->routeIs('dashboard.requests-management.*') ? 'active' : '' }}">
 58:                         <i class="nav-icon fa-solid fa-clipboard"></i>
 59:                         <p>الطلبات وردود الشركات</p>
 60:                     </a>
 61:                 </li>
 62: 
 63:                 <li class="nav-item"> <a href="{{ route('dashboard.shipping-request-management.index') }}"
 64:                         class="nav-link {{ request()->routeIs('dashboard.shipping-request-management.*') ? 'active' : '' }}">
 65:                         <i class="nav-icon fa-solid fa-truck-fast"></i>
 66:                         <p>إدارة طلبات الشحن</p>
 67:                     </a>
 68:                 </li>
 69: 
 70:                 <li class="nav-item"> <a href="#" class="nav-link">
 71:                         <i class="nav-icon fa-solid fa-money-check-dollar"></i>
 72:                         <p>نظام العمولات</p>
 73:                     </a>
 74:                 </li>
 75: 
 76:                 <li class="nav-item"> <a href="{{ route('dashboard.complaint-management.complaints') }}"
 77:                         class="nav-link {{ request()->routeIs('dashboard.complaint-management.*') ? 'active' : '' }}">
 78:                         <i class="nav-icon fa-solid fa-flag"></i>
 79:                         <p>الشكاوي</p>
 80:                     </a>
 81:                 </li>
 82: 
 83:                 <li class="nav-item"> <a href="{{ route('dashboard.settings.notification-emails.index') }}"
 84:                         class="nav-link {{ request()->routeIs('dashboard.settings.notification-emails.*') ? 'active' : '' }}">
 85:                         <i class="nav-icon fa-solid fa-envelope"></i>
 86:                         <p>إيميلات الإشعارات</p>
 87:                     </a>
 88:                 </li>
 89: 
 90:                 <li class="nav-item"> <a href="{{ route('dashboard.logs.index') }}"
 91:                         class="nav-link {{ request()->routeIs('dashboard.logs.*') ? 'active' : '' }}">
 92:                         <i class="nav-icon fa-solid fa-note-sticky"></i>
 93:                         <p>Logs</p>
 94:                     </a>
 95:                 </li>
 96: 
 97:             </ul>
 98:         </nav>
 99:     </div>
100: </aside>
```

## File: resources/views/dashboard/settings/notification-emails/index.blade.php
```php
 1: @extends('dashboard.layouts.app')
 2: @section('title', 'إيميلات الإشعارات')
 3: @section('content')
 4:     <main class="app-main">
 5:         <div class="app-content-header py-2">
 6:             <div class="container-fluid">
 7:                 <div class="row">
 8:                     <div class="col-sm-6">
 9:                         <ol class="breadcrumb float-sm-start">
10:                             <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">الرئيسية</a></li>
11:                             <li class="breadcrumb-item active" aria-current="page">
12:                                 إيميلات الإشعارات
13:                             </li>
14:                         </ol>
15:                     </div>
16:                 </div>
17:             </div>
18:         </div>
19:         <div class="app-content">
20:             <div class="container-fluid">
21: 
22:                 @if(session('success'))
23:                     <div class="alert alert-success">{{ session('success') }}</div>
24:                 @endif
25:                 @if($errors->any())
26:                     <div class="alert alert-danger">
27:                         <ul class="mb-0">
28:                             @foreach($errors->all() as $error)
29:                                 <li>{{ $error }}</li>
30:                             @endforeach
31:                         </ul>
32:                     </div>
33:                 @endif
34: 
35:                 <div class="card card-primary card-outline mb-4 mt-1">
36:                     <div class="card-header py-2">
37:                         <div class="card-title">إضافة إيميل جديد</div>
38:                     </div>
39:                     <div class="card-body">
40:                         <form action="{{ route('dashboard.settings.notification-emails.store') }}" method="POST">
41:                             @csrf
42:                             <div class="row align-items-center">
43:                                 <div class="col-md-8">
44:                                     <input type="email" name="email" class="form-control" placeholder="أدخل البريد الإلكتروني هنا (مثال: admin@example.com)" required>
45:                                 </div>
46:                                 <div class="col-md-4 mt-2 mt-md-0">
47:                                     <button type="submit" class="btn btn-primary w-100"><i class="fa-solid fa-plus me-1"></i> إضافة البريد</button>
48:                                 </div>
49:                             </div>
50:                         </form>
51:                     </div>
52:                 </div>
53: 
54:                 <div class="card card-primary card-outline mb-4">
55:                     <div class="card-header py-2">
56:                         <div class="card-title">قائمة الإيميلات المسجلة لاستلام إشعارات الشحن</div>
57:                     </div>
58:                     <div class="card-body">
59:                         <div class="table-responsive mt-2">
60:                             <table class="table table-hover nowrap dataTable" style="width:100%;">
61:                                 <thead>
62:                                     <tr>
63:                                         <th class="text-start">#</th>
64:                                         <th class="text-start">البريد الإلكتروني</th>
65:                                         <th class="text-center">تاريخ الإضافة</th>
66:                                         <th class="text-center">إجراءات</th>
67:                                     </tr>
68:                                 </thead>
69:                                 <tbody>
70:                                     @forelse($emails as $email)
71:                                         <tr>
72:                                             <td class="text-start">{{ $loop->iteration }}</td>
73:                                             <td class="text-start">{{ $email->email }}</td>
74:                                             <td class="text-center">{{ $email->created_at->format('Y-m-d H:i') }}</td>
75:                                             <td class="text-center">
76:                                                 <form action="{{ route('dashboard.settings.notification-emails.destroy', $email->id) }}" method="POST" class="d-inline" onsubmit="return confirm('هل أنت متأكد من حذف هذا البريد؟');">
77:                                                     @csrf
78:                                                     @method('DELETE')
79:                                                     <button type="submit" class="btn btn-sm btn-danger" title="حذف">
80:                                                         <i class="fa-solid fa-trash"></i>
81:                                                     </button>
82:                                                 </form>
83:                                             </td>
84:                                         </tr>
85:                                     @empty
86:                                         <tr>
87:                                             <td colspan="4" class="text-center text-muted">لا يوجد إيميلات مسجلة حالياً.</td>
88:                                         </tr>
89:                                     @endforelse
90:                                 </tbody>
91:                             </table>
92:                         </div>
93:                     </div>
94:                 </div>
95:             </div>
96:         </div>
97:     </main>
98: @endsection
```

## File: resources/views/dashboard/shipping-request-management/partails/details-shipping-section.blade.php
```php
  1: <div class="card card-primary card-outline mb-4 mt-1">
  2:     <div class="card-header py-2">
  3:         <div class="card-title">تفاصيل طلب الشحن</div>
  4:     </div>
  5:     <div class="card-body">
  6:         <table class="table table-borderless" style="width:100%">
  7:             <tbody>
  8:                 <tr>
  9:                     <th style="width:30%">رقم تتبع الشحن</th>
 10:                     <td><b>{{ $shippingRequest->oto_id ?? '-' }}</b></td>
 11:                 </tr>
 12:                 <tr>
 13:                     <th style="width:30%">الرقم</th>
 14:                     <td>{{ $shippingRequest->id ?? '-' }}</td>
 15:                 </tr>
 16:                 <tr>
 17:                     <th style="width:30%">رقم طلب الشحن</th>
 18:                     <td>{{ $shippingRequest->order_number ?? '-' }}</td>
 19:                 </tr>
 20:                 <tr>
 21:                     <th style="width:30%">رقم الطلب</th>
 22:                     <td>{{ $shippingRequest->request_id ?? '-' }}</td>
 23:                 </tr>
 24:                 <tr>
 25:                     <th style="width:30%">رقم الرد</th>
 26:                     <td>{{ $shippingRequest->response_id ?? '-' }}</td>
 27:                 </tr>
 28:                 <tr>
 29:                     <th>رقم المستلم</th>
 30:                     <td>{{ $shippingRequest->phone_origin_dimensions ?? '-' }}</td>
 31:                 </tr>
 32:                 <tr>
 33:                     <th>رقم هوية المستلم</th>
 34:                     <td>{{ $shippingRequest->id_number_user ?? '-' }}</td>
 35:                 </tr>
 36:                 <tr>
 37:                     <th>مدينة المستلم</th>
 38:                     <td>{{ $shippingRequest->city_origin_dimensions ?? '-' }}</td>
 39:                 </tr>
 40:                 <tr>
 41:                     <th>عنوان المستلم</th>
 42:                     <td>{{ $shippingRequest->address_origin_dimensions ?? '-' }}</td>
 43:                 </tr>
 44:                 <tr>
 45:                     <th>رقم المرسل (الشركة)</th>
 46:                     <td>{{ $shippingRequest->phone_origin_vendor ?? '-' }}</td>
 47:                 </tr>
 48:                 <tr>
 49:                     <th>مدينة الإرسال (الشركة)</th>
 50:                     <td>{{ $shippingRequest->city_origin_vendor ?? '-' }}</td>
 51:                 </tr>
 52:                 <tr>
 53:                     <th>عنوان الإرسال (الشركة)</th>
 54:                     <td>{{ $shippingRequest->address_origin_vendor ?? '-' }}</td>
 55:                 </tr>
 56: 
 57:                 <tr>
 58:                     <th>الطول</th>
 59:                     <td>{{ $shippingRequest->length . ' سم' }}</td>
 60:                 </tr>
 61:                 <tr>
 62:                     <th>العرض</th>
 63:                     <td>{{ $shippingRequest->width . ' سم' }}</td>
 64:                 </tr>
 65:                 <tr>
 66:                     <th>الارتفاع</th>
 67:                     <td>{{ $shippingRequest->height . ' سم' }}</td>
 68:                 </tr>
 69:                 <tr>
 70:                     <th>الوزن</th>
 71:                     <td>{{ $shippingRequest->weight . ' كغم' }}</td>
 72:                 </tr>
 73: 
 74:                 <tr>
 75:                     <th>الحالة</th>
 76:                     <td>
 77:                         {{ App\Enums\StatusShippingRequestEnum::trans($shippingRequest->status->value) }}
 78:                     </td>
 79:                 </tr>
 80:                 <tr>
 81:                     <th>سعر الشحن</th>
 82:                     <td>{{ $shippingRequest->fee_cheapest_shipping ?? '-' }}</td>
 83:                 </tr>
 84:                 <tr>
 85:                     <th>عمولة التطبيق</th>
 86:                     <td>{{ $shippingRequest->amount_rate_app ?? '-' }}</td>
 87:                 </tr>
 88:                 <tr>
 89:                     <th>موافقة الشحن</th>
 90:                     <td>{{ $shippingRequest->is_user_confirmed ? 'نعم' : 'لا' }}</td>
 91:                 </tr>
 92:                 <tr>
 93:                     <th> تاريخ الشحن</th>
 94:                     <td>{{ optional($shippingRequest->created_at)->format('Y-m-d H:i') ?? '-' }}
 95:                     </td>
 96:                 </tr>
 97:             </tbody>
 98:         </table>
 99:     </div>
100: </div>
```

## File: app/Http/Controllers/API/V1/Shared/CityController.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Controllers\API\V1\Shared;
 4: 
 5: use App\Http\Controllers\Controller;
 6: use App\Models\City;
 7: 
 8: class CityController extends Controller
 9: {
10:     public function getCities()
11:     {
12:         $cities = City::getCitiesCached()->values();
13: 
14:         return buildApiResponseHelper(true, 'تم جلب المدن بنجاح', $cities);
15:     }
16: }
```

## File: app/Http/Services/Shared/ShippingService.php
```php
 1: <?php
 2: 
 3: namespace App\Http\Services\Shared;
 4: 
 5: use Illuminate\Http\Request;
 6: 
 7: class ShippingService
 8: {
 9:     public function __construct(protected \App\Http\Repositories\Shared\ShippingRepository $shippingRepository) {}
10: 
11:     public function storeShippingRequest($requestId, $responseId, $orderNumber, $nameOriginVendor, $cityOriginVendor, $addressOriginVendor, $latOriginVendor, $lngOriginVendor, $phoneOriginVendor, $length, $width, $height, $weight, $packages = null)
12:     {
13:         return $this->shippingRepository->storeShippingRequest([
14:             'request_id' => $requestId,
15:             'response_id' => $responseId,
16:             'order_number' => $orderNumber,
17:             'name_origin_vendor' => $nameOriginVendor,
18:             'city_origin_vendor' => $cityOriginVendor,
19:             'address_origin_vendor' => $addressOriginVendor,
20:             'lat_origin_vendor' => $latOriginVendor,
21:             'lng_origin_vendor' => $lngOriginVendor,
22:             'phone_origin_vendor' => $phoneOriginVendor,
23:             'length' => $length,
24:             'width' => $width,
25:             'height' => $height,
26:             'weight' => $weight,
27:             'packages' => $packages,
28:         ]);
29:     }
30: }
```

## File: app/Models/RequestCustomer.php
```php
 1: <?php
 2: 
 3: namespace App\Models;
 4: 
 5: use Carbon\Carbon;
 6: use Illuminate\Database\Eloquent\Casts\Attribute;
 7: use Illuminate\Database\Eloquent\Model;
 8: use Illuminate\Database\Eloquent\SoftDeletes;
 9: use Illuminate\Support\Facades\Log;
10: 
11: class RequestCustomer extends Model
12: {
13:     use SoftDeletes;
14: 
15:     protected $fillable = [
16:         'user_id',
17:         'category_id',
18:         'customer_city_id',
19:         'customer_latitude',
20:         'customer_longitude',
21:         'description',
22:         'cities_ids_scope',
23:         'status',
24:     ];
25: 
26:     protected $casts = [
27:         'customer_latitude' => 'decimal:10',
28:         'customer_longitude' => 'decimal:10',
29:         'cities_ids_scope' => 'array',
30:         'status' => 'string',
31:     ];
32: 
33: 
34:     protected function requestDate(): Attribute
35:     {
36:         return Attribute::make(
37:             get: fn($value) =>
38:             $value
39:                 ? Carbon::parse($value)->setTimezone(config('app.user_timezone'))->format('Y-m-d H:i')
40:                 : null
41:         );
42:     }
43: 
44:     public function scopeLeftJoinCity($query)
45:     {
46:         return $query->leftJoin('cities', 'request_customers.customer_city_id', '=', 'cities.id');
47:     }
48: 
49:     public function scopeLeftJoinCategory($query)
50:     {
51:         return $query->leftJoin('categories', 'request_customers.category_id', '=', 'categories.id');
52:     }
53: 
54:     // left join users
55:     public function scopeLeftJoinUser($query)
56:     {
57:         return $query->leftJoin('users', 'request_customers.user_id', '=', 'users.id');
58:     }
59: 
60:     protected function scopeSearchValueFilter($query, $value)
61:     {
62:         $query->when($value, function ($query, $value) {
63:             return $query->whereAny([
64:                 'request_customers.id',
65:                 'request_customers.created_at',
66:             ], 'like', '%' . $value . '%');
67:         });
68:     }
69: }
```

## File: app/Providers/AppServiceProvider.php
```php
 1: <?php
 2: 
 3: namespace App\Providers;
 4: 
 5: use App\Enums\user\UserRoleEnum;
 6: use App\Events\NotificationBadgeUpdated;
 7: use App\Models\BrandCar;
 8: use App\Models\Category;
 9: use App\Models\CategoryHasBrandField;
10: use App\Models\City;
11: use App\Models\CustomField;
12: use App\Notifications\SendNotification;
13: use App\Observers\BrandCarObserver;
14: use App\Observers\CategoryHasBrandFieldObserver;
15: use App\Observers\CategoryObserver;
16: use App\Observers\CityObserver;
17: use App\Observers\CustomFieldObserver;
18: use Illuminate\Notifications\Events\NotificationSent;
19: use Illuminate\Support\Facades\Event;
20: use Illuminate\Support\Facades\Gate;
21: use Illuminate\Support\Facades\Log;
22: use Illuminate\Support\ServiceProvider;
23: 
24: class AppServiceProvider extends ServiceProvider
25: {
26:     /**
27:      * Register any application services.
28:      */
29:     public function register(): void
30:     {
31:         //
32:     }
33: 
34:     /**
35:      * Bootstrap any application services.
36:      */
37:     public function boot(): void
38:     {
39:         City::observe(CityObserver::class);
40:         BrandCar::observe(BrandCarObserver::class);
41:         Category::observe(CategoryObserver::class);
42:         CategoryHasBrandField::observe(CategoryHasBrandFieldObserver::class);
43:         CustomField::observe(CustomFieldObserver::class);
44: 
45:         // Implicitly grant "Super Admin" role all permissions
46:         // This works in the app by using gate-related functions like auth()->user->can() and @can()
47:         Gate::before(function ($user, $ability) {
48:             return $user->hasRole(UserRoleEnum::Super_Admin->value) ? true : null;
49:         });
50: 
51:         if ($this->app->environment('production') || env('FORCE_HTTPS', false)) {
52:             \Illuminate\Support\Facades\URL::forceScheme('https');
53:         }
54: 
55:         // Whenever a SendNotification is delivered (via ->notify()), also
56:         // broadcast NotificationBadgeUpdated on the user's private channel
57:         // so the Flutter app updates in real time instead of relying on
58:         // polling. This fires automatically for every current and future
59:         // ->notify(new SendNotification(...)) call in the app — no need
60:         // to touch each call site individually.
61:         //
62:         // Wrapped in try/catch: broadcasting depends on an external
63:         // WebSocket server (Reverb) being reachable. If it's down/misconfigured,
64:         // this must NEVER break the request that triggered the notification
65:         // (e.g. confirming an order). We log the failure and move on.
66:         Event::listen(function (NotificationSent $event) {
67:             if ($event->notification instanceof SendNotification) {
68:                 try {
69:                     NotificationBadgeUpdated::dispatch(
70:                         $event->notifiable->id,
71:                         $event->notification->toArray($event->notifiable)['category'] ?? null,
72:                         []
73:                     );
74:                 } catch (\Throwable $e) {
75:                     Log::error('Broadcast failed for NotificationBadgeUpdated: ' . $e->getMessage(), [
76:                         'notifiable_id' => $event->notifiable->id ?? null,
77:                     ]);
78:                 }
79:             }
80:         });
81:     }
82: }
```

## File: app/Utils/FcmNotificationUtils.php
```php
  1: <?php
  2: 
  3: namespace App\Utils;
  4: 
  5: use Exception;
  6: use GuzzleHttp\Client as GuzzleClient;
  7: use Google_Client;
  8: use Illuminate\Support\Facades\Cache;
  9: use Illuminate\Support\Facades\Log;
 10: 
 11: 
 12: class FcmNotificationUtils
 13: {
 14:     protected $title;
 15:     protected $body;
 16:     protected $icon;
 17:     protected $click_action;
 18:     protected $token;
 19:     protected $topic;
 20:     protected $category;
 21:     protected $extraData = [];
 22: 
 23:     public function setExtraData(array $extraData)
 24:     {
 25:         $this->extraData = $extraData;
 26:         return $this;
 27:     }
 28: 
 29:     public function setCategory($category)
 30:     {
 31:         $this->category = $category;
 32:         return $this;
 33:     }
 34: 
 35:     /**
 36:      *Title of the notification.
 37:      *@param string $title
 38:      */
 39:     public function setTitle($title)
 40:     {
 41:         $this->title = $title;
 42:         return $this;
 43:     }
 44: 
 45:     /**
 46:      *Body of the notification.
 47:      *@param string $body
 48:      */
 49:     public function setBody($body)
 50:     {
 51:         $this->body = $body;
 52:         return $this;
 53:     }
 54: 
 55:     /**
 56:      *Icon of the notification.
 57:      *@param string $icon
 58:      */
 59:     public function setIcon($icon)
 60:     {
 61:         $this->icon = $icon;
 62:         return $this;
 63:     }
 64: 
 65:     /**
 66:      *Link of the notification when user click on it.
 67:      *@param string $click_action
 68:      */
 69:     public function setClickAction($click_action)
 70:     {
 71:         $this->click_action = $click_action;
 72:         return $this;
 73:     }
 74: 
 75:     /**
 76:      *Token used to send notification to specific device. Unusable with setTopic() at same time.
 77:      *@param string $string
 78:      */
 79:     public function setToken($token)
 80:     {
 81:         $this->token = $token;
 82:         return $this;
 83:     }
 84: 
 85:     /**
 86:      *Topic of the notification. Unusable with setToken() at same time.
 87:      *@param string $topic
 88:      */
 89:     public function setTopic($topic)
 90:     {
 91:         $this->topic = $topic;
 92:         return $this;
 93:     }
 94: 
 95:     /**
 96:      * Verify the conformity of the notification. If everything is ok, send the notification.
 97:      */
 98:     public function send()
 99:     {
100:         // Token and topic combinaison verification
101:         if ($this->token != null && $this->topic != null) {
102:             return;
103:         }
104: 
105:         // Empty token or topic verification
106:         if ($this->token == null && $this->topic == null) {
107:             return;
108:         }
109: 
110:         // Title verification
111:         if (!isset($this->title)) {
112:             return;
113:         }
114: 
115:         // Body verification
116:         if (!isset($this->body)) {
117:             return;
118:         }
119: 
120:         return $this->prepareSend();
121:     }
122: 
123:     private function prepareSend()
124:     {
125:         $dataArr = array_merge([
126:             'click_action' => $this->click_action ?? 'FLUTTER_NOTIFICATION_CLICK',
127:             'status' => 'done',
128:             'type_notification' => 'all',
129:             'category' => $this->category ?? 'conversations',
130:             'screen' => 'NotificationsScreen',
131:         ], $this->extraData ?? []);
132: 
133:         if (isset($this->topic)) {
134:             $json = [
135:                 "message" => [
136:                     "topic" => $this->topic,
137:                     "notification" => [
138:                         "title" => $this->title,
139:                         "body" => $this->body,
140:                     ],
141:                     'data' => $dataArr,
142:                 ]
143:             ];
144:         } else if (isset($this->token)) {
145:             $json = [
146:                 "message" => [
147:                     "token" => $this->token,
148:                     "notification" => [
149:                         "title" => $this->title,
150:                         "body" => $this->body,
151:                     ],
152:                     'data' => $dataArr,
153:                 ]
154:             ];
155:         }
156: 
157:         // $encodedData = json_encode($data);
158: 
159:         return $this->handleSend($json);
160:     }
161: 
162:     private function handleSend($json)
163:     {
164:         try {
165:             $client = new GuzzleClient();
166:             // project_id = mazad-ibraa
167:             $response = $client->post('https://fcm.googleapis.com/v1/projects/car-mediator-platform/messages:send', [
168:                 'headers' => [
169:                     'Authorization' => 'Bearer ' . $this->getAccessToken(),
170:                     'Content-Type' => 'application/json',
171:                 ],
172:                 'json' => $json,
173:             ]);
174: 
175:             return $response ?? '';
176:         } catch (Exception $e) {
177:             Log::error("[Notification] ERROR", [$e->getMessage()]);
178: 
179:             return $e;
180:         }
181:     }
182: 
183:     private function getAccessToken()
184:     {
185:         return Cache::remember('fcm_access_token_key', 3500, function () {
186:             $client = new Google_Client();
187:             
188:             // Check for env variable first (for Railway)
189:             $envCredentials = env('FIREBASE_CREDENTIALS');
190:             $credentialsPath = storage_path('app/json/firebase/car-mediator-platform-firebase-adminsdk-fbsvc-1d8876fe49.json');
191:             
192:             if (!empty($envCredentials)) {
193:                 $client->setAuthConfig(json_decode($envCredentials, true));
194:             } elseif (file_exists($credentialsPath)) {
195:                 $client->setAuthConfig($credentialsPath);
196:             } else {
197:                 throw new Exception("Firebase credentials not found. Please set FIREBASE_CREDENTIALS env var or add the json file.");
198:             }
199: 
200:             $client->addScope('https://www.googleapis.com/auth/firebase.messaging');
201: 
202:             $token = $client->fetchAccessTokenWithAssertion();
203:             return $token['access_token'];
204:         });
205:     }
206: }
```

## File: config/mail.php
```php
  1: <?php
  2: 
  3: return [
  4: 
  5:     /*
  6:     |--------------------------------------------------------------------------
  7:     | Default Mailer
  8:     |--------------------------------------------------------------------------
  9:     |
 10:     | This option controls the default mailer that is used to send all email
 11:     | messages unless another mailer is explicitly specified when sending
 12:     | the message. All additional mailers can be configured within the
 13:     | "mailers" array. Examples of each type of mailer are provided.
 14:     |
 15:     */
 16: 
 17:     'default' => env('MAIL_MAILER', 'log'),
 18: 
 19:     /*
 20:     |--------------------------------------------------------------------------
 21:     | Mailer Configurations
 22:     |--------------------------------------------------------------------------
 23:     |
 24:     | Here you may configure all of the mailers used by your application plus
 25:     | their respective settings. Several examples have been configured for
 26:     | you and you are free to add your own as your application requires.
 27:     |
 28:     | Laravel supports a variety of mail "transport" drivers that can be used
 29:     | when delivering an email. You may specify which one you're using for
 30:     | your mailers below. You may also add additional mailers if needed.
 31:     |
 32:     | Supported: "smtp", "sendmail", "mailgun", "ses", "ses-v2",
 33:     |            "postmark", "resend", "log", "array",
 34:     |            "failover", "roundrobin"
 35:     |
 36:     */
 37: 
 38:     'mailers' => [
 39: 
 40:         'smtp' => [
 41:             'transport' => 'smtp',
 42:             'scheme' => env('MAIL_SCHEME'),
 43:             'url' => env('MAIL_URL'),
 44:             'host' => env('MAIL_HOST', '127.0.0.1'),
 45:             'port' => env('MAIL_PORT', 2525),
 46:             'username' => env('MAIL_USERNAME'),
 47:             'password' => env('MAIL_PASSWORD'),
 48:             'encryption' => env('MAIL_ENCRYPTION', 'tls'),
 49:             'timeout' => env('MAIL_TIMEOUT', 5),
 50:             'local_domain' => env('MAIL_EHLO_DOMAIN', parse_url((string) env('APP_URL', 'http://localhost'), PHP_URL_HOST)),
 51:         ],
 52: 
 53:         'ses' => [
 54:             'transport' => 'ses',
 55:         ],
 56: 
 57:         'postmark' => [
 58:             'transport' => 'postmark',
 59:             // 'message_stream_id' => env('POSTMARK_MESSAGE_STREAM_ID'),
 60:             // 'client' => [
 61:             //     'timeout' => 5,
 62:             // ],
 63:         ],
 64: 
 65:         'resend' => [
 66:             'transport' => 'resend',
 67:         ],
 68: 
 69:         'sendmail' => [
 70:             'transport' => 'sendmail',
 71:             'path' => env('MAIL_SENDMAIL_PATH', '/usr/sbin/sendmail -bs -i'),
 72:         ],
 73: 
 74:         'log' => [
 75:             'transport' => 'log',
 76:             'channel' => env('MAIL_LOG_CHANNEL'),
 77:         ],
 78: 
 79:         'array' => [
 80:             'transport' => 'array',
 81:         ],
 82: 
 83:         'failover' => [
 84:             'transport' => 'failover',
 85:             'mailers' => [
 86:                 'smtp',
 87:                 'log',
 88:             ],
 89:             'retry_after' => 60,
 90:         ],
 91: 
 92:         'roundrobin' => [
 93:             'transport' => 'roundrobin',
 94:             'mailers' => [
 95:                 'ses',
 96:                 'postmark',
 97:             ],
 98:             'retry_after' => 60,
 99:         ],
100: 
101:     ],
102: 
103:     /*
104:     |--------------------------------------------------------------------------
105:     | Global "From" Address
106:     |--------------------------------------------------------------------------
107:     |
108:     | You may wish for all emails sent by your application to be sent from
109:     | the same address. Here you may specify a name and address that is
110:     | used globally for all emails that are sent by your application.
111:     |
112:     */
113: 
114:     'from' => [
115:         'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
116:         'name' => env('MAIL_FROM_NAME', 'Example'),
117:     ],
118: 
119: ];
```

## File: database/migrations/2026_08_28_000000_add_packages_to_shipping_requests_table.php
```php
 1: <?php
 2: 
 3: use Illuminate\Database\Migrations\Migration;
 4: use Illuminate\Database\Schema\Blueprint;
 5: use Illuminate\Support\Facades\Schema;
 6: 
 7: return new class extends Migration {
 8:     public function up(): void {
 9:         Schema::table('shipping_requests', function (Blueprint $table) {
10:             $table->json('packages')->nullable()->after('weight');
11:         });
12:     }
13: 
14:     public function down(): void {
15:         Schema::table('shipping_requests', function (Blueprint $table) {
16:             $table->dropColumn('packages');
17:         });
18:     }
19: };
```

## File: routes/api_user_v1.php
```php
 1: <?php
 2: 
 3: use Illuminate\Support\Facades\Route;
 4: 
 5: // Route::middleware(['auth:sanctum', 'role:user'])->group(function () {});
 6: 
 7: Route::middleware(['auth:sanctum', 'role:user'])->group(function () {
 8:     Route::prefix('/request')->controller(App\Http\Controllers\API\V1\User\Requests\RequestController::class)->group(function () {
 9:         Route::post('/check-eligible-vendors', 'checkEligibleVendors');
10:         Route::post('/confirm-request', 'confirmRequest');
11:         Route::post('/confirm-shipping-request', 'ConfirmShippingRequest');
12:         Route::post('/confirm-price-shipping-request', 'confirmPriceShippingRequest');
13:     });
14: 
15:     Route::prefix('/my-requests')->controller(App\Http\Controllers\API\V1\User\MyRequests\MyRequestUserController::class)->group(function () {
16:         Route::get('/', 'getMyRequest');
17:         Route::get('/{requestId}', 'getMyRequestById');
18:         Route::get('/responses/{requestId}', 'getResponsesMyRequest');
19:         Route::get('/response/{responseId}', 'getResponseRequestById');
20:         Route::post('/update-status', 'updateStatus');
21:     });
22: 
23:     Route::prefix('/complaints')->controller(App\Http\Controllers\API\V1\Shared\Complaints\ComplaintController::class)->group(function () {
24:         Route::post('/complaint-vendor-service', 'complaintVendorService');
25:     });
26: 
27:     Route::prefix('/profile')->controller(App\Http\Controllers\API\V1\User\ProfileUserController::class)->group(function () {
28:         Route::get('/', 'getUserProfile');
29:         Route::post('/update', 'updateUserProfile');
30:     });
31: 
32: });
33: 
34: Route::middleware(['auth:sanctum'])->group(function () {
35:     Route::prefix('/vendor-profiles')->controller(App\Http\Controllers\API\V1\User\VendorProfileController::class)->group(function () {
36:         Route::get('/{vendorId}', 'show');
37:         Route::post('/{vendorId}/rate', 'storeReview')->middleware('role:user');
38:     });
39: });
```

## File: composer.json
```json
 1: {
 2:     "$schema": "https://getcomposer.org/schema.json",
 3:     "name": "laravel/laravel",
 4:     "type": "project",
 5:     "description": "The skeleton application for the Laravel framework.",
 6:     "keywords": [
 7:         "laravel",
 8:         "framework"
 9:     ],
10:     "license": "MIT",
11:     "require": {
12:         "php": "^8.4",
13:         "google/apiclient": "^2.18",
14:         "laravel/breeze": "^2.3",
15:         "laravel/framework": "^13.0",
16:         "laravel/reverb": "^1.0",
17:         "laravel/sanctum": "^4.0",
18:         "laravel/tinker": "^3.0",
19:         "spatie/laravel-permission": "^6.21",
20:         "twilio/sdk": "^8.8",
21:         "ext-pcntl": "*",
22:         "ext-posix": "*"
23:     },
24:     "require-dev": {
25:         "fakerphp/faker": "^1.23",
26:         "laravel/pail": "^1.2.2",
27:         "laravel/pint": "^1.13",
28:         "laravel/sail": "^1.41",
29:         "mockery/mockery": "^1.6",
30:         "nunomaduro/collision": "^8.6",
31:         "phpunit/phpunit": "^11.5.3"
32:     },
33:     "autoload": {
34:         "files": [
35:             "app/Helpers/Helper.php"
36:         ],
37:         "psr-4": {
38:             "App\\": "app/",
39:             "Database\\Factories\\": "database/factories/",
40:             "Database\\Seeders\\": "database/seeders/"
41:         }
42:     },
43:     "autoload-dev": {
44:         "psr-4": {
45:             "Tests\\": "tests/"
46:         }
47:     },
48:     "scripts": {
49:         "post-autoload-dump": [
50:             "Illuminate\\Foundation\\ComposerScripts::postAutoloadDump",
51:             "@php artisan package:discover --ansi"
52:         ],
53:         "post-update-cmd": [
54:             "@php artisan vendor:publish --tag=laravel-assets --ansi --force"
55:         ],
56:         "post-root-package-install": [
57:             "@php -r \"file_exists('.env') || copy('.env.example', '.env');\""
58:         ],
59:         "post-create-project-cmd": [
60:             "@php artisan key:generate --ansi",
61:             "@php -r \"file_exists('database/database.sqlite') || touch('database/database.sqlite');\"",
62:             "@php artisan migrate --graceful --ansi"
63:         ],
64:         "dev": [
65:             "Composer\\Config::disableProcessTimeout",
66:             "npx concurrently -c \"#93c5fd,#c4b5fd,#fb7185,#fdba74\" \"php artisan serve\" \"php artisan queue:listen --tries=1\" \"php artisan pail --timeout=0\" \"npm run dev\" --names=server,queue,logs,vite"
67:         ],
68:         "test": [
69:             "@php artisan config:clear --ansi",
70:             "@php artisan test"
71:         ]
72:     },
73:     "extra": {
74:         "laravel": {
75:             "dont-discover": []
76:         }
77:     },
78:     "config": {
79:         "platform": {
80:             "php": "8.4.1",
81:             "ext-pcntl": "8.4.1",
82:             "ext-posix": "8.4.1"
83:         },
84:         "optimize-autoloader": false,
85:         "preferred-install": "dist",
86:         "sort-packages": true,
87:         "allow-plugins": {
88:             "pestphp/pest-plugin": true,
89:             "php-http/discovery": true
90:         }
91:     },
92:     "minimum-stability": "stable",
93:     "prefer-stable": true
94: }
```

## File: nixpacks.toml
```toml
1: [variables]
2: NIXPACKS_PHP_EXTENSIONS = 'pcntl,posix,pdo,pdo_mysql,mbstring,openssl,tokenizer,xml,ctype,json'
3: 
4: [phases.setup]
5: nixPkgs = ['php84', 'php84Packages.composer']
```

## File: routes/channels.php
```php
 1: <?php
 2: 
 3: use App\Models\Conversation;
 4: use Illuminate\Support\Facades\Broadcast;
 5: 
 6: Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
 7:     return (int) $user->id === (int) $id;
 8: });
 9: 
10: Broadcast::channel('user.{id}', function ($user, $id) {
11:     \Illuminate\Support\Facades\Log::info("Broadcast auth attempt on user.{$id} by user {$user->id}");
12:     return (int) $user->id === (int) $id;
13: });
14: 
15: Broadcast::channel('conversation.{conversationId}', function ($user, $conversationId) {
16:     $conv = Conversation::find($conversationId);
17:     if (!$conv) {
18:         \Illuminate\Support\Facades\Log::warning("Broadcast auth failed: Conversation {$conversationId} not found");
19:         return false;
20:     }
21:     
22:     $vendorUserId = \App\Models\Vendor::where('id', $conv->vendor_id)->value('user_id') ?: $conv->vendor_id;
23:     
24:     $allowed = (int) $user->id === (int) $vendorUserId || (int) $user->id === (int) $conv->user_id;
25:     if (!$allowed) {
26:         \Illuminate\Support\Facades\Log::warning("Broadcast auth forbidden: User {$user->id} not participant in conversation {$conversationId} (vendor user: {$vendorUserId}, client user: {$conv->user_id})");
27:     }
28:     return $allowed;
29: });
30: 
31: Broadcast::channel('private-conversation.{conversationId}', function ($user, $conversationId) {
32:     $conv = Conversation::find($conversationId);
33:     if (!$conv) return false;
34:     $vendorUserId = \App\Models\Vendor::where('id', $conv->vendor_id)->value('user_id') ?: $conv->vendor_id;
35:     return (int) $user->id === (int) $vendorUserId || (int) $user->id === (int) $conv->user_id;
36: });
37: 
38: Broadcast::channel('chat.{id1}.{id2}', function ($user, $id1, $id2) {
39:     return (int) $user->id === (int) $id1 || (int) $user->id === (int) $id2;
40: });
41: 
42: Broadcast::channel('private-chat.{id1}.{id2}', function ($user, $id1, $id2) {
43:     return (int) $user->id === (int) $id1 || (int) $user->id === (int) $id2;
44: });
```

## File: app/Http/Requests/User/Request/ConfirmOrderRequest.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Requests\User\Request;
  4: 
  5: use App\Enums\CustomFieldTypeEnum;
  6: use App\Http\Repositories\Shared\CustomFieldRepository;
  7: use App\Rules\RequiredBrandIfCategoryHasBrandRule;
  8: use Illuminate\Contracts\Validation\Validator;
  9: use Illuminate\Foundation\Http\FormRequest;
 10: use Illuminate\Support\Facades\Log;
 11: use Illuminate\Validation\ValidationException;
 12: 
 13: class ConfirmOrderRequest extends FormRequest
 14: {
 15:     public function authorize(): bool
 16:     {
 17:         return auth('sanctum')->check();
 18:     }
 19: 
 20:     // prepare the data for validation.
 21:     protected function prepareForValidation(): void
 22:     {
 23:         $brandId = $this->brandId;
 24:         if (is_string($brandId) && str_starts_with(trim($brandId), '[')) {
 25:             $brandId = json_decode($brandId, true);
 26:         } elseif (is_numeric($brandId)) {
 27:             $brandId = (int) $brandId;
 28:         }
 29: 
 30:         $this->merge([
 31:             'categoryId' => (int) $this->categoryId,
 32:             'customerCityId' => (int) $this->customerCityId,
 33:             'citiesIdsScope' => is_string($this->citiesIdsScope) ? json_decode($this->citiesIdsScope, true) : $this->citiesIdsScope,
 34:             'brandId' => $brandId,
 35:         ]);
 36:     }
 37: 
 38:     public function rules(): array
 39:     {
 40:         return [
 41:             'categoryId'       => ['required', 'integer', 'exists:categories,id'],
 42:             'customerCityId'  => ['required', 'integer'],
 43:             'description'       => ['required', 'string', 'max:4000'],
 44:             'citiesIdsScope' => 'required|array|min:1',
 45:             'citiesIdsScope.*' => ['required', 'integer'],
 46:             'brandId' => ['nullable', new RequiredBrandIfCategoryHasBrandRule],
 47:             'images' => 'nullable|array|max:20',
 48:             'images.*' => 'image|mimes:png,jpg,jpeg,gif,webp|max:5000',
 49:             'customFields' => [
 50:                 'nullable',
 51:                 'json',
 52:                 function ($attribute, $value, $fail) {
 53:                     if (is_array($value)) {
 54: 
 55:                         $categoryId = request()->input('categoryId');
 56:                         $customFieldsList = (new CustomFieldRepository())->getCustomFieldsByCategoryId($categoryId);
 57: 
 58:                         foreach ($customFieldsList as $item) {
 59:                             if ($item->field_type != CustomFieldTypeEnum::File->value) {
 60:                                 $customField = $value[$item->field_name] ?? null;
 61:                                 if ($item->is_required == true && empty($customField)) {
 62:                                     $fail("حقل {$item->label_ar} مطلوب");
 63:                                 }
 64: 
 65:                                 if ($item->field_type == CustomFieldTypeEnum::Number->value && !is_numeric($customField)) {
 66:                                     $fail("حقل {$item->label_ar} يجب ان يكون رقم");
 67:                                 }
 68: 
 69:                                 if ($item->field_type == CustomFieldTypeEnum::Date->value && !is_date($customField)) {
 70:                                     $fail("حقل {$item->label_ar} يجب ان يكون تاريخ");
 71:                                 }
 72: 
 73:                                 if ($item->field_type == CustomFieldTypeEnum::TextArea->value && !is_string($customField)) {
 74:                                     $fail("حقل {$item->label_ar} يجب ان يكون نص");
 75:                                 }
 76: 
 77:                                 if ($item->field_type == CustomFieldTypeEnum::Select->value && !is_array($customField)) {
 78:                                     $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
 79:                                 }
 80: 
 81:                                 if ($item->field_type == CustomFieldTypeEnum::Checkbox->value && !is_array($customField)) {
 82:                                     $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
 83:                                 }
 84: 
 85:                                 if ($item->field_type == CustomFieldTypeEnum::Radio->value && !is_array($customField)) {
 86:                                     $fail("حقل {$item->label_ar} يجب ان يكون اختيار");
 87:                                 }
 88: 
 89:                                 if ($item->field_type == CustomFieldTypeEnum::Text->value && !is_string($customField)) {
 90:                                     $fail("حقل {$item->label_ar} يجب ان يكون نص");
 91:                                 }
 92:                             }
 93:                         }
 94:                     }
 95:                 }
 96:             ],
 97:         ];
 98:     }
 99: 
100:     public function messages(): array
101:     {
102:         return [
103:             'categoryId.required'      => 'القسم مطلوبة.',
104:             'categoryId.exists'        => 'القسم غير موجودة.',
105:             'customerCityId.required' => 'المدينة مطلوبة.',
106:             'description.required'      => 'الوصف مطلوب.',
107:             'description.max'           => 'الوصف يجب ألا يتجاوز 4000 حرف.',
108:             'max_price.gte'             => 'السعر الأعلى يجب أن يكون أكبر أو يساوي السعر الأدنى.',
109:         ];
110:     }
111: 
112:     protected function failedValidation(Validator $validator)
113:     {
114:         $response = response()->json($validator->errors(), 422);
115:         throw (new ValidationException($validator, $response))
116:             ->errorBag($this->errorBag)
117:             ->redirectTo($this->getRedirectUrl());
118:     }
119: }
```

## File: app/Http/Services/User/Requests/RequestService.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Services\User\Requests;
  4: 
  5: use App\Enums\CustomFieldTypeEnum;
  6: use App\Http\Repositories\Shared\CustomFieldRepository;
  7: use App\Http\Repositories\User\Requests\RequestRepository;
  8: use App\Models\RequestCustomer;
  9: use App\Models\RequestImage;
 10: use App\Utils\UploadUtils;
 11: use Illuminate\Foundation\Console\UpCommand;
 12: use Illuminate\Http\Request;
 13: use Illuminate\Support\Facades\Log;
 14: 
 15: class RequestService
 16: {
 17:     public function __construct(protected RequestRepository $requestRepo, protected CustomFieldRepository $customFieldRepository) {}
 18: 
 19:     public function countFilterEligibleVendors(Request $request): int
 20:     {
 21:         return $this->requestRepo->countFilterEligibleVendors($request);
 22:     }
 23: 
 24:     public function confirmRequest(Request $request)
 25:     {
 26:         $categoryId = $request->categoryId;
 27:         $citiesIdsScope = $request->citiesIdsScope;
 28:         $brandId = $request->input('brandId');
 29: 
 30:         $eligibleVendors = $this->requestRepo->getFilterEligibleVendors($categoryId, $citiesIdsScope, $brandId);
 31: 
 32:         $createRequest = $this->createRequest($request);
 33:         if ($brandId)
 34:             $this->requestRepo->createRequestBrandScope($createRequest->id, $brandId);
 35: 
 36:         $this->createCustomFields($request, $createRequest->id);
 37:         $this->uploadRequestImage($request->images ?? [],  $createRequest->id);
 38:         $this->createRequestEligibleVendors($createRequest->id, $eligibleVendors);
 39: 
 40:         return $eligibleVendors;
 41:     }
 42: 
 43:     private function createRequest(Request $request)
 44:     {
 45:         return $this->requestRepo->createRequest([
 46:             'user_id' => getCurrUserIdHelper(),
 47:             'category_id' => $request->categoryId,
 48:             'customer_city_id' => $request->customerCityId,
 49:             'description' => $request->description,
 50:             'cities_ids_scope' => $request->citiesIdsScope,
 51:         ]);
 52:     }
 53: 
 54:     private function createCustomFields(Request $request, int $requestCustomerId)
 55:     {
 56:         $fieldsRequest = json_decode($request->customFields, true);
 57: 
 58:         if (is_array($fieldsRequest)) {
 59:             $customFieldsList = (new CustomFieldRepository())->getCustomFieldsByCategoryId($request->categoryId);
 60: 
 61:             foreach ($fieldsRequest as $fieldName => $customField) {
 62:                 if (empty($customField)) continue;
 63: 
 64:                 $item = $customFieldsList->where('field_name', $fieldName)->first();
 65: 
 66:                 if (!$item) {
 67:                     $labelAr = match ($fieldName) {
 68:                         'car_name' => 'اسم السيارة',
 69:                         'part_name' => 'اسم القطعة',
 70:                         'budget' => 'الميزانه',
 71:                         'chassis_number' => 'رقم الهيكل',
 72:                         'confirm_chassis_number' => 'تأكيد رقم الهيكل',
 73:                         default => $fieldName,
 74:                     };
 75:                     $labelEn = match ($fieldName) {
 76:                         'car_name' => 'Car Name',
 77:                         'part_name' => 'Part Name',
 78:                         'budget' => 'Budget',
 79:                         'chassis_number' => 'Chassis Number',
 80:                         'confirm_chassis_number' => 'Confirm Chassis Number',
 81:                         default => $fieldName,
 82:                     };
 83: 
 84:                     $item = \App\Models\CustomField::updateOrCreate(
 85:                         ['category_id' => $request->categoryId, 'field_name' => $fieldName],
 86:                         [
 87:                             'label_ar' => $labelAr,
 88:                             'label_en' => $labelEn,
 89:                             'field_type' => CustomFieldTypeEnum::Text->value,
 90:                             'is_required' => false,
 91:                         ]
 92:                     );
 93:                 }
 94: 
 95:                 if ($item && $item->field_type != CustomFieldTypeEnum::File->value) {
 96:                     $this->requestRepo->createRequestCustomFieldValues([
 97:                         'request_id' => $requestCustomerId,
 98:                         'custom_field_id' => $item->id,
 99:                         'value' => json_encode($customField),
100:                     ]);
101:                 }
102:             }
103:         }
104:     }
105: 
106:     private function uploadRequestImage($files, $requestId)
107:     {
108:         if (is_null($files))
109:             return;
110: 
111:         foreach ($files as $file) {
112:             $fileName = UploadUtils::encryptAndStoreSensitiveFile($file);
113:             RequestImage::create(['request_id' => $requestId, 'image_name' => $fileName]);
114:         }
115:     }
116: 
117:     // request_eligible_vendors
118:     private function createRequestEligibleVendors($requestId, $eligibleVendorsList)
119:     {
120:         foreach ($eligibleVendorsList as $vendor) {
121:             $this->requestRepo->createRequestEligibleVendors([
122:                 'request_id' => $requestId,
123:                 'vendor_id' => $vendor->id,
124:             ]);
125:         }
126:     }
127: 
128:     // ConfirmShippingRequest
129:     public function confirmShippingRequest(Request $request)
130:     {
131:         return $this->requestRepo->storeShippingRequest([
132:             'request_id' => $request->requestId,
133:             'response_id' => $request->responseId,
134:             'id_number_user' => $request->idNumberUser,
135:             'address' => $request->address,
136:         ]);
137:     }
138: }
```

## File: app/Utils/UploadUtils.php
```php
  1: <?php
  2: 
  3: namespace App\Utils;
  4: 
  5: use Illuminate\Support\Facades\Crypt;
  6: use Illuminate\Support\Facades\Log;
  7: use Illuminate\Support\Facades\Storage;
  8: 
  9: class UploadUtils
 10: {
 11:     public static function encryptAndStoreSensitiveFile($file): string
 12:     {
 13:         try {
 14:             $content = file_get_contents($file->getRealPath());
 15: 
 16:             // Encrypt the contents
 17:             $encrypted = Crypt::encrypt($content);
 18: 
 19:             // Store the encrypted contents in the private storage
 20:             $filename = self::generateRandomName() . '.enc';
 21:             Storage::disk('local')->put("private/{$filename}", $encrypted);
 22: 
 23:             return $filename;
 24:         } catch (\Exception $e) {
 25:             Log::error('Image processing error: ' . $e->getMessage());
 26:             return '';
 27:         }
 28:     }
 29: 
 30:     public static function getSensitiveFile($filename)
 31:     {
 32:         //         التحكم في الوصول (Authorization)
 33:         // قبل إرجاع الصورة لازم تتحقق من صلاحيات المستخدم (مثلاً باستخدام Gate أو Policy).
 34: 
 35:         $encrypted = Storage::disk('local')->get("private/{$filename}");
 36:         $decrypted = Crypt::decrypt($encrypted);
 37: 
 38:         return response($decrypted, 200)
 39:             ->header('Content-Type', 'image/jpeg'); // أو حسب نوع الصورة
 40:     }
 41: 
 42: 
 43:     public static function uploadMultipleImage($files): array
 44:     {
 45:         try {
 46:             $imagePaths = [];
 47:             if ($files) {
 48:                 foreach ($files as $file) {
 49:                     if (!$file->isValid()) continue;
 50: 
 51:                     $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
 52:                     Storage::disk('local')->putFileAs(
 53:                         'private',
 54:                         $file,
 55:                         $fileName
 56:                     );
 57: 
 58:                     $imagePaths[] = $fileName;
 59:                 }
 60:             }
 61: 
 62:             return $imagePaths;
 63:         } catch (\Exception $e) {
 64:             Log::error('Image processing error: ' . $e->getMessage());
 65:             return [];
 66:         }
 67:     }
 68: 
 69:     public static function uploadImageToStorage($file, string $path = 'private'): string
 70:     {
 71:         try {
 72:             if ($file) {
 73:                 $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
 74:                 Storage::disk('local')->putFileAs(
 75:                     $path,
 76:                     $file,
 77:                     $fileName
 78:                 );
 79:                 return $fileName;
 80:             }
 81: 
 82:             return '';
 83:         } catch (\Exception $e) {
 84:             Log::error('Image processing error: ' . $e->getMessage());
 85:             return '';
 86:         }
 87:     }
 88: 
 89:     // uploadMultipleImage to public
 90:     public static function uploadMultipleImageToPublic($files): array
 91:     {
 92:         try {
 93:             $imagePaths = [];
 94:             if ($files) {
 95:                 foreach ($files as $file) {
 96:                     if (!$file->isValid()) continue;
 97: 
 98:                     $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
 99: 
100:                     $uploadDir = public_path('uploads');
101:                     if (!file_exists($uploadDir)) {
102:                         mkdir($uploadDir, 0755, true);
103:                     }
104: 
105:                     $file->move($uploadDir, $fileName);
106: 
107:                     $imagePaths[] = $fileName;
108:                 }
109:             }
110: 
111:             return $imagePaths;
112:         } catch (\Exception $e) {
113:             Log::error('Image processing error: ' . $e->getMessage());
114:             return [];
115:         }
116:     }
117: 
118:     public static function uploadImageToPublic($file, string $path = 'uploads'): string
119:     {
120:         try {
121:             if ($file) {
122:                 $fileName = self::GenerateRandomName() . '.' . $file->getClientOriginalExtension();
123:                 $uploadDir = public_path($path);
124:                 if (!file_exists($uploadDir)) {
125:                     mkdir($uploadDir, 0755, true);
126:                 }
127:                 $file->move($uploadDir, $fileName);
128:                 return $fileName;
129:             }
130: 
131:             return '';
132:         } catch (\Exception $e) {
133:             Log::error('Image processing error: ' . $e->getMessage());
134:             return '';
135:         }
136:     }
137: 
138: 
139:     private static function generateRandomName()
140:     {
141:         return 'img_' . date('mdYHis') . rand(1000, 10000) . uniqid();
142:     }
143: }
```

## File: app/Http/Controllers/API/V1/User/VendorProfileController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\API\V1\User;
  4: 
  5: use App\Http\Controllers\Controller;
  6: use App\Models\Vendor;
  7: use App\Models\VendorReview;
  8: use Illuminate\Http\Request;
  9: use Illuminate\Support\Facades\DB;
 10: use Illuminate\Support\Facades\Validator;
 11: 
 12: class VendorProfileController extends Controller
 13: {
 14:     public function show($vendorId)
 15:     {
 16:         $vendor = Vendor::join('users', 'vendors.user_id', '=', 'users.id')
 17:             ->where('vendors.id', $vendorId)
 18:             ->orWhere('vendors.user_id', $vendorId)
 19:             ->select([
 20:                 'vendors.id',
 21:                 'vendors.user_id',
 22:                 'vendors.company_name_ar',
 23:                 'vendors.company_name_en',
 24:                 'vendors.description',
 25:                 'vendors.rating',
 26:                 'vendors.commercial_record',
 27:                 'users.logo',
 28:                 'users.created_at',
 29:             ])->first();
 30: 
 31:         if (!$vendor) {
 32:             return buildApiResponseHelper(false, 'التاجر غير موجود');
 33:         }
 34: 
 35:         $reviews = VendorReview::join('users', 'vendor_reviews.user_id', '=', 'users.id')
 36:             ->where('vendor_reviews.vendor_id', $vendor->user_id)
 37:             ->where('vendor_reviews.is_visible', 1)
 38:             ->select([
 39:                 'vendor_reviews.id',
 40:                 'vendor_reviews.rating',
 41:                 'vendor_reviews.review',
 42:                 'vendor_reviews.created_at',
 43:                 'users.name as user_name',
 44:                 'users.logo as user_logo',
 45:             ])
 46:             ->orderBy('vendor_reviews.id', 'desc')
 47:             ->paginate(15);
 48: 
 49:         $result = [
 50:             'vendor' => [
 51:                 'id' => $vendor->id,
 52:                 'user_id' => $vendor->user_id,
 53:                 'company_name' => $vendor->company_name_ar ?? 'التاجر',
 54:                 'description' => $vendor->description,
 55:                 'rating' => (float) $vendor->rating,
 56:                 'logo' => $vendor->logo,
 57:                 'commercial_record' => $vendor->commercial_record,
 58:                 'total_reviews' => $reviews->total(),
 59:                 'member_since' => $vendor->created_at ? $vendor->created_at->format('Y-m-d') : null,
 60:                 'total_responses' => \App\Models\RequestResponse::whereIn('vendor_id', [$vendor->id, $vendor->user_id])->count(),
 61:             ],
 62:             'reviews' => resultApiPaginationHelper($reviews)
 63:         ];
 64: 
 65:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', $result);
 66:     }
 67: 
 68:     public function storeReview(Request $request, $vendorId)
 69:     {
 70:         $validator = Validator::make($request->all(), [
 71:             'request_id' => 'required|integer',
 72:             'rating' => 'required|numeric|min:1|max:5',
 73:             'review' => 'nullable|string|max:1000',
 74:         ]);
 75: 
 76:         if ($validator->fails()) {
 77:             return response()->json($validator->errors(), 422);
 78:         }
 79: 
 80:         $vendor = Vendor::where('id', $vendorId)->orWhere('user_id', $vendorId)->first();
 81:         if (!$vendor) {
 82:             return buildApiResponseHelper(false, 'التاجر غير موجود');
 83:         }
 84: 
 85:         $userId = getCurrUserIdHelper();
 86: 
 87:         $existingReview = VendorReview::where('vendor_id', $vendor->user_id)
 88:             ->where('user_id', $userId)
 89:             ->where('request_id', $request->request_id)
 90:             ->first();
 91: 
 92:         if ($existingReview) {
 93:             return buildApiResponseHelper(false, 'لقد قمت بتقييم هذا التاجر مسبقاً على هذا الطلب');
 94:         }
 95: 
 96:         VendorReview::create([
 97:             'request_id' => $request->request_id,
 98:             'vendor_id' => $vendor->user_id,
 99:             'user_id' => $userId,
100:             'rating' => $request->rating,
101:             'review' => $request->review,
102:             'is_visible' => 1,
103:         ]);
104: 
105:         // Update average rating
106:         $avgRating = VendorReview::where('vendor_id', $vendor->user_id)
107:             ->where('is_visible', 1)
108:             ->avg('rating');
109: 
110:         $vendor->update(['rating' => $avgRating]);
111: 
112:         return buildApiResponseHelper(true, 'تم إضافة التقييم بنجاح', ['new_rating' => $avgRating]);
113:     }
114: }
```

## File: app/Utils/OTOServiceUtils.php
```php
  1: <?php
  2: 
  3: namespace App\Utils;
  4: 
  5: use Illuminate\Support\Facades\Http;
  6: use Illuminate\Support\Facades\Log;
  7: 
  8: class OTOServiceUtils
  9: {
 10:     public function getBaseUrl(): string
 11:     {
 12:         $url = config('services.oto.url');
 13:         if (empty($url)) {
 14:             $url = env('OTO_API_URL', 'https://api.tryoto.com/rest/v2');
 15:         }
 16:         return rtrim($url, '/');
 17:     }
 18: 
 19:     public static function sanitizeCity(?string $cityInput): string
 20:     {
 21:         $city = trim($cityInput ?? '');
 22:         if (empty($city) || $city === 'مدينة غير محددة') {
 23:             return 'Riyadh';
 24:         }
 25: 
 26:         $mapping = [
 27:             'الرياض' => 'Riyadh',
 28:             'riyadh' => 'Riyadh',
 29:             'مكة' => 'Makkah',
 30:             'makkah' => 'Makkah',
 31:             'mecca' => 'Makkah',
 32:             'جده' => 'Jeddah',
 33:             'جدة' => 'Jeddah',
 34:             'jeddah' => 'Jeddah',
 35:             'المدينة' => 'Madinah',
 36:             'مدينه' => 'Madinah',
 37:             'مدينة' => 'Madinah',
 38:             'madinah' => 'Madinah',
 39:             'medina' => 'Madinah',
 40:             'القصيم' => 'Qassim',
 41:             'قصيم' => 'Qassim',
 42:             'qassim' => 'Qassim',
 43:             'الشرقية' => 'Dammam',
 44:             'الشرقيه' => 'Dammam',
 45:             'eastern province' => 'Dammam',
 46:             'eastern' => 'Dammam',
 47:             'الدمام' => 'Dammam',
 48:             'دمام' => 'Dammam',
 49:             'dammam' => 'Dammam',
 50:             'الخبر' => 'Khobar',
 51:             'khobar' => 'Khobar',
 52:             'عسير' => 'Asir',
 53:             'asir' => 'Asir',
 54:             'تبوك' => 'Tabuk',
 55:             'tabuk' => 'Tabuk',
 56:             'حائل' => 'Hail',
 57:             'hail' => 'Hail',
 58:             'الحدود الشمالية' => 'Northern Borders',
 59:             'northern' => 'Northern Borders',
 60:             'نجران' => 'Najran',
 61:             'najran' => 'Najran',
 62:             'الباحة' => 'Al Baha',
 63:             'باحة' => 'Al Baha',
 64:             'baha' => 'Al Baha',
 65:             'جيزان' => 'Jizan',
 66:             'جازان' => 'Jizan',
 67:             'jizan' => 'Jizan',
 68:             'jazan' => 'Jizan',
 69:             'الجوف' => 'Al Jouf',
 70:             'جوف' => 'Al Jouf',
 71:             'jouf' => 'Al Jouf',
 72:             'الطائف' => 'Taif',
 73:             'طائف' => 'Taif',
 74:             'taif' => 'Taif',
 75:             'ينبع' => 'Yanbu',
 76:             'yanbu' => 'Yanbu',
 77:             'أبها' => 'Abha',
 78:             'ابها' => 'Abha',
 79:             'abha' => 'Abha',
 80:             'عرعر' => 'Arar',
 81:             'arar' => 'Arar',
 82:             'الهفوف' => 'Hofuf',
 83:             'hofuf' => 'Hofuf',
 84:             'الأحساء' => 'Al Ahsa',
 85:             'احساء' => 'Al Ahsa',
 86:             'ahsa' => 'Al Ahsa',
 87:         ];
 88: 
 89:         $lower = mb_strtolower($city, 'UTF-8');
 90:         if (isset($mapping[$lower])) {
 91:             return $mapping[$lower];
 92:         }
 93: 
 94:         foreach ($mapping as $needle => $targetCity) {
 95:             if (mb_stripos($city, $needle, 0, 'UTF-8') !== false) {
 96:                 return $targetCity;
 97:             }
 98:         }
 99: 
100:         return 'Riyadh';
101:     }
102: 
103:     public function getRefreshToken(): string
104:     {
105:         $token = config('services.oto.refresh_token');
106:         if (empty($token)) {
107:             $token = env('OTO_REFRESH_TOKEN', 'AMf-vBwsG7J61J_1EkBNW_wnKdQc4Xyalpz59J1QittknHfsekYzdv-1sDxoeD1oaw5_OBxmnVtjkwzm7nAUsfkEZoZpmMQtAINMhJLIWxAiJ1xnX9IY4ksBrIGoiGFG1ULhV8nT-a7ucNxD28bjK-cf6bOPEVWYpVDdQToxKpvgEXp2yQTujA3HT5XMIo_x31f1k6I41WA3pdKzsrwSCU_NQSijp1oBxQ');
108:         }
109:         return $token ?? '';
110:     }
111: 
112:     public function getAccessTokenOTO()
113:     {
114:         $cachedToken = cache()->get('oto_access_token');
115:         if (!empty($cachedToken)) {
116:             return $cachedToken;
117:         }
118: 
119:         try {
120:             $response = Http::timeout(10)->post(
121:                 $this->getBaseUrl() . '/refreshToken',
122:                 [
123:                     'refresh_token' => $this->getRefreshToken(),
124:                 ]
125:             );
126: 
127:             if ($response->ok()) {
128:                 $data = $response->json();
129:                 $token = $data['access_token'] ?? '';
130:                 if (!empty($token)) {
131:                     cache()->put('oto_access_token', $token, now()->addHours(2));
132:                 }
133:                 return $token;
134:             }
135: 
136:             Log::error('OTO Refresh Token Failed: ' . $response->status() . ' - ' . $response->body());
137:             return '';
138:         } catch (\Exception $e) {
139:             Log::error('OTO Refresh Token Exception: ' . $e->getMessage());
140:             return '';
141:         }
142:     }
143: 
144:     public function checkDeliveryFeeAndGetCheapest($accessToken, $originCity, $destinationCity, $width, $length, $height, $weight)
145:     {
146:         $w = (float) ($width ?: 10);
147:         $l = (float) ($length ?: 10);
148:         $h = (float) ($height ?: 10);
149:         $wt = (float) ($weight ?: 1);
150: 
151:         $dataBody = [
152:             'originCity' => self::sanitizeCity($originCity),
153:             'destinationCity' => self::sanitizeCity($destinationCity),
154:             'boxes' => [
155:                 [
156:                     'boxName' => 'Box1',
157:                     'width' => $w,
158:                     'length' => $l,
159:                     'height' => $h,
160:                     'weight' => $wt,
161:                 ]
162:             ],
163:             'width' => $w,
164:             'length' => $l,
165:             'height' => $h,
166:             'weight' => $wt,
167:             'isCod' => true,
168:         ];
169: 
170:         try {
171:             $response = Http::timeout(15)->withHeaders([
172:                 'Authorization' => 'Bearer ' . $accessToken,
173:                 'Accept' => 'application/json',
174:             ])
175:                 ->post($this->getBaseUrl() . '/checkOTODeliveryFee', $dataBody);
176: 
177:             if ($response->ok()) {
178:                 $result = $response->json();
179:                 if (isset($result['success']) && $result['success'] == false) {
180:                     Log::warning('OTO checkDeliveryFee Warning: ', $result);
181:                     return null;
182:                 }
183: 
184:                 $companies = $result['deliveryCompany'] ?? [];
185:                 if (empty($companies)) {
186:                     return null;
187:                 }
188: 
189:                 $cheapest = collect($companies)->sortBy('price')->first();
190:                 return $cheapest;
191:             }
192: 
193:             Log::error('OTO checkDeliveryFee Error: ' . $response->status() . ' - ' . $response->body());
194:             return null;
195:         } catch (\Exception $e) {
196:             Log::error('OTO checkDeliveryFee Exception: ' . $e->getMessage());
197:             return null;
198:         }
199:     }
200: 
201:     public function createOrder($orderData, $token)
202:     {
203:         try {
204:             $response = Http::timeout(15)->withToken($token)
205:                 ->post($this->getBaseUrl() . '/createOrder', $orderData)
206:                 ->json();
207: 
208:             return $response;
209:         } catch (\Exception $e) {
210:             Log::error('OTO createOrder Exception: ' . $e->getMessage());
211:             return null;
212:         }
213:     }
214: }
```

## File: app/Http/Controllers/API/V1/Shared/Conversations/MessageConversationController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\API\V1\Shared\Conversations;
  4: 
  5: use App\Http\Controllers\Controller;
  6: use App\Http\Services\Shared\ShippingService;
  7: use App\Models\Conversation;
  8: use App\Models\MessageConversation;
  9: use App\Traits\NotificationsTrait;
 10: use App\Utils\UploadUtils;
 11: use Illuminate\Http\Request;
 12: use Illuminate\Support\Facades\Log;
 13: use Illuminate\Support\Facades\Validator;
 14: 
 15: class MessageConversationController extends Controller
 16: {
 17:     use NotificationsTrait;
 18: 
 19:     public function __construct(protected ShippingService $shippingService) {}
 20: 
 21:     public function index(Request $request, $conversationId)
 22:     {
 23:         $lastId = $request->query('last_message_id', 0);
 24: 
 25:         $messages = MessageConversation::where('conversation_id', $conversationId)
 26:             ->where('id', '>', $lastId)
 27:             ->select(
 28:                 'id',
 29:                 'sender_id',
 30:                 'body',
 31:                 'image',
 32:                 'is_shipping_request',
 33:                 'created_at as date_sent',
 34:             )
 35:             ->orderBy('id', 'asc')
 36:             ->get();
 37: 
 38:         return buildApiResponseHelper(true, 'تم ارسال الرسالة بنجاح', $messages);
 39:     }
 40: 
 41:     public function store(Request $request)
 42:     {
 43:         $validator = Validator::make($request->all(), [
 44:             'conversationId' => 'required|exists:conversations,id',
 45:             'requestId' => 'required|integer',
 46:             'responseId' => 'required|integer',
 47:             'body' => 'nullable|string',
 48:             'isSendShippingRequest' => 'nullable|boolean',
 49:             'shippingInfo' => 'nullable',
 50:             'image' => 'nullable|image|mimes:png,jpg,jpeg,gif,webp|max:10000',
 51:         ]);
 52: 
 53:         if ($validator->fails()) {
 54:             return response()->json($validator->errors(), 422);
 55:         }
 56: 
 57:         $userId = getCurrUserIdHelper();
 58:         $receiverId = Conversation::getReceiverId($request->conversationId, $userId);
 59: 
 60:         $fileName = UploadUtils::uploadImageToStorage($request->image);
 61: 
 62:         $created = MessageConversation::create([
 63:             'conversation_id' => $request->conversationId,
 64:             'sender_id' => $userId,
 65:             'body' => $request->body,
 66:             'is_shipping_request' => $request->isSendShippingRequest,
 67:             'image' => $fileName
 68:         ]);
 69: 
 70: 
 71:         if ($created) {
 72:             $messagesNotify =  'رسالة جديدة من الطلب رقم' . ' ( ' . $request->requestId . ' )';
 73:             if ($request->shippingInfo != null && $request->isSendShippingRequest == true && $request->shippingInfo != '') {
 74:                 $shippingInfo = json_decode($request->shippingInfo, true);
 75:                 $this->shippingService->storeShippingRequest(
 76:                     requestId: $request->requestId,
 77:                     responseId: $request->responseId,
 78:                     orderNumber: 'REQ-' . $request->requestId . '-RES-' . $request->responseId . '-MSG-' . $created->id,
 79:                     nameOriginVendor: $shippingInfo['name'] ?? null,
 80:                     cityOriginVendor: !empty($shippingInfo['city']) ? $shippingInfo['city'] : 'الرياض',
 81:                     addressOriginVendor: $shippingInfo['address'],
 82:                     latOriginVendor: isset($shippingInfo['lat']) ? (float) $shippingInfo['lat'] : null,
 83:                     lngOriginVendor: isset($shippingInfo['lng']) ? (float) $shippingInfo['lng'] : null,
 84:                     phoneOriginVendor: $shippingInfo['phone'],
 85:                     length: $shippingInfo['length'],
 86:                     width: $shippingInfo['width'],
 87:                     height: $shippingInfo['height'] ?? null,
 88:                     weight: $shippingInfo['weight'] ?? null,
 89:                     packages: isset($shippingInfo['packages']) ? json_encode($shippingInfo['packages']) : null
 90:                 );
 91:                 $messagesNotify =  'طلب شحن جديد من الطلب رقم' . ' ( ' . $request->requestId . ' )';
 92:             }
 93: 
 94:             $this->notifyByID(
 95:                 userId: $receiverId,
 96:                 title: $messagesNotify,
 97:                 body: $request->body,
 98:                 notifyDB: false,
 99:                 category: 'conversations',
100:                 extraData: [
101:                     'conversation_id' => (string) $request->conversationId,
102:                     'message_id' => (string) $created->id,
103:                     'sender_id' => (string) $userId,
104:                     'body' => (string) ($request->body ?? ''),
105:                     'image' => (string) ($fileName ?? ''),
106:                     'is_shipping_request' => $request->isSendShippingRequest ? '1' : '0',
107:                 ]
108:             );
109: 
110:             // Broadcast real-time message via Reverb WebSocket
111:             try {
112:                 broadcast(new \App\Events\NewMessage($request->conversationId, $created))->toOthers();
113:             } catch (\Throwable $e) {
114:                 Log::warning('Failed to broadcast NewMessage: ' . $e->getMessage());
115:             }
116:         }
117: 
118:         return buildApiResponseHelper(true, 'تم ارسال الرسالة بنجاح');
119:     }
120: }
```

## File: app/Http/Repositories/User/MyRequests/MyRequestUserRepository.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Repositories\User\MyRequests;
  4: 
  5: use App\Models\BrandCar;
  6: use App\Models\City;
  7: use App\Models\CustomField;
  8: use App\Models\RequestBrandScope;
  9: use App\Models\RequestCustomer;
 10: use App\Models\RequestCustomFieldValue;
 11: use App\Models\RequestImage;
 12: use App\Models\RequestResponse;
 13: use Illuminate\Support\Facades\Log;
 14: 
 15: class MyRequestUserRepository
 16: {
 17:     public function getMyRequest()
 18:     {
 19:         return RequestCustomer::leftJoinCity()
 20:             ->leftJoinCategory()
 21:             ->where('request_customers.user_id', getCurrUserIdHelper())
 22:             ->selectRaw(
 23:                 'request_customers.id as request_id,
 24:                 request_customers.status as request_status,
 25:                 categories.cat_name_ar,
 26:                 request_customers.created_at as request_date,
 27:                 cities.city_name_ar as city_customer_name_ar,
 28:                 (SELECT COUNT(id) FROM request_responses WHERE request_responses.request_id = request_customers.id) as count_response,
 29:                 (
 30:                     (SELECT COUNT(*) FROM conversations 
 31:                      JOIN message_conversations ON message_conversations.conversation_id = conversations.id
 32:                      WHERE conversations.request_id = request_customers.id 
 33:                      AND message_conversations.sender_id != request_customers.user_id
 34:                      AND (message_conversations.read = 0 OR message_conversations.read IS NULL)
 35:                     ) 
 36:                     + 
 37:                     (SELECT COUNT(*) FROM notifications
 38:                      WHERE notifiable_id = request_customers.user_id
 39:                      AND read_at IS NULL
 40:                      AND notifiable_type LIKE "%User%"
 41:                      AND (JSON_UNQUOTE(JSON_EXTRACT(data, "$.target_id")) = request_customers.id)
 42:                     )
 43:                 ) as unread_activity_count
 44:                 '
 45:             )
 46:             ->orderBy('unread_activity_count', 'desc')
 47:             ->orderBy('request_customers.id', 'desc')
 48:             ->paginate(10);
 49:     }
 50: 
 51:     public function getMyRequestById(int $requestId)
 52:     {
 53:         return RequestCustomer::leftJoinCategory()
 54:             ->leftJoinCity()
 55:             ->where('request_customers.id', $requestId)
 56:             ->where('request_customers.user_id', getCurrUserIdHelper())
 57:             ->select(
 58:                 'request_customers.id as request_id',
 59:                 'categories.cat_name_ar',
 60:                 'request_customers.created_at as request_date',
 61:                 'cities.city_name_ar as city_customer_name_ar',
 62:                 'request_customers.description',
 63:                 'request_customers.cities_ids_scope as cities',
 64:                 'request_customers.status as request_status',
 65:             )
 66:             ->first();
 67:     }
 68: 
 69:     public function getRequestCitiesNamesScope($cityIdsScope)
 70:     {
 71:         if (empty($cityIdsScope)) {
 72:             return [];
 73:         }
 74: 
 75:         $citiesCached = City::getCitiesCached();
 76:         $cityList = is_array($cityIdsScope) ? $cityIdsScope : json_decode($cityIdsScope, true);
 77: 
 78:         if (!is_array($cityList)) {
 79:             return [];
 80:         }
 81: 
 82:         $citiesNames = [];
 83:         foreach ($cityList as $city) {
 84:             $name = $citiesCached->where('id', (int) $city)->value('city_name_ar');
 85:             if ($name) {
 86:                 $citiesNames[] = $name;
 87:             }
 88:         }
 89: 
 90:         return $citiesNames;
 91:     }
 92: 
 93:     public function getRequestImages($requestId)
 94:     {
 95:         return RequestImage::where('request_id', $requestId)->get(['image_name']);
 96:     }
 97: 
 98:     public function getRequestBrandNamesScope($requestId)
 99:     {
100:         $brandIdsScope = RequestBrandScope::where('request_id', $requestId)->first(['brand_ids_scope']);
101:         if (!$brandIdsScope || empty($brandIdsScope->brand_ids_scope)) {
102:             return [];
103:         }
104: 
105:         $BrandCarsCached = BrandCar::getBrandCarsCached();
106:         $brandScopeList = is_array($brandIdsScope->brand_ids_scope) ? $brandIdsScope->brand_ids_scope : json_decode($brandIdsScope->brand_ids_scope, true);
107: 
108:         if (!is_array($brandScopeList)) {
109:             return [];
110:         }
111: 
112:         $brandsNames = [];
113:         foreach ($brandScopeList as $brand) {
114:             $name = $BrandCarsCached->where('id', (int) $brand)->value('brand_name_ar');
115:             if ($name) {
116:                 $brandsNames[] = $name;
117:             }
118:         }
119: 
120:         return $brandsNames;
121:     }
122: 
123:     public function getRequestCustomFields($requestId)
124:     {
125:         $requestCustomFields = RequestCustomFieldValue::where('request_id', $requestId)->get();
126:         $customFieldsCached = CustomField::getCustomFieldsCached();
127: 
128:         $result = [];
129:         foreach ($requestCustomFields as $item) {
130:             $temp = [];
131:             $temp['key'] = $customFieldsCached->where('id', $item->custom_field_id)->value('label_ar') ?? '';
132:             $temp['value'] = is_string($item->value) ? (json_decode($item->value, true) ?? $item->value) : $item->value;
133:             array_push($result, $temp);
134:         }
135: 
136:         return $result;
137:     }
138: 
139:     public function getResponsesMyRequest(int $requestId)
140:     {
141:         Log::info('------------getResponsesMyRequest----------');
142:         return RequestResponse::joinRequestCustomer()
143:             ->leftJoinVendor()
144:             ->leftJoinVendorToUser()
145:             ->leftJoinShippingRequest()
146:             ->where('request_responses.request_id', $requestId)
147:             ->where('request_customers.user_id', getCurrUserIdHelper())
148:             ->select(
149:                 'request_responses.id as response_id',
150:                 'request_responses.status as response_status',
151:                 'request_responses.created_at as response_date',
152:                 'request_responses.price as price_response',
153:                 'request_responses.warranty as warranty_response',
154:                 'vendors.company_name_ar',
155:                 'users.logo as vendor_logo',
156:                 'shipping_requests.id as shipping_request_id',
157:                 'shipping_requests.status as shipping_request_status',
158:                 \Illuminate\Support\Facades\DB::raw("(SELECT COUNT(message_conversations.id) FROM message_conversations INNER JOIN conversations ON conversations.id = message_conversations.conversation_id WHERE conversations.response_id = request_responses.id AND message_conversations.read = 0 AND message_conversations.sender_id != " . getCurrUserIdHelper() . ") as unread_messages_count"),
159:                 \Illuminate\Support\Facades\DB::raw("COALESCE((SELECT MAX(message_conversations.created_at) FROM message_conversations INNER JOIN conversations ON conversations.id = message_conversations.conversation_id WHERE conversations.response_id = request_responses.id), request_responses.created_at) as last_activity")
160:             )
161:             ->orderBy('unread_messages_count', 'desc')
162:             ->orderBy('last_activity', 'desc')
163:             ->paginate(20);
164:     }
165: 
166:     public function getResponseRequestById($responseId)
167:     {
168:         return RequestResponse::joinRequestCustomer()
169:             ->leftJoinVendor()
170:             ->leftJoinVendorToUser()
171:             ->where('request_responses.id', $responseId)
172:             ->where('request_customers.user_id', getCurrUserIdHelper())
173:             ->select(
174:                 'request_responses.id as response_id',
175:                 'request_responses.request_id',
176:                 'request_responses.vendor_id',
177:                 'request_responses.status as response_status',
178:                 'request_responses.created_at as response_date',
179:                 'request_responses.price as price_response',
180:                 'request_responses.note as note_response',
181:                 'request_responses.warranty as warranty_response',
182:                 'vendors.company_name_ar',
183:                 'vendors.phone_contact',
184:                 'vendors.is_hide_phone_contact',
185:                 'users.logo as vendor_logo',
186:                 'users.created_at as vendor_member_since',
187:             )
188:             ->first();
189:     }
190: }
```

## File: app/Http/Controllers/API/V1/User/Requests/RequestController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\API\V1\User\Requests;
  4: 
  5: use App\Exceptions\CustomResponseException;
  6: use App\Http\Controllers\Controller;
  7: use App\Http\Requests\User\Request\{CheckEligibleVendorsRequest, ConfirmOrderRequest, ConfirmPriceShippingRequest, ConfirmShippingRequest};
  8: use App\Http\Services\User\Requests\RequestService;
  9: use App\Models\ShippingRequest;
 10: use App\Models\Vendor;
 11: use App\Traits\NotificationsTrait;
 12: use App\Utils\ConfigUtils;
 13: use App\Utils\OTOServiceUtils;
 14: use Exception;
 15: use Illuminate\Http\Request;
 16: use Illuminate\Support\Facades\DB;
 17: use Illuminate\Support\Facades\Log;
 18: use Illuminate\Support\Facades\Http;
 19: 
 20: class RequestController extends Controller
 21: {
 22:     use NotificationsTrait;
 23: 
 24:     public function __construct(protected RequestService $requestService, protected OTOServiceUtils $otoServiceUtils) {}
 25: 
 26:     public function checkEligibleVendors(CheckEligibleVendorsRequest $request)
 27:     {
 28:         $count = $this->requestService->countFilterEligibleVendors($request);
 29: 
 30:         return ($count == 0)
 31:             ? buildApiResponseHelper(false, 'لم يتم العثور على شركات مؤهلة تلبي شروط ')
 32:             : buildApiResponseHelper(true, 'تم العثور على ( ' . $count . ' ) شركة مؤهلة تلبي شروط طلبك');
 33:     }
 34: 
 35:     public function confirmRequest(ConfirmOrderRequest $request)
 36:     {
 37:         DB::beginTransaction();
 38:         try {
 39:             $eligibleVendors = $this->requestService->confirmRequest($request);
 40: 
 41:             DB::commit();
 42:             $this->notifyRequestToEligibleVendors($eligibleVendors);
 43: 
 44:             return buildApiResponseHelper(true, 'تم إرسال الطلب بنجاح ... سيتم الرد عليك من خلال الشركات المؤهلة لاحقاً');
 45:         } catch (Exception $e) {
 46:             DB::rollBack();
 47:             report($e);
 48:             throw new CustomResponseException("حدث خطاء أثنا تأكيد الطلب ... الرجاء المحاولة مرة أخرى");
 49:         }
 50:     }
 51: 
 52:     public function ConfirmShippingRequest(ConfirmShippingRequest $request)
 53:     {
 54:         set_time_limit(60);
 55:         try {
 56:             $shippingRequest = ShippingRequest::where('request_id', $request->requestId)->where('response_id', $request->responseId)->latest()->first();
 57: 
 58:             if (!$shippingRequest) {
 59:                 return buildApiResponseHelper(false, 'لا يوجد شحنة لهذا الطلب');
 60:             }
 61: 
 62:             $originCity = OTOServiceUtils::sanitizeCity($shippingRequest->city_origin_vendor);
 63:             $destinationCity = OTOServiceUtils::sanitizeCity($request->cityOriginDimensions);
 64: 
 65:             $w = (float) ($shippingRequest->width ?: 10);
 66:             $l = (float) ($shippingRequest->length ?: 10);
 67:             $h = (float) ($shippingRequest->height ?: 10);
 68:             $wt = (float) ($shippingRequest->weight ?: 1);
 69: 
 70:             $dataBody = [
 71:                 'originCity' => $originCity,
 72:                 'destinationCity' => $destinationCity,
 73:                 'boxes' => [
 74:                     [
 75:                         'boxName' => 'Box1',
 76:                         'width' => $w,
 77:                         'length' => $l,
 78:                         'height' => $h,
 79:                         'weight' => $wt,
 80:                     ]
 81:                 ],
 82:                 'width' => $w,
 83:                 'length' => $l,
 84:                 'height' => $h,
 85:                 'weight' => $wt,
 86:                 'isCod' => true
 87:             ];
 88: 
 89:             $token = $this->otoServiceUtils->getAccessTokenOTO();
 90:             if (empty($token)) {
 91:                 Log::error('OTO Access Token is empty in ConfirmShippingRequest');
 92:                 return buildApiResponseHelper(false, 'تعذر الاتصال بشركة الشحن في الوقت الحالي ... الرجاء المحاولة لاحقاً');
 93:             }
 94: 
 95:             $otoUrl = $this->otoServiceUtils->getBaseUrl();
 96:             $response = Http::timeout(15)->withHeaders([
 97:                 'Authorization' => 'Bearer ' . $token,
 98:                 'Accept' => 'application/json',
 99:             ])
100:                 ->post($otoUrl . '/checkOTODeliveryFee', $dataBody);
101: 
102:             if ($response->status() === 401) {
103:                 cache()->forget('oto_access_token');
104:                 $token = $this->otoServiceUtils->getAccessTokenOTO();
105:                 $response = Http::timeout(15)->withHeaders([
106:                     'Authorization' => 'Bearer ' . $token,
107:                     'Accept' => 'application/json',
108:                 ])->post($otoUrl . '/checkOTODeliveryFee', $dataBody);
109:             }
110: 
111:             if ($response->ok()) {
112:                 $result = $response->json();
113:                 if (isset($result['success']) && $result['success'] == false) {
114:                     Log::warning('OTO Delivery Fee Warning: ', $result);
115:                     return buildApiResponseHelper(false, 'لا توجد شركات شحن متاحة لهذا المسار حالياً');
116:                 }
117: 
118:                 $companies = $result['deliveryCompany'] ?? [];
119:                 if (empty($companies)) {
120:                     return buildApiResponseHelper(false, 'لا تتوفر شركات شحن متاحة حالياً');
121:                 }
122: 
123:                 $cheapest = collect($companies)->sortBy('price')->first();
124:                 $cheapestPrice = $cheapest['price'] ?? 0;
125:                 $shippingRequest->update([
126:                     'id_number_user' => $request->idNumberUser,
127:                     'city_origin_dimensions' => $destinationCity,
128:                     'address_origin_dimensions' => $request->addressOriginDimensions,
129:                     'phone_origin_dimensions' => $request->phoneOriginDimensions,
130:                     'fee_cheapest_shipping' => $cheapestPrice,
131:                     'amount_rate_app' => ConfigUtils::getAmountRateAppForCharge(),
132:                 ]);
133: 
134:                 return buildApiResponseHelper(true, 'السعر التقريبي للشحنة' . ' ' . ($cheapestPrice + ConfigUtils::getAmountRateAppForCharge()) . ' ريال' . ' - إضغط موافق لتاكيد الشحنة',  ['shippingRequestId' => $shippingRequest->id]);
135:             }
136: 
137:             Log::error('OTO Delivery Fee Error: ' . $response->status() . ' - ' . $response->body(), ['payload' => $dataBody]);
138:             return buildApiResponseHelper(false, 'تعذر جلب أسعار الشحن من شركة الشحن ... الرجاء المحاولة لاحقاً');
139:         } catch (Exception $e) {
140:             Log::error('ConfirmShippingRequest Exception: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
141:             report($e);
142:             return buildApiResponseHelper(false, 'حدث خطأ في تأكيد الشحنة ... الرجاء المحاولة مرة أخرى');
143:         }
144:     }
145: 
146:     public function confirmPriceShippingRequest(ConfirmPriceShippingRequest $request)
147:     {
148:         $updated = ShippingRequest::where('id', $request->id)->update([
149:             'is_user_confirmed' => true
150:         ]);
151: 
152:         if (!$updated)
153:             return buildApiResponseHelper(false, 'حدث خطاء في تاكيد الشحنة ... الرجاء المحاولة مرة اخرى');
154: 
155:         $this->notifyToAdmin('طلب شحنة جديد', 'هناك طلب شحنة جديد ... طلب شحنة جديد');
156: 
157:         // Dispatch Email Notification to Admin Emails
158:         \App\Jobs\SendNewShippingRequestNotificationJob::dispatch($request->id);
159: 
160:         return buildApiResponseHelper(true, 'تم تاكيد الشحنة بنجاح');
161:     }
162: }
```

## File: routes/api.php
```php
 1: <?php
 2: 
 3: use App\Http\Controllers\API\V1\Shared\CacheStaticDataVersionController;
 4: use Illuminate\Http\Request;
 5: use Illuminate\Support\Facades\Broadcast;
 6: use Illuminate\Support\Facades\Route;
 7: 
 8: Broadcast::routes(['middleware' => ['auth:sanctum']]);
 9: require base_path('routes/channels.php');
10: 
11: Route::prefix('v1/user')->group(base_path('routes/api_user_v1.php'));
12: Route::prefix('v1/vendor')->group(base_path('routes/api_vendor_v1.php'));
13: 
14: Route::get('/user', function (Request $request) {
15:     return $request->user();
16: })->middleware('auth:sanctum');
17: 
18: Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
19:     Route::prefix('/chat/messages')->controller(App\Http\Controllers\API\V1\Shared\Conversations\MessageConversationController::class)->group(function () {
20:         Route::get('/{conversationId}', 'index');
21:         Route::post('/send', 'store');
22:     });
23:     Route::prefix('/chat/conversations')->controller(App\Http\Controllers\API\V1\Shared\Conversations\ConversationController::class)->group(function () {
24:         Route::post('/create-conversation', 'store');
25:         Route::get('/user-conversations', 'getUserConversations');
26:         Route::get('/vendor-conversations', 'getVendorConversations');
27:     });
28: 
29:     Route::prefix('/notifications')->group(function () {
30:         Route::get('/unread-counts', [App\Http\Controllers\API\NotificationBadgeController::class, 'unreadCounts']);
31:         Route::post('/mark-category-read', [App\Http\Controllers\API\NotificationBadgeController::class, 'markCategoryRead']);
32:         Route::post('/mark-entity-read', [App\Http\Controllers\API\NotificationBadgeController::class, 'markEntityRead']);
33:         Route::get('/', [App\Http\Controllers\API\V1\Shared\NotificationController::class, 'index']);
34:     });
35: });
36: 
37: Route::get('/uploads/{filename}', [App\Http\Controllers\FileController::class, 'getImage']);
38: 
39: Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
40:     Route::get('/uploads-private/{filename}', 'getSensitiveImage');
41: });
42: 
43: Route::prefix('v1/auth')->controller(App\Http\Controllers\API\V1\Shared\Auth\AuthController::class)->group(function () {
44:     Route::post('/register', 'register');
45:     Route::post('/login-with-otp', 'loginWithOtp');
46:     Route::post('/logout', 'logout')->middleware('auth:sanctum');
47: });
48: 
49: Route::middleware('auth:sanctum')->controller(App\Http\Controllers\FileController::class)->group(function () {
50:     Route::get('/{filename}', 'getSensitiveImage');
51: });
52: 
53: Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
54:     Route::get('/cities', [App\Http\Controllers\API\V1\Shared\CityController::class, 'getCities']); 
55: });
56: 
57: Route::prefix('v1')->group(function () {
58:     Route::post('/cache/check-updates', [CacheStaticDataVersionController::class, 'checkUpdates']);
59:     
60:     Route::get('/test-db', function () {
61:         $vendor = \App\Models\RequestResponse::joinRequestCustomer()
62:             ->leftJoinVendor()
63:             ->leftJoinVendorToUser()
64:             ->select('request_responses.id as response_id', 'users.logo as vendor_logo', 'vendors.id as v_id', 'vendors.user_id as vu_id')
65:             ->first();
66:         return response()->json($vendor);
67:     });
68:     
69:     Route::get('/update-cat', function () {
70:         \App\Models\Category::where('id', 2)->update([
71:             'cat_name_ar' => 'قطع غيار تشليح',
72:             'cat_name_en' => 'Scrap Spare Parts'
73:         ]);
74:         
75:         \App\Models\CacheStaticDataVersion::where('entity_name', 'categories')->update(['last_updated_at' => now()]);
76:         \App\Models\CacheStaticDataVersion::where('entity_name', 'category_has_brand_field')->update(['last_updated_at' => now()]);
77:         
78:         \Illuminate\Support\Facades\Artisan::call('cache:clear');
79:         
80:         return response()->json(['success' => true]);
81:     });
82: });
83: Route::get('/test-railway', function () { return 'Railway is deploying!'; });
```

## File: routes/web.php
```php
  1: <?php
  2: 
  3: use App\Http\Controllers\ProfileController;
  4: use Illuminate\Support\Facades\Route;
  5: 
  6: Route::get('/', function () {
  7:     return view('welcome');
  8: });
  9: 
 10: Route::get('/dashboard', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])
 11:     ->middleware(['auth:admin', 'role:Super-Admin|admin', 'verified'])->name('dashboard');
 12: 
 13: Route::get('/uploads/{filename}', [App\Http\Controllers\FileController::class, 'getImage']);
 14: 
 15: Route::prefix('uploads-private')->middleware('auth:admin')->controller(App\Http\Controllers\FileController::class)->group(function () {
 16:     Route::get('/{filename}', 'getSensitiveImage')->name('uploads-private');
 17: });
 18: 
 19: Route::prefix('/dashboard')->middleware(['auth:admin', 'role:Super-Admin|admin', 'verified'])->group(function () {
 20:     Route::prefix('/categories')->controller(App\Http\Controllers\Dashboard\CategoryController::class)->group(function () {
 21:         Route::get('/', 'index')->name('dashboard.categories.index');
 22:         Route::get('/create', 'create')->name('dashboard.categories.create');
 23:         Route::post('/store', 'store')->name('dashboard.categories.store');
 24:         Route::get('/edit/{id}', 'edit')->name('dashboard.categories.edit');
 25:         Route::post('/update/{id}', 'update')->name('dashboard.categories.update');
 26:         Route::delete('/delete/{id}', 'delete')->name('dashboard.categories.delete');
 27:         Route::post('/update-status', 'updateStatusActiveCategory')->name('dashboard.categories.update-status');
 28:     });
 29:     Route::prefix('/custom-fields-category')->controller(App\Http\Controllers\Dashboard\CustomFieldController::class)->group(function () {
 30:         Route::get('/{categoryId}', 'index')->name('dashboard.custom-fields.index');
 31:         Route::post('/save-custom-field', 'saveCustomField')->name('dashboard.custom-fields.save-custom-field');
 32:         Route::delete('/delete/{id}', 'delete')->name('dashboard.custom-fields.delete');
 33:     });
 34:     Route::prefix('/customers')->controller(App\Http\Controllers\Dashboard\CustomerController::class)->group(function () {
 35:         Route::get('/', 'index')->name('dashboard.customers.index');
 36:         Route::post('/update-status', 'updateStatus')->name('dashboard.customers.update-status');
 37:         Route::delete('/delete/{id}', 'delete')->name('dashboard.customers.delete');
 38:     });
 39:     Route::prefix('/vendors-management/vendors')->controller(App\Http\Controllers\Dashboard\VendorsManagement\VendorManagementController::class)->group(function () {
 40:         Route::get('/', 'index')->name('dashboard.vendors-management.vendors.index');
 41:         Route::get('/show/{userId}', 'show')->name('dashboard.vendors-management.vendors.show');
 42:         Route::delete('/delete/{userId}', 'deleteVendor');
 43:         Route::post('/update-status', 'updateStatus')->name('dashboard.vendors-management.vendors.update-status');
 44:     });
 45:     Route::prefix('/vendors-management/join-requests')->controller(App\Http\Controllers\Dashboard\VendorsManagement\JoinRequestVendorController::class)->group(function () {
 46:         Route::get('/', 'index')->name('dashboard.vendors-management.join-requests.index');
 47:         Route::get('/show/{userId}', 'show')->name('dashboard.vendors-management.join-requests.show');
 48:         Route::post('/active-status', 'activeStatusVendor')->name('dashboard.vendors-management.join-requests.active-status');
 49:         Route::post('/rejected-status/{userId}', 'rejectedStatusVendor')->name('dashboard.vendors-management.join-requests.rejected-status');
 50:         Route::delete('/delete/{userId}', 'deleteVendor');
 51:     });
 52:     Route::prefix('/requests-management')->controller(App\Http\Controllers\Dashboard\RequestsManagement\RequestManagementController::class)->group(function () {
 53:         Route::get('/', 'index')->name('dashboard.requests-management.index');
 54:         Route::get('/show/{id}', 'show')->name('dashboard.requests-management.show');
 55:         Route::post('/update-status', 'updateStatus')->name('dashboard.requests-management.update-status');
 56:         Route::delete('/delete/{id}', 'delete');
 57:     });
 58:     Route::prefix('/response-management')->controller(App\Http\Controllers\Dashboard\RequestResponseManagement\RequestResponseManagementController::class)->group(function () {
 59:         Route::get('/responses/{requestId}', 'index')->name('dashboard.response-management.responses');
 60:     });
 61:     Route::prefix('/shipping-request-management')->controller(App\Http\Controllers\Dashboard\ShippingRequestManagement\ShippingRequestManagementController::class)->group(function () {
 62:         Route::get('/', 'index')->name('dashboard.shipping-request-management.index');
 63:         Route::get('/show/{id}', 'show')->name('dashboard.shipping-request-management.show');
 64:         Route::post('/update-status', 'updateStatus')->name('dashboard.shipping-request-management.update-status');
 65:         Route::post('/create-order-shipping', 'createOrderShippingRequest')->name('dashboard.shipping-request-management.create-order-shipping');
 66:         Route::delete('/delete/{id}', 'delete')->name('dashboard.shipping-request-management.delete');
 67:     });
 68:     Route::prefix('/complaint-management')->controller(App\Http\Controllers\Dashboard\ComplaintManagement\ComplaintManagemntController::class)->group(function () {
 69:         Route::get('/complaints', 'index')->name('dashboard.complaint-management.complaints');
 70:     });
 71: 
 72:     Route::prefix('logs')->controller(App\Http\Controllers\Dashboard\AdminLogController::class)->group(function () {
 73:         Route::get('/', 'index')->name('dashboard.logs.index');
 74:         Route::post('/clear-logs', 'clearLogs')->name('dashboard.logs.clear-logs');
 75:         Route::get('/download-logs', 'downloadLogs')->name('dashboard.logs.download-logs');
 76:     });
 77: 
 78:     Route::prefix('settings/notification-emails')->controller(App\Http\Controllers\Dashboard\Settings\NotificationEmailController::class)->group(function () {
 79:         Route::get('/', 'index')->name('dashboard.settings.notification-emails.index');
 80:         Route::post('/', 'store')->name('dashboard.settings.notification-emails.store');
 81:         Route::delete('/{id}', 'destroy')->name('dashboard.settings.notification-emails.destroy');
 82:     });
 83: });
 84: 
 85: Route::middleware('auth')->group(function () {
 86:     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
 87:     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
 88:     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 89: });
 90: 
 91: require __DIR__ . '/auth.php';
 92: 
 93: Route::get('/run-migration-now', function() {
 94:     \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
 95:     return 'Migrated!';
 96: });
 97: 
 98: 
 99: Route::get('/fix-cache-now', function() {
100:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
101:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
102:     return 'Cache fixed!';
103: });
104: 
105: 
106: Route::get('/fix-icon-v2', function() {
107:     \Illuminate\Support\Facades\DB::table('categories')
108:         ->where('cat_name_ar', 'LIKE', '%?????%')
109:         ->orWhere('cat_name_ar', 'LIKE', '%?????%')
110:         ->update(['cat_icon_path' => 'new-spare-parts-icon-v2.png']);
111:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
112:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
113:     return 'Icon V2 fixed!';
114: });
115: 
116: 
117: Route::get('/fix-icon-v3', function() {
118:     \Illuminate\Support\Facades\DB::table('categories')
119:         ->where('id', 3)
120:         ->update(['cat_icon_path' => 'new-spare-parts-icon-v2.png']);
121:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
122:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
123:     return 'Icon V3 fixed!';
124: });
125: 
126: 
127: Route::get('/debug-notifications', function() {
128:     return \Illuminate\Support\Facades\DB::table('notifications')->orderBy('created_at', 'desc')->limit(5)->get();
129: });
130: 
131: 
132: Route::get('/fix-icon-v4', function() {
133:     \Illuminate\Support\Facades\DB::table('categories')
134:         ->where('id', 1)
135:         ->update(['icon' => 'new-spare-parts-icon-v4.png']);
136:     \App\Models\Category::forgetCategoriesCached();
137:     return 'Done v4';
138: });
139: 
140: 
141: Route::get('/fix-icon-v5', function() {
142:     \Illuminate\Support\Facades\DB::table('categories')
143:         ->where('id', 1)
144:         ->update(['cat_icon_path' => 'new-spare-parts-icon-v4.png']);
145:     \Illuminate\Support\Facades\Artisan::call('cache:clear');
146:     return 'Done v5';
147: });
148: 
149: 
150: Route::get('/fix-icon-v4', function() {
151:     \Illuminate\Support\Facades\DB::table('categories')
152:         ->where('id', 3)
153:         ->update(['cat_icon_path' => 'new-spare-parts-icon-v4.png']);
154:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
155:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
156:     return 'Icon V4 fixed!';
157: });
158: 
159: 
160: Route::get('/fix-icons-v6', function() {
161:     \Illuminate\Support\Facades\DB::table('categories')
162:         ->where('id', 1)
163:         ->update(['cat_icon_path' => 'new-cars-icon.png']);
164:     \Illuminate\Support\Facades\DB::table('categories')
165:         ->where('id', 3)
166:         ->update(['cat_icon_path' => 'spare-parts-icon.png']);
167:         
168:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
169:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
170:     \Illuminate\Support\Facades\Artisan::call('cache:clear');
171:     return 'Icons restored!';
172: });
173: 
174: 
175: Route::get('/fix-icon-v4', function() {
176:     \Illuminate\Support\Facades\DB::table('categories')
177:         ->where('id', 3)
178:         ->update(['cat_icon_path' => 'new-spare-parts-icon-v4.png']);
179:     \App\Models\CacheStaticDataVersion::updateTimestamp(\App\Enums\EntityNameCacheStaticDataEnum::Categories->value);
180:     \App\Utils\CacheUtils::forget(\App\Utils\CacheUtils::categoriesCacheStaticDataAppKey());
181:     return 'Icon V4 fixed!';
182: });
183: 
184: 
185: Route::get('/logs', function() {
186:     return file_exists(storage_path('logs/laravel.log')) ? file_get_contents(storage_path('logs/laravel.log')) : 'no logs';
187: });
```

## File: app/Http/Controllers/API/V1/Shared/Conversations/ConversationController.php
```php
  1: <?php
  2: 
  3: namespace App\Http\Controllers\API\V1\Shared\Conversations;
  4: 
  5: use App\Http\Controllers\Controller;
  6: use App\Models\Conversation;
  7: use App\Models\MessageConversation;
  8: use App\Models\RequestCustomer;
  9: use App\Models\Vendor;
 10: use Illuminate\Http\Request;
 11: use Illuminate\Support\Facades\Validator;
 12: use Illuminate\Support\Facades\DB;
 13: 
 14: class ConversationController extends Controller
 15: {
 16:     public function index()
 17:     {
 18:     }
 19: 
 20:     private function fixVendorConversationIds()
 21:     {
 22:         try {
 23:             Vendor::whereNotNull('user_id')->where('user_id', '>', 0)->get()->each(function ($v) {
 24:                 Conversation::where('vendor_id', $v->id)->update(['vendor_id' => $v->user_id]);
 25:             });
 26:         } catch (\Throwable $e) {
 27:         }
 28:     }
 29: 
 30:     public function getUserConversations(Request $request)
 31:     {
 32:         $this->fixVendorConversationIds();
 33:         $userId = getCurrUserIdHelper();
 34: 
 35:         $conversations = Conversation::leftJoin('vendors', function ($join) {
 36:             $join->on('vendors.user_id', '=', 'conversations.vendor_id')
 37:                 ->orOn('vendors.id', '=', 'conversations.vendor_id');
 38:         })
 39:             ->leftJoin('users as vendor_user', function ($join) {
 40:                 $join->on('vendor_user.id', '=', 'vendors.user_id')
 41:                     ->orOn('vendor_user.id', '=', 'conversations.vendor_id');
 42:             })
 43:             ->leftJoin('message_conversations', 'message_conversations.conversation_id', '=', 'conversations.id')
 44:             ->where('conversations.user_id', $userId)
 45:             ->when($request->has('request_id'), function ($query) use ($request) {
 46:                 $query->where('conversations.request_id', $request->request_id);
 47:             })
 48:             ->select([
 49:                 DB::raw('MAX(conversations.id) as id'),
 50:                 'conversations.request_id',
 51:                 'conversations.response_id',
 52:                 'conversations.vendor_id',
 53:                 DB::raw('COALESCE(NULLIF(NULLIF(vendors.company_name_ar, "غير محدد"), ""), vendor_user.name, "غير محدد") as receiver_name'),
 54:                 DB::raw('MAX(vendor_user.logo) as receiver_logo'),
 55:                 DB::raw('MAX(message_conversations.created_at) as last_activity'),
 56:             ])
 57:             ->groupBy('conversations.request_id', 'conversations.response_id', 'conversations.vendor_id', 'vendors.company_name_ar', 'vendor_user.name')
 58:             ->orderByRaw('COALESCE(MAX(message_conversations.created_at), MAX(conversations.created_at)) DESC')
 59:             ->paginate(10);
 60: 
 61:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
 62:     }
 63: 
 64:     public function getVendorConversations(Request $request)
 65:     {
 66:         $this->fixVendorConversationIds();
 67:         $userId = getCurrUserIdHelper();
 68:         $vendorTableId = Vendor::where('user_id', $userId)->value('id');
 69: 
 70:         $conversations = Conversation::leftJoin('users as customer_user', 'conversations.user_id', '=', 'customer_user.id')
 71:             ->where(function ($query) use ($userId, $vendorTableId) {
 72:                 $query->where('conversations.vendor_id', $userId);
 73:                 if ($vendorTableId) {
 74:                     $query->orWhere('conversations.vendor_id', $vendorTableId);
 75:                 }
 76:             })
 77:             ->select([
 78:                 DB::raw('MAX(conversations.id) as id'),
 79:                 'conversations.request_id',
 80:                 'conversations.response_id',
 81:                 'conversations.vendor_id',
 82:                 DB::raw('COALESCE(NULLIF(NULLIF(customer_user.name, "التاجر"), ""), "العميل") as receiver_name'),
 83:                 DB::raw('MAX(customer_user.logo) as receiver_logo'),
 84:             ])
 85:             ->groupBy('conversations.request_id', 'conversations.response_id', 'conversations.vendor_id', 'customer_user.name')
 86:             ->orderBy('id', 'desc')
 87:             ->paginate(10);
 88: 
 89:         return buildApiResponseHelper(true, 'تم التحميل بنجاح', resultApiPaginationHelper($conversations));
 90:     }
 91: 
 92:     public function store(Request $request)
 93:     {
 94:         $validator = Validator::make($request->all(), [
 95:             'requestId' => 'required|integer',
 96:             'responseId' => 'nullable|integer',
 97:             'vendorId' => 'required|integer',
 98:         ]);
 99: 
100:         if ($validator->fails()) {
101:             return response()->json($validator->errors(), 422);
102:         }
103: 
104:         $this->fixVendorConversationIds();
105: 
106:         $requestCustomer = RequestCustomer::find($request->requestId);
107:         $rawVendorId = $request->vendorId;
108:         $vendorUserId = Vendor::where('id', $rawVendorId)->value('user_id') ?: $rawVendorId;
109:         $vendorTableId = Vendor::where('user_id', $vendorUserId)->value('id') ?: $rawVendorId;
110: 
111:         $currentUserId = getCurrUserIdHelper();
112: 
113:         if ($requestCustomer && $requestCustomer->user_id) {
114:             $customerUserId = $requestCustomer->user_id;
115:         } else {
116:             $customerUserId = ($currentUserId != $vendorUserId && $currentUserId != $vendorTableId) ? $currentUserId : 0;
117:         }
118: 
119:         // البحث عن أي محادثة سابقة مرتبطة بنفس الطلب وتحديثها
120:         $conversation = Conversation::where('request_id', $request->requestId)
121:             ->where(function ($q) use ($vendorUserId, $vendorTableId, $rawVendorId) {
122:                 $q->where('vendor_id', $vendorUserId)
123:                     ->orWhere('vendor_id', $vendorTableId)
124:                     ->orWhere('vendor_id', $rawVendorId);
125:             })
126:             ->latest('id')
127:             ->first();
128: 
129:         if (!$conversation) {
130:             $conversation = Conversation::create([
131:                 'vendor_id' => $vendorUserId,
132:                 'user_id' => $customerUserId,
133:                 'request_id' => $request->requestId,
134:                 'response_id' => $request->responseId ?? 0,
135:             ]);
136:         } else {
137:             $updateData = ['vendor_id' => $vendorUserId];
138:             if ($customerUserId > 0) {
139:                 $updateData['user_id'] = $customerUserId;
140:             }
141:             $conversation->update($updateData);
142:         }
143: 
144:         // تنظيف المحادثات المكررة للطلب
145:         Conversation::where('request_id', $request->requestId)
146:             ->where('id', '!=', $conversation->id)
147:             ->delete();
148: 
149:         return $conversation ? buildApiResponseHelper(true, 'تمت العملية بنجاح', ['conversationId' => $conversation->id]) : buildApiResponseHelper(false, 'حدث خطأ');
150:     }
151: }
```
