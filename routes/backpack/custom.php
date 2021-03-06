<?php

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes
    Route::crud('contact', 'ContactCrudController');
    Route::crud('account', 'AccountCrudController');
    Route::crud('news', 'NewsCrudController');
    Route::get('charts/weekly-users', 'Charts\WeeklyUsersChartController@response')->name('charts.weekly-users.index');
    Route::namespace('API')->name('web-api.')->prefix('api')->group(function () {
        Route::apiResource('address', 'Addresses\AddressController')->only(['index']);
    });
}); // this should be the absolute last line of this file