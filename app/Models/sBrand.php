<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class sBrand extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'picture',
        'language',
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

    public function sBrand_index()
    {

        $sbrand = sBrand::get();

        return $sbrand;
    }
    public function BrandById($id)
    {

        $sbrand = sBrand::where('id', $id)->first();

        return $sbrand;
    }
    public function delete_brand_row($id)
    {
        sBrand::destroy($id);
        return back();
    }

    public function item()
    {
        return $this->hasMany(sItem::class, 'brand_id', 'id');
    }

    protected static function boot()
    {
        parent::boot();


        static::deleting(function ($brand) {
            // Delete related sItem records
            $brand->item->each(function ($item) {
                $item->delete();
            });
        });

        static::updating(function ($brand) {
            // Check if the language or english attribute has changed
            if ($brand->isDirty('language') || $brand->isDirty('english')) {
                // Update related sItem records
                $brand->item->each(function ($item) use ($brand) {
                    $item->update([
                        'language' => $brand->language,
                        'english' => $brand->english,
                    ]);
                });
            }
        });
    }

 
}
