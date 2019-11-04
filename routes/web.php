<?php
use App\Mail\MailtrapExample;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', 'OurshipController@mainIndex')->name('index');

//ourships
Route::get('ourship/view',function(){
    return view ('backend.ourship.index');
})->middleware('auth');
Route::get('ourship/add',function(){
    return view ('backend.ourship.add');
});

//newsfeed section
Route::get('newsfeed/add',function(){
    return view ('backend.newsfeed.add');
});

Route::get('newsfeed/view',function(){
    return view ('backend.newsfeed.index');
});


Route::get('newsfeed/show', function() {
    return view('backend.newsfeed.show');
});


//opportunities
Route::get('opportunities/add',function(){
    return view ('backend.opportunities.add');
});

Route::get('opportunities/view',function(){
    return view ('backend.opportunities.index');
});


Route::get('opportunities/show', function() {
    return view('backend.opportunities.show');
});

//user
Route::get('user/add', function() {
    return view('backend.users.add');
});

Route::get('/news/{id}', 'NewsfeedController@newsbody')->name('newsbody');
Route::get('/view-opportunities/{id}', 'OpportunitiesController@opportunitiesbody')->name('opportunities');

Route::get('/allships', function () {
    return view('partial._ship-body');
})->name('allships');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('newsfeed/view', 'NewsfeedController@index');
Route::get('Contactus','ContactUsController@index');
Route::get('ship-modal/{id}','OurshipController@getShip');
Route::get('/allships', 'OurshipController@display_allship')->name('allships');
Route::get('/allnews', 'NewsfeedController@display_allnews')->name('allnews');


Route::post('Contactus/send','ContactUsController@send');
Route::post('ourship/view','ImageController@ourship_store')->name('image.ourship');
Route::post('newsfeed/view','ImageController@store')->name('image.newsfeed');
Route::post('opportunities/view','ImageController@opportunities_store')->name('image.opportunities');
Route::post('/uploadcv','OpportunitiesController@fileUpload')->name('SendFiles');




Route::resource('opportunities','OpportunitiesController');
Route::resource('newsfeed', 'NewsfeedController');
Route::resource('image', 'ImageController');
Route::resource('users', 'UserManagement');
Route::resource('ourship', 'OurshipController');


