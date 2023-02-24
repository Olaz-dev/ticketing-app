<x-app-layout>
    <div class="content-wrapper pb-0">
        <div class="container-fluid">
            <div class="card">
             <div class="card-body">
                <div class="col-md-6 grid-margin stretch-card">
                        <div class="card-body">
                        <h4 class="card-title">Ticket Was Created By</h4>
                        <form method="POST"  action="{{ route('ticketassigned.update',$ticketassigned) }}"  class="forms-sample" >
                            @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="Title">Title<span class="text-danger">*</span></label> {{ $ticketassigned->title }}
                                        <input type="text" value="{{ $ticketassigned->title }}"  class="form-control" placeholder="Ticket Title">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="Title">Ticket Description<span class="text-danger">*</span></label>
                                        <input type="text" value="{{ $ticketassigned->text_description }}"  class="form-control" placeholder="Ticket Title">
                                    </div>
                                    @if(!empty($ticketassigned->ticket_image))
                                     <div class="col-md-12 form-group">
                                        <label for="Title">Ticket Description<span class="text-danger">*</span></label>
                                        <img src="{{ asset('uploadedTicketImages/'.$ticketassigned->ticket_image) }}" alt="..." class="rounded float-left">
                                     </div>
                                    @endif
                                    

                                    <input type="text" value="{{ Auth::user()->id }}" hidden name="ticket_attended_to_by" >
                                    <input type="text" value="Closed" hidden name="status" >
                                    <div class="col-md-12 form-group">
                                        <label for="Title">Add Comment<span class="text-danger">*</span></label>
                                        <textarea name="agent_comment"  id="" cols="60" rows="5">{{$ticketassigned->agent_comment }}</textarea>
                                    </div>
                                       <button class="btn btn-primary mr-2">Attend To</button>
                                   
                                    
                                <br>
                                <div class="form-group mt-3">
                                        
                                    
                                </div>
                                <br>
                                <div class="text-center">
                                     
                                </div>
                        </form>
                        </div>
                </div>
             </div>
            </div>
      </div>
    </div>
    
    
</x-app-layout>