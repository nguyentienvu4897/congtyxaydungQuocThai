@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<div class="banner">
	<div class="banner-color" style="background-image:url({{ asset('frontend/img/dich-vu.png')}})">
		<a href="">
			<div class="container banner-title">
				<h1>Dịch vụ</h1>
			</div>
		</a>
		<div class="container sitemap">
			<a href="{{ route('home')}}" class="text-white text-uppercase">
				Trang chủ
			</a>
			<span class="img-spansitemap">
				<img src="{{ asset('frontend/img/span-sitemap.png')}}" alt="spansitemap">
			</span>
			<a href="{{ route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="text-white text-uppercase">
				Dịch vụ
			</a>
			<span class="img-spansitemap">
				<img src="{{ asset('frontend/img/span-sitemap.png')}}" alt="spansitemap">
			</span>
			<a href="{{ route('serviceDetail', ['slug'=>$detail_service->slug])}}" class="text-white text-uppercase">
				{{ $detail_service->name }}
			</a>
			<span class="img-spansitemap">
				<img src="/Content/themes/web/images/span-sitemap.png" alt="spansitemap">
			</span>
		</div>
	</div>
</div>
<section>
	<div class="content">
		<div class="row">
			<div class="col-12 content-detail" id="serviceID">
			<!-- content -->
			<div class="service-content container">
			<div>
					<div class="service-header">
						<h2><span><span class="square"></span>{{ $detail_service->name }}</span></h2>
					</div>
					<div>
						{!! languageName($detail_service->content) !!}
					</div>
					<div>
						<img src="{{ $detail_service->image }}" alt="{{ $detail_service->name }}" style="width: 100%">
					</div>
			</div>
			</div>
		</div>
	</div>
</section>

@endsection