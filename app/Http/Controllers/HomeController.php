<?php

namespace App\Http\Controllers;
use App\Models\Announcement;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();// Retrieve all announcements from the database
        return view('tenants.home', compact ('announcements'));
    }

    public function ownerDashboard()
    {
        return view('business_owner.owner_dashboard');
    }
}
