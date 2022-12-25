@extends('frontend.master_dashboard')
@section('main')

@section('title')
    Home Easy Multi Vendor Shop 
@endsection

     @include('frontend.home.home_slider')
 
        <!--End hero slider-->
     @include('frontend.home.home_features_category')

        <!--End category slider-->
     @include('frontend.home.home_banner')
        <!--End banners-->


	@include('frontend.home.home_new_product')

        <!--Products Tabs-->
 
 

    @include('frontend.home.home_features_product')

        
        <!--End Best Sales-->
 



        <!-- Fashion Category -->


        <!--End SweetHome Category -->


 





  

                      
 </section>

  <!--Vendor List -->

@include('frontend.home.home_vendor_list')

 <!--End Vendor List -->

@endsection