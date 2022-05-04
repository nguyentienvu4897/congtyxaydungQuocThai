@extends('layouts.main.master')
@section('content')
<div class="banner">
	<div class="banner-color" style="background-image:url({{ asset('frontend/img/tin-tuc.png') }})">
		<a href="/bao-gia-2073">
			<div class="container banner-title">
				<h1>Tin Tức</h1>
			</div>
		</a>
        <div class="container sitemap">
            <a href="{{ route('home') }}" class="text-white text-uppercase">
                Trang chủ
            </a>
            <span class="img-spansitemap">
                <img src="{{ asset('frontend/img/span-sitemap.png')}}" alt="spansitemap">
            </span>
            <a href="" class="text-white text-uppercase">
                Tin tức
            </a>
            <span class="img-spansitemap">
                <img src="{{ asset('frontend/img/span-sitemap.png')}}" alt="spansitemap">
            </span>
            <a href="{{ route('listCateBlog', ['slug'=>$cate->slug ])}}" class="text-white text-uppercase">
                {{ $title_page }}
            </a>
        </div>
	</div>
</div>
<section>
    <div class="content content-news">
        <div class="row">
            <div class="col-12 container" id="news-detail">
                <div class="title-news-detail">
                    <h1>
                    {{ languageName($blog_detail->title) }}
                    </h1>
                    <div class="star-rate">
                    <span>
                        <p>{{ date_format($blog_detail->created_at, 'd/m/Y')}}</p>
                    </span>
                    </div>
                </div>
                <div class="detail-body">
                    {!! languageName($blog_detail->content) !!}
                </div>
                <div class="news-relate">
                    <h2>BÀI VIẾT LIÊN QUAN</h2>
                </div>
                <div class="news-detail-slider slick-initialized slick-slider">
                    <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button>
                    <div class="slick-list draggable">
                        <div class="slick-track">
                        @foreach ($blog as $item)
                            <a class="item slick-slide slick-cloned" href="{{ route('detailBlog', ['slug'=>$item->slug])}}" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 370px;">
                            <img src="{{ $item->image }}" style="height: 140.77px;">
                            <p class="category-item">{{ $title_page }}</p>
                            <p class="title-item one-line">{{ languageName($item->title) }}</p>
                            <p class="create-time">{{ date_format($item->created_at, 'd/m/Y')}}</p>
                            </a>
                        @endforeach
                        </div>
                    </div>
                    <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                </div>
            </div>
            <script type="”application/ld+json“"></script>
        </div>
        </div>
    </section>
@endsection