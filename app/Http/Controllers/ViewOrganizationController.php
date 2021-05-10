<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class ViewOrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::all();
        return view('view_organization.view_organization',
        ['organizations'=>$organizations]);
    }
}
