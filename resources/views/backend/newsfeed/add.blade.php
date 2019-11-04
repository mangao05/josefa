@extends('layouts.app')

@section('content')
    <div class="card mx-auto mt-4" style="width:60%">
        <h2>Add Josefa News</h2>
            <form method="POST" action="/newsfeed" enctype="multipart/form-data">
                @csrf
                <input id="profile-image-upload" name="img"  accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-image').src = window.URL.createObjectURL(this.files[0])">
                @if($errors->has('img'))
                    <span class="text-danger">({{$errors->first('img')}}*) </span>
                @endif
                <img src="{{asset('images/add_image.png')}}" id="profile-image"  style="border:1px solid black; margin: 0 auto; display:block;" alt="add"  width="500" height="350" >
                    <a>
                      <div class="mask rgba-white-slight"></div>
                    </a>
                <div class="card-body">
                    @if($errors->has('newsfeed_title'))
                    <span class="text-danger">({{$errors->first('newsfeed_title')}}*) </span>
                    @endif
                    <h5>News Title<h5>
                    <h4 class="card-title form-group{{ $errors->has('newsfeed_title') ? ' has-error' : '' }}" ><input type="text" class="form-control" name="newsfeed_title" id="tile" placeholder="Title" value="{{old('newsfeed_title')}}"></h4>
                    <hr>
                    @if($errors->has('newsfeed_text'))
                    <span class="text-danger">({{$errors->first('newsfeed_text')}}*) </span>
                    @endif
                    <h4 class="form-group{{ $errors->has('newsfeed_text') ? ' has-error' : '' }}">News Message</h4>
                    <textarea  class="form-control" height="400" name="newsfeed_text" id="newsfeed" cols="72" rows="5" placeholder="Add text here.." >{{old('newsfeed_text')}}</textarea>

                    <button type="submit" class="form-control btn btn-success mt-2" name="submit">Submit</button>
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
            $('#newsfeed').summernote({
                height:'200',
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
    </script>
@endsection
