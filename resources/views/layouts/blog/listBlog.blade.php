@extends('layouts.main.master')
@section('title')
    Tin Tức
@endsection
@section('content')
<div class="banner">
    <div class="banner-color" style="background-image:url({{ asset('frontend/img/tin-tuc.png')}})">
        <a href="{{ route('allListBlog') }}">
            <div class="container banner-title">
                <h1>Tin tức</h1>
            </div>
        </a>            
    </div>
    </div>
    <section>
    <div class="content">
            <div class="row">
                <div class="col-12 content-detail">
                <div class="container">
                    <div class="home-title d-flex">
                        <div class="title">
                            <span class="square"></span>
                            <span class="text-uppercase">
                            <h2>
                                {{ $title_page }}
                            </h2>
                            </span>
                        </div>
                    </div>
                    <div class="row view-list">
                        {{-- {{ dd($list)}} --}}
                        @foreach ($blog as $item)
                        <a class="item col-lg-3 col-md-4 col-sm-6 col-12" href="{{ route('detailBlog', ['slug'=>$item->slug])}}">
                            <div class="item-image">
                                <img src="{{ $item->image }}">
                            </div>
                            <div class="big-category">
                                <div class="item_title">
                                    <p>{{ languageName($item->cate->name) }}</p>
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