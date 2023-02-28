<?php

namespace App\Http\Controllers\Agent;

use App\Models\User;

use App\Models\user_ticket;
use App\Models\Ticket;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\agentCommentRequest;

class TicketAssignedController extends Controller
{
   
     public function index()
    {
        $loggedInUser = Auth::User()->id;
        $ticket_user = user_ticket::where('user_id',$loggedInUser)->get('ticket_id');
        $tickets = Ticket::find($ticket_user);
        $users = User::paginate(15);
        return view('agent.index',compact('tickets'));
    }

    public function edit( Ticket $ticketassigned)
    {
        return view('agent.edit',compact('ticketassigned'));
    }

    public function update(agentCommentRequest $request, Ticket $ticketassigned)
    {

      $ticketassigned->update($request->validated()); 
     return redirect()->route('ticketassigned.index')->with('success',$ticketassigned->title.' was successful updated');

    }
    
}