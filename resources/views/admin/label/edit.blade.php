@extends('layouts.app')
@section('content')
    <div class="card-body">
        <h4 class="card-title">Create Label</h4>
        <form method="POST" action="{{ route('label.update', $label) }}" class="forms-sample">
            @csrf
            @method('PUT')

            @include('admin.label.form')

            <button class="mr-2 btn btn-primary"> Submit </button>
        </form>
    </div>
@endsection
