<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Contact;
use App\Models\CourseEnq;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function courseEnq(Request $request)
    {
       
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'mobile' => 'required',
            'email' => 'required',
            'city' => 'required|string|max:255',
            'course' => 'required|array|size:1',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput(); 
       }
        $courseEnq = new CourseEnq();
        $courseEnq->name = $request->name;
        $courseEnq->email = $request->email;
        $courseEnq->mobile = $request->mobile;
        $courseEnq->city = $request->city;
        $courseEnq->course = json_encode($request->course);
        $courseEnq->save();

        return Redirect::route('home')->with(['message' => 'Course Enquiry Send successfully', 'data' => $courseEnq]);
        
    }

    public function about()
    {
        return view('web.about');
    }


    public function fashionDesigningCourse()
    {
        return view('web.fashion-designing-course');
    }

    public function interiorDesigningCourse()
    {
        return view('web.interior-designing-course');
    }


    public function ourActivities()
    {
        return view('web.our-activities');
    }


    public function gallery()
    {
        $galleries = Gallery::all();
        return view('web.gallery',compact('galleries'));
    }


    public function events()
    {
        return view('web.events');
    }

    public function placements()
    {
        return view('web.placements');
    }

    public function contactUs()
    {
        return view('web.contact-us');
    }

    public function StoreContact(Request $request)
    {
       $contact = Contact::create($request->all());
       return Redirect::route('contact-us')->with(['message' => 'Contact Enquiry Send successfully', 'data' => $contact]);
    }

    public function onlineAdmission()
    {
        return view('web.online-admission');
    }

    
    public function admission(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'middle_name' => 'required',
            'mother_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'marital_status' => 'required',
            'aadhar_number' => 'required',
            'category' => 'required',
            'course' => 'required',
            'address' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput(); 
       } 

        $contact = Admission::create($request->all());
        return Redirect::route('online-admission')->with(['message' => 'Your Admission successfully', 'data' => $contact]);
    }
    
}
