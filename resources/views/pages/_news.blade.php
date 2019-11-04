<section id="news">
    <div class="hr-container">
            <hr class="hr-text" data-content="josefa news">
    </div>

<div class="container">
    <div class="row" style="padding:15px 5px; margin-bottom: 25px;">
        <div class="col">
            <div class="row">
                <a href="https://newsinfo.inquirer.net/924050/navotas-made-vessels-to-explore-protect-ph-waters" target="_blank" style="">
                    <div class="col-sm-6 float-left">
                        <img src="{{asset('images/tenor.gif')}}" alt="" class="m-3" width="100%">
                    </div>
                    <div class="col-sm-6 float-right">
                        <h5 class="news-link-head">Navotas-made ships to explore, protect PH waters</h5>
                        <p class="news-link-text">{{str_limit('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non soluta eligendi sit hic architecto blanditiis dolorum voluptates ex? Qui sint vel doloribus consequatur iure saepe corporis incidunt tempore fugit perspiciatis!' , 50)}}</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <a href="https://newsinfo.inquirer.net/924050/navotas-made-vessels-to-explore-protect-ph-waters" target="_blank" style="">
                    <div class="col-sm-6 float-left">
                        <img src="{{asset('images/inquirer.jpg')}}" alt="" class="m-3" width="100%">
                    </div>
                    <div class="col-sm-6 float-right">
                        <h5 class="news-link-head">Navotas-made ships to explore, protect PH waters</h5>
                        <p class="news-link-text">{{str_limit('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non soluta eligendi sit hic architecto blanditiis dolorum voluptates ex? Qui sint vel doloribus consequatur iure saepe corporis incidunt tempore fugit perspiciatis!' , 50)}}</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <a href="https://newsinfo.inquirer.net/924050/navotas-made-vessels-to-explore-protect-ph-waters" target="_blank" style="">
                    <div class="col-sm-6 float-left">
                        <img src="{{asset('images/inquirer.jpg')}}" alt="" class="m-3" width="100%">
                    </div>
                    <div class="col-sm-6 float-right">
                        <h5 class="news-link-head">Navotas-made ships to explore, protect PH waters</h5>
                        <p class="news-link-text">{{str_limit('Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non soluta eligendi sit hic architecto blanditiis dolorum voluptates ex? Qui sint vel doloribus consequatur iure saepe corporis incidunt tempore fugit perspiciatis!' , 50)}}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>




<div class="container-fluid">
    <div class="row">

        @forelse($newsfeed as $news)

        <div class="col sm-6 md-3 lg-3 xl-3 p-1">
            <div class="card card-img-cont wow fadeInRight" data-wow-duration="2s" data-wow-delay=".5s">
                <img src="{{asset('../storage/images/'.$news->img)}}" class="card-img-top" alt="">
                <div class="card-body">
                    <div class="news-title">{{$news->newsfeed_title}}</div>
                    <p class="card-text pt-3" style="">{!!str_limit($news->newsfeed_text, 50)!!}</p>
                    <a class="btn btn-primary btn-loc" href="{{ url('news/'.$news->id) }}">Read More</a>
                </div>
            </div>
        </div>
        @empty

        @endforelse

    </div>

    <div class="readmore">
    <p class="hvr-icon-forward float-right btn btn-primary"><a href="{{route('allnews')}}">View All News&nbsp;<i class="fas fa-angle-double-right hvr-icon"></a></i></p>
    </div>
</div>
</section>
