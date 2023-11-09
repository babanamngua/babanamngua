<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public $data =[];
    public function index()
    {
        $this->data['title'] = 'login';
        $this->data['message'] = 'Đăng ký tài khoản thành công';
        if(Auth::check())
        {
            return view('clients.home',$this->data);
        }else
        {
            return view('clients.login',$this->data);
        }    
        // $this->middleware('guest')->except('logout'); 
    }

    public function loginCheck(Request $request)
    {
        $this->data['title'] = 'Trang chủ';
        $this->data['message'] = 'Đăng nhập thành công thành công';
        $login = [
            'email' => $request->email,
            'password' =>$request->password,
        ];
        if (Auth::attempt($login)) {
            return view('clients.home',$this->data)->with('status', 'dang nhap thanh cong');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
       
    }
        
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
 
}
