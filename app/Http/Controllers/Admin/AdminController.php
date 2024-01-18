<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Contact;
use App\Models\CourseEnq;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    public function contactInfo()
    {
        $contacts = Contact::paginate(5);
        return view('admin.contact', compact('contacts'));
    }

    public function courseEnquiry()
    {
        $courseEnquiry = CourseEnq::paginate(5);;

        foreach ($courseEnquiry as &$enquiry) {
            $enquiryCourse = json_decode($enquiry->course, true);
            $enquiry->course = $enquiry->course == 'null' ? "None" : implode(",", $enquiryCourse);
        }
        return view('admin.course', compact('courseEnquiry'));
    }

    public function admissions()
    {
        $admissions = Admission::paginate(5);
        return view('admin.admissions', compact('admissions'));
    }

    public function gallery()
    {
        $galleries = Gallery::where('status','active')->paginate(5);
        return view('admin.gallery', compact('galleries'));
    }

    public function showAddImage()
    {
        return view('admin.add-image');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'image_name' => 'required|mimes:jpg,webp|max:2048',
        ]);

        $file = $request->file('image_name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        $fileRecord = new Gallery([
            'image_name' => $fileName,
            'path' => $filePath,
        ]);

        $fileRecord->save();

        return Redirect::route('admin.add-image')->with(['message' => 'File uploaded successfully',]);
    }


    public function edit($id)
    {
        return view('admin.edit-image', compact('id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'image_name' => 'required|mimes:jpg,webp|max:2048',
        ]);

        $file = $request->file('image_name');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        $fileRecord = Gallery::find($id);
        $fileRecord->image_name = $fileName;
        $fileRecord->path = $filePath;
        $fileRecord->save();

        return Redirect::route('admin.gallery')->with(['message' => 'File updated and uploaded successfully',]);
    }


    public function delete($id)
    {
        $fileRecord = Gallery::find($id);
        $fileRecord->delete();
        return Redirect::route('admin.gallery')->with(['message' => 'File Deleted successfully',]);
    }
}
