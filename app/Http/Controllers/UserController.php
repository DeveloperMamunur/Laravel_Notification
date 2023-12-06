<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserNotification;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function notify()
    {
        if (auth()->user()) {
            $user = User::latest()->first();
            auth()->user()->notify(new UserNotification($user));
        }

        return redirect(RouteServiceProvider::HOME);
    }

    public function markasread($id)
    {
        if ($id) {
            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        }
        return back();
    }
}
