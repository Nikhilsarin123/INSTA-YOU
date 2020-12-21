<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

     public function carbon()
    {
        $now = new Carbon();
        // $now->timezone('US/central');
        // echo $now;
        // echo "<br>";

        //  $now->timezone('US/central');
        // echo $now;
        // echo "<br>";

          $now->today();
        echo $now;
         echo "<br>";

        //  $now->tomorrow();
        // echo $now;
        // echo "<br>";

      // $now->diffForHumans();
      //   echo $now;
      //   echo "<br>";
    }

      public function users()
    {
        $users = User::get();
        return view('users', compact('users'));
    }

    public function user($id)
    {
        $user = User::find($id);
        return view('usersView', compact('user'));
    }

    public function follwUserRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);


        return response()->json(['success'=>$response]);
    }


}