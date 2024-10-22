<?php

use App\Http\Controllers\PushNotificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolesController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::group(['prefix'=> '', 'namespace' => 'App\Http\Controllers'], function() {
    Route::apiResource('roles', RolesController::class);
    Route::apiResource('users', UsersController::class);
    Route::apiResource('campuses', CampusController::class);
    Route::apiResource('messageCategories', MessageCategoryController::class);
    Route::apiResource('userCampuses', UserCampusController::class);    
    Route::apiResource('buildings', BuildingController::class);
    Route::apiResource('messages', MessageController::class);
    Route::apiResource('incidentFiles', IncidentFileController::class); 
    Route::apiResource('incidentStatuses', IncidentStatusController::class);
    Route::apiResource('incidentReports', IncidentReportsController::class);
    Route::apiResource('userStatuses', UserStatusController::class);
    Route::apiResource('accessRights', AccessRightController::class);
    Route::apiResource('recipients', RecipientController::class);
    Route::apiResource('incidentTypes', IncidentTypeController::class);
    Route::apiResource('departments', DepartmentController::class);
    Route::apiResource('departmentMembers', DepartmentMemberController::class);
    Route::apiResource('menus',MenuController::class);
    Route::apiResource('menuRoles', MenuRoleController::class);
    // Route::apiResource('save-token',SaveTokenController::class);
    // Route::apiResource('send-notification', HomeController::class);
});




Route::post('/send-notification', [PushNotificationController::class,'sendPushNotification']);
