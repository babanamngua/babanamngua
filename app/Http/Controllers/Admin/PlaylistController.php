<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'playlist';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
       
            return view('clients.playlist',$this->data);
    }

    
}
