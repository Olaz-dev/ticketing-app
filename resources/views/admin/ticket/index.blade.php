@extends('layouts.app')
    @section('content')
        <h4 class="card-title">Submitted  Tickets</h4>
        @if(Session::has('status'))  {{ Session::get('status') }} @endif
        <div class="table-responsive">
                <table class="table table-dark">
                <thead>
                    <tr class="table-success">
                    <th></th>
                    {{-- <th>Submitted By</th> --}}
                    <th>Ticket Title</th>
                    {{-- <th>Ticket Created By</th> --}}
                    <th>Ticket Body</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Show</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ( $tickets as $ticket )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        {{-- <td>{{ $user->name }}</td> --}}
                        <td>{{ ucfirst($ticket->title)  }}</td>
                        <td>{{ ucfirst($ticket->text_description)  }}</td>
                        @foreach ($ticket->categories as $category )
                            <td> {{ $category->name }}</td>
                        @endforeach
                        <td> <button  @if ($ticket->status == "open") class="btn btn-sm btn-danger" @elseif($ticket->status == "Closed") class="btn btn-sm btn-success" @else class="btn btn-sm btn-warning"  @endif>{{ ucfirst($ticket->status) }}</button></td>
                        <td><a  class="btn btn-sm  btn-primary" href="{{ route('tickets.show',$ticket) }}">Show</a></td>
                        <td>
                            <form action='{{ route("tickets.destroy",$ticket) }}' method="POST"> 
                                @csrf 
                                @method('DELETE') 
                                <button class="btn btn-sm btn-primary" type="submit" onclick="return confirm('Are You Sure?')">Delete</button> 
                            </form> 
                        </td>
                    </tr>
                @empty
                 <tr>
                    <td>{{  __("No Tickets Found") }}</td>
                 </tr>
                @endforelse
                </tbody>
                </table>
        </div>
    @endsection 
