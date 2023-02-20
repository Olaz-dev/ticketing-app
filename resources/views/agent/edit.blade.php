<x-app-layout>
    <div class="content-wrapper pb-0">
        <div class="container-fluid">
            <div class="card">
             <div class="card-body">
                <div class="col-md-6 grid-margin stretch-card">
                        <div class="card-body">
                        <h4 class="card-title">Ticket Was Created By {{ $users->name }}</h4>
                        <form method="POST"  action=""  class="forms-sample" >
                            @csrf
                            @method('PUT')
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <label for="Title">Title<span class="text-danger">*</span></label>
                                        <input type="text" value="{{ $ticket_edit->title }}" name="title" class="form-control" placeholder="Ticket Title">
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="Title">Ticket Description<span class="text-danger">*</span></label>
                                        <input type="text" value="{{ $ticket_edit->text_description }}" name="title" class="form-control" placeholder="Ticket Title">
                                    </div>
                                    @if(!empty($ticket_edit->ticket_image))
                                     <div class="col-md-12 form-group">
                                        <label for="Title">Ticket Description<span class="text-danger">*</span></label>
                                        <img src="{{ asset('uploadedTicketImages/'.$ticket_edit->ticket_image) }}" alt="..." class="rounded float-left">
                                     </div>
                                    @endif
                                    

                                    
                                    <div class="col-md-12 form-group">
                                        <label for="Title">Add Comment<span class="text-danger">*</span></label>
                                        <textarea name="" id="" cols="60" rows="5"></textarea>
                                    </div>

                                   
                                    
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