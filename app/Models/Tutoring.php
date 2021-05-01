<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutoring extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'id',
        'tutor_id', 'faculty', 'phone','course_id','course_name','time','virtual_meeting'
    ];
   
    public function tutoring()
    {
    	return $this->belongsTo [User::class];
    }
    public function tutorings()
    {
    	return $this->hasMany [Tutor_session::class];
    
    }
}
