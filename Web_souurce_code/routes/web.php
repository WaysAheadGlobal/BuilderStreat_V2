<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\StockistController;
use App\Http\Controllers\admin\RetailerController;
use App\Http\Controllers\retailer\ReatilerLoginController;
use App\Http\Controllers\retailer\RetailerDashboardController;
use App\Http\Controllers\LotteryNumberController;


use App\Http\Controllers\seller\SellerLoginController;
use App\Http\Controllers\seller\SellerDashboardController;
use App\Http\Controllers\seller\PostController;

use App\Http\Controllers\buyer\BuyerLoginController;
use App\Http\Controllers\buyer\BuyerDashboardController;

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
Route::get('/admin', function () {
        return view('auth.login');
    })->name('admin-login');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('what-we-do', [App\Http\Controllers\HomeController::class, 'whatwedo'])->name('whatwedo');
Route::get('our-categories', [App\Http\Controllers\HomeController::class, 'ourcategories'])->name('ourcategories');
Route::get('blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('teams', [App\Http\Controllers\HomeController::class, 'teams'])->name('teams');
Route::get('faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('testimonials');

/* *********************** SELLER ROUTES START HERE *********************** */

Route::get('seller-login', [SellerLoginController::class, 'index'])->name('seller.login');
Route::get('seller-registration', [SellerLoginController::class, 'register'])->name('seller.register');
Route::post('seller-login', [SellerLoginController::class, 'sellerLogin'])->name('seller.post.login');
Route::post('seller-register', [SellerLoginController::class, 'sellerRegister'])->name('seller.post.register');
Route::get('seller-dashboard', [SellerLoginController::class, 'dashboard'])->name('seller.dashboard');
Route::get('seller-dashboard', [SellerLoginController::class, 'dashboard'])->name('seller.dashboard');


Route::group(['middleware' => ['auth', 'seller']], function () {

    Route::get('seller-subcription-plan', [SellerDashboardController::class, 'subcriptionPlan'])->name('seller.subcription');
    Route::get('seller-payment-page/{id}', [SellerDashboardController::class, 'sellerPayments'])->name('seller.payments');
    Route::post('seller-pay-now', [SellerDashboardController::class, 'payments'])->name('seller.pay.now');
    Route::get('seller-logout', [SellerLoginController::class, 'logout'])->name('seller.logout');

});

Route::group(['middleware' => ['seller-plan', 'seller']], function () {

    Route::get('seller-dashboard', [SellerDashboardController::class, 'index'])->name('seller.dashboard');
    Route::get('create-post', [SellerDashboardController::class, 'createPost'])->name('seller.createPost');
    Route::get('message', [SellerDashboardController::class, 'createMessage'])->name('seller.createMessage');
    Route::get('seller-profile', [SellerDashboardController::class, 'getProfile'])->name('seller.getProfile');
    Route::get('edit-profile', [SellerDashboardController::class, 'editProfile'])->name('seller.editProfile');
    Route::post('seller-update-profile', [SellerDashboardController::class, 'updateProfile'])->name('seller.update.profile');
    Route::get('all-rfq', [SellerDashboardController::class, 'allRfq'])->name('seller.allRfq');
    Route::get('rfq-details', [SellerDashboardController::class, 'rfqDetails'])->name('seller.rfqDetails');
    Route::get('seller-payment', [SellerDashboardController::class, 'sellerPayment'])->name('seller.payment');
    Route::get('seller-subscription-history', [SellerDashboardController::class, 'subscriptionHistory'])->name('seller.subscription.history');
    Route::get('seller-notification', [SellerDashboardController::class, 'notification'])->name('seller.notification');
    Route::post('seller-create-post', [PostController::class, 'saveList'])->name('seller.create.post');
    Route::post('seller-approve-rfq', [SellerDashboardController::class, 'approveRFQ'])->name('seller.approve.rfq');
    Route::get('seller-chat/{id}', [SellerDashboardController::class, 'chat'])->name('seller.chat');
    Route::post('send-chat-messages', [SellerDashboardController::class, 'sendChatMessage'])->name('seller.send.chat');
    Route::get('seller-rfq-details/{id}', [SellerDashboardController::class, 'rfqDetail'])->name('seller.rfq.detail');
    Route::get('seller-message', [SellerDashboardController::class, 'rcreateMessage'])->name('seller.seller-message');
    Route::get('seller-buyer-chat/{id}', [SellerDashboardController::class, 'buyerSellerChat'])->name('seller.seller-buyer-chat');
    Route::post('seller-chat-sms', [SellerDashboardController::class, 'buyerchatsms'])->name('seller.seller-chat-sms');


});



/* ************************ SELLER ROUTES END HERE ************************ */



/* *********************** BUYER ROUTES START HERE *********************** */

// Route::get('buyer-login', [BuyerLoginController::class, 'index'])->name('buyer.login');
Route::get('buyer-registration', [BuyerLoginController::class, 'register'])->name('buyer.register');
Route::post('buyer-registration1', [BuyerLoginController::class, 'buyerRegistration'])->name('buyer.post.buyerRegister');
Route::post('buyer-login', [BuyerLoginController::class, 'buyerLogin'])->name('buyer.post.login');

Route::group(['middleware' => ['auth', 'buyer']], function(){

    Route::get('buyer-subscription', [BuyerDashboardController::class, 'subscriptionSelection'])->name('buyer.subscription');
    Route::get('buyer-payment/{id}', [BuyerDashboardController::class, 'buyerPayment'])->name('buyer.payment');
    Route::post('buyer-pay-now', [BuyerDashboardController::class, 'payments'])->name('buyer.pay.now');
    Route::get('buyer-logout', [BuyerLoginController::class, 'logout'])->name('buyer.logout');


});

Route::group(['middleware' => ['buyer-plan', 'buyer']], function(){

    Route::get('buyer-dashboard', [BuyerDashboardController::class, 'index'])->name('buyer.dashboard');
    Route::get('buyer-message', [BuyerDashboardController::class, 'createMessage'])->name('buyer.create.message');
    Route::get('buyer-profile', [BuyerDashboardController::class, 'getProfile'])->name('buyer.get.profile');
    Route::get('buyer-edit-profile', [BuyerDashboardController::class, 'editProfile'])->name('buyer.edit.Profile');

    Route::get('buyer-wishlist', [BuyerDashboardController::class, 'wishList'])->name('buyer.wishlist');
    Route::get('buyer-order-history', [BuyerDashboardController::class, 'orderhistory'])->name('buyer.order.history');
    Route::get('buyer-subscription-history', [BuyerDashboardController::class, 'subscriptionHistory'])->name('buyer.subscription.history');
    Route::get('buyer-payment-history', [BuyerDashboardController::class, 'paymentHistory'])->name('buyer.payment.history');
    Route::get('buyer-all-rfq', [BuyerDashboardController::class, 'allRfq'])->name('buyer.allRfq');
    Route::get('buyer-notification', [BuyerDashboardController::class, 'notification'])->name('buyer.notification');

    Route::get('buyer-product-details/{id}', [BuyerDashboardController::class, 'buyerproductdetails'])->name('buyer.product-deatils');
    Route::get('create-rfq', [BuyerDashboardController::class, 'createRfq'])->name('buyer.createRfq');
    Route::get('buyer-subcription-plan', [BuyerDashboardController::class, 'buyersubcriptionPlan'])->name('buyer.subcription-plan');
    Route::post('buyer-edit-profile', [BuyerDashboardController::class, 'editProfileSave'])->name('buyer.post.editprofile');
    Route::post('buyer-shipping', [BuyerDashboardController::class, 'buyershipping'])->name('buyer.shipping');
    Route::post('buyer-create-rfq-post', [BuyerDashboardController::class, 'buyeCreateRfq'])->name('buyer.buyeCreateRfq');
    Route::post('buyer-vendors', [BuyerDashboardController::class, 'getVendor'])->name('buyer.getVendor');
    Route::post('buyer-profile-image', [BuyerDashboardController::class, 'buyerProfileImage'])->name('buyer.buyerprofileimage');
    Route::get('buyer-seller-chat/{id}', [BuyerDashboardController::class, 'buyerSellerChat'])->name('buyer.buyer-seller-chat');
    Route::get('buyer-wishlist-add/{id}', [BuyerDashboardController::class, 'byerAddWishlist'])->name('buyer.buyer-wishlist-add');
    Route::get('buyer-wishlist-remove/{id}', [BuyerDashboardController::class, 'byerRemoveWishlist'])->name('buyer.buyer-wishlist-remove');
    Route::post('buyer-chat-sms', [BuyerDashboardController::class, 'buyerchatsms'])->name('buyer.buyer-chat-sms');
    Route::get('buyer-rfq-details/{id}', [BuyerDashboardController::class, 'rfqDetail'])->name('buyer.rfq.detail');
    Route::post('buyer-product-search', [BuyerDashboardController::class, 'buyerProductSearch'])->name('buyer.buyer-product-search');
    Route::get('buyer-all-products-get', [BuyerDashboardController::class, 'productsAllGet'])->name('buyer.buyer-all-products-get');
    Route::post('buyer-bid-price', [BuyerDashboardController::class, 'bidPrice'])->name('buyer.buyer-bid-price');

});


/* ************************ BUYER ROUTES END HERE ************************ */

// admin protected routes
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('admin-dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    Route::get('admin/seller-request', [DashboardController::class, 'sellerRequest'])->name('admin.seller.requests');
    Route::post('admin-approve-seller', [DashboardController::class, 'approveSeller'])->name('admin.approve.seller');

    // THESE BELOW ROUTE ARE NOT USED IN THIS PROJECT
    Route::get('admin/stockist-list', [StockistController::class, 'index'])->name('admin.stockist.list');
    Route::get('admin/add-stockist', [StockistController::class, 'create'])->name('admin.add.stockist');
    Route::post('admin/save-stockist', [StockistController::class, 'save'])->name('admin.save.stockist');
    Route::get('admin/update-stockist-status/{id}/{status}', [StockistController::class, 'updateStatus'])->name('admin.update.stockist.status');
    Route::get('admin/edit-stockist/{id}', [StockistController::class, 'edit'])->name('admin.edit.stockist');
    Route::post('admin/update-stockist', [StockistController::class, 'update'])->name('admin.update.stockist');

    Route::get('admin/retailer-list', [RetailerController::class, 'index'])->name('admin.retailer.list');
    Route::get('admin/add-retailer', [RetailerController::class, 'create'])->name('admin.add.retailer');
    Route::post('admin/save-retailer', [RetailerController::class, 'save'])->name('admin.save.retailer');
    Route::get('admin/edit-retailer/{id}', [RetailerController::class, 'edit'])->name('admin.edit.retailer');
    Route::post('admin/update-retailer', [RetailerController::class, 'update'])->name('admin.update.retailer');
    // THESE ABOVE ROUTE ARE NOT USED IN THIS PROJECT

});

/* ********************* RETAILER ROUTES START HERE ********************* */
Route::get('retailer-login', [ReatilerLoginController::class, 'index'])->name('retaler.login');
Route::post('retailer-login', [ReatilerLoginController::class, 'postLogin'])->name('retailer.post.login');

Route::group(['middleware' => ['auth', 'retailer']], function(){

    Route::get('retailer-dashboard', [RetailerDashboardController::class, 'index'])->name('retailer.dashboard');
    Route::get('get-random-numbers', [RetailerDashboardController::class, 'randomNumbers']);
    Route::get('get-lottery-numbers', [LotteryNumberController::class, 'getLotteryNumbers']);

    Route::post('retailer-logout', [ReatilerLoginController::class,'logout'])->name('retailer.logout');

});
Route::get('store-lottery-numbers', [LotteryNumberController::class, 'storeNumbers']);

Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/optimize', function () {
    $exitCode = Artisan::call('optimize:clear');
    return 'Application All(compile, events, views, congig, route) cache cleared successfully';
});
