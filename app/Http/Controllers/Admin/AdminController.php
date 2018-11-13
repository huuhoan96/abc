<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
/**
* 
*/
class AdminController extends Controller
{
	function index()
	{
		return view('admin.index');
	}
	public function login(){
		return view('admin.user.login');
	}
	public function post_login(Request $req){
		$this->validate($req,[
			'email'=>'required|email',
			'password'=>'required'
		],[
			'email.required'=>'Email không được để trống',
			'email.email'=>'Email không đúng định dạng',
			'password.required'=>'Mật khẩu không được để trống'
		]);
		if(Auth::attempt($req->only('email','password'))){
			return redirect()->route('HomeAdmin');
		}
		else
		{
			return redirect()->back()->with('error','Tên đăng nhập hoặc mật khẩu không đúng');
		}
	}
	public function logout(){
		Auth::logout();
		return redirect()->route('login');
	}
}
 ?>