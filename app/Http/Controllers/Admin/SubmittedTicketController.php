<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TicketAgentAssignedRequest;
use App\Models\Priority;

class SubmittedTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
      

        return view('admin.ticket.index',compact('tickets'));
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
    public function show($ticket)
    {
        //show was purposely used here to test if I can attach from show and not from edit.
        $agents = User::where('role_as','=','3')->get();
        $ticket = Ticket::find($ticket);
        $priority = Priority::where('id',$ticket->priority)->first();
        return view('admin.ticket.show',compact('ticket','priority','agents'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TicketAgentAssignedRequest $request, Ticket $ticket)
    {
        
        $ticket->update($request->validated());
       $ticket->users()->attach($request->input('agent'));
        
        return redirect()->route('tickets.index')->with('success','Agent Assigned');
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