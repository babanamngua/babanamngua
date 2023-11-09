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
    <div class="container">
      <h1>{{$title}}</h1>
      
     <form action="" method="POST">
        <div class="mb-3">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" name="name" placeholder="Họ và tên" value="{{old('name')}}">
                 @error('name')
        <span style="color: red">{{$message}}</span>
                  @enderror
        </div>
        

        <div class="mb-3">
            <label for="">email</label>
            <input type="text" class="form-control" name="email" placeholder="email . . ."  value="{{old('email')}}">
            @error('email')
            <span style="color: red">{{$message}}</span>
            @enderror
    </div>

    <div class="mb-3">
      <label for="">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password">
      @error('password')
      <span style="color: red">{{$message}}</span>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <a href="{{route('users.index')}}" class="btn btn-warning">Quay lại</a>
        @csrf
     </form>
    </div>
   </section>
@endsection