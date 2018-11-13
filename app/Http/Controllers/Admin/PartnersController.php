<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Partners;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class PartnersController extends Controller
{
	
	public function index()
	{
		$user=User::all();
		$partners=Partners::search()->paginate(15);
		return view('admin.partners.index',[
			'partners'=>$partners,
			'users'=>$user
			]);
	}
	public function addPartner(){
		return view('admin.partners.add');
	}	
	public function postAddPartner(Request $req){
		$this->validate($req,[
				'title' => 'required|min:3|unique:category,title',
				'slug' => 'required|min:3',
				'link' => 'required'
			],[
				'title.required' => 'Tên không được để trống !!',
				'title.min' => 'Tiêu đề ít nhất :min ký tự',
				'title.unique' => 'Tiêu đề đã tồn tại',
				'slug.min' => 'Đường dẫn tĩnh ít nhất :min ký tự',
				'slug.required' => 'Đường dẫn không được để trống',
				'link.required' => 'Đường dẫn liên kết không được để trống'
			]);
		if ($req->hasFile('file_upload')) {
			$img='';
			$file=$req->file_upload;
			$file->move(base_path('uploads/partner'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
			$addCategory=Partners::create($req->all());
			if($addCategory)
			{
				return redirect()->route('partners')->with('success','Thêm mới hãng sản phẩm thành công');
			}
			else
			{
				return redirect()->route('partners')->with('errors','Có lỗi khi thêm mới');
			}
		}
	}
	public function editPartner($id){
		$partner=Partners::find($id);
		return view('admin.partners.edit',[
			'partner'=>$partner
			]);
	}
	public function postEditPartner($id,Request $req){
		$this->validate($req,[
			'title' => 'required|min:3',
			'slug' => 'required|min:3',
			'link' => 'required'
		],[
			'title.required' => 'Tiêu đề không được để trống !!',
			'title.min' => 'Tiêu đề ít nhất :min ký tự',
			'slug.min' => 'Đường dẫn tĩnh ít nhất :min ký tự',
			'slug.required' => 'Đường dẫn không được để trống',
			'link.required' => 'Đường dẫn liên kết không được để trống'
		]);

		$partner=Partners::find($id);
		$img=$partner->cover_image;
		if($req->hasFile('cover_image')) {
			$file=$req->cover_image;
			$file->move(base_path('uploads/partner'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		if($editPartner=$partner->update($req->all()))
		{
			return redirect()->route('category')->with('success','Cập nhật hãng sản phẩm thành công');
		}
		else
		{
			return redirect()->route('category')->with('error','Có lỗi khi cập nhật');
		}
	}	
	public function deletePartner($id){
		$delete=Partners::find($id)->delete();
		if ($delete)
		{
			return redirect()->back()->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi xóa');
		}
	}
}
?>