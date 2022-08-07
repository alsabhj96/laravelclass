<?php

use Illuminate\Support\Facades\Route;

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

// FOR FRONTEND DESIGN 
Route::get('/', 'App\Http\Controllers\SiteController@gethome')->name('gethome');
Route::get('/about', 'App\Http\Controllers\SiteController@getabout')->name('getabout');
Route::get('/resturants', 'App\Http\Controllers\SiteController@getrestaurants')->name('getrestaurants');
Route::get('/contactus', 'App\Http\Controllers\SiteController@getcontactus')->name('getcontactus');
Route::get('/signupandlogin', 'App\Http\Controllers\SiteController@getSignupandLogin')->name('signupandlogin');

//FOR PRODUCT 
Route::get('/fooddetails/{product}', 'App\Http\Controllers\SiteController@getProductDetails')->name('getProductDetail');
Route::post('/foodcart', 'App\Http\Controllers\SiteController@postAddToCart')->name('postAddCart');
Route::get('/cart', 'App\Http\Controllers\SiteController@getCart')->name('getCart');

Route::get('/test/cart', 'App\Http\Controllers\SiteController@gettestcart')->name('gettestcart');
Route::post('/test/cart', 'App\Http\Controllers\SiteController@Posttestcart')->name('Posttestcart');






Route::get('/service', 'App\Http\Controllers\SiteController@getservice');

Route::get('/gallery', 'App\Http\Controllers\SiteController@getgallery');

Route::get('/contact', 'App\Http\Controllers\SiteController@getcontact');

Route::get('/Alisha', 'App\Http\Controllers\SiteController@xyz');

Route::post('/Bhujel', 'App\Http\Controllers\SiteController@srijanachowk') ->name('xyz1');



Auth::routes();


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

// News and Event page Route
Route::get('/manage/News_Event', 'App\Http\Controllers\HomeController@getManageNews_Event')->name('getManageNewsandEvent');
Route::post('/manage/News_Event', 'App\Http\Controllers\HomeController@getAddNewsandEvent')->name('AddNewsandEvent');
Route::get('/delete/News_Event/{delete_news_event}', 'App\Http\Controllers\HomeController@getDeletenews')->name('getnewsdelete');
Route::get('/edit/News_Event/{edit_news_event}', 'App\Http\Controllers\HomeController@getEditnews')->name('getnewsedit');
Route::post('/edit/News_Event/PostEditNews/{edit_news_event}', 'App\Http\Controllers\HomeController@PostEditNewsandEvent')->name('PostEditNewsandEvent');


//FAQ
Route::get('/manage/FAQ', 'App\Http\Controllers\HomeController@getManageFaq')->name('getManageFAQ');
Route::post('/Add/FAQ', 'App\Http\Controllers\HomeController@getAddFAQ')->name('postAddFAQ');
Route::get('/delete/FAQ/{delete_faq}', 'App\Http\Controllers\HomeController@getDeleteFAQ')->name('getfaqdelete');
Route::get('/edit/FAQ/{edit_faq}', 'App\Http\Controllers\HomeController@getEDITFAQ')->name('getfaqedit');
Route::post('/edit/FAQ/PostEditFAQ{edit_faq}', 'App\Http\Controllers\HomeController@PostEDITFAQ')->name('PostEditFAQ');


// Product page Route
Route::get('/manage/product', 'App\Http\Controllers\HomeController@getManageProduct')->name('getManageProduct');
Route::post('/manage/product', 'App\Http\Controllers\HomeController@postAddProduct')->name('postAddProduct');
Route::get('/manage/product/delete/{product}', 'App\Http\Controllers\HomeController@getDeleteProduct')->name('getDeleteProduct');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});



