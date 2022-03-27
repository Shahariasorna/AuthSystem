@extends('template.master')

@section('content')

<div class="card col-lg-5 mx-auto mt-5 px-0">
    <div class="card-header">
   <h3 class="text-center"> Users Form</h3>
    </div>
    <div class="card-body">
        <form action=" {{route('user.store')}} " method="POST" enctype="multipart/form-data">
           @csrf
           
           <input type="text" class="form-control mb-3" name="user_name" placeholder="User Name">
           @error ('user_name')
           <span class="text-danger"> {{$message}} </span>
           @enderror

           <input type="email" class="form-control mb-3" name="user_mail" placeholder="User Mail">
           @error('user_mail')
           <span class="text-danger">{{$message}}</span>
           @enderror

           <input type="number" class="form-control mb-3" name="phone_number" placeholder="User Phone Number">
           @error('phone_number')
           <span class="text-danger">{{$message}}</span>
           @enderror

           <input type="password" class="form-control mb-3" name="user_password" placeholder="Password">
           @error('user_password')
           <span class="text-danger">{{$message}}</span>
           @enderror

           <input type="text" class="form-control mb-3" name="approve_by" placeholder="Approve">
           @error('approve_by')
           <span class="text-danger">{{$message}}</span>
           @enderror

           <input type="file" class="form-control mb-3" name="user_img">
           @error('user_img')
           <span class="text-danger">{{$message}}</span>
          @enderror

       <button class="btn btn-primary" type="button">Submit</button>
        </form>
    </div>
</div>
    
@endsection