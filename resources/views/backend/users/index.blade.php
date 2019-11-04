@extends('layouts.app')
@section('style')
    <style scoped>

    </style>
@endsection
@section('content')

    <div class="card mx-auto mt-4" style="width:60rem">
            @if (session('alert'))
            <div class="alert alert-danger" >
                {{ session('alert') }}
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" >
                {{ session('success') }}
            </div>
            @endif
        <div class="card-header text-center example z-depth-3" style="font-size:30px;">
            User List
        </div>

       <div class="card-body">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead class="text-center bg-dark text-white" >
                      <tr >
                        <th class="th-lg" style="font-size:20px;">
                            Id
                        </th>

                        <th class="th-lg" style="font-size:20px;">
                               Name
                        </th>
                        <th class="th-lg" style="font-size:20px;">
                                Email
                        </th>
                        <th class="th-lg" colspan="2" style="font-size:20px;">
                                Action
                        </th>
                      </tr>
                    </thead>

                    <tbody  class="text-center ">
                    @if(isset($data) && count($data) > 0)
                        @foreach ($data as $datas)
                      <tr>
                        <td> {{$datas->id}}</td>
                        <td> {{$datas->name}}</td>
                        <td> {{$datas->email}}</td>
                        <td>
                                <span>
                                       <form action="/users/{{$datas->id}}" method="POST">
                                           @csrf
                                           @method("DELETE")
                                            <button type="submit" class="badge badge-danger btn-md p-2" style="border-radius:20px">
                                                <i class="fas fa-trash-alt"></i> Remove
                                            </button>
                                       </form>
                                </span>
                            </td>
                      </tr>
                      @endforeach
                      @else
                      <tr class="jumbotron">
                          <td colspan="4"><i> No Data Found..</i></td>
                      </tr>
                      @endif
                    </tbody>
            </table>
            <div class="float-right">
                    {{$data->links()}}
            </div>

       </div>
    </div>

@endsection

@section('script')
<script>
        $(function() {
            $('#user_default').on('click', function() {
                $('#user_image').click();
            });
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#user_default').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#user_image").change(function(){
            readURL(this);
        });




        });
    </script>


@endsection
