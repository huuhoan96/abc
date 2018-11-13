<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use View;
/**
* 
*/
class ProductController extends Controller
{
	public function product()
	{	
		$products=Product::paginate(15);
		$user=User::all();
		$category=Category::where('status','enable')->get();
		return view('admin.product.index',[
				'posts'=>$products,
				'users'=>$user,
				'categorys'=>$category
		]);
	}
	/**
    * @var array
    */
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
        $posts = Product::orderBy('id', 'desc')->get();

        return view('posts.index', ['posts' => $posts]);
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
            $post = new Post();
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->short_description = $request->short_description;
            $post->feature = $request->feature;
            $post->specifications = $request->specifications;
            $post->price = $request->price;
            $post->warranty = $request->warranty;
            $post->category_id = $request->category_id;
            $post->cover_image = $request->cover_image;
            $post->created_by = $request->created_by;
            $post->meta_title = $request->meta_title;
            $post->meta_description = $request->meta_description;
            $post->meta_keywords = $request->meta_keywords;
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
        $post = Product::findOrFail($id);

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
            $post = Product::findOrFail($id);
            $post->title = $request->title;
            $post->slug = $request->slug;
            $post->short_description = $request->short_description;
            $post->feature = $request->feature;
            $post->specifications = $request->specifications;
            $post->price = $request->price;
            $post->warranty = $request->warranty;
            $post->category_id = $request->category_id;
            $post->cover_image = $request->cover_image;
            $post->created_by = $request->created_by;
            $post->meta_title = $request->meta_title;
            $post->meta_description = $request->meta_description;
            $post->meta_keywords = $request->meta_keywords;
            $post->save();
            return response()->json($post);
            dd(response()->json($post));die();
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
        $post = Product::findOrFail($id);
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

        $post = Product::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
    }
}
 ?>