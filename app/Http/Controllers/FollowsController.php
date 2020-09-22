<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        $authUser = User::find(Auth::id());
        return $authUser->following()->toggle($user->profile);
    }
}
