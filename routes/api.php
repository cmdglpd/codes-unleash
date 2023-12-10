<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AuthController,
    ProgrammingLanguageController,
    ChapterController,
    LessonController
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
], function ($route) {
    $route->post('/login', [AuthController::class, 'login']);
    $route->post('/register', [AuthController::class, 'register']);
});


Route::group([
    'middleware' => 'auth:sanctum',
], function ($route) {
    $route->get('/logout', [AuthController::class, 'logout']);
});

//programminglanguage
Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'programming-language'
], function ($route) {
    $route->get('/', [ProgrammingLanguageController::class, 'index']);
    $route->post('/create', [ProgrammingLanguageController::class, 'create']);
    $route->get('/{referenceNumber}', [ProgrammingLanguageController::class, 'show']);
    $route->put('/update/{referenceNumber}', [ProgrammingLanguageController::class, 'update']);
    $route->delete('/delete/{referenceNumber}', [ProgrammingLanguageController::class, 'delete']);
});

//chapter
Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'chapter'
], function ($route) {
    $route->post('/create', [ChapterController::class, 'create']);
});

//lesson
Route::group([
    'middleware' => 'auth:sanctum',
    'prefix' => 'lesson'
], function ($route) {
    $route->post('/create', [LessonController::class, 'create']);
});
