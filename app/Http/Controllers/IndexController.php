<?php

namespace App\Http\Controllers;

use App\Event;
use App\JobApplication;
use App\Mail\ContactMail;
use App\Opening;
use Illuminate\Http\Request;
use Mail;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.index');
    }

    public function showOverview()
    {
        return view('frontend.overview');
    }

    public function showMission()
    {
        return view('frontend.mission');
    }

    public function showCareer(Request $request)
    {

        $openings = Opening::where('status', 1)->paginate(6);
        if ($request->get('job')) {
            $slug           = $request->get('job');
            $active_opening = Opening::where('slug', $slug)->first();
        } else {
            $active_opening = Opening::where('status', 1)->first();
            $slug           = $active_opening ? $active_opening->slug : null;
            return redirect('/career?job=' . $slug);
        }

        return view('frontend.career')
            ->with(compact('openings', 'active_opening'));
    }

    public function applyCareer(Request $request)
    {
        $this->validate($request, [
            'name'           => 'required',
            'email'          => 'required',
            'contact_number' => 'required',
            'message'        => 'required',
            'resume'         => 'required',
        ]);

        $job_application = new JobApplication;

        $job_application->job_title      = $request->input('job_title');
        $job_application->name           = $request->input('name');
        $job_application->email          = $request->input('email');
        $job_application->contact_number = $request->input('contact_number');
        $job_application->message        = $request->input('message');

        //address prrof image store
        $documentfilenamewithextension = $request->file('resume')->getClientOriginalName();
        $documentfilename              = pathinfo($documentfilenamewithextension, PATHINFO_FILENAME);
        $documentextension             = $request->file('resume')->getClientOriginalExtension();
        $documentfilenametostore       = 'resume_' . time() . '.' . $documentextension;
        $request->file('resume')->storeAs('job_applications/', $documentfilenametostore,
            config('voyager.storage.disk', 'public'));
        $document = 'job_applications/' . $documentfilenametostore;

        $job_application->resume = $document;

        $job_application->save();

        return redirect()->back()->with('success-message', 'Submitted Successfully!');

    }

    public function showServices()
    {
        return view('frontend.services');
    }

    public function showFaqs()
    {
        return view('frontend.faqs');
    }

    public function showContact()
    {
        return view('frontend.contact');
    }

    public function submitContactForm(Request $request)
    {
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'message' => 'required',
            'time'    => 'required',
        ]);

        $mail_data            = array();
        $mail_data['name']    = $request->input('name');
        $mail_data['email']   = $request->input('email');
        $mail_data['phone']   = $request->input('phone');
        $mail_data['message'] = $request->input('message');
        $mail_data['time']    = $request->input('time');

        Mail::to('contact@globalstateitsolutions.com')
            ->send(new ContactMail($mail_data));

        return redirect()->back()->with('success-message', 'Thank you for reaching out to us! We will get back to you shortly!');
    }

    public function showHistory()
    {
        return view('frontend.history');
    }

    public function showTestimonial()
    {
        return view('frontend.testimonial');
    }

    public function showLocation()
    {
        return view('frontend.location');
    }

    public function showEvents()
    {
        $events = Event::orderBy('date', 'desc')->paginate(15);
        return view('frontend.events')->with(compact('events'));
    }

    public function readEvent(Request $request)
    {
        $event = Event::where('slug', $request->get('title'))->first();
        if ($event) {
            return view('frontend.event')->with(compact('event'));
        } else {
            return redirect()->back()->with('error-message', 'Event does not exist!');
        }
    }
}
