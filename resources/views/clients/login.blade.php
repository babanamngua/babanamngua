@extends('layouts.clients')
@section('title')
   {{$title}}
@endsection

@section('siderbar')
   @parent
   <h3>Products Sidebar</h3>
@endsection

@section('content')
   <section>
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
    <form action="{{ route('loginCheck') }}" method="post">
      {{-- @csrf --}}
      {{csrf_field()}} 
      <div class="form-group">
        <label for="">Email address</label>
        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="remember">
        <label class="form-check-label" for="remember">Rememeber me</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
   </section>
@endsection