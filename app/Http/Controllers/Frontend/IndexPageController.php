<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTicketRequest;
use App\Models\Category;
use App\Models\Label;
use App\Models\Priority;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\NewTicketNotification;
use Illuminate\Support\Facades\Notification;

class IndexPageController extends Controller
{
    public function index()
    {
        return view('frontpage.index.index');
    }

    public function create()
    {
        $categories = Category::all();
        $labels = Label::all();
        $priorities = Priority::all();

        return view('frontpage.index.create', compact('labels', 'categories', 'priorities'));
    }

    public function store(CreateTicketRequest $request)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('ticket_image')) {
            $file = $request->file('ticket_image');
            $fileName = $file->getClientOriginalName();
            $destinationPath = public_path('/uploads/ticketImages');
            $file->move($destinationPath, $fileName);

            $validatedData['ticket_image'] = "/uploads/ticketImages/$fileName";
        }

        $ticket = Ticket::create($validatedData);
        $ticket->labels()->attach($request->validated('label'));
        $ticket->categories()->attach($request->validated('category'));

        $user = User::where('role_as', '3')->get();
        Notification::send($user, new NewTicketNotification($ticket));

        return to_route('index.index')->with('success', 'Ticket Submited. Our Agents will soon revert.');
    }
}
