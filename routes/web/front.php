<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
// use App\Http\Controllers\Front\DealController;
// use App\Http\Controllers\Front\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register front routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// auth
Auth::routes(['verify' => true]);

Route::group(['prefix' => 'account', 'as' => 'auth.', 'namespace' => 'Auth'], function(){
    Route::get('password-reset/success', 'ResetPasswordController@resetPasswordSuccess')->name('reset.password.success');
    Route::get('forgot-password/success', 'ForgotPasswordController@forgotPasswordLinkSent')->name('forget.password.sent');
    Route::get('forgot-password/resend-link', 'ForgotPasswordController@resendForgotPasswordLink')->name('forget.password.re-send');
    Route::get('welcome', 'RegisterController@welcome')->name('register.welcome');
});

//front
Route::group(['namespace' => 'Front', 'as' => 'front.'], function(){
    Route::get('/', 'FrontController@projects')->name('project');
    Route::get('deals', 'FrontController@deals')->name('deal');
    Route::get('project/{id}', 'FrontController@projectDetails')->name('project.detail');
    Route::get('deal/{id}', 'FrontController@dealDetails')->name('deal.detail');
    Route::get('category/{slug}/projects', 'FrontController@categoryProjects')->name('category.projects');
    Route::get('category/{slug}/deals', 'FrontController@categoryDeals')->name('category.deals');
});

// Search 
Route::group(['prefix' => 'search', 'as'=> 'search.', 'namespace' => 'Front'], function(){
    Route::get('/', 'SearchController@all')->name('all');
    Route::get('/projects', 'SearchController@projects')->name('projects');
    Route::get('/deals', 'SearchController@deals')->name('deals');
    Route::get('/freelancers', 'SearchController@users')->name('users');
});

/*
// pages that require login
Route::group(['middleware' => ['auth','verified']],function () {

    Route::group(['prefix' => 'account', 'namespace' => 'Users'],function () {
     
        //account pages - deals create
        Route::group(['prefix' => 'deals/create', 'as' => 'deals.create.', ], function(){
            Route::get('/', 'CreateDealController@viewRule')->name('rule');
            Route::get('info', 'CreateDealController@viewInfo')->name('info');
            Route::post('info', 'CreateDealController@saveInfo')->name('save.info');
            Route::get('{deal_id}/pricing', 'CreateDealController@viewPricing')->name('pricing');
            Route::put('{deal_id}/pricing', 'CreateDealController@savePricing')->name('save.pricing');
            Route::get('{deal_id}/requirement', 'CreateDealController@viewRequirement')->name('requirement');
            Route::put('{deal_id}/requirement', 'CreateDealController@saveRequirement')->name('save.requirement');
            Route::get('{deal_id}/publish', 'CreateDealController@viewPublish')->name('publish');
            Route::put('{deal_id}/publish', 'CreateDealController@savePublish')->name('save.publish');
            Route::get('success', 'CreateDealController@success')->name('success');
        });

        //account pages - deals edit
        Route::group(['prefix' => 'deals/edit', 'as' => 'deal.edit.'], function(){
            Route::get('{id}/rule', 'editDealController@viewRule')->name('rule');
            Route::put('{id}/rule', 'editDealController@updateRule')->name('rule.update');
            Route::get('{id}/info', 'editDealController@viewInfo')->name('info');
            Route::put('{id}/info', 'editDealController@updateInfo')->name('info.update');
            Route::get('{id}/pricing', 'editDealController@viewPricing')->name('pricing');
            Route::put('{id}/pricing', 'editDealController@updatePricing')->name('pricing.update');
            Route::get('{id}/requirements', 'editDealController@viewRequirement')->name('requirement');
            Route::put('{id}/requirements', 'editDealController@updateRequirement')->name('requirement.update');
            Route::get('{id}/publish', 'editDealController@viewPublish')->name('publish');
            Route::put('{id}/publish', 'editDealController@updatePublish')->name('publish.update');
            Route::get('success', 'editDealController@success')->name('success');

        });

        //account pages - project create
        Route::group(['prefix' => 'projects/create', 'as' => 'project.create.' ], function(){
            Route::get('/', 'CreateProjectController@viewRule')->name('view');
            Route::get('info', 'CreateProjectController@viewInfo')->name('info');
            Route::post('info', 'CreateProjectController@saveInfo')->name('save.info');
            Route::get('{project_id}/publish', 'CreateProjectController@viewPublish')->name('publish');
            Route::put('{project_id}/publish', 'CreateProjectController@savePublish')->name('save.publish');
            Route::get('success', 'CreateProjectController@success')->name('success');
        });
        
        // logged in user account
        Route::group([ 'as' => 'account.'], function(){
            Route::get('/', 'AccountController@account')->name('account');
            Route::get('deals', 'AccountController@dealList')->name('deals');
            Route::get('projects', 'AccountController@ProjectList')->name('projects');
            Route::get('dashboard', 'AccountController@account')->name('dashboard');
            Route::get('profile', 'AccountController@viewProfile')->name('profile');
            Route::get('favourites/projects', 'AccountController@projectFavourites')->name('deal.favourite');
            Route::get('favourites/deals', 'AccountController@dealFavourites')->name('deal.favourite');
            Route::get('profile/edit', 'AccountController@editProfile')->name('profile.edit');
            Route::put('profile/edit', 'AccountController@updateProfile')->name('profile.update');
        });

        // favourite
        Route::group(['prefix' => 'favourites', 'as' => 'favourite.'], function(){
            Route::post('add-deal-to-favourite/{id}', 'FavouriteController@addDeal')->name('add.deal');
            Route::post('add-project-to-favourite/{id}', 'FavouriteController@addProject')->name('add.project');
        });
            // Route::get('/account/favourites', function () {
            //     return view('front.account.favourites.deals');
            // });

            // Route::get('/account/favourites/deals', function () {
            //     return view('front.account.favourites.deals');
            // });

            // Route::get('/account/favourites/projects', function () {
            //     return view('front.account.favourites.projects');
            // });

        // orders - in progress
        Route::group(['prefix' => 'orders' , 'as' => 'order.'], function(){
            Route::get('/', 'OrderController@orderList')->name('list');
            Route::get('{id}', 'OrderController@orderDetails')->name('detail');
            Route::get('requirements/{id}', 'OrderController@requirements')->name('requirement');
            Route::get('deliver/{id}', 'OrderController@deliver')->name('deliver');
        });
    });
    

    // helper/api routes
    // Route::get('/category/{category_id}', 'HelperController@getSubCategories');
});

// Route::get('payment', 'PaymentController@index');
// Route::post('charge', 'PaymentController@charge');
// Route::get('paymentsuccess', 'PaymentController@payment_success');
// Route::get('paymenterror', 'PaymentController@payment_error');
*/


  Route::get('/category/{category_id}', 'HelperController@getSubCategories');





//dummy routes below .. rearrange when necessary

//DONE: auth

Route::get('/welcome', function () {
    return view('front.auth.register-success');
});

Route::get('/forgot-password/success', function () {
    return view('front.auth.forgot-password-success');
});

Route::get('/password-reset', function () {
    return view('front.auth.password-reset');
});

Route::get('/password-reset/success', function () {
    return view('front.auth.password-reset-success');
});


// Done: list pages
    // Route::get('/home/projects', function () {
    //     // return view('front.home-projects');
    // });

    // Route::get('/home/deals', function () {
    //     return view('front.home-deals');
    // });

    // Route::get('/category/deals/category1', function () {
    //     return view('front.category-deals-list');
    // });

    // Route::get('/category/projects/category1', function () {
    //     return view('front.category-projects-list');
    // });



//search IN PROGRESS

    // Route::get('/search', function () {
    //     return view('front.search.search-all');
    // });

    // Route::get('/search/projects', function () {
    //     return view('front.search.search-projects');
    // });

    // Route::get('/search/deals', function () {
    //     return view('front.search.search-deals');
    // });

    Route::get('/search/freelancers', function () {
        return view('front.search.search-freelancers');
    });



//DONE: details pages

    // Route::get('/project/{id}', function () {
    //     return view('front.details-projects');
    // });

    // Route::get('/deal/{id}', function () {
    //     return view('front.details-deals');
    // });





// DONE account pages

Route::get('/account', function () {
    return view('front.account.index');
});

Route::get('/account/dashboard', function () {
    return view('front.account.dashboard');
});

Route::get('/account/profile', function () {
    return view('front.account.profile.index');
});

Route::get('/account/profile/edit', function () {
    return view('front.account.profile.edit');
});


// account =>  IN PROGRESS orders

Route::get('/account/orders', function () {
    return view('front.account.orders.index');
});

Route::get('/account/orders/123456789012', function () {
    return view('front.account.orders.details');
});

Route::get('/account/orders/123456789012', function () {
    return view('front.account.orders.details');
});

Route::get('/account/orders/review/123456789012', function () {
    return view('front.account.orders.review');
});

Route::get('/account/orders/requirements/123456789012', function () {
    return view('front.account.orders.requirements');
});

Route::get('/account/orders/deliver/123456789012', function () {
    return view('front.account.orders.deliver');
});



// account =>  order reoslution

Route::get('/account/resolution/orders', function () {
    return view('front.account.resolution.index');
});

Route::get('/account/resolution/orders/123456789012', function () {
    // return view('front.account.resolution.each-seller');            // for seller only
    return view('front.account.resolution.each-buyer');          // for buyer only
});


// DONE: account => deals

Route::get('/account/deals', function () {
    return view('front.account.deals.list');
});

Route::get('/account/deals/paused', function () {
    return view('front.account.deals.list-paused');
});

Route::get('/account/deals/pause/1234', function () {
    return view('front.account.deals.pause');
});

Route::get('/account/deals/delete/1234', function () {
    return view('front.account.deals.delete');
});

// DONE: account => deals create

Route::get('/account/deals/create', function () {
    return view('front.account.deals.create-rules');
});

Route::get('/account/deals/create/1234/info', function () {
    return view('front.account.deals.create-info');
});

Route::get('/account/deals/create/1234/pricing', function () {
    return view('front.account.deals.create-pricing');
});

Route::get('/account/deals/create/1234/requirements', function () {
    return view('front.account.deals.create-requirements');
});

Route::get('/account/deals/create/1234/publish', function () {
    return view('front.account.deals.create-publish');
});

Route::get('/account/deals/create/1234/success', function () {
    return view('front.account.deals.create-success');
});

// account => deals edit

Route::get('/account/deals/edit/1234', function () {
    return view('front.account.deals.edit-rules');
});

Route::get('/account/deals/edit/1234/rules', function () {
    return view('front.account.deals.edit-rules');
});

Route::get('/account/deals/edit/1234/info', function () {
    return view('front.account.deals.edit-info');
});

Route::get('/account/deals/edit/1234/pricing', function () {
    return view('front.account.deals.edit-pricing');
});

Route::get('/account/deals/edit/1234/requirements', function () {
    return view('front.account.deals.edit-requirements');
});

Route::get('/account/deals/edit/1234/publish', function () {
    return view('front.account.deals.edit-publish');
});

Route::get('/account/deals/edit/1234/success', function () {
    return view('front.account.deals.edit-success');
});



// account => projects
// DONE
Route::get('/account/projects', function () {
    return view('front.account.projects.list');
});

Route::get('/account/projects/paused', function () {
    return view('front.account.projects.list-paused');
});

Route::get('/account/projects/pause/1234', function () {
    return view('front.account.projects.pause');
});

Route::get('/account/projects/delete/1234', function () {
    return view('front.account.projects.delete');
});

// DONE: account => projects create

Route::get('/account/projects/create', function () {
    return view('front.account.projects.create-rules');
});

Route::get('/account/projects/create/1234/info', function () {
    return view('front.account.projects.create-info');
});

Route::get('/account/projects/create/1234/publish', function () {
    return view('front.account.projects.create-publish');
});

Route::get('/account/projects/create/1234/success', function () {
    return view('front.account.projects.create-success');
});

// account => projects edit - in progress

Route::get('/account/projects/edit/1234', function () {
    return view('front.account.projects.edit-rules');
});

Route::get('/account/projects/edit/1234/rules', function () {
    return view('front.account.projects.edit-rules');
});

Route::get('/account/projects/edit/1234/info', function () {
    return view('front.account.projects.edit-info');
});

Route::get('/account/projects/edit/1234/publish', function () {
    return view('front.account.projects.edit-publish');
});

Route::get('/account/projects/edit/1234/success', function () {
    return view('front.account.projects.edit-success');
});



// account => project bids

Route::get('/account/project-bids', function () {
    return view('front.account.project-bids.ongoing');
});

Route::get('/account/project-bids/accepted', function () {
    return view('front.account.project-bids.accepted');
});

Route::get('/account/project-bids/rejected', function () {
    return view('front.account.project-bids.rejected');
});


// account => favourites = IN PROGRESS

Route::get('/account/favourites', function () {
    return view('front.account.favourites.deals');
});

Route::get('/account/favourites/deals', function () {
    return view('front.account.favourites.deals');
});

Route::get('/account/favourites/projects', function () {
    return view('front.account.favourites.projects');
});


// account => messages

Route::get('/messages', function () {
    return view('front.account.messages.index');
});

Route::get('/messages/user000000', function () {
    return view('front.account.messages.thread');
});

Route::get('/account/messages', function () {
    return view('front.account.messages.index');
});

Route::get('/account/messages/user000000', function () {
    return view('front.account.messages.thread');
});


// account => earnings & withdrawals

Route::get('/account/earnings-withdrawals', function () {
    return view('front.account.earnings-withdrawals.index');
});

Route::get('/account/earnings-withdrawals/new', function () {
    return view('front.account.earnings-withdrawals.new');
});

Route::get('/account/withdrawals/new', function () {
    return view('front.account.earnings-withdrawals.new');
});


// account => wallet

Route::get('/account/wallet', function () {
    return view('front.account.wallet.index');
});

Route::get('/account/wallet/deposit', function () {
    return view('front.account.wallet.deposit');
});


// account => reviews

Route::get('/account/reviews', function () {
    return view('front.account.reviews.received');
});

Route::get('/account/reviews/received', function () {
    return view('front.account.reviews.received');
});

Route::get('/account/reviews/sent', function () {
    return view('front.account.reviews.sent');
});


// account => settings

Route::get('/account/settings', function () {
    return view('front.account.settings.index');
});

Route::get('/account/settings/change-password', function () {
    return view('front.account.settings.change-password');
});

Route::get('/account/settings/withdrawal-settings', function () {
    return view('front.account.settings.withdrawal-settings');
});

Route::get('/account/settings/vacation-mode', function () {
    return view('front.account.settings.vacation-mode');
});

Route::get('/account/settings/vacation-mode-success', function () {
    return view('front.account.settings.vacation-mode-success');
});


//  user - account view

Route::get('/user/abcde12345', function () {
    return view('front.user.index');
});

Route::get('/user/abcde12345/deals', function () {
    return view('front.user.deals');
});

Route::get('/user/abcde12345/projects', function () {
    return view('front.user.projects');
});

Route::get('/user/abcde12345/reviews', function () {
    return view('front.user.reviews');
});


//  cart - in progress

Route::get('/cart', function () {
    return view('front.cart-checkout.cart');
});

Route::get('/checkout', function () {
    return view('front.cart-checkout.checkout');
});

Route::get('/checkout/status', function () {
    return view('front.cart-checkout.checkout-status');
});


// account => support center

Route::get('/support', function () {
    return view('front.support.index');
});

Route::get('/support/tickets', function () {
    return view('front.support.tickets-all');
});

Route::get('/support/tickets/new', function () {
    return view('front.support.tickets-new');
});

Route::get('/support/tickets/123456789012', function () {
    return view('front.support.tickets-each');
});


// misc => about, terms, etc

Route::get('/about', function () {
    return view('front.others.about-us');
});

Route::get('/terms', function () {
    return view('front.others.terms-of-service');
});


// errors => 404

Route::get('/404', function () {
    return view('front.errors.404');
});


// emails => general email

Route::get('/email/sample', function () {
    return view('front.email._sample');
});
