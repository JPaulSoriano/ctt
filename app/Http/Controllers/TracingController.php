<?php

namespace App\Http\Controllers;
use App\Tracing;
use App\TimeVisit;
use App\Mail\ContactTracingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class TracingController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => ['index','show']]);
    }
    
    public function index(){
        $registrations = Tracing::all();
        return view('tracings.index',compact('registrations'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function today()
    {
        $today = TimeVisit::whereDate('created_at', '=', date('Y-m-d'))->get();
        return view('tracings.today', compact('today'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function scanned()
    {
        $scanned = TimeVisit::all();
        return view('tracings.scanned', compact('scanned'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(){
        return view('tracings.create');
    }

    public function store(Request $request){

        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'street' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);
  

        $tracing = Tracing::create($request->all());

        Mail::to($request->email)->send(new ContactTracingMail($tracing));

        return redirect('/qrcode/'.$tracing->id);
    }

    public function show(Tracing $tracing){

        $tracing->timeVisit()->create();
        return view('tracings.show',compact('tracing'));


    }
    
    public function destroy(Tracing $tracing){

        $tracing->delete();
        return redirect()->route('tracings.index')
                        ->with('success','Tracing deleted successfully');

    }
}
