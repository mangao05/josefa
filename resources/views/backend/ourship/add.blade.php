@extends('layouts.app')

@section('content')

<div class="card mt-2" style="width:90%; margin: 0 auto; display:block;">
        <h2>Add Ship</h2><hr>
    <form method="POST" action="/ourship" enctype="multipart/form-data">
        <div class="card-body">
        @csrf
        <div class="row">
            <div class="col" style="margin: 0 auto; display:block;">
                <input id="profile-image-upload" name="ship_img"  accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-image').src = window.URL.createObjectURL(this.files[0])">
                @if($errors->has('ship_img'))
                    <span class="text-danger">({{$errors->first('ship_img')}}*) </span>
                @endif
                <img src="{{asset('images/add_image.png')}}" id="profile-image"  style="margin: 25px auto; display:block; border:1px solid black;" alt="add"  width="80%" height="350" >
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
            </div>

            <div class="col" style="margin: 250px auto 0px">
                @if($errors->has('ship_name'))
                <span class="text-danger">({{$errors->first('ship_name')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('ship_name') ? ' has-error' : '' }}" >Ship Name:
                <input type="text" class="form-control" name="ship_name" id="tile" placeholder="e.g. Juan Dela Cruz" value="{{old('ship_name')}}"></h6>


                @if($errors->has('hull_number'))
                <span class="text-danger">({{$errors->first('hull_number')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('hull_number') ? ' has-error' : '' }}" >Hull Number
                <input type="text" class="form-control" name="hull_number" id="tile" placeholder="e.g. 001 " value="{{old('hull_number')}}"></h6>

            </div>
        </div>
        <h5>PARTICULARS</h5>
        <div class="row">

            <div class="col">
                @if($errors->has('LOA'))
                <span class="text-danger">({{$errors->first('LOA')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('LOA') ? ' has-error' : '' }}" >Length Overall (LOA)
                <input type="text" class="form-control" name="LOA" id="tile" placeholder="e.g. 50.00 MTR" value="{{old('LOA')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('DRAFT'))
                <span class="text-danger">({{$errors->first('DRAFT')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('DRAFT') ? ' has-error' : '' }}" >Draft
                <input type="text" class="form-control" name="DRAFT" id="tile" placeholder="e.g. 10.00 MTR" value="{{old('DRAFT')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('BREADTH'))
                <span class="text-danger">({{$errors->first('BREADTH')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('BREADTH') ? ' has-error' : '' }}" >Breadth
                <input type="text" class="form-control" name="BREADTH" id="tile" placeholder="e.g. 10.00 MTR" value="{{old('BREADTH')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('DEPTH'))
                <span class="text-danger">({{$errors->first('DEPTH')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('DEPTH') ? ' has-error' : '' }}" >Depth
                <input type="text" class="form-control" name="DEPTH" id="tile" placeholder="e.g. 5.00 MTR" value="{{old('DEPTH')}}"></h6>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if($errors->has('POWER'))
                <span class="text-danger">({{$errors->first('POWER')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('POWER') ? ' has-error' : '' }}" >Power
                <input type="text" class="form-control" name="POWER" id="tile" placeholder="e.g. 2 x 1000 HP" value="{{old('POWER')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('SPEED'))
                <span class="text-danger">({{$errors->first('SPEED')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('SPEED') ? ' has-error' : '' }}" >Speed
                <input type="text" class="form-control" name="SPEED" id="tile" placeholder="e.g. 10 Knots" value="{{old('SPEED')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('HULL'))
                <span class="text-danger">({{$errors->first('HULL')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('HULL') ? ' has-error' : '' }}" >Hull
                <input type="text" class="form-control" name="HULL" id="tile" placeholder="e.g. High Tensile Steel" value="{{old('HULL')}}"></h6>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if($errors->has('CLASS'))
                <span class="text-danger">({{$errors->first('CLASS')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('CLASS') ? ' has-error' : '' }}" >Class
                <input type="text" class="form-control" name="CLASS" id="tile" placeholder="Ship Class" value="{{old('CLASS')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('YEAR_BUILT'))
                <span class="text-danger">({{$errors->first('YEAR_BUILT')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('YEAR_BUILT') ? ' has-error' : '' }}" >Year Built
                <input type="text" class="form-control" name="YEAR_BUILT" id="tile" placeholder="Year Built" value="{{old('YEAR_BUILT')}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('REGISTER'))
                <span class="text-danger">({{$errors->first('REGISTER')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('REGISTER') ? ' has-error' : '' }}" >Register
                <input type="text" class="form-control" name="REGISTER" id="tile" placeholder="Register" value="{{old('REGISTER')}}"></h6>
            </div>
        </div>



            <button type="submit" class="form-control btn btn-success" name="submit">Submit</button>
       </div>
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
<script>
    $(document).ready(function(){
        $('#oppo_text').summernote({
            placeholder:'Some Text',
            callbacks: {
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                    e.preventDefault();

                    // Firefox fix
                    setTimeout(function () {
                        document.execCommand('insertText', false, bufferText);
                    }, 10);
                }
            }
        });
        });
    });
</script>
@endsection
