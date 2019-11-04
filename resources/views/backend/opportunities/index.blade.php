@extends('layouts.app')
@section('style')
    <style scoped>
        table.blueTable {
            font-family: "Trebuchet MS", Helvetica, sans-serif;
            border: 1px solid #3D0DA4;
            background-color: #EEEEEE;
            width: 100%;
            height: 191%;
            text-align: center;
          }
          table.blueTable td, table.blueTable th {
            border: 1px solid #00CCFF;
            padding: 3px 5px;
          }
          table.blueTable tbody td {
            font-size: 14px;
            color: #000000;
          }
          table.blueTable tr:nth-child(even) {
            background: #85E7FF;
          }
          table.blueTable thead {
            background: #1C6EA4;
            background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
            border-bottom: 2px solid #00CCFF;
          }
          table.blueTable thead th {
            font-size: 15px;
            font-weight: bold;
            color: #FFFFFF;
            border-left: 2px solid #00CCFF;
          }
          table.blueTable thead th:first-child {
            border-left: none;
          }

          table.blueTable tfoot {
            font-size: 16px;
            font-weight: bold;
            color: #FFFFFF;
            background: #D0E4F5;
            background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
            border-top: 2px solid #444444;
          }
          table.blueTable tfoot td {
            font-size: 16px;
          }
          table.blueTable tfoot .links {
            text-align: right;
          }
          table.blueTable tfoot .links a{
            display: inline-block;
            background: #1C6EA4;
            color: #FFFFFF;
            padding: 2px 8px;
            border-radius: 5px;
          }
    </style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="card mx-auto mt-4" style="width:90rem">
            @if (session('alert'))
            <div class="alert alert-danger" >
                {{ session('alert') }}
            </div>
            @endif
        <div class="card-header text-center example z-depth-3" style="font-size:30px;">
            Opportunities List
        </div>
       <div class="card-body">
            <table id="dtBasicExample" class="table table-striped table-bordered table-sm blueTable" cellspacing="0" width="100%">
                    <thead class="text-center bg-dark text-white" >
                      <tr >
                        <th class="th-lg" style="font-size:20px;">
                            Id
                        </th>

                        <th class="th-lg" style="font-size:20px;">
                                Opportunities title
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
                        <td class="font-weight-bold"> {{$datas->id}}</td>
                        <td class="font-weight-bold"> {{$datas->oppo_title}}</td>
                        <td> <a href="/opportunities/{{$datas->id}}" class="btn btn-warning btn-md"  style="border-radius:20px"> <i class="fa fa-edit" aria-hidden="true"></i> Edit</a></td>
                        <td>
                                <span>
                                       <form action="/opportunities/{{$datas->id}}" method="POST">
                                           @csrf
                                           @method("DELETE")
                                           <input class="btn btn-danger btn-md" type="submit" value="Remove" style="border-radius:20px" >
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
</div>
@endsection

@section('script')
<script>
        @if(Session::has('message'))
            var type="{{Session::get('alert-type','info')}}"
            switch(type){
                case 'info':
                     toastr.info("{{ Session::get('message') }}");
                     break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                 case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>


@endsection
