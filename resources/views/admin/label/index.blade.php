@extends('layouts.app')
@section('content')
    <h4 class="card-title">label table</h4>
    <p class="card-description"> <a href="{{ route('label.create') }}">Add Label</a></p>
    @if(Session::has('status'))  {{ Session::get('status') }} @endif
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                    <tr class="table-success">
                    <th>#</th>
                    <th>First name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
            </thead>
        <tbody>
            @foreach ( $labels as $label )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($label->label) }}</td>
                    <td><a href="{{ route('label.edit',$label) }}">Edit</a></td>
                    <td>
                        <form action='{{ route("label.destroy",$label) }}' method="POST"> 
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
