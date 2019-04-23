<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class ShowImageFiles extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $files = File::extIs('.jpg')->get();

        return view('files.index', ['files' => $files]);
    }
}
