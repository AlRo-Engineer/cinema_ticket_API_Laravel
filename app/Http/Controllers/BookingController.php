<?php

namespace App\Http\Controllers;


use App\Models\Ticket;

class BookingController extends Controller
{
    public function buy($ticketId)
    {
        $ticket = Ticket::find($ticketId);

        if (!$ticket) {
            return view('ticket-buy', ['message' => 'not OKay!']);
        }

        $statusId = 2;

        $ticket->ID_status = $statusId;
        $ticket->save();

        return view('ticket-buy', ['message' => 'OKay!']);
    }
}

