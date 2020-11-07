<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'course';
    protected $fillable = [
        'id',
        'name',
        'date',
        'content',
        'program',
        'location',
        'num_student',
        'status'
    ];
    public $timestamps = false;
    public function teachers()
    {
        return $this->hasMany('App\Teacher');
    }
}
