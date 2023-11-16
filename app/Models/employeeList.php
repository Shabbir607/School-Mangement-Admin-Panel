<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;
class employeeList extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
protected $table = 'employee_list';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'picture',
        'expire',
        'issue',
        'department',
        'subject',
        'asstant',
        'group',
        'nationality',
        'religion',
        'employee_id',
        'password',
        'phone_no',
        'card_number',
        'passpord_number',
        'visa_number',
        'address',
        'picture',
        'work',
        'work_issue',
        'end_date',
        'contract',
        'contract_issue',
        'contract_end_date',
        'teaching',
        'teaching_issure',
        'teaching_end',
        'school',
        'school_issure',
        'school_end',
        'classroom',
        'homeroom',

        
        
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

    public function employeeList_index()
    {
        
        $employeeList = employeeList::get();
        
        return $employeeList;
    }
}
