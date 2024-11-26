<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ManagementController;


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
Route::middleware(['auth'])->group(function () {
    // Logout route
    Route::get('/logout',  [AuthController::class, 'logout']);
    Route::get('/dashboard', [AdminController::class, 'indexAdmin'])->name('admin.index');


    //Konsumen
    Route::get('/konsumen', [AdminController::class, 'indexKonsumen'])->name('admin.konsumen');
    Route::get('/createKonsumen', [AdminController::class, 'createKonsumen'])->name('admin.createKonsumen');
    Route::post('/storeKonsumen', [adminController::class, 'storeKonsumen'])->name('admin.storeKonsumen');
    Route::delete('/deleteKonsumen', [AdminController::class, 'destroyKonsumen'])->name('admin.deleteKonsumen');

    //Penawaran
    Route::get('/penawaran', [AdminController::class, 'indexPenawaran'])->name('admin.penawaran');
    Route::get('/createPenawaran', [AdminController::class, 'createPenawaran'])->name('admin.createPenawaran');
    Route::post('/storePenawaran', [adminController::class, 'storePenawaran'])->name('admin.storePenawaran');
    Route::delete('/deletePenawaran', [AdminController::class, 'destroyPenawaran'])->name('admin.deletePenawaran');

    //Agent
    Route::get('/agent', [AdminController::class, 'indexAgent'])->name('admin.agent');
    Route::get('/showAgent', [AdminController::class, 'showAgent'])->name('admin.showAgent');
    Route::get('/createAgent', [AdminController::class, 'createAgent'])->name('admin.createAgent');
    Route::post('/storeAgent', [adminController::class, 'storeAgent'])->name('admin.storeAgent');
    Route::get('/agent/{id}/', [AdminController::class, 'editAgent'])->name('admin.editAgent');
    Route::put('/agent/update/{id}', [AdminController::class, 'updateAgent'])->name('admin.updateAgent');
    Route::delete('/deleteAgent', [AdminController::class, 'destroyAgent'])->name('admin.deleteAgent');

    //Report
    Route::get('/report', [AdminController::class, 'indexReport'])->name('admin.report');
    Route::get('/showReport', [AdminController::class, 'createReport'])->name('admin.createReport');
    Route::get('/createReport', [adminController::class, 'createReport'])->name('admin.createReport');
    Route::post('/storeReport', [adminController::class, 'storeReport'])->name('admin.storeReport');
    Route::get('/reportKonsumen/{id}', [AdminController::class, 'getKonsumen']);
    Route::get('/report/{id}/', [AdminController::class, 'editReport'])->name('admin.editReport');
    Route::put('/report/update/{id}', [AdminController::class, 'updateReport'])->name('admin.updateReport');
    Route::post('/addReports/{id}', [AdminController::class, 'addReports']);
    Route::post('/reports/add/{id}', [AdminController::class, 'addedReports'])->name('admin.addReport');
    Route::delete('/deleteReport', [AdminController::class, 'destroyReport'])->name('admin.deleteReport');

    // Export Excel
    Route::post('/exportData', [AdminController::class, 'exportToExcel']);
    Route::post('/exportReport', [AdminController::class, 'exportReport']);
    Route::get('report/export/excel', [AdminController::class, 'exportReport'])->name('report.export.excel');

    Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
        Route::get('/perumahan', [AdminController::class, 'indexPerumahan'])->name('admin.perumahan');
        Route::get('/showPerumahan', [AdminController::class, 'showPerumahan'])->name('admin.showPerumahan');
        Route::get('/createPerumahan', [AdminController::class, 'createPerumahan'])->name('admin.createPerumahan');
        Route::post('/storePerumahan', [adminController::class, 'storePerumahan'])->name('admin.storePerumahan');
        Route::get('/perumahan/{id}/', [AdminController::class, 'editPerumahan'])->name('admin.editPerumahan');
        Route::put('/perumahan/update/{id}', [AdminController::class, 'updatePerumahan'])->name('admin.updatePerumahan');
        Route::delete('/deletePerumahan', [AdminController::class, 'destroyPerumahan'])->name('admin.deletePerumahan');

        Route::get('/rumah', [AdminController::class, 'indexRumah'])->name('admin.rumah');
        Route::get('/showRumah', [AdminController::class, 'showRumah'])->name('admin.showRuma');
        Route::get('/createRumah', [AdminController::class, 'createRumah'])->name('admin.createRumah');
        Route::post('/storeRumah', [adminController::class, 'storeRumah'])->name('admin.storeRumah');
        Route::get('/rumah/{id}/', [AdminController::class, 'editRumah'])->name('admin.editRumah');
        Route::put('/rumah/update/{id}', [AdminController::class, 'updateRumah'])->name('admin.updateRumah');
        Route::delete('/deleteRumah ', [AdminController::class, 'destroyRumah'])->name('admin.deleteRumah');
    });

});
// Route::prefix('/admin')->middleware(['auth', 'verified', 'admin'])->group(function(){
    // Route::get('/dashboard', [AdminController::class, 'indexAdmin'])->name('admin.index');


//     Route::get('/checkSlugArticle', [AdminController::class, 'checkSlugArticle']);
//     Route::get('/checkSlugName', [AdminController::class, 'checkSlugName']);
//     Route::get('/checkSlugTitle', [AdminController::class, 'checkSlugTitle']);
// });

Route::get('/loginUser', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/loginUser', [AuthController::class, 'authenticate']);

// require __DIR__.'/auth.php';

Route::middleware('log.visits')->group(function(){
    Route::get('/', [LandingController::class, 'index'])->name('dashboard');
    Route::get('/perumahan/{kota}', [LandingController::class, 'getPerumahanByKota']);
    Route::get('/about', [LandingController::class, 'about'])->name('about');
    // Route::get('/project', [LandingController::class, 'project'])->name('project');
    Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
    Route::get('/showProject/{kota}', [LandingController::class, 'showProject'])->name('showProject');
    Route::get('/form/{id}', [LandingController::class, 'form'])->name('landingpage.form');
    Route::get('/form-download/{id}', [LandingController::class, 'download'])->name('download.form');
    Route::post('/form-create/{id}', [LandingController::class, 'storeKonsumen'])->name('form.konsumen');

    Route::get('/formPenawaran/{id}', [LandingController::class, 'formPenawaran'])->name('landingpage.formPenawaran');
    // Route::post('/form-createPenawaran/{id}', [LandingController::class, 'storePenawaranKonsumen'])->name('form.penawaran');
    Route::post('/storePenawaran', [LandingController::class, 'storePenawaranKonsumen'])->name('form.penawaran');
    //
    Route::get('/showPerumahan/{id}', [LandingController::class, 'showPerumahan'])->name('landingpage.showPerumahan');

    Route::get('/download-brosur/{id}', [LandingController::class, 'downloadBrosur'])->name('download.brosur');
    Route::get('/download-pricelist/{id}', [LandingController::class, 'downloadPricelist'])->name('download.pricelist');

    // Route::get('/checkSlug', [MessageController::class, 'checkSlug']);


    Route::get('/pages/{page}', [LandingController::class, 'show']);
    Route::get('/download/{slug}', [EbookController::class, 'download'])->name('download');

    Route::get('/learner-profile', function() {
        return view('client.component.landing.menuComponent.profile');
    });
    Route::get('/curriculum', function() {
        return view('client.component.landing.menuComponent.curriculum');
    });
});
