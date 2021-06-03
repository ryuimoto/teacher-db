@extends('templates.admin.main')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ config('name.request_for_deletion') }}</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">ThreadName</th>
                                    <th class="border-top-0">Classification</th>
                                    <th class="border-top-0">TargetUrl1</th>
                                    <th class="border-top-0">TargetUrl2</th>
                                    <th class="border-top-0">TargetUrl3</th>
                                    <th class="border-top-0">Reason</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($request_for_deletes as $request_for_delete_key => $request_for_delete)
                                    <tr data-href="">
                                        <td>{{ $request_for_delete->name }}</td>
                                        <td class="txt-oflo">{{ $request_for_delete->thread_name }}</td>
                                        <td>{{ config("name.classification.$request_for_delete->classification")  }}</td>
                                        <td class="txt-oflo">{{ $request_for_delete }}</td>
                                        <td><span class="text-success"></span></td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection