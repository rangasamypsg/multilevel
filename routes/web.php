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

use App\User;
use Illuminate\Support\Collection; 

Route::get('/', function () {

    //dd(User::all());

   /* $users = User::all();
    
   $records = array();

   $records = $users->map(function ($item, $key) {        
        $data['name'] = $item['name'];
        $data['phone'] = $item['phone'];
        return $data;
        
    })->groupBy('name');

           
    echo "<pre>";
    print_r($records);
    exit;
    
    foreach ($records as $key => $record) {
            
        echo "<pre>";
        print_r($record);
        exit;
    
    }

    echo "<pre>";
    print_r($records);
    exit; */


    return view('auth.login');
});

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=> ['auth','admin']], function(){

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

 