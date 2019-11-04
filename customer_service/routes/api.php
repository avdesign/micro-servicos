<?php

Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    Route::resource('customers', 'CustomerController', ['except' => ['create', 'edit']]);
});

