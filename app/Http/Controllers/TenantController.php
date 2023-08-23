<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantController extends Controller
{
    public function index()
    {

        $tenants = Tenant::with('user', 'property')->get();
        $totalTenants = Tenant::count();


        return view('business_owner.tenants', ['tenants' => $tenants, 'totalTenants' => $totalTenants]);
    }



}
