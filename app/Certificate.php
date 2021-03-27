<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $guarded = [];

    protected $casts = [
        'subject_grades' => 'array',
        ];


    public function setSubjectGradesAttribute($value)
    {
        $this->attributes['subject_grades'] = json_encode($value);
    }

    public function getSubjectGradesAttribute($value){
        return json_decode($value) ?: [];
    }

}
