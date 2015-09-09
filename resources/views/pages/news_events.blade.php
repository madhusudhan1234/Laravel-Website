<div class="panel panel-default news-default">
    <div class="panel-body">
        <div class="col-md-2 ">
            <h4>News and </h4>
            <h1> Events</h1>
            <p>
                <a href="#" title="More News" >More Events
                    <i class="fa fa-arrow-circle-o-right"></i>
                </a>
            </p>
        </div>
        @foreach($news as $new)
        <div class="col-md-2" id="slider">
            <div class="page" id="{{$new->id}}">
                <h4><a href="#">{{ $new->news_title }}</a></h4>
                <h6 class="dim-black">{{ $new->news_body }}</h6>
                <p class="blog-timestamps">{{ $new->published_at->format('Y  M  d') }}</p>

            </div>
        </div>
        @endforeach
    </div>
</div>
