@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<section id="home_page">
<main class="main">
   <div class="content">
      <div class="banner-home">
         @foreach ($banner as $item)
            <div class="item-banner">
               <a href="{{ $item->link }}">
               <img src="{{ $item->image }}" />
               </a>
            </div>
         @endforeach
      </div>
      <div class="row">
      <div class="col-12 content-detail" id="home">
         <!-- content -->
         <!-- Mẫu thiết kế nổi bật -->
         <div class="outstanding-design container">
            <div class="home-title d-flex">
                  <div class="title mr-auto">
                  <span class="square"></span>
                  <span class="text-uppercase">
                        <h2>C&#193;C MẪU THIẾT KẾ NỔI BẬT</h2>
                  </span>
                  </div>
                  <div class="see-more"><a href="{{ route('allListProCate', ['danhmuc'=>'mau-thiet-ke'])}}">Xem th&#234;m<i class="fas fa-angle-double-right"></i></a></div>
            </div>
            <div class="outstanding-design-list service-design row outstanding_pc">
               {{-- {{ dd($designBest)}} --}}
               @foreach ($designBest as $item)
                  @include('layouts.product.item',['pro'=>$item])
               @endforeach
            </div>
         </div>
         <!-- Khách hàng nói gì -->
         <div class="customer-talk">
            <div class="container">
                  <div class="home-title d-flex">
                  <div class="title mr-auto">
                     <span class="square"></span>
                     <span class="text-uppercase">
                        <h2>Kh&#225;ch h&#224;ng n&#243;i g&#236; về ch&#250;ng t&#244;i</h2>
                     </span>
                  </div>
                  </div>
                  <div class="customer-talk-slider">
                     @foreach ($reviewCus as $item)
                        <div class="customer-model">
                           <div class="customer">
                              <div class="images">
                                    <img src="{{ $item->avatar }}" alt="">
                              </div>
                              <div class="account">
                                    <h3>{{ languageName($item->name) }}</h3>
                                    <p>{{ languageName($item->position) }}</p>
                              </div>
                           </div>
                           <div class="talk-content">
                              {!! languageName($item->content) !!}
                           </div>
                        </div>
                     @endforeach
                  </div>
            </div>
         </div>
         <!-- Tin tức -->
         <div class="news-highlight container">
            <div class="home-title d-flex">
                  <div class="title mr-auto">
                  <span class="square"></span>
                  <span class="text-uppercase title_home">
                     <a href="">
                        <h2>Tin tức</h2>
                     </a>
                  </span>
                  <span class="text-uppercase title_newall">
                     <a>
                        <h2>Tin nổi bật</h2>
                     </a>
                  </span>
                  </div>
                  <div class="see-more"><a href="{{ route('allListBlog') }}">Xem th&#234;m<i class="fas fa-angle-double-right"></i></a></div>
            </div>
            <div class="news-highlight-content row">
                  <div class="big-news col-12 col-lg-6">
                  <a href="{{ route('detailBlog' , ['slug'=>$hotnews[0]->slug])}}">
                     <img src="{{ $hotnews[0]->image }}" alt="{{ languageName($hotnews[0]->title )}}">
                     <div class="big-news-content">
                        <h5 class="date-time ">
                           {{ date_format($hotnews[0]->created_at, 'd/m/Y' )}}
                        </h5>
                        <h3 class="big-news-title one-line">
                              {{ languageName($hotnews[0]->title )}}
                        </h3>
                        <h6 class="big-news-description two-line">
                              {{ languageName( $hotnews[0]->description) }}
                        </h6>
                     </div>
                  </a>
                  </div>
                  <div class="list-news col-12 col-lg-6">
                     @for ($i = 1; $i < count($hotnews) ; $i++)
                        <div class="row">
                           <div class="news-item">
                              <a href="{{ route('detailBlog', ['slug'=>$hotnews[$i]->slug] )}}" class=" d-flex">
                                    <div class="col-lg-4 padd0">
                                    <img src="{{ $hotnews[$i]->image }}" alt="{{ languageName($hotnews[$i]->title) }}">
                                    </div>
                                    <div class="col-lg-8 d-flex">
                                    <div class="news-item-content">
                                       <h5 class="date-time ">
                                          {{ date_format($hotnews[$i]->created_at, 'd/m/Y') }}
                                       </h5>
                                       <h3 class="big-news-title one-line">
                                          {{ languageName($hotnews[$i]->title) }} 
                                       </h3>
                                       <h6 class="big-news-description two-line">
                                          {{ languageName($hotnews[$i]->description) }} 
                                       </h6>
                                    </div>
                                    </div>
                              </a>
                           </div>
                        </div>
                     @endfor
                  </div>
            </div>
         </div>
         <!-- Liên hệ -->
         <div class="container">
            <div class="home-title d-flex">
                  <div class="title mr-auto">
                  <span class="square"></span>
                  <span class="text-uppercase">
                     <h2>Đăng ký dịch vụ</h2>
                  </span>
                  </div>
            </div>
         </div>
         <div class="register-now row container" id="register">
            <div class="text-register col-lg-3 col-md-12">
                  <h2>ĐĂNG K&#221; NGAY ĐỂ NHẬN TƯ VẤN MIỄN PH&#205; </h2>
            </div>
            <div class="form-register col-lg-9 col-md-12">
                  <form action="{{ route('postcontact') }}" class="row" method="post">
                     @csrf
                     <!-- register now -->
                     <div class="col-md-6 col-sm-12 order-m767-1">
                        <input class="input only_text" name="name" placeholder="Tên" type="text"/>
                     </div>
                     <div class="col-md-6 col-sm-12 order-m767-1">
                        <input class="input " name="email" placeholder="Email" type="text"/>
                     </div>
                     <div class="col-md-12 col-sm-12 order-m767-1">
                        <input class="input only_number" name="phone" placeholder="Số điện thoại" type="text"/>
                     </div>
                     <div class="col-md-12 col-sm-12 but-register order-m767-2">
                        <textarea class="input" cols="30" name="mess" placeholder="Nội dung" rows="2" style="width: 100%">
                        </textarea>
                     </div>
                     <div class="register-button right col-md-12 col-sm-12 order-m767-2 text-center">
                        <input type="submit" class=" font-SVNGilroyBold register-but" value="ĐĂNG K&#221;">
                     </div>
                     <input name="__RequestVerificationToken" type="hidden" value="3_N41uengT9CpoVX8Ob_75-NfVxYKAGKz6F2i9hBMA-_3naJCMeETeXymsEiFoM9HdjbB-BQ1vBXQftDQI5j7PZOhjlVpoMla2hDUXhgRMY1" />
                  </form>
            </div>
            <style>
               .form-register div {
                  margin-top: 10px;
               }
            </style>
         </div>
         <!-- Đối tác-->
         <div class="partner-our container">
            <div class="home-title d-flex">
                  <div class="title mr-auto">
                  <span class="square"></span>
                  <span class="text-uppercase">
                     <h2>Đối t&#225;c</h2>
                  </span>
                  </div>
            </div>
            <div class="partner-slider">
               @foreach ($partner as $item)
                  <div>
                     <img src="{{ $item->image }}" />
                  </div>
               @endforeach
            </div>
         </div>
         <style>
            .partner-slider .slick-slide img {
            padding: 30px;
            width: 100%;
            }
            .partner-our button {
            display: none !important;
            }
         </style>
      </div>
      </div>
</div>
</main>  
</section> 
@endsection