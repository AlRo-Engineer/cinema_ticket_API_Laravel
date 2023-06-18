<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Routing\Controller as BaseController;

class CinemaController extends BaseController
{
    public function index()
    {
        return view('cinema', ['cinemas' => Cinema::all()]);
    }

}
