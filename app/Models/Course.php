<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model {
    use SoftDeletes;

    protected $table = 'course';

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // Relationships
    public function courseType() {
        return $this->belongsTo('App\Models\CourseType');
    }
}
