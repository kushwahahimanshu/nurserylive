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

Route::get('/','MainController@index');
 
Route::get('/login-page','MainController@loginPage');
Route::get('/register-page','MainController@registerPage');
Route::get('/home-page','MainController@mainDashboard');
Route::get('/my-order','OrderController@myOrder');
Route::get('/my-wishlist','MainController@myWishlist');
Route::get('all-category','MainController@showAllCategory');
Route::get('show-category/{name}','MainController@showCategory');
Route::get('show-product/{name}','MainController@showProduct');
Route::get('product-details/{name}','MainController@showProductDetails');
Route::get('add-to-cart/{id}','MainController@addToCart');
//changes
Route::get('/term-condition','MainController@termConditions');
Route::get('/privacy-policy','MainController@privacyPolicy');
Route::get('/refund-policy','MainController@refundPolicy');
Route::get('/return-policy','MainController@returnPolicy');
Route::get('search/{data}','OrderController@searchResult');
//Auth User Route
Auth::routes();
Route::get('logout', function(){ Auth::logout(); return redirect('/'); });
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard1','MainController@dashboard')->middleware('auth');
Route::get('/dashboard','ADMIN\DashboardController@dashboard')->middleware('auth');
Route::get('/my-cart','MainController@myCart');
Route::get('cart-update','MainController@cartUpdate')->middleware('auth');
Route::get('remove-product','MainController@removeProduct')->middleware('auth');
Route::get('add-to-wishlist/{id}','MainController@addToWishlist')->middleware('auth');
Route::get('remove-wishlist-product','MainController@removeWishlistProduct')->middleware('auth');
Route::get('move-to-cart/{id}','MainController@moveToCart')->middleware('auth');
//Admin Route
Route::get('/add-parent-category','ADMIN\DashboardController@addParentCategory')->middleware('auth');
Route::post('/add-parent-category-submit','ADMIN\DashboardController@addParentCategorySubmit')->middleware('auth');
//Route::post('/add-home-category-submit','ADMIN\DashboardController@addHomeCategorySubmit')->middleware('auth');
Route::get('/add-sub-category','ADMIN\DashboardController@addSubCategory')->middleware('auth');
Route::post('/add-sub-category-submit','ADMIN\DashboardController@addSubCategorySubmit')->middleware('auth');
Route::get('/add-product','ADMIN\DashboardController@addProduct')->middleware('auth');
Route::post('/add-product-submit','ADMIN\DashboardController@addProductSubmit')->middleware('auth');
Route::get('/add-header-menu','ADMIN\DashboardController@headerMenu')->middleware('auth');
Route::get('category','ADMIN\DashboardController@loadCategory');
Route::post('header-menu-submit','ADMIN\DashboardController@headerMenuSubmit')->middleware('auth');
Route::get('delete-parent-category/{name}','ADMIN\DashboardController@deleteParentCategory')->middleware('auth');
Route::get('delete-category/{id}','ADMIN\DashboardController@deleteCategory')->middleware('auth');
Route::get('edit-category/{id}','ADMIN\DashboardController@editCategory')->middleware('auth');
Route::get('delete-product/{id}','ADMIN\DashboardController@deleteProduct')->middleware('auth');
Route::get('edit-product/{id}','ADMIN\DashboardController@editProduct')->middleware('auth');
Route::get('delete-menu/{id}','ADMIN\DashboardController@deleteMenu')->middleware('auth');
Route::get('edit-menu/{id}','ADMIN\DashboardController@editHeader')->middleware('auth');
Route::post('edit-header-submit','ADMIN\DashboardController@editHeaderMenuSubmit')->middleware('auth');
Route::get('add-policy','ADMIN\DashboardController@addPolicies')->middleware('auth');
Route::post('/update-policy-submit','ADMIN\DashboardController@addPoliciesSubmit')->middleware('auth');
//Top Layout Home Page
Route::get('home-layout','ADMIN\HomeController@homeLayoutOne')->middleware('auth');
Route::post('/layout-one-submit','ADMIN\HomeController@homeLayoutOneSubmit')->middleware('auth');
Route::get('delete-layout/{id}','ADMIN\HomeController@deleteLayout')->middleware('auth');
//section Layout Home Page
Route::get('home-section-layout','ADMIN\HomeController@createHomePageSection')->middleware('auth');
Route::post('/section-layout-submit','ADMIN\HomeController@homePageSectionSubmit')->middleware('auth');

//order placed
Route::get('/checkout','OrderController@checkoutForm')->middleware('auth');
Route::post('/checkout-submit','OrderController@checkoutFormSubmit')->middleware('auth');
Route::get('/order-placed','OrderController@orderDetails')->middleware('auth');
Route::get('refreshcaptcha', 'OrderController@refreshCaptcha')->middleware('auth');
Route::post('/update-payment-submit','OrderController@orderDetailSubmit')->middleware('auth');
 
//order Return\exchange
 
Route::get('/order-return/{id}','OrderController@orderReturn')->middleware('auth');
Route::post('/update-return-submit','OrderController@orderReturnSubmit')->middleware('auth');
Route::get('/order-exchange/{id}','OrderController@orderExchange')->middleware('auth');
Route::post('/update-exchange-submit','OrderController@orderExchangeSubmit')->middleware('auth');
Route::get('/track-order','OrderController@trackOrder')->middleware('auth');
Route::post('/search', 'OrderController@trackOrderSubmit')->middleware('auth');
Route::get('/show-order-status', 'OrderController@trackOrderDetails')->middleware('auth');

//start FAQ 
Route::get('add-faq', 'ADMIN\HomeController@addFaq')->middleware('auth');
Route::post('submit-faq', 'ADMIN\HomeController@submitFaq')->middleware('auth'); 
Route::get('view-faq', 'ADMIN\HomeController@viewFaq')->middleware('auth');
Route::get('toggle-faq-active-status/{status}/{id}', 'ADMIN\HomeController@toggleFaqActiveStatus')->middleware('auth');
Route::get('delete-faq/{id}', 'ADMIN\HomeController@deleteFaq')->middleware('auth'); 
Route::get('edit-faq/{id}', 'ADMIN\HomeController@editFaq')->middleware('auth');
Route::post('update-faq', 'ADMIN\HomeController@updateFaq')->middleware('auth');
Route::get('/faq', 'MainController@faq');
Route::get('/about-us', 'MainController@aboutUs');
Route::get('/my-account', 'MainController@myAccount')->middleware('auth');
Route::get('/my-account-edit/{id}', 'MainController@myAccountEdit')->middleware('auth');
Route::get('/my-account-delete/{id}', 'MainController@myAccountDelete')->middleware('auth');
Route::post('new-password','MainController@newPassword')->middleware('auth');
Route::post('profile-submit','MainController@myAccountProfileSubmit')->middleware('auth');
Route::post('address-submit','MainController@myAccountAddressSubmit')->middleware('auth');
Route::get('/contact-us', 'MainController@contactUs');
Route::post('/contact-us-form-submit', 'MainController@contactUsFormSubmit');
//end FAQ 

//start Footer 
Route::get('edit-footer', 'ADMIN\HomeController@editFooter')->middleware('auth');
Route::post('update-footer', 'ADMIN\HomeController@updateFooter')->middleware('auth'); 
//end Footer

//start contact 
Route::get('edit-contact-us', 'ADMIN\HomeController@editContactDetails')->middleware('auth');
Route::post('update-contact', 'ADMIN\HomeController@updateContactDetails')->middleware('auth'); 
//end contact

//start about 
Route::get('edit-about-us', 'ADMIN\HomeController@editAboutDetails')->middleware('auth');
Route::post('update-about-us', 'ADMIN\HomeController@updateAboutDetails')->middleware('auth'); 
//end about
//contact form submit
Route::get('view-contact-details','ADMIN\HomeController@viewContactDetails')->middleware('auth');
Route::get('delete-contact-details/{id}','ADMIN\HomeController@deleteContactForm')->middleware('auth');
//Mobile View Category
Route::get('add-mobile-category','ADMIN\MobileViewController@addMobileCategory')->middleware('auth');
Route::post('mobile-home-category-submit','ADMIN\MobileViewController@mobileCategorySubmit')->middleware('auth');
//show Order
Route::get('show-order','ADMIN\UserController@showOrder')->middleware('auth');
Route::get('delete-order/{id}','ADMIN\UserController@deleteOrder')->middleware('auth');
Route::get('view-order-details/{id}','ADMIN\UserController@viewOrderDetails')->middleware('auth');
//edit Top Layout Home Page
Route::get('edit-layout/{id}','ADMIN\HomeController@editHomeLayoutOne')->middleware('auth');
Route::post('/edit-layout-one-submit','ADMIN\HomeController@editHomeLayoutOneSubmit')->middleware('auth');
 
 
//edit Top Layout Home Page
Route::get('edit-home-section/{id}','ADMIN\HomeController@editHomeSection')->middleware('auth');
Route::post('/edit-home-section-submit','ADMIN\HomeController@editHomePageSectionSubmit')->middleware('auth');