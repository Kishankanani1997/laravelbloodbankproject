<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Routing for user side 
use App\Http\Controllers\UserFacilityController;
use App\Http\Controllers\UserFindBloodBankController;
use App\Http\Controllers\UserManageDonorController;
use App\Http\Controllers\UserAboutUsController;
use App\Http\Controllers\UserContactUsController;
use App\Http\Controllers\UserFindDonorController;
use App\Http\Controllers\GetInTouchController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\TermsOfUseController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\PrivacyPolicyController;

use App\Http\Controllers\AddBloodBankController;
use App\Http\Controllers\AddBloodCampController;



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
    return view('user.content');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/manageuser', function () {
    return view('manageuser');
})->middleware(['auth', 'verified'])->name('manageuser');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



//Routing for USerside
Route::Get('/Our-Facility',[UserFacilityController::class,'index']);
// Route::Get('/FindBlood-Bank',[UserFindBloodBankController::class,'index']);
Route::Get('/Manage-Donor',[UserManageDonorController::class,'index']);
Route::Get('/About-Us',[UserAboutUsController::class,'index']);
Route::Get('/Contact-Us',[UserContactUsController::class,'index']);

Route::Get('/RegisterAs-ADonor',[UserFindDonorController::class,'index']);
Route::Post('/RegisterAs-ADonor',[UserFindDonorController::class,'store']);
Route::get('/managedonor',[UserFindDonorController::class,'show']);
Route::get('/delete1/{id}',[UserFindDonorController::class,'destroy']);

Route::Get('/Getin-Touch',[GetInTouchController::class,'index']);
Route::post('/Getin-Touch',[GetInTouchController::class,'store']);
Route::get('/manageuser',[GetInTouchController::class,'show']);
Route::get('/delete/{id}',[GetInTouchController::class,'destroy']);

Route::Get('/Terms',[TermsController::class,'index']);
Route::Get('/Termsof-Use',[TermsOfUseController::class,'index']);
Route::Get('/Privacy',[PrivacyPolicyController::class,'index']);
Route::Get('/Disclaimer',[DisclaimerController::class,'index']);

Route::get('/Addbloodbank',[AddBloodBankController::class,'index']);
Route::post('/Addbloodbank',[AddBloodBankController::class,'store']);
Route::get('/managebloodbank',[AddBloodBankController::class,'show']);

route::get('/Addbloodcamp',[AddBloodCampController::class,'index']);
Route::post('/Addbloodcamp',[AddBloodCampController::class,'store']);
Route::get('/managebloodcamp',[AddBloodCampController::class,'show']);




