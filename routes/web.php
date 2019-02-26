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

Route::get('/', function () {
    return view('user.home');
})->name('user');

Route::post('/restaurant_list', 'HomeController@show_restaurants')->name('restaurant_list');

Route::get('/search', 'HomeController@search_restaurants')->name('restaurant_search');

Route::get('/restaurant_details/{id}', 'HomeController@show_restaurant_details')->name('restaurant_details');

Route::post('/addToCart', 'CartController@addToCart')->name('addToCart');

Route::post('/updateQuantity', 'CartController@updateQuantity')->name('updateQuantity');
Route::post('/removeFromCart', 'CartController@removeFromCart')->name('removeFromCart');
Route::post('/checkout', 'CheckoutController@checkout')->name('checkout');

// SSLCOMMERZ Start
Route::get('/sslcommerz/pay', 'PublicSslCommerzPaymentController@index');
Route::POST('/sslcommerz/success', 'PublicSslCommerzPaymentController@success');
Route::POST('/sslcommerz/fail', 'PublicSslCommerzPaymentController@fail');
Route::POST('/sslcommerz/cancel', 'PublicSslCommerzPaymentController@cancel');
Route::POST('/sslcommerz/ipn', 'PublicSslCommerzPaymentController@ipn');
//SSLCOMMERZ END


Route::post('/available-times', 'TimeConfigController@getAvailableTimes')->name('available-times');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group([ 'prefix' => 'admin','middleware'=> ['auth', 'admin']], function(){

    Route::resource('/food_categories', 'FoodCategoryController');
	Route::get('/food_categories/destroy/{id}', 'FoodCategoryController@destroy')->name('food_categories.destroy');

    Route::resource('/food_menus', 'FoodMenuController');
	Route::get('/food_menus/destroy/{id}', 'FoodMenuController@destroy')->name('food_menus.destroy');

    Route::get('tables/show', 'RestaurantTableController@showTables')->name('tables.show');
    Route::get('/tables/add', 'RestaurantTableController@showAddTableForm')->name('tables.add');
    Route::post('/tables/insert', 'RestaurantTableController@insertRestaurantTable')->name('tables.insert');
    Route::post('/tables/edit', 'RestaurantTableController@showEditTableForm')->name('tables.edit');
    Route::post('/tables/update', 'RestaurantTableController@updateRestaurantTable')->name('tables.update');
    Route::get('/tables/delete/{id}', 'RestaurantTableController@deleteRestaurantTable')->name('tables.delete');

    Route::get('/timeConfigs/show', 'TimeConfigController@showTimeConfig')->name('timeConfig.show');
    Route::get('/timeConfigs/add', 'TimeConfigController@showAddTimeConfigForm')->name('timeConfig.add');
    Route::post('/timeConfigs/insert', 'TimeConfigController@insertTimeConfig')->name('timeConfig.insert');
    Route::post('/timeConfigs/update', 'TimeConfigController@updateTimeConfig')->name('timeConfig.update');

	Route::get('/bookings', 'BookingController@bookings')->name('bookings');

	Route::get('/bookings/approve/{id}', 'BookingController@approve')->name('approve');

    Route::get('/bookings/reject/{id}', 'BookingController@reject')->name('reject');

    Route::get('/requests', 'BookingController@booking_requests')->name('requests');

	Route::get('/reviews', function(){
		return view('admin.reviews.index');
	})->name('reviews');

	Route::get('/profile', function(){
		return view('admin.profile');
	})->name('profile');
});

Route::post('/cities/getareas', 'CityController@getAreasByCity')->name('cities.getareas');

//SystemAdmin
Route::group(['middleware' => ['auth', 'systemadmin']], function(){

	Route::resource('/cities', 'CityController');
	Route::get('/cities/destroy/{id}', 'CityController@destroy')->name('cities.destroy');

    Route::resource('/areas', 'AreaController');
	Route::get('/areas/destroy/{id}', 'AreaController@destroy')->name('areas.destroy');

});

Route::group(['middleware' => ['auth']], function(){

	Route::resource('/restaurants', 'RestaurantController');
	Route::get('/restaurants/destroy/{id}', 'RestaurantController@destroy')->name('restaurants.destroy');
    Route::get('/restaurants/approve/{id}', 'RestaurantController@approve')->name('restaurants.approve');
    Route::post('/restaurants/photo', 'RestaurantController@photo')->name('restaurants.photo');
});

/*Route::get('/user',function(){

})->name('user');*/
