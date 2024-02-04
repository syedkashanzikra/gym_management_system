<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\newslettercontroller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Home\Trainercontroller;
use App\Http\Controllers\Home\ServicesController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MemberController;

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

Route::get('/', function () {
    return view('user.home');
});


Route::get('/blogs', [BlogController::class,'index'])->name('blog.show');
 
Route::get('/blog/{id}', [BlogController::class,'singleblog'])->name('blog.single');
Route::get('/why', function () {
    return view('user.whyus');
});
Route::get('/contact', function () {
    return view('user.contact');
});
// Route::get('/trainer', function () {
//     return view('user.trainer');
// });
Route::get('/trainer',[Trainercontroller::class,'showtrainerstohome'])->name('trainershow_in_public');

// Route::get('/', function () {
//     return view('home');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
Route::get('/dashboard', [UserController::class,'index'])->name('dashboard');
Route::get('/dashboard/service/{id}', [UserController::class,'show'])->name('service.show');
Route::get('/dasboard/service/{id}', [UserController::class,'Serviceshow'])->name('service.fullshow');

});

Route::post('/insert', [contactController::class, 'addtoContact']);
Route::post('/storeinNewsletter', [NewsletterController::class, 'addtoNewsLetter'])->name('storeinNewsletter');



Route::get('records',[contactcontroller::class,('records')]);





Route::group(['prefix' => 'admin'], function () {
    Route::get('/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'Profile'])->name('admin.profile');
    Route::get('/edit/profile', [AdminController::class, 'EditProfile'])->name('edit.profile');
    Route::post('/store/profile', [AdminController::class, 'UpdateProfile'])->name('store.profile');
    //For Changing Password
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');
 //trainer Edit
 Route::get('/trainer/form',[Trainercontroller::class,'index'])->name('trainer.edit');
 Route::get('/trainer/download-pdf',[Trainercontroller::class,'GenerateTrainerPDF'])->name('trainer.pdf');
 Route::post('trainer/store', [Trainercontroller::class,'store'])->name('trainer.store');
 Route::get('/trainer/show',[Trainercontroller::class,'show'])->name('trainer.show');
 Route::get('/trainer/edit/{id}',[Trainercontroller::class,'edit'])->name('trainers.edit');
 Route::post('/trainer/update/{id}', [Trainercontroller::class, 'update'])->name('trainer.update');
 Route::delete('/trainer/delete/{id}', [Trainercontroller::class,'destroy'])->name('trainer.destroy');
 

 
 //services
 Route::get('/services/form',[ServicesController::class,'index'])->name('services.form');
 Route::get('/services/download-pdf',[ServicesController::class,'GenerateServicePDF'])->name('services.pdf');
 Route::post('services/store', [ServicesController::class,'store'])->name('services.store');
 Route::get('services/show', [ServicesController::class,'show'])->name('services.show');
 Route::get('services/edit/{id}', [ServicesController::class,'edit'])->name('service.edit');
 Route::post('service/update/{id}', [ServicesController::class,'update'])->name('service.update');
  Route::delete('service/delete/{id}', [ServicesController::class,'destroy'])->name('service.destroy');

  //contact and newsletter

  Route::get('/contact/show', [contactcontroller::class,'show'])->name('contact.show');
  Route::get('/contact/download-pdf', [contactcontroller::class,'GenerateContactPDF'])->name('contact.pdf');
  Route::delete('/contact/delete/{id}', [contactcontroller::class,'destroy'])->name('contact.destroy');
  Route::get('/newsletter/download-pdf',[newslettercontroller::class,'GenerateNewletterPDF'])->name('newsletter.pdf');
  Route::delete('/newsletter/delete/{id}', [newslettercontroller::class,'destroy'])->name('newsletter.destroy');
  Route::get('/newsletter/show', [newslettercontroller::class,'show'])->name('newsletter.show');


  //Blogging Work
  Route::get('/blog/add', [BlogController::class,'create'])->name('blog.form');
  Route::get('/blog/download-pdf', [BlogController::class,'GenerateBlogsPDF'])->name('blog.pdf');
  Route::post('/blog/store', [BlogController::class,'store'])->name('blog.store');
  Route::get('/blog/table', [BlogController::class,'show'])->name('blog.admin_show');
  Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
  Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
  Route::delete('/blog/delete/{id}', [BlogController::class,'destroy'])->name('blog.destroy');
  //Atendance Work
  
 Route::get('/trainer/attendance', [AttendanceController::class,'trainer_attendance'])->name('trainer.attendance');

  Route::get('/member/add', [MemberController::class,'index'])->name('member.add');   
  Route::post('/member/store', [MemberController::class,'store'])->name('member.store');   
  Route::get('/member/show', [MemberController::class,'show'])->name('member.show');   
  Route::delete('/member/delete/{id}', [MemberController::class,'destroy'])->name('member.destroy');   
  Route::get('/member/edit/{id}', [MemberController::class,'edit'])->name('member.edit');   
  Route::post('/member/update/{id}', [MemberController::class,'update'])->name('member.update'); 


  Route::get('/member/attendance', [AttendanceController::class,'memberattendance'])->name('member.attendance');

});





