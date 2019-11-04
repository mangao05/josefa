@extends('layouts.app')

@section('content')
<div class="card mx-auto mt-4" style="width:60%">
        <form method="POST" action="/opportunities" enctype="multipart/form-data">
            @csrf
            {{-- <input id="profile-image-upload" name="ship_img"  accept="image/*" class="hidden" style="display:none;" type="file"  onchange="document.getElementById('profile-image').src = window.URL.createObjectURL(this.files[0])">
            <img src="{{asset('images/opportunities.png')}}" id="profile-image"  style="margin-left:25px; border:1px solid black;" alt="add"  width="500" height="400" >
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a> --}}
            <h2>
                Add Opportunities
            </h2>
            <div class="card-body">
                @if($errors->has('oppo_title'))
                <span class="text-danger">({{$errors->first('oppo_title')}}*) </span>
                @endif
                <h4 class="form-group{{ $errors->has('oppo_title') ? ' has-error' : '' }}">Opportunity Title
                <h4 class="card-title form-group{{ $errors->has('oppo_title') ? ' has-error' : '' }}" ><input type="text" class="form-control" name="oppo_title" id="tile" placeholder="Name of The Ship" value="{{old('oppo_title')}}"></h4>
                <hr>
                @if($errors->has('oppo_text'))
                <span class="text-danger">({{$errors->first('oppo_text')}}*) </span>
                @endif
                <h4 class="form-group{{ $errors->has('oppo_text') ? ' has-error' : '' }}">Opportunity Message</h4>
                <textarea  class="form-control" name="oppo_text" id="oppo_text" cols="72" rows="5" placeholder="Add text here.." >{{old('oppo_text')}}</textarea>

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
                $('#oppo_text').summernote({
                    height:'250',
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
