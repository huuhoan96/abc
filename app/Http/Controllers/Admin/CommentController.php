<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Comment;
use Illuminate\Http\Request;
/**
* 
*/
class CommentController extends Controller
{
	
	public function index()
	{	
		$comment = Comment::orderBy('id','DESC');
		return view('admin.comment.index',[
			'comments' => $comment
			]);
	}
	public function changeStatus(Request $req){
		$stt=Comment::find($req->id);
		if($req->status==0){
			$stt->update(['status'=>1]);
			// dd($stt);
		}
		else{
			$stt->update(['status'=>0]);
		}
		// dd($req->all());
		return redirect()->back()->with('success','Cập nhật thành công');
	}
	public function delComment($id){
		Comment::find($id)->delete();
		return redirect()->back()->with('success','Xóa thành công');
	}
}
 ?>