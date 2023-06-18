<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Seance;

class SeanceController extends BaseController
{
    public function index(Request $request)
    {
        $date = $request->input('date');
        $seances = Seance::with('hall', 'movie')->whereDate('datetime', $date)->get();
        return view('seance', ['seances' => $seances, 'date' => $date]);
    }
}
