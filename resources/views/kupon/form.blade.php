@extends('template.master')

@section('coupon_content')
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
                    <a href="{{route('coupons.index')}}">Coupons</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Create</span>
                </li>
            </ul>
        </div>
        {{-- end page-bar --}}

        {{-- start page-title --}}
        <h3 class="page-title">
                Coupons <small>reports</small>
        </h3>
        {{-- end page-title --}}

        {{-- Display alert warning when validation --}}
        @foreach($errors->all() as $message)
		<div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
			{{$message}}
		</div>
		@endforeach
        
        {{-- start row --}}
        <div class="row margin-top-10">
            {{-- start col --}}
            <div class="col-md-12 col-sm-12">
                {{-- start tabbable --}}
                <div class="tabbable tabbable-custom tabbable-noborder tabbable-reversed">
                    <div class="portlet box blue">
                        {{-- start portlet-title --}}
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="fa fa-info"></i>
                                <span class="caption-subject uppercase">Coupon Information</span>
                            </div>
                            {{-- <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                <a href="javascript:;" class="reload"></a>
                                <a href="javascript:;" class="remove"></a>
                            </div> --}}
                        </div>
                        {{-- end portlet-title --}}

                        {{-- start portlet-body form --}}
                        <div class="portlet-body form">
                            {{-- start form --}}
                            {{Form::open(['route' => 'coupons.store', 'class' => 'form-horizontal no-padding no-margin'])}}
                            <div class="form-actions top">
                                <div class="btn-set pull-right">
                                    <button type="submit" class="btn green" id="kupon_btn_store">Save</button>
                                    <button type="reset" class="btn yellow">Reset</button>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Jumlah</label>
                                    <div class="col-md-3">
                                        {{Form::text('jumlah', NULL, ['id' => 'kupon_jumlah_store', 'class'=> 'form-control'])}}
                                    </div>
                                </div>
                            </div>
                            {{Form::close()}}
                            {{-- end form --}}
                        </div>
                        {{-- end portlet-body form --}}
                    </div>
                    {{-- end portlet --}}
                </div>
                {{-- end tabbable --}}
            </div>
            {{-- end col --}}
        </div>
        {{-- end row --}}
    </div>
    {{-- end page-content --}}
</div>
{{-- end page content-wrapper --}}
@endsection