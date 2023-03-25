@extends('layouts.app')

@section('title', 'Create Category')

@section('content')
    <div class="card-body">
        <h4 class="card-title">Create Category</h4>
        <form method="POST" action="{{ route('category.update', $category) }}" class="forms-sample">
            @csrf
            @method('PUT')

            @include('admin.category.form')

            <button class="mr-2 btn btn-primary"> Submit </button>
        </form>
    </div>
@endsection
