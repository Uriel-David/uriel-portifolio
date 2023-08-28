<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadCv extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return response()->download(storage_path('app/public/CV_24-08-23.pdf'));
    }
}
