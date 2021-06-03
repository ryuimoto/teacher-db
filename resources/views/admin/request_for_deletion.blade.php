@extends('templates.admin.main')
@section('js')
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin/request_for_deletion.css') }}">
@endsection
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
                                    @php
                                        $url_arr = [];
                                        foreach(\App\Library\AdminView::convertArray($request_for_delete->urls) as $url_key => $url_value) {
                                            $url_arr[] = $url_value;
                                        }
                                    @endphp

                                    <tr data-href="{{ route('admin.request_for_deletion_details',['request_for_deletion' => $request_for_delete]) }}">
                                        <td>{{ $request_for_delete->name }}</td>
                                        <td class="txt-oflo">{{ $request_for_delete->thread_name }}</td>
                                        <td>{{ config("name.classification.$request_for_delete->classification") }}</td>
                                        <td class="txt-oflo">{{ $url_arr[0] }}</td>
                                        <td class="txt-oflo">{{ $url_arr[1] }}</td>
                                        <td class="txt-oflo">{{ $url_arr[2] }}</td>
                                        <td><span class="text-success">{{ $request_for_delete->delete_reason }}</span></td>
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
@section('script')
    <script>
        $('tr[data-href]').addClass('clickable')
            .click(function (e) {
            if (!$(e.target).is('a')) {
                window.location = $(e.target).closest('tr').data('href');
            };
        });
    </script>
@endsection