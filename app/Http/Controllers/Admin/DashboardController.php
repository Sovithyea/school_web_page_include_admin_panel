<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CourseType;
use App\Models\Event;
use App\Models\StudyTip;

class DashboardController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $course_types = CourseType::all();
        $study_tips = StudyTip::all();
        $events = Event::all();

        return view('admin.dashboard', compact('courses', 'course_types', 'study_tips', 'events'));
    }
}
