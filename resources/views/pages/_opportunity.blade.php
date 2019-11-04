<section id="opportunity">
    <div class="hr-container">
        <hr class="hr-text" data-content="Opportunities">
    </div>

    <div class="container-fluid opt">
        <div class="row">

            <div class="col-lg-6 p-5 opt-text">

                <p>At Josefa Slipways, Inc., we foster employee development and recoginze our team members contributions</p>
                <p>We are always looking for talent, and encourage you to join our team.</p>
                <img src="{{asset('images/join.jpg')}}" alt="">
            </div>

            <div class="col-lg-5 m-2 opt-hire">
                <ul>

            @forelse($opportunies as $opportunies_data)
                    <li>
                            <a href="{{ url('view-opportunities/'.$opportunies_data->id) }}">{{$opportunies_data->oppo_title}}</a>
                            <p>{!!str_limit($opportunies_data->oppo_text, 90)!!}</p>
                    </li>
            @empty
                    
            @endforelse
                </ul>



            </div>
        </div>

    </div>
</section>
