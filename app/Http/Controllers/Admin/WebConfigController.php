<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\WebCf;
use Illuminate\Http\Request;
/**
* 
*/
class WebConfigController extends Controller
{
	
	public function index()
	{	
		$webcf=WebCf::all();
		return view('admin.webConfig.index',[
			'webcfs'=>$webcf
			]);
	}
	public function save(Request $req){
		$save=WebCf::where('id',$req->id)->update($req->all());
		// dd($req->all());
		if($save)
		{
			return redirect()->route('webConfig')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi');
		}
	}
}
 ?>