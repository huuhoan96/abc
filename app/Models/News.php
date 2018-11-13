<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class News extends Model
{
	protected $table='news';
	protected $fillable=[
		'title','slug','created_by','description','image_cover','status','meta_keywords','meta_description','meta_title','content','type','category_id'
	];
	public function scopeSearch($query)
		{
			if(empty(request()->search))
			{
				return $query;
			}
			if(!empty(request()->search) && empty(request()->created_by))
			{
				return $query->where('title','like','%'.request()->search.'%');
			}	
			// if(!empty(request()->created_by) && empty(request()->search))
			// {
			// 	return $query->where('created_by','=',request()->created_by);
			// }

	}
	public function Cat()
		{
			return $this->hasOne('\App\Models\NewsCate','id','category_id');
		}
}
 ?>