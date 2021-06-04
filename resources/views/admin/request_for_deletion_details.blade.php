@extends('templates.admin.main')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">DetailsPage</h4>
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
                                <label class="col-md-12 p-0">Classification</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <p>{{ config("name.classification.$request_for_deletion->classification") }}</p>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">Name</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <p>{{ $request_for_deletion->name }}</p>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">ThreadName</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <p>{{ $request_for_deletion->thread_name }}</p>
                                </div>
                            </div>
                            @php
                                $url_arr = [];
                                foreach(\App\Library\AdminView::convertArray($request_for_deletion->urls) as $url_key => $url_value) {
                                    $url_arr[] = $url_value;
                                }
                            @endphp
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">TagetUrl1</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <a href="{{ $url_arr[0] }}" target=”_blank”>{{ $url_arr[0] }}</a>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">TagetUrl2</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <a href="{{ $url_arr[1] }}" target=”_blank”>{{ $url_arr[1] }}</a>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0">TagetUrl3</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <a href="{{ $url_arr[2] }}" target=”_blank”>{{ $url_arr[2] }}</a>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="example-email" class="col-md-12 p-0">Reason</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <p>{{ $request_for_deletion->delete_reason }}</p>
                                </div>
                            </div>
                            <form method="POST">
                                @csrf
                                @method('delete')
                                <div class="col-sm-12">
                                    <button type="button" id="delete" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">DeleteRequest</button>
                                </div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete the thread?</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                       
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-danger">Delete</button>
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