@extends('layouts.main.master')
@section('title')
   {{ $title }}
@endsection
@section('content')
<div class="banner">
   <div class="banner-color" style="background-image:url({{ asset('frontend/img/dich-vu.png')}})">
      <a href="{{ route('allListProCate', ['danhmuc'=>$cateno->slug])}}">
         <div class="container banner-title">
               <h1>{{ $title }}</h1>
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
                              Tất cả {{ $title }}
                           </h2>
                        </span>
                     </div>
                  </div>
                  <div class="outstanding-design-list service-design row outstanding_pc">
                     @foreach ($list as $item)
                        @include('layouts.product.item',['pro'=>$item])
                     @endforeach
                  </div>
                  <div id="control-bot" class="control control-bot control-classer">
                     <div class="pager-news">
                           <div class="pagination pagination-normal pagination-centered ">
                              {{ $list->links() }}
                           </div>
                        </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
</section>
@endsection