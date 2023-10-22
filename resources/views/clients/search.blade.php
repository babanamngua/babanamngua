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
search
   </div>


   </section>
@endsection
@section('css')

@endsection
@section('js')

@endsection