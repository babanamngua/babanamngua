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
      {{-- @if (session('status'))
      <ul>
          <li class="text-danger"> {{ session('status') }}</li>
      </ul>
  @endif --}}
  @if (count($errors) >0)
         <ul>
             @foreach($errors->all() as $error)
                 <li class="text-danger"> {{ $error }}</li>
             @endforeach
         </ul>
     @endif
      @if(session('status'))
      <div class="alert alert-success">
         {{session('status')}}
      </div>
      @endif

{{-- header-main --}}
<div class="flex-center position-ref full-height" >

{{-- good morning --}}
   <div class="box-content-1">
<div class="box-content-1-text">
Good afternoon
 {{-- {{auth()->user()->name}} --}}
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

<div class="box-content-1-text-show-all"><a href="">Show all</a></div>
</div>
<div class="box-content-2-main">
<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/ab67fb8200005caf8eb00a9a2c00093ccde516c6.jfif') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Karaoke Hits
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin and drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/ab67fb8200005caf55dfb53724670e4db6cee444.jfif') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Vietnamese Songs
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin and drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/ab67fb8200005caf9e3dea60be755ccd97b7351f.jfif') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
Rap Stars
      </div>
            <div class="box-content-2-main-home-img-text-undertext">
Cha Viết code, Metro Boommin, drake and more
      </div>
   
</div>

<div class="box-content-2-main-home">
   <div class="box-content-2-main-home-img">
      <img src="{{ asset('storage/playlist/ab67fb8200005caf013ee3c983e6f60bf28bad5a.jfif') }}" alt="Black and white picture of a person" class="box-content-2-main-home-img-img">
   </div>
      <div class="box-content-2-main-home-img-text">
K-Pop Songs
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
      
      <div class="box-content-1-text-show-all"><a href="">Show all</a></div>
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