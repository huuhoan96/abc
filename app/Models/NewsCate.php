<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class NewsCate extends Model
{
	protected $table='news_category';
	protected $fillable=[
		'id','parent_id','title','slug','created_by','description','status','meta_keywords','meta_description','meta_title','category_id'
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
	public function News()
	{
		return $this->hasMany('\App\Models\News','category_id','id');
	}
}
 ?>