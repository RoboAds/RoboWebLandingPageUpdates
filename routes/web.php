<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');


Route::get('/product', [PageController::class, 'products'])->name('products');
Route::get('/getDownload', [PageController::class, 'getDownload'])->name('getDownload');
Route::get('/getDownloadAr', [PageController::class, 'getDownloadAr'])->name('getDownloadAr'); //25/4/22
Route::get('/ra-200', [PageController::class, 'raTwoHundred'])->name('raTwoHundred');
Route::get('/ra-100', function (){
    $title = 'RA-100';
    return view('pages.ra-100',compact('title'));
})->name('raOneHundred');


Route::get('/about', [PageController::class, 'about'])->name('about');;
Route::get('/solutions_advertising', [PageController::class, 'solutions_advertising'])->name('solutions_advertising');

Route::get('/solutions_telepresense', [PageController::class, 'solutions_telepresense'])->name('solutions_telepresense');

Route::get('/solutions_ai', [PageController::class, 'solutions_ai'])->name('solutions_ai');

Route::get('/solutions_customisations', [PageController::class, 'solutions_customisations'])->name('solutions_customisations');

Route::get('/gallary', [PageController::class, 'gallary'])->name('gallary');;
Route::get('/contact', [PageController::class, 'contact'])->name('contact');;
Route::post('/rent', [PageController::class, 'robotInquiry'])->name('robotInquiry');;
Route::post('/buyRobot', [PageController::class, 'buyRobot'])->name('buyRobot');
Route::get('/become_a_partner', [PageController::class, 'become_a_partner'])->name('become_a_partner');



Route::get('/newsBlogs', [PageController::class, 'newsBlogs'])->name('newsBlogs');
Route::get('post/{id}/{slud}', [PageController::class, 'single_post'])->name('single_post');

Route::get('getPostsWithTags/{id}/{slug}',[PageController::class,'getPostsWithTags'])->name('getPostsWithTags');


Route::get('/newsBlogs_2', [PageController::class, 'newsBlogs_2'])->name('newsBlogs_2');

Route::post('/clientDetailsSubmit', [PageController::class, 'clientDetailsSubmit'])->name('client-details-submit');
Route::post('/add-media', [PageController::class, 'add-media'])->name('add-media');

Route::get('/rent-robot', [\App\Http\Controllers\RobotController::class, 'rentRobot'])->name('rent-robot');
Route::get('/buy-robot', [\App\Http\Controllers\RobotController::class, 'buyRobot'])->name('buy-robot');
Route::get('/advertisement', [\App\Http\Controllers\RobotController::class, 'advertisement'])->name('advertisement');
Route::post('/sendOtp', [\App\Http\Controllers\RobotController::class, 'sendOtp'])->name('sendOtp');

Route::post('/verifyOtp', [\App\Http\Controllers\RobotController::class, 'verifyOtp'])->name('verifyOtp');

Route::post('/createBlogPost', [\App\Http\Controllers\PostController::class, 'createBlogPost'])->name('users.blogs.submit');

Route::post('/rent-Robot-Step-One', [\App\Http\Controllers\RobotController::class, 'rentRobotStepOne'])->name('rentRobot.step.one.post');
Route::get('/rent-Robot-Step-Two', [\App\Http\Controllers\RobotController::class, 'rentRobotStepTwo'])->name('rentRobot.step.two');
Route::post('/rent-Robot-Step-Two', [\App\Http\Controllers\RobotController::class, 'rentRobotStepTwoPost'])->name('rentRobot.step.two.post');

Route::get('/rent-Robot-Step-three', [\App\Http\Controllers\RobotController::class, 'rentRobotStepThree'])->name('rentRobot.step.three');
Route::post('/rent-Robot-Step-three', [\App\Http\Controllers\RobotController::class, 'rentRobotStepThreePost'])->name('rentRobot.step.three.post');

Route::get('/rent-Robot-Step-four', [\App\Http\Controllers\RobotController::class, 'rentRobotStepFour'])->name('rentRobot.step.four');
Route::post('/rent-Robot-media-upload', [\App\Http\Controllers\RobotController::class, 'mediasUpload'])->name('rentRobot.medias_upload.post');
Route::post('/rent-Robot-Step-four', [\App\Http\Controllers\RobotController::class, 'rentRobotStepFourPost'])->name('rentRobot.step.four.post');
Route::post('/getRobotDetails', [\App\Http\Controllers\RobotController::class, 'getRobotDetails'])->name('getRobotDetails');

Route::get('robot/rent-Robot-Step-One/{id}', [\App\Http\Controllers\RobotController::class, 'rentRobotStepOneGet'])->name('rentRobot.step.one');
Route::post('/rent-robot/add-on', [\App\Http\Controllers\RobotController::class, 'robotAddOn'])->name('rentRobot.robot-add-on');
Route::post('/rent-robot/couponRedeem', [\App\Http\Controllers\RobotController::class, 'couponRedeem'])->name('rentRobot.couponRedeem');
Route::get('qbo/gettingAccessToken','\App\Http\Controllers\QuickBookController@gettingAccessToken');
Route::post('qbo/createCustomer','\App\Http\Controllers\QuickBookController@createCustomer')->name('createCustomer');
Route::get('qbo/getCustomers','\App\Http\Controllers\QuickBookController@getCustomers');
Route::get('qbo/getCustomer/{id}','\App\Http\Controllers\QuickBookController@getCustomer')->name('getCustomer');
Route::post('qbo/createProduct','\App\Http\Controllers\QuickBookController@createProduct')->name('createProduct');
Route::get('qbo/createProductGet','\App\Http\Controllers\QuickBookController@createProductGet')->name('createProductGet');
Route::get('qbo/createInvoice','\App\Http\Controllers\QuickBookController@createInvoice')->name('createInvoice');
Route::get('qbo/getInvoices','\App\Http\Controllers\QuickBookController@getInvoices')->name('getInvoices');
Route::get('qbo/getProducts','\App\Http\Controllers\QuickBookController@getProducts')->name('getProducts');
Route::get('qbo/getProduct/{id}','\App\Http\Controllers\QuickBookController@getProduct')->name('getProduct');
Route::get('qbo/createInvoiceGet','\App\Http\Controllers\QuickBookController@createInvoiceGet')->name('createInvoiceGet');
Route::post('qbo/createInvoicePost','\App\Http\Controllers\QuickBookController@createInvoicePost')->name('createInvoicePost');

Route::post('checkForEmailExist',[\App\Http\Controllers\RobotController::class,'checkForEmailExist'])->name('checkForEmailExist');
Route::post('checkForCompanyExist',[\App\Http\Controllers\RobotController::class,'checkForCompanyExist'])->name('checkForCompanyExist');
Route::controller(\App\Http\Controllers\StripePaymentController::class)->group(function(){
   Route::get('stripe', 'stripe');
   Route::post('stripe', 'stripePost')->name('stripe.post');
   Route::post('payment/successful', 'paymentSuccess')->name('payment.successful');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
