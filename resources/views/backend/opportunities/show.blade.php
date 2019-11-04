@extends('layouts.app')

@section('content')
{{--  @if(count($images) > 0)
    {{dd($images)}}
@endif  --}}
<div class="card " style="width:60%; margin: 0 auto; display:block;">
<form method="POST" action="" enctype="multipart/form-data" class="md-form">
    @csrf
    <div class="card-body">
       <div class="row">

            <div class="col">
                <h2>Edit Opportunity Context</h2><br>
                <h4>Title</h4>
                <input type="text" name="oppo_title" class="form-control" id="title" value="{{$data->oppo_title}}" placeholder="header"><br>
                <h4>Message</h4>                
                <input type="hidden" name="opportunities_id" value="{{$data->id}}">

                <textarea name="oppo_text" id="body" cols="81" rows="11"  placeholder="some text">{{$data->oppo_text}}</textarea>
                <button type="submit" id="save"  class="float-right btn btn-success mt-2">Update</button>
            </div>


       </div>

       

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
                height:'200px',
            });
        });
    </script>




@endsection
