@extends('templates.admin.main')
@section('js')
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/admin/threads.css') }}">
@endsection
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">{{ config('name.threads') }}</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="d-md-flex mb-3">
                        <h3 class="box-title mb-0">Threads</h3>
                        <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                            <select class="form-select shadow-none row border-top">
                                <option>March 2021</option>
                                <option>April 2021</option>
                                <option>May 2021</option>
                                <option>June 2021</option>
                                <option>July 2021</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Details</th>
                                    <th class="border-top-0">Num Of Comments</th>
                                    <th class="border-top-0">Momentum</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($threads as $thread_key => $thread)
                                    <tr data-href="{{ route('admin.thread',['thread'=> $thread]) }}">
                                        <td>{{ $thread_key +1 }}</td>
                                        <td class="txt-oflo">{{ $thread->name }}</td>
                                        <td>{{Str::limit($thread->details, 60, '…' )}}</td>
                                        <td class="txt-oflo">{{ $thread->num_of_comments }}</td>
                                        <td><span class="text-success">{{ $thread->momentum }}</span></td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        {{ $threads->links() }}
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