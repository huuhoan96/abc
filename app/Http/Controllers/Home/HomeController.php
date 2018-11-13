<?php 
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Slider;
// use App\Models\Project;
use App\Models\Category;
use App\Models\Product;
use App\Models\News;
use App\Models\Partners;
use App\Models\Support;
use App\Models\Comment;
use App\Models\Download_service;
use App\Models\Quotes_product;
use Illuminate\Support\Facades\Session;
use Mail;
/**
* 
*/
class HomeController extends Controller
{
	public function index(){
		return view('home.index_1');
	}
	public function index_product(){
		$slider=Slider::orderBy('sorder','ASC')->where('status','enable')->get();
		$categorys=Category::orderBy('sorder','ASC')->Where('parent_id','parent')->get();
		$best_seller=Product::Where('is_best_seller','enable')->get();
		$new_product=Product::Where('is_new_product','enable')->paginate(10);
		$promotion=Product::Where('is_promotion','enable')->get();
		$special_product=Product::Where('special_product','enable')->get();
		$company_news=News::Where('category_id','35')->paginate(10);
		$news=News::Where('category_id','32')->paginate(10);
		$supports=Support::Where('status','enable')->Where('type','technical')->paginate(10);
		$sp=Support::Where('status','enable')->Where('type','business')->paginate(10);
		$partners=Partners::Where('status','enable')->get();
		return view('home.index',[
			'sliders'=>$slider,
			'categorys'=>$categorys,
			'best_seller'=>$best_seller,
			'new_products'=>$new_product,
			'special_products'=>$special_product,
			'promotions'=>$promotion,
			'news'=>$company_news,
			'news_1'=>$news,
			'partners'=>$partners,
			'supports'=>$supports,
			'sp'=>$sp
			]);
	}
	public function view($slug, Request $req)
		{
			$category= Category::where('slug',$slug)->first();
			$product= Product::where('slug',$slug)->first();

			//sản phẩm khác
			$others=Product::where('category_id','<>','$id')->paginate(8);
			
			if($category)
			{
				$products= Product::where('category_id',$category->id);
				$products = $products->paginate(10);
			
				return view('home.product-category',['category'=>$category,'products' => $products]);
			}
			else if($product)
			{
				$comment=Comment::orderBy('id','DESC')->where('status',1)->where('product_id',$product->id)->paginate(4);
				return view('home.pro-detail',[
					'product'=>$product,
					'others'=>$others,
					'comments'=>$comment
					]);
			}
			else
			{
				return view('errors.404');
			}

		}
	public function comment(Request $req){
		// dd($req->all());
		$this->validate($req,[
			'comment' => 'required',
			'name' => 'required',
			'email' => 'required|email'
			],[
			'comment.required' => 'Nội dung không được để trống',
			'name.required' => 'Tên không được để trống',
			'email.required' => 'Email không được để trống',
			'email.email' => 'Email không đúng định dạng'
			]);
		$comment = Comment::create($req->all());
		return redirect()->back()->with('success','Đánh giá đang chờ phê duyệt');

	}
	public function send_mail(Request $req){
		$input = $req->all();
		$quotes=Quotes_product::create($input);
        Mail::send('mail', array(
        	'id'=>$quotes->id,
        	'name'=>$input["name"],
        	'email'=>$input["email"], 
        	'content'=>$input['content'],  
        	'product'=>$input['product'],
			'product_id'=>$input['product_id'], 
        	'phone'=>$input['phone']), 
        function($message){
	        $message->to('nhtuan231096@gmail.com', 'Hoplongtech')->subject('Yêu cầu báo giá sản phẩm');
	    });
        Session::flash('flash_message', 'Send message successfully!');
		return redirect()->back()->with('success','Yêu cầu báo giá thành công');
	}
	public function confirm($id){
		$confirm=Quotes_product::find($id);
		$confirm->update(['status'=>1]);
		return view('home.confirm_pro');

	}

	public function project(){
		$project = News::where('type','project')->paginate(12);
		$nproject = News::orderBy('id','DESC')->paginate(12);
		// dd($project);
		return view('home.project',[
			'project' => $project,
			'nproject' => $nproject
			]);
	}
	public function detail_project($slug){
		$news=News::where('slug',$slug)->first();
		$new=News::where('slug','<>',$slug)->paginate(10);
		// dd($news);
		return view('home.detail_project',[
			'news_project'=>$news,
			'news'=>$new
			]);
	}
	public function productJson(){
	    return Product::paginate(10);
	    // return Category::where('status','enable')->get();
	  	}  
	public function filter($filter){
		return Product::where('capacity',$filter)->get();
	}
	public function downloads(){
		$category= Category::where('status','enable')->get();	
		$cat_id=Download_service::search()->paginate(8);
		return view('home.download',[
			'cats'=>$cat_id,
			'cat'=>$category,
		]);
	}
}
 ?>