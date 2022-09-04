<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CourseAssignment extends Model
{
    use HasFactory;

    protected $table = 'course_assignment';
    protected $fillable = ['id','assignmentid','courseid'];

}
