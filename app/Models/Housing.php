<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'id',
        'landlord_id', 'address', 'phone','status','latitude','longitude','apartment_name','price','image'
    ];
   
    public function housings()
    {
    	return $this->belongsTo [User::class];
    }
}
