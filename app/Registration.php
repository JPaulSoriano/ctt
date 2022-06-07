<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
        'academic_year_id',
        'semester',
        'enrollment_type',
        'course_id',
        'year',
        'last_name',
        'first_name',
        'middle_name',
        'gender',
        'religion',
        'nationality',
        'civil_status',
        'phone_no',
        'email',
        'address',
        'last_school',
        'reg_ref',
        'temp_id',
        'or_no',
        'perma_id',
        'father',
        'father_occupation',
        'father_phone',
        'mother',
        'mother_occupation',
        'mother_phone'
    ];

    public function course(){
        return $this->belongsTo('App\Course');
    }

    public function academic_year(){
        return $this->belongsTo('App\AcademicYear');
    }

    public function getFullNameAttribute()
    {
        return "{$this->last_name}, {$this->first_name} {$this->middle_name}";
    }
}
