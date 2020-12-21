<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
     public function index($user)
    {
	    $user=User::findorfail($user);
        return view('profile.index',[
        'user' => $user,
        ]);
    }
   public function edit(User $user)
    { 
    	$this->authorize('update',$user->profile);
	   return view('profile.edit',compact('user'));
    }

      public function update(User $user)
    {
    	   	$this->authorize('update',$user->profile);
	   $data = request()->validate(
            [ 

                'title' => 'required',
                'description' => 'required', 
                'url'=>'required',
                'image'=>'',
               
             

            ]);
	   
	   if (request('image'))
	    {
	    	$imagepath= request('image')->store('profile','public');
             $image=Image::make(public_path("storage/{$imagepath}"))->fit(200,200);
             $image->save();
	    }
	   
	  
	     auth()->user()->profile->update(array_merge(

	     	$data,
         [ 'image'=> $imagepath]

	     ));
	    
	    return redirect("/profile/{$user->id}");
     
          }

}
