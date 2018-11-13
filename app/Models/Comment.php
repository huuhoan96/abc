<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class Comment extends Model
{
	protected $table='comment';
	protected $fillable=[
		'name','comment','email','product_id','status'
	];
	public function product(){
		return $this->hasOne('\App\Models\Product','id','product_id');
	}
}
 ?>