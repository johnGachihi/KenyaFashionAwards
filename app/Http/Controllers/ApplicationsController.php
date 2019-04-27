<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function view() {
        return view('admin.applications');
    }
}
