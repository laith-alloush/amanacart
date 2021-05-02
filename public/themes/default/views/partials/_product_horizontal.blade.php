@foreach($products as $item)
    <div class="recent__items-box box">
        <a href="{{ route('show.product', $item->slug) }}">
            <div class="recent__items-img box-img">
                <img src="{{ get_inventory_img_src($item, 'medium') }}" data-name="product_image" alt="{{ $item->title }}" title="{{ $item->title }}">
            </div>
        </a>

        @if(empty($ratings))
            <div class="recent__items-ratting box-ratting">
                    @include('theme::partials._ratings', ['ratings' => $item->feedbacks->avg('rating')])
            </div>
        @endif

        @if(empty($title))
            <div class="recent__items-title box-title">
                <a href="{{ route('show.product', $item->slug) }}">{{ $item->title }}</a>
            </div>
        @endif

        @if(empty($pricing))
            <div class="recent__items-price box-price">
                @include('theme::partials._home_pricing')
            </div>
        @endif

        @if(empty($hover))
            <div class="feature__items-action box-action">
                @include('theme::partials._hover_buttons')
            </div>
        @endif
    </div>
@endforeach