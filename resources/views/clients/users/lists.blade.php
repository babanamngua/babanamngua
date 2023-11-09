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
    @if(session('msg'))
      <div class="alert alert-success text-center">{{session('msg')}}</div>
      @endif
      <h1>{{$title}}</h1>
      <a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>
      
      <hr />
      <table class="table table-bordered">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Thời gian</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($userlist))      
                @foreach ($userlist as $key => $item)
            <tr>
                <td>{{$key+1}}</td>            
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->created_at}}</td>
                <td>
                    <a href="{{route('users.getEdit', ['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a>
                </td>
                <td>
                    <a onclick="return confirm('bạn có chắc chắn muốn xóa không ?')" href="{{route('users.delete', ['id'=>$item->id])}}" class="btn btn-danger btn-sm">Xóa</a>
                </td>
            <tr>
                @endforeach              
            @else
            <tr>
                <td colspan="4">không có người dùng</td>
            </tr>
                
            @endif
        </tbody>
      </table>
    </div>
   </section>
@endsection