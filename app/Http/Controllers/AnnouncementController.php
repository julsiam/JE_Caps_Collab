<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AnnouncementController extends Controller
{

    public function addAnnouncement(Request $request)
    {
        $user = Auth::user(); // Retrieve the authenticated user
        $announcement = new Announcement();
        $announcement->user_id = $user->id; // Assign the user's ID to the user_id field
        $announcement->subject = $request->input('subject');
        $announcement->details = $request->input('details');
        $announcement->save();

        return redirect()->route('announcement'); // Redirect to the announcement view page
    }

    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();// Retrieve all announcements from the database

        return view('business_owner.announcement', compact('announcements'));
    }





    //BUSINESS OWNER SEARCH
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $announcements = Announcement::where('subject', 'like', '%' . $keyword . '%')
            ->orWhere('details', 'like', '%' . $keyword . '%')
            ->get();

        return view('business_owner.announcement', compact('announcements'));
    }

    //TENANTS SEARCH
    public function search_tenant(Request $request)
    {
        $keyword = $request->input('keyword');

        $announcements = Announcement::where('subject', 'like', '%' . $keyword . '%')
            ->orWhere('details', 'like', '%' . $keyword . '%')
            ->get();

        return view('tenants.home', compact('announcements'));
    }
}
