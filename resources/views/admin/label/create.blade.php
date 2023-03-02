@extends('layouts.app')
@section('content')
  <div class="card-body">
    <h4 class="card-title">Create Label</h4>
    <form method="POST" action="{{ route('label.store') }}" class="forms-sample">
        @csrf
        <div class="form-group">
          <input type="text" name="label" class="form-control"  placeholder="Label Name">
        </div>
        <div class="form-group">
          <div class="form-check form-check-flat form-check-primary">
            <label class="form-check-label">
          </div>
        <button class="btn btn-primary mr-2"> Submit </button>
    </form>
  </div>
</div>
@endsection
 