@extends('layouts.app')

@section('contents')
{{--<div class="col-md-12">--}}
{{--<!-- 포트폴리오 소팅 메뉴, 카테고리 생각 더 해보기 -->--}}
    {{--<nav class="menu_cat">--}}
    {{--<ul>--}}
        {{--<li class="active"><a href="" title="">All</a></li>--}}
        {{--<li><a href="" title="">Front End Develop?</a></li>--}}
        {{--<li><a href="" title="">UX/UI Design</a></li>--}}
    {{--</ul>--}}
    {{--</nav>--}}
{{--</div>--}}

<div class="col-md-12 itemlist" id="work">

@foreach( $posts as $post )
        <div class="col-md-4 item">
            <a data-link="{{ route('show', $post-> post_id) }}" class="portfolio_pop ajaxbtn" >

                <img src="{{ url(Config::get('app.image.thumb').$post ->name) }}" alt="item title">
                <div class="item_desc">
                    <div>
                        <h3>{{ $post -> title }}</h3>
                        <ul class="keyword">
                            <li>keyword1</li>
                            <li>keyword2</li>
                            <li>keyword3</li>
                        </ul>
                        <span>&gt; View Project</span>
                    </div>

                </div>

            </a>

        </div>
    @endforeach
</div>
@endsection