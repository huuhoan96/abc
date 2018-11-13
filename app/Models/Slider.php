<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Slider extends Model
{
	protected $table='slider';
	protected $fillable=[
		'title','slug','created_by','cover_image','status','link','sorder'
	];
	public function scopeSearch($query)
		{
			if(empty(request()->search) && empty(request()->created_by) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->search) && empty(request()->created_by) && empty(request()->status))
			{
				// dd(request()->search);
				return $query->where('title','like','%'.request()->search.'%');
			}	
			if(!empty(request()->created_by) && empty(request()->search) && empty(request()->status))
			{
				return $query->where('created_by','=',request()->created_by);
			}
			if(!empty(request()->status) && empty(request()->search) && empty(request()->created_by))
			{
				return $query->where('status','=',request()->status);
			}
			if(!empty(request()->search) && !empty(request()->created_by) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->search.'%')->Where('created_by','=',request()->created_by);
			}
			if(empty(request()->search) && !empty(request()->created_by) && !empty(request()->status))
			{
				return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
			}
			else{
				return $query->where('status','=',request()->status)->Where('created_by','=',request()->created_by);
			}

	}
}
 ?>