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

Route::group(array('middleware' => 'langMiddleware'), function () {
    /*
     * Lang
     */
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es'
    ]);

    /*
     * Web Site
     */
    Route::get('/', array('as' => 'home', 'uses' => 'FrontEndController@index'));
    Route::get('nosotros', array('as' => 'home', 'uses' => 'FrontEndController@nosotros'));
    Route::get('galeria', array('as' => 'galeria', 'uses' => 'FrontEndController@galeria'));
    Route::get('servicios', array('as' => 'servicios', 'uses' => 'FrontEndController@servicios'));
    Route::get('contacto', array('as' => 'contacto', 'uses' => 'FrontEndController@contacto'));
    Route::get('blog', array('as' => 'blog', 'uses' => 'FrontEndController@blog'));
    Route::get('blog-detail/{id}', array('as' => 'blog-detail', 'uses' => 'FrontEndController@blog_detail'));
    Route::get('postContact', array('as' => 'postContact', 'uses' => 'FrontEndController@postContact'));

    $route = 'oferta_educativa';
    $controller = 'FrontEndController@';
    Route::group(array('prefix' => $route), function () use ($route, $controller) {
        Route::get('maternal', array('as' => 'maternal', 'uses' => $controller.'maternal'));
        Route::get('preescolar', array('as' => 'preescolar', 'uses' => $controller.'preescolar'));
        Route::get('english', array('as' => 'english', 'uses' => $controller.'english'));
        Route::get('primaria', array('as' => 'primaria', 'uses' => $controller.'primaria'));
        Route::get('secundaria', array('as' => 'secundaria', 'uses' => $controller.'secundaria'));
        Route::get('preparatoria', array('as' => 'preparatoria', 'uses' => $controller.'preparatoria'));
    });

    $route = 'servicios';
    $controller = 'FrontEndController@';
    Route::group(array('prefix' => $route), function () use ($route, $controller) {
        Route::get('plataforma', array('as' => 'plataforma', 'uses' => $controller.'plataforma'));
        Route::get('idiomas', array('as' => 'idiomas', 'uses' => $controller.'idiomas'));
        Route::get('cadt', array('as' => 'cadt', 'uses' => $controller.'cadt'));
        Route::get('estancia', array('as' => 'estancia', 'uses' => $controller.'estancia'));
    });


    /*
     * Purchases
     */
    Route::get('search', array('as' => 'search', 'uses' => 'FrontEndController@search'));
    Route::get('search/{slug}', array('as' => 'detail', 'uses' => 'FrontEndController@detail'));
    Route::post('add-product-to-cart', array('as' => 'add-product-to-cart', 'uses' => 'CartController@setProduct'));
    Route::get('delete-product-of-cart/{id}', array('as' => 'delete-product-of-cart', 'uses' => 'CartController@deleteProduct'));
    Route::get('cart', array('as' => 'cart', 'uses' => 'FrontEndController@cart'));
    Route::group(array('middleware' => 'sentinelCustomer'), function () {
        Route::get('confirm-purchase', array('as' => 'confirm-purchase', 'uses' => 'FrontEndController@confirmPurchase'));
        Route::post('payment-paypal', array('as' => 'payment-paypal', 'uses' => 'PaypalController@postPaymentWithpaypal'));
        Route::get('payment-paypal-status', array('as' => 'payment-paypal-status', 'uses' => 'PaypalController@getPaymentStatus'));
        Route::get('my-purchases', array('as' => 'my-purchases', 'uses' => 'SalesController@index'));
        Route::get('my-purchases/{id}', array('as' => 'my-purchases.show', 'uses' => 'SalesController@show'));
        Route::get('my-purchases/{id}/cancel', array('as' => 'my-purchases.cancel', 'uses' => 'SalesController@cancelItem'));
    });

    /*
     * Auth
     */
    Route::group(array('middleware' => 'guest'), function () {
        // Login
    	Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
    	Route::post('login', array('as' => 'login', 'uses' => 'AuthController@postLogin'));

        // Suppliers
        Route::get('register-supplier', array('as' => 'suppliers.create', 'uses' => 'SuppliersController@create'));
        Route::post('register-supplier', array('as' => 'suppliers.store', 'uses' => 'SuppliersController@store'));

        // Recover password
        Route::get('forgot-password',array('as' => 'forgot-password','uses' => 'AuthController@getForgotPassword'));
        Route::post('forgot-password','AuthController@postForgotPassword');
        Route::get('forgot-password/{userId}/{passwordResetCode}', array('as' => 'forgot-password-confirm', 'uses' => 'AuthController@getForgotPasswordConfirm'));
        Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@postForgotPasswordConfirm');

        /*
         * Customers
         */
        $route = 'customers';
        $controller = 'CustomersController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('create', array('as' => 'front.'.$route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => 'front.'.$route.'.store', 'uses' => $controller.'@store'));
        });

        /*
         * Suppliers
         */
        $route = 'suppliers';
        $controller = 'SuppliersController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('create', array('as' => 'front.'.$route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => 'front.'.$route.'.store', 'uses' => $controller.'@store'));
        });
    });
    Route::group(array('middleware' => 'sentinelAuth'), function () {
        // Datatables
        Route::group(array('prefix' => 'admin'), function () {
            Route::post('data', array('as' => 'data', 'uses' => 'DataTablesController@data'));
        });

        Route::get('logout', array('as' => 'logout', 'uses' => 'AuthController@logout'));

        Route::group(array('middleware' => 'sentinelCustomer'), function () {
            /*
             * Customers
             */
            $route = 'my-account';
            $controller = 'CustomersController';
            Route::group(array('prefix' => $route), function () use ($route, $controller) {
                Route::get('{slug}', array('as' => $route, 'uses' => $controller.'@show'));
            });
            $route = 'edit-my-account';
            $controller = 'CustomersController';
            Route::group(array('prefix' => $route), function () use ($route, $controller) {
                Route::get('{slug}', array('as' => $route, 'uses' => $controller.'@edit'));
                Route::put('{id}', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            });
        });
    });

    /*
     * Admin
     */
    Route::group(array('prefix' => 'admin', 'middleware' => 'sentinelAdmin'), function () {
    // Route::group(array('prefix' => 'admin'), function () {
    	// Dashboard
    	Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@index'));

        // Blogs
        $route = 'blogs';
        $controller = 'BlogsController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Countries
        $route = 'countries';
        $controller = 'CountriesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // States
        $route = 'states';
        $controller = 'StatesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Cities
        $route = 'cities';
        $controller = 'CitiesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Categories
        $route = 'categories';
        $controller = 'CategoriesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Subcategories
        $route = 'subcategories';
        $controller = 'SubcategoriesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Memberships
        $route = 'memberships';
        $controller = 'MembershipsController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

    	// Users
        $route = 'users';
        $controller = 'UsersController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Suppliers
        $route = 'suppliers';
        $controller = 'SuppliersController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Customers
        $route = 'customers';
        $controller = 'CustomersController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Products
        $route = 'products';
        $controller = 'ProductsController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Services
        $route = 'services';
        $controller = 'ServicesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('deleted', array('as' => $route.'.deleted', 'uses' => $controller.'@getRestore'));
            Route::patch('restore', array('as' => $route.'.restore', 'uses' => $controller.'@postRestore'));
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::delete('delete', array('as' => $route.'.delete', 'uses' => $controller.'@destroy'));
            Route::get('create', array('as' => $route.'.create', 'uses' => $controller.'@create'));
            Route::post('create', array('as' => $route.'.store', 'uses' => $controller.'@store'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });

        // Sales
        $route = 'sales';
        $controller = 'SalesController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::get('{id}/edit', array('as' => $route.'.edit', 'uses' => $controller.'@edit'));
            Route::put('{id}/edit', array('as' => $route.'.update', 'uses' => $controller.'@update'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
            Route::get('{id}/status', array('as' => $route.'.update-status', 'uses' => $controller.'@updateStatus'));
        });

        // Contacts
        $route = 'contacts';
        $controller = 'WebContactsController';
        Route::group(array('prefix' => $route), function () use ($route, $controller) {
            Route::get('/', array('as' => $route, 'uses' => $controller.'@index'));
            Route::get('{id}', array('as' => $route.'.show', 'uses' => $controller.'@show'));
        });
    });

    /*
     * Dynamic Selects
     */
    Route::get('dynamic-selects/subcategories/{id}', 'Controller@getSubcategories');
    Route::get('dynamic-selects/states/{id}', 'Controller@getStates');
    Route::get('dynamic-selects/cities/{id}', 'Controller@getCities');

    /*
     * Dynamic Checkbox
     */
    Route::get('dynamic-checkbox/subcategories', 'Controller@getSubcategoriesCheck');
    Route::get('dynamic-checkbox/states', 'Controller@getStatesCheck');
    Route::get('dynamic-checkbox/cities', 'Controller@getCitiesCheck');
});
