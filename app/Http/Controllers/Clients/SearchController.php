<?php

namespace App\Http\Controllers\Clients;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'search';
        // $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.search',$this->data);
    }
}
