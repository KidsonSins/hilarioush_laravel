<?php
//backend routes
Route::get('admin', ['middleware'=>'isLoggedIn', function (){
        $info = \App\Schoolinfo::findOrFail(1);
        $users = \App\User::all();
        $events = \App\Event::all();
        $principal_message = \App\PrincipalMessage::findOrFail(1);
        return view('backend.dashboard', compact('info', 'events', 'users','principal_message'));
}]);

Route::auth();
Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'isLoggedIn'], function (){
    Route::resource('admin/users', 'AdminUsersController');
    Route::resource('admin/events', 'AdminEventsController');
    Route::resource('admin/downloads', 'AdminDownloadsController');
    Route::resource('admin/galleryimage', 'AdminGalleryimageController');
    Route::resource('schoolinfo', 'SchoolInfosController');
    Route::resource('principalmessage', 'PrincipalmessageController');
});



//frontend routes
Route::get('/', function () {
    $carouselimages = \App\Galleryimage::orderBy('id', 'desc')->take(3)->get();
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::orderBy('id', 'desc')->take(5)->get();
    $downloads = \App\Download::orderBy('id', 'desc')->take(5)->get();
    $principal_message = \App\PrincipalMessage::findOrFail(1);
    return view('frontend.index', compact('info', 'events', 'principal_message', 'downloads', 'carouselimages'));
});

Route::get('/about', function (){
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::orderBy('id', 'desc')->take(5)->get();
    $events = $events->reverse();
    return view('frontend.about', compact('info', 'events'));
})->name('about_page');

Route::get('/gallery', function (){
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::all();
    $galleryimages = \App\Galleryimage::orderBy('id', 'desc')->get();
    return view('frontend.gallery', compact('info', 'events', 'galleryimages'));
})->name('gallery_page');

Route::get('/news', function (){
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::all();
    return view('frontend.news', compact('info', 'events'));
})->name('news_page');

Route::get('/contact', function (){
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::all();
    $galleryimages = \App\Galleryimage::orderBy('id', 'desc')->get();
    return view('frontend.contact', compact('info', 'events', 'galleryimages'));
})->name('contact_page');

Route::get('/news/{id}', function ($id){
    $info = \App\Schoolinfo::findOrFail(1);
    $events = \App\Event::all();
    $event = \App\Event::findOrFail($id);
    return view('frontend.news_detail', compact('event', 'events', 'info'));
})->name('event-detail');