<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    protected $guarded = [];

    protected $appends = ['applicant_id'];

    public function post_primaries()
    {
        return $this->hasMany(PostPrimary::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setCoursesAttribute($value)
    {
        $this->attributes['courses'] = json_encode($value);
    }

    public function getCoursesAttribute($value){
        return json_decode($value) ?: [];
    }

    public function getApplicantIdAttribute(){
        return 'DIFAS/'.$this->id.'/'.strtoupper($this->type).'/'.$this->created_at->format('Y');
    }

    public function getPhotoAttribute($value) {
        if(!$this->attributes['photo']) {
            $colors = ['E91E63', '9C27B0', '673AB7', '3F51B5', '0D47A1', '01579B', '00BCD4', '009688', '33691E', '1B5E20', '33691E', '827717', 'E65100',  'E65100', '3E2723', 'F44336', '212121'];
            $background = $colors[$this->id%count($colors)];
            return "https://ui-avatars.com/api/?size=256&background=".$background."&color=fff&name=".urlencode($this->first_name);
        }
        return $this->attributes['photo'];
    }

}
