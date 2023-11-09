@extends('layouts.admin')
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
<h1>day la content admin</h1>

   </section>
@endsection
@section('css')

@endsection
@section('js')

@endsection