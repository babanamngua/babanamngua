<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class Userscontroller extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new Users();
    }

    public function index()
    {
        $title = 'Danh sách người dùng'; 
        $userlist =$this->users->getAllUsers();
        return view('clients.users.lists',compact('title','userlist'));
    }
    public function add()
    {
        $title = "Thêm người dùng";
        return view('clients.users.add',compact('title'));
    }
    public function postAdd(Request $resquest)
    {
        $resquest->validate([
            'name' =>'required|min:5',
            'email'=>'required|email|unique:users',
            'password'=>'required'
        ],[
            'name.required'=>'Họ và tên bắt buộc phải nhập',
            'name.min'=>'Họ và tên phải tù :min ký tự trở lên',
            'email.required'=>'Email bắt buộc phải nhập',
            'email'=>'Email không đúng định dạnh',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'Mật khẩu bắt buộc phải nhập'
        ]);
        $dataInsert = [
            $resquest->name,
            $resquest->email,           
            password_hash( $resquest->password, PASSWORD_BCRYPT),
            date('Y-m-d H:i:s')
        ];
        $this->users->addUser($dataInsert);
        return redirect()->route(('users.index'))->with('msg','Thêm người dùng thành công');
    }
    public function getEdit(Request $resquest,$id = 0)
    {
        $title = "Cập nhật người dùng";

        if(!empty($id))
            {
                $userDetail = $this->users->getDetail($id);
                if(!empty($userDetail[0]))
                {
                    $resquest->session()->put('id',$id);
                    $userDetail = $userDetail[0];
                }else
                {
                    return redirect()->route(('users.index'))->with('msg','người dùng không tồn tại');
                }
            }
        else
            {
                return redirect()->route(('users.index'))->with('msg','Liên kết không tồn tại');
            }

        return view('clients.users.edit',compact('title','userDetail'));
    }
    public function postEdit(Request $resquest,$id=0)
    {
        $id = session('id');
        if(empty($id))
        {
            return back()->with('msg','Liên kết không tồn tại');
        }
        $resquest->validate([
            'name' =>'required|min:5',
            'email'=>'required|email|unique:users,email,'.$id,
            'password'=>'required'

        ],[
            'name.required'=>'Họ và tên bắt buộc phải nhập',
            'name.min'=>'Họ và tên phải tù :min ký tự trở lên',
            'email.required'=>'Email bắt buộc phải nhập',
            'email'=>'Email không đúng định dạnh',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'Mật khẩu bắt buộc phải nhập'
        ]);
        $dataUpdated=[
            $resquest->name,
            $resquest->email,
            password_hash( $resquest->password, PASSWORD_BCRYPT),
            date('Y-m-d H:i:s')
        ];
        $this->users->updateUser($dataUpdated,$id);
        return back()->with('msg','Cập nhật thành công');
    }
    public function delete($id=0)
    {
        if(!empty($id))
            {
                $userDetail = $this->users->getDetail($id);
                if(!empty($userDetail[0]))
                {
                    $deleteStatus = $this->users->deleteUser($id);
                    if($deleteStatus)
                    {
                        $msg = 'Xóa người dùng thành công';
                    }else
                    {
                        $msg = 'Bạn không thể xóa người dùng này, vui lòng thử lại sau';
                    }
                }else
                {
                    $msg='người dùng không tồn tại';
                }
            }
        else
            {
                $msg ='Liên kết không tồn tại';
            }
            return redirect()->route(('users.index'))->with('msg',$msg);
    }
}
