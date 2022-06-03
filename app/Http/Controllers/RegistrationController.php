<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
use App\Course;
use App\AcademicYear;


class RegistrationController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => [
            'create', 'store', 'status'
        ]]);
    }

    public function index()
    {
        $registrations = Registration::latest()->paginate(5);
  
        return view('registrations.index',compact('registrations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required',
            'enrollment_type' => 'required',
            'course_id' => 'required',
            'year' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'address' => 'required',
            'last_school' => 'required',
        ]);
  
        $input = $request->all();

        do{
            $ref = mt_rand(1000000000, 9999999999);
            $exists = Registration::where('reg_ref', $ref)->exists();
         }while($exists);
 
         $input['reg_ref'] = $ref;
         $input['academic_year_id'] = AcademicYear::latest()->first()->id;


     
         $registration = Registration::create($input);
   
         return redirect('/qrcode/'.$registration->id);
    }

    public function create()
    {
        $courses = Course::all();
        return view('registrations.create', compact('courses'));
    }


    public function status(Request $request){
        // Get the search value from the request
        $search = $request->input('status');
    
        // Search in the title and body columns from the posts table
        $registrations = Registration::query()
            ->where('reg_ref', '=', "{$search}")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('registrations.status', compact('registrations'));
    }
}
