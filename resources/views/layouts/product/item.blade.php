
@php
      $imgs = json_decode($pro->images);
@endphp
<div class="service-design-item col-lg-3 col-md-4 col-sm-6 col-12" data-target="#myModel" data-toggle="modal">
   <div class="aspect-ratio-square">
      <img src="{{ $imgs[0] }}">
   </div>
   <div class="text-uppercase text-center text-black">
      <h3>{{ languageName($pro->name) }}</h3>
   </div>
</div>

{{-- popup product --}}
<section>
   <div class="modal" id="myModel">
      <div class="modal-dialog">
         <div class="modal-content">
               <button type="button" class="close" data-dismiss="modal">
                  <img src="{{ asset('frontend/img/x.png')}}" alt="x">
               </button>
               <div class="row">
                  <div class="col-md-7">
                     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           {{-- @foreach ($imgs as $img) --}}
                              <div class="carousel-item active">
                                 <img src="{{ $imgs[0] }}" class="d-block w-100" alt="">
                              </div>
                              @for ($i = 1; $i < count($imgs); $i++)
                                 <div class="carousel-item">
                                    <img src="{{ $imgs[$i] }}" class="d-block w-100" alt="">
                                 </div>
                              @endfor
                           {{-- @endforeach --}}
                           </div>
                           <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                           </a>
                        </div>
                  </div>
                  <div class="col-md-5">
                     <div class="header text-center">
                        <h2>{{ languageName($pro->name) }}</h2>
                        <p>{{ isset($pro->price) ? "Gía: ".number_format($pro->price) : ""}}<sup>vnđ</sup></p>
                     </div>
                     {{-- {!! languageName($pro->description) !!} --}}
                     {!! languageName($pro->content) !!}
                  </div>
               </div>
         </div>
      </div>
   </div>
</section>