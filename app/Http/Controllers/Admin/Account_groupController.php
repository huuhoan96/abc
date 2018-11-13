<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;
/**
* 
*/
class Account_groupController extends Controller
{
	
	function account_group()
	{
		$user_group=User_group::all();
		// dd($user_group);
		return view('admin.account_group.index',[
			'user_group'=>$user_group
			]);
	}
	public function addUserGroup(Request $req){
		if(User_group::create($req->all()))
		{
			return redirect()->back()->with('success','Tạo mới thành công');
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi tạo mới');
		}
	}
	public function deleteGroup($id){
		$delete=User_group::find($id)->delete();
		if ($delete) 
		{
			return redirect()->back()->with('success','Xóa thành công');		
		}
		else
		{
			return redirect()->back()->with('error','Có lỗi khi xóa');	
		}
	}
	public function editGroup($id){
		$group=User_group::find($id);
		return view('admin.account_group.edit',[
			'group'=>$group
			]);
	}
	public function postEditGroup($id,Request $req){
		$this->validate($req,[
			'title'=>'required|min:3|unique:user_group,title,'.$id,
			],[
			'title.required' => 'Tên nhóm không được để trống',
			'title.min' => 'Tên nhóm ít nhất :min ký tự',
			'title.unique' => 'Tên nhóm đã tồn tại'
			]);
		$update=User_group::find($id)->update($req->all());
		if ($update) 
		{
			return redirect()->route('account_group')->with('success','Cập nhật thành công');
		}
		else
		{
			return redirect()->back()->with('error','Lỗi khi cập nhật');
		}
	}	

	protected $rules =
    [
        'title' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i'
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = User_group::orderBy('id', 'desc')->get();

        return view('admin.account_group.index', ['posts' => $posts]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = new User_group();
            $post->title = $request->title;
            $post->save();
            return response()->json($post);
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = User_group::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post=User_group::findOrFail($id);
            $post->title = $request->title;
            $post->save();
            return response()->json($post);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = User_group::findOrFail($id);
        $post->delete();

        return response()->json($post);
    }


    /**
     * Change resource status.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus() 
    {
        $id = Input::get('id');

        $post = User_group::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
    }
}
?>