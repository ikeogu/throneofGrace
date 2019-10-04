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
Use App\Sermon;
use App\Event;
Route::get('/', function () {
$events = Event::limit(3)->get();
$sermons = Sermon::limit(3)->get();

    return view('index',['events'=>$events,'sermons'=>$sermons]);
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/welfare', function () {
    return view('welfare');
})->name('welfare');

Route::get('/intp', function () {
    return view('intp');
})->name('intp');

Route::get('/event', 'EventController@index2')->name('event');
Route::get('/sermon', 'SermonController@index2')->name('sermon');
Route::get('/gallery', 'GalleryController@index2')->name('gal');

Route::get('/book/{key}', 'BookController@pptbook')->name('pptbook');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');




Auth::routes();

//logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin');
Route::resource('/sermons','SermonController');
Route::resource('/E-store','BookController');
Route::resource('/Events','EventController');
Route::get('/events/{keys}/edit','EventController@edit');
Route::resource('/Gallery','GalleryController');
Route::resource('prayer', 'PrayerPointController');
Route::get('/prayers','PrayerPointController@index2')->name('pray');

//paystack loader route

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay'); 
//Route::post('/payppt', 'PaymentController@redirectToGateway2')->name('payppt');

Route::post('/pays', 'PaymentController@pay')->name('pays');
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback')->name('call');
//magic function
Route::get('/E-books','BookController@vex')->name('view');
Route::resource('contact','ContactController');


Route::get('/download/{id}','BookController@download')->name('download');
Route::get('/downloads__/{id}','PrayerPointController@download')->name('downloadppt');
