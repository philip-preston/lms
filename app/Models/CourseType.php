<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseType extends Model {
    use SoftDeletes;

    protected $table = 'course_type';

    // Relationships
    public function courses() {
        return $this->hasMany('App\Models\Course');
    }
}
