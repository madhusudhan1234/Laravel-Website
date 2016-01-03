@extends('page')
@section('content')
@include('pages/functions')
    <div class="clearfix space"></div>
    <div class="container">
        @foreach($page as $post)

            @if($post->slug == 'home')
                 @include('pages/news_events')

                <div class="row">
                    <div class="col-md-9">
                        <div class=" panel panel-default" >
                            <div class="panel-body">
                                <h2>WelCome to Academia International College</h2>
                                {{--<p>{{ $post->body }}</p>--}}
                                <p>{!! Text::shorten($post->body, 100) !!}</p>
                            </div>
                        </div>
                    </div>
                  @include('pages/student_message_sidebar')
                </div>

            @elseif($post->slug === 'contact')
                <div class="row">
                    <div class="col-md-9">

                        <div class=" panel panel-default" >
                            <div class="panel-body">
                                {{  $post->body }}
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3">
                        @include('pages/messages_form')
                    </div>
                </div>


            @elseif($post->slug === 'about_us')
                <div class="row">
                    <div class="col-md-12">

                        <div class=" panel panel-default" >
                            <div class="panel-body">
                                <p>{{ $post->body }}</p>
                            </div>
                        </div>

                    </div>
                </div>


            @elseif($post->slug === 'services')
                <div class="row">
                    <div class="col-md-12">

                        <div class=" panel panel-default" >
                            <div class="panel-body">
                                {{ $post->body }}
                            </div>
                        </div>

                    </div>
                </div>

            @elseif($post->slug === 'admission')
                <p>{{ $post->body }}</p>

            @elseif($post->slug === 'gallery')
                <div class="breadcrumb">
                    {{ $post->body }}
                </div>
                @include('pages/partials/gallery')

            @else
                <div class=" panel panel-default" >
                    <div class="panel-body">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->body }}</p>
                    </div>
                </div>
            @endif

        @endforeach
    </div>
    @stop