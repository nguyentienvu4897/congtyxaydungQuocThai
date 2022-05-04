<!DOCTYPE html>
<html lang="vi-VN">
<head>
   <!-- All Meta -->
   <meta charset="UTF-8">
   <link rel="Shortcut Icon" href="{{url(''.$setting->favicon)}}" type="image/png" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <meta name="p:domain_verify" content="7d7ee219c972f32def426b39ff579234" />
   <meta name="format-detection" content="telephone=no">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta itemprop="description" name="description" content="@yield('description')">
   <meta itemprop="keywords" name="keywords" content="@yield('title')" />
   <meta property="fb:app_id" content="425450817599085">
   <meta property="fb:admins" content="ralphxyz">
   <meta http-equiv="refresh" content="10800">
   <meta property="og:title" content="@yield('title')" />
   <meta property="og:image" itemprop="thumbnailUrl" content="@yield('image')" />
   <meta property="og:image:alt" itemprop="thumbnailUrl" content="@yield('image')" />
   <meta property="og:description" itemprop="description" content="@yield('description')" />
   <meta property="og:type" content="travel" />
   <meta property="og:site_name" content="Pentagon" />
   <meta property="og:url" itemprop="url" />
   <meta property="article:section" />
   <meta name="facebook-domain-verification" content="h2pftok4kacs77c2vf9tibioro7xci" />
   <title>@yield('title')</title>
   <!-- All File Css -->
   <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet" />
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
   <link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet" />
   <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.css')}}" />
   <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}" />
   <link href="{{asset('frontend/css/kendo.common.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/kendo.metro.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/kendo.compatibility.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/devnote-stable.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/devnote.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/jquery.pnotify.default.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/jquery.pnotify.default.icons.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/vcc.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/vcc-spark.css')}}" rel="stylesheet" />
   <link href="{{asset('frontend/css/style2.css')}}" rel="stylesheet" />
   <script src="{{asset('frontend/js/modernizr-2.6.2.js')}}"></script>
   <script src="{{asset('frontend/js/jquery-2.0.3.js')}}"></script>
   <script src="{{asset('frontend/js/jquery.cookie.js')}}"></script>
   <script src="{{asset('frontend/js/jquery.unobtrusive-ajax.js')}}"></script>
   <script src="{{asset('frontend/js/jquery.validate.js')}}"></script>
   <script src="{{asset('frontend/js/jquery.validate.unobtrusive.js')}}"></script>
   <script src="{{asset('frontend/js/jquery.pnotify.min.js')}}"></script>
   <script src="{{asset('frontend/js/image-zoom.js')}}"></script>
   <script src="{{asset('frontend/js/kendo.all.min.js')}}"></script>
   <script src="{{asset('frontend/js/kendo.aspnetmvc.min.js')}}"></script>
   <script src="{{asset('frontend/js/kendo.modernizr.custom.js')}}"></script>
   <!-- Title -->
   <title>
      C&#244;ng Tr&#236;nh Viettel - Website ch&#237;nh thức dịch vụ x&#226;y nh&#224; trọn g&#243;i
   </title>
</head>
<body>
   <div class="bg-one-load" style="background-color: #21252991"></div>
   <div id="hotline">
      <a href="#">
            <div class="facebook">
            <img src="{{ asset('frontend/img/face.png')}}" />
            </div>
      </a>
      <a href="#">
            <div class="message">
            <img src="{{ asset('frontend/img/messs.png')}}" />
            </div>
      </a>
      <a class="phone" href="#">
      <img src="{{ asset('frontend/img/PhoneCall.png')}}" />
      </a>
   </div>
      @include('layouts.header.index')
      @yield('content')
   <section>
      <div class="popup-register">
            <script></script>
            <div class="home-popup">
            <button type="button" class="close">
            <img src="{{ asset('frontend/img/x.png')}}" alt="x">
            </button>
            <p class="title-popup">
               Tư vấn miễn phí
            </p>
            <form action="{{ route('postcontact') }}" class="row" method="post">
               @csrf
               <!-- register now -->
               <div class="col-md-6 col-sm-12 order-m767-1">
                  <input class="input only_text" name="name" placeholder="Tên" type="text" value="" />
               </div>
               <div class="col-md-6 col-sm-12 order-m767-1">
                  <input class="input " id="mail" name="email" placeholder="Email" type="text" value="" />
               </div>
               <div class="col-md-12 col-sm-12 order-m767-1">
                  <input class="input only_number" name="phone" placeholder="Số điện thoại" type="text" value="" />
               </div>
               <div class="col-12 but-register order-m767-2">
                  <textarea class="input register-content" cols="20" name="mess" placeholder="Nội dung" rows="2">
                  </textarea>
               </div>
               <div class="register-button right col-md-12 col-sm-12 order-m767-2 text-center">
                  <input type="submit" class=" font-SVNGilroyBold register-but" value="ĐĂNG K&#221;" id="button-dang-ky">
               </div>
               <input name="__RequestVerificationToken" type="hidden" value="4FKnedGKAc8dhbCH03ZIklOtsPBfa-rI7-oxbPTCB09Tx6JD0tqkJZLCHMUKJT9K3QHOUHfiIfhtfVpupcYiFCWROmjsYzw1LqLqyoSewB01" />
            </form>
            </div>
            <div class="isa_success" id="isa_success">
            <i class="fa fa-check"></i>
            Đ&#227; gửi th&#244;ng tin li&#234;n hệ th&#224;nh c&#244;ng
            </div>
            <script>
            $(document).ready(function () {
               $(".home-popup .close").click(function () {
                  $(".home-popup").hide();
                  $(".bg-one-load").hide();
               });
               $(".bg-one-load").click(function () {
                  $(".home-popup").hide();
                  $(".bg-one-load").hide();
               });
            });
            
            function getProvinceIDPopup() {
               return {
                  provinceID: $("#ComboboxProvincesPopup").val()
               };
            }
            function getDistrictIDPopup() {
               return {
                  districtID: $("#ComboboxDistrictsPopup").val()
               };
            }
            </script>
      </div>
   </section>
   <!-- <div class="test">abc</div> -->
   <!-- footer -->
      @include('layouts.footer.index')
   <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
   <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
   <script src="{{asset('frontend/js/popper.min.js')}}"></script>
   <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>