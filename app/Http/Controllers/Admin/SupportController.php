<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;
use App\Models\Support;
use Illuminate\Http\Request;
/**
* 
*/
class SupportController extends Controller
{
	
	public function index()
	{	
		$support=Support::search()->orderBy('id','desc')->paginate(12);
		return view('admin.support.index',[
			'supports' => $support
			]);
	}
	public function add(Request $req){
		$this->validate($req,[
			'username' => 'required',
			'email' => 'required|email'
		],[
			'username.required' => 'Tên không được để trống',
			'email.required' => 'Email không được để trống',
			'email.email' => 'Email không đúng định dạng'
		]);
		$add = Support::create($req->all());
		if($add)
		{
			return redirect()->route('supporter')->with('success','Thêm mới thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi thêm mới');
		}
	}
	public function delSup($id){
		if ($del=Support::destroy($id)) {
			return redirect()->route('supporter')->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi xóa');
		}
	}
	public function editSup($id){
		$support=Support::orderBy('id','desc')->paginate(12);
		$editSup=Support::find($id);
		return view('admin.support.index',[
			'supports' => $support,
			'editSup' => $editSup
			]);
	}
	public function postEditSup($id,Request $req){
		$this->validate($req,[
			'username' => 'required',
			'email' => 'required|email'
		],[
			'username.required' => 'Tên không được để trống',
			'email.required' => 'Email không được để trống',
			'email.email' => 'Email không đúng định dạng'
		]);
		$edit=Support::find($id)->update($req->all());
		if($edit)
		{
			return redirect()->route('supporter')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi');
		}
	}
}
 ?>