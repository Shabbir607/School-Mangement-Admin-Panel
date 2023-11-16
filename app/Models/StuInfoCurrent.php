<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class StuInfoCurrent extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 'stu_info_current';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'code',
        'password',
        'firstname',
        'middlename',
        'lastname',
        'classroom',
        'status',
        
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function StuInfoCurrent_index()
    {
        
        $StuInfoCurrent = StuInfoCurrent::get();
        
        return $StuInfoCurrent;
    }
        public function Current()
    {
        
        $Current = StuInfoCurrent::where('status','Current')->get();
        
        return $Current;
    }
      public function Alumni()
    {
        
        $Current = StuInfoCurrent::where('status','Alumni')->get();
        
        return $Current;
    }
}
