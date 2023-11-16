<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class proImport extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 'pro_imports';
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

    public function proImport_index()
    {
        
        $proimport = proImport::get();
        
        return $proimport;
    }


    public function proBillImport()
    {
        
        $proimport = proImport::select('pro_imports.*', 'pro_brands.name_engl as supplier_name')
                    ->leftJoin('pro_brands', 'pro_brands.id', '=', 'pro_imports.supplier')
                    ->get();   
        return $proimport;
    
}
 public function proApproved()
    {
        
        $proApproved = proImport::where('status','approved')->get();
        
        return $proApproved;
    }
  public function proImportWithUser()
    {
        
        $prosale = proImport::select('pro_imports.*', 'users.name as user_name','pro_brands.name_engl as supplier_name')
                    ->leftJoin('users', 'users.id', '=', 'pro_imports.createID')
                    ->leftJoin('pro_brands', 'pro_brands.id', '=', 'pro_imports.supplier')
                    ->get();   
        return $prosale;
    }
}
