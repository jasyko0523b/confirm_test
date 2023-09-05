<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public function scopeNameSearch($query, $name)
    {
        if( !empty($name) ){
            $query->where('fullname', 'like', '%'. $name. '%');
        }
    }
    public function scopeGenderSearch($query, $gender)
    {
        if( !empty($gender) || $gender!=0 ){
            $query->where('gender', $gender);
        }
    }

    public function scopeEmailSearch($query, $email)
    {
        if( !empty($email) ){
            $query->where('email', 'like', '%'. $email. '%');
        }
    }

    public  function scopeCreatedAtSearch_start($query, $start)
    {
        if( !empty($start) ){
            $query->where('created_at', '>', $start.' 00:00:00');
        }
    }

    public  function scopeCreatedAtSearch_end($query, $end)
    {
        if( !empty($end) ){
            $query->where('created_at', '<', $end.' 23:59:59');
        }
    }

}
