<?php
use App\Http\Controllers\IndexController;
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

Route::get('/',  [IndexController::class, 'index'])->name('index');
Route::get('/rent',  [IndexController::class, 'rent'])->name('rent');
Route::get('/ajax/popup-block/',  [IndexController::class, 'blockrentid'])->name('blockrentid');

Route::get('/del',  [IndexController::class, 'deletegallery'])->name('deletegallery');

Route::get('/sale',  [IndexController::class, 'sale'])->name('sale');
Route::get('/about',  [IndexController::class, 'about'])->name('about');
Route::get('/contacts',  [IndexController::class, 'contacts'])->name('contacts');
Route::get('/gallery',  [IndexController::class, 'gallery'])->name('gallery');
Route::post('/gallery',  [IndexController::class, 'gallery'])->name('gallery');

Route::get('/politica',  [IndexController::class, 'politika'])->name('politika');
Route::get('/usersogl',  [IndexController::class, 'usersogl'])->name('usersogl');
Route::get('/privacy-policy',  [IndexController::class, 'privacyPolicy'])->name('usersogl');

Route::get('/myprofile',  [IndexController::class, 'myprofile'])->name('myprofile');
Route::post('/myprofile',  [IndexController::class, 'myprofile'])->name('myprofile');

Route::get('/ajax/send-mail',  [IndexController::class, 'senadmail'])->name('senadmail');



Route::get('/block/rent/{id}',  [IndexController::class, 'blockrentfromid'])->name('blockrentfromid');
Route::get('/block/sale/{id}',  [IndexController::class, 'blockrentfromid'])->name('blockrentfromid');

// ----- Admin panel ----- //

Route::get('/logout',  [IndexController::class, 'logout'])->name('logout');

Route::get('/adminpanel',  [IndexController::class, 'adminpanel'])->name('adminpanel');

Route::get('/plosh1',  [IndexController::class, 'plosh1'])->name('plosh1');
Route::get('/plosh2',  [IndexController::class, 'plosh2'])->name('plosh2');
Route::get('/plosh3',  [IndexController::class, 'plosh3'])->name('plosh3');
Route::post('/plosh3',  [IndexController::class, 'plosh3'])->name('plosh3');

Route::get('/addprom',  [IndexController::class, 'addprom'])->name('addprom');
Route::post('/addprom',  [IndexController::class, 'addprom'])->name('addprom');

Route::get('/adminpanel/login',  [IndexController::class, 'adminlogin'])->name('adminlogin');
Route::post('/adminpanel/login',  [IndexController::class, 'adminlogin'])->name('adminlogin');

Route::get('/ajax/addcheck',  [IndexController::class, 'ajaxaddcheck'])->name('ajaxaddcheck');
Route::get('/ajax/addcheck1',  [IndexController::class, 'ajaxaddcheck1'])->name('ajaxaddcheck1');
Route::get('/ajax/addcheck2',  [IndexController::class, 'ajaxaddcheck2'])->name('ajaxaddcheck2');

Route::get('/ajax/addcheck3',  [IndexController::class, 'ajaxaddcheck3'])->name('ajaxaddcheck3');
