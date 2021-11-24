<?php
//-----------------------------Admin
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChangeStatus;
use App\Http\Controllers\Admin\CrudAndRouteController;
use App\Http\Controllers\Admin\AdminEditController;
use App\Http\Controllers\Admin\EntrData;
use App\Http\Controllers\Admin\GeneralController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\SubCategoryController;
//-----------------------------End Admin

//-----------------------------User
use App\Http\Controllers\User\AddController;
use App\Http\Controllers\User\EditController;
use App\Http\Controllers\User\ViewController;
//-----------------------------End User


//----------------------------- system
include(app_path().'/Providers/system/start.php');

//----------------------------- Sitemaps
include(app_path().'/Providers/system/sitemap.php');

//----------------------------- Auth - User - dashboard
Route::middleware(['auth:sanctum', 'verified', 'page-cache'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//-----------------------------Language change 
Route::get('lang/{lang}', function($lang) {
  \Session::put('lang', $lang);
  return \Redirect::back();
})->middleware('web')->name('change_lang');

//----------------------------- path  /  to user profile
Route::middleware('page-cache')->get('/', function () { return redirect('/user/profile'); });

//----------------------------- Home Page
Route::middleware('page-cache')->get('/home/{lang}', function () { return view('home'); });

//----------------------------- Help Page
Route::middleware('page-cache')->get('/help/{lang}', function () { return view('help'); });

//----------------------------- User page
Route::middleware('page-cache')->get('/user/{id}/{lang}', [ViewController::class, 'user']);

//----------------------------- User New verif
Route::post('/user/verif', [AddController::class, 'verif']);


//----------------------------- User Edit - update
foreach ($route_user_edit as $url=>$name) { 
    Route::post('/'.$url.'/{id}', [EditController::class, ''.$name.'']);
}

//user feedbacks
Route::post('/add/GEL', [GeneralController::class, 'GEL_add'])->name('GEL-add');


//----------------------------- Admin
if(str_contains(url()->current(), '/admin/')){
 Route::group(array('prefix' => '/admin'), function(){ 
  //----------------------------- system  
  include(app_path().'/Providers/system/start.php');

    //----------------------------- routes
    foreach ($get_routes as $route) { 
        if($route->for=="Admin"){
        Route::middleware('page-cache')->get('/'.$route->name.'', function () { return view('path/admin'); })->middleware('admin');
        }
    }
 
    //----------------------------- general - add & edit & delete 
    foreach ($general_admin as $name) {  
        Route::post('/add/'.$name.'', [GeneralController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [GeneralController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [GeneralController::class, ''.$name.'_delete'])->middleware('admin');
    }
    //----------------------------- Language - add & edit & delete 
    foreach ($lang_admin as $name) {  
        Route::post('/add/'.$name.'', [LanguageController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [LanguageController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [LanguageController::class, ''.$name.'_delete'])->middleware('admin');
    }
    //----------------------------- categorys - add & edit & delete 
    foreach ($category_admin as $name) {  
        Route::post('/add/'.$name.'', [CategoryController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [CategoryController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [CategoryController::class, ''.$name.'_delete'])->middleware('admin');
    }
    //----------------------------- route and Card - add & edit & delete 
    foreach ($routeCard_admin as $name) {  
        Route::post('/add/'.$name.'', [CrudAndRouteController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [CrudAndRouteController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [CrudAndRouteController::class, ''.$name.'_delete'])->middleware('admin');
    }
    //----------------------------- subcategorys - add & edit & delete 
    foreach ($subcategory_admin as $name) {  
        Route::post('/add/'.$name.'', [SubCategoryController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [SubCategoryController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [SubCategoryController::class, ''.$name.'_delete'])->middleware('admin');
    }
    //----------------------------- plans - add & edit & delete 
    foreach ($plan_admin as $name) {  
        Route::post('/add/'.$name.'', [PlanController::class, ''.$name.'_add'])->name(''.$name.'-add')->middleware('admin');
        Route::post('/'.$name.'/edit/{id}', [PlanController::class, ''.$name.'_edit'])->middleware('admin');
        Route::get('/'.$name.'/delete/{id}', [PlanController::class, ''.$name.'_delete'])->middleware('admin');
    }

    //----------------------------- new icon svg 
    Route::post('/add/svg', [LanguageController::class, 'icon_svg'])->name('svg-add')->middleware('admin');
    Route::post('/svg/edit/{id}', [LanguageController::class, 'edit_icon_svg'])->middleware('admin');

    //----------------------------- root edit 
    foreach ($admin_bic as $name =>$con) { 
        Route::post('/'.$name.'', [AdminEditController::class, ''.$con.''])->middleware('admin');
    }
    Route::post('/url/full', [AdminEditController::class, 'full'])->middleware('admin');

    //----------------------------- change status
    foreach ($plus_admin_status as $name) { 
        Route::post('/change/status/'.$name.'/{id}', [ChangeStatus::class, 'status_'.$name.''])->middleware('admin');
    }

    //----------------------------- change status
    Route::middleware('page-cache')->get('/panel', [PanelController::class, 'adminPanel'])->middleware('admin');

    //----------------------------- admin edit user
    Route::post('/edit/user/{id}', [AdminEditController::class, 'edit_user'])->middleware('admin');

    //----------------------------- activation theme
    Route::post('/activation/theme/{id}', [ChangeStatus::class, 'theme_activation'])->middleware('admin');

    //----------------------------- start
    //Route::middleware('page-cache')->get('/start', function () { return view('path/start'); })->middleware('admin');

    //----------------------------- enter route
    //Route::get('/enter/route', [EntrData::class, 'enter_route'])->middleware('admin');

 });
}