<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('main.main');
    }

    public function read()
    {
        $data = DB::table('course_assignment')
                ->leftjoin('assignment', 'course_assignment.assignmentid', '=', 'assignment.id')
                ->leftjoin('course', 'course_assignment.courseid', '=', 'course.id')
                ->select('course_assignment.*', 'assignment.assignmentname', 'course.coursename')
                ->get();

    $assignment = DB::table('course_assignment')
                ->join('course', 'course_assignment.courseid', '=', 'course.id')
                 ->whereNotExists(function ($query) {
                    $query->select(DB::raw(1))
                          ->from('assignment')
                          ->whereColumn('course_assignment.assignmentid','assignment.id');
                })->select('course_assignment.*','course.coursename')
                ->get();

    $course = DB::table('course_assignment')
                ->join('assignment', 'course_assignment.assignmentid', '=', 'assignment.id')
                 ->whereNotExists(function ($query) {
                    $query->select(DB::raw(1))
                          ->from('course')
                          ->whereColumn('course_assignment.courseid','course.id');
                })->select('course_assignment.*','assignment.assignmentname')
                ->get();

        return view('main.read',compact('data','course','assignment'));
    }
}
