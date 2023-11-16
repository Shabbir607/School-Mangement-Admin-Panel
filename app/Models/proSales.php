<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class proSales extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 'pro_sale';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        
        'bill',
        'teacher',
        'date',
        'code',
        'discription',
        'status',
        'companyID',
        'branchID',
        'billNumber',
        'product_code',
        'product_name',
        'qty',
        'total',
        'saleType',
        'createIP',
        'createID',
        
        
    ];

    /**
     * The attributes that shousalld be hidden for serialization.
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

    public function proSales_index()
    {
        
        $prosales = proSales::get();
        
        return $prosales;
    }
      public function proRefund()
    {
        
        $prosales = proSales::where('status','refund')->get();
        
        return $prosales;
    }
      public function proBroken()
    {
        
        $proBroken = proSales::where('status','broken')->get();
        //dd(proSales::where('status','broken')->toSql());
        return $proBroken;
    }
     public function proSalesWithUser()
    {
        
        $prosale = proSales::select('pro_sale.*', 'users.name as user_name')
                    ->leftJoin('users', 'users.id', '=', 'pro_sale.createID')
                    ->get();   
        return $prosale;
    }
    
}
