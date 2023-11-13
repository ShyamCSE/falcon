@php 
 $setting = App\Models\Setting::first();
@endphp
<x-guest-layout>
<section class="about-us"  style="margin-top: 0px"	>
      <div class="container">
    
        
        
        
        <div class="heading-page header-text">
          <section class="page-heading">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="text-content">
                    <h4 class="text-center">About Us </h4>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
      </div>
        
        
        <div class="row m-2" style="margin-4">
          
         
          <div class="" style="text-center"> {!! $setting->about_us !!}</div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-icons">
              <li><a href="{{$setting->facebook }}"><i class="fa fa-facebook"></i></a></li>
              <li><a href="{{$setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{$setting->googleplus }}"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
              <li><a href="{{ $setting->linkedin  }}"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        
        
      </div>
    </section>

</x-guest-layout>
