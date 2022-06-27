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
            'create', 'store'
        ]]);
    }

    public function index()
    {
        $tempids = Registration::whereNull('temp_id')->whereNull('or_no')->whereNull('perma_id')->paginate(2);
        $ornos = Registration::whereNotNull('temp_id')->whereNull('or_no')->whereNull('perma_id')->paginate(2);
        $permaids = Registration::whereNotNull('temp_id')->whereNotNull('or_no')->whereNull('perma_id')->paginate(2);
        $completed = Registration::whereNotNull('temp_id')->whereNotNull('or_no')->whereNotNull('perma_id')->paginate(2);
        $registrations = Registration::all();
        return view('registrations.index',compact('tempids', 'ornos', 'permaids', 'registrations', 'completed'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'gender' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'civil_status' => 'required',
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
        $courses = Course::all();
        $search = $request->input('status');
        $registrations = Registration::query()->where('reg_ref', '=', "{$search}")->get();
        return view('registrations.status', compact('registrations', 'courses'));
    }


    public function tempid(Request $request, Registration $registration)
    {
        $registration->temp_id = $request->temp_id;
        $registration->save();
        // return redirect()->route('registrations.index');
        return back();
    }

    public function orno(Request $request, Registration $registration)
    {
        $registration->or_no = $request->or_no;
        $registration->save();
        // return redirect()->route('registrations.index');
        return back();
    }

    public function permaid(Request $request, Registration $registration)
    {
        $registration->perma_id = $request->perma_id;
        $registration->save();
        // return redirect()->route('registrations.index');
        return back();
    }


    
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
            'civil_status' => 'required',
            'phone_no' => 'required',
            'email' => 'required',
            'address' => 'required',
            'last_school' => 'required',
        ]);
  
        $registration->update($request->all());
  
        return back()->with('success','Edit Successful');
    }
  

}
