<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Service;
use Illuminate\Http\Request;
/**
* 
*/
class ServiceController extends Controller
{
	
	public function index()
	{	
		$service=Service::all();
		return view('admin.service.index',[
			'services'=>$service
			]);
	}
}
 ?>