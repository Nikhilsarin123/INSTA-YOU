

 @extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
        <a href="/follow/{{$user->id}}"><img src="/storage/{{$user->profile->image}}" class="rounded-circle"></a>

       </div>
       <div class="col-9 pt-5">
        <div class="d-flex justify-content-between aling-item-baseline">
          <div class="h4">{{$user->username}}</div>
          <div class="container">
        <a href="/follow/{{$user->id}}"><input type="button" id =" " class="btn btn-primary pl-100" onclick="myFunction()" value="Follow">
    </a></div>
    <script>
    function myFunction() {
       document.getElementById("true").value = "UnFollow";
      }
    </script>
           @can('update',$user->profile)s
          <a href="/p/create">Add New Post</a>
            @endcan
        </div>
         @can('update',$user->profile)
        <a href="/profile/{{$user->id}}/edit">edit Profile</a>
        @endcan
        <div class="d-flex" >
            <div class="p-5"><strong>{{$user->post->count()}}</strong> Posts </div>
            <div class="p-5"><strong>23k</strong> Follower</div>
            <div class="p-5"><strong>212</strong>   following</div>
        </div>
        <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
          <div class=>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url?? 'n/a'}}</a></div>
        </div>
           </div>
            <div class="row pt-3">
              @foreach($user->post as $posts)
              <div class="p-2">
                <a href="/p/{{$posts->id}}">
                    <img src="/storage/{{$posts->image}}" hspace="20">
                </div>      
              @endforeach    
            </div>
   
</div>
@endsection
 