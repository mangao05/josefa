@extends('layouts.app')
@section('style')
    <style>
        .brd-none{
            border-radius: 0;
            text-align: center;
            font-weight: bold;
            color:black;
            font-size: 25px;
            margin: 10px auto 0 ;
            display: block;
        }
    </style>
@endsection
@section('content')
<div class="card mx-auto mt-4" style="width:60%;">
    <h2>Edit News</h2>
<form method="POST" action="{{ route('image.newsfeed')  }}" enctype="multipart/form-data" class="md-form">
    @csrf
    <div class="card-body">
       <div class="row">
            <div class="col">
                <input id="profile-image-upload" name="imgs"  value="{{$data->img}}" accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-images').src = window.URL.createObjectURL(this.files[0])">
                <img src="/storage/images/{{$data->img}}" width="350" id="profile-images" style="margin: 0 auto; display:block" height="331" alt="" class="z-depth-3">
            </div>
       </div>
        <div class="row">
            <div class="col mx-auto">
                <input type="text" name="newsfeed_title" class="form-control brd-none" id="title" value="{{$data->newsfeed_title}}" placeholder="header"><br>
                <input type="hidden" name="newsfeed_id" value="{{$data->id}}">
                <textarea name="newsfeed_text" id="body" cols="41" rows="11"  placeholder="some text">{{$data->newsfeed_text}}</textarea>
            </div>
    
        </div>

        <button type="submit" id="save"  class="mt-2 btn btn-success float-right">Update</button>

    </div>
</form>
</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#title').keyup(function(){
                $("#save").html('Update');
                $( "button" ).removeClass( "btn-success" );
                $( "button" ).addClass( "btn-warning" );
            });

            $('#body').keyup(function(){
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
                                    img.attr("style", "height:230px;width: 230px ;padding:7px;");

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
                height: '200'
            });
        });
    </script>



@endsection
