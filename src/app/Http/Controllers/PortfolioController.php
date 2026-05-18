<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();

        $contact = Contact::first();

        return view('welcome', compact(
            'projects',
            'contact'
        ));
    }
}