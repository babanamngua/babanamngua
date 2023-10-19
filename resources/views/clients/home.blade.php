@extends('layouts.clients')
@section('title')
   {{$title}}
@endsection
@section('siderbar')
   @parent
   <h3>Home Sidebar</h3>
@endsection
@section('content')
   <section>

      {{-- @if(session('msg'))
      <div class="alert alert-{{session('type')}}">
         {{session('msg')}}
      </div>
      @endif --}}

{{-- header-main --}}

{{-- good morning --}}
   <div class="box-content-1">
<div class="box-content-1-text">
Good afternoon
</div>
<div class="box-content-1-main">
<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/1.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">Liked Songs</div>
   
</div>

<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/2.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">My playlist #7</div>
   
</div>

<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/2.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">My playlist #6</div>
   
</div>


<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/4.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">TP</div>
   
</div>

<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/6.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">This is Highvyn</div>
   
</div>


<div class="box-content-1-main-home">
   <div class="box-content-1-main-home-img">
      <img src="{{ asset('storage/playlist/8.jfif') }}" alt="Black and white picture of a person" class="box-content-1-main-home-img-img">
   </div>
      <div class="box-content-1-main-home-img-text">MONO</div>
   
</div>
</div>
<div>
   
</div>
   </div>

{{-- made for u --}}
   <div class="box-content-1">
<div class="box-content-1-text">
   <DIV class="box-content-1-text-tittle">Made For Sa Liem</DIV>

<div class="box-content-1-text-show-all">Show all</div>
</div>
<div class="box-content-2-main">
<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 1
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin and drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 2
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 3
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>
<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 4
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>
<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 6
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 8
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Daily Mix 8
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>

</div>
<div>
   
</div>
   </div>

   {{-- made for u --}}
   <div class="box-content-1">
      <div class="box-content-1-text">
         <DIV class="box-content-1-text-tittle">Your Top Mixes</DIV>
      
      <div class="box-content-1-text-show-all">Show all</div>
      </div>
      <div class="box-content-2-main">
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 1
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>
      
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 2
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>
      
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 3
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 4
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 6
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin and drake and more
            </div>
         
      </div>
      
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 8
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>
      
      <div class="box-content-2-main-home">
         <div class="box-content-2-main-home-img">
            <img src="{{ asset('storage/playlist/1.png') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
         </div>
            <div class="box-content-2-main-home-img-text">
      Daily Mix 8
            </div>
                  <div class="box-content-2-main-home-img-text-undertext">
      Cha Viết code, Metro Boommin, drake and more
            </div>
         
      </div>

      </div>
      <div>
         
      </div>
         </div>




   </section>
@endsection
@section('css')

@endsection
@section('js')

@endsection