<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class SeatsInfoController extends BaseController
{
    public function seatsInfo(Request $request)
    {
        $status = $request->input('status');
        if ($status === "Забронирован") {
            $statusID = 1;
        } elseif ($status === "Выкуплен") {
            $statusID = 2;
        } elseif ($status === "Свободен") {
            $statusID = 3;
        } else {
            throw new \Exception("Wrong Status");
        }

        $seatsInfo = Place::select('place.row', 'place.number', 'hall.name AS hall_name', 'cinema.name AS cinema_name')
            ->leftJoin('ticket', 'place.ID', '=', 'ticket.ID')
            ->leftJoin('hall', 'place.ID_hall', '=', 'hall.ID')
            ->leftJoin('cinema', 'hall.ID_cinema', '=', 'cinema.ID')
            ->where('ticket.ID_status', $statusID)
            ->get();

        return view('seats', compact('seatsInfo', 'status'));
    }
}
