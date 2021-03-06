@extends('layouts.app')

@section('content')
<div class="card mx-auto mt-4" style="width:60%">
    <form action="/users" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row ">
            <div class="col-lg-4" style="border-right:1px solid black" >
                <input id="profile-image-upload" name="ship_img"  accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-image').src = window.URL.createObjectURL(this.files[0])">
                 <img src="http://macgroup.org/blog/wp-content/uploads/2011/10/iphone-camera-icon-150x150.jpg" id="profile-image" style="cursor:pointer; width:100%;max-height:200px;" />
                 </p>
                 @if($errors->has('image'))
                 <span class="text-danger">({{$errors->first('image')}}*) </span>
                 @endif
                 <center> <b>Upload Image</b></center>

            </div>
            <div class="col-lg-8 mt-2">
                <div class="text-center  mb-3">
                   <h3> Fill up the form</h3>
                </div>


                 <div class="input-group flex-nowrap" >
                         <div class="input-group-prepend">
                           <span class="input-group-text " id="addon-wrapping">
                               <i class="fa fa-user " aria-hidden="true"></i>
                           </span>
                         </div>
                         <input type="text" name="fname" id="fname" placeholder="Full Name" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }} " >
                 </div>
                 @if($errors->has('fname'))
                 <span class="text-danger">({{$errors->first('fname')}}*) </span>
                 @endif

                 <div class="input-group flex-nowrap mt-2">
                         <div class="input-group-prepend">
                           <span class="input-group-text " id="addon-wrapping">
                               <i class="fa fa-envelope" aria-hidden="true"></i>
                           </span>
                         </div>
                         <input type="text"  name="email" id="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} ">
                 </div>
                 @if($errors->has('email'))
                 <span class="text-danger">({{$errors->first('email')}}*) </span>
                 @endif

                 <div class="input-group flex-nowrap mt-2">
                         <div class="input-group-prepend">
                           <span class="input-group-text " id="addon-wrapping">
                               <i class="fa fa-key" aria-hidden="true"></i>
                           </span>
                         </div>
                         <input type="password"  name="password" id="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} ">
                 </div>
                 @if($errors->has('password'))
                 <span class="text-danger">({{$errors->first('password')}}*) </span>
                 @endif
               <div class="float-right mt-2">
                     <button type="submit" class="btn btn-primary RegBtn" >Register User</button>
               </div>
            </div>
        </div>

 </form>
    </form>
</div>

@endsection

@section('script')
    <script>
        $(function() {
            $('#profile-image').on('click', function() {
                $('#profile-image-upload').click();
            });
        });

    </script>

@endsection
