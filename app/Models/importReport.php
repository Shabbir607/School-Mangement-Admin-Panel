<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class importReport extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'date',
        'code',
        'Qty',
        'price',
        'Supplier',
        'Invoice',
        'by',
        
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

    public function importReport_index()
    {
        
        $importreport = importReport::get();
        
        return $importreport;
    }
    
    public function sBillImport()
    {
        
        $simport = sImport::select('s_imports.*', 's_brands.english as supplier_name')
                    ->leftJoin('s_brands', 's_brands.id', '=', 's_imports.supplier')
                    ->get();   
        return $simport;
    }
}
