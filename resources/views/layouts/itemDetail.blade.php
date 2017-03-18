@foreach( $items as $item)

    <div class="post_info">
        <h5 class="item_title">{{ $item -> title }}</h5>
        <h5 class="item_work_date"><span>Date</span>{{ $item -> work_date }}</h5>
        <h5 class="item_url"><span>URL</span><a href="{{ $item -> url }}" title="New Window to {{ $item -> title }} Site" target="_blank">{{ $item -> url }}</a></h5>
        <h5 class="item_ref"><span>Ref.</span>{{ $item -> reference }}</h5>
        <h5 class="item_skills"><span>Skills</span>{{ $item -> skills }}</h5>
        <h5 class="item_comment"><span>Comments</span>{{ $item -> comment }}</h5>
    </div>
    <div class="portfolio_image_wrap"><?php echo $item -> detail ?></div>
@endforeach
