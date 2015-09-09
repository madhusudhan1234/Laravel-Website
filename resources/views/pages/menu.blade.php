<nav class=" nav navbar-nav pull-right">
    <ul class="nav navbar-nav">
        @foreach($navigation as $nav)
        <li class="<?php dropdown($nav->sub_navigation) ?>" >
            <a class="<?php dropdown_toggle($nav->sub_navigation) ?>" data-toggle="<?php data_toggle($nav->sub_navigation) ?>"  href="{{ $nav->url }}"> {{ $nav->label }}
                @if(count($nav->sub_navigation)>0)
                   <b class="caret"></b>
                @endif
            </a>
            @if( ! $nav->sub_navigation->isEmpty())
            <ul class="<?php dropdown_menu($nav->sub_navigation) ?>" >
                @foreach($nav->sub_navigation as $sub_nav)
                    <li class="<?php get_active($post->slug,$sub_nav->url) ?>" >
                        <a href="{{ $sub_nav->url }}">{{ $sub_nav->label }}</a>
                    </li>
                @endforeach
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</nav>
