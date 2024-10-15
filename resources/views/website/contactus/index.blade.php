@extends('layout.wb_HF')
@section('mywebsite')

<div class="back_re">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="title">
                <h2>Contact Us</h2>
            </div>
         </div>
      </div>
   </div>
</div>
<!--  contact -->
<div class="contact">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <form action="{{ url('/UserContactsStore') }}" id="request" class="main_form" method="POST" enctype="multipart/form-data">

               @csrf
               <div class="row">
                  <div class="col-md-12 ">
                     <input class="contactus" value="{{ old('name') }}" placeholder="Name" type="text" name="name"> 
                     @error('name')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Email" type="email" value="{{ old('email') }}" name="email"> 
                     @error('email')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
                  </div>
                  <div class="col-md-12">
                     <input class="contactus" placeholder="Phone Number" value="{{ old('phone') }}" type="number" name="phone">  
                     @error('phone')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror                        
                  </div>
                  <div class="col-md-12">
                     <textarea class="textarea" placeholder="Message" type="type" value="{{ old('message') }}" Message="Name" name="message"></textarea>
                     @error('message')
                     <p class="text-danger">{{ $message }}</p>
                 @enderror       
                  </div>
                  <div class="col-md-12">
                     <button class="send_btn" type="submit">Send</button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-6">
            <div class="map_main">
               <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- end contact -->

@endsection
