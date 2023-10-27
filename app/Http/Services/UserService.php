<?php

namespace App\Http\Services;

use Carbon\Carbon;
use App\Models\Chat;
use App\Models\User;
use App\Events\chatSent;
use App\Events\StatusOnline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserService
{
    public function getUser($user_id)
    {
        return User::where('id', $user_id)->first();
    }
    public function getAllUser()
    {
        return User::all();
    }
    public function sendMessage($user_id, $message)
    {
        $data['sender_id'] = Auth::user()->id;
        $data['receiver_id'] = $user_id;
        $data['message'] = $message;

        Chat::create($data);

        $receiver = $this->getUser($user_id);
        \broadcast(new chatSent($receiver, $message));
    }
}
