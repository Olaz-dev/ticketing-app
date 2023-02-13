<x-app-layout>
    <div class="content-wrapper pb-0">
        <div class="container-fluid">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card-body">
                    <h4 class="card-title">Create Priority</h4>
                    <form method="POST" action="{{ route('priority.update',$priority) }}" class="forms-sample">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <input type="text" value="{{ $priority->priority }}" name="priority" class="form-control"  placeholder="priority Name">
                            </div>
                            <div class="form-group">
                                <div class="form-check form-check-flat form-check-primary">
                                    <label class="form-check-priority">
                                </div>
                                <button class="btn btn-primary mr-2"> Submit </button>
                            </div>
                 </form>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>