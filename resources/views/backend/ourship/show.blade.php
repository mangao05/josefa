@extends('layouts.app')

@section('content')
{{--  @if(count($images) > 0)
    {{dd($images)}}
@endif  --}}
<div class="card mt-2 pb-4" style="width:90%; margin: 0 auto; display:block;">
    <h2>Edit Ship Info</h2><hr>
<form method="POST" action="{{route('ourship.update',$data->id)}}" enctype="multipart/form-data" class="md-form">
   @csrf
    @method('PUT')
    <div class="card-body">
        <div class="row">
            <div class="col">
            {{--  //image  --}}
                <input id="profile-image-upload" name="imgs"  value="{{$data->ship_img}}" accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-images').src = window.URL.createObjectURL(this.files[0])">
                <img src="/storage/images/{{$data->ship_img}}" alt="" id="profile-images"    style="margin: 25px auto; display:block; border:1px solid black;" alt="add"  width="80%" height="350"  class="z-depth-3">
           
                <input type="hidden" name="ships_id" value="{{$data->id}}">
            </div>

            <div class="col" style="padding-top: 130px;">
                    @if($errors->has('ship_name'))
                    <span class="text-danger">({{$errors->first('ship_name')}}*) </span>
                    @endif
                    <h6 class="card-title form-group{{ $errors->has('ship_name') ? ' has-error' : '' }}" >Ship Name
                    <input type="text" class="form-control tile" name="ship_name" id="tile" placeholder="ship_name" value="{{$data->ship_name}}"></h6>

                    @if($errors->has('hull_number'))
                    <span class="text-danger">({{$errors->first('hull_number')}}*) </span>
                    @endif
                    <h6 class="card-title form-group{{ $errors->has('hull_number') ? ' has-error' : '' }}" >Hull Number
                    <input type="text" class="form-control tile" name="hull_number" id="tile" placeholder="hull_number" value="{{$data->hull_number}}"></h6>
            </div>
        </div>
        <h5>PARTICULARS</h5>
        <div class="row">
            <div class="col">
                @if($errors->has('LOA'))
                <span class="text-danger">({{$errors->first('LOA')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('LOA') ? ' has-error' : '' }}" >Length Overall (LOA)
                <input type="text" class="form-control tile" name="LOA" id="tile" placeholder="LOA"  value="{{$data->LOA}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('DRAFT'))
                <span class="text-danger">({{$errors->first('DRAFT')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('DRAFT') ? ' has-error' : '' }}" >Draft
                <input type="text" class="form-control tile" name="DRAFT" id="tile" placeholder="DRAFT"  value="{{$data->DRAFT}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('BREADTH'))
                <span class="text-danger">({{$errors->first('BREADTH')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('BREADTH') ? ' has-error' : '' }}" >Breadth
                <input type="text" class="form-control tile" name="BREADTH" id="tile" placeholder="BREADTH"  value="{{$data->BREADTH}}"></h6>
            </div>
            <div class="col">
                @if($errors->has('DEPTH'))
                <span class="text-danger">({{$errors->first('DEPTH')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('DEPTH') ? ' has-error' : '' }}" >Depth
                <input type="text" class="form-control tile" name="DEPTH" id="tile" placeholder="DEPTH"  value="{{$data->DEPTH}}"></h6>
            </div>

        </div>

        <div class="row">
            <div class="col">
                @if($errors->has('POWER'))
                <span class="text-danger">({{$errors->first('POWER')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('POWER') ? ' has-error' : '' }}" >Power
                <input type="text" class="form-control tile" name="POWER" id="tile" placeholder="POWER"  value="{{$data->POWER}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('SPEED'))
                <span class="text-danger">({{$errors->first('SPEED')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('SPEED') ? ' has-error' : '' }}" >Speed
                <input type="text" class="form-control tile" name="SPEED" id="tile" placeholder="SPEED"  value="{{$data->SPEED}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('HULL'))
                <span class="text-danger">({{$errors->first('HULL')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('HULL') ? ' has-error' : '' }}" >Hull
                <input type="text" class="form-control tile" name="HULL" id="tile" placeholder="HULL"  value="{{$data->HULL}}"></h6>
            </div>
        </div>

        <div class="row">
            <div class="col">
                @if($errors->has('CLASS'))
                <span class="text-danger">({{$errors->first('CLASS')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('CLASS') ? ' has-error' : '' }}" >Class
                <input type="text" class="form-control tile" name="CLASS" id="tile" placeholder="CLASS"  value="{{$data->CLASS}}"></h6>
            </div>

            <div class="col">
                @if($errors->has('YEAR_BUILT'))
                <span class="text-danger">({{$errors->first('YEAR_BUILT')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('YEAR_BUILT') ? ' has-error' : '' }}" >Year Built
                <input type="text" class="form-control tile" name="YEAR_BUILT" id="tile" placeholder="YEAR_BUILT"  value="{{$data->YEAR_BUILT}}"></h4>
            </div>

            <div class="col">
                @if($errors->has('REGISTER'))
                <span class="text-danger">({{$errors->first('REGISTER')}}*) </span>
                @endif
                <h6 class="card-title form-group{{ $errors->has('REGISTER') ? ' has-error' : '' }}" >Register
                <input type="text" class="form-control tile" name="REGISTER" id="tile" placeholder="REGISTER" value="{{$data->REGISTER}}"></h6>
            </div>
        </div>


        <button type="submit" id="save" class="float-right btn btn-success text-bold">Save</button>

    </div>
</form>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.tile').keyup(function(){
                $("#save").html('Update');
                $( "button" ).removeClass( "btn-success" );
                $( "button" ).addClass( "btn-warning" );
            });

        });

        $('#imageUpload').click(function(){
            $("#save").html('Update');
            $( "button" ).removeClass( "btn-success" );
            $( "button" ).addClass( "btn-warning" );
        });

    </script>

    <script>
        $(document).ready(function(){
            $(function () {
                $("#imageUpload").change(function () {
                    if (typeof (FileReader) != "undefined") {
                        var dvPreview = $("#dvPreview");
                        dvPreview.html("");
                        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                        $($(this)[0].files).each(function () {
                            var file = $(this);
                            if (regex.test(file[0].name.toLowerCase())) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    var img = $("<img />");
                                    img.attr("style", "height:230px;width: 230px ;padding:5px; margin-left:30px;");
                                    img.attr("class", "example z-depth-5");
                                    img.attr("src", e.target.result);
                                    dvPreview.append(img);
                                }
                                reader.readAsDataURL(file[0]);
                            } else {
                                alert(file[0].name + " is not a valid image file."+ " " + "Please check the image name before upload ");
                                dvPreview.html("");
                                return false;
                            }
                        });
                    } else {
                        alert("This browser does not support HTML5 FileReader.");
                    }
                });
            });

            $(function() {
                $('#profile-images').on('click', function() {
                    $('#profile-image-upload').click();
                    $("#save").html('Update');
                    $( "button" ).removeClass( "btn-success" );
                    $( "button" ).addClass( "btn-warning" );
                });
            });

        });
    </script>
    <script>
        $(document).ready(function(){
            $('#body').summernote({
                placeholder:'Some Text',
            });
        });
    </script>




@endsection
