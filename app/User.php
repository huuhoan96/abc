<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';
    protected $fillable = [
        'username','fullname','email', 'password','avatar','group_id','status'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function group(){
        return $this->hasOne('App\Models\User_group','id','group_id');
    }
    public function scopeSearch($query)
        {
            if(empty(request()->search))
            {
                return $query;
            }
            if(!empty(request()->search) && empty(request()->group_id))
            {
                return $query->where('username','like','%'.request()->search.'%')->orWhere('fullname','like','%'.request()->search.'%')->orWhere('email','like','%'.request()->search.'%');
            }   
            if((empty(request()->search)) && (!empty(request()->group_id)))
            {
                return $query->where('group_id','=',request()->group_id);
            } 
            // if(!empty(request()->created_by) && empty(request()->search))
            // {
            //  return $query->where('created_by','=',request()->created_by);
            // }

    }
    public $remember_token=false;
}
