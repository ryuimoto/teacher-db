@extends('templates.admin.main')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Profile page</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xlg-9 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" class="form-horizontal form-material">
                            @csrf
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Thread Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" placeholder="{{ config("word.first_name.1").config("word.last_name.1")  }}" name="name"
                                        class="form-control p-0 border-0" value="{{ $thread->name }}">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Details</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" name="details" placeholder="{{ config("word.details.1"), }}" class="form-control p-0 border-0" name="details" value="{{ $thread->details }}" id="example-email">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Update Thread</button>
                                </div>
                                <br>
                            </form>
                            <form method="POST">
                                @csrf
                                @method('delete')
                                <div class="col-sm-12">
                                    <button type="button" id="delete" class="btn btn-danger">Delete Thread</button>
                                </div>
                                <div class="modal" tabindex="-1">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">Modal title</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <p>Modal body text goes here.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                            </div>
                            </div>
                
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
@section('script')
<script>
    var myModal = document.getElementById('delete')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
    });
</script>
@endsection