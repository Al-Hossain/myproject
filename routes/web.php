<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AddCarDetailsController;
use App\Http\Controllers\ManageCarDetailsController;
use App\Http\Controllers\AddCompanyController;
use App\Http\Controllers\ManageCompanyController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GeneralServicesController;
use App\Http\Controllers\QueriesController;



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

Route::get('/', function () {
    return view('master');
});
Route::get('/home',[HomeController::class,'Home']);
Route::get('/addcardetails',[AddCarDetailsController::class,'AddCarDetails']);
Route::get('/managecardetails',[ManageCarDetailsController::class,'ManageCarDetails']);
Route::get('/addcompany',[AddCompanyController::class,'AddCompany']);
Route::get('/managecompany',[ManageCompanyController::class,'ManageCompany']);
Route::get('/aboutus',[AboutUsController::class,'AboutUs']);
Route::get('/contactus',[ContactUsController::class,'ContactUs']);
Route::get('/generalservices',[GeneralServicesController::class,'GeneralServices']);
Route::get('/queries',[QueriesController::class,'Queries']);