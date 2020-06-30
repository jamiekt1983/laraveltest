<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobsController extends Controller
{

  public function index()
    {
        $jobs = \App\Jobs::all()
        ->where('jobStatus', "Published")
        ->where('jobDepartment', "!=", "");
        // info($jobs);

        return view('testpage', ['allJobs' => $jobs]);
    }

}
