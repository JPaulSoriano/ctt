<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicYear;

class AcademicYearController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $academicyears = AcademicYear::latest()->paginate(5);
        return view('academicyears.index',compact('academicyears'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('academicyears.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);
    
        AcademicYear::create($request->all());
    
        return redirect()->route('academicyears.index')
                        ->with('success','Academic Year added successfully.');
    }
}
