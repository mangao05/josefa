<div class="col-md-3 borderDivider">
    <div class="row">
        <div class="container">
            <h5>Recent Nesfeed</h5>
            <ul>
                    @foreach ($news_recent as $new_recent_data)
                <li>
                    <a href="{{ url('news/'.$new_recent_data->id) }}">{{$new_recent_data->newsfeed_title}}</a>
                </li>
                        @endforeach
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <h5>Recent Opportunities </h5>
            <ul>
                @foreach ($opportunities_recent as $opportunities_data)
                <li>
                    <a href="{{ url('view-opportunities/'.$opportunities_data->id) }}">{{$opportunities_data->oppo_title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
