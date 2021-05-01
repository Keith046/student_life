<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor_session extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'id',
        'faculty', 'phone','course_id','course_name','time','tutoring_id','student_id','tutor_id', 'virtual_meeting'
    ];
   
    public function tutoring_session()
    {
    	return $this->belongsTo [Tutoring::class];
       
    }
}
