<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Events\StatusOnline;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function chatForm($user_id, UserService $userService)
    {
        $receiver = $userService->getUser($user_id);
        return view('chat', compact('receiver'));
    }

    public function sendMessage($user_id, Request $request, UserService $userService)
    {
        $receiver = $userService->sendMessage($user_id, $request->message);
        return response()->json('Message Sent');
    }

    public function home()
    {
        return view('home');
    }
    // public function __invoke(User $user)
    // {
    //     $user->status = 'online';
    //     $user->save();

    //     broadcast(new StatusOnline($user));
    // }
}
