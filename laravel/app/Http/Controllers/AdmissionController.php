<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function getAll()
    {
        return response()->json();
    }

    public function getBySchool(Request $request, $school)
    {
        return response()->json();
    }

    public function getByStudent(Request $request, $school, $student_id)
    {
        return response()->json();
    }

    public function getByClass(Request $request, $school, $class)
    {
        return response()->json();
    }

    public function getByHash(Request $request, $hash)
    {
        return response()->json();
    }

    public function new(Request $request)
    {
        return response()->json();
    }

    public function deleteByHistoryId(Request $request, $school, $student_id)
    {
        return response()->json();
    }

}
