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

Route::get('/restaurant_details/{id}', 'HomeController@show_restaurant_details')->name('restaurant_details');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group([ 'prefix' => 'admin','middleware'=> ['auth', 'admin']], function(){

    Route::resource('/food_categories', 'FoodCategoryController');
	Route::get('/food_categories/destroy/{id}', 'FoodCategoryController@destroy')->name('food_categories.destroy');

    Route::resource('/food_menus', 'FoodMenuController');
	Route::get('/food_menus/destroy/{id}', 'FoodMenuController@destroy')->name('food_menus.destroy');

	Route::get('/bookings', function(){
		return view('admin.bookings.index');
	})->name('bookings');

	Route::get('/requests', function(){
		return view('admin.requests.index');
	})->name('requests');

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

});

/*Route::get('/user',function(){

})->name('user');*/
