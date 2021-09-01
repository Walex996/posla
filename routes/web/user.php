<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Deal Routes
|--------------------------------------------------------------------------
|
| Here is where you can register deal routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['middleware' => 'auth', ],function () {
//     //account pages - deals create
//     Route::group(['prefix' => 'deal/create', 'as' => 'deals.create.', 'namespace' => 'Deals'], function(){
//         Route::get('/rule', 'CreateDealController@viewRule')->name('rule');
//         Route::get('info', 'CreateDealController@viewInfo')->name('info');
//         Route::post('info', 'CreateDealController@saveInfo')->name('save.info');
//         Route::get('{deal_id}/pricing', 'CreateDealController@viewPricing')->name('pricing');
//         Route::put('{deal_id}/pricing', 'CreateDealController@savePricing')->name('save.pricing');
//         Route::get('{deal_id}/requirement', 'CreateDealController@viewRequirement')->name('requirement');
//         Route::put('{deal_id}/requirement', 'CreateDealController@saveRequirement')->name('save.requirement');
//         Route::get('{deal_id}/publish', 'CreateDealController@viewPublish')->name('publish');
//         Route::put('{deal_id}/publish', 'CreateDealController@savePublish')->name('save.publish');
//     });

//     //account pages - project create
//         Route::group(['as' => 'project.create.', 'prefix' => 'project/create'], function(){
//             Route::get('rules', 'CreateProjectController@viewRule')->name('view');
//             Route::get('info', 'CreateProjectController@viewInfo')->name('info');
//             Route::post('info', 'CreateProjectController@saveInfo')->name('save.info');
//             Route::get('{project_id}/publish', 'CreateProjectController@viewPublish')->name('publish');
//             Route::put('{project_id}/publish', 'CreateProjectController@savePublish')->name('save.publish');
//         });

//     Route::group(['prefix' => 'account'], function(){
//         Route::get('deals', 'Users\AccountController@dealList')->name('deal.list');
//     });

// });

// Route::group(['prefix' => 'account'], function(){
//         Route::get('projects', 'Users\AccountController@ProjectList')->name('project.list');
//         Route::get('projects/{project_id}', 'Users\AccountController@ProjectDetails')->name('project.detail');
//     });
