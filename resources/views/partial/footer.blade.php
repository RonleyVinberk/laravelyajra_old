{{-- start footer --}}
<div class="page-footer">
    {{-- start page-footer-inner --}}
    <div class="page-footer-inner">
		   <?= date('Y') ?> &copy; Metronic by keenthemes.
	  </div>
    {{-- end page-footer-inner --}}

    {{-- start scroll-to-top --}}
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
    {{-- end scroll-to-top --}}
</div>
{{-- end footer --}}

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="{{asset('global/plugins/jquery.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery-migrate.min.js')}}"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('global/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery.blockui.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery.cokie.min.js')}}"></script>
<script src="{{asset('global/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{asset('global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{asset('global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('global/plugins/flot/jquery.flot.min.js')}}"></script>
<script src="{{asset('global/plugins/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{asset('global/plugins/flot/jquery.flot.categories.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery.pulsate.min.js')}}"></script>
<script src="{{asset('global/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('global/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{asset('global/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('global/plugins/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
<script src="{{asset('global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.1/handlebars.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('global/scripts/metronic.js')}}"></script>
<script src="{{asset('admin/layout/scripts/layout.js')}}"></script>
<script src="{{asset('admin/layout/scripts/quick-sidebar.js')}}"></script>
<script src="{{asset('admin/layout/scripts/demo.js')}}"></script>
<script src="{{asset('admin/pages/scripts/tasks.js')}}"></script>
{{-- <script src="{{asset('global/scripts/datatable.js')}}"></script> --}}
<script src="{{asset('admin/pages/scripts/index.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<!-- BEGIN CUSTOM LEVEL SCRIPTS -->
<script src="{{asset('admin/layout/scripts/custom/item_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/sales_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/coupon_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/discount_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/item_cat_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/customer_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/supplier_ajax.js')}}"></script>
<script src="{{asset('admin/layout/scripts/custom/purchase_ajax.js')}}"></script>
<!-- END CUSTOM LEVEL SCRIPTS -->

<script>
jQuery(document).ready(function() {
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   QuickSidebar.init(); // init quick sidebar
   Demo.init(); // init demo features
   // TableAjax.init();
   Demo.init(); // init demo features
   Index.init();
   Index.initDashboardDaterange();
   Index.initJQVMAP(); // init index page's custom scripts
   Index.initCalendar(); // init index page's custom scripts
   Index.initCharts(); // init index page's custom scripts
   Index.initChat();
   Index.initMiniCharts();
   Tasks.initDashboardWidget();
});
</script>
<!-- END JAVASCRIPTS -->