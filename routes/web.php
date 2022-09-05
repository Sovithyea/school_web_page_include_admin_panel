<?php



use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\Auth\AdminAuthController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\StudyTipController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CourseTypeController;


use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LangController;
use App\Http\Controllers\Client\Auth\AuthController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\ClientEventController;
use App\Http\Controllers\Client\ClientCourseController;
use App\Http\Controllers\Client\ClientStudyTipController;


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


Route::middleware('locale')->group(function() {

    Route::get('/lang/{code}', [LangController::class, "switchLang"]);

    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/contact', [ContactController::class, 'index']);

    

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/store/login', [AuthController::class, 'storeLogin'])->name('store_login');
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/store/register', [AuthController::class, 'storeRegister']);
    Route::get('/forget-password', [AuthController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('/forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('/reset-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');



    Route::prefix('course')->group(function() {
        Route::get('/', [ClientCourseController::class, 'index']);
        Route::get('/{id}/show', [ClientCourseController::class, 'show']);
    });

    Route::prefix('event')->group(function() {
        Route::get('/', [ClientEventController::class, 'index']);
        Route::get('/{id}/show', [ClientEventController::class, 'show']);
    });

    Route::prefix('study-tip')->group(function() {
        Route::get('/', [ClientStudyTipController::class, 'index']);
        Route::get('/{id}/show', [ClientStudyTipController::class, 'show']);
    });

    Route::middleware('auth')->group(function () {
        
        Route::get('/logout', [AuthController::class, 'logout']);

        Route::prefix('profile')->group(function() {
            
            Route::get('/show', [ProfileController::class, 'show']);
            Route::get('/edit', [ProfileController::class, 'edit']);
            Route::get('/change-password', [ProfileController::class, 'change']);
            Route::patch('/store/change-password', [ProfileController::class, 'storeChange']);
            Route::patch('/update', [ProfileController::class, 'update']);
            Route::get('/delete', [ProfileController::class, 'delete']);
        });

    });


});



Route::prefix('admin')->group(function() {
    
    Route::get('/login', [AdminAuthController::class, 'index'])->name('admin_login');
    Route::post('/store/login', [AdminAuthController::class, 'login'])->name('admin_store_login');

    Route::middleware('auth:admin')->group(function() {

        Route::get('/',[DashboardController::class, 'index'])->name('admin_dashboard');

        Route::get('/logout', [AdminAuthController::class, 'logout']);

        Route::prefix('/course')->group(function() {

            Route::get('/', [CourseController::class, 'index']);
            Route::get('/create', [CourseController::class, 'create']);
            Route::post('/store/create', [CourseController::class, 'store']);
            Route::get('/{id}/show', [CourseController::class, 'show']);
            Route::get('/{id}/edit', [CourseController::class, 'edit']);
            Route::patch('/{id}/update', [CourseController::class, 'update']);
            Route::get('/{id}/delete', [CourseController::class, 'destroy']);
            Route::get('/{id}/recovery', [CourseController::class, 'recovery']);
            Route::get('/{id}/force-delete', [CourseController::class, 'forceDelete']);
            Route::get('/trash', [CourseController::class, 'trash']);
        });

        Route::prefix('course-type')->group(function() {

            Route::get('/', [CourseTypeController::class, 'index']);
            Route::get('/create', [CourseTypeController::class, 'create']);
            Route::post('/store/create', [CourseTypeController::class, 'store']);
            Route::get('/{id}/edit', [CourseTypeController::class, 'edit']);
            Route::patch('/{id}/update', [CourseTypeController::class, 'update']);
            Route::get('/{id}/delete', [CourseTypeController::class, 'destroy']);
            
        });

        Route::prefix('study-tip')->group(function() {
            Route::get('/', [StudyTipController::class, 'index']);
            Route::get('/create', [StudyTipController::class, 'create']);
            Route::post('/store/create', [StudyTipController::class, 'store']);
            Route::get('/{id}/edit', [StudyTipController::class, 'edit']);
            Route::patch('/{id}/update', [StudyTipController::class, 'update']);
            Route::get('/{id}/delete', [StudyTipController::class, 'destroy']);
        });

        Route::prefix('event')->group(function() {
            Route::get('/', [EventController::class, 'index']);
            Route::get('/create', [EventController::class, 'create']);
            Route::post('/store/create', [EventController::class, 'store']);
            Route::get('/{id}/edit', [EventController::class, 'edit']);
            Route::patch('/{id}/update', [EventController::class, 'update']);
            Route::get('/{id}/delete', [EventController::class, 'destroy']);
            Route::get('/{id}/show', [EventController::class, 'show']);
        });

        Route::prefix('user')->group(function() {
            Route::get('/', [UserController::class, 'index']);
            Route::get('/create', [UserController::class, 'create']);
            Route::post('/store/create', [UserController::class, 'store']);
            Route::get('/{id}/edit', [UserController::class, 'edit']);
            Route::patch('/{id}/update', [UserController::class, 'update']);
            Route::get('/{id}/delete', [UserController::class, 'destroy']);
        });

        Route::prefix('admin')->group(function() {
            Route::get('/', [AdminController::class, 'index']);
            Route::get('/create', [AdminController::class, 'create']);
            Route::post('/store/create', [AdminController::class, 'store']);
            Route::get('/{id}/edit', [AdminController::class, 'edit']);
            Route::patch('/{id}/update', [AdminController::class, 'update']);
            Route::get('/{id}/delete', [AdminController::class, 'destroy']);
        });
    
    });

});

