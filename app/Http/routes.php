<?php

use App\Models\Location\Area;
use App\Models\Location\Meta;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('admin.tables.table');
});


Route::auth();

$this->get('password/reset/{token?}', array('middleware' => 'delog', 'uses' => 'Auth\PasswordController@showResetForm'));

//Social Login
Route::get('/login/{provider?}', [
    'uses' => 'Auth\SocialAuthController@getSocialAuth',
    'as' => 'auth.getSocialAuth'
]);
Route::get('/login/callback/{provider?}', [
    'uses' => 'Auth\SocialAuthController@getSocialAuthCallback',
    'as' => 'auth.getSocialAuthCallback'
]);
//social auth end
//email verification 
Route::get('/verify', 'Auth\EmailVerificationController@sendVerification');
Route::get('/verify/confirm/{token}', 'Auth\EmailVerificationController@confirmEmail');
//email verification  end


Route::get('/home', 'HomeController@index');
Route::resource('/admin/dashboard', 'Admin\Dashboard');
Route::resource('/admin/crud/area', 'Admin\Crud\AreaController');


Route::get('test', function() {
  //  return view('home');
//   $area = new Area(); 
//   $area->name = "wos6a";
//   $area->save();
//   return $area;
//   
//   $area = Area::first();
//    $city = new City();
//    $city->name="nusairat";
//    $city->Area()->associate($area);
//    $city->save();
//    return $area;
////    
//    $area = Area::first();
//    $city = City::first();
//    $nb = new Neighborhood();
//    $nb->City()->associate($city);
//    $nb->save();
//    return $area;
//    
//     $area = Area::first();
//    $city = $area->cities()->first();
//    $nb = $city->neighborhoods()->first();
//    $st = new Street();
//    $st->name="abu sarrar";
//    $st->neighborhood()->associate($nb);
//    $st->save();
//    print_r($area);
//    $area = Area::first();
//    $city = $area->cities()->first();
//
//    dd($city->neighborhoods()->get());
//    dd($city->streets()->get());
//    $area = Area::first();
//    $meta = new Meta();
//    $meta->population = 100000;
//    $area->Meta()->save($meta);
//    return $area->Meta;

//    $area = Area::first();
//    $city = $area->cities()->first();
//    $nb = $city->neighborhoods()->first();
//    $st = $city->streets()->first();
//    $meta = new Meta();
//    $meta->population = 100000;
//    $st->Meta()->save($meta);
//    dd($area) ;
    
    
});
