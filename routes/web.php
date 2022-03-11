<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FrontendBlogController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FrontendReviewController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Auth\loginController;

// Clear application cache:
 Route::get('/clear-cache', function() {
     $exitCode = Artisan::call('cache:clear');
     return 'Application cache has been cleared';
 });

 //Clear config cache:
 Route::get('/config-cache', function() {
     $exitCode = Artisan::call('config:cache');
     return 'Config cache has been cleared';
 }); 

 // Clear view cache:
 Route::get('/view-clear', function() {
     $exitCode = Artisan::call('view:clear');
     return 'View cache has been cleared';
 });


Route::get('/', [FrontendController::class, 'home']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/why-choose-us', [FrontendController::class, 'why_choose_us']);
Route::get('/dedicated-team', [FrontendController::class, 'dedicated_team']);
Route::get('/portfolio', [FrontendController::class, 'portfolio']);


Route::get('/web-services', [FrontendController::class, 'web_services']);
Route::get('/web-services/website-development', [FrontendController::class, 'website_development']);
Route::get('/web-services/convert-website', [FrontendController::class, 'convert_website']);
Route::get('/web-services/theme-development-customization', [FrontendController::class, 'theme_development_customization']);
Route::get('/web-services/fix-website-error', [FrontendController::class, 'fix_website_error']);
Route::get('/web-services/speed-optimization', [FrontendController::class, 'speed_optimization']);

Route::get('/web-services/website-development/{id}', [FrontendController::class, 'get_website_development_details']);
Route::get('/web-services/convert-website/{id}', [FrontendController::class, 'get_convert_website_details']);



Route::get('/virtual-assistant', [FrontendController::class, 'virtual_assistant']);
Route::get('/virtual-assistant/data-entry-online-offline', [FrontendController::class, 'data_entry_online_offline']);
Route::get('/virtual-assistant/website-dev-and-maintenance', [FrontendController::class, 'website_dev_and_maintenance']);
Route::get('/virtual-assistant/digital-marketing', [FrontendController::class, 'digital_marketing']);
Route::get('/virtual-assistant/seo', [FrontendController::class, 'seo']);


Route::get('/software', [FrontendController::class, 'software']);
Route::get('/software/sales-inventory-system', [FrontendController::class, 'sales_inventory_system']);
Route::get('/software/accounting-erp-solution', [FrontendController::class, 'accounting_erp_solution']);
Route::get('/software/education-management-system', [FrontendController::class, 'education_management_system']);
Route::get('/software/health-management-system', [FrontendController::class, 'health_management_system']);
Route::get('/software/customize-software', [FrontendController::class, 'customize_software']);


Route::get('/mobile-app', [FrontendController::class, 'mobile_app']);
Route::get('/mobile-app/android-app-development', [FrontendController::class, 'android_app_development']);
Route::get('/mobile-app/ios-app-development', [FrontendController::class, 'ios_app_development']);
Route::get('/mobile-app/react-native', [FrontendController::class, 'react_native_app_development']);


Route::get('/graphic-deisgn', [FrontendController::class, 'graphic_deisgn']);
Route::get('/graphic-deisgn/motion-graphic', [FrontendController::class, 'motion_graphic']);
Route::get('/graphic-deisgn/ui-ux-design', [FrontendController::class, 'ui_ux_design']);
Route::get('/graphic-deisgn/branding-design', [FrontendController::class, 'branding_design']);
Route::get('/graphic-deisgn/print-design', [FrontendController::class, 'print_design']);
Route::get('/graphic-deisgn/publishing-design', [FrontendController::class, 'publishing_design']);



Route::get('/menu', [FrontendController::class, 'menu']);

Route::get('/contact', [FrontendController::class, 'contact']);
Route::get('/contact/details/{id}', [FrontendController::class, 'contact_details']);

/*=== Blog Route ==*/
Route::get('/blog', [FrontendBlogController::class, 'index']);
Route::get('/blog/{id}', [FrontendBlogController::class, 'single']);

/*=== Reviews Route ==*/
Route::get('/reviews', [FrontendReviewController::class, 'index']);
Route::post('/send-review/', [FrontendReviewController::class, 'send_review']);


/*=== Quote Route ==*/
Route::get('/quote', [App\Http\Controllers\QuoteController::class, 'quote_form']);


/*=== SendMail Route ==*/
Route::post('/send-info/', [EmailController::class, 'send_info']);
Route::post('/send-support/', [EmailController::class, 'send_support']);
Route::post('/send-contact/', [EmailController::class, 'send_contact']);
Route::post('/send-basic-project-details/', [EmailController::class, 'send_basic_project']);
Route::post('/send-adv-project-details/', [EmailController::class, 'send_adv_project']);



/*== Admin Section Route ==*/

Auth::routes(['register' => true, 'reset' => true]);
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['middleware' => ['auth']], function() {
//    /**
//    * Logout Route
//    */
//    Route::get('/logout', 'LoginController@perform')->name('logout.perform');
// });


Route::post('/dashboard/logout', [LoginController::class, "onLogout"]);






//post route
Route::get('/dashboard/post/all', [PostController::class, 'index']);
Route::get('/dashboard/post/create', [PostController::class, 'create']);
Route::post('/dashboard/post/save', [PostController::class, 'save']);
Route::get('/dashboard/post/edit/{id}', [PostController::class, 'edit']);
Route::post('/dashboard/post/update/{id}', [PostController::class, 'update']);
Route::get('/dashboard/post/remove/{id}', [PostController::class, 'remove']);


Route::get('/dashboard/pages/all', [PageController::class, 'index']);

//reviews route
Route::get('/dashboard/reviews/all', [ReviewController::class, 'index']);
Route::get('/dashboard/reviews/edit/{id}', [ReviewController::class, 'edit']);
Route::post('/dashboard/reviews/update/{id}', [ReviewController::class, 'update']);
Route::get('/dashboard/reviews/remove/{id}', [ReviewController::class, 'remove']);


//portfolio route
Route::get('/dashboard/portfolio/all', [PortfolioController::class, 'index']);
Route::get('/dashboard/portfolio/create/', [PortfolioController::class, 'create']);
Route::post('/dashboard/portfolio/save/', [PortfolioController::class, 'save']);
Route::get('/dashboard/portfolio/edit/{id}', [PortfolioController::class, 'edit']);
Route::post('/dashboard/portfolio/update/{id}', [PortfolioController::class, 'update']);
Route::get('/dashboard/portfolio/remove/{id}', [PortfolioController::class, 'remove']);




