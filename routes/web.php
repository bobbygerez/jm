<?php

/** AJAX ROUTES **/

Route::group(['prefix' => 'api'], function(){
	Route::get('regions', 'LocationController@region');
	Route::get('provinces/{region_id}', 'LocationController@regionProvinces');
	Route::get('provinces', 'LocationController@provinceAll');
	Route::get('cities', 'LocationController@cityAll');
	Route::get('cities/{province_id}', 'LocationController@provinceCities');
	Route::get('barangay/{cityCode}', 'LocationController@cityBarangay');
});

Route::get('/', ['route' => 'home', 'uses' => 'NavController@home']);
