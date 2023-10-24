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

{{-- made for u --}}
<div class="box-content-1">
   <div class="box-content-1-text">
      <DIV class="box-content-1-text-tittle">Browse all</DIV>
   
   {{-- <div class="box-content-1-text-show-all">Show all</div> --}}
   </div>
   <div class="box-content-3-main">
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Podcasts
                  </div>
         <img src="{{ asset('storage/playlist/ab6765630000ba8a81f07e1ead0317ee3c285bfa.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>
   
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Live Events
                  </div>
         <img src="{{ asset('storage/playlist/live-events_category-image.jpg') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>
   
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Made For You
                  </div>
         <img src="{{ asset('storage/playlist/ea364e99656e46a096ea1df50f581efe.png') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>
   
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            New Releases
                  </div>
         <img src="{{ asset('storage/playlist/ab67706f000000027ea4d505212b9de1f72c5112.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>

   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Vietnamese Music
                  </div>
         <img src="{{ asset('storage/playlist/ab67fb8200005caf55dfb53724670e4db6cee444.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>

   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Pop
                  </div>
         <img src="{{ asset('storage/playlist/ab67fb8200005cafa862ab80dd85682b37c4e768.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>
   
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Daily Mix 1
                  </div>
         <img src="{{ asset('storage/playlist/ab67fb8200005caf013ee3c983e6f60bf28bad5a.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>
   
   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
            Daily Mix 1
                  </div>
         <img src="{{ asset('storage/playlist/ab67fb8200005caf9e3dea60be755ccd97b7351f.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
      </div>
   </div>

   <div class="box-content-3-main-home">
      <div class="box-content-3-main-home-img">
         <div class="box-content-3-main-home-img-text">
Dance/Electronic
                  </div>
         <img src="{{ asset('storage/playlist/ab67fb8200005caf9e3dea60be755ccd97b7351f.jfif') }}" alt="Black and white picture of a person" class="box-content-3-main-home-img-img">
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