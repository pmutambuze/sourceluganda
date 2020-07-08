<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::loginUsingId(2);
Route::get('/', 'HomeController@home')->name('home_page');
Auth::loginUsingId(1);
Auth::routes();
// Auth::logout();
//journals
Route::group(['prefix' => 'admin'], function () {
    Route::get('/home', 'HomeController@admin')->name('admin');
    Route::get('/journals', 'JournalController@getAllJournals')->name('journals.admin.index');
    Route::get('/journals/layout/', 'JournalpolicyController@createLayout')->name('journals.layout.create');
    //edit
    Route::get('/journals/edit/layout/{journalpolicy}', 'JournalpolicyController@editLayout')
        ->name('journals.layout.edit');
    Route::get('/journals/edit/papersubmission/{journalpolicy}', 'JournalpolicyController@editPapersubmission')
        ->name('journals.papersubmission.edit');
    Route::get('/journals/edit/paymentpolicy/{journalpolicy}', 'JournalpolicyController@editPaymentpolicy')
        ->name('journals.paymentpolicy.edit');
    Route::get('/journals/edit/paperpublication/{journalpolicy}', 'JournalpolicyController@editPaperpublication')->name('journals.paperpublication.edit');
    Route::get('/journals/edit/guidelines/{journalpolicy}', 'JournalpolicyController@editGuidelines')->name('journals.guidelines.edit');
    Route::get('/journals/edit/plagiarismpolicy/{journalpolicy}', 'JournalpolicyController@editPlagiarismpolicy')
        ->name('journals.plagiarismpolicy.edit');
    Route::get('/journals/edit/misconduct/{journalpolicy}', 'JournalpolicyController@editAcademicmisconduct')
        ->name('journals.misconduct.edit');
    Route::post('/journals/store/layout', 'JournalpolicyController@storeLayout')
        ->name('journals.layout.store');
    Route::put('/journals/update/layout/{journalpolicy}', 'JournalpolicyController@updateLayout')
        ->name('journals.layout.update');
    Route::put('/journals/update/papersubmission/{journalpolicy}', 'JournalpolicyController@updatePaperSubmission')
        ->name('journals.papersubmission.update');
    Route::put('/journals/update/paperpublication/{journalpolicy}', 'JournalpolicyController@updatePaperpublication')
        ->name('journals.paperpublication.update');
    Route::put('/journals/update/paymentpolicy/{journalpolicy}', 'JournalpolicyController@updatePaymentpolicy')
        ->name('journals.paymentpolicy.update');
    Route::put('/journals/update/guidelines/{journalpolicy}', 'JournalpolicyController@updateGuidelines')
        ->name('journals.guidelines.update');
    Route::put('/journals/update/plagiarismpolicy/{journalpolicy}', 'JournalpolicyController@updatePlagiarismpolicy')
        ->name('journals.plagiarismpolicy.update');
    Route::put('/journals/update/misconduct/{journalpolicy}', 'JournalpolicyController@updateAcademicmisconduct')->name('journals.misconduct.update');

    Route::get('/journals/create', 'JournalController@create')->name('journals.create');
    Route::post('/journals', 'JournalController@store')->name('journals.store');
    Route::get('/journals/{journal}/edit', 'JournalController@edit')->name('journals.edit');
    Route::put('/journals/{journal}', 'JournalController@update')->name('journals.update');
    Route::get('/journals/{journal}', 'JournalController@adminShow')->name('journals.admin.show');
    Route::delete('/journals/{journal}', 'JournalController@destroy')->name('journals.destroy');
});


// Route::resource('journals', 'JournalController');
Route::get('/journals', 'JournalController@index')->name('journals.index');
Route::get('/journals/{journal}', 'JournalController@show')->name('journals.show');

Route::get('/home', 'HomeController@index')->name('home');


//members
Route::get('/members/all', 'MemberController@allMembers');
Route::resource('members', 'MemberController');

//research papers
Route::resource('papers', 'ResearchpaperController');


//subscriptionplans
Route::get('/admin/plans', 'SubscriptionplanController@getallPlans')->name('admin.plans');
Route::resource('plans', 'SubscriptionplanController');


//features
Route::post('/features/attach/{plan}', 'FeatureController@attachPlan')->name('features.attach');
Route::get('/features/{feature}/detach/{plan}', 'FeatureController@detachPlan')->name('features.detach');
Route::resource('features', 'FeatureController');

//library
Route::resource('categories', 'CategoryController');

Route::get('/library/create', 'LibraryController@create')->name('library.create');
Route::get('/library', 'LibraryController@index')->name('library.index');
Route::post('/library', 'LibraryController@store')->name('library.store');
Route::get('/library/{journal}/edit', 'LibraryController@edit')->name('library.edit');
Route::put('/library/{journal}', 'LibraryController@update')->name('library.update');
Route::get('/library/{journal}', 'LibraryController@show')->name('library.show');
Route::delete('/library/{journal}', 'LibraryController@destroy')->name('library.destroy');

Route::get('library/{library}/download', 'LibraryController@download')->name('library.download');
Route::get('/library/{library}/view', 'LibraryController@view')->name('library.view');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/library', 'LibraryController@adminIndex')->name('library.admin.index');
    Route::get('library/{library}/publish', 'LibraryController@publish')->name('library.publish');
    Route::get('/library/{journal}', 'LibraryController@adminShow')->name('library.admin.show');
    Route::put('/library/approve/{journal}', 'LibraryController@approve')->name('library.admin.approve');
});
