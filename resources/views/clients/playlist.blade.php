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
<div>
    <div class="head-detail-playlist">
    <div class="head-detail-playlist-left">
            <div class="head-detail-playlist-left-box">
                <img src="{{ asset('storage/playlist/1.jfif') }}" alt="Black and white picture of a person" class="head-detail-playlist-left-box-img">
            </div>
    </div>
    <div class="head-detail-playlist-right">
        <div class="head-detail-playlist-right1">Playlist</div>
        <div class="head-detail-playlist-right2">My Playlist #5</div>
        <div class="head-detail-playlist-right3"><img src="{{ asset('storage/avatar/peep.png') }}" alt="" class="box-main-registered-avatar-img"><a class="head-detail-playlist-right3-avatar">Sa Liem</a> . 1,175 likes . 18 songs, 59 min 18 sec</div>
    </div>
    </div>
</div>
<div>
    <table class="table table-borderless">
        <thead>
          <tr class="table-single-box-head">
            <th class="table-title1">#</th>
            <td class="table-title"><a class="table-title-text">Title</a></th>
            <td class="table-title"><a class="table-title-text">Album</a></th>
            <td class="table-title"><a class="table-title-text">Date added</a></th>
            <td class="table-title">?</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="5"><hr class="new1"></td>
           
          </tr>
          <tr class="table-single-box">
            <th class="table-title1">1</th>
            <td>
                <div class="table-title-container-playlist-sidebar">
                    <div class="table-title-container-playlist-sidebar-left">
                        <img src="{{ asset('storage/playlist/1.jfif') }}" alt="Black and white picture of a person" class="table-title-container-playlist-sidebar-img">
                    </div>
                    <div class="table-title-container-playlist-sidebar-right">
                        <p class="table-title-container-playlist-sidebar-text">Every moment of you</p>
                        <p class="table-title-container-playlist-sidebar-text1">Sung Si Kyung</p>  
                    </div>                 
                </div>
            </td>
            <td class="table-title"><a class="table-title-text-tbody">Every moment of you Sung Si Kyung Sung Si Kyung</a></td>
            <td class="table-title"><a class="table-title-text-tbody">Jul 5, 2023</a></td>
            <td class="table-title"><a class="table-title-text-tbody">4:26</a></td>
          </tr>
          <tr class="table-single-box">
            <th class="table-title1">2</th>
            <td>
                <div class="table-title-container-playlist-sidebar">
                    <div class="table-title-container-playlist-sidebar-left">
                        <img src="{{ asset('storage/playlist/2.jfif') }}" alt="Black and white picture of a person" class="table-title-container-playlist-sidebar-img">
                    </div>
                    <div class="table-title-container-playlist-sidebar-right">
                        <p class="table-title-container-playlist-sidebar-text">I Miss You</p>
                        <p class="table-title-container-playlist-sidebar-text1">SOYOU</p>  
                    </div>                 
                </div>
            </td>
            <td class="table-title"><a class="table-title-text-tbody">Thornton</a></td>
            <td class="table-title"><a class="table-title-text-tbody">Jul 5, 2023</a></td>
            <td class="table-title"><a class="table-title-text-tbody">4:26</a></td>
          </tr>
          <tr class="table-single-box">
            <th class="table-title1">3</th>
            <td>
                <div class="table-title-container-playlist-sidebar">
                    <div class="table-title-container-playlist-sidebar-left">
                        <img src="{{ asset('storage/playlist/3.jfif') }}" alt="Black and white picture of a person" class="table-title-container-playlist-sidebar-img">
                    </div>
                    <div class="table-title-container-playlist-sidebar-right">
                        <p class="table-title-container-playlist-sidebar-text">I Don't Love You</p>
                        <p class="table-title-container-playlist-sidebar-text1">Urban Zakapa</p>  
                    </div>               
                </div>
            </td>
            <td class="table-title"><a class="table-title-text-tbody">Thornton</a></td>
            <td class="table-title"><a class="table-title-text-tbody">Jul 5, 2023</a></td>
            <td class="table-title"><a class="table-title-text-tbody">4:26</a></td>
          </tr>
        </tbody>
      </table>
</div>
   </section>
@endsection
@section('css')

@endsection
@section('js')

@endsection
