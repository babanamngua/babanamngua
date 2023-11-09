<div id="box-main" class="box-main">
  <div class="box-main-header">
     <button class="main-button"><img src="{{ asset('storage/icon/chevron-left.svg') }}" alt="Black and white picture of a person" class="main-button-img"></button>
     <button class="main-button"><img src="{{ asset('storage/icon/chevron-right.svg') }}" alt="Black and white picture of a person" class="main-button-img"></button>
  </div>
 
  <div class="box-main-search">

   {{-- <form action="">
   <div class="box-main-search-icon">
   <img src="{{ asset('storage/icon/searchicon.png') }}" alt="" class="box-main-search-icon-icon">
</div>
<input type="text" class="box-main-search-text" placeholder="What do you want to listen to?">
</form> --}}
{{-- <div class="box-collection-main">Playlists</div>
<div class="box-collection-main">Podcasts</div>
<div class="box-collection-main">Artists</div>
<div class="box-collection-main">Albums</div> --}}
@if ($title == 'search')
  <form action="">
   <div class="box-main-search-icon">
   <img src="{{ asset('storage/icon/searchicon.png') }}" alt="" class="box-main-search-icon-icon">
</div>
<input type="text" class="box-main-search-text" placeholder="What do you want to listen to?">
</form> 
@elseif ($title == 'collection')
<div class="box-collection-main">Playlists</div>
<div class="box-collection-main">Podcasts</div>
<div class="box-collection-main">Artists</div>
<div class="box-collection-main">Albums</div>
@endif
  </div>

  <div class="box-main-registered">
   @if (Route::has('login'))
   @auth
   <div class="box-main-registered-explore-premium">Explore Premium</div>
   <div class="box-main-registered-install-app">Install App</div>
   <div class="box-main-registered-informaion"><img src="{{ asset('storage/icon/bell.svg') }}" alt="" class="box-main-registered-informaion-img"></div>
   <div onclick="myFunction()" class="box-main-registered-avatar" ><img src="{{ asset('storage/avatar/peep.png') }}" alt="" class="box-main-registered-avatar-img">
    <ul id="myDropdown" class="box-main-registered-avatar-main-menu" >
       <li><a class="box-main-registered-avatar-main-menu-text" href="">Account</a></li>
       <li><a class="box-main-registered-avatar-main-menu-text" href="">Profile</a></li>
       <li><a class="box-main-registered-avatar-main-menu-text" href="">Upgrade to Premium</a></li>
       <li><a class="box-main-registered-avatar-main-menu-text" href="">Settings</a></li>
       <hr class="new1">
       <li><a class="box-main-registered-avatar-main-menu-text" href="{{route('logout')}}">Log out</a></li>
   </ul>
 </div>
         
         @else
   <div class="box-main-login"><a href="{{route('login')}}">Login</a></div>
            @if (Route::has( 'register'))
   <a href="{{route('register')}}">Sign up</a>
            @endif
         @endauth
@endif
  </div>
  </div>