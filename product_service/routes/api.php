<?php

Route::group(['namespace' => 'Api', 'as' => 'api.'], function () {
    Route::resource('products', 'ProductController', ['except' => ['create', 'edit']]);
});
