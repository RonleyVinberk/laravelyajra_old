@extends('template.master')

@section('discount_content')
{{-- start page-content-wrapper --}}
<div class="page-content-wrapper">
    {{-- start page-content --}}
    <div class="page-content">
        {{-- start page-bar --}}
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{route('dashboard.index')}}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Master Data</span>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Discounts</span>
                </li>
            </ul>
        </div>
        {{-- end page-bar --}}

        {{-- start page-title --}}
        <h3 class="page-title">
            Discounts <small>reports</small>
        </h3>
        {{-- end page-title --}}

        {{-- Display alert danger when server can't process request --}}
        @if (session('notification_danger_store'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_danger_store') }}
        </div>
        @endif

        @if (session('notification_danger_delete'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_danger_delete') }}
        </div>
        @endif

        @if (session('notification_danger_update'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_danger_update') }}
        </div>
        @endif
        
        <!-- Display alert success when successfully store data -->
        @if (session('notification_success_store'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_success_store') }}
        </div>
        @endif

        @if (session('notification_success_delete'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_success_delete') }}
        </div>
        @endif

        @if (session('notification_success_update'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
            {{ session('notification_success_update') }}
        </div>
        @endif
        
        <a class="btn btn-primary" role="button" href="{{route('discounts.create')}}"><i class="fa fa-plus"></i> Create</a>
        
        {{-- start row --}}
        <div class="row margin-top-10">
            {{-- start start col --}}
            <div class="col-md-12 col-sm-12">
                {{-- start tabbable --}}
                <div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
                    <!-- start portlet box-blue -->
                    <div class="portlet box blue">
                        <!-- start portlet-title -->
                        <div class="portlet-title">
                            <!-- start caption -->
                            <div class="caption">
                                <i class="fa fa-th-list"></i>
                                <span class="caption-subject uppercase">Discounts</span>
                            </div>
                            <!-- end caption -->
                        </div>
                        <!-- end portlet-title -->

                        <!-- start portlet-body -->
                        <div class="portlet-body flip-scroll">
                            <table class="table table-striped table-bordered table-hover" id="diskon_table">
                                <thead class="flip-content">
                                    <tr>
                                        <th></th>
                                        <th>Jumlah</th>
                                    </tr>
                                    <tbody></tbody>
                                </thead>
                            </table>
                            <script id="diskon_detail" type="text/x-handlebars-template">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <td style="width: 10%">Diskon:</td>
                                        <td>@{{jumlah}}%</td>
                                    </tr>
                                </table>
                            </script>
                        </div>
                        <!-- end portlet-body -->
                    </div>
                    <!-- end portlet box-blue -->
                </div>
                {{-- end tabbable --}}
            </div>
            {{-- end col --}}
        </div>
        {{-- end row --}}
    </div>
    {{-- end container-fluid --}}
</div>
{{-- end page content --}}
@endsection