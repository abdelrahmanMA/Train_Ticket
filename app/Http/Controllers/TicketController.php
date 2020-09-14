<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Requests\TicketFilterRequest;

class TicketController extends Controller
{
    public function show(TicketFilterRequest $request)
    {
        $tickets = Ticket::with('user');
        if ($request->has('id') && !empty($request->input('id'))) {
            $tickets = $tickets->find($request->id);
            $tickets = [$tickets];
        }else{
            // $tickets = $tickets->paginate(25);
            if ($request->has('from_date') && !empty($request->input('from_date'))) {
                $tickets = $tickets->where('date', '>=', $request->from_date);
            }
            if ($request->has('to_date') && !empty($request->input('to_date'))) {
                $tickets = $tickets->where('date', '<=', $request->to_date);
            }
            $tickets = $tickets->simplePaginate(25);
        }

        return view("list_tickets",compact('tickets'));
    }
}
