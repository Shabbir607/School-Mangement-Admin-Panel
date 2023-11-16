<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

use App\Models\stationaryForms;
use App\Models\rejStationaryForms;
use App\Models\ApproveStationaryForm;


class sSales extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
    protected $table = 's_sale';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'bill',
        'teacher',
        'date',
        'discription',
        'status',
        'companyID',
        'branchID',
        'billNumber',
        'productCode', //this is product id stored in the table not code
        'saleQty',
        'saleType',
        'createIP',
        'createID',


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

    public function sSales_index()
    {

        $ssales = sSales::get();

        return $ssales;
    }

    public function item()
    {
        return $this->belongsTo(sItem::class, 'productCode', 'id');
    }

    public function rejStationaryForm()
    {
        return $this->hasOne(rejStationaryForms::class, 'ssaleId', 'id');
    }
    protected static function boot()
    {
        parent::boot();

        static::created(function ($ssale) {
            $ssaleId = $ssale->id;

            $tables = [
                'waiting' => stationaryForms::class,
                'rejected' => rejStationaryForms::class,
                'approved' => approveStationaryForms::class,
            ];

            if (array_key_exists($ssale->status, $tables)) {
                $table = new $tables[$ssale->status]([
                    'ssaleId' => $ssaleId,
                    'name' => $ssale->teacher,
                    'date' => $ssale->date,
                    'approve_1' => '',
                    'approve_2' => '',
                    'approve_3' => '',
                    'bill' => $ssale->bill,
                    'companyID' => $ssale->companyID,
                    'productId' => $ssale->productCode,
                    'status' => $ssale->status,
                    'description' => $ssale->description,
                    'saleQty' => $ssale->saleQty,
                ]);

                $table->save();
            }
        });


        static::updating(function ($ssale) {
            if ($ssale->isDirty('status')) {
                $newStatus = $ssale->status;
                $previousStatus = $ssale->getOriginal('status');

                $tables = [
                    'waiting' => stationaryForms::class,
                    'rejected' => rejStationaryForms::class,
                    'approved' => approveStationaryForms::class,
                ];

                if (array_key_exists($previousStatus, $tables)) {
                    // Delete the corresponding record from the previous status table
                    $previousTable = new $tables[$previousStatus]();
                    $previousTable->where('ssaleId', $ssale->id)->delete();
                }

                if (array_key_exists($newStatus, $tables)) {
                    // Create a record in the new corresponding table if applicable
                    $newTable = new $tables[$newStatus]([
                        'ssaleId' => $ssale->id,
                        'name' => $ssale->teacher,
                        'date' => $ssale->date,
                        'approve_1' => '',
                        'approve_2' => '',
                        'approve_3' => '',
                        'bill' => $ssale->bill,
                        'companyID' => $ssale->companyID,
                        'productId' => $ssale->productCode,
                        'status' => $newStatus,
                        'description' => $ssale->description,
                        'saleQty' => $ssale->saleQty,
                    ]);

                    $newTable->save();
                }
            }
        });
    }
}
