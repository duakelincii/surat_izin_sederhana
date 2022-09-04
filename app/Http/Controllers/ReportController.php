<?php

namespace App\Http\Controllers;

use App\Models\CourseAssignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        return view('report.index');
    }

    public function read()
    {
        $data = DB::table('course_assignment')
                ->leftjoin('assignment', 'course_assignment.assignmentid', '=', 'assignment.id')
                ->leftjoin('course', 'course_assignment.courseid', '=', 'course.id')
                ->select('course_assignment.*', 'assignment.assignmentname', 'course.coursename')
                ->get();
        return view('report.read')->with([
            'data' => $data
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['courseid'] = $request->courseid;
        $data['assignmentid'] = $request->assignmentid;
        CourseAssignment::insert($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = CourseAssignment::findOrFail($id);
        return view('report.edit')->with([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = CourseAssignment::findOrFail($id);
        $data->courseid = $request->courseid;
        $data->assignmentid = $request->assignmentid;
        $data->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = CourseAssignment::findOrFail($id);
        $data->delete();
    }
}
