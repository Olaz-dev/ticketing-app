<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Label;
use App\Models\Ticket;
use App\Models\Category;
use App\Models\Priority;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTicketRequest;
use App\Notifications\NewTicketNotification;
use Illuminate\Support\Facades\Notification;
use App\Listeners\SendTicketsCreatedNotification;

class IndexPageController extends Controller
{
    public function index()
    {
        return view('frontpage.index.index');
    }

    public function create()
    {
        $labels = Label::all();
        $categories = Category::all();
        $priorities = Priority::all();

        return view('frontpage.index.create',compact('labels','categories','priorities'));
    }

    public function store(CreateTicketRequest $request)
    {
        if(!empty($request->validated('ticket_image'))){
          $imageName = time().".".$request->validated('ticket_image')->extension();
          $request->validated('ticket_image')->move(public_path('uploadedTicketImages'),$imageName);
             $ticket =Ticket::create($request->validated(),$imageName);
        }else{
             $ticket =Ticket::create($request->validated());
             $user = User::where('role_as', '3')->get(); 
             Notification::send($user, new NewTicketNotification($ticket));
        }
         
        $ticket->labels()->attach($request->validated('label'));
        $ticket->categories()->attach($request->validated('category'));
        
        return redirect()->route('index.index')->with("success","Ticket Submited Our Agents Would Get Back To  You Soon");
    }


}