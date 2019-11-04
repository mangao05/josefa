<section id="ships">
    <h2 class="section-art">Our Ships</h2>

<div class="ship_cont">
    <div class="row">
    @foreach($ourship as $ourship_data)
        <div class="col-md-3 hvr-grow" data-wow-duration="1.5s">
            <img src="{{asset('../storage/images/'.$ourship_data->ship_img)}}" class="image-ship wow fadeInRight" alt="" data-toggle="modal" ship-id = "{{$ourship_data->id}}">
            <h5>{{$ourship_data->ship_name}}</h5>
        </div>
    @endforeach
    </div>

     <div class="readmore">
            <p class="hvr-icon-forward float-right btn btn-blue_romance"><a  style="color:black" href="{{route('allships')}}">View All Ships&nbsp;<i class="fas fa-angle-double-right hvr-icon" style="color:black"></i></a></p>
    </div>
</div>
</section>





{{-- modal --}}
{{-- jewel faith --}}

<div class="modal fade" id="shipModal" tabindex="-1" role="diaglog" aria-labelledby="jfaith" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="justify-content-center">
                <img src="" class = "newImage p-3" style="width:100%;height:350px;">
            </div>
            <h4 class="modal-title" id="">JSI Hull No.
            <span style="color:black !important; font-size:20px!important; font-weight:300!important;" id="hull_number"></span>
            <br>
            <p id="ship_name"></p>
            </h4>


        <div class="modal-body">
            <img src="" alt="">
            <h4>PARTICULARS</h4>
            <table class="table table-sm">
              <tr>
                <td>LOA</td>
                <td>:</td>
                <td id ="loa">sample</td>
              </tr>

              <tr>
                <td>BREADTH</td>
                <td>:</td>
                <td id ="breadth">sample</td>
              </tr>

              <tr>
                <td>DEPTH</td>
                <td>:</td>
                <td id ="depth">sample</td>
              </tr>

              <tr>
                <td>DRAFT</td>
                <td>:</td>
                <td id ="draft">sample</td>
              </tr>

              <tr>
                <td>POWER</td>
                <td>:</td>
                <td id ="power">sample</td>
              </tr>

              <tr>
                <td>SPEED</td>
                <td>:</td>
                <td id ="speed">sample</td>
              </tr>

              <tr>
                <td>HULL</td>
                <td>:</td>
                <td id ="hull">sample</td>
              </tr>

              <tr>
                <td>CLASS</td>
                <td>:</td>
                <td id = "class">sample</td>
              </tr>

              <tr>
                <td>YEAR BUILT</td>
                <td>:</td>
                <td id = "year">sample</td>
              </tr>

            </table>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-blue_romance" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
