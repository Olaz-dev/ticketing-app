<x-app-layout>
    
        <div class="content-wrapper pb-0">
        <div class="card">
        <div class="card-body">
        <h4 class="card-title">Ticket Assigned To You</h4>
        <p class="card-description"> <a href="">Add Category</a></p>
       
        <div class="table-responsive">
            <table class="table table-dark">
            <thead>
                <tr class="table-success">
                <th></th>
                <th>Ticket Title</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $tickets as $ticket )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($ticket->title)  }}</td>
                    <td><a href="{{ route('ticketassigned.edit',$ticket) }}">Edit</a></td>
                    <td>
                        <form action='' method="POST"> 
                            @csrf 
                            @method('DELETE') 
                            <button type="submit" onclick="return confirm('Are You Sure?')">Delete</button> 
                      </form> 
                    </td>
                </tr>
           @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

    
     
</x-app-layout>