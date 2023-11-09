<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'Web Player: Music for everyone';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.home',$this->data);
    }
}
