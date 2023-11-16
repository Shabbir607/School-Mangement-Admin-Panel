<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class sApprove extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 's_approve';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'date',
        'code',
        'qty',
        'price',
        'supplier',
        'invoice',
        
        
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

    public function sApprove_index()
    {
        
        $sapprove = sApprove::get();
        
        return $sapprove;
    }
    
    public function sBillImport()
    {
        
        $simport = sImport::select('s_imports.*', 's_brands.english as supplier_name')
                    ->leftJoin('s_brands', 's_brands.id', '=', 's_imports.supplier')
                    ->get();   
        return $simport;
    }
}
