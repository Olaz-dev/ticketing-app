@extends('layouts.app')
@section('content')
    <h4 class="card-title">priority table</h4>
    <p class="card-description"> <a href="{{ route('priority.create') }}">Add priority</a></p>
    @if(Session::has('status'))  {{ Session::get('status') }} @endif
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                    <tr class="table-success">
                    <th>#</th>
                    <th>Priority name</th>
                    <th>Time Created</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
            </thead>
        <tbody>
            @foreach ( $priorities as $priority )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($priority->priority) }}</td>
                    <td>{{ $priority->created_at->diffForHumans() }}</td>
                    <td><a href="{{ route('priority.edit',$priority) }}">Edit</a></td>
                    <td>
                        <form action='{{ route("priority.destroy",$priority) }}' method="POST"> 
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
@endsection