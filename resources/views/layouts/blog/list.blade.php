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
    <div class="content">
        <div class="row">
        <div class="col-12 content-detail">
        <!-- content -->
            <div class="container">
            <div class="row view-list">
                {{-- {{ dd($list)}} --}}
                @foreach ($blog as $item)
                <a class="item col-lg-3 col-md-4 col-sm-6 col-12" href="{{ route('detailBlog', ['slug'=>$item->slug])}}">
                    <div class="item-image">
                        <img src="{{ $item->image }}">
                    </div>
                    <div class="big-category">
                        <div class="item_title">
                            <p>{{ $title_page }}</p>
                        </div>
                        <div class="item-create-time">
                            <span>{{ date_format($item->created_at, 'd/m/Y')}}</span>
                        </div>
                    </div>
                    <div class="item-title three-line">
                        <h3>{{ languageName($item->title) }}</h3>
                    </div>
                    <h6 class="big-news-description two-line">{{ languageName($item->description) }}</h6>
                </a>
                @endforeach
            </div>
            <div id="control-bot" class="control control-bot control-classer">
                <div class="pager-news">
                    <div class="pagination pagination-normal pagination-centered ">
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection