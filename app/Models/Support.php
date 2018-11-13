<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Support extends Model
{
	protected $table='support';
	protected $fillable=[
		'username','email','sky_name','yahoo_name','status','type'
	];
	public function scopeSearch($query)
		{
			if(empty(request()->search) && empty(request()->type) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->search) && empty(request()->type) && empty(request()->status))
			{
				// dd(request()->search);
				return $query->where('username','like','%'.request()->search.'%');
			}	
			if(!empty(request()->type) && empty(request()->search) && empty(request()->status))
			{
				return $query->where('type','=',request()->type);
			}
			if(!empty(request()->status) && empty(request()->search) && empty(request()->type))
			{
				return $query->where('status','=',request()->status);
			}
			if(!empty(request()->search) && !empty(request()->type) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->search.'%')->Where('type','=',request()->type);
			}
			if(empty(request()->search) && !empty(request()->type) && !empty(request()->status))
			{
				return $query->where('status','=',request()->status)->Where('type','=',request()->type);
			}
			else{
				return $query->where('status','=',request()->status)->Where('type','=',request()->type);
			}

	}
}
 ?>