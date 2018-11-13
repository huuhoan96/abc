<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Quotes_product extends Model
{
	protected $table='quotes_product';
	protected $fillable=[
		'name','email','product_id','phone','content','status','product'
	];
	public function product(){
		return $this->hasOne('\App\Models\Product','id','product_id');
	}	
	public function scopeSearch($query)
		{
			if(empty(request()->search) && empty(request()->name_product) && empty(request()->status))
			{
				return $query;
			}
			if(!empty(request()->search) && empty(request()->name_product) && empty(request()->status))
			{
				return $query->where('name','like','%'.request()->search.'%')->orWhere('email','like','%'.request()->search.'%')->orWhere('phone','like','%'.request()->search.'%');
			}	
			if(!empty(request()->name_product) && empty(request()->search) && empty(request()->status))
			{
				return $query->where('product','=',request()->name_product);
			}
			if(!empty(request()->status) && empty(request()->search) && empty(request()->name_product))
			{
				return $query->where('status','=',request()->status);
			}
			if(!empty(request()->search) && !empty(request()->name_product) && empty(request()->status))
			{
				return $query->where('title','like','%'.request()->search.'%')->where('email','like','%'.request()->search.'%')->where('phone','like','%'.request()->search.'%')->Where('name_product','=',request()->name_product);
			}
			if(empty(request()->search) && !empty(request()->name_product) && !empty(request()->status))
			{
				return $query->where('status','=',request()->status)->Where('product','=',request()->name_product);
			}
			if(!empty(request()->search) && empty(request()->name_product) && !empty(request()->status))
			{
				return $query->where('status','=',request()->status)->Where('name','=',request()->search)->orWhere('email','=',request()->search)->orWhere('phone','=',request()->search);
			}
			else{
				return $query->where('status','=',request()->status)->Where('product','=',request()->name_product);
			}

	}
}
 ?>