<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
* 
*/
class WebCf extends Model
{
	protected $table='config';
	protected $fillable=[
		'address','defaultMetaDescription','defaultMetaKeywords','defaultMetaTitle','email','facebook_url','fax','googleplus_url','hotline','leftbar','pinterest_url','siteTitle','tabindex1','tabindex2','tabindex3','tabindex4','tabindex5','tabindex6','telephone','twiter_url','video'
	];
}
 ?>