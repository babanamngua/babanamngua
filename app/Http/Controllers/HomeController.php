<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'cloudy';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.home',$this->data);
    }
}
