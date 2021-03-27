<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $appends = ['name'];
    protected $fillable = [
        'first_name',
        'last_name',
        'approved',
        'article_title',
        'name_of_author',
        'author_2',
        'other_authors',
        'article_type',
        'subject_area',
        'article',
        'article_2',
        'article_3',
        'email',
        'phone',
        'state',
        'country',
        'city',
    ];

    public function getNameAttribute(){
        return $this->first_name . ' '. $this->last_name;
    }
}
