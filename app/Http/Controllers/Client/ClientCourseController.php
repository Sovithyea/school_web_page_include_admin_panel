<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;

class ClientCourseController extends Controller
{
    public function index(Request $request)
    {
        $course_type = $request->c;
        $courses = Course::all();
        $query = Course::query();
        if($course_type) 
        {
            $query->where('course_type_id', $course_type);
        }
        $course_types = CourseType::all();
        $courses = $query->orderBy('id', 'desc')->paginate(6);
        return view('client.pages.course.index', compact('courses', 'course_types'));
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        $similars = Course::where('course_type_id', $course->course_type_id)->where('id' , "!=" , $course->id)->get();
        // dd($similars);
        return view('client.pages.course.show', compact('course', 'similars'));
    }
}
