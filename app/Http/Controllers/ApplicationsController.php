<?php

namespace App\Http\Controllers;

use App\Events\ApplicationRespondedToEvent;
use App\Events\TestEvent;
use App\Listeners\SendApplicationResponseEmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Application;
use App\Applicant;

class ApplicationsController extends Controller
{
    public function view() {
        $applications = Application::all();

        $pending_applications   = Application::whereNull('decision')->get();
        $approved_applications  = Application::where('decision', 'approved')->get();
        $rejected_applications  = Application::where('decision', 'rejected')->get();

        return view('admin.applications', [
            'applications'          => $applications,
            'pending_applications'  => $pending_applications,
            'approved_applications' => $approved_applications,
            'rejected_applications' => $rejected_applications
        ]);
    }

    public function create(){
        return view ('/contacts');
    }

    public function store(Request $request) {
//        event(new TestEvent('bleble'));
        $this->validate($request, [
            'name' =>'required',
            'company' => 'required',
            'email' => 'required',
            'telephone_number' => 'required',
            'award_category_id' =>'required',
            'bio' => 'required'
        ]);

        $applicant = new Applicant();
        $applicant->name = $request->input('name');
        $applicant->company = $request->input('company');
        $applicant->phone_number = $request->input('telephone_number');
        $applicant->email = $request->input('email');
        $applicant->bio = $request->input('bio');
        $applicant->save();

        $application = new Application();
        $application->applicant_id = $applicant->id;
//        $application->award_category_id = $request->input('category');
        $application->award_category_id = $request->award_category_id;
        $application->save();
        return redirect('/contacts')->with('success', 'Form Submitted');
    }

    public function accept(Request $request, $id) {
        $application = Application::find($id);
        $application->decision = 'approved';
        $application->save();

        event(new ApplicationRespondedToEvent($application, $request));

        return response()->json([
            'error' => false
        ]);
    }

    public function reject(Request $request, $id) {
        $application = Application::find($id);
        $application->decision = 'rejected';
        $application->save();

        event(new ApplicationRespondedToEvent($application, $request));

        return response()->json([
            'error' => false
        ]);
    }
}
