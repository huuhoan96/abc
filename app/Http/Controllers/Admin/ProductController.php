<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\CsvImportRequest;
use Validator;
use Response;
use Illuminate\Http\Request;
use App\Models\Product;
use App\User;
use App\Contact;
use App\CsvData;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Category;
use App\Models\Quotes_product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myPost()
    {
      $cates=Category::where('status','enable')->get();
      $pros=Product::where('status','enable')->get();
      $users=User::all();
      return view('admin.product.index',[
        'cates'=>$cates,
        'users'=>$users,
        'pros'=>$pros,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $post = Product::Where('status','enable')->orWhere('status','disable')->latest()->paginate(12);
      return response()->json($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return response()->json($request->upload_file);die;
       // return response()->json($request->all());die;

        // $this->validate($request,[
        //     'title'=>'required|unique:product,title',
        //     'slug'=>'required|unique:product,slug'
        // ],[
        //     'title.required'=>'Ten khong duoc de trong',
        //     'slug.required'=>'Duong dan khong duoc de trong',
        //     'slug.unique'=>'Duong dan da ton tai',
        //     'title.unique'=>'Ten da ton tai'
        // ]);
      $validator = \Validator::make($request->all(), [
        'title' => 'required|unique:product,title',
        'slug' => 'required|unique:product,slug',
        'category_id' => 'required',
        'meta_title' => 'max:70',
        'meta_description' => 'max:170'
        ],[
        'title.required'=>'Tên không được để trống',
        'category_id.required'=>'Bạn chưa chọn danh mục',
        'slug.required'=>'Đường dẫn không được để trống',
        'slug.unique'=>'Đường dẫn đã tồn tại',
        'title.unique'=>'Tên đã tồn tại',
        'meta_title.max' => 'Meta Title vượt quá :max ký tự',
        'meta_description.max' => 'Meta Description vượt quá :max ký tự'
        ]);

      if ($validator->fails())
      {
        return Response::json(['errors' => $validator->errors()]);
      }
      if ($validator->passes()) 
      {
        $posts = Product::create($request->all());
        return response()->json($posts);
      }
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
      $posts = Product::find($id)->update($request->all());
      return response()->json($posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::find($id)->delete();
      return response()->json(['done']);
    }

    public function edit($id){
      $data = Product::find($id);
      return response()->json($data);
    }
    public function trash(){
      $posts = Product::where('status','delete')->latest()->paginate(14);
      return view('admin.product.trash',[
        'posts'=>$posts
        ]);
    }
    public function undo($id){
      $product=Product::find($id);
      if($product->status=='delete'){
        $product->status='enable';
      }
             // dd($product->status);
      $undo=$product->update();
      if ($undo) 
      {
        return redirect()->back()->with('success','Khôi phục sản phẩm thành công');
      }
      else
      {
       return redirect()->back()->with('error','Có lỗi'); 
     }

   }
   public function deletePro($id){
    $deletePro=Product::destroy($id);
    if ($deletePro) {
      return redirect()->back()->with('success','Đã xóa sản phẩm');
    }
    else
    {
      return redirect()->back()->with('error','Lỗi khi xóa');
    }
  }

  function action(Request $request)
  {
   if($request->ajax())
   {
    $output = '';
    $query = $request->get('query');
    if($query != '')
    {
     $data = Product::where('title', 'like', '%'.$query.'%')->get();  
   }
   $total_row = $data->count();
   if($total_row > 0)
   {
     foreach($data as $row)
     {
      $output .= '
      <tr>
       <td>'.$row->title.'</td>
       <td>'.$row->slug.'</td>
       <td>'.$row->category_id.'</td>
       <td>'.$row->created_by.'</td>
       <td>'.$row->sorder.'</td>
       <td>'.$row->status.'</td>
       <td>'.$row->created_at.'</td>
       <td>'.'<button data-toggle="modal" data-target="#edit-item" class="edit-item btn btn-info fa fa-edit"></button>'
        .'<button class="btn btn-danger fa fa-trash remove-item"></button>'.'</td>
      </tr>
      ';
    }
  }
  else
  {
   $output = '
   <tr>
    <td align="center" colspan="7">Không có dữ liệu</td>
  </tr>
  ';
}
$data = array(
 'table_data'  => $output,
 'total_data'  => $total_row
 );

echo json_encode($data);
}
}

    // controller import file csv

public function importProduct(){
  return view('admin.product.importProduct');
}
public function parseImport(CsvImportRequest $request)
{

  $path = $request->file('csv_file')->getRealPath();

  if ($request->has('header')) {
    $data = Excel::load($path, function($reader) {})->get()->toArray();
  } else {
    $data = array_map('str_getcsv', file($path));
  }

  if (count($data) > 0) {
    if ($request->has('header')) {
      $csv_header_fields = [];
      foreach ($data[0] as $key => $value) {
        $csv_header_fields[] = $key;
      }
    }
    $csv_data = array_slice($data, 0, 10000);

    $csv_data_file = CsvData::create([
      'csv_filename' => $request->file('csv_file')->getClientOriginalName(),
      'csv_header' => $request->has('header'),
      'csv_data' => json_encode($data)
      ]);
  } else {
    return redirect()->back();
  }

  return view('admin.product.import_fields', compact( 'csv_header_fields', 'csv_data', 'csv_data_file'));

}
public function processImport(Request $request)
{
  $data = CsvData::find($request->csv_data_file_id);
  $csv_data = json_decode($data->csv_data, true);
  foreach ($csv_data as $row) {
    $contact = new Product();
    foreach (config('app.db_fields') as $index => $field) {
      if ($data->csv_header) {
        $contact->$field = $row[$request->fields[$field]];
      } else {
        $contact->$field = $row[$request->fields[$field]];
      }
    }
    $contact->save();
  }

  return redirect()->route('importProduct')->with('success','Import file thành công.');
}

// insert thông tin sản phẩm
public function insertProduct()
{
  $cates=Category::where('status','enable')->get();
  return view('admin.product.insert',[
    'cates'=>$cates
    ]);
}
public function postInsertProduct(Request $req){
  $pros=Product::Where('category_id',$req->category_id)->get();
    // $this->validate($req,[
    //     'category_id' => 'required'
    //     ],[
    //     'category_id.required' => 'Bạn chưa chọn danh mục'
    //     ]);
        // dd($pros);
    // dd($pros); 
  if($pros->count()>0){
    $product=Product::find($pro->id);
    foreach($pros as $pro){
      if(!empty($req->contents)){
        $product->update(['contents'=>$req->contents]);
      }
      if(!empty($req->catalog)) {
        $product->update(['catalog'=>$req->catalog]);
      }
      if(!empty($req->lineup)) {
        $product->update(['lineup'=>$req->lineup]);
      } 
      else{
        return redirect()->back()->with('error','error');
      }
      
    }
    return redirect()->route('insertProduct')->with('success','Cập nhật thành công.');
    // dd($pro->contents);
  }
  else{
    return redirect()->back()->with('error','Không có sản phẩm nào trong danh mục.');
  }
}
  public function proJson(){
    return Product::orderBy('id','DESC')->paginate(10);
  }
  public function quotesProduct(){
    $quotes = Quotes_product::search()->paginate(10);
    return view('admin.product.quotes',[
      'quotes' => $quotes
      ]);
  }
}
?>