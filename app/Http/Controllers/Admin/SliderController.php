<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Models\Slider;
/**
* 
*/
class SliderController extends Controller
{
	public function index()
	{	
		$user=User::all();
		$slider=Slider::search()->orderBy('id','desc')->paginate(10);
		return view('admin.slider.index',[
			'sliders' => $slider,
			'users' => $user
			]);
	}
	public function addSlider(Request $req){
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required|unique:slider,slug',
			'link' => 'required',
			'file_upload' => 'required|mimes:jpeg,jpg,bmp,png'
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'link.required' => 'Liên kết không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại',
			'file_upload.required' => 'Ảnh không được để trống',
			'file_upload.mimes' => 'Ảnh không đúng định dạng'
		]);
		$img='';
		if ($req->hasFile('file_upload')) 
		{
			$file=$req->file_upload;
			$file->move(base_path('uploads/slider'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
			// dd($req->all());	
		$add=Slider::create($req->all());
		if($add)
		{
			return redirect()->route('slider')->with('success','Thêm mới thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi thêm mới');
		}
	}
	public function delSlider($id){
		$delSlider=Slider::destroy($id);
		if($delSlider)
		{
			return redirect()->route('slider')->with('success','Xóa thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi khi Xóa');
		}
	}
	public function editSlider($id){
		$editSlider=Slider::find($id);
		$slider=Slider::orderBy('id','desc')->paginate(12);
		$user=User::all();
		return view('admin.slider.index',[
			'sliders' => $slider,
			'users' => $user,
			'editSlider' => $editSlider
			]);
	}
	public function postEditSlider($id, Request $req){
		$this->validate($req,[
			'title' => 'required',
			'slug' => 'required',
			'link' => 'required',
			'file_upload' => 'mimes:jpeg,jpg,bmp,png'
		],[
			'title.required' => 'Tiêu đề không được để trống',
			'slug.required' => 'Đường dẫn không được để trống',
			'link.required' => 'Liên kết không được để trống',
			'slug.unique' => 'Đường dẫn đã tồn tại',
			'file_upload.required' => 'Ảnh không được để trống',
			'file_upload.mimes' => 'Ảnh không đúng định dạng'
		]);
		$slider=Slider::find($id);
		$img=$slider->cover_image;
		if ($req->hasFile('file_upload')) 
		{
			$file=$req->file_upload;
			$file->move(base_path('uploads/slider'),$file->getClientOriginalName());
			$img=$file->getClientOriginalName();
			$req->merge(['cover_image'=>$img]);
		}
		$edit=$slider->update($req->all());
		if($edit)
		{
			return redirect()->route('slider')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('errors','Có lỗi');
		}
	}
	public function orderSlider($id, Request $req){
			$sorder=request()->sorder > 0 ? request()->sorder : '';
			// dd($sorder);
			$order=Slider::find($id)->update(['sorder'=>$sorder]);
			if ($order) {
				return redirect()->route('slider')->with('success','Cập nhật thành công');
			}
			else
			{
				return redirect()->back()->with('errors','Có lỗi');
			}
	}

}
 ?>