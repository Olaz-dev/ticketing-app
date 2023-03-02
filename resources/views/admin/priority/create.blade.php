@extends('layouts.app')
@section('content')
    <h4 class="card-title">Create Priority</h4>
    <form method="POST" action="{{ route('priority.store') }}" class="forms-sample">
        @csrf
        <div class="form-group">
        <input type="text" name="priority" class="form-control"  placeholder="Category Name">
        </div>
        <div class="form-group">
        <div class="form-check form-check-flat form-check-primary">
        <label class="form-check-label">
        </div>
        <button class="btn btn-primary mr-2"> Submit </button>
    </form>
@endsection