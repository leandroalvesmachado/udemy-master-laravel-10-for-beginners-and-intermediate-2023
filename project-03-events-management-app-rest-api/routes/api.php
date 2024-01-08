<?php

use App\Http\Controllers\Api\AttendeeController;
use App\Http\Controllers\Api\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('events', EventController::class);


// GET|HEAD          api/events/{event}/attendees ... events.attendees.index › Api\AttendeeController@index
//   POST            api/events/{event}/attendees ... events.attendees.store › Api\AttendeeController@store
//   GET|HEAD        api/events/{event}/attendees/{attendee} ... events.attendees.show › Api\AttendeeController@show
//   PUT|PATCH       api/events/{event}/attendees/{attendee} ... events.attendees.update › Api\AttendeeController@update
//   DELETE          api/events/{event}/attendees/{attendee} ... events.attendees.destroy › Api\AttendeeController@destroy
Route::apiResource('events.attendees', AttendeeController::class)
    ->scoped(['attendee' => 'event']);
