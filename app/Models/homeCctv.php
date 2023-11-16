<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class homeCctv extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 'home_cctv_forms';
    /**
    //protected $table = 's_item';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        
        'picture',
        'date',
        'time',
        'note',
        'dvr',
        'status',
        'channel',
        
  
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function homeCctv_index()
    {
        
        $homeCctv = homeCctv::get();
        
        return $homeCctv;
    }
}