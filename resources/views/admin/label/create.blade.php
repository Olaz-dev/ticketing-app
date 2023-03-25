@extends('layouts.app')
@section('content')
    <div class="card-body">
        <h4 class="card-title">Create Label</h4>
        <form method="POST" action="{{ route('label.store') }}" class="forms-sample">
            @csrf
            @include('admin.label.form')

            <button class="mr-2 btn btn-primary"> Submit </button>
        </form>
    </div>
@endsection
