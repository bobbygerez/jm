<?php

/******************* AJAX ROUTES ******************/

Route::group(['prefix' => 'api'], function(){

	/** Locations **/
	Route::get('regions', 'LocationController@region');
	Route::get('provinces/{region_id}', 'LocationController@regionProvinces');
	Route::get('provinces', 'LocationController@provinceAll');
	Route::get('cities', 'LocationController@cityAll');
	Route::get('cities/{province_id}', 'LocationController@provinceCities');
	Route::get('barangays/{cityCode}', 'LocationController@cityBarangay');
	Route::Get('countries', 'LocationController@countries');

	Route::resource('admin', 'User\AdminController');
	Route::resource('role', 'Role\AdminRoleController');
	Route::resource('product_branch_manager', 'Product\BranchManagerProductController');
	
	/** Categories **/
	Route::get('maincategories/{maincategory_id}', 'AjaxCategoriesController@mainCategories');
	Route::get('merchant-categories/{merchantcategory_id}', 'AjaxCategoriesController@merchantCategories');
	Route::get('merchant-subcategories/{merchantsubcategory_id}', 'AjaxCategoriesController@merchantSubcategories');
	Route::get('sample', 'AjaxCategoriesController@getData');

	/** Products **/
	Route::get('products', 'Product\ApiProductController@getData');

});

/******************* END AJAX ROUTES ******************/


/****************** IMPLICIT ROUTES *****************/
Route::get('logout', 'Auth\LoginController@logout');
Route::auth();
Route::get('/', ['route' => 'home', 'uses' => 'NavController@home']);
Route::get('dashboard', 'DashboardController@index');
Route::get('user/{user_id}', 'User\UserController@index');

/******************  END IMPLICIT ROUTES *****************/





 /******************* ROUTE PREFIX ********************/

Route::group(['prefix' => 'browse'], function(){

	Route::get('{maincategory}/{maincategory_id}', 'NavController@mainCategories');
	Route::get('{maincategory}/{merchantcategory}/{merchantcategory_id}', 'NavController@merchantCategories');
	Route::get('{maincategory}/{merchantcategory}/{merchantsub}/{merchantsub_id}', 'NavController@merchantSubcategories');
	Route::get('{maincategory}/{merchantcategory}/{merchantsub}/{product_name}/{product_id}', 'Product\ProductController@getProduct');
});

/****************** END ROUTE PREFIX ***************/

