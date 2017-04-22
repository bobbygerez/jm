<?php

/** AJAX ROUTES **/

Route::group(['prefix' => 'api'], function(){

	/** Locations **/
	Route::get('regions', 'LocationController@region');
	Route::get('provinces/{region_id}', 'LocationController@regionProvinces');
	Route::get('provinces', 'LocationController@provinceAll');
	Route::get('cities', 'LocationController@cityAll');
	Route::get('cities/{province_id}', 'LocationController@provinceCities');
	Route::get('barangay/{cityCode}', 'LocationController@cityBarangay');

	/** Products **/
	

	/** Categories **/
	Route::get('maincategories/{maincategory_id}', 'AjaxCategoriesController@mainCategories');
	Route::get('merchant-categories/{merchantcategory_id}', 'AjaxCategoriesController@merchantCategories');
	Route::get('merchant-subcategories/{merchantsubcategory_id}', 'AjaxCategoriesController@merchantSubcategories');
	Route::get('sample', 'AjaxCategoriesController@getData');

	/** Products **/
	Route::get('products/maincategories', 'Product\ApiProductController@maincategories');

});

Route::get('/', ['route' => 'home', 'uses' => 'NavController@home']);

Route::group(['prefix' => 'products'], function(){

	Route::get('maincategories', 'NavController@mainCategories');
	Route::get('merchant-categories/{merchantcategory_id}', 'NavController@merchantCategories');
	Route::get('merchant-subcategories/{merchantsubcategory_id}', 'NavController@merchantSubcategories');

});

Route::get('sample', 'NavController@sample');
