<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;

Route::prefix('v1')->group(function () {
    Route::post('/login', [API\LoginController::class, 'login']);
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('/logout', [API\LoginController::class, 'logout']);

        // ! User Routes
        Route::group(['prefix' => 'users'], function () {
            $route  = 'user';
            Route::get('/',                             [API\UserController::class, 'index']);
            Route::post('create',                       [API\UserController::class, 'store']);
            Route::put('{' . $route . '}/update',       [API\UserController::class, 'update']);
            Route::delete('{' . $route . '}/delete',    [API\UserController::class, 'destroy']);
        });

        // ! Task Category Routes
        Route::group(['prefix' => 'task-categories'], function () {
            $route  = 'taskCategory';
            Route::get('/',                             [API\TaskCategoryController::class, 'index']);
            Route::post('create',                       [API\TaskCategoryController::class, 'store']);
            Route::put('{' . $route . '}/update',       [API\TaskCategoryController::class, 'update']);
            Route::delete('{' . $route . '}/delete',    [API\TaskCategoryController::class, 'destroy']);
        });

        // ! Task Status Routes
        Route::group(['prefix' => 'task-statuses'], function () {
            $route  = 'taskStatus';
            Route::get('/',                             [API\TaskStatusesController::class, 'index']);
            Route::post('create',                       [API\TaskStatusesController::class, 'store']);
            Route::put('{' . $route . '}/update',       [API\TaskStatusesController::class, 'update']);
            Route::delete('{' . $route . '}/delete',    [API\TaskStatusesController::class, 'destroy']);
        });

        // ! Tasks Routes
        Route::group(['prefix' => 'tasks'], function () {
            $route  = 'task';
            Route::get('/',                                             [API\TaskController::class, 'index']);
            Route::post('create',                                       [API\TaskController::class, 'store']);
            Route::get('{' . $route . '}/show',                         [API\TaskController::class, 'show']);
            Route::put('{' . $route . '}/update',                       [API\TaskController::class, 'update']);
            Route::delete('{' . $route . '}/delete',                    [API\TaskController::class, 'destroy']);
            Route::post('{' . $route . '}/add-user-to-task',            [API\TaskController::class, 'addUserToTask']);
            Route::post('{' . $route . '}/{user}/remove-user-to-task',  [API\TaskController::class, 'removeUserToTask']);
        });
    });
});
