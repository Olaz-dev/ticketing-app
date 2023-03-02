<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TicketAgentAssignedRequest;
use App\Models\Priority;
use App\Models\Ticket;
use App\Models\User;

class SubmittedTicketController extends Controller
{
    public function index()
    {
        $tickets = Ticket::paginate(15);

        return view('admin.ticket.index', compact('tickets'));
    }

    public function show($ticket)
    {
        //show was purposely used here to test if I can attach from show and not from edit.
        $agents = User::where('role_as', '=', '3')->get();
        $ticket = Ticket::find($ticket);
        $priority = Priority::where('id', $ticket->priority)->first();

        return view('admin.ticket.show', compact('ticket', 'priority', 'agents'));
    }

    public function update(TicketAgentAssignedRequest $request, Ticket $ticket)
    {
        $ticket->update($request->validated());
        $ticket->users()->attach($request->input('agent'));

        return redirect()->route('tickets.index')->with('success', 'Agent Assigned');
    }

    public function delete(Ticket $ticket)
    {
        $ticket->delete();

        return redirect()->route('tickets.index');
    }
}
