<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use Illuminate\Http\Request;

class CourseTypeController extends Controller
{
    public function index()
    {
        $course_types = CourseType::orderBy('id', 'desc')->get();
        return view('admin.course_type.index', compact('course_types'));
    }

    public function create()
    {
        return view('admin.course_type.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string']
        ]);

        $course_type = new CourseType();
        $course_type->title = $request->title;
        $course_type->save();

        return redirect()->to('/admin/course-type/')->with('message', 'Successfully Create Course Type');
    }

    public function show($id)
    {
        $course_type = CourseType::find($id);
        return view('admin.course_type.show', compact('course_type'));
    }

    public function edit($id)
    {
        $course_type = CourseType::find($id);
        return view('admin.course_type.edit', compact('course_type'));
    }

    public function update(Request $request, $id)
    {
        $course_type = CourseType::findOrFail($id);
        $request->validate([
            'title' => ['required', 'string']
        ]);

        $course_type->title = $request->title;
        $course_type->save();

        return redirect()->to('/admin/course-type/')->with('message', 'Successfully Update Course Type');
    }

    public function destroy($id)
    {
        $course_type = CourseType::findOrFail($id);
        $course_type->delete();

        return redirect()->to('/admin/course-type/')->with('message', 'Successfully Delete Course Type');
    }
}
