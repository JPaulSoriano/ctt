<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $departments = Department::latest()->paginate(5);
        return view('departments.index',compact('departments'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required'
        ]);
    
        Department::create($request->all());
    
        return redirect()->route('departments.index')
                        ->with('success','Department added successfully.');
    }
}
