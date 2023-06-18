<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Routing\Controller as BaseController;
class HallController extends BaseController
{
    public function index() {
        return view('hall', ['halls' => Hall::all()]);
    }

}
