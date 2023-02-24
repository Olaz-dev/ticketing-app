<?php

namespace App\Http\Controllers\Agent;

use App\Models\User;

use App\Models\user_ticket;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\agentCommentRequest;

class TicketAssignedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $loggedInUser = Auth::User()->id;
        $ticket_user = user_ticket::where('user_id',$loggedInUser)->get('ticket_id');
        $tickets = Ticket::find($ticket_user);
        $users = User::all();
        return view('agent.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Ticket $ticketassigned)
    {
       
        
       
       
        return view('agent.edit',compact('ticketassigned'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(agentCommentRequest $request, Ticket $ticketassigned)
    {
        
     
      $ticketassigned->update($request->validated()); 
     

   
        return redirect()->route('ticketassigned.index')->with('success',$ticketassigned->title.' was successful updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}