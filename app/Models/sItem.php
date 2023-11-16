<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class sItem extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    //protected $table = 's_item';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'category',
        'code',
        'brand_id',
        'picture',
        'product',
        'price',
        'english',

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

    public function sItem_index()
    {

        $sitem = sItem::get();

        return $sitem;
    }

    public function sales()
    {
        return $this->hasMany(sSales::class, 'productCode', 'id');
        //basically product code stores "product id" not code 
    }

    // updation constraint

    protected static function boot()
    {
        parent::boot();

        // Deleting event
        static::deleting(function ($item) {
            // Delete related sSales records
            $item->sales()->delete();
        });


        static::updating(function ($item) {
            // Check if the price attribute has changed
            if ($item->isDirty('price')) {
                // Update related sSales records
                $item->sales->each(function ($sale) use ($item) {
                    $sale->bill = $item->price * $sale->saleQty;
                    $sale->save();
                });
            }
        });
    }


    public function brand()
    {
        return $this->belongsTo(sBrand::class, 'brand_id', 'id');
    }
}
