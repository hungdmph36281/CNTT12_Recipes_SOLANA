<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'province_id',
        'district_id',
        'ward_id',
        'address_detail',
        'name',
        'phone',
        'default',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function ward(){
        return $this->belongsTo(Ward::class);
    }
}