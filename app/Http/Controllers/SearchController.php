<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class SearchController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'Search';
        // $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.search',$this->data);
    }
}
