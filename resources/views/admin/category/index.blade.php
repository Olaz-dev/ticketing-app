@extends('layouts.app')
@section('content')
        <h4 class="card-title">Category table</h4>
        <p class="card-description"> <a href="{{ route('category.create') }}">Add Category</a></p>
        @if(Session::has('status'))  {{ Session::get('status') }} @endif
        <div class="table-responsive">
            <table class="table table-dark">
            <thead>
                <tr class="table-success">
                <th></th>
                <th>First name</th>
                <th>Edit</th>
                <th>Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ( $categories as $category )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ ucfirst($category->name)  }}</td>
                    <td><a href="{{ route('category.edit',$category) }}">Edit</a></td>
                    <td>
                        <form action='{{ route("category.destroy",$category) }}' method="POST"> 
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