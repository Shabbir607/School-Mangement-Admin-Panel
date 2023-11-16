<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link  href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"  rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function() {
            
            $('#approveBookingForm').dataTable();
            $('#approveCctvForm').dataTable();
            $('#approveLeaveForm').dataTable();
            $('#approvePresentForm').dataTable();
            $('#approvePurchasForm').dataTable();
            $('#approveRequestForm').dataTable();
            $('#approveStationaryForm').dataTable();
            $('#bookingForm').dataTable();
            $('#brokenReport').dataTable();
            $('#cctvForm').dataTable();
            $('#ImportReport').dataTable();
            $('#LeaveForm').dataTable();
            $('#presentTable').dataTable();
            $('#proBillimport').dataTable();
            $('#proBrand').dataTable();
            $('#procategories').dataTable();
            $('#proImport').dataTable();
            $('#proItem').dataTable();
            $('#proUnits').dataTable();
            $('#purchaseForm').dataTable();
            $('#RefoundReport').dataTable();
            $('#rejbookingForms').dataTable();
            $('#rejcctvForm').dataTable();
            $('#rejLeaveForms').dataTable();
            $('#rejPresentForm').dataTable();
            $('#rejpurchaseForm').dataTable();
            $('#rejrequestForms').dataTable();
            $('#rejstationaryForms').dataTable();
            $('#requestForms').dataTable();
            $('#SalesReport').dataTable();
            $('#sApprove').dataTable();
            $('#sBillimport').dataTable();
            $('#sBrand').dataTable();
            $('#sBroken').dataTable();
            $('#sCategory').dataTable();
            $('#sImport').dataTable();
            $('#sitem').dataTable();
            $('#sRefund').dataTable();
            $('#sSale').dataTable();
            $('#stationaryForms').dataTable();
            $('#SummaryReport').dataTable();
            $('#sUnit').dataTable();
            $('#setLang').dataTable();

        });
    </script>
  
    <script>
        function validateTime(input) {
            const timePattern = /^([01]?[0-9]|2[0-3]):[0-5]?[0-9](:[0-5]?[0-9])?$/;
            const errorMessage = document.getElementById("errorMessage");
            const [hours, minutes, seconds] = input.value.split(':').map(Number);

             if (hours > 12 || minutes > 59 || (seconds && seconds > 59)) {
                errorMessage.textContent = "Hours must be 12 or below, and Minutes/Seconds must be 59 or below.";
                input.value = ""; // Clear the input value if it's invalid
            } else {
                errorMessage.textContent = "";
            }
        }
    </script>
  @include('ApproveForm.partials.style')
</head>
<!---<body class="hold-transition sidebar-mini layout-fixed">-->
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">

  <!-- Preloader -->
 <!--- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dashboard-assets/dist/img/AdminLTELogo.png')}}" alt="Logo" height="60" width="60">
  </div>-->

  <!-- Navbar -->
  @include('ApproveForm.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('ApproveForm.partials.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  @include('ApproveForm.partials.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('ApproveForm.partials.script')


</body>
</html>
