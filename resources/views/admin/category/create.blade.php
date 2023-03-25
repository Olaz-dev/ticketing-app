@extends('layouts.app')
@section('content')
    <h4 class="card-title">Create Category</h4>
    <form method="POST" action="{{ route('category.store') }}" class="forms-sample">
        @csrf
        @include('admin.category.form')
        <button class="mr-2 btn btn-primary"> Submit </button>
    </form>
@endsection
