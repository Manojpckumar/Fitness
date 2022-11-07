<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Categorys;
use App\Http\Controllers\Comments;
use App\Http\Controllers\Contact;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Order;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Fitness;
use App\Http\Controllers\User;
use App\Http\Controllers\Shops;
use App\Http\Controllers\Blogs;
use App\Http\Controllers\OurTeams;
use App\Http\Controllers\PaymentPaypal;
/*
|--------------------------------------------------------------------------
| Laravel Dashboard
|--------------------------------------------------------------------------
|
*/
use App\Http\Controllers\Dashboard\AdSenses;
use App\Http\Controllers\Dashboard\Books;
use App\Http\Controllers\Dashboard\Categories;
use App\Http\Controllers\Dashboard\Clients;
use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Controllers\Dashboard\Galleries;
use App\Http\Controllers\Dashboard\Instagrams;
use App\Http\Controllers\Dashboard\Links;
use App\Http\Controllers\Dashboard\Media;
use App\Http\Controllers\Dashboard\Menus;
use App\Http\Controllers\Dashboard\Messages;
use App\Http\Controllers\Dashboard\Posts;
use App\Http\Controllers\Dashboard\Roles;
use App\Http\Controllers\Dashboard\Seo;
use App\Http\Controllers\Dashboard\Settings;
use App\Http\Controllers\Dashboard\Users;
/*
|--------------------------------------------------------------------------
| ImageUploadController
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['auth','role:Super-Admin']], function () {
Route::get('Dashboard/image/upload', [ImageUploadController::class, 'fileCreate']);
Route::post('Dashboard/image/upload/store', [ImageUploadController::class, 'fileStore']);
Route::post('Dashboard/Audio/upload/store', [ImageUploadController::class, 'AudioStore']);
Route::post('Dashboard/image/delete', [ImageUploadController::class, 'fileDestroy']);
});
/*
|--------------------------------------------------------------------------
| Payment Routes
|--------------------------------------------------------------------------
|
*/
// route for processing payment
Route::get('/paypal', [PaymentPaypal::class, 'payWithpaypal']);
// route for check status of the payment
Route::get('/status', [PaymentPaypal::class, 'getPaymentStatus']);
/*
|--------------------------------------------------------------------------
| LaravelLocalization
|--------------------------------------------------------------------------
|
*/
Route::group([
'prefix' => LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function () {  
Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('search', [SearchController::class, 'search']);
Route::get('About', [HomeController::class, 'About']);
Route::get('Contact_us', [HomeController::class, 'Contacts']);
/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['middleware' => ['isVerified']], function () {
Route::get('email-verification/error', [Auth\RegisterController::class, 'getVerificationError']);
Route::get('email-verification/check/{token}', [Auth\RegisterController::class, 'getVerification']);
});
/*
|--------------------------------------------------------------------------
| missing RETURN 404 PAGE Route   
|--------------------------------------------------------------------------
|
*/
Route::get('missing', function () {
return view('404');
});
/*
|--------------------------------------------------------------------------
| resource
|--------------------------------------------------------------------------
|
*/

Route::resource('Fitness', Fitness::class);
Route::resource('Cat', Categorys::class);
Route::resource('Shops', Shops::class);
Route::resource('Order', Order::class);
Route::resource('Users', Users::class);
Route::resource('Contact', Contact::class);
Route::resource('Comments', Comments::class);
Route::resource('OurTeams', OurTeams::class);
Route::resource('Blogs', Blogs::class);

/**
* Show the middleware dashboard Super-Admin.
*
* @return \Illuminate\Contracts\Support\Renderable
*/
Route::group(['middleware' => ['auth','role:Super-Admin']], function () {
/*
|--------------------------------------------------------------------------
| Web Routes Dashboard
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('admin',Dashboard::class);
Route::resource('Dashboard/Roles', Roles::class);
Route::resource('Dashboard/Users', Users::class);
Route::resource('Dashboard/AdSense', AdSenses::class);
Route::resource('Dashboard/Categories', Categories::class);
Route::resource('Dashboard/Clients', Clients::class);
Route::resource('Dashboard/Galleries', Galleries::class);
Route::resource('Dashboard/Instagrams', Instagrams::class);
Route::resource('Dashboard/Links', Links::class);
Route::resource('Dashboard/Menus', Menus::class);
Route::resource('Dashboard/Media', Media::class);
Route::resource('Dashboard/Messages', Messages::class);
Route::resource('Dashboard/Books', Books::class);
Route::resource('Dashboard/Posts', Posts::class);
Route::resource('Dashboard/Seo', Seo::class);
Route::resource('Dashboard/Settings', Settings::class);
});
});