<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'Collection';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        return view('clients.collection',$this->data);
    }
}
