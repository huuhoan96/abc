<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Download_service extends Model
{
	protected $table='download_service';
	protected $fillable=[
		'id','title','status','content','file_download','cover_image','category_id','type_file','type','sorder'
	];

		public function scopeSearch($query)
		{
			if(empty(request()->category))
			{
				return $query;
			}
			else
			{
				// dd(request()->category_id);
				return $query->where('category_id','=',request()->category_id);
			}	

	}
	public function category(){
		return $this->hasOne('\App\Models\Category','id','category_id');
	}
}
 ?>