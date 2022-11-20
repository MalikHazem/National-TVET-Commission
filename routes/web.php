<?php

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

///// USERS PAGE /////
///// HOME PAGE /////
Auth::routes();

Route::get('/قيد التطوير', function () {
    return view('error_panel');
});

Route::get('/قيد التطوير صفحة الادمن', function () {
    return view('errorAdminPanel');
});

Route::get('/الهيئة', [App\Http\Controllers\Homecontroller::class, 'index']);

Route::get('/الهيئة/advertisements/{id}', [App\Http\Controllers\Homecontroller::class, 'Read_More']);

Route::get('/الهيئة/news/{id}', [App\Http\Controllers\Homecontroller::class, 'News']);

Route::post('/الهيئة/message', [App\Http\Controllers\Homecontroller::class, 'message']);

///// ABOUT-US PAGE /////
Route::get('/الهيئة/About_us/كلمة ترحبية', [App\Http\Controllers\AboutControllers::class, 'indexabout']);

Route::get('/الهيئة/About_us/Foundation', [App\Http\Controllers\AboutControllers::class, 'indexFoundation']);

Route::get('/الهيئة/About_us/VisionandMessage', [App\Http\Controllers\AboutControllers::class, 'indexVision']);

Route::get('/الهيئة/About_us/Objectives', [App\Http\Controllers\AboutControllers::class, 'indexObjectives']);

Route::get('/الهيئة/About_us/News', [App\Http\Controllers\Homecontroller::class, 'newspanel']);

Route::get('/الهيئة/About_us/Advertisements', [App\Http\Controllers\Homecontroller::class, 'advpanel']);

Route::get('/الهيئة/About_us/الهيكيلة', function () {
    return view('Users_Panel.aboutus.page4');
});

Route::get('/الهيئة/About_us/Laws', [App\Http\Controllers\AboutControllers::class, 'indexLaws']);

Route::get('/الهيئة/About_us/الاستراتيجيات', function () {
    return view('Users_Panel.aboutus.page6');
});

                                    ///// Project /////
Route::get('/الهيئة/Projects', [App\Http\Controllers\ProjectController::class, 'indexProject']);

                                    ///// Training /////
Route::get('الهيئة/Training', [App\Http\Controllers\EducationController::class, 'indexTraining']);

                                    ///// School /////
Route::get('الهيئة/School', [App\Http\Controllers\EducationController::class, 'indexSchool']);

                                    ///// Universitie /////
Route::get('الهيئة/Universitie', [App\Http\Controllers\EducationController::class, 'indexUniversitie']);


///// ADMIN PAGE /////
                                    ///// Users PAGE /////
Route::get('/users', [App\Http\Controllers\AdminControllers::class, 'index'])->middleware('auth');
Route::get('/users/add', [App\Http\Controllers\AdminControllers::class, 'create'])->middleware('auth');
Route::post('/users/store', [App\Http\Controllers\AdminControllers::class, 'store'])->middleware('auth');
Route::get('/users/edit/{id}', [App\Http\Controllers\AdminControllers::class, 'edit'])->middleware('auth');
Route::post('/users/update/{id}', [App\Http\Controllers\AdminControllers::class, 'update'])->middleware('auth');
Route::get('/users/destroy/{id}', [App\Http\Controllers\AdminControllers::class, 'destroy'])->middleware('auth');

                                    ///// Advertisement /////home
Route::get('/home', [App\Http\Controllers\AdvControllers::class, 'index'])->middleware('auth');
Route::get('/Advertisement', [App\Http\Controllers\AdvControllers::class, 'index'])->middleware('auth');
Route::get('/Advertisement/add', [App\Http\Controllers\AdvControllers::class, 'create'])->middleware('auth');
Route::post('/Advertisement/store', [App\Http\Controllers\AdvControllers::class, 'store'])->middleware('auth');
Route::get('/Advertisement/edit/{id}', [App\Http\Controllers\AdvControllers::class, 'edit'])->middleware('auth');
Route::post('/Advertisement/update/{id}', [App\Http\Controllers\AdvControllers::class, 'update'])->middleware('auth');
Route::get('/Advertisement/destroy/{id}', [App\Http\Controllers\AdvControllers::class, 'destroy'])->middleware('auth');

                                    ///// News /////
Route::get('/News', [App\Http\Controllers\NewsControllers::class, 'index'])->middleware('auth');
Route::get('/News/add', [App\Http\Controllers\NewsControllers::class, 'create'])->middleware('auth');
Route::post('/News/store', [App\Http\Controllers\NewsControllers::class, 'store'])->middleware('auth');
Route::get('/News/edit/{id}', [App\Http\Controllers\NewsControllers::class, 'edit'])->middleware('auth');
Route::post('/News/update/{id}', [App\Http\Controllers\NewsControllers::class, 'update'])->middleware('auth');
Route::get('/News/destroy/{id}', [App\Http\Controllers\NewsControllers::class, 'destroy'])->middleware('auth');

                                    ///// Queries /////
Route::get('/Queries', [App\Http\Controllers\QueriesControllers::class, 'index'])->middleware('auth');
Route::get('/Queries/destroy/{id}', [App\Http\Controllers\QueriesControllers::class, 'destroy'])->middleware('auth');

                                    ///// About Us /////
                                    ///// Vision /////
Route::get('/About_us/Vision/show', [App\Http\Controllers\AboutControllers::class, 'showVision'])->middleware('auth');
Route::get('/About_us/Vision/edit/{id}', [App\Http\Controllers\AboutControllers::class, 'editVision'])->middleware('auth');
Route::post('/About_us/Vision/update/{id}', [App\Http\Controllers\AboutControllers::class, 'updateVision'])->middleware('auth');

                                    ///// Message /////
Route::get('/About_us/Message/show', [App\Http\Controllers\AboutControllers::class, 'showMessage'])->middleware('auth');
Route::get('/About_us/Message/edit/{id}', [App\Http\Controllers\AboutControllers::class, 'editMessage'])->middleware('auth');
Route::post('/About_us/Message/update/{id}', [App\Http\Controllers\AboutControllers::class, 'updateMessage'])->middleware('auth');

                                    ///// Objectives /////
Route::get('/About_us/Objectives/show', [App\Http\Controllers\AboutControllers::class, 'showObjectives'])->middleware('auth');
Route::get('/About_us/Objectives/add', [App\Http\Controllers\AboutControllers::class, 'createObjectives'])->middleware('auth');
Route::post('/About_us/Objectives/store', [App\Http\Controllers\AboutControllers::class, 'storeObjectives'])->middleware('auth');
Route::get('/About_us/Objectives/edit/{id}', [App\Http\Controllers\AboutControllers::class, 'editObjectives'])->middleware('auth');
Route::post('/About_us/Objectives/update/{id}', [App\Http\Controllers\AboutControllers::class, 'updateObjectives'])->middleware('auth');

                                    ///// Foundation /////
Route::get('/About_us/Foundation/show', [App\Http\Controllers\AboutControllers::class, 'showFoundation'])->middleware('auth');
Route::get('/About_us/Foundation/add', [App\Http\Controllers\AboutControllers::class, 'createFoundation'])->middleware('auth');
Route::post('/About_us/Foundation/store', [App\Http\Controllers\AboutControllers::class, 'storeFoundation'])->middleware('auth');
Route::get('/About_us/Foundation/edit/{id}', [App\Http\Controllers\AboutControllers::class, 'editFoundation'])->middleware('auth');
Route::post('/About_us/Foundation/update/{id}', [App\Http\Controllers\AboutControllers::class, 'updateFoundation'])->middleware('auth');

                                    ///// Laws /////
Route::get('/About_us/Laws/show', [App\Http\Controllers\AboutControllers::class, 'showLaws'])->middleware('auth');
Route::get('/About_us/Laws/add', [App\Http\Controllers\AboutControllers::class, 'createLaws'])->middleware('auth');
Route::post('/About_us/Laws/store', [App\Http\Controllers\AboutControllers::class, 'storeLaws'])->middleware('auth');
Route::get('/About_us/Laws/edit/{id}', [App\Http\Controllers\AboutControllers::class, 'editLaws'])->middleware('auth');
Route::post('/About_us/Laws/update/{id}', [App\Http\Controllers\AboutControllers::class, 'updateLaws'])->middleware('auth');
Route::get('/About_us/Laws/destroy/{id}', [App\Http\Controllers\AboutControllers::class, 'destroy'])->middleware('auth');
Route::get('/About_us/Laws/{id}', [App\Http\Controllers\AboutControllers::class, 'pdfview'])->middleware('auth');

                                    ///// Project /////
Route::get('Project/show', [App\Http\Controllers\ProjectController::class, 'showProject'])->middleware('auth');
Route::get('Project/add', [App\Http\Controllers\ProjectController::class, 'createProject'])->middleware('auth');
Route::post('Project/store', [App\Http\Controllers\ProjectController::class, 'storeProject'])->middleware('auth');
Route::get('Project/edit/{id}', [App\Http\Controllers\ProjectController::class, 'editProject'])->middleware('auth');
Route::post('Project/update/{id}', [App\Http\Controllers\ProjectController::class, 'updateProject'])->middleware('auth');
Route::get('Project/destroy/{id}', [App\Http\Controllers\ProjectController::class, 'destroyProject'])->middleware('auth');

                                    ///// Training /////
Route::get('Education/Training/show', [App\Http\Controllers\EducationController::class, 'showTraining'])->middleware('auth');
Route::get('Education/Training/add', [App\Http\Controllers\EducationController::class, 'createTraining'])->middleware('auth');
Route::post('Education/Training/store', [App\Http\Controllers\EducationController::class, 'storeTraining'])->middleware('auth');
Route::get('Education/Training/edit/{id}', [App\Http\Controllers\EducationController::class, 'editTraining'])->middleware('auth');
Route::post('Education/Training/update/{id}', [App\Http\Controllers\EducationController::class, 'updateTraining'])->middleware('auth');
Route::get('Education/Training/destroy/{id}', [App\Http\Controllers\EducationController::class, 'destroyTraining'])->middleware('auth');

                                    ///// School /////
Route::get('Education/School/show', [App\Http\Controllers\EducationController::class, 'showSchool'])->middleware('auth');
Route::get('Education/School/add', [App\Http\Controllers\EducationController::class, 'createSchool'])->middleware('auth');
Route::post('Education/School/store', [App\Http\Controllers\EducationController::class, 'storeSchool'])->middleware('auth');
Route::get('Education/School/edit/{id}', [App\Http\Controllers\EducationController::class, 'editSchool'])->middleware('auth');
Route::post('Education/School/update/{id}', [App\Http\Controllers\EducationController::class, 'updateSchool'])->middleware('auth');
Route::get('Education/School/destroy/{id}', [App\Http\Controllers\EducationController::class, 'destroySchool'])->middleware('auth');

                                    ///// Universitie /////
Route::get('Education/Universitie/show', [App\Http\Controllers\EducationController::class, 'showUniversitie'])->middleware('auth');
Route::get('Education/Universitie/add', [App\Http\Controllers\EducationController::class, 'createUniversitie'])->middleware('auth');
Route::post('Education/Universitie/store', [App\Http\Controllers\EducationController::class, 'storeUniversitie'])->middleware('auth');
Route::get('Education/Universitie/edit/{id}', [App\Http\Controllers\EducationController::class, 'editUniversitie'])->middleware('auth');
Route::post('Education/Universitie/update/{id}', [App\Http\Controllers\EducationController::class, 'updateUniversitie'])->middleware('auth');
Route::get('Education/Universitie/destroy/{id}', [App\Http\Controllers\EducationController::class, 'destroyUniversitie'])->middleware('auth');

