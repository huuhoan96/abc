<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Product extends Model
{
	protected $table='product';
	protected $fillable=['title','slug','created_by','short_description','contents','sorder','feature','specifications','dimension','line_up','catalog','created_by','cover_image','meta_title','meta_description','modified_by','meta_keywords','status','price','warranty','promotion','category_id','product_code','download_id','is_best_seller','is_promotion','is_new_product','special_product','comment'
	];
	public function scopeSearch($query)
	{
		if(empty(request()->search))
		{
			return $query;
		}
		else
		{
			return $query->where('title','like','%'.request()->search.'%');
		}	
	}
	public function category()
		{
			return $this->hasOne('\App\Models\Category','id','category_id');
		}	
	public static function getExcerpt($str, $startPos = 0, $maxLength = 50) {
		if(strlen($str) > $maxLength) {
			$excerpt   = substr($str, $startPos, $maxLength - 6);
			$lastSpace = strrpos($excerpt, ' ');
			$excerpt   = substr($excerpt, 0, $lastSpace);
			$excerpt  .= ' [...]';
		} else {
			$excerpt = $str;
		}
		
		return $excerpt;
	}
	public function comment(){
		return $this->hasMany('\App\Models\Comment','product_id','id');
	}
}
 ?>