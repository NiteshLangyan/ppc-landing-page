<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::any('/',[Homecontroller::class, 'index']); 
Route::any('/term-conditions',[Homecontroller::class, 'termconditions']); 
Route::any('/privacy-policy',[Homecontroller::class, 'privacypolicy']); 
Route::any('/contact',[Homecontroller::class, 'contact']); 

Route::any('/admin',[AdminController::class, 'login'])->middleware('adminloginchecknot');
Route::group(['prefix'=>'/adm','middleware'=>['adminlogincheck']],function(){
Route::any('/contact',[AdminController::class, 'contact']);
Route::any('/contact/delete/{id}',[AdminController::class, 'contactdelete']);
Route::get('/', function () {  return redirect()->to('admin');  });
Route::any('/dashboard',[AdminController::class, 'dash']);

Route::any('/homesectiononeadd', [AdminController::class, 'homesectiononeadd']);
Route::any('/homesectiontwoadd', [AdminController::class, 'homesectiontwoadd']);

//|--------------------------------------------------------------------------
Route::any('/allslider',[AdminController::class, 'allslider']);
Route::any('/slider',[AdminController::class, 'slider']);
Route::any('/slider/{id}',[AdminController::class, 'editslider']);
Route::any('/sliderdel/{id}',[AdminController::class, 'sliderdel']);
//|--------------------------------------------------------------------------
Route::any('/allselectboxsone',[AdminController::class, 'allselectboxsone']);
Route::any('/selectboxsone',[AdminController::class, 'selectboxsone']);
Route::any('/selectboxsone/{id}',[AdminController::class, 'editselectboxsone']);
Route::any('/selectboxsonedel/{id}',[AdminController::class, 'selectboxsonedel']);
//|--------------------------------------------------------------------------
Route::any('/allselectboxstwo',[AdminController::class, 'allselectboxstwo']);
Route::any('/selectboxstwo',[AdminController::class, 'selectboxstwo']);
Route::any('/selectboxstwo/{id}',[AdminController::class, 'editselectboxstwo']);
Route::any('/selectboxstwodel/{id}',[AdminController::class, 'selectboxstwodel']);
//|--------------------------------------------------------------------------
Route::any('/allselectboxsthree',[AdminController::class, 'allselectboxsthree']);
Route::any('/selectboxsthree',[AdminController::class, 'selectboxsthree']);
Route::any('/selectboxsthree/{id}',[AdminController::class, 'editselectboxsthree']);
Route::any('/selectboxsthreedel/{id}',[AdminController::class, 'selectboxsthreedel']);
//|--------------------------------------------------------------------------
Route::any('/serviceoffered', [AdminController::class, 'serviceoffered']);
Route::any('/sectionfive', [AdminController::class, 'sectionfive']);
Route::any('/sectionsix', [AdminController::class, 'sectionsix']);
Route::any('/initialInvestment', [AdminController::class, 'initialInvestment']);
Route::any('/contactuscontent', [AdminController::class, 'contactuscontent']);
//-------------------------------------------------------------------------------------
Route::any('/allfaqs',[AdminController::class, 'allfaqs']);
Route::any('/faqs',[AdminController::class, 'faqs']);
Route::any('/faqs/{id}',[AdminController::class, 'editfaqs']);
Route::any('/faqsdel/{id}',[AdminController::class, 'faqsdel']);

Route::any('/faqfeatured', [AdminController::class, 'faqfeatured']);




// Route::get('/dashboard', function () {  return redirect()->to('adm/alllinks');  });
//|--------------------------------------------------------------------------
Route::any('/changepassword',[AdminController::class, 'changepassword']); 
//|--------------------------------------------------------------------------
Route::any('/socials',[AdminController::class, 'social']);
//|--------------------------------------------------------------------------
Route::any('/footercontent',[AdminController::class, 'footeradd']);
//|--------------------------------------------------------------------------
Route::any('/headercontent',[AdminController::class, 'headeradd']); 
//|--------------------------------------------------------------------------
Route::any('/setting',[AdminController::class, 'setting']);
//|--------------------------------------------------------------------------
Route::any('/logout',[AdminController::class, 'logout']);

Route::any('/termconditions',[AdminController::class, 'termconditions']);
Route::any('/privacypolicy',[AdminController::class, 'privacypolicy']); 
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
