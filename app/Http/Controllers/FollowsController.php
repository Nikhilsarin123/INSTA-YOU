<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowsController extends Controller
{
    //
    public function store(User $user)
    {
       $users = Auth::user();
             $data['user_id'] = $users->id;
 $data['profile_id'] = $request['profile_id'];
 $data['user_id'] = $request['last_name'];
          
    }
}