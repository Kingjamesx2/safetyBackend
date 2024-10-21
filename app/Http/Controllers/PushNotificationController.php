<?php

namespace App\Http\Controllers;

use App\Services\FirebaseService;
use Illuminate\Http\Request;

class PushNotificationController extends Controller
{
    protected $firebaseService;

    public function __construct(FirebaseService $firebaseService)
    {
        $this->firebaseService = $firebaseService;
    }

    public function sendPushNotification(Request $request)
    {
        // Validate the request
        $request->validate([
            'token' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string',
            'data' => 'nullable|array',
        ]);

        // Extract request data
        $token = $request->input('token');
        $title = $request->input('title');
        $body = $request->input('body');
        $data = $request->input('data', []); // Default to an empty array if data is null

        // Send the notification
        $this->firebaseService->sendNotification($token, $title, $body, $data);

        // Return a success response
        return response()->json([
            'success' => true,
            'message' => 'Notification sent successfully!',
        ], 200);
    }
}
