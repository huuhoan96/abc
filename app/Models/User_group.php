<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class User_group extends Model
{
	protected $table='user_group';
	protected $fillable=[
		'id','title','status'
	];
}
 ?>