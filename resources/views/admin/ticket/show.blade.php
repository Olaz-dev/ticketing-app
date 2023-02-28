@extends('layouts.app')
@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card-body">
        <h4 class="card-title">Create Category</h4>
        <form method="POST"  action="{{ route('tickets.update',$ticket) }}"  class="forms-sample" >
            @csrf
            @method('PUT')
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="Title">Title<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $ticket->title }}" name="title" class="form-control" placeholder="Ticket Title">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="Title">Ticket Description<span class="text-danger">*</span></label>
                        <input type="text" value="{{ $ticket->text_description }}" name="title" class="form-control" placeholder="Ticket Title">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="Title">Poirity<span class="text-danger">*</span></label>
                        <input type="text"  disabled value="{{ $priority->priority}}" name="title" class="form-control" placeholder="Ticket Title">
                    </div>
                    <div class="col-md-12 form-group">
                        <label for="Title">Category<span class="text-danger">*</span></label>
                        <input type="text"  disabled @foreach ($ticket->categories as $category )value="{{ $category->name }}"@endforeach  name="title" class="form-control" placeholder="Ticket Title">
                        
                    </div>
                    <input type="text" hidden name="status" value="Processing">
                    <div class="col-md-12 form-group">
                        <label for="Title">Label<span class="text-danger">*</span></label>
                        <input type="text"  disabled @foreach ($ticket->labels as $label )value="{{ $label->label }}"@endforeach  name="title" class="form-control" placeholder="Ticket Title">
                    </div>
                    @if ($ticket->status == "open")
                        <div class="col-md-12 form-group">
                            <label for="Title">Agent Available<span class="text-danger">*</span></label>
                            <select class="form-control" name="agent" >
                                <option > Select Agent</option>
                                @foreach ($agents  as $agent )
                                        <option  value="{{ $agent->id }}">{{ ucfirst($agent->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                    @else
                    <div class="col-md-12 form-group">
                        <label for="Title">Ticket Assigned To<span class="text-danger">*</span></label>
                        <input type="text"  disabled @foreach ($ticket->users as $assigned )value="{{ $assigned->name }}"@endforeach   name="title" class="form-control" placeholder="Ticket Title">
                        
                    </div>
                    @endif
                    
                <br>
                <div class="form-group mt-3">
                        
                    
                </div>
                <br>
                <div class="text-center">
                      @if ($ticket->status == "Processing")
                         <a href="{{ route('tickets.index') }}"><button  class="btn btn-warning">Back To Home </button></a>
                      @else
                        <button type="submit" class="btn btn-warning"> Assign Agent </button>
                      @endif  
                </div>
        </form>
        </div>
@endsection
                
             