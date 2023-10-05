<?php

namespace App\Http\Controllers;

use App\Jobs\SampleJob;
use Illuminate\Http\Request;

class JobExploreController extends Controller
{
    //
    public function dispatch_a_job(Request $request){
        dispatch(new SampleJob());
        return 'job dispatched successfully';

    }
}
