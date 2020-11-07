<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';
    protected $fillable = [
        'class_id',
        'teacher_id',
        'status',
    ];
    public $timestamps = false;
    
}
