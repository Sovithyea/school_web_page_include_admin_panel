<?php

namespace App\Http\Controllers\Admin;


use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->paginate(8);
        // dd($courses);
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_types = CourseType::all();
        return view('admin.course.create', compact('course_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCourseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::user()->id);
        // dd($request->all());
        $course = new Course();

            $course->title = $request->title;
            $course->price = $request->price;
            $course->duration = $request->duration;
            $course->skill_level = $request->skill_level;
            $course->start_class = $request->start_class;
            $course->course_type_id = $request->course_type;
            $course->description = $request->description;
            // $course->admin_id = $request->Auth::user()->id;
            $course->image = $request->image->store('course', 'public');
        
            // dd($course);

        $course->save();

        return redirect()->to('/admin/course/')->with('message', 'Successfully Create Course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course_types = CourseType::all();
        $course = Course::findOrFail($id);
        return view('admin.course.edit', compact('course', 'course_types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCourseRequest  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, $id)
    {
        // dd($request->all());
        $course = Course::findOrFail($id);
            // dd($course);
            $course->title = $request->title;
            $course->price = $request->price;
            $course->duration = $request->duration;
            $course->skill_level = $request->skill_level;
            $course->start_class = $request->start_class;
            $course->course_type_id = $request->course_type;
            $course->description = $request->description;
            // $course->admin_id = $request->Auth::user()->id;
            if($request->image != '')
            {
                $course->image = $request->image->store('course', 'public');
            }
        
            // dd($course);

        $course->save();

        return redirect()->to('/admin/course/')->with('message', 'Successfully Update Course');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->back()->with('message', 'Successfully Delete Course');
    }

    public function recovery($id)
    {
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->restore();

        return redirect()->back()->with('message', 'Succesfully Restore Course');
    }

    public function forceDelete($id)
    {
        $course = Course::onlyTrashed()->findOrFail($id);
        $course->forceDelete();

        return redirect()->back()->with('message', 'Succesfully Pernamently Delete Course');
    }

    public function trash()
    {
        $courses = Course::onlyTrashed()->get();
        // dd($courses);

        return view('admin.course.trash', compact('courses'));
    }

}
