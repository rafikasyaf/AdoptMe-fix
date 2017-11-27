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



//admin pusat
Route::resource('article', 'ArticleController');
Route::resource('pusat-adoptreq', 'AdoptionRequestController');
Route::resource('pusat-report', 'ReportController');
Route::resource('pusat-shelter', 'ShelterController');
Route::resource('pusat-cat', 'CatController');
Route::resource('pusat-dog', 'DogController');
Route::resource('pusat-message', 'MessageController');
Route::resource('pusat-donate', 'ConfirmDonateController');
Route::post('article/{id}/update','ArticleController@update');
Route::get('article/{id}/delete','ArticleController@destroy');
Route::get('dog/{id}/delete','DogController@destroy');
Route::get('cat/{id}/delete','CatController@destroy');
Route::get('pusat-shelter/{id}/delete','ShelterController@destroy');
Route::post('pusat-donate/{id}/update','ConfirmDonateController@update');
Route::get('pusat-cat/{id}/delete','CatController@destroy');
Route::get('pusat-dog/{id}/delete','DogController@destroy');


//admin
Route::resource('index', 'AdminIndexController');
Route::resource('admin-cat', 'AdminCatController');
Route::resource('admin-dog', 'AdminDogController');
Route::post('index/{id}/update','AdminIndexController@update');
Route::post('admin-dog/{id}/update','AdminDogController@update');
Route::get('admin-dog/{id}/delete','AdminDogController@destroy');
Route::post('admin-cat/{id}/update','AdminCatController@update');
Route::get('admin-cat/{id}/delete','AdminCatController@destroy');
Route::resource('peteditor', 'PetEditorController');
Route::post('peteditor/{id}/update','PetEditorController@update');
// Route::post('peteditor/create','PetEditorController@create');


// Route::post('index/{id}/update','AdminIndexController@update');
// Route::resource('admin-profile', 'AdminProfileController');

//member

Route::resource('profil', 'UserController');
Route::resource('profil2', 'AdoptionHistoryController');
Route::resource('cats', 'MemberCatController');
Route::resource('dogs', 'MemberDogController');
Route::resource('viewadopt', 'ViewAdoptController');


Route::get('/', function () {
    return view('layouts.master');
});
Route::get('confirmdonate', function () {
    return view('confirmdonate');
});
Route::get('about', function () {
    return view('about');
});
Route::get('adoptsme', function () {
    return view('adoptme');
});
Route::get('home', function () {
    return view('layouts.master');
});
// Route::get('cats', function () {
//     return view('cats');
// });
Route::get('blog', function () {
    return view('blog');
});
Route::get('qna', function () {
    return view('qna');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('report', function () {
    return view('report');
});
Route::post('postreport','HomeController@sendreport');
Route::get('rescue', function () {
    return view('rescue');
});
Route::get('donation', function () {
    return view('donate');
});
Route::get('viewadopt2', function () {
    return view('viewadopt2');
});
Route::get('tc', function () {
    return view('tc');
});
// Route::get('profil', function () {
//     return view('profil');
// });
// Route::get('profil2', function () {
//     return view('profil2');
// });
Route::get('submit', function () {
    return view('submit');
});

// Route::get('confirmdonate', function () {
//     return view('confirmdonate');
// });

Route::get('donationhistory', function () {
    return view('donationhistory');
});





//admin shelter
Route::get('admin-profile', function () {
    return view('admin.admin-profile');
});
// Route::get('page-user', function () {
//     return view('admin.page-user');
// });
// Route::get('admin-dog', function () {
//     return view('admin.admin-dog');
// });
// Route::get('peteditor', function () {
//     return view('admin.peteditor');
// });


//Admin pusat
Route::get('dashboard', function () {
    return view('adminpusat.dashboard');
});

Route::get('editor', function () {
    return view('adminpusat.editor');
});

// Route::get('pusat-shelter', function () {
//     return view('adminpusat.pusat-shelter');
// });



Route::post('postlogin', 'LoginController@postlogin');
Route::post('postregister', 'LoginController@postregister');
Route::get('logout', 'LoginController@logout');
// Route::get('article', 'ArticleController@index');
// Route::post('article', 'ArticleController@store');
// Route::get('article.create', 'ArticleController@create');

