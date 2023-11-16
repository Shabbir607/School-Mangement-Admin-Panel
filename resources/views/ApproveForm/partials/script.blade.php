<!-- jQuery -->
<!-- <script src="{{asset('dashboard-assets/plugins/jquery/jquery.min.js')}}"></script> -->
<!-- jQuery UI 1.11.4 -->
<!-- <script src="{{asset('dashboard-assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<!--<script src="{{asset('dashboard-assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>-->
<!-- ChartJS -->
<!--<script src="{{asset('dashboard-assets/plugins/chart.js/Chart.min.js')}}"></script>-->
<!-- Sparkline -->
<!--<script src="{{asset('dashboard-assets/plugins/sparklines/sparkline.js')}}"></script>-->
<!-- JQVMap -->
<!--<script src="{{asset('dashboard-assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>-->
<!-- jQuery Knob Chart -->
<!-- <script src="{{asset('dashboard-assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>-->
<!-- daterangepicker -->
<!--<script src="{{asset('dashboard-assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/daterangepicker/daterangepicker.js')}}"></script>-->
<!-- Tempusdominus Bootstrap 4 -->
<!--<script src="{{asset('dashboard-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>-->
<!-- Summernote -->
<!--<script src="{{asset('dashboard-assets/plugins/summernote/summernote-bs4.min.js')}}"></script>-->
<!-- overlayScrollbars -->
<!--<script src="{{asset('dashboard-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>-->
<!-- AdminLTE App -->
<!--<script src="{{asset('dashboard-assets/dist/js/adminlte.js')}}"></script>-->
<!-- AdminLTE for demo purposes -->
<!--<script src="{{asset('dashboard-assets/dist/js/demo.js')}}"></script>-->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="{{asset('dashboard-assets/dist/js/pages/dashboard.js')}}"></script>-->
<!-- Vendor JS -->
<script src="{{asset('dashboard-assets/src/js/vendors.min.js')}}"></script>
	<script src="{{asset('dashboard-assets/src/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('dashboard-assets/assets/icons/feather-icons/feather.min.js')}}"></script>
	
	<script src="{{asset('dashboard-assets/assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}"></script>
	
	<!-- CRMi App -->
	<script src="{{asset('dashboard-assets/src/js/template.js')}}"></script>
	<script src="{{asset('dashboard-assets/src/js/pages/dashboard.js')}}"></script>




<!-- DataTables  & Plugins -->
<!-- <script src="{{asset('dashboard-assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/pdfmake/vfs_fonts.js')}}"></script>


<script src="{{asset('dashboard-assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('dashboard-assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
      $("#userTable").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#userTable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
</script> -->
@yield('js')
