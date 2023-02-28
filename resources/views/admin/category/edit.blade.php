@extends('layouts.app')
@section('content')
           <div class="card-body">
              <h4 class="card-title">Create Category</h4>
              <form method="POST" action="{{ route('category.update',$category) }}" class="forms-sample">
                  @csrf
                  @method('PUT')
              
                  <div class="form-group">
                  <input type="text" value="{{ $category->name }}" name="name" class="form-control"  placeholder="Category Name">
                  </div>
                  <div class="form-group">
                  <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                  </div>
                  <button class="btn btn-primary mr-2"> Submit </button>
              </form>
            </div>
@endsection