@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
   <img src="/storage/{{$post->image}}">
   </div>
   <div class="col-4 ">
    <div>
      <div class="d-flex align-items-center">
        <div class="pr-3">
           <img src="/storage/{{$post->user->profile->image}} " class="rounded-circle "  style="max-width:40px;">
        </div>
        <div class="d-flex">
           <a class="pr-2" href="/profile/{{$post->user->id}}"><div class="font-weight-bold">{{$post->user->username}}</div>
        </a>|
          <a href="#" class="pl-2">Follow</a>
            
          </a> 
      </div>
            

      </div>
      <hr>
      <div class=" d-flex  align-items-center pt-3">
        <div class="font-weight-bold">
          <a href="/profile/{{$post->user->id}}">
       {{$post->user->username}}</a>
       </div>
        <div class="pl-2">
     {{$post->caption}}
            </div>
     </div>
         </div>
   </div>
   </div>
</div>
@endsection
