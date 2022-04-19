<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'student_no',
        'email',
        'phone',
        'street',
        'city',
        'province',
    ];

    public function timevisit()
    {
        return $this->hasMany(TimeVisit::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->last_name}, {$this->first_name} {$this->middle_name}";
    }

    public function getFullAddressAttribute()
    {
        return "{$this->street}, {$this->city} {$this->province}";
    }

}
