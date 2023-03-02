<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Http\Requests\agentCommentRequest;
use App\Models\Ticket;
use App\Models\User;
use App\Models\UserTicket;
use Illuminate\Support\Facades\Auth;

class TicketAssignedController extends Controller
{
    public function index()
    {
        $loggedInUser = Auth::User()->id;
        $ticket_user = UserTicket::where('user_id', $loggedInUser)->get('ticket_id');
        $tickets = Ticket::find($ticket_user);
        $users = User::paginate(15);

        return view('agent.index', compact('tickets'));
    }

    public function edit(Ticket $ticketassigned)
    {
        return view('agent.edit', compact('ticketassigned'));
    }

    public function update(agentCommentRequest $request, Ticket $ticketassigned)
    {
        $ticketassigned->update($request->validated());

        return redirect()->route('ticketassigned.index')->with('success', $ticketassigned->title.' was successful updated');
    }
}
