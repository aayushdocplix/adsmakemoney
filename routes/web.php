<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\sponsor\GenealogyController;
use App\Http\Controllers\sponsor\PinRequestController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\BankController;
use App\Http\Controllers\admin\PinsGenerateController;
use App\Http\Controllers\admin\CustomAdsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\admin\YoutubeVideosController;
use App\Http\Controllers\HomeController;
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

/*
|----------------------------------------------------------------------
| Admin Login Routes
|----------------------------------------------------------------------
*/

Auth::routes();

Route::middleware(['auth'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::any('/genealogy',[GenealogyController::class, 'viewGenelogy']);
Route::any('/packages',[PackageController::class, 'viewPackages']);
Route::any('/generate-pins',[PinsGenerateController::class, 'genaratePins']);
Route::any('/generate-pins/list',[PinsGenerateController::class, 'genaratePinsList']);
Route::any('/banks',[BankController::class, 'viewBanks']);
Route::any('/pin-request',[PinRequestController::class, 'viewPinRequest']);
Route::any('/pin-request/create',[PinRequestController::class, 'createPinRequest']);
Route::any('/youtube-videos',[YoutubeVideosController::class, 'youtubeVideos']);
Route::any('/youtube/channels',[YoutubeVideosController::class, 'youtubeChannels']);
Route::any('/home',[HomeController::class, 'homeView']);
Route::any('/transfer-pins',[PinsGenerateController::class, 'transferPins'])->name('transfer-pins');
Route::any('/requested-pins',[PinRequestController::class, 'requestedPins'])->name('requested-pins');
Route::any('/requested-pins-action',[PinRequestController::class, 'requestedPinsAction'])->name('requested-pins-action');


Route::any('/custom-ads',[CustomAdsController::class, 'CustomAds']);
Route::any('/custom-ads/edit/{id}',[CustomAdsController::class, 'editCustomAds']);
Route::any('/custom-ads/update/{id}',[CustomAdsController::class, 'updateCustomAds']);
Route::any('/custom-ads/delete/{id}',[CustomAdsController::class, 'deleteCustomAds']);

Route::any('/users',[UserController::class, 'usersList']);
Route::any('/users/{id}',[UserController::class, 'subUsersList']);
});


Route::get('/', [LoginController::class, 'showLoginForm']);
