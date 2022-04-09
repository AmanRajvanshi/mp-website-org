<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\PermissionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('login');
});
//Route For Password
Route::post('/auth', [AdminController::class, 'auth']);
Route::get('/password', [AdminController::class, 'index']);
Route::post('/change_password', [AdminController::class, 'change_password']);

Route::get('signout',function(){
    Session::flush();
    return redirect('/');
});

Route::middleware(['disable_back_btn'])->group(function () {
    Route::middleware(['admin_auth'])->group(function () {
    Route::get('index', [AdminController::class, 'index']);
    Route::get('employees', [AdminController::class, 'show']);
    Route::get('create-employee', [AdminController::class, 'create']);
    Route::post('addEmployee', [AdminController::class, 'store']);
    Route::get('edit-employee/{id}', [AdminController::class, 'edit']);
    Route::post('updateEmployee', [AdminController::class, 'update']);
    Route::get('delete-employee/{id}', [AdminController::class, 'destroy']);
    Route::get('cities', [AdminController::class, 'cities']);
    
    
    //Route For Admin Setup
    Route::get('add-setup',[SetupController::class,'index']);
    Route::post('addSlider',[SetupController::class,'addSlider']);
    Route::post('changesliderstatus',[SetupController::class,'changesliderstatus']);
    Route::post('addSponsorPosition',[SetupController::class,'addSponsorPosition']);
    Route::post('changesponsorstatus',[SetupController::class,'changesponsorstatus']);
    Route::post('addBanner',[SetupController::class,'addBanner']);
    Route::post('changebannerstatus',[SetupController::class,'changebannerstatus']);

    //Route For Vendor
    Route::get('vendors', [VendorController::class,'index']);
    Route::get('add-vendor', [VendorController::class,'create']);
    Route::post('addvendor', [VendorController::class,'store']);
    Route::get('edit-vendors/{id}', [VendorController::class,'edit']);
    Route::get('deletevendor/{id}', [VendorController::class,'destroy']);
    Route::POST('editvendor', [VendorController::class,'update']);
    Route::get('view-content/{id}', [VendorController::class,'view_content']);
    Route::get('delete_package/{id}', [VendorController::class,'delete_package']);
    Route::get('view-on-map/{id}',[VendorController::class,'view_on_map']);

    //Route For User
   
    Route::get('users', [UserController::class,'index']);
    Route::get('create-user', [UserController::class,'create']);
    Route::get('fetchcity', [UserController::class,'fetchcity']);
    Route::post('addUser', [UserController::class,'addUser']);
    Route::get('user-profile/{id}', [UserController::class,'user_profile']);
    Route::get('edit-user/{id}', [UserController::class,'edit']);
    Route::post('updateUser', [UserController::class,'update']);
    Route::get('delete-user/{id}', [UserController::class,'destroy']);
    Route::get('user_auth/{id}', [UserController::class,'user_auth']);

    //Route For Permission's
    
    
    Route::get('user_permission', [PermissionController::class,'useraccountwithpermission']);
    Route::get('user-permission/{id}', [PermissionController::class,'user_permission']);
    Route::post('addcheck',[PermissionController::class,'addcheck']);
    Route::post('editcheck',[PermissionController::class,'editcheck']);
    Route::post('deletecheck',[PermissionController::class,'deletecheck']);
    Route::post('viewcheck',[PermissionController::class,'viewcheck']);
    
    //Route For Feed
    Route::get('feeds',[FeedController::class,'index']);
    
    //Route For Lead
    Route::get('leads',[LeadController::class,'index']);

    //Route For Request
    Route::get('request',[RequestController::class,'index']);

    //Route For Category

    Route::get('category',[CategoryController::class,'index']);
    Route::get('create-category',[CategoryController::class,'create']);
    Route::post('addCategory',[CategoryController::class,'store']);
    Route::get('edit-category/{id}',[CategoryController::class,'edit']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);
    Route::post('editCategory',[CategoryController::class,'update']);

    

    // Route::view('index', 'index');
    // Route::view('index', 'index');


    // Route::view('view-on-map', 'view-on-map');
    // //Route::view('view-user', 'view-user');
    // Route::view('pricing','pricing');
    // Route::view('product','product');
    // Route::view('order','order');
    // Route::view('auth-login','auth-login');
    // Route::view('auth-sign-in','auth-sign-in');
    // Route::view('order-new','order-new');
    // Route::view('view-customer','view-customer');
    // Route::view('auth-recover-pwd','auth-recover-pwd');
    // Route::view('invoice','invoice');
    // Route::view('view-customer','view-customer');
    // Route::view('invoice-view','invoice-view');
    // Route::view('single-reported-feeds','single-reported-feeds');
    // Route::view('auth-recoverpw','auth-recoverpw');
    // Route::view('auth-login','auth-login');
    // Route::view('customer-add','customer-add');
    // Route::view('add-product','add-product');
    // Route::view('privacy-policy','privacy-policy');
    // Route::view('terms-of-service','terms-of-service');
    // Route::view('auth-sign-up','auth-sign-up');
    // Route::view('auth-remove-pwd','auth-remove-pwd');
    // Route::view('customer','customer');
    // Route::view('timeline','timeline');
    // Route::view('add-blocked-vendors','add-blocked-vendors');
    // Route::view('view-on-map', 'view-on-map');
    // Route::view('edit-blocked-vendors', 'edit-blocked-vendors');
    // Route::view('user-profile', 'user-profile');

    // Route::view('view-customer', 'view-customer');

    // // Route::view('edit-pending-verifications', 'edit-pending-verifications');
    // Route::view('feeds', 'feeds');
    // Route::view('cities', 'cities');
    // Route::view('leads', 'leads');
    // Route::view('request', 'request');
    
   
    // Route::view('add-active-vendors','add-active-vendors');
});
});