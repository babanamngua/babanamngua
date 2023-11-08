<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'admin dashboard';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('admin.home',$this->data);
    }
}
