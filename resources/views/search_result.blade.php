@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('content')
<div class="banner">
	<div class="banner-color" style="background-image:url()">
		<a href="/tim-kiem-2247">
			<div class="container banner-title">
				<h1>Tìm kiếm</h1>
			</div>
		</a>
	</div>
</div>
<section>
	<div class="content">
		<div class="row">
		<div class="col-12 content-detail">
		<!-- content -->
			<div class="container">
				<div class="home-title d-flex">
					<div class="title mr-auto">
						<span class="square"></span>
						<span class="text-uppercase">
							<h2>Kết quả tìm kiếm "{{ $countproduct }}"</h2>
						</span>
					</div>
				</div>
				<div class="row service-design" id="design">
					@foreach ($resultPro as $item)
						@include('layouts.product.item', ['pro'=>$item])
					@endforeach
				</div>
				<div id="control-bot" class="control control-bot control-classer">
					<div class="pager-news">
						<div class="pagination pagination-normal pagination-centered ">
							{{-- {{ $resultPro->links() }} --}}
						</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
</section>
@endsection