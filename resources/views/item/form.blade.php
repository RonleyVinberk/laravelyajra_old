@extends('template.master')

@section('item_content')
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
                    <a href="{{route('items.index')}}">Items</a>
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
            Items <small>reports</small>
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
                                <span class="caption-subject uppercase">Items Information</span>
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
                            {{Form::open(['route' => 'items.store', 'class' => 'form-horizontal no-padding no-margin'])}}
                            <div class="form-actions top">
                                <div class="btn-set pull-right">
                                    <button type="submit" class="btn green" id="item_btn_store">Save</button>
                                    <button type="reset" class="btn yellow">Reset</button>
                                </div>
                            </div>
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Item Category Name</label>
                                    <div class="col-md-3">
                                        <select name="category_barang_id" id="item_cat_barang_id_store" class="form-control">
                                            <option value="">--- Choose Item Category ---</option>
                                            @foreach ($cat_barang_list as $item)
                                                <option value="{{$item->id}}">{{$item->category_barang_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Item Name</label>
                                    <div class="col-md-3">
                                        {{Form::text('barang_name', NULL, ['id' => 'item_barang_name_store', 'class'=> 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Stock</label>
                                    <div class="col-md-2">
                                        {{Form::number('stock', NULL, ['id' => 'item_stock_store', 'class'=> 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Price</label>
                                    <div class="col-md-2">
                                    {{Form::text('price', NULL, ['id' => 'item_price_store', 'class'=> 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Purchase Price</label>
                                    <div class="col-md-2">
                                    {{Form::text('harga_beli', NULL, ['id' => 'item_harga_beli_store', 'class'=> 'form-control'])}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Kupon</label>
                                    <div class="col-md-3">
                                        <select name="kupon_id" id="item_kupon_id_store" class="form-control">
                                            <option value="">--- Choose Coupon Value ---</option>
                                            @foreach ($kupon_list as $item)
                                                <option value="{{$item->id}}">{{$item->jumlah}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Discount</label>
                                    <div class="col-md-3">
                                        <select name="diskon_id" id="item_diskon_id_store" class="form-control">
                                            <option value="">--- Choose Discount Value ---</option>
                                            @foreach ($diskon_list as $item)
                                                <option value="{{$item->id}}">{{$item->jumlah}}%</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Supplier Name</label>
                                    <div class="col-md-3">
                                        <select name="supplier_id" id="item_supplier_id_store" class="form-control">
                                            <option value="">--- Choose Customer ---</option>
                                            @foreach ($supplier_list as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Information</label>
                                    <div class="col-md-3">
                                    {{Form::textarea('information', NULL, ['id' => 'item_information_store', 'class'=> 'form-control', 'rows' => 4])}}
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