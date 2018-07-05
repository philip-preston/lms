<?php
/**
 * Created by PhpStorm.
 * User: preston
 * Date: 6/29/2018
 * Time: 3:04 PM
 */

namespace App\Http\Controllers;


use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    function show(Request $request, Course $course) {
        return view('course.view', ['course' => $course]);
    }
}
