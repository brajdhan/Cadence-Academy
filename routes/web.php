<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('fashion-designing-course',[HomeController::class,'fashionDesigningCourse'])->name('fashion-designing-course');
Route::get('interior-designing-course',[HomeController::class,'interiorDesigningCourse'])->name('interior-designing-course');
Route::get('our-activities',[HomeController::class,'ourActivities'])->name('our-activities');
Route::get('gallery',[HomeController::class,'gallery'])->name('gallery');
Route::get('events',[HomeController::class,'events'])->name('events');
Route::get('placements',[HomeController::class,'placements'])->name('placements');
Route::get('contact-us',[HomeController::class,'contactUs'])->name('contact-us');
Route::get('online-admission',[HomeController::class,'onlineAdmission'])->name('online-admission');


Route::post('course-enq',[HomeController::class,'courseEnq'])->name('course-enq');
Route::post('contact',[HomeController::class,'StoreContact'])->name('contact');
Route::post('admission',[HomeController::class,'admission'])->name('admission');

// admin
Route::get('admin/contacts', [AdminController::class,'contactInfo'])->name('admin.contacts');
Route::get('admin/course-enquiry', [AdminController::class,'courseEnquiry'])->name('admin.course');
Route::get('admin/gallery', [AdminController::class,'gallery'])->name('admin.gallery');
Route::get('admin/admissions', [AdminController::class,'admissions'])->name('admin.admissions');
Route::get('admin/add-image', [AdminController::class,'showAddImage'])->name('admin.add-image');
Route::post('admin/image-upload', [AdminController::class,'upload'])->name('admin.image-upload');
Route::post('admin/image-update/{id}', [AdminController::class,'update'])->name('admin.image-update');
Route::get('admin/edit-image/{id}', [AdminController::class,'edit'])->name('admin.edit-image');
Route::get('admin/delete/{id}', [AdminController::class,'delete'])->name('admin.delete');







