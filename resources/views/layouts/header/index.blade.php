@php $qtys = 0 ; @endphp
   @if(session('cart'))
   
   @foreach(session('cart') as $id => $details)
      @php 
      $qtys += $details['quantity'] ;
      @endphp
   @endforeach
   @endif
<section>
   <div class="header">
   <div class="top-header">
   <div class="row">
      <div class="col-md-4 name-company">
         <p class="text-white">{{ $setting->company }}</p>
      </div>
      <div class="col-md-5 contact-header d-flex">
         <span class="text-white">
         <img src="{{ asset('frontend/img/phone.png') }}" alt="">
         {{ $setting->phone1 }} - {{ $setting->phone2 }}
         </span>
         <span>
         <a class="text-white" href="{{ $setting->facebook }}">
         <img src="{{ asset('frontend/img/fb.png') }}" alt="">
         Fanpage
         </a>
         </span>
         <span>
         <a class="text-white" href="https://www.facebook.com/groups/192747652283022/?ref=share">
         <img src="{{ asset('frontend/img/fb.png') }}" alt="">
         Group
         </a>
         </span>
         <span>
         <a class="text-white" href="https://zalo.me/305174446099972683">
         <img src="{{ asset('frontend/img/zalo.png') }}" alt="">
         Zalo
         </a>
         </span>
      </div>
      <div class="col-md-3 d-flex">
         <form action="{{ route('search_result') }}" method="post">
            @csrf
            <span class="form-search d-flex">
            <img src="{{ asset('frontend/img/search.png') }}" alt="" class="icon-search">
            <input type="text" name="keyword" class="input-search" placeholder="Tìm kiếm">
            </span>
         </form>
      </div>
   </div>
   </div>
   <div class="menu-header">
   <img src="{{ asset('frontend/img/close.png') }}" alt="" class="open-menu-home" id="close-main">
   <span class="open-menu-home" id="open-main">
   <img src="{{ asset('frontend/img/icon-left.png') }}https://vcchomes.vn/Images/" alt="" style="width: 100%; height: 100%;">
   </span>
   <a style="margin: auto; " href="{{ route('home') }}"><img src="{{ $setting->logo }}" alt="" class="logo"></a>
   <div class="text-uppercase menu">
      <ul class="menu_parent">
         <li class="parent-li">
               <a href="{{route('aboutUs')}}" target="_self" id="gioi-thieu">Giới thiệu</a>
         </li>
         <li class="parent-li">
               <a href="#" target="_self" id="dich-vu">Dịch vụ</a>
               <ul class="menu-lv1">
                  @foreach ($service as $item)
                     <li>
                        <a href="{{ route('serviceDetail', ['slug'=>$item->slug])}}" target="_self">{{ $item->name }}</a>
                     </li>
                  @endforeach
               </ul>
         </li>
         @foreach ($categoryhome as $cate)
         <li class="parent-li">
               <a href="{{ route('allListProCate', ['danhmuc'=>$cate->slug])}}" target="_self" id="mau-thiet-ke">{{ languageName($cate->name) }}</a>
               <ul class="menu-lv1">
                  @if (count($cate->typeCate) > 0)
                     @foreach ($cate->typeCate as $item)
                        <li>
                           <a href="{{ route('allListProType', ['danhmuc'=>$cate->slug, 'loaidanhmuc'=>$item->slug]) }}" target="_self">{{ languageName($item->name) }}</a>
                        </li>
                     @endforeach
                  @endif
               </ul>
         </li>
         @endforeach
         <li class="parent-li">
               <a href="{{ route('allListBlog') }}" target="_self" id="tin-tuc">Tin tức</a>
               <ul class="menu-lv1">
                  @foreach ($blogCate as $item)
                     <li>
                        <a href="{{ route('listCateBlog', ['slug'=>$item->slug])}}" target="_self">{{ languageName($item->name) }}</a>
                     </li>
                  @endforeach
               </ul>
         </li>
         <li class="parent-li">
               <a href="{{ route('lienHe')}}" target="_self" id="lien-he">Li&#234;n hệ</a>
         </li>
      </ul>
   </div>
   </div>
   {{-- <label for="nav_mobile_input" class="nav_overlay"></label>
   <!-- Modal -->
   <div class="modal fade" id="loginModalLabel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div role="tabpanel">
               <!-- Nav tabs -->
               <ul class="nav nav-tabs row" role="tablist">
               <li role="presentation" class="xemHuongNha col-6 text-center">
                  <a href="#login-partial" class="active" role="tab" data-toggle="tab">Đăng nhập</a>
               </li>
               <li role="presentation" class="xemTuoiXayNha col-6 text-center">
                  <a href="#register-partial" role="tab" data-toggle="tab">Đăng ký</a>
               </li>
               </ul>
               <!-- Tab panes -->
               <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="login-partial">
                  ﻿
                  <form id="form2" method="post">
                     <input name="__RequestVerificationToken" type="hidden" value="f19oWDvP0hcMlaGKooU-nm8gg0WXIDSFGALoIpnYWkhtxvrnAC5jkH6CMHfxq3Iv1cXlInnoIfh-oJDYcXgaQ1P2ih6-SdwRoiUS6YJEQyE1" />    
                     <div class="form-group">
                           <div class="input-group mb-3">
                           <input class="form-control" name="UserName" placeholder="Email" type="text" value="" />
                           </div>
                     </div>
                     <div class="form-group">
                           <div class="input-group mb-3">
                           <input class="form-control" data-val="true" data-val-required="Yêu cầu nhập mật khẩu" name="Password" placeholder="Mật khẩu" type="password" value="" />
                           </div>
                     </div>
                     <button type="submit" class="btn btn-danger btn-block margin-top-10">Đăng nhập</button>
                     <div class="validation-summary-valid" data-valmsg-summary="true">
                           <ul>
                           <li style="display:none"></li>
                           </ul>
                     </div>
                  </form>
               </div>
               <div role="tabpanel" class="tab-pane" id="register-partial">
                  <form action="/Account/Register" data-ajax="true" data-ajax-failure="OnFailure" data-ajax-method="POST" data-ajax-success="OnSuccess" id="form3" method="post">
                     <div class="validation-summary-valid" data-valmsg-summary="true">
                           <ul>
                           <li style="display:none"></li>
                           </ul>
                     </div>
                     <div class="form-group">
                           <div class="input-group mb-3">
                           <input class="form-control" name="UserName" placeholder="Email" type="text" value="" />
                           </div>
                     </div>
                     <div class="form-group">
                           <div class="input-group mb-3">
                           <input class="form-control" id="Password" name="Password" placeholder="Mật khẩu" type="password" />
                           </div>
                     </div>
                     <div class="form-group">
                           <div class="input-group mb-3">
                           <input class="form-control" id="UserProfile_Mobile" name="UserProfile.Mobile" placeholder="Số điện thoại" type="text" value="" />
                           </div>
                     </div>
                     <input type="submit" class="btn btn-danger btn-block margin-top-10" value="Đăng ký">
                  </form>
               </div>
               </div>
         </div>
      </div>
   </div>
   </div> --}}
   <style>
   .downloadPDF {
   cursor: pointer;
   }
   </style>
   </div>
</section>