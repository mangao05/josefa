@extends('layouts.app')
@section('style')
    <style scoped>
        .space{
            letter-spacing: 1px;
        }
        .counter{
            font-size:50px;
            justify-content:center;
        }
    </style>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="container-fluid ml-5 mr-5 mt-5">
            <div class="row">
                    <div class="col-md-4">
                        <div class=" text-white font-weight-bold text-uppercase mb-3" style="height:200px;border-radius:10px; background-color:#E3644E">
                                <div class="row p-4">
                                    <div class="col ">
                                       <h1 class="text-bold">Ship</h1>
                                        <div class="row counter">
                                            <span class="count_animation">{{count($ships)}}</span>
                                        </div>
                                    </div>

                                    <div class="col mt-5 p-3">
                                        <img class="float-right" src="{{asset('images/ocean-transportation-white.png')}}" width="100" alt="">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="text-white font-weight-bold text-uppercase  mb-3" style="height:200px;border-radius:10px; background-color:#F7D649">
                                <div class="row p-4">
                                    <div class="col">
                                       <h1 class="text-bold">opportunity</h1>
                                        <div class="row counter">
                                            <span class="count_animation">{{count($opportunity)}}</span>
                                        </div>
                                    </div>

                                    <div class="col mt-5 p-3">
                                        <img class="float-right" src="{{asset('images/opportunities.png')}}" width="100" alt="">
                                    </div>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                            <div class="bg-success  text-white font-weight-bold text-uppercase  mb-3" style="height:200px;border-radius:10px;">
                                    <div class="row p-4">
                                        <div class="col">
                                           <h1  class="text-bold">newsfeed</h1>
                                            <div class="row counter">
                                                <span class="count_animation">{{count($newsfeed)}}</span>
                                            </div>
                                        </div>

                                        <div class="col mt-5 p-3">
                                            <img class="float-right" src="{{asset('images/newsfeed.png')}}" width="80" alt="">
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                            <div class=" text-white font-weight-bold text-uppercase  mb-3" style="height:200px;border-radius:10px; background-color:#F9AA40;">
                                    <div class="row p-4">
                                        <div class="col">
                                            <h1  class="text-bold">Visits</h1>
                                            <div class="row counter">
                                                <span class="count_animation">{{  $visit->count}}</span>
                                            </div>
                                        </div>

                                        <div class="col mt-5 p-3">
                                            <img class="float-right" src="{{asset('images/login.png')}}" width="100" alt="">
                                        </div>

                                    </div>

                            </div>
                    </div>

                    <div class="col-md-8">
                            <div class="card">
                                    <div class="card-header">
                                      <h3 class="card-title">Login Record</h3>

                                    </div>
                                    <div class="card-body table-responsive p-0">
                                      <table class="table table-hover table-bordered  space">
                                          <thead class="text-center p-2 bg-primary  text-uppercase" >
                                              <tr class="text-bold">
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Last Login</th>
                                              </tr>
                                            </thead>
                                            <tbody  class="text-center ">
                                              @if(isset($user) && count($user) > 0)
                                                  @foreach ($user as $datas)
                                                <tr>
                                                  <td> {{$datas->id}}</td>
                                                  <td> {{$datas->name}}</td>
                                                  <td> {{$datas->email}}</td>
                                                  <td> {{ \Carbon\Carbon::parse($datas->last_login_at)->diffForHumans() }}</td>

                                                </tr>
                                                @endforeach
                                                @else
                                                <tr class="jumbotron">
                                                    <td colspan="6"><i> No Data Found..</i></td>
                                                </tr>
                                                @endif
                                              </tbody>
                                      </table>
                                    </div>
                                    <div class="float-right">
                                      {{$user->links()}}
                                      </div>
                                  </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-4">
                            <div class="bg-info  text-white font-weight-bold text-uppercase" style="height:200px;border-radius:10px;">
                                    <div class="row p-4">
                                        <div class="col">
                                            <h2  class="text-bold">Total User</h2>
                                            <div class="row counter">
                                                <span class="count_animation">{{count($user)}}</span>
                                            </div>
                                        </div>

                                        <div class="col mt-5 p-3">
                                            <img class="float-right" src="{{asset('images/total_user.png')}}" width="100" alt="">
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
    </div>
</div>


@endsection
@section('script')
    <script>
            $('.count_animation').each(function () {
                var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                  duration: 1000,
                  easing: 'swing',
                  step: function () {
                    $this.text(this.Counter.toFixed(0));
                  }
                });
              });

    </script>
@endsection


